<?php error_reporting(0); ?> 
<?php

include_once "connection.php";



  update();
  
  




function update(){

    global $conn;
    $id = $_POST['id'];
   
    
    $sql="update Servicebooking set Status = 'Canceled'  where Sid= $id";  
    mysqli_query($conn,$sql);
    
   
    echo "Service Has Been Canceled..";
}
?>
