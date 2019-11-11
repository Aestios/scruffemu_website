<div class="purchase">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <span class="ng-binding">Welcome to the FAQ of Herofus</span>
                <p class="ng-binding">
					On this page you will find answers to the main questions you may be asking, make sure to read them before opening asking a GM about a problem.
				</p>
            </div>            
            <div class="col-md-3">
               
            </div>
        </div>
    </div>
</div>

<div class="content">
			<div class="wrap">

<?php 
$req = $dB1->query('SELECT * FROM faq ORDER BY Id DESC');
while($d = $req->fetch()) {
?>
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading<?php echo $d['Id']; ?>">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $d['Id']; ?>" aria-expanded="false" aria-controls="<?php echo $d['Id']; ?>">
          <?php echo $d['Title']; ?>
        </a><span style="float: right;">Posted by <?php echo $d['Author']; ?></span>
      </h4>
    </div>
    <div id="<?php echo $d['Id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $d['Id']; ?>">
      <div class="panel-body">
      <?php echo $d['Text']; ?>
      </div>
    </div>
  </div>
<?php } ?>