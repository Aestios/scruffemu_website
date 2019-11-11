		
		<div class="content" style="margin-top: 30px;">
			<div class="wrap">
			<div role="tabpanel">

  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#pvm" aria-controls="pvm" role="tab" data-toggle="tab">Experience Points</a></li>
    <li role="presentation"><a href="#pvp" aria-controls="pvp" role="tab" data-toggle="tab">Honour Points</a></li>
    <li role="presentation"><a href="#guilde" aria-controls="guilde" role="tab" data-toggle="tab">Guilds</a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="pvm">
	<table class="table table-bordered">
      <thead>
        <tr>
          <th>Position</th>
          <th>Character name</th>
          <th>Class</th>
		  <th>Experience Points</th>
		  <th>Level</th>
        </tr>
      </thead>
      <tbody>
	  <?php 
	  $position = 0;
	  $req = $dB1->query('SELECT * FROM players WHERE groupe = -1 ORDER BY xp DESC LIMIT 0,50'); 
	  while($data = $req->fetch()) {
	  $position++;
	  $breed = get_breed($data['class']);
	  $sex = get_sexe($data['sexe']);
	  if($position == 1) { $style = 'success'; $position2 = "<img src='./images/tr/1.png' />"; }
	  if($position == 2) { $style = 'info'; $position2 = "<img src='./images/tr/2.png' />"; }
	  if($position == 3) { $style = 'danger'; $position2 = "<img src='./images/tr/3.png' />"; }
	  if($position >= 4) { $style = null; $position2 = $position; }
	  if(isset($_SESSION['id']) AND $_SESSION['role'] >= 4) { $supprimer = '[ <a href="index.php?p=delete_c&p2='.$data['guid'].'">Delete Ranking</a> ]'; }
	  else { $supprimer = null; }
	  echo '
	  <tr>
          <td class="'.$style.'" align="center">'.$position2.'</td>
          <td class="'.$style.'"><a href="index.php?p=persos&id='.$data['id'].'">'.$data['name'].'</a> '.$supprimer.'</td>
          <td class="'.$style.'">'.$breed.' ('.$sex.')</td>
		  <td class="'.$style.'">'.$data['xp'].'</td>
	      <td class="'.$style.'">'.($data['level']).'</td>
        </tr>
	';
	}
	  ?>
      </tbody>
    </table>
	</div>
    <div role="tabpanel" class="tab-pane" id="pvp">
	<table class="table table-bordered">
      <thead>
        <tr>
          <th>Position</th>
          <th>Character name</th>
          <th>Class</th>
		  <th>Honour</th>
        </tr>
      </thead>
      <tbody>
	  <?php 
	  $position = 0;
	  $req = $dB1->query('SELECT * FROM players WHERE groupe = -1 ORDER BY honor DESC LIMIT 0,50'); 
	  while($data = $req->fetch()) {
	  $position++;
	  $breed = get_breed($data['class']);
	  $sex = get_sexe($data['sexe']);
	  if($position == 1) { $style = 'success'; $position2 = "<img src='./images/tr/1.png' />"; }
	  if($position == 2) { $style = 'info'; $position2 = "<img src='./images/tr/2.png' />"; }
	  if($position == 3) { $style = 'danger'; $position2 = "<img src='./images/tr/3.png' />"; }
	  if($position >= 4) { $style = null; $position2 = $position; }
	  if(isset($_SESSION['id']) AND $_SESSION['role'] >= 4) { $supprimer = '[ <a href="index.php?p=delete_c&p2='.$data['guid'].'">Delete Ranking</a> ]'; }
	  else { $supprimer = null; }

	  echo '
	  <tr>
          <td class="'.$style.'" align="center">'.$position2.'</td>
          <td class="'.$style.'"><a href="index.php?p=persos&id='.$data['id'].'">'.$data['name'].'</a> '.$supprimer.'</td>
          <td class="'.$style.'">'.$breed.' ('.$sex.')</td>
		  <td class="'.$style.'">'.$data['honor'].'</td>
        </tr>
	';
	}
	  ?>
      </tbody>
    </table>
	</div>
    <div role="tabpanel" class="tab-pane" id="koli">
	<table class="table table-bordered">
      <thead>
        <tr>
          <th>Position</th>
          <th>Character name</th>
          <th>Class</th>
		  <th>Coast</th>
        </tr>
      </thead>
      <tbody>
	  <?php 
	  $position = 0;
	  $req = $dB1->query('SELECT * FROM players WHERE groupe = -1 ORDER BY xp DESC LIMIT 0,50'); //Replace xp by coast
	  while($data = $req->fetch()) {
	  $position++;
	  $breed = get_breed($data['class']);
	  $sex = get_sexe($data['sexe']);
	  if($position == 1) { $style = 'success'; $position2 = "<img src='./images/tr/1.png' />"; }
	  if($position == 2) { $style = 'info'; $position2 = "<img src='./images/tr/2.png' />"; }
	  if($position == 3) { $style = 'danger'; $position2 = "<img src='./images/tr/3.png' />"; }
	  if($position >= 4) { $style = null; $position2 = $position; }
	  $cote = '100'; // replace by $data['coast]
	  if(isset($_SESSION['id']) AND $_SESSION['role'] >= 4) { $supprimer = '[ <a href="index.php?p=delete_c&p2='.$data['guid'].'">Delete Ranking</a> ]'; }
	  else { $supprimer = null; }

	  echo '
	  <tr>
          <td class="'.$style.'" align="center">'.$position2.'</td>
          <td class="'.$style.'"><a href="index.php?p=persos&id='.$data['id'].'">'.$data['name'].'</a> '.$supprimer.'</td>
          <td class="'.$style.'">'.$breed.' ('.$sex.')</td>
		  <td class="'.$style.'">'.$cote.'</td>
        </tr>
	';
	}
	  ?>
      </tbody>
    </table>
	</div>
    <div role="tabpanel" class="tab-pane" id="guilde">
	<table class="table table-bordered">
      <thead>
        <tr>
          <th>Position</th>
          <th>Name of Guild</th>
          <th>Experience Points</th>
		  <th>Number of Members</th>
        </tr>
      </thead>
      <tbody>
	  <?php 
	  $position = 0;
	  $req = $dB1->query('SELECT * FROM `world.entity.guilds` ORDER BY xp DESC LIMIT 0,50'); 
	  while($data = $req->fetch()) {
	  $position++;
	  $membres_in_g = $dB2->query('SELECT * FROM guild_members WHERE guild = '.$data['id'].''); 
	  $mig = $membres_in_g->rowCount();
	  echo '
	  <tr>
          <td>'.$position.'</td>
          <td><a href="index.php?p=guilds&id='.$data['id'].'">'.$data['name'].'</a></td>
          <td>'.$data['xp'].'</td>
		  <td>'.$mig.'</td>
        </tr>
	';
	}
	  ?>
      
      </tbody>
    </table></div>
  </div>
</div>
</div>