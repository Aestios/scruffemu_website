<?php 
if(isset($_GET['id'])) {

$req = $dB1->query('SELECT * FROM players WHERE id = "'.$_GET['id'].'"');
	  while($data = $req->fetch()) {
	  ?>
<div class="purchase">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <span class="ng-binding">Welcome to the custom page of <strong><?php echo $data['name']; ?></strong></span>
            </div>            
            <div class="col-md-3">
                     
            </div>
        </div>
    </div>
</div>
		<div class="content">
			<div class="wrap">
			<div class="top-grids" style="margin-top: 0px;float: left; width: 30%;">
				<div class="top-grid8">
				<center>
				<style>.avatar_dofus {

width: 124px;
height: 122px;
position: absolute;
top: 0;
left: 34px;
}

.acc_avatar {
margin: 5px 0 0;
position: relative;
text-align: center;
width: 200px;
}

.acc_avatar img {
margin-left: 9px;
}
.acc_avatar img {
margin-top: 13px;
}</style>
				<img src="./images/avatar/<?php echo $data['class']; ?>_<?php echo $data['sexe']; ?>.jpg" class="profilp" valign="middle" />
				</center>
					<h3><?php echo $data['name']; ?></h3>
					<p><?php echo get_breed($data['class']); ?> Sex <?php echo get_sexe($data['sexe']); ?></p>
					<p>
					<img src="./images/carac/kamas.png" width="20px" /> <?php echo $data['kamas']; ?><br />
					</p>
					<p>The person <?php echo $data['name']; ?> has gained a total of <strong><?php echo $data['xp']; ?></strong> experience points.
				</div>
				</div>
				<div style="float: right; width: 65%;">
			<table class="table table-bordered">
      <thead>
        <tr>
          <th>Attritubes</th>
          <th>Points Invested</th>
		  <th>Points added (Scrolled...)</th>
        </tr>
      </thead>
      <tbody>
	  
        <tr>
          <td valign="middle" align="center"><img src="./images/carac/vit.png" width="20px" /></td>
          <td><?php echo $data['vitalite']; ?></td>
        </tr>
        <tr>
		  <td valign="middle" align="center"><img src="./images/carac/sag.png" width="20px" /></td>
          <td><?php echo $data['sagesse']; ?></td>
        </tr>
        <tr>
          <td valign="middle" align="center"><img src="./images/carac/for.png" width="20px" /></td>
          <td><?php echo $data['force']; ?></td>
        </tr>
        <tr>
          <td valign="middle" align="center"><img src="./images/carac/feu.png" width="20px" /></td>
          <td><?php echo $data['intelligence']; ?></td>
        </tr>
		        <tr>
          <td valign="middle" align="center"><img src="./images/carac/air.png" width="20px" /></td>
          <td><?php echo $data['agilite']; ?></td>
        </tr>
		        <tr>
          <td valign="middle" align="center"><img src="./images/carac/eau.png" width="20px" /></td>
          <td><?php echo $data['chance']; ?></td>
        </tr>

      </tbody>
    </table>
	<h3 class="top-grid8 h3" style="border: none;">Position of <?php echo $data['name']; ?> in the ranking of PvM</h3>
				<table class="table table-bordered">
      <thead>
          <tr>
          <th>Position</th>
          <th>Name of Character</th>
          <th>Class</th>
		  <th>Experience Points</th>
        </tr>
      </thead>
      <tbody>
	  
       <?php 
	  $position = 0;
	  $req = $dB1->query('SELECT * FROM players WHERE VisibilitySite = 0 ORDER BY xp DESC'); 
	  while($class = $req->fetch()) {
	  $position++;
	  $breed = get_breed($class['class']);
	  $sex = get_sexe($class['sexe']);
	  if($position == 1) { $style = 'success'; $position2 = "<img src='./images/tr/1.png' />"; }
	  if($position == 2) { $style = 'info'; $position2 = "<img src='./images/tr/2.png' />"; }
	  if($position == 3) { $style = 'danger'; $position2 = "<img src='./images/tr/3.png' />"; }
	  if($position >= 4) { $style = null; $position2 = $position; }
	  if($class['id'] == $data['id']) {
	  echo '
	  <tr>
          <td class="'.$style.'" align="center">'.$position2.'</td>
          <td class="'.$style.'">'.$class['name'].'</td>
          <td class="'.$style.'">'.$breed.' ('.$sex.')</td>
		  <td class="'.$style.'">'.$class['xp'].'</td>
        </tr>
	';
	}
	}
	  ?>
      </tbody>
    </table>
	</div>
	<div class="clear"> </div>
				
			
		<div class="clear"> </div>	<?php } } else { echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php?p=classements">'; }?>