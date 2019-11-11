
<div class="purchase">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <span class="ng-binding"> Welcome to Herofus</span>
                <p class="ng-binding">
					Welcome to the Herofus, the only actively developed dofus private server. Our server features every single dungeon working, a completely redone magus system with sinks and exomaging, fast monster AI, working mount breeding, working pets, working boss mechanics and more!
				</p>
            </div>            
            <div class="col-md-3">
                <a href="index.php?p=join" class="btn-buy hover-effect ng-binding">Join us</a>            
            </div>
        </div>
    </div>
</div>
		<div class="content">
			<div class="wrap">
			<?php
			 echo "<br>";
			$req = $dB1->query('SELECT * FROM news ORDER BY Id DESC LIMIT 0,8');
			while($d = $req->fetch()) {
			?>
			<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="heading<?php echo $d['Id']; ?>">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $d['Id']; ?>" aria-expanded="false" aria-controls="<?php echo $d['Id']; ?>">
          <?php echo $d['Title']; ?>
        </a><span style="float: right;">Posted by <?php echo $d['Author']; ?> on <?php echo $d['Date']; ?></span>
      </h4>
    </div>
    <div id="<?php echo $d['Id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $d['Id']; ?>">
      <div class="panel-body">
      <?php echo $d['Text']; ?>
      </div>
    </div>
  </div>
<?php } ?>
			
			<div class="test-monials">
				<div class="feature-grid-head feature-grid-head2">
					<div class="feature-grid-head-top feature-grid-head-top3">
						<label> </label><span> </span> <label> </label>
						<div class="clear"> </div>
					</div>
					<h3>Our statistics</h3>
				</div>
			</div>
				<center>
				<?php
				$proxy_headers = array(
        'HTTP_VIA',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED',
        'HTTP_CLIENT_IP',
        'HTTP_FORWARDED_FOR_IP',
        'VIA',
        'X_FORWARDED_FOR',
        'FORWARDED_FOR',
        'X_FORWARDED',
        'FORWARDED',
        'CLIENT_IP',
        'FORWARDED_FOR_IP',
        'HTTP_PROXY_CONNECTION'
    );
    foreach($proxy_headers as $x){
        if (isset($_SERVER[$x])) die("VPN/Proxy detected !");
    }
				$req = $dB1->query('SELECT guid FROM accounts');
				$comptes_c = $req->RowCount();
				//$req = $dB1->query('SELECT name FROM personnages');
				$req = $dB1->query('SELECT name FROM players');
				$persos_c = $req->RowCount();
				$req = $dB1->query('SELECT * FROM accounts ORDER BY guid DESC LIMIT 0,1');
				$data = $req->fetch();
				$last_c = $data['pseudo'];
				$fp = @fsockopen($serveur['ip'], $serveur['port'], $errno, $errstr, 1);
				?>
				There are currently <?php echo $comptes_c; ?> registered accounts and <?php echo $persos_c; ?> created characters.<br />
				We welcome our most recently registered user, <span style="color: blue;"><?php echo $last_c; ?></span>.<br /><br />
				<span class="button"><?php if($fp != 1)
					{ 
						echo '<i class="fa fa-circle" style="color: green;"></i> Server Online</span>';
					}
						else
						{ 
							echo '<i class="fa fa-circle" style="color: red;"></i> Server Offline</span>';
						}  ?> <span class="button"><i class="fa fa-circle" style="color: green;"></i> Database Online</span>  </center>
