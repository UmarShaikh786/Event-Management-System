<?php error_reporting(0); ?> 
<?php

include_once "connection.php";



if(isset($_POST["action"])){

    if($_POST["action"] == "delete"){

        
      delete();
    }
    }
  

  
function delete(){

    global $conn;

    $id = $_POST['id'];
    $sql="Delete from Review_table WHERE review_id = $id";
    mysqli_query($conn,$sql);
    echo "Delete Successfully";
}

?>