<?php
if(isset($_GET['lock']) AND is_numeric($_GET['lock']))
{
	$v = $dB1->query('SELECT * FROM tickets WHERE Id = '.$_GET['lock'].'');
	while($d = $v->fetch())
	{
		if($d['AccountId'] == $_SESSION['id'] or $_SESSION['role'] > 1)
		{
			$l = $dB1->prepare('UPDATE tickets SET Etat = 1 WHERE Id = '.$_GET['lock'].'');
			$l->execute();
			echo '<div class="alert alert-success" role="alert">The ticket n°'.$_GET['lock'].' is now closed.</div>';
		}
	}
}
if(isset($_POST['submit']))
{
	$crea = $dB1->prepare('INSERT INTO tickets (AccountId, Title, Date, Text, Etat) VALUES (?, ?, now(), ?, ?)');
	$crea->BindValue(1, $_SESSION['id'], PDO::PARAM_STR);
	$crea->BindValue(2, $_POST['titre'], PDO::PARAM_STR);
	$crea->BindValue(3, $_POST['text'], PDO::PARAM_STR);
	$crea->BindValue(4, 2, PDO::PARAM_STR);
	$crea->execute();
	echo '<div class="alert alert-success" role="alert">You opened the ticket "'.$_POST['titre'].'".</div>';
}
?>