<head>

<?php 
require 'header3.php';
require 'styles.php';?>
<link rel="stylesheet" href="css/btnservice.css">
<link rel="stylesheet" href="css/btndelete.css">
</head>
<center><h2>Services </h2></center>
<?php 
session_start();

require("connection.php");
//echo $_SESSION['name'];
//echo rand(10,10000);
$sql1="select * from Servicemaster";
$rs1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($rs1))
{
    if(mysqli_num_rows($rs1)>0)

 ?>  
 
<hr class="customline">
 <div class="row"><!--wedding content-->
 <section>
     <div class="container">
         <div class="col-md-6"><!--image holder with 6 grid columns-->
       
         <img src='<?php echo $row1['Sphoto'];?>' width="500px"  style="border-radius:15px;border: 3px solid black;height:350px; box-shadow: 0px 0px 15px 10px rgba(0,0,0,0.4), 0 0 0 0px rgba(0,0,0,0.16);"class="img-responsive">
            
         </div>
         <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
             <h1><?php echo $row1['Sname']; ?></h1>
             <h3>Rate : <?php echo $row1['Sprice']; ?></h3><!--title-->
             <p><!--content-->
             <?php echo $row1['Sdesc'];?>
             </p>
             <hr class="customline"><!--css modified horizontal line-->
            <a href="serviceinfo.php?Sname=<?php echo $row1['Sname']; ?>"><button class="cta">
  <span>See more...</span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</button><!--view event button (no function implemented)-->
<!--arrow right glyphicon-->
             </button></a>
         </div><!--subcontent div-->
     </div><!--container div-->
 </section>
</div><!--row div-->
<?php } ?>
<hr class="customline">
<?php require 'footer.php'; ?>
