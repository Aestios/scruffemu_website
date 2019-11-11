		<div class="content" style="margin-top: 30px;">
			<div class="wrap">
<?php 
if(isset($_SESSION['id'])) {
if ($_SESSION['role'] > "3") {
echo '<div class="well" style="width: 50%; margin: auto; margin-top: 0px;"><form action="#ins" method="POST"><div class="input-group"><div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div><input type="spell" class="form-control" name="spell" placeholder="Entrez l\'ID du sort"></div><br /><button type="submitall" class="btn btn-default" name="submitall" style="width: 100%;">Supprimer sur tous les personnages</button><br /> <br /><div class="input-group"><div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div><input type="spellperso" class="form-control" name="spellperso" placeholder="Entrez l\'ID du sort"></div><br /><div class="input-group"><div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div><input type="perso" class="form-control" name="perso" placeholder="Entrez l\'ID du joueur"></div><br /><button type="submitperso" class="btn btn-default" name="submitperso" style="width: 100%;">Supprimer sur ce personnage</button><br /><br/><button type="submitperso" class="btn btn-default" name="submitallperso" style="width: 100%;">Tout supprimer sur ce personnage</button></form></div>';
if(isset($_POST['submitall'])) {
$spelldelete = $dB1->query("DELETE FROM `CharactersSpells` WHERE `SpellId`='".$_POST['spell']."'");
echo '<div class="alert alert-success" role="alert"><center>Sorts supprimés !</center></div>';
}

if(isset($_POST['submitperso'])) {
$spelldelete = $dB1->query("DELETE FROM `CharactersSpells` WHERE `CharacterId`='".$_POST['perso']."' AND `SpellId`='".$_POST['spellperso']."'");
echo '<div class="alert alert-success" role="alert"><center>Sort supprimé !</center></div>';
}
if(isset($_POST['submitallperso'])) {
$spelldelete = $dB1->query("DELETE FROM `CharactersSpells` WHERE `CharacterId`='".$_POST['perso']."'");
echo '<div class="alert alert-success" role="alert"><center>Sort supprimés !</center></div>';
}
}
else
{
echo '<div class="alert alert-danger" role="alert">Vous ne possédez pas les droits nécessaires !</div>';
}
}
?>
