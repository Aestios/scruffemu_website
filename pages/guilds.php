<?php 
if(isset($_GET['id'])) {

$req = $dB2->query('SELECT * FROM guilds WHERE id = "'.$_GET['id'].'"');
	  while($data = $req->fetch()) {
	  $membres_in_g = $dB2->query('SELECT * FROM guild_members WHERE guild = '.$data['id'].''); 
	  $mig = $membres_in_g->rowCount();
	  ?>
<div class="purchase">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <span class="ng-binding">Welcome to the custom page of the guild <strong><?php echo $data['name']; ?></strong></span>
             <p class="ng-binding">
					 <strong><?php echo $data['name']; ?></strong> is formed by <strong><?php echo $mig; ?></strong> members, who collected <strong><?php echo $data['xp']; ?></strong> experience points.<br />
				  They have  <?php echo $data['nbrmax']; ?> taxcollectors  max !
            
				</p>
			</div>            
            <div class="col-md-3">
			
                 </div>
        </div>
    </div>
</div>

		<div class="content">
			<div class="wrap">
<table class="table table-bordered">
      <thead>
        <tr>
          <th>Class</th>
          <th>Character name</th>
		  <th>Rank</th>
		  <th>%Xp</th>
		  <th>Xp given</th>
        </tr>
      </thead>
      <tbody>
	  <?php
	  $req1 = $dB2->query('SELECT * FROM guild_members WHERE guild = '.$_GET['id'].' && rank != 0 ORDER BY rank ');
	  while($d2 = $req1->fetch()) { 
	  $req2 = $dB2->query('SELECT * FROM players WHERE id = '.$d2['guid'].'');
	  while($d3 = $req2->fetch()) { 
	  ?>
        <tr>
          <td valign="middle" align="center"><img src="./images/guilds/<?php echo $d3['class']; ?>_<?php echo $d3['sexe']; ?>.png" width="30px" /></td>
          <td valign="middle" align="center"><?php echo $d3['name']; ?></td>
          <td valign="middle" align="center"><?php echo GuildRank($d2['rank']); ?></td>
		  <td valign="middle" align="center"><?php echo $d2['pxp']; ?>%</td>
		  <td valign="middle" align="center"><?php echo $d2['xpdone']; ?></td>
        </tr>
	<?php } }  ?>
		  <?php
	  $req1 = $dB2->query('SELECT * FROM guild_members WHERE guild = '.$_GET['id'].' && rank = 0 ORDER BY rank ');
	  while($d2 = $req1->fetch()) { 
	  $req2 = $dB2->query('SELECT * FROM players WHERE id = '.$d2['guid'].'');
	  while($d3 = $req2->fetch()) { 
	  ?>
        <tr>
          <td valign="middle" align="center"><img src="./images/guilds/<?php echo $d3['class']; ?>_<?php echo $d3['sexe']; ?>.png" width="30px" /></td>
          <td valign="middle" align="center"><?php echo $d3['name']; ?></td>
          <td valign="middle" align="center"><?php echo GuildRank($d2['rank']); ?></td>
		  <td valign="middle" align="center"><?php echo $d2['pxp']; ?>%</td>
		  <td valign="middle" align="center"><?php echo $d2['xpdone']; ?></td>
        </tr>
	<?php } }  ?>
      </tbody>
    </table><?php } } else { echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php?p=classements">'; }?>