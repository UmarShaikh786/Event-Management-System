<?php require "header3.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Venues</title>
        <?php require 'styles.php'; ?><!--css links. file found in utils folder-->
        <script src="utiils/jquery-1.12.1.min.js"></script>
<script src="utiils/bootstrap.min.js"></script>
<script src="utiils/js.js"></script>
<link rel="stylesheet" href="css/botton.css">

    </head>
    <body>

 
 <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
     <?php
           require("connection.php");
$sql="select * from Venuemaster";
$rs=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($rs))
{
//$wedding="Wedding";
     $venue=$row['Vname'];
     $price=$row['Price'];
     $image=$row['Image'];
     $city=$row['City'];
     $address=$row['Address'];
     $pin=$row['Pincode'];
     $id=$row['VId'];
     $desc=$row['Vdesc'];

 ?>     
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
	            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img style='border: 3px solid black;  box-shadow: 0px 5px 15px 10px rgba(0,50,255,0.4), 0 0 0 0px rgba(0,0,0,0.16);'src="<?php echo $image; ?>" class="img-responsive">
                        </div>
                        <div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE EVENTS PLACE</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img style='border: 3px solid black;  box-shadow: 0px 5px 15px 10px rgba(0,50,255,0.4), 0 0 0 0px rgba(0,0,0,0.16);'src="<?php echo $image; ?>" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h3><?php echo $venue; ?></h5><!--content title-->
                                                <p>
                                                One of the key elements of any successful event is the venue. Choosing a location that is convenient and accessible for your guests, while also offering the right atmosphere and amenities, can make all the difference.
                                                 
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                               <?php echo $desc; ?>
                                                </p>

                                                <h4>
                                                   <b> Rent(Per Day)</b>  :- <?php echo $price; ?>
                                                 </h4>
                                                 <h4>
                                                    <b>Address</b>  :- <?php echo $address; ?>
                                                    </h4>
                                                    <h4>
                                                   <b> City</b>  :- <?php echo $city; ?> - <?php echo $pin; ?>
                                                    </h4>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title"><?php echo $venue; ?></h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            The best for Special Event
                            </p>
                            <p class="definition"><!--content body-->
                            <?php echo $desc; ?>
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#<?php echo $id; ?>"><!--button for modal trigger-->
                            Details  <!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div--> 
            
            <?php } ?>

            
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>
        <?php  require "footer.php"; ?>
    </body>
</html>
