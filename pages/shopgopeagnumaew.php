<?php if(isset($_SESSION['id'])) { ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<style>
.avatar_dofus {width: 124px; height: 122px; position: absolute; top: 0; left: 34px;}
.acc_avatar {margin: 5px 0 0; position: relative; text-align: center; width: 200px;}
.acc_avatar img {margin-left: 9px;}
.acc_avatar img {margin-top: 13px;}
.shopicon li{position: relative;background: url("./images/shop/sprite.png") no-repeat top;width: 35px;height: 35px;display:inline-block;vertical-align:middle;margin-left:-8px;}
.shopicon .shopiconogrin {background-position: top; background-size : 70%;}
.shopicon2 li{position: relative;background: url("./images/shop/sprite2.png") no-repeat;width: 20px;height: 20px;}
.shopicon2 .Neutral {vertical-align:middle;display:inline-block;background-position: -96px -15px;background-size : 630%;}
.shopicon2 .MP {vertical-align:middle;display:inline-block;background-position: -97px -50px;background-size : 625%;}
.shopicon2 .Chance {vertical-align:middle;display:inline-block;background-position: -100px -92px;background-size : 650%;}
.shopicon2 .Range {vertical-align:middle;display:inline-block;background-position: -100px -135px;background-size : 650%;}
.shopicon2 .Agility {vertical-align:middle;display:inline-block;background-position: -100px -172px;background-size : 650%;}
.shopicon2 .Initiative {vertical-align:middle;display:inline-block;background-position: -100px -210px;background-size : 645%;}
.shopicon2 .AP {vertical-align:middle;display:inline-block;background-position: -100px -250px;background-size : 650%;}
.shopicon2 .Prospecting {vertical-align:middle;display:inline-block;background-position: -100px -288px;background-size : 650%;}
.shopicon2 .Vitality {vertical-align:middle;display:inline-block;background-position: -100px -330px;background-size : 650%;}
.shopicon2 .Wisdom {vertical-align:middle;display:inline-block;background-position: -100px -370px;background-size : 650%;}
.shopicon2 .Intelligence {vertical-align:middle;display:inline-block;background-position: -100px -407px;background-size : 650%;}
.shopicon2 .Strenght {vertical-align:middle;display:inline-block;background-position: -100px -445px;background-size : 650%;}
.shopicon2 .Dodge {vertical-align:middle;display:inline-block;background-position: -100px -485px;background-size : 650%;}
.shopicon2 .Summons {vertical-align:middle;display:inline-block;background-position: -100px -525px;background-size : 650%;}
.shopicon2 .Tackle {vertical-align:middle;display:inline-block;background-position: -100px -565px;background-size : 650%;}
.shopicon2 .Critical {vertical-align:middle;display:inline-block;background-position: -100px -608px;background-size : 650%;}
.shopicon2 .Heal {vertical-align:middle;display:inline-block;background-position: -100px -996px;background-size : 650%;}
.shopicon2 .MPLossReduction {vertical-align:middle;display:inline-block;background-position: -100px -1048px;background-size : 650%;}
.shopicon2 .APLossReduction {vertical-align:middle;display:inline-block;background-position: -100px -1097px;background-size : 650%;}
.shopicon2 .Power {vertical-align:middle;display:inline-block;background-position: -100px -1144px;background-size : 650%;}
.shopicon2 .MPReduction {vertical-align:middle;display:inline-block;background-position: -100px -1382px;background-size : 650%;}
.shopicon2 .APReduction {vertical-align:middle;display:inline-block;background-position: -100px -1338px;background-size : 650%;}
	
#fade {
	display: none;
	background: #000; 
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: .80;
	z-index: 9999;
}
.popup_block{
	display: none;
	background: #fff;
	padding: 20px; 	
	border: 20px solid #ddd;
	float: left;
	font-size: 1.2em;
	position: fixed;
	overflow-x: hidden;
	top: 50%; left: 50%;
	z-index: 99999;
	-webkit-box-shadow: 0px 0px 20px #000;
	-moz-box-shadow: 0px 0px 20px #000;
	box-shadow: 0px 0px 20px #000;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	height: auto;
}
img.btn_close {
	float: right; 
	margin: -55px -55px 0 0;
}
.popup p {
	padding: 5px 10px;
	margin: 5px 0;
}
*html #fade {
	position: absolute;
}
*html .popup_block {
	position: absolute;
}

