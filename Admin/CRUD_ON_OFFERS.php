<?php error_reporting(0); ?> 
<?php

include_once "connection.php";



if(isset($_POST["action"])){

    if($_POST["action"] == "insert"){

        
            insert();
    }
    else if($_POST["action"] == "update"){

        
            update();
    }
    else{
      delete();
    }
  }

  
function insert(){
    global $conn;

$ename = $_POST['name'];
$price =  $_POST['price'];


$sql="insert into offers(Oname,Oprice)values('$ename',$price)";  

mysqli_query($conn,$sql);

echo "record inserted";
}





function delete(){

    global $conn;

    $id = $_POST['id'];
    $sql="Delete from offers WHERE Oid = $id";
    mysqli_query($conn,$sql);
    echo "Delete Successfully";
}

?>