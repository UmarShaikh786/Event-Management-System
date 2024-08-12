<head>
<link rel="stylesheet" href="css/btndelete.css">
<link rel="stylesheet" href="css/botton.css">
</head>
<form method="POST" enctype="multipart/form-data">
    

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(action,id){
    $(document).ready(function(){
     /* var name = $('#name').val();
      var desc = $('#desc').val();
      var file = $('#file')[0].files[0];*/
     
      var fd = new FormData();
      /*fd.append("file",file);
      fd.append("name",name);
      fd.append("desc",desc);*/
      fd.append("action",action);
      fd.append("id",id);
      $.ajax({
        url: 'CRUD_ON_USER.php',
        type: 'post',
        data: fd,
        processData: false,
        contentType: false,
        success:function(response){
          alert(response);
          showUsers();
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>




<?php
//ADMIN USER 

require("connection.php");


//show data
$sql="select * from Usermaster";


   ?>
<form action="" method="GET" enctype="multipart/form-data" >
<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1>User Table</h1>
<table class="table table-striped  table-hover table-bordered table align-middle">
	 <tr class="table table-dark">
		<th>No </th>
		<th>Photo</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Password</th>
		<th>Profession</th>
		<th>Bdate</th>
		<th>Gender</th>
		<th>Address</th>
		<th>City</th>
		<th>Pincode</th>
		<th>DELETE</th>

	</tr>

<?php

	
			$rs=mysqli_query($conn,$sql);

			while($rec=mysqli_fetch_array($rs))
			{
              ?> 

			<tr><td><?php echo $rec['UId'] ?></td>
							<td><?php echo "<img src='../".$rec['Image']."' height='80' width='100' >"; ?></td>
							<td><?php echo $rec['Uname'] ?></td>
              <td><?php echo $rec['Mobile'] ?></td>
			  <td><?php echo $rec['Email'] ?></td>
			  <td><?php echo $rec['Password'] ?></td>
			  <td><?php echo $rec['Profession'] ?></td>
			  <td><?php echo $rec['Bdate'] ?></td>
			  <td><?php echo $rec['Gender'] ?></td>
			  <td><?php echo $rec['Address'] ?></td>
			  <td><?php echo $rec['City'] ?></td>
			  <td><?php echo $rec['Pincode'] ?></td>
							<td><button type ="button" class="btn btn-danger" onclick="submitData('delete',<?php echo $rec['UId'] ?>);">Delete</button> </td>
						</tr>
			<?php
			}
      $dir = dirname("NEW/".$rec[3],2);

      echo $dir;
			?>
            </table>
	
		
</div>
</form>


