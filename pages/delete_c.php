<?php if(isset($_SESSION['id']) AND $_SESSION['role'] >= 2) {
if(isset($_GET['p2'])) {
$perso = $_GET['p2'];
$upd = $dB1->prepare('UPDATE personnages SET VisibilitySite = 1 WHERE guid = '.$perso.'');
$upd->execute();
echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php?p=classements">';
}
}
?>