table {
    width:100%;
}
table, th, td {
    border: 0px solid black;
}
th, td {
    padding: 2px;
    text-align: left;
}
td {
	font-size:14px;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: #fff;
    font-size: 17px;
}
<style>
body {margin:0;}

.categories {
  overflow: hidden;
  background-color: #333;
  width: 656px;
}

.categories a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.categories a:hover {
  background-color: #2bbee1;
  color: black;
}

.categories a.active {
    background-color: #1d6973;
    color: white;
}
.shopicon3 li{
	position: relative;
	background: url("./images/shop/sprite2.png") no-repeat;
	width: 50px;
	height: 50px;}
	
.shopicon3 .Character {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -9px;
	background-size : 200%;
	}
.shopicon3 .Potion {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -75px;
	background-size : 200%;
	}
.shopicon3 .Tower {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -140px;
	background-size : 200%;
	}
.shopicon3 .Hat {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -210px;
	background-size : 200%;
	}
.shopicon3 .Jobs {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -275px;
	background-size : 200%;
	}
.shopicon3 .Mobs {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -345px;
	background-size : 200%;
	}
.shopicon3 .Pets {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -412px;
	background-size : 200%;
	}
.shopicon3 .Map {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -481px;
	background-size : 200%;
	}
.shopicon3 .Resources {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -548px;
	background-size : 200%;
	}
.shopicon3 .Mounts {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -616px;
	background-size : 200%;
	}
.shopicon3 .Weapons {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -681px;
	background-size : 200%;
	}
.shopicon3 .Dofus {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -748px;
	background-size : 200%;
	}
.shopicon3 .Encyclopedia {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -815px;
	background-size : 200%;
	}
.shopicon3 .Panoplies {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -885px;
	background-size : 200%;
	}
.shopicon3 .World {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -1016px;
	background-size : 200%;
	}
.shopicon3 .Eagle {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -1087px;
	background-size : 200%;
	}
.shopicon3 .Sadidas {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -1210px;
	background-size : 200%;
	}
.shopicon3 .Helmet {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -1272px;
	background-size : 200%;
	}
.shopicon3 .Purse {
	vertical-align:middle;
	display:inline-block;
	background-position: -2px -1449px;
	background-size : 200%;
	}
</style>
<center><div class="categories">
  <a <?php if (empty($_GET['category'])){ ?> class="active" <?php } ?> href="/index.php?p=shop"><ul class="shopicon3"><li class="Purse"></li></ul></a>
  <a <?php if (isset($_GET['category'])){$category = $_GET['category']; if ($category == "Weapons"){ ?> class="active" <?php }} ?> href="/index.php?p=shop&category=Weapons"><ul class="shopicon3"> <li class="Weapons"></li></ul></a>
  <a <?php if (isset($_GET['category'])){$category = $_GET['category']; if ($category == "Equipments"){ ?> class="active" <?php }} ?> href="/index.php?p=shop&category=Equipments"><ul class="shopicon3"> <li class="Hat"></li></ul></a>
  <a <?php if (isset($_GET['category'])){$category = $_GET['category']; if ($category == "Pets"){ ?> class="active" <?php }} ?> href="/index.php?p=shop&category=Pets"><ul class="shopicon3"> <li class="Pets"></li></ul></a>
  <a <?php if (isset($_GET['category'])){$category = $_GET['category']; if ($category == "Mounts"){ ?> class="active" <?php }} ?> href="/index.php?p=shop&category=Mounts"><ul class="shopicon3"> <li class="Mounts"></li></ul></a>
  <a <?php if (isset($_GET['category'])){$category = $_GET['category']; if ($category == "Dofus"){ ?> class="active" <?php }} ?> href="/index.php?p=shop&category=Dofus"><ul class="shopicon3"> <li class="Dofus"></li></ul></a>
  <a <?php if (isset($_GET['category'])){$category = $_GET['category']; if ($category == "Consumables"){ ?> class="active" <?php }} ?> href="/index.php?p=shop&category=Consumables"><ul class="shopicon3"> <li class="Potion"></li></ul></a>
  <a <?php if (isset($_GET['category'])){$category = $_GET['category']; if ($category == "Services"){ ?> class="active" <?php }} ?> href="/index.php?p=shop&category=Services"><ul class="shopicon3"> <li class="Character"></li></ul></a>
