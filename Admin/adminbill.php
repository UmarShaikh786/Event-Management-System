<head>
<link rel="stylesheet" href="css/btndelete.css">
<link rel="stylesheet" href="css/botton.css">
</head>
<form method="POST" enctype="multipart/form-data">
    






<?php
//ADMIN Bill 

require("connection.php");

if(isset($_POST["submit"]))
{
  $session['name']= $name =$_POST["name"];
   $price =$_POST["price"];
   $desc =$_POST["desc"];
   $image =$_FILES["image"]["name"];
   $tempname = $_FILES["image"]["tmp_name"];
	$folder = "images/".$image;


   $sql="insert into Eventmaster(Ename,Ebudget,Edesc,Ephoto)values('$name','$price','$desc','$folder')";  
mysqli_query($conn,$sql);

}
//show data
$sql="select * from Billmaster";


   ?>
<form action="" method="GET" enctype="multipart/form-data" >
<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1>Event Bill Table</h1>
<table class="table table-striped  table-hover table-bordered table align-middle">
	 <tr class="table table-dark">
		<th>No </th>
		<th>User Name</th>
		<th>Venue price</th>
		<th>Food price</th>
		<th>Decoration Price</th>
		<th>Total bill</th>
		<th>Date</th>
		<th>Payment Id</th>
		<th>User Id</th>
    


	</tr>

<?php

	
			$rs=mysqli_query($conn,$sql);

			while($rec=mysqli_fetch_array($rs))
			{
              ?> 

			<tr><td><?php echo $rec['BId'] ?></td>
							
			<td><?php echo $rec['Uname'] ?></td>
              <td><?php echo $rec['Vbill'] ?></td>
			  <td><?php echo $rec['Fbill'] ?></td>
			  <td><?php echo $rec['Dbill'] ?></td>
			  <td><?php echo $rec['Total'] ?></td>
			  <td><?php echo $rec['date'] ?></td>
			  <td><?php echo $rec['paymentid'] ?></td>
			  <td><?php echo $rec['UId'] ?></td>
			           
						</tr>
			<?php
			}
      $dir = dirname("NEW/".$rec[3],2);

      echo $dir;
			?>
            </table>
	
		
</div>
</form>


