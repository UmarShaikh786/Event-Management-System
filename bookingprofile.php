<form method="POST" enctype="multipart/form-data">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script type="text/javascript">
		function submitData(action, id) {
			$(document).ready(function () {
				//  var file = $('#file')[0].files[0];

				var fd = new FormData();
				// fd.append("file",file);
				fd.append("action", action);
				fd.append("id", id);
				$.ajax({
					url: 'Admin/CRUD_ON_BOOKING.php',
					type: 'post',
					data: fd,
					processData: false,
					contentType: false,
					success: function (response) {
						alert(response);
						show();
						if (response == "Deleted Successfully") {
							$("#" + action).css("display", "none");
						}
					}
				});
			});
		}
	</script>



	<?php
	 
	
	require("connection.php");

	session_start();
	//show data Query

	$sql = "select * from Bookingmaster where UId =" . $_SESSION['id'];


	?>
	<form action="" method="GET" enctype="multipart/form-data">
		<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet">
		<h3 align="center">Bookings Status</h3>
		<hr>
		<table class="table table-striped  table-hover table-bordered table align-middle">
			<tr style="color : white; background : black">
				
				<th>Event Name</th>
				<th>Venue Name</th>
				<th>Food Type</th>
				
				<th>Guest</th>
				<th>Event Date</th>
				
				<th>Time</th>
				
				<th>Status</th>
				<th>Booking-Date</th>
				<th>Payment</th>
				
				<th>Cancel</th>


			</tr>

			<?php


			$rs = mysqli_query($conn, $sql);

			while ($rec = mysqli_fetch_array($rs)) {
				?>

				<tr>
					

					<td>
						<?php echo $rec['Etype'] ?>
					</td>
					<td>
						<?php echo $rec['Vtype'] ?>
					</td>
					<td>
						<?php echo $rec['Ftype'] ?>
					</td>
					
					<td>
						<?php echo $rec['Guest'] ?>
					</td>
					<td>
						<?php echo $rec['Sdate'] ?>
					</td>
					
					<td>
						<?php echo $rec['Stime'] ?>
					</td>
					
					<td>
						<?php echo $rec['Status'] ?>
					</td>
					<td>
						<?php echo $rec['Booking_date'] ?>
					</td>
					<td>
						<?php echo $rec['Payment'] ?>
					</td>
					
					<td> <button type="button" class="btn btn-warning"
							onclick="submitData('update',<?php echo $rec['BId'] ?>);">Cancel</button> </td>

				</tr>
				<?php
			}
			$dir = dirname("NEW/" . $rec[3], 2);

			echo $dir;
			?>
		</table>


		</div>
	</form>