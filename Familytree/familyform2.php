<head>
  <link rel="stylesheet" href="../styles/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!---<title> Responsive Registration Form | CodingLab </title>--->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


  <div style="background : rgba(100, 120, 248) ; height:30px">
    <marquee class="news-content" width="100%" direction="left" height="100px">
      <p>Fill Your Family Information To Get Notifications Of Your Upcomming Birthdays And Anniversary On Email
        Before 1 Week. !!!!</p>
    </marquee>
</div>
<div>
</div>

  <div id="container" class="container">
    <center>
      <div class="title">Family Form</div>
    </center>
    <div class="content">
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="user-details">

          <div class="input-box1">
            <span class="details">Upload Image</span>
            <input type="file" placeholder="" value="Browse" name="file" required>
          </div>

          <div class="input-box">
            <span class="details">Member Name</span>
            <input type="text" placeholder="Enter your Member name" name="name" required>
          </div>
          <div class="input-box">

            <span class="details">Relation</span>
            <select name="relation">
              <option value="Father">Father</option>
              <option value="Mother">Mother</option>
              <option value="Brother">Brother</option>
              <option value="Sister">Sister</option>
              <option value="Husband">Husband</option>
              <option value="Wife">Wife</option>
              <option value="Son">Son</option>
              <option value="Daughter">Daughter</option>

            </select>
          </div>

          <div class="input-box">
            <span class="details">Birth-Date</span>
            <input type="date" name="bdate" required>
          </div>


          <div class="input-box">
            <span class="details">Marraige-Date</span>
            <input type="date" name="mdate"  required>
          </div>
        </div>


        <div class="buttonadd">
        <input type="submit" value="Add Member" name="submit">
        </div>
        <div class="buttonreg">
          <input type="submit" value="Register" name="insert">
        </div>
    </div>

 
    <?php 
    require("../connection.php");
    session_start();
if(isset($_POST['submit']))
{
$uid=$_SESSION['id'];
    global $conn;
    $relation=$_POST['relation'];
    $name=$_POST['name'];
    $bdate=$_POST['bdate'];
    $mdate=$_POST['mdate'];
    $image = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name'];
     $folder = "Images/".$image;

     move_uploaded_file($tempname,$folder);

 $sql="insert into familyinfo(Image,Relation,name,Birth,Mdate,UId)values('$folder','$relation','$name','$bdate','$mdate',$uid)";  

mysqli_query($conn,$sql);

//-  header("Location:familyform2.php");
}
//register Button
if(isset($_POST['insert']))
{
$uid=$_SESSION['id'];
    global $conn;
    $relation=$_POST['relation'];
    $name=$_POST['name'];
    $bdate=$_POST['bdate'];
    $mdate=$_POST['mdate'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "Images/".$filename;
    
    move_uploaded_file($filename,$folder);

 $sql="insert into familyinfo(Image,Relation,name,Birth,Mdate,UId)values('$folder','$relation','$name','$bdate','$mdate',$uid)";  

mysqli_query($conn,$sql);

echo "
<script>
alert('Registered Successfully');

window.location.href = 'tree.php';
</script>
";
}
?>
   </form>


  </div>
  </div>
  
  <div>
    <center><a class="btn btn-link" href="../profile.php">
      << Go Back</a></center>
  </div>

</body>

</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    height: 110vh;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background-color: gainsboro;


  }

  .container {
    margin-left: 400px;
    margin-top: 40px;
    margin-bottom: 40px;
    max-width: 700px;
    width: 100%;
    height: 570px;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0px 5px 15px 10px rgba(0,50,255,0.4), 0 0 0 0px rgba(0,0,0,0.16);
  }

  .container .title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }

  .container .title::before {
    content: "";
    position: absolute;
    left: 250px;
    bottom: -5px;
    height: 3px;
    width: 60px;
    border-radius: 5px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }

  .content form .user-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
  }

  form .user-details .input-box {
    margin-bottom: 15px;
    width: calc(100%);
  }

  form .user-details .input-box1 {
    margin-bottom: 15px;
    width: calc(100%);
  }

  form .input-box span.details {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
  }

  .user-details .input-box input,
  select {
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
  }

  .user-details .input-box textarea {
    height: 45px;
    width: 300%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
  }

  .user-details .input-box input:focus,
  .user-details .input-box input:valid {
    border-color: #9b59b6;
  }

  form .gender-details .gender-title {
    font-size: 20px;
    font-weight: 500;
  }

  form .category {
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
  }

  form .category label {
    display: flex;
    align-items: center;
    cursor: pointer;
  }

  form .category label .dot {
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #d9d9d9;
    border: 5px solid transparent;
    transition: all 0.3s ease;
  }

  #dot-1:checked~.category label .one,
  #dot-2:checked~.category label .two,
  #dot-3:checked~.category label .three {
    background: #9b59b6;
    border-color: #d9d9d9;
  }

  form input[type="radio"] {
    display: none;
  }

  form .buttonreg {
    height: 45px;
    margin: 25px 0
  }

  form .buttonadd {
    height: 45px;
    margin: 25px 0
  }

  form .buttonadd input {
    height: 45px;
    width: 22%;
    margin-left: 0px;
    margin-top: -10px;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: rgba(100, 120, 248);

  }

  form .buttonreg input {
    height: 100%;
    width: 40%;
    margin-left: 400px;
    margin-top: -95px;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    background: rgba(100, 120, 248);

  }

  form .buttonreg input:hover {
    /* transform: scale(0.99); */
    /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
    background-color: springgreen;
    color: black;
  }

  form .buttonadd input:hover {
    /* transform: scale(0.99); */
    color: black;
    background-color: springgreen;
  }

  @media(max-width: 584px) {
    .container {
      max-width: 100%;
    }

    form .user-details .input-box {
      margin-bottom: 15px;
      width: 100%;
    }

    form .category {
      width: 100%;
    }

    .content form .user-details {
      max-height: 300px;
      overflow-y: scroll;
    }

    .user-details::-webkit-scrollbar {
      width: 5px;
    }
  }

  @media(max-width: 459px) {
    .container .content .category {
      flex-direction: column;
    }
  }




  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  .news marquee {
    font-size: 18px;
    margin-top: 12px;
    background: #cc4444;
  }

  .news-content p {
    margin-right: 41px;
    display: inline;
    color : white;
    font-weight: bold;
    font-size: 20px;
  
  }








 
 
</style>