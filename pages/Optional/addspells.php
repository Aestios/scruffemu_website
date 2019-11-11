		<div class="content" style="margin-top: 30px;">
			<div class="wrap">
<?php 
if(isset($_SESSION['id'])) {
if ($_SESSION['role'] > "3") {
echo '<div class="well" style="width: 50%; margin: auto; margin-top: 0px;">
<form action="#ins" method="POST">
<div class="input-group"><div class="input-group-addon"><i class="fa fa-key fa-fw"></i>
</div><input type="spellperso" class="form-control" name="spellperso" placeholder="Entrez l\'ID du sort"></div><br />
<div class="input-group"><div class="input-group-addon"><i class="fa fa-user fa-fw"></i>
</div><input type="perso" class="form-control" name="perso" placeholder="Entrez l\'ID du joueur"></div><br />
<button type="submitperso" class="btn btn-default" name="submitperso" style="width: 100%;">Ajouter à ce personnage</button><br /><br/>
<button type="submitperso" class="btn btn-default" name="submitallperso" style="width: 100%;">Ajouter tous ces sorts à ce personnage</button></form></div>';


if(isset($_POST['submitperso'])) {
$exec = $dB1->query('INSERT INTO CharactersSpells (Id, CharacterId, SpellId, SpellLevel) VALUES ("", "'.$_POST['perso'].'", "'.$_POST['spellperso'].'", "1")');
echo '<div class="alert alert-success" role="alert"><center>Sort ajouté !</center></div>';
}
if(isset($_POST['submitallperso'])) {

echo '<div class="alert alert-success" role="alert"><center>En développement !</center></div>';
}
}
else
{
echo '<div class="alert alert-danger" role="alert">Vous ne possédez pas les droits nécessaires !</div>';
}
}
?>
