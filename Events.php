<?php 
session_start();
require("header3.php");?>
<!--
<style>
html {
  
}

html[data-theme='dark'] {
    background: #000;
    filter: invert(1) hue-rotate(180deg)
}
    </style>
    EDIT ON
<html>
  <body>
    <h1>Hello World</h1>
    <h2>Welcome to my Dark Mode Test</h2>
    <p>
      Here is some text to convert to dark mode
    </p>
    
    <img alt="test" src="https://livecodestream.dev/featured.png" width="100px" />
    
    <br />
    
    <button onclick="toggleTheme('dark');">Dark</button>
    
    <button onclick="toggleTheme('light');">Light Mode</button>
  </body>
</html>
<script>
const htmlEl = document.getElementsByTagName('html')[0];

const toggleTheme = (theme) => {
    htmlEl.dataset.theme = theme;
}
    </script>
-->
<title>Events</title>
<link  rel="icon"  type="image/x-icon" href="images/Rlogo.png">
<?php require 'styles.php';?>
<link rel="stylesheet" href="css/botton.css">
<h2 align="center">Events</h2>
<?php 

require("connection.php");
$sql="select * from Eventmaster";
$rs=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($rs))
{
//$wedding="Wedding";
 ?>  
 
<hr class="customline">
 <div class="row"><!--wedding content-->
 <section>
     <div class="container">
         <div class="col-md-6"><!--image holder with 6 grid columns-->
             <img src='<?php echo $row['Ephoto'];?>' width="500px" height="500px" class="img-responsive" style="border-radius:10px;border: 4px solid black; box-shadow: 0px 5px 15px 10px rgba(0,0,0,0.4), 0 0 0 0px rgba(0,0,0,0.16);">
         </div>
         <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
             <h1><?php echo $row['Ename']; ?></h1><!--title-->
             <p><!--content-->
             <?php echo $row['Edesc'];?>
             </p>
             <hr class="customline"><!--css modified horizontal line-->

            <a href="eventinfo.php?Ename=<?php echo $row['Ename'];?> "> <button class="btn"> View More.. </button><!--view event button (no function implemented)-->    
            
<!--arrow right glyphicon-->
             </button></a>
         </div><!--subcontent div-->
     </div><!--container div-->
 </section>
</div><!--row div-->


<?php

}
?>
<hr class="customline">
<?php
require("footer.php");
?>