</div></center> </br>
				<?php	
				if(isset($_POST['BuyBtn'])) {
					
				$reqBuy = $dB1->query('SELECT * FROM shop WHERE Name = "'.$_POST['BuyBtn'].'"');
			while($data1 = $reqBuy->fetch()) { 
			$IsService = $data1['IsService'];
			$price = $data1['Price'];
			$giftid = $data1['GiftId'];
			$IsVIP = $data1['Vip'];
			$reqpoints = $dB1->query('SELECT * FROM accounts WHERE guid = "'.$_SESSION['id'].'"');
			while($data2 = $reqpoints->fetch()) {
            $pointsaccount = $data2['points'];	
            $vipaccount = $data2['vip'];			
			if ($pointsaccount >= $price)
			{
			   if ($IsVIP == 1)  {
				if ($vipaccount == 1) 
				{
				if ($IsService != "1") {
				$rest = $pointsaccount - $price;
				$exist = false;
				$selectgifts = $dB1->query('SELECT GiftId FROM gifts WHERE guid = "'.$_SESSION['id'].'"');
               while($data3 = $selectgifts->fetch()) {
				   $exist = true;
				   $newgifts = $data3['GiftId'].$giftid.";";
				 $dB1->exec('UPDATE gifts SET GiftId="'.$newgifts.'" WHERE guid="'.$_SESSION['id'].'"'); 
				 $dB1->exec('UPDATE accounts SET points="'.$rest.'" WHERE guid="'.$_SESSION['id'].'"'); 
				  echo '<center><div class="alert alert-success" role="alert" style="width: 50%"><center>Successful purchase !</center></div></center>';
			   }
			   if ($exist == false) {
				   $newgiftid = $giftid.";";
				   $exec = $dB1->query('INSERT INTO gifts(Id, guid, GiftID, Account) VALUES ("", "'.$_SESSION['id'].'", "'.$newgiftid.'", "'.$_SESSION['login'].'") ');
                   $dB1->exec('UPDATE accounts SET points="'.$rest.'" WHERE guid="'.$_SESSION['id'].'"'); 
				    echo '<center><div class="alert alert-success" role="alert" style="width: 50%"><center>Successful purchase !</center></div></center>';
			  }
				}
			}
			else
			{
				echo '<center><div class="alert alert-danger" role="alert" style="width: 50%"><center>You can\'t buy this item, you are not VIP !</center></div></center>';
			   
			}
			   }
			   else
			   {
				 if ($IsService != "1") {
				$rest = $pointsaccount - $price;
				$exist = false;
				$selectgifts = $dB1->query('SELECT GiftId FROM gifts WHERE guid = "'.$_SESSION['id'].'"');
               while($data3 = $selectgifts->fetch()) {
				   $exist = true;
				   $newgifts = $data3['GiftId'].$giftid.";";
				 $dB1->exec('UPDATE gifts SET GiftId="'.$newgifts.'" WHERE guid="'.$_SESSION['id'].'"'); 
				 $dB1->exec('UPDATE accounts SET points="'.$rest.'" WHERE guid="'.$_SESSION['id'].'"'); 
				  echo '<center><div class="alert alert-danger" role="success" style="width: 50%"><center>Successful purchase !</center></div></center>';
			   }
			   if ($exist == false) {
				   $newgiftid = $giftid.";";
				   $exec = $dB1->query('INSERT INTO gifts(Id, guid, GiftID, Account) VALUES ("", "'.$_SESSION['id'].'", "'.$newgiftid.'", "'.$_SESSION['login'].'") ');
                   $dB1->exec('UPDATE accounts SET points="'.$rest.'" WHERE guid="'.$_SESSION['id'].'"'); 
				    echo '<center><div class="alert alert-danger" role="success" style="width: 50%"><center>Successful purchase !</center></div></center>';
			  }
				} 
			   }
			}
			else
			{
				echo '<center><div class="alert alert-danger" role="alert" style="width: 50%"><center>You don\'t have enough points to buy this item !</center></div></center>';
			   
			}
			}
			}
				}?>
		<div class="content">
			<div class="wrap">
			<?php 
			$points = "0";
			$reqpoints = $dB1->query('SELECT points FROM accounts WHERE guid = "'.$_SESSION['id'].'"');
			while($data = $reqpoints->fetch()) {
            $points = $data['points'];		
			}
			if (isset($_GET['category'])){
			$category = $_GET['category']; 
			$req = $dB1->query('SELECT * FROM shop WHERE Category = "'.$category.'" ORDER BY Price');
			while($data = $req->fetch()) { 
			$namewithoutspace = str_replace(" ", "", $data['Name']); 
			?>
			<div class="top-grids" style="margin-top: 5px;float: left; width: 30%; height: 30%;">
				<div class="top-grid8">
				<center>
				

<h3><?php
                echo $data['Name']; ?></h3>
				<img src="./images/shop/<?php echo $data['Name']; ?>.png" class="profilp" valign="middle" style="height:100px; width: 100px;" />
				</center>
				<center>
				<?php 
				if ($data['Level'] == "0")
				{
					echo 'Service';
				}
				else
				{
					echo 'Level '.$data['Level'];
				}
				if ($data['Vip'] == "1")
				{
					?></br><font color="#14585e"><?php echo "VIP Only";?></font><?php
				}
					else
					{
						?></br><?php
				}
				?></br>
				<div>
			<div class="post"><a href="#" rel="<?php echo $namewithoutspace;?>" class="poplight">Show Details</a></div>
			<div id="<?php echo $namewithoutspace;?>" class="popup_block">
			<center><p style="position: relative; font-size:30px; top: -12px;"><strong><?php echo $data['Name'];?></strong></p></center>
			<div style="position: relative; top: -60px;">
	        <img src="./images/shop/<?php echo $data['Name']; ?>Details.png" style="float:left; margin: 15px 0 0 -30px;" />
            <p style="position: relative; font-size:15px; left: -18px;"><strong>Type: </strong><?php echo $data['Category'];
			if ($data['IsService'] == "0")
			{
				echo "<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level: </strong>".$data['Level'];
			?>	      <thead>
			<div style="position: relative; top: -10px; left: -15px; height: 200px; width: 58%; overflow-y: auto;">
        <table id="t01"
    <tr>
    <th>Effects</th>
  </tr>
  <?php If ($data['Vitality'] != "0") { ?>
        <tr>
        <td><?php echo $data['Vitality']; ?> Vitality <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Vitality"></li></ul></div></td>
        </tr>
			<?php } If ($data['Strength'] != "0") { ?>
		<tr>
        <td><?php echo $data['Strength']; ?> Strength <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Strenght"></li></ul></div></td>
        </tr>
		<?php } If ($data['Wisdom'] != "0") { ?>
	    <tr>
        <td><?php echo $data['Wisdom']; ?> Wisdom <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Wisdom"></li></ul></div></td>
        </tr>
		<?php } If ($data['Intelligence'] != "0") { ?>
		<tr>
        <td><?php echo $data['Intelligence']; ?> Intelligence <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Intelligence"></li></ul></div></td>
        </tr>
		<tr>
		<?php } If ($data['Agility'] != "0") { ?>
        <td><?php echo $data['Agility']; ?> Agility <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Agility"></li></ul></div></td>
        </tr>
		<tr>
		<?php } If ($data['Chance'] != "0") { ?>
        <td><?php echo $data['Chance']; ?> Chance <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Chance"></li></ul></div></td>
        </tr>
		<tr>
		<?php } If ($data['AP'] != "0") { ?>
        <td><?php echo $data['AP']; ?> AP <div style="position: relative; float:right; top: -2px; left: -2px;"><ul class="shopicon2"> <li class="AP"></li></ul></div></td>
        </tr>
		<tr>
		<?php } If ($data['MP'] != "0") { ?>
        <td><?php echo $data['MP']; ?> MP <div style="position: relative; float:right; top: -2px; left: -1px;"><ul class="shopicon2"> <li class="MP"></li></ul></div></td>
        </tr>		
        <tr>
		<?php } If ($data['Range'] != "0") { ?>
        <td><?php echo $data['Range']; ?> Range <div style="position: relative; float:right; top: 2px; left: -2px;"><ul class="shopicon2"> <li class="Range"></li></ul></div></td>
        </tr>
	    <tr>
		<?php } If ($data['Initiative'] != "0") { ?>
        <td><?php echo $data['Initiative']; ?> Initiative <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Initiative"></li></ul></div></td>
        </tr>
		<?php } If ($data['EarthResistance'] != "0") { ?>
		<tr>
        <td><?php echo $data['EarthResistance']; ?>% Earth Resistance <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Strenght"></li></ul></div></td>
        </tr>
		<?php } If ($data['WaterResistance'] != "0") { ?>
		<tr>
        <td><?php echo $data['WaterResistance']; ?>% Water Resistance <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Chance"></li></ul></div></td>
        </tr>
		<?php } If ($data['FireResistance'] != "0") { ?>
		<tr>
        <td><?php echo $data['FireResistance']; ?>% Fire Resistance <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Intelligence"></li></ul></div></td>
        </tr>
		<?php } If ($data['WindResistance'] != "0") { ?>
		<tr>
        <td><?php echo $data['WindResistance']; ?>% Wind Resistance <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Agility"></li></ul></div></td>
        </tr>
		<?php } If ($data['NeutralResistance'] != "0") { ?>
		<tr>
        <td><?php echo $data['NeutralResistance']; ?>% Neutral Damage <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Neutral"></li></ul></div></td>
        </tr>
		<?php } If ($data['EarthDamage'] != "0") { ?>
		<tr>
        <td><?php echo $data['EarthDamage']; ?> Earth Damage <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Strenght"></li></ul></div></td>
        </tr>
		<?php } If ($data['WaterDamage'] != "0") { ?>
		<tr>
        <td><?php echo $data['WaterDamage']; ?> Water Damage <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Chance"></li></ul></div></td>
        </tr>
		<?php } If ($data['FireDamage'] != "0") { ?>
		<tr>
        <td><?php echo $data['FireDamage']; ?> Fire Damage <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Intelligence"></li></ul></div></td>
        </tr>
		<?php } If ($data['WindDamage'] != "0") { ?>
		<tr>
        <td><?php echo $data['WindDamage']; ?> Wind Damage <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Agility"></li></ul></div></td>
        </tr>
		<?php } If ($data['NeutralDamage'] != "0") { ?>
		<tr>
        <td><?php echo $data['NeutralDamage']; ?> Neutral Damage <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Neutral"></li></ul></div></td>
        </tr>
        <?php } If ($data['Prospecting'] != "0") { ?>
		<tr>
        <td><?php echo $data['Prospecting']; ?> Prospecting <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Prospecting"></li></ul></div></td>
        </tr>
		<?php } If ($data['Dodge'] != "0") { ?>
		<tr>
        <td><?php echo $data['Dodge']; ?> Dodge <div style="position: relative; float:right; top: 0px; left: -3px;"><ul class="shopicon2"> <li class="Dodge"></li></ul></div></td>
        </tr>
		<?php } If ($data['Summons'] != "0") { ?>
		<tr>
        <td><?php echo $data['Summons']; ?> Summons <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Summons"></li></ul></div></td>
        </tr>
		<?php } If ($data['Tackle'] != "0") { ?>
		<tr>
        <td><?php echo $data['Tackle']; ?> Tackle <div style="position: relative; float:right; top: 0px; left: -2px;"><ul class="shopicon2"> <li class="Tackle"></li></ul></div></td>
        </tr>
		<?php } If ($data['Critical'] != "0") { ?>
		<tr>
        <td><?php echo $data['Critical']; ?> Critical <div style="position: relative; float:right; top: -1px; left: -3px;"><ul class="shopicon2"> <li class="Critical"></li></ul></div></td>
        </tr>
		<?php } If ($data['Heal'] != "0") { ?>
		<tr>
        <td><?php echo $data['Heal']; ?> Heal <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Heal"></li></ul></div></td>
        </tr>
		<?php } If ($data['MPLossReduction'] != "0") { ?>
		<tr>
        <td><?php echo $data['MPLossReduction']; ?> MP Loss Reduction <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="MPLossReduction"></li></ul></div></td>
        </tr>
		<?php } If ($data['APLossReduction'] != "0") { ?>
		<tr>
        <td><?php echo $data['APLossReduction']; ?> AP Loss Reduction <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="APLossReduction"></li></ul></div></td>
        </tr>
		<?php } If ($data['Power'] != "0") { ?>
		<tr>
        <td><?php echo $data['Power']; ?> Power <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="Power"></li></ul></div></td>
        </tr>
		<?php } If ($data['MPReduction'] != "0") { ?>
	    <td><?php echo $data['MPReduction']; ?> MP Reduction <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="MPReduction"></li></ul></div></td>
        </tr>
		<?php } If ($data['APReduction'] != "0") { ?>
		<tr>
        <td><?php echo $data['APReduction']; ?> AP Reduction <div style="position: relative; float:right; top: -1px; left: -2px;"><ul class="shopicon2"> <li class="APReduction"></li></ul></div></td>
        </tr>
		<?php }?>
        </table>
		</div>
		<div style="position: relative; height: 150px; overflow-y: auto; top: 35px;">
		<table id="t01"
    <tr>
    <th>Description</th>
  </tr>
  <tr>
        <td><?php echo $data['Description']; ?> <div style="position: relative; float:right; top: 3-1px; left: -2px;"></div></td>
        </tr>
  </table>
  </div>
		<?php
			}
			else
			{
				if ($data['Duration'] != "")
				{
			echo "</p><p style=\"position: relative; font-size:15px; left: -18px; top:-26px;\"><strong> &nbsp;Duration: </strong>".$data['Duration']."</p>";
				}
				?>
						<div style="position: relative; top: -30px; height: 150px; overflow-y: auto;">
		<table id="t01"
    <tr>
    <th>Description</th>
  </tr>
  <tr>
        <td><?php echo $data['Description']; ?> <div style="position: relative; float:right; top: -1px; left: -2px;"></div></td>
        </tr>
  </table>
  </div>
				<?php
			}
			?>
			</p> 
            </div>
            </div>
					<hr />
					<div style="position: relative; top: -15px; left: 6px;"><ul class="shopicon"><?php echo $data['Price'];?> <li class="shopiconogrin"></li></ul></div>
				<form method="POST" action=''>
					<button type="submit" class="btn btn-default" name="BuyBtn" value="<?php echo $data['Name']; ?>" style="width: 77px; position: relative; top: -15px;">Buy</button></center>
				<form>
				</div>
				</div>
				<?php } } else
				{ ?>
					<div class="purchase">
            <center><span class="ng-binding">Welcome on the Shop </span><center>          
                     <p>Here you can buy stuff and receive it in game or you can buy services with your points</p>
					 <div  style="position: relative; left:-25px;"><p>You actually have: <div style="position: relative; top: -27px; left: 95px;"><ul class="shopicon"><?php echo $points;?> <li class="shopiconogrin"></li></ul></div></p></div></div>
				     <center><div style="position: relative; top: -95px;"><p>You can vote or buy points on the <a href="/index.php?p=buy">Purchase VP</a></p></div></center>
				<?php } ?>
				</div>
				</div>
				<div class="clear"> </div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel');
		var popWidth = "500";
        $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		$('body').append('<div id="fade"></div>'); 
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
		return false;
	});
	$('a.close, #fade').live('click', function() { 
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	}); 
return false;
	});
});
</script>
<?php } else { echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php?p=connexion">'; }?>