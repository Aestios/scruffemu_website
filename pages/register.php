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
				if($_POST['pass'] == $_POST['pass2']) {
			$ip = $_SERVER['REMOTE_ADDR'];
			$datecreate = date("d~m~Y", strtotime('now'));
			$pseudo = $_POST['pseudo'];
			$compte = $_POST['compte'];
			$passazerty = hash('sha512', $_POST['pass']);
			$email = $_POST['mail'];
			$question = $_POST['question'];
			$reponse = $_POST['reponse'];
			$heureactuelle = date("Y-m-d H:i:s");
			
			$C_Comptes = $dB1->query('SELECT * FROM accounts WHERE account="'.$compte.'"');
			$numbCompte = $C_Comptes->rowCount();
			if($numbCompte != 0) { echo '<div class="alert alert-danger" role="alert"><strong>Error while signing in...</strong> The account name already exist.</div>';
			} else {
			
			$C_Pseudos = $dB1->query('SELECT * FROM accounts WHERE pseudo="'.$pseudo.'"');
			$numbP = $C_Pseudos->rowCount();
			if($numbP != 0) { echo '<div class="alert alert-warning" role="alert"><strong>Error while signing in...</strong> The pseudo name already exist.</div>';
			} else {
			    $exec = $dB1->query('INSERT INTO accounts (guid, account, pass, banned, bannedTime, pseudo, question, reponse, lastConnectionDate, lastIP, friends, enemy, vip, reload_needed, logged, votes, totalVotes, subscribe, heurevote, points, muteTime, muteRaison, mutePseudo, image, email, lastVoteIP, showOrHide, showOrHidePos, dateRegister, lastConnectDay, rules, admin) VALUES ("0", "'.$compte.'", "'.$passazerty.'", "0", "0", "'.$pseudo.'", "'.$question.'", "'.$reponse.'", "0", "'.$ip.'", "", "", "0", "0", "0", "0", "0", "0", "1", "0", "0", "", "", "0", "'.$email.'", "'.$ip.'", "0", "0", "'.$datecreate.'", "", "1", "0")') or die('<div class="alert alert-warning" role="alert">Une erreur est suvenue lors de l\'inscription.</div>');
                
				echo '<div class="alert alert-success" role="alert"><center><strong>Congratulations !</strong> You are now registered on <strong>Herofus</strong>.</center></div>';
			}
			}
			} else { echo '<div class="alert alert-danger" role="alert"><strong>Error while signing in...</strong> Passwords are not same.</div>'; }
			}
			?>
			<div class="well" style="width: 50%; margin: auto; margin-top: 0px;">
<form action="#ins" method="POST">
    <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
      <input type="text" class="form-control" name="compte" placeholder="Enter your Account Name" required>
    </div><br />
	<div class="input-group">
	<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
<input type="password" class="form-control" name="pass" placeholder="Enter your Password" required>
	</div></br>
	<div class="input-group">
	<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
    <input type="password" class="form-control" name="pass2" placeholder="Confirm your Password" required>
	</div><br />
    <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
      <input type="text" class="form-control" name="pseudo" placeholder="Enter your account NickName" required>
    </div><br />
    <div class="input-group">
      <div class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></div>
      <input type="email" class="form-control" name="mail" placeholder="Enter your Email Address" required>
    </div>
	<hr />
	<div class="input-group">
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
      <input type="text" class="form-control" name="question" placeholder="Enter your Secret Question" required>
    </div><br />
	<div class="input-group">
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
      <input type="text" class="form-control" name="reponse" placeholder="Enter your Secret Answer" required>
    </div>
	<hr />
	 <div class="checkbox">
    <label>
      <input type="checkbox" required> I accept the <a href="#">Terms of Service</a> and the <a href="#">Regulation</a> of <strong>Herofus</strong>
    </label>
  </div><br />
   <button type="submit" class="btn btn-default" name="submit" style="width: 100%;">Check the fields and validate my registration</button>
</form>
			</div>