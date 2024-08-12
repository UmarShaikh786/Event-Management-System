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
      
      var fd = new FormData();
      
      fd.append("action",action);
      fd.append("id",id);
      $.ajax({
        url: 'CRUD_ON_REVIEW.php',
        type: 'post',
        data: fd,
        processData: false,
        contentType: false,
        success:function(response){
          alert(response);
          showReview();
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>




<?php
//ADMIN Review 

require("connection.php");


//show data
$sql="select * from Review_table";


   ?>
<form action="" method="GET" enctype="multipart/form-data" >
<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1>Review Table</h1>
<table class="table table-striped  table-hover table-bordered table align-middle">
	 <tr class="table table-dark">
		<th>No </th>
		<th>Name</th>
		<th>Rating</th>
		<th>Message</th>
		
		
		<th>DELETE</th>

	</tr>

<?php

	
			$rs=mysqli_query($conn,$sql);

			while($rec=mysqli_fetch_array($rs))
			{
              ?> 

			<tr><td><?php echo $rec['review_id'] ?></td>
							
							
              <td><?php echo $rec['user_name'] ?></td>
			  <td><?php echo $rec['user_rating'] ?></td>
			  <td><?php echo $rec['user_review'] ?></td>
			 
			          
			  <td><button type ="button" class="btn btn-danger" onclick="submitData('delete',<?php echo $rec['review_id'] ?>);">Delete</button> </td>
						</tr>
			<?php
			}
    
			?>
            </table>
	
		
</div>
</form>


