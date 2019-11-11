<div class="purchase">
    <center><div class="container">
            
                <span class="ng-binding">Information about The Team</span><br />
                <p>
					The entire team working on the server is listed here with their in-game name and a small description about them.<br />
					Feel free to contact them whenever you encounter a problem in the game.<br />
				</p>
    </div></center> 
</div>
		<div class="content">
			<div class="wrap">
			<div class="top-grids" style="margin-top: 0px;">
			<?php $req = $dB1->query('SELECT * FROM staff ORDER BY Id');
			while($data = $req->fetch()) { ?>
				<div class="top-grid" style="margin-bottom: 10px;">
				<h3><span style="color: #b30000;"><?php echo $data['rank']; ?></span></h3>
				<h3><span style="color: #40A454;"><?php echo $data['name']; ?></span></h3>
					<p><?php echo $data['description']; ?><br /><br />
				</div>
				<?php } ?>
				<div class="clear"> </div>
			</div>
			