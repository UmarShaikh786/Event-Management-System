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

$ftype = $_POST['ftype'];
$cname =  $_POST['cname'];
$price =  $_POST['price'];
$cno =  $_POST['cno'];


$sql="insert into Foodmenu(Foodtype,Price,Catno,Catname)values('$ftype',$price,'$cno','$cname')";  

mysqli_query($conn,$sql);

echo "record inserted";
}





function update(){

    global $conn;
    $id = $_POST['id'];
    $ftype = $_POST['ftype'];
    $cname =  $_POST['cname'];
    $price =  $_POST['price'];
    $cno =  $_POST['cno'];  
    
    $sql="update Foodmenu set Foodtype = '$ftype' ,Price =$price, Catno='$cno',Catname='$cname' where Fid= $id";  
    mysqli_query($conn,$sql);
    
   
    echo "Updated Successfully";
}

function delete(){

    global $conn;

    $id = $_POST['id'];
    $sql="Delete from Foodmenu WHERE Fid = $id";
    mysqli_query($conn,$sql);
    echo "Delete Successfully";
}

?>