<?php
error_reporting(E_ALL ^ E_DEPRECATED);
  // Get the search variable from URL

  $var = @$_GET['i'] ;
  $var2 = @$_GET['m'] ;
  $trimmed = trim($var); //trim whitespace from the stored variable
  $trimmed2 = trim($var2); //trim whitespace from the stored variable

// rows to return
$limit=10; 

// check for an empty string and display a message.
if ($trimmed == "")
  {
	  if($trimmed2 == "")
	  {
		echo "<p align=center>Please enter an item name in the search bar.</p>";
		exit;
	  }
  }

// check for a search parameter
if (!isset($var) && !isset($var2))
  {
		echo "<p>We dont seem to have a search parameter!</p>";
		exit;
  }

else {
	?>
			
		<div class="content" style="margin-top: 30px;">
			<div class="wrap">
			<div role="tabpanel">

  <ul class="nav nav-tabs" role="tablist">
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="pvm">
	<table class="table table-bordered">
      <thead>
        <tr>
          <th>Monster</th>
          <th>Item Name</th>
          <th>Drop chance</th>
        </tr>
      </thead>
      <tbody>
	  <?php

	  if(isset($var))
	{
$position = 0;
$req = $dB2->query("SELECT * FROM drops WHERE objectName like \"%$trimmed%\" ORDER BY percentGrade5 DESC"); 
	  while($data = $req->fetch()) {
	  $position++;
	  $style = null;
	$position2 = $position;
	  echo '
	  <tr>
          <td class="'.$style.'">'.$data['monsterName'].'</td>
		  <td class="'.$style.'">'.$data['objectName'].'</td>
	      <td class="'.$style.'">'.($data['percentGrade5']).'%</td>
        </tr>
	';
	}
	}
	else {
$position = 0;
$req = $dB2->query("SELECT * FROM drops WHERE monsterName like \"%$trimmed2%\" ORDER BY objectId ASC"); 
	  while($data = $req->fetch()) {
	  $position++;
	  $style = null;
	$position2 = $position;
	  echo '
	  <tr>
          <td class="'.$style.'">'.$data['monsterName'].'</td>
		  <td class="'.$style.'">'.$data['objectName'].'</td>
	      <td class="'.$style.'">'.($data['percentGrade5']).'%</td>
        </tr>
	';
								   }	
		}
	}
	?>
	 </tbody>
    </table>
	</div>