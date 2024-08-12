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
    //  var file = $('#file')[0].files[0];
     
      var fd = new FormData();
     // fd.append("file",file);
      fd.append("action",action);
      fd.append("id",id);
      $.ajax({
        url: 'CRUD_ON_SERVICE_BOOK.php',
        type: 'post',
        data: fd,
        processData: false,
        contentType: false,
        success:function(response){
          alert(response);
		  showServiceBookings();
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>






<?php
//ADMIN Service 

require("connection.php");


//show data
$sql="select * from Servicebooking";


   ?>

<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1>Service Table</h1>
<table class="table table-striped  table-hover table-bordered table align-middle">
	 <tr class="table table-dark">
		<th>No </th>
		<th>User Name</th>
		<th>Service Name</th>
		<th>Service Price</th>

		<th>Date</th>
		<th>Status</th>
		<th>Payment</th>
		<th>Payment Id</th>
		<th>User Id</th>
    	<th>Cancel</th>


	</tr>

<?php

	
			$rs=mysqli_query($conn,$sql);

			while($rec=mysqli_fetch_array($rs))
			{
              ?> 

			<tr><td><?php echo $rec['Sid'] ?></td>
							
			<td><?php echo $rec['Uname'] ?></td>
              <td><?php echo $rec['Sname'] ?></td>
			  <td><?php echo $rec['Sprice'] ?></td>
			  <td><?php echo $rec['date'] ?></td>
			  <td><?php echo $rec['Status'] ?></td>
			  <td><?php echo $rec['Payment'] ?></td>
			  <td><?php echo $rec['paymentid'] ?></td>
			  <td><?php echo $rec['UId'] ?></td>
			 <td> <button type="button"  class="btn btn-warning"  onclick="submitData('update',<?php echo $rec['Sid'] ?>);">Cancel</button> </td>
                       
						</tr>
			<?php
			}
     
			?>
            </table>
	
		
</div>
</form>


