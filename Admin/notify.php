<head>
<link rel="stylesheet" href="css/btndelete.css">
<link rel="stylesheet" href="css/botton.css">
</head>
<form method="POST" enctype="multipart/form-data">
    






<?php

use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;
//ADMIN Bill 

require("connection.php");
require '../emails/src/Exception.php';
require '../emails/src/PHPMailer.php';
require '../emails/src/SMTP.php';

//show data
$sql="select f.mid,f.name,f.Relation,date_format(f.Birth, '%m-%d')as Birthday,f.Birth,date_format(f.Mdate, '%m-%d')as Anniversary,f.Mdate,f.UId,u.Email,u.UId,u.UName from familyinfo f,Usermaster u where f.UId=u.UId order by f.mid ";


   ?>
<form action="notify.php" method="GET" enctype="multipart/form-data" >
<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php 
 session_start();
 if(isset($_SESSION['success'])){
	echo "Message Has been sent";   
}
?>
<h3>Upcoming Birthdays And Anniversary</h3>
<table class="table table-striped  table-hover table-bordered table align-middle">
	 <tr class="table table-dark">
		<th>Mid </th>
		<th>Email </th>
		<th>Name</th>
		<th>Birth-Date</th>
		<th>Anniversry</th>
		<th>User Id</th>
    


	</tr>

<?php

	
			$rs=mysqli_query($conn,$sql);
			while($rec=mysqli_fetch_array($rs))
			{
				
  $birthday = $rec['Birthday'];
  $today = date("m-d");
  $todayYear = date("Y");
  $birthdayThisYear = $todayYear . "-" . $birthday;
  $daysUntilBirthday = floor((strtotime($birthdayThisYear) - strtotime(date("Y-m-d"))) / 86400);


  $Anniversary = $rec['Anniversary'];
  $today = date("m-d");
  $todayYear = date("Y");
  $AnniversaryThisYear = $todayYear . "-" . $Anniversary;
  $daysUntilAnniversary = floor((strtotime($AnniversaryThisYear) - strtotime(date("Y-m-d"))) / 86400);


  if ($daysUntilBirthday <=7 && $daysUntilBirthday >0 || $daysUntilAnniversary <=7 && $daysUntilAnniversary >0) {
  // echo "Your birthday is in ".$daysUntilBirthday." days! <br>";
   
              ?> 

			<tr><td><?php echo $rec['mid'] ?></td>
			<td><?php echo $rec['Email'] ?></td>
			<td><?php echo $rec['name'] ?></td>
              <td><?php echo $rec['Birth'] ?></td>
			  <td><?php echo $rec['Mdate'] ?></td>
			  <td><?php echo $rec['UId'] ?></td>
			           
						</tr>
			<?php
			
  }

  
		

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function



if(isset($_GET['submit']))
{
	if ($daysUntilBirthday <=7 && $daysUntilBirthday >0) {

	
	$name = $rec['name'];
	$relation = $rec['Relation'];
	$email=$rec['Email'];
	$uname=$rec['UName'];
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'panarayaz0786@gmail.com';                     //SMTP username
    $mail->Password   = 'qdjxujtquxiialmr';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('panarayaz0786@gmail.com', 'Ayaz');
    $mail->addAddress($email, 'Umar');     //Add a recipient
  //  $mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Royal Events';
    $mail->Body    = 'hello <b>'.$uname.',</b><br><br> This is The Gentel Reminder For your <b>'.$relation.'-'.$name.'   </b>Birth-Day is Comming After <b>'.$daysUntilBirthday.'</b> Days. <br> IF You Want To Orgainze Birthday Party Then Visit Our Royal Event Menagement Site....<br>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo '<script> alert("Message has been sent");</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



//echo $daysUntilAnniversary;
	if ($daysUntilAnniversary <=7 && $daysUntilAnniversary >0) {

		echo "hello";
		$name = $rec['name'];
		$relation = $rec['Relation'];
		$email=$rec['Email'];
		$uname=$rec['UName'];
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	
	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'panarayaz0786@gmail.com';                     //SMTP username
		$mail->Password   = 'qdjxujtquxiialmr';                               //SMTP password
		$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
		//Recipients
		$mail->setFrom('panarayaz0786@gmail.com', 'Ayaz');
		$mail->addAddress($email, 'Umar');     //Add a recipient
	  //  $mail->addAddress('ellen@example.com');               //Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
	
		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Royal Events';
		$mail->Body    = 'hello <b>'.$uname.',</b><br><br> This is The Gentel Reminder For your <b>'.$relation.'-'.$name.'   </b>Anniversary is Comming After <b>'.$daysUntilAnniversary.'</b> Days. <br> IF You Want To Orgainze Party Then Visit Our Royal Event Menagement Site....<br>';
	   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
	   session_start();
		$_SESSION['success'] = "Messege Has Been Sent Successfully"; 
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
	
	
	
		}
	}

	}

			}
			
			?>
            </table>
	
		<input class="btn btn-success" type="submit" value="send Mail" name="submit"> 
</div>
</form>


