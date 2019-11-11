<?php if(isset($_SESSION['id']))
{
?>
<div class="content" style="margin-top: 30px;">
	<div class="wrap">
<?php
	include_once("pages/my_tickets_add_lock.php")
?>
		<div role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="preSentation" class="active"><a href="#tickets" aria-controls="tickets" role="tab" data-toggle="tab">My tickets</a></li>
				<li role="preSentation"><a href="#tclos" aria-controls="tclos" role="tab" data-toggle="tab">My closed tickets</a></li>
				<li role="preSentation" style="float: right;"><a href="#tnews" aria-controls="tnews" role="tab" data-toggle="tab">Open a new ticket</a></li>
			</ul>
			<br />
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="tickets">
				When the ticket is green, he is replyed and await a response from you.<br /><br />
<?php
$req = $dB1->query('SELECT Id,AccountID,Title,DATE_FORMAT(Date, \'%d-%m-%Y at %H:%i\') AS Date,Text,Etat,Saw FROM tickets WHERE AccountId = '.$_SESSION['id'].' AND (Etat = 3 OR Etat = 2) ORDER BY Id DESC');
while($t = $req->fetch())
{
?>
					<div class="panel panel-<?php if($t['Etat'] == 3) { echo 'success'; } else { echo 'default'; } ?>">
						<div class="panel-heading">
							<h3 class="panel-title"><strong><?php echo $t['Title']; ?></strong> <span style="float: right">Sent to the support the <?php echo $t['Date']; ?></span></h3>
						</div>
						<div class="panel-body">
<?php echo getMyTicketsStrlen($t['Text']); ?>
							<br /><br /><a class="btn btn-default" href="index.php?p=tickets&id=<?php echo $t['Id']; ?>" role="button"
<?php
if($t['Saw'] == 1)
{
	echo 'style="background-color: #36D48C;border: 1px solid #ebccd1;"';
}
?>
							>Reply to the ticket</a> <a class="btn btn-default" href="index.php?p=my_tickets&lock=<?php echo $t['Id']; ?>" role="button">Close this ticket</a>
						</div>
					</div>
<?php
}
if($_SESSION['role'] > 1)
{
$req1 = $dB1->query('SELECT Id,AccountID,Title,DATE_FORMAT(Date, \'%d-%m-%Y at %H:%i\') AS Date,Text,Etat,SawMj FROM tickets WHERE Etat = 3 OR Etat = 2 ORDER BY Id DESC');
	while($t = $req1->fetch())
	{
?>
					<div class="panel panel-<?php if($t['Etat'] == 3) { echo 'success'; } else { echo 'default'; } ?>">
						<div class="panel-heading">
							<h3 class="panel-title"><strong><?php echo $t['Title']; ?></strong> <span style="float: right">Sent to the support the <?php echo $t['Date']; ?></span></h3>
						</div>
						<div class="panel-body">
<?php echo getMyTicketsStrlen($t['Text']); ?>
							<br /><br />
							<a class="btn btn-default" href="index.php?p=tickets&id=<?php echo $t['Id']; ?>" role="button"
<?php
if($t['SawMj'] == 1)
{
	echo 'style="background-color: #CAD8FE;border: 1px solid #ebccd1;"';
}
?>>Reply to the ticket</a>
							<a class="btn btn-default" href="index.php?p=my_tickets&lock=<?php echo $t['Id']; ?>" role="button">Close this ticket</a>
						</div>
					</div>
<?php
	} 
}
?>
				</div>
				<div role="tabpanel" class="tab-pane" id="tclos">
<?php
$req = $dB1->query('SELECT Id,AccountID,Title,DATE_FORMAT(Date, \'%d-%m-%Y at %H:%i\') AS Date,Text,Etat FROM tickets WHERE AccountId = '.$_SESSION['id'].' && Etat = 1 ORDER BY Id DESC');
while($t = $req->fetch())
{
?>
					<div class="panel panel-<?php if($t['Etat'] == 3) { echo 'success'; } else { echo 'default'; } ?>">
						<div class="panel-heading">
							<h3 class="panel-title"><strong><?php echo $t['Title']; ?></strong> <span style="float: right">Sent to the support the <?php echo $t['Date']; ?></span></h3>
						</div>
						<div class="panel-body">
<?php echo getMyTicketsStrlen($t['Text']); ?>
						</div>
					</div>
<?php
}
?>
				</div>
				<div role="tabpanel" class="tab-pane" id="tnews">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Open a new ticket</h3>
						</div>
						<div class="panel-body">
							<form action="#rep" method="POST">
								<input type="text" placeholder="Enter a title..." name="titre" class="form-control" style="width: 25%;"  required /><br />
								<textarea style="width: 100%;height: 100px;" name="text" class="form-control" required placeholder="Enter here your text..."></textarea><br />
								<input type="submit" class="btn btn-default" name="submit" value="Oopen the ticket" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
}
else
{ 
	include('connexion.php');
}
?>
			