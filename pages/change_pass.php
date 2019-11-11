<?php if(isset($_SESSION['id'])) { ?>		<div class="content" style="margin-top: 30px;">
			<div class="wrap">
			<?php 
			if(isset($_POST['submit'])) {
								if(isset($_GET['passw'])) {
					echo $non_valide;
					}
					else {
				if($_POST['passnews'] == $_POST['passnews2']) {
					if($_POST['answer'] == $_SESSION['reponse']) {
			$passold = hash('sha512', $_POST['passold']);
			$req = $dB1->prepare('SELECT * FROM accounts WHERE guid = '.$_SESSION['id'].'');
			$req->execute();
			while($pass7 = $req->fetch()) {
				if($passold == $pass7['pass']) {
					$change_psw = $dB1->prepare('UPDATE accounts SET pass = ? WHERE guid = '.$_SESSION['id'].'');
					$change_psw->BindParam(1, hash('sha512', $_POST['passnews']), PDO::PARAM_STR);
					$change_psw->execute();
					echo '<div class="alert alert-success" role="alert"><strong>Félicitations !</strong> Votre nouveau mot de passe est correctement installé.</div>'; 
					} else { echo '<div class="alert alert-danger" role="alert"><strong>Erreur lors du changement...</strong> Le mot de passe actuel renseigné est faux.</div>'; }
					}
			} else { echo '<div class="alert alert-danger" role="alert"><strong>Erreur lors du changement...</strong> La réponse secrète n\'est pas la bonne. Attention aux majuscules.</div>'; }
			} else { echo '<div class="alert alert-danger" role="alert"><strong>Erreur lors du changement...</strong> Les deux mots de passes (nouveau + confirmation) sont différents.</div>'; }
			} }
			?>
			<div class="well" style="width: 50%; margin: auto; margin-top: 0px;">
<form action="#change" method="POST">
    <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
      <input type="password" class="form-control" name="passold" placeholder="Enter your current password" required>
    </div><br />
	 <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
      <input type="text" class="form-control" name="answer" placeholder="Enter your secret answer" required>
    </div>
	<hr />
		 <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
      <input type="password" class="form-control" name="passnews" placeholder="Type your new password" required>
    </div>
	<br />
	<div class="input-group">
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
      <input type="password" class="form-control" name="passnews2" placeholder="Retype your new password" required>
    </div>
	<hr />
   <button type="submit" class="btn btn-default" name="submit" style="width: 100%;">change my password</button>
</form>
			</div>
<?php } else { echo '<div class="content" style="margin-top: 30px;">
			<div class="wrap"><div class="alert alert-danger" role="alert"><strong>Attention !</strong> Vous tentez d\'entrer dans une partie qui est réservée aux membres connectés.</div></div></div>';
include('connexion.php'); } ?>