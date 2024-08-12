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

    $image = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
     $folder = "images/".$image;

$sql="insert into Gallery(Path)values('$folder')";  

mysqli_query($conn,$sql);

echo "record inserted";
}





function update(){

    global $conn;
    $id = $_POST['id'];
    $image = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
     $folder = "images/".$image;
    
    $sql="update Gallery set Path='$folder' where Gid= $id";  
    mysqli_query($conn,$sql);
    
   
    echo "Updated Successfully";
}

function delete(){

    global $conn;

    $id = $_POST['id'];
    $sql="Delete from Gallery WHERE Gid = $id";
    mysqli_query($conn,$sql);
    echo "Delete Successfully";
}

?>