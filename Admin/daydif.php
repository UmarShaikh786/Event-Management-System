
<?php
//ITS DOESN'T Run
//-----------------//


// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "panar");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Define the SQL query to fetch the birthday
$sql = "select date_format(birthdate, '%m-%d') as birthdate from family_master where u_id=1 ";


			$rs=mysqli_query($conn,$sql);

while ($rec = mysqli_fetch_array($rs)) {


  echo $rec['birthdate'];


  $birthday = $rec['birthdate'];
  $today = date("m-d");
  $todayYear = date("Y");
  $birthdayThisYear = $todayYear . "-" . $birthday;
  $daysUntilBirthday = floor((strtotime($birthdayThisYear) - strtotime(date("Y-m-d"))) / 86400);

  if ($daysUntilBirthday <=7) {
    echo "Your birthday is in ".$daysUntilBirthday." days! <br>";
  }


}

// Close the connection
mysqli_close($conn);

?>
