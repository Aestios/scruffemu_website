<body>
<?php 
$proxy_headers = array(
        'HTTP_VIA',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED',
        'HTTP_CLIENT_IP',
        'HTTP_FORWARDED_FOR_IP',
        'VIA',
        'X_FORWARDED_FOR',
        'FORWARDED_FOR',
        'X_FORWARDED',
        'FORWARDED',
        'CLIENT_IP',
        'FORWARDED_FOR_IP',
        'HTTP_PROXY_CONNECTION'
    );
    foreach($proxy_headers as $x){
        if (isset($_SERVER[$x])) die("VPN/Proxy detected !");
    }
	if(isset($_SESSION['id'])) {
		?>

<?php
$code = isset($_POST['code']) ? preg_replace('/[^a-zA-Z0-9]+/', '', $_POST['code']) : '';
if( empty($code) ) {
}
else {
  $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=52b1d2d9d9d4810be1cb9efabd8e6a74&private_key=71cc7024d49e159f96b49d1283a6337960a31002&code=' . $code);
  $dedipass = json_decode($dedipass);
  if($dedipass->status == 'success') {
    // Le transaction est validée et payée.
    // Vous pouvez utiliser la variable $virtual_currency
    // pour créditer le nombre de Vote Points.
    $virtual_currency = $dedipass->virtual_currency;
	$payout = $dedipass->payout;
$dB1->query("UPDATE accounts SET points = points + $virtual_currency WHERE guid = '".$_SESSION['id']."'");
$dB1->query('INSERT INTO payment_logs (id, name, buy, code, way, payout, date) VALUES ("", "'.$_SESSION['login'].'", "'.$virtual_currency.'", "'.$code.'", "Dedipass", "'.$payout.'", "'.date("d-m-Y h:i:s").'")');
echo '<br /><div class="alert alert-success" role="alert"><center>You earned '.$virtual_currency.' Vote Points !</ center></div>';
  }
  else {
    // Le code est invalide
    echo 'The code '.$code.' is incorrect.';
  }
} ?>
<div data-dedipass="52b1d2d9d9d4810be1cb9efabd8e6a74" data-dedipass-custom=""></div> <?php
	} else { 
include('connexion.php'); } ?>
<script src="//api.dedipass.com/v1/pay.js"></script>
</body>
			