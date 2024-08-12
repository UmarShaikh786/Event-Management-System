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
        url: 'CRUD_ON_BOOKING.php',
        type: 'post',
        data: fd,
        processData: false,
        contentType: false,
        success:function(response){
          alert(response);
		  showBookings();
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>



<?php
//ADMIN Booking 

require("connection.php");


//show data
$sql="select * from Bookingmaster";


   ?>
<form action="" method="GET" enctype="multipart/form-data" >
<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1>Booking Table</h1>
<table class="table table-striped  table-hover table-bordered table align-middle">
	 <tr class="table table-dark">
		<th>No </th>
		<th>Event Name</th>
		<th>Venue Name</th>
		<th>Food Type</th>
		<th>Decoration Price</th>
		<th>Guest</th>
		<th>Starting-Date</th>
		<th>Ending-Date</th>
		<th>Strating-Time</th>
		<th>Ending-Time</th>
		<th>Status</th>
		<th>Booking-Date</th>
		<th>Payment</th>
		<th>User Id</th>
    	<th>Cancel</th>


	</tr>

<?php

	
			$rs=mysqli_query($conn,$sql);

			while($rec=mysqli_fetch_array($rs))
			{
              ?> 

			<tr><td><?php echo $rec['BId'] ?></td>
							
			<td><?php echo $rec['Etype'] ?></td>
              <td><?php echo $rec['Vtype'] ?></td>
			  <td><?php echo $rec['Ftype'] ?></td>
			  <td><?php echo $rec['Dprice'] ?></td>
			  <td><?php echo $rec['Guest'] ?></td>
			  <td><?php echo $rec['Sdate'] ?></td>
			  <td><?php echo $rec['Edate'] ?></td>
			  <td><?php echo $rec['Stime'] ?></td>
			  <td><?php echo $rec['Etime'] ?></td>
			  <td><?php echo $rec['Status'] ?></td>
			  <td><?php echo $rec['Booking_date'] ?></td>
			  <td><?php echo $rec['Payment'] ?></td>
			  <td><?php echo $rec['UId'] ?></td>
			  <td> <button type="button"  class="btn btn-warning"  onclick="submitData('update',<?php echo $rec['BId'] ?>);">Cancel</button> </td>
                       
						</tr>
			<?php
			}
      $dir = dirname("NEW/".$rec[3],2);

      echo $dir;
			?>
            </table>
	
		
</div>
</form>


