<?php
 echo "<p align=center>Enter the name of the item you want to find here:</p>";
?>

<div class="search">
<div align="center">
<form name="form" action="index.php" method="get">
  <input type="text" name="i" />
  <input type="submit" name="p" value="search" />
</form>
</div>

<?php
 echo "<br>";
 echo "<br>";
 echo "<p align=center>Or enter the name of the monster you want to find here:</p>";
?>

<div class="search">
<div align="center">
<form name="form" action="index.php" method="get">
  <input type="text" name="m" />
  <input type="submit" name="p" value="search" />
</form>
</div>