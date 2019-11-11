		<div class="content" style="margin-top: 30px;">
			<div class="wrap">
			
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
			
			 if(isset($_POST['submit'])) {
			$compte = $_POST['compte'];
			$pass = hash('sha512', $_POST['pass']);
			$C_Comptes = $dB1->query('SELECT * FROM accounts WHERE account="'.$compte.'"'); 
			$numbCompte = $C_Comptes->rowCount();
			if($numbCompte == 0) { echo '<div class="alert alert-danger" role="alert"><center><strong>Error while logging in...</strong> Account name is wrong.</center></div>';
			} else {
					$verif_pass = $dB1->query('SELECT * FROM accounts WHERE account="'.$compte.'" AND pass="'.$pass.'"');
					$pass_n = $verif_pass->rowCount();
					if($pass_n != 0) {
						$conn = $dB1->query('SELECT * FROM accounts WHERE account="'.$compte.'" AND pass="'.$pass.'"');
						while($data = $conn->fetch()) {
						$_SESSION['id'] = $data['guid'];
						$_SESSION['HeureVote'] = $data['heurevote'];
						$_SESSION['login'] = $data['account'];
						$_SESSION['pseudo'] = $data['pseudo'];
						$_SESSION['mail'] = $data['email'];
						$_SESSION['question'] = $data['question'];
						$_SESSION['reponse'] = $data['reponse'];
						$_SESSION['role'] = $data['level'];
						$_SESSION['vip'] = $data['vip'];
						echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php?p=home">';
						echo '<div class="alert alert-success" role="alert"><center><strong>Congratulations !</strong> You will be redirected.</center></div>';
						}
						} else {
				echo '<div class="alert alert-danger" role="alert"><strong>Error while logging in...</strong> Password doesn\'t match.</div>';
			}
			} 
			}
			?>
			<div class="well" style="width: 50%; margin: auto; margin-top: 0px;">
<form action="#ins" method="POST">
    <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
      <input type="text" class="form-control" name="compte" placeholder="Enter your Username" required>
    </div><br />
    <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
      <input type="password" class="form-control" name="pass" placeholder="Enter your Password" required>
    </div>
	<hr />
   <button type="submit" class="btn btn-default" name="submit" style="width: 100%;">Connect me</button>
</form>
			</div>