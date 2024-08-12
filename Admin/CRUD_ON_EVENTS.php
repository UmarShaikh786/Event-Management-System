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
$desc =  $_POST['desc'];
$image = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
 $folder = "images/".$image;


$sql="insert into Eventmaster(Ename,Edesc,Ephoto)values('$ename','$desc','$folder')";  

mysqli_query($conn,$sql);

echo "record inserted";
}





function update(){

    global $conn;
    $id = $_POST['id'];
    $ename = $_POST['name'];
    $desc =  $_POST['desc'];
    $image = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
     $folder = "images/".$image;
    
    $sql="update Eventmaster set Ename = '$ename' ,Edesc ='$desc', Ephoto='$folder' where Eid= $id";  
    mysqli_query($conn,$sql);
    
   
    echo "Updated Successfully";
}

function delete(){

    global $conn;

    $id = $_POST['id'];
    $sql="Delete from Eventmaster WHERE Eid = $id";
    mysqli_query($conn,$sql);
    echo "Delete Successfully";
}

?>