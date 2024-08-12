<?php
error_reporting(0);
include("header3.php");
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="bookingAjax.js"></script> 
<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/profile.css">
    <?php require 'styles.php';?>

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <form method="POST">
    <!-- End -->
<?php 
//echo $_SESSION['id'];
$sql="select * from Usermaster where UId=".$_SESSION['id'];
$rs=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($rs))
{
?>
    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
            <img src="<?php echo $row['Image']; ?>" alt="" width="100" height="100" style=" border:solid black;box-shadow: 0px 5px 15px 10px rgba(0,0,0,0.4), 0 0 0 0px rgba(0,0,0,0.16);">

            <div class="name">
                <?php echo $row['Uname'];?>
            </div>
            <div class="job">
            <?php echo $row['Profession'];?>
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="Familytree/tree.php"  class="active">Family Tree</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="#bookings" class="active" onclick="show()">Event-Bookings</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="#bookings" class="active" onclick="show1()">Service-Bookings</a>
                <hr align="center">
            </div>
            <div class="url">
            <a href="logout.php" class="active">Logout</a>
        
                
        
    <hr align="center">
            </div>
        </div>
    </div>
    </form>
    <!-- End -->

    
    <!-- Main -->
    <div class="main">

    <div class="allContent-section">

    </div>

        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td> <?php echo $row['Uname'];?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $row['Email'];?></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td>:</td>
                            <td><?php echo $row['Mobile'];?></td>
                        </tr>
                        
                        <tr>
                            <td>Profession</td>
                            <td>:</td>
                            <td><?php echo $row['Profession'];?></td>
                        </tr>
                        
                        <tr>
                            <td>Birth-Date</td>
                            <td>:</td>
                            <td><?php echo $row['Bdate'];?></td>
                        </tr>
                        
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?php echo $row['Gender'];?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php echo $row['Address'];?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>:</td>
                            <td><?php echo $row['City'];?></td>
                        </tr>
                        <tr>
                            <td>Pincode</td>
                            <td>:</td>
                            <td><?php echo $row['Pincode'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
        </form>
    <!-- End -->
</html>

        
<?php } require("footer.php");?>
