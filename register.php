<?php require 'header3.php'; ?>
<?php require 'styles.php';?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
  <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 110vh;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background-color: gainsboro;
  
}
.container{
  
  margin-top:  40px;
  margin-bottom:  40px;
  
  border-color:2px;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0px 0px 15px 10px rgba(0,0,250,0.3), 0 0 0 0px rgba(0,0,0,0.16);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0px;
  bottom: -5px;
  height: 3px;
  width: 100%;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .user-details .input-box1{
  margin-bottom: 15px;
  width: calc(100%);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input,select{
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
.user-details .input-box1 textarea{
  height: 45px;
  
  max-width: 1100px;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
.user-details .input-box1 textarea:focus,
.user-details .input-box1 textarea:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .buttonreg{
   height: 45px;
   margin: 35px 0
 }
 form .buttonreg input{
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
   background: rgba(100,120,248); 
   
 }
 form .buttonreg input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(135deg, #71b7e6, #9b59b6); 
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

    </style>

   </head>
<body>
  <div class="container">
    <center><div class="title">Registration</div></center>
    <div class="content">
      <form action="#" method="POST" enctype="multipart/form-data">
      <div class="user-details">
      <?php if(isset($_POST['insert'])){ ?>
      
       
        <span class="alert alert-success">Registered Succesfully</span><?php }?>
        <div class="input-box1">
            <span class="details">Upload Image</span>
            <input type="file" placeholder="Enter your city" value="Browse"  name="file" required>
          </div>

          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first-name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last-name" name="lname" required>
          </div>
           <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your mobile number" name="mobile" required>
          </div>
           <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password"  name="pass" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Enter your password"  required>
          </div>
          
             <div class="input-box">
               
            <span class="details">Profession</span>
            <select name="prof">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                <option value="Doctor">Doctor</option>
                <option value="Engineer">Engineer</option>
                <option value="developer">Developer</option>
            </select>
            </div>

           <div class="input-box">
            <span class="details">Birth-Date</span>
            <input type="date" name="bod" required>
          </div>

          <div class="input-box1">
            <span class="details">Address</span><br>
            <textarea  name="address" id="w3review" rows="5" cols="140" placeholder="Enter your address" required></textarea>
          </div>

          <div class="input-box">
            <span class="details">City</span>
            <input type="text" placeholder="Enter your city" name="city" required>
          </div>
          
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="number" placeholder="Enter your pincode" name="pin" required>
          </div>


          

        </div>
        <div class="gender-details" >
          <input type="radio" name="gender" value="Male" id="dot-1" >
          <input type="radio" name="gender" value="Female"id="dot-2">
          <input type="radio" name="gender" value="Prefer not to say" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" >Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span  class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span  class="gender" >Prefer not to say</span>
            </label>
          </div>


        </div>

        

        <div class="buttonreg">
          <input type="submit" value="Register" name="insert">
        </div>


    

        <?php 
        
        require("connection.php");
      if(isset($_POST['insert']))
  {
    session_start();

    $name=$_POST['fname']." ".$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $pin=$_POST['pin'];
    $password=$_POST['pass'];
    $prof=$_POST['prof'];
    $bod=$_POST['bod'];
    
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "Users/".$filename;
    
    move_uploaded_file($tempname,$folder);
    
    $sql = "insert into Usermaster(Uname,Image,Mobile,Email,Password,Profession,Bdate,Gender,Address,City,Pincode) values ('$name','$folder','$mobile','$email','$password','$prof','$bod','$gender','$address','$city',$pin)";

    mysqli_query($conn,$sql);
   ?>
<?php
 $sql="select * from Usermaster where Email='".$email."' and Password='".$password."'";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    $_SESSION['name']=$name=$row['Uname'];
    $_SESSION['email']=$name=$row['Email'];
    if(mysqli_num_rows($rs)>0)
    header("location:index.php");
      include_once("emails\send.php")  
 
?><?php    } ?>


      <center>  <p><a href="Login.php" style="color:black ; font-size:20px ; font-weight: bold; " onmouseover="this.style.color='blue'" onmouseOut="this.style.color='black'" > ExistingUser?Login.</a></p></center>
      </form>
    </div>
  </div>

</body>
</html>

<?php require 'footer.php'; ?>
