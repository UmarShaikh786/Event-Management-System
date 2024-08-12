<?php
require("header3.php");
?>
 <?php require 'styles.php';?>
        <link rel="stylesheet" href="css/btnget.css">
        <?php
        
        session_start();
        require("connection.php");
        //echo $_SESSION['name'];
        $eid=$_SESSION['id'];
       $_SESSION['sname']=$name=$_GET['Sname'];
       //$name=$_SESSION['name'];
        if($name=="Car Decoration") {
              
              
              $sql="select * from Servicemaster where Sname='".$name."'";
              $rs=mysqli_query($conn,$sql);
              $row=mysqli_fetch_array($rs);
              $_SESSION['price']=$price=$row['Sprice'];
              $_SESSION['Sname']=$name;
           
              ?>
              
<h2 align="center">Our Works: Car Decoration</h2>       
       <hr class="customline">

<center>     <div>
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/car1.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/car2.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/car3.jpg" >
 <hr class="customline"><image style="width:400px;height:300px;border-radius:15px;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/car4.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/car5.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/car7.jpeg" >
</div>
<br>
<style>
     </style>
     <?php if(isset($eid)){?>
<a href="RazorPay\payservice.php"> <div>
  <button class="buttonget" style="">Get Service</button>
</div></a>
<?php }else {?><a href="login.php"> <div>
  <button class="buttonget" style="">Get Service</button>
</div></a>
<?php }?>
</center>
<hr class="customline">
<?php } elseif($name=="Room Decoration") { 
       
       $sql="select * from Servicemaster where Sname='".$name."'";
       $rs=mysqli_query($conn,$sql);
       $row=mysqli_fetch_array($rs);
       $_SESSION['price']=$price=$row['Sprice'];
       $_SESSION['Sname']=$name;
    
       ?>
       <h2 align="center">Our Works: Room Decoration</h2>       
       <hr class="customline">

<center>     <div >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/room2.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/room3.jpg">
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/room4.jpg" >
 <hr class="customline">
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/room5.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/room6.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/room7.jpeg" >
</div>
<br>
<style>
     </style>
          <?php if(isset($eid)){?>
<a href="RazorPay\payservice.php"> <div>
  <button class="buttonget" style="">Get Service</button>
</div></a>
<?php }else {?><a href="login.php"> <div>
  <button class="buttonget" style="">Get Service</button>
</div></a>
<?php }?>

</center>
<hr class="customline">
<?php } else {
        $sql="select * from Servicemaster where Sname='".$name."'";
        $rs=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($rs);
        $_SESSION['price']=$price=$row['Sprice'];
        $_SESSION['Sname']=$name;
     
       ?>

       <h2 align="center">Our Works: Stage Decoration</h2>       
       <hr class="customline">

<center>     <div >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/stage1.jpeg" >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/stage8.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/stage4.jpg" >
 <hr class="customline">
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/stage5.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/stage6.jpg" >
 <image style="width:400px;height:300px;border-radius:15px;position:center;border: 3px solid black;margin-right:30px; box-shadow: 10px 5px 15px 10px rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);"src="images/stage7.jpg" >
</div>
<br>
<style>
     </style>
     <?php if(isset($eid)){?>
<a href="RazorPay\payservice.php"> <div>
  <button class="buttonget" style="">Get Service</button>
</div></a>
<?php }else {?><a href="login.php"> <div>
  <button class="buttonget" style="">Get Service</button>
</div></a>
<?php }?>
</center>
<hr class="customline">
 <?php } ?>      

<?php
require("footer.php");
?>
