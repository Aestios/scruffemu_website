		<div class="content" style="margin-top: 30px;">
			<div class="wrap">
<?php 
if(isset($_SESSION['id'])) {
if ($_SESSION['role'] != "0") {
echo '<div class="well" style="width: 50%; margin: auto; margin-top: 0px;">
<form action="#ins" method="POST">
<button type="importcac" class="btn btn-default" name="importcac" style="width: 100%;">Implanter les cac</button>
</form>
</div>';
if(isset($_POST['importcac'])) {
$cacrecup = $dB1->query("Select * FROM `Weapons` WHERE `Implanted` = '0'");
$implanted = $dB1->query("UPDATE Weapons SET Implanted = '1'  WHERE Id = '".$data['Id']."'");
$Id = $data['Id'];
$NameId = $data['DescriptionId'];
$Name = $data['Name'];
$TypeId = $data['TypeId'];
$AppearanceId = $data['AppearanceId'];
$Level = $data['Level'];
$Price = $data['Price'];
$Weight = $data['RealWeight'];
$Effects = $data['Effects'];
$Criteria = $data['Criteria'];
$IconId = $data['IconId'];
echo '<div class="alert alert-success" role="alert"><center>Cac implantés !</ center></div>';
}
}
else
{
echo '<div class="alert alert-danger" role="alert">Vous ne possédez pas les droits nécessaires !</div>';
}
}
?>