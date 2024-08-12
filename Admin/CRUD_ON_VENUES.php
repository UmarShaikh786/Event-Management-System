<?php  error_reporting(0); ?> 
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

$vname = $_POST['name'];
$price = $_POST['price'];
$mno = $_POST['mno'];
$mname = $_POST['mname'];
$city = $_POST['city'];
$pin = $_POST['pin'];
$address = $_POST['address'];
$id = $_POST['id'];
$desc =  $_POST['desc'];




$image = $_FILES['file']['name'];
$tempname = $_FILES['file']['tmp_name'];
 $folder = "images/".$image;


$sql="insert into venuemaster(Vname,Image,Vdesc,Price,Mno,Mname,Address,City,Pincode)values('$vname','$folder','$desc',$price,'$mno','$mname','$address','$city',$pin)";  

mysqli_query($conn,$sql);

echo "record inserted";
//echo $sql;
}





function update(){

    global $conn;
    $vname = $_POST['name'];
    $price = $_POST['price'];
    $mno = $_POST['mno'];
    $mname = $_POST['mname'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $address = $_POST['address'];
    $id = $_POST['id'];
    $desc =  $_POST['desc'];
    
    
    
    
    $image = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
     $folder = "images/".$image;
    
    
    $sql="update venuemaster set Vname='$vname' , Image='$folder' , Vdesc='$desc' , Price=$price , Mno='$mno' , Mname='$mname' , Address='$address' , City='$city' , Pincode= $pin where VId=$id  ";  
    mysqli_query($conn,$sql);
    
   
    echo "Updated Successfully";
}

function delete(){

    global $conn;

    $id = $_POST['id'];
    $sql="Delete from venuemaster WHERE VId = $id";
    mysqli_query($conn,$sql);
    echo "Delete Successfully";
}

?>