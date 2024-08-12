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
					url: 'Admin/CRUD_ON_SERVICE_BOOK.php',
					type: 'post',
					data: fd,
					processData: false,
					contentType: false,
					success: function (response) {
						alert(response);
						show1();
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

	//show data
	$sql = "select * from Servicebooking where UId=".$_SESSION['id'];


	?>

	<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<h3 align="center">Bookings Status</h3>
	<hr>
	<table class="table table-striped  table-hover table-bordered table align-middle">
		<tr style="color : white; background : black">
			
			
			<th>Service Name</th>
			<th>Service Price</th>

			<th>Date</th>
			<th>Status</th>
			<th>Payment</th>
			<th>Payment Id</th>
			
			<th>Cancel</th>


		</tr>

		<?php


		$rs = mysqli_query($conn, $sql);

		while ($rec = mysqli_fetch_array($rs)) {
			?>

			<tr>
				

				
				<td>
					<?php echo $rec['Sname'] ?>
				</td>
				<td>
					<?php echo $rec['Sprice'] ?>
				</td>
				<td>
					<?php echo $rec['date'] ?>
				</td>
				<td>
					<?php echo $rec['Status'] ?>
				</td>
				<td>
					<?php echo $rec['Payment'] ?>
				</td>
				<td>
					<?php echo $rec['paymentid'] ?>
				</td>
				
				<td> <button type="button" class="btn btn-warning"
						onclick="submitData('update',<?php echo $rec['Sid'] ?>);">Cancel</button> </td>

			</tr>
			<?php
		}

		?>
	</table>


	</div>
</form>