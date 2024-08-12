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

$service = $_POST['service'];
$desc =  $_POST['desc'];
$price =  $_POST['price'];
$image = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
 $folder = "images/".$image;


$sql="insert into Servicemaster(Sphoto,Sname,Sprice,Sdesc)values('$folder','$service',$price,'$desc')";  

mysqli_query($conn,$sql);

echo "record inserted";
}





function update(){

    global $conn;
    $id = $_POST['id'];
    $service = $_POST['service'];
    $desc =  $_POST['desc'];
    $price =  $_POST['price'];
    $image = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
     $folder = "images/".$image;
    
    $sql="update Servicemaster set Sphoto = '$folder' ,Sprice =$price, Sname='$service',Sdesc='$desc' where Sid= $id";  
    mysqli_query($conn,$sql);
    
   
    echo "Updated Successfully";
}

function delete(){

    global $conn;

    $id = $_POST['id'];
    $sql="Delete from Servicemaster WHERE Sid = $id";
    mysqli_query($conn,$sql);
    echo "Delete Successfully";
}

?>