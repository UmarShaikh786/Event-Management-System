<?php require 'header3.php'; ?>

<!-- Created By CodingLab - www.codinglabweb.com -->
<html>

<head>
  <meta charset="UTF-8">
  <!---<title> Responsive Registration Form | CodingLab </title>--->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php
  $event = $_GET["Ename"];

  ?>
  <div class="container">
    <center>
      <div class="title">Event Booking</div>
    </center>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Your Event Type</span>
            <select name="Event">
              <option value='<?php if (isset($event))
                echo $event;
              else
                echo ""; ?>'><?php if (isset($event))
                    echo $event;
                  else
                    echo ""; ?></option>
            </select>
          </div>


          <div class="input-box">
            <span class="details">Select Your Venue</span>
            <select name="venue">
              <?php
              session_start();
              require("connection.php");
              $sql = "select * from venuemaster";
              $rs = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($rs)) {

                ?>
              <option value="<?php echo $row['Vname']; ?>"><?php echo $row['Vname']; ?></option>
              <?php
              } ?>
            </select>

          </div>



          <div class="input-box">
            <span class="details">Select Your Food Type</span>
            <select name="food" onchange=submit()>

              <?php

              $sql = "select * from foodmenu";
              $rs = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($rs)) {

                ?>
              <option value="<?php echo $row['Foodtype']; ?>"><?php echo $row['Foodtype']; ?></option>
              <?php

              } ?>
            </select>
          </div>


          <div class="input-box">
            <span class="details">Select Your Food Type</span>
            <select name="food">

              <?php
              $drop1 = $_POST['food'];

              $sql = "select * from foodmenu"; // where Foodtype=" . $drop1;
              $rs = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($rs)) {

                ?>
              <option value="<?php echo $row['Description']; ?>"><?php echo $row['Description']; ?></option>
              <?php


              } ?>

            </select>
          </div>

          <div class="input-box">
            <span class="details">Decoration Range</span>
            <input type="range" min="1000" max="50000" name="rangeInput" onchange="updateTextInput(this.value);"
              required>
            <input type="text" id="textInput" value="1000" name="drange" required>
          </div>
          <div class="input-box">
            <span class="details">Number Of Guests</span>
            <input type="text" placeholder="Enter your Number of Guest " name="Nguest" required>
          </div>


          <script>
             function checkfirstDate() {
   var selectedText = document.getElementById('datepicker').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
    alert("Date must be in the future");
   }
 }

 function checksecondDate() {
   var selectedText = document.getElementById('dateafter').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
    alert("Date must be in the future");
   }
 }

            </script>
          <div class="input-box">
            <span class="details">Start-Date</span>
            <input type="date" name="Sdate"  id="datepicker" onchange="checkfirstDate()" required>
          </div>


          <div class="input-box">
            <span class="details">End-Date</span>
            <input type="date" name="Edate" id="dateafter" onchange="checksecondDate()" required>
          </div>


          <div class="input-box">
            <span class="details">Start-Time</span>
            <input type="time" name="Stime" placeholder="Enter your Start Time " required>
          </div>


          <div class="input-box">
            <span class="details">End-Time</span>
            <input type="time" name="Etime" placeholder="Enter your End Time" required>
          </div>
        </div>



        <div class="buttonreg">
          <input type="submit" value="Book Event" name="submit" name="insert">
        </div>


      </form>
    </div>
  </div>

</body>

</html>
<script>

  function updateTextInput(val, text) {
    var x = document.getElementById("textInput").value = val;
  }
</script>

<?php

if (isset($_POST['submit'])) {

  $sql = "select * from foodmenu where Foodtype = '" . $_POST['food'] . "'";
  $rs = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($rs);
  $Fprice = $_SESSION['Fprice'] = $row['Price'] * $_POST['Nguest'];
  ;

  $sql = "select * from Venuemaster where Vname = '" . $_POST['venue'] . "'";
  $rs = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($rs);
  $vprice = $_SESSION['Vprice'] = $row['Price'];

  $event = $_SESSION['Event'] = $_POST['Event'];
  $venue = $_SESSION['venue'] = $_POST['venue'];
  $food = $_SESSION['food'] = $_POST['food'];
  $drange = $_SESSION['drange'] = $_POST['drange'];
  $Nguest = $_SESSION['Nguest'] = $_POST['Nguest'];
  $Sdate = $_SESSION['Sdate'] = $_POST['Sdate'];
  $Edate = $_SESSION['Edate'] = $_POST['Edate'];
  $Stime = $_SESSION['Stime'] = $_POST['Stime'];
  $Etime = $_SESSION['Etime'] = $_POST['Etime'];
  $uid = $_SESSION['id'];
  $today = getdate();
  $date = "$today[year]-$today[mon]-$today[mday]";


  $insert = "insert into bookingmaster ( Etype, Vtype, Ftype, Dprice, Guest, Sdate, Edate, Stime, Etime, Status, Booking_date, Payment, UId) values ('$event','$venue','$food',$drange,$Nguest,'$Sdate','$Edate','$Stime','$Etime','Active','$date','Pending',$uid)";
  mysqli_query($conn, $insert);
  echo "
<script>
alert('Booking Success Make Payment Now');

window.location.href = 'RazorPay/pay.php';
</script>
";

}

?>





<?php require 'footer.php'; ?>

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
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0px 0px 15px 10px rgba(0,255,150,0.4), 0 0 0 0px rgba(0,0,0,0.16);

  }

  .container .title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }

  .container .title::before {
    content: "";
    position: absolute;
    left: 240px;
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
    width: calc(100% / 2 - 20px);
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
    margin: 35px 0
  }

  form .buttonreg input {
    height: 100%;
    width: 100%;
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
    background-color: black;
    color: white;
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
</style>