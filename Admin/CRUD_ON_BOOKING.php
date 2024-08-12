<?php error_reporting(0); ?> 
<?php

include_once "connection.php";



  update();
  
  




function update(){

    global $conn;
    $id = $_POST['id'];
   
    
    $sql="update bookingmaster set status = 'Canceled'  where BId= $id";  
    mysqli_query($conn,$sql);
    
   
    echo "Event Has Been Canceled..";
}
?>
