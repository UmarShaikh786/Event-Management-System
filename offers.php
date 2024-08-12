<?php
require("header3.php");
require("connection.php");
?>
	<!--== CSS Files ==-->
    
    <link href="css/bootstraphome.css" rel="stylesheet" media="screen">
		<link href="css/stylehome.css" rel="stylesheet" media="screen">
		


	

<hr class = "footerline">


<section id="prices" class="row">		
<div class="title-start events-menu col-md-4 col-md-offset-4">
				<h2>Offers</h2>
				<p class="sub-text text-center">Available Offers only on These Events</p>
				</div>

				<div class="col-md-12 visible-md visible-lg">
					<div class="wrap">
					
						<div class="pricing-table">
				
						<?php
$result = mysqli_query($conn,"select * from offers");

while($rows = mysqli_fetch_array($result)) {
   
	//echo $rows['Oid'];
	//echo $rows['Oname'];
	//echo $rows['Oprice'];
	
?>
							<div class="plan">
								<h3 class="name"><?php echo $rows['Oname'];?></h3>
								<h4 class="price"><?php echo $rows['Oprice'];?><span>/Day</span></h4>

								<?php $mark=explode(',', $rows['Description']);//what will do here
   								foreach($mark as $out) {
      				?>
   						
								<ul class="details">
									<li><strong><?php echo $out;?></strong>
									
								</ul>

						<?php 	} ?>
							</div>
							
							<?php } ?>
						</div><!--.pricing-table-->
						
					</div><!--.wrap-->
					
					</div>

									</section>
									<hr class = "footerline">

				<?php
require("footer.php");
?>