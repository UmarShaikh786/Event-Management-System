
<!-- Created By CodingLab - www.codinglabweb.com -->

<?php require 'styles.php';?>
<body>
  <form method="POST">
  <div class="container">
 <center>   <div class="title">Login</div></center>
    <div class="content">
      <form action="index.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Enter Email ID</span>
            <input type="email" placeholder="Enter your Email" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'];?> "required>
          </div>
          <div class="input-box">
            <span class="details">Enter Password</span>
            <input type="password" placeholder="Enter your Password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; else echo "";?>"required>
          </div>
<?php

     require('connection.php');     //admin login code
 if(isset($_POST['login']))
 {
  session_start();
  $username=$_POST['id'];
  $pass=$_POST['pass'];
 
     $sql="select * from Usermaster where Email='".$username."' and Password='".$pass."'";
 
     $rs=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($rs);
  $_SESSION['id']=$row['UId'];
  $_SESSION['email']=$row['Email'];
  $_SESSION['name']=$row['Uname'];
     if(mysqli_num_rows($rs)>0)
   header("location:index.php");
   //include_once("emails\send.php");}
             else
       echo "<span class='alert alert-danger' > Invalid Creditionals </span>"; 
 }
 ?>
        <div class="buttonreg">
          <input type="submit" name="login" value="Login">
        </div>
        <p><a href="register.php" style="color:black ; font-size:20px ; font-weight: bold;margin-left:90px; " onmouseover="this.style.color='blue'" onmouseOut="this.style.color='black'" > Newuser?Register.</a></p>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
</body>



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
  
}
.container{
  margin-left: 550px;
  margin-top:  40px;
  margin-bottom:  40px;
  max-width: 400px;
  width: 100%;
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
  left: 135px;
  bottom: -2px;
  height: 3px;
  width: 35px;
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
  width: calc(100%);
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
.user-details .input-box textarea{
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
.user-details .input-box input:valid{
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
    width: 100%;
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
    