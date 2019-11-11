<?php if(isset($_SESSION['id']))
{
?>
<div class="content" style="margin-top: 30px;">
	<div class="wrap">
<?php 
if(isset($_GET['id']) AND is_numeric($_GET['id']))
{
	$v = $dB1->query('SELECT Id,AccountId,Title,DATE_FORMAT(Date, \'%d/%m/%Y at %H:%i\') AS Date,Text,Etat FROM tickets WHERE Id = '.$_GET['id'].'');
	while($d = $v->fetch())
	{
		if($d['AccountId'] == $_SESSION['id'] or $_SESSION['role'] > 1)
		{
			if($_SESSION['role'] > 1)
			{
				$reqSaw = $dB1->exec('UPDATE tickets SET SawMj = 0 WHERE Id = '.$_GET['id'].'');
			}
			if($d['AccountId'] == $_SESSION['id'])
			{
				$reqSaw = $dB1->exec('UPDATE tickets SET Saw = 0 WHERE Id = '.$_GET['id'].'');
			}
			if(isset($_POST['submit']))
			{
				$add = $dB1->prepare('INSERT INTO tickets_reponses (TicketId, Author, Text, Date) VALUES (?, ?, ?, now())');
				$add->BindValue(1, $d['Id'], PDO::PARAM_STR);
				$add->BindValue(2, $_SESSION['pseudo'], PDO::PARAM_STR);
				$add->BindValue(3, $_POST['text'], PDO::PARAM_STR);
				$add->execute();
				if($_SESSION['role'] > 1)
				{
					$reqSaw1 = $dB1->exec('UPDATE tickets SET Saw = 1 WHERE Id = '.$_GET['id'].'');
				}
				if($d['AccountId'] == $_SESSION['id'])
				{
					$reqSaw1 = $dB1->exec('UPDATE tickets SET SawMj = 1 WHERE Id = '.$_GET['id'].'');
				}
				echo '<div class="alert alert-success" role="alert">Reply added.</div>';
				$ch = $dB1->exec('UPDATE tickets SET Etat = 2 WHERE Id = ' . $_GET['id'] . '');
			}
?>
		<span style="float: right;"><a class="btn btn-default" href="index.php?p=my_tickets&lock=<?php echo $d['Id']; ?>" role="button">Close this ticket</a></span>
		<div class="clear"></div><br />
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><strong><?php echo $d['Title']; ?></strong> <span style="float: right">Sent to the support the <?php echo  $d['Date']; ?></span></h3>
			</div>
			<div class="panel-body">
 <?php echo $d['Text']; ?>
			</div>
		</div>
<?php 
			$r = $dB1->query('SELECT * FROM tickets_reponses WHERE TicketId = '.$d['Id'].' ORDER BY Id');
			while($rc = $r->fetch())
			{
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><strong><?php echo $rc['Author']; ?> (RE : <?php echo $d['Title']; ?>)</strong> <span style="float: right">Reply Sent the <?php echo  $rc['Date']; ?></span></h3>
			</div>
			<div class="panel-body">
<?php echo $rc['Text']; ?>
			</div>
		</div>
<?php
			}
?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Post a new reply</h3>
			</div>
			<div class="panel-body">
				<form action="#rep" method="POST">
					<textarea style="width: 100%;height: 100px;" name="text" class="form-control" required placeholder="Enter here your reply..."></textarea><br />
					<input type="submit" class="btn btn-default" name="submit" value="Send the reply" />
				</form>
			</div>
		</div>
<?php
		}
	}
}

}
else
{ 
include('connexion.php');
}
?>
			