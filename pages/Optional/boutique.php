<?php if(isset($_SESSION['id'])) {
	
$points = $serveur['POINTS_ACHAT']; 
$points_VIP = $serveur['POINTS_ACHAT_VIP'];?>
<div class="content" style="margin-top: 30px;">
<div class="wrap">
<form action="#b" method="POST"><center><strong><h3><b><font style="font-size: 20px">
Faîtes un don à Oméga et gagnez <?php  if($_SESSION['vip'] == 0) { echo $points; } else { echo $points_VIP; } ?> points !
</font></b></h3></strong></center><br />
<center><strong><h3><b><font style="font-size: 17px" color="darkred">Attention rentrez le code dans le barre en dessous de la fenêtre Starpass !</font></b></h3></strong></center>
<div id="starpass_360010"></div><script type="text/javascript" src="http://script.starpass.fr/script.php?idd=360010&amp;verif_en_php=1&amp;datas="></script><noscript>Veuillez activer le Javascript de votre navigateur s'il vous pla&icirc;t.<br /><a href="http://www.starpass.fr/">Micro Paiement StarPass</a></noscript>
<br />
<center><h3><b>Entrez le code ici:</h3></b></center>
<center><input type="text" style="width: 40%" name="code1" class="form-control" /></center> <br />
<center><input type="submit" name="submit" class="btn btn-default" value="Valider mon don et recevoir les points" /></center>
</form>

<?php
if (isset($_POST['submit'])) {
// Déclaration des variables
$ident=$idp=$ids=$idd=$codes=$code1=$code2=$code3=$code4=$code5=$datas=''; 
$idp = 177588; 

// $ids n'est plus utilisé, mais il faut conserver la variable pour une question de compatibilité
$idd = 360010; 
$ident=$idp.";".$ids.";".$idd;
// On récupère le(s) code(s) sous la forme 'xxxxxxxx;xxxxxxxx'
if(isset($_POST['code1'])) $code1 = $_POST['code1']; 
if(isset($_POST['code2'])) $code2 = ";".$_POST['code2']; 
if(isset($_POST['code3'])) $code3 = ";".$_POST['code3']; 
if(isset($_POST['code4'])) $code4 = ";".$_POST['code4']; 
if(isset($_POST['code5'])) $code5 = ";".$_POST['code5']; 
$codes=$code1.$code2.$code3.$code4.$code5; 
// On récupère le champ DATAS
if(isset($_POST['DATAS'])) $datas = $_POST['DATAS']; 
// On encode les trois chaines en URL
$ident=urlencode($ident);
$codes=urlencode($codes);
$datas=urlencode($datas);

/* Envoi de la requête vers le serveur StarPass
Dans la variable tab[0] on récupère la réponse du serveur
Dans la variable tab[1] on récupère l'URL d'accès ou d'erreur suivant la réponse du serveur */
$get_f=@file( "http://script.starpass.fr/check_php.php?ident=$ident&codes=$codes&DATAS=$datas" ); 
if(!$get_f) 
{ 
exit( "Erreur n°18. " ); 
} 
$tab = explode("|",$get_f[0]);

if(!$tab[1]) $url = "http://omegaserveurbeta.esy.es/index.php?p=buy"; 
else $url = $tab[1]; 

// dans $pays on a le pays de l'offre. exemple "fr"
$pays = $tab[2]; 
// dans $palier on a le palier de l'offre. exemple "Plus A"
$palier = urldecode($tab[3]); 
// dans $id_palier on a l'identifiant de l'offre
$id_palier = urldecode($tab[4]); 
// dans $type on a le type de l'offre. exemple "sms", "audiotel, "cb", etc.
$type = urldecode($tab[5]); 
// vous pouvez à tout moment consulter la liste des paliers à l'adresse : http://script.starpass.fr/palier.php

// Si $tab[0] ne répond pas "OUI" l'accès est refusé
// On redirige sur l'URL d'erreur
if( substr($tab[0],0,3) != "OUI" ) 
{ 
       echo '<div class="content" style="margin-top: 30px;">
<div class="wrap"><div class="alert alert-danger" role="alert"><center><strong>Attention !</strong> Code invalide.</center></div></div></div>'; 
       exit; 
} 
else 
{ 
       /* Le serveur a répondu "OUI" 

       On place un cookie appelé Success_Sp et qui vaut la valeur 1 
       Ce cookie est valide jusqu'à ce que l'internaute ferme son navigateur 
       Dans les pages suivantes, nous testerons l'existence du cookie 
       S'il existe, c'est que l'internaute est autorisé, 
       sinon on le renverra sur une page d'erreur */ 
       //setCookie( "Success_Sp", "1", 0 ); 
	   if($_SESSION['vip'] == 0) 
{ 
$dB1->query("UPDATE Accounts SET tokens = tokens + $points WHERE Id = '".$_SESSION['id']."'");
$dB1->query('INSERT INTO donate_logs (id, name, buy, code, moyen, date) VALUES ("", "'.$_SESSION['login'].'", "'.$serveur['POINTS_ACHAT'].'", "'.$code.'", "Starpass", "'.date("d-m-Y").'")');
echo '<br /><div class="alert alert-success" role="alert"><center>Vous avez fais un don au serveur ! Vous gagnez '.$points.' points !</ center></div>';

} 
else 
{	
$dB1->query("UPDATE Accounts SET tokens = tokens + $points_VIP WHERE Id = '".$_SESSION['id']."'");
$dB1->query('INSERT INTO donate_logs (id, name, buy, code, moyen, date) VALUES ("", "'.$_SESSION['login'].'", "'.$serveur['POINTS_ACHAT_VIP'].'", "'.$code.'", "Starpass", "'.date("d-m-Y").'")');
echo '<br /><div class="alert alert-success" role="alert"><center>Vous avez fais un don au serveur ! Vous gagnez '.$points_VIP.' points !</ center></div>';

}
       // Si vous avez plusieurs documents, nommer le cookie plutôt 'code'+iDocumentId 

       // vous pouvez afficher les variables de cette façon : 
       // echo "idd : $idd / codes : $codes / datas : $datas / pays : $pays / palier : $palier / id_palier : $id_palier / type : $type"; 

} 

}
} else { 
echo '<div class="content" style="margin-top: 30px;">
<div class="wrap"><div class="alert alert-danger" role="alert"><strong>Attention !</strong> Vous ne gagnerez pas de points si vous n\'êtes pas connecté au site.</div></div></div>';
include('connexion.php'); } ?>
			