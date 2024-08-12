

<?php
require("header3.php");
?>

<h1 align="center">About us</h1>
<br><br>
<div class="row">
  
  <div class="columns">
  <br>  
  <h3>Who We Are?</h3>
    <p>
   -  We are Patan's one of popular Event Management.<br><br>- We have experience of 10 or more than 10 years in this area.<br>
</p>
  </div>
 
  <div class="columns">
  <br>
    <h3>Why We Are?</h3>
    <p>All the events which we Organize is budget-friendly to all.<br><br>- We have well professionaled staff.<br><br>- we gave first priority to our customers.<br><br>- We make your parties and functions memorable.<br>
</p>
   
  </div>
  <div class="columns">
    <br>
    <h3>What We Are?</h3>

    <p>All the events which we Organize is budget-friendly to all.<br><br>- We have well professionaled staff.<br><br>- we gave first priority to our customers.<br><br>- We make your parties and functions memorable.<br>
</p>
  </div>
 </div>
 <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
 <h1 align="center">Meeet The Team</h1>

 <div class="row">
  
  <div class="columns1">
  <p> </p>
  <img src="images\ayaz.png" style="height:150px;width:150px;border-radius:50%;object-fit:cover;background:#dfdfdf;box-shadow: 0px 2px 15px 10px rgba(0,0,0,0.2), 0 0 0 0px rgba(0,0,0,0.16);" />

    <h3>Ayaz Panar</h3>

    <div class="social-menu">
        <ul style="left:2%">
            <li><a href="https://www.facebook.com/ayaz.panar?mibextid=ZbWKwL" target="blank"><i class="fab fa-facebook"></i></i></a></li>
            <li><a href="https://www.instagram.com/ayazpanar/" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://wa.me/+919909130787" target="blank"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://codepen.io/sanketbodke"><i class="fab fa-twitter" target="blank"></i></a></li>
        </ul>
    </div>
    
  </div>
  <div class="columns1">
  <p> </p>
  <img src="images\umar.png" style="height:150px;width:150px;border-radius:50%;object-fit:cover;background:#dfdfdf;box-shadow: 0px 2px 15px 10px rgba(0,0,0,0.2), 0 0 0 0px rgba(0,0,0,0.16);" />

    <h3>Umar Shaikh</h3>
    <div class="social-menu">
        <ul style="left:35%">
        <li><a href="https://github.com/sanketbodke" target="blank"><i class="fab fa-facebook"></i></i></a></li>
            <li><a href="https://www.instagram.com/imsanketbodke/" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/sanket-bodake-995b5b205/" target="blank"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://codepen.io/sanketbodke"><i class="fab fa-twitter" target="blank"></i></a></li>
        </ul>
    </div>
   
  </div>
  <div class="columns1">
  <p> </p>
  <img src="images\ali.png" style="height:150px;width:150px;border-radius:50%;object-fit:cover;background:#dfdfdf;box-shadow: 0px 2px 15px 10px rgba(0,0,0,0.2), 0 0 0 0px rgba(0,0,0,0.16);" />

    <h3>Ali Khorajiya</h3>
    <div class="social-menu">
        <ul style="left:69%">
        <li><a href="https://github.com/sanketbodke" target="blank"><i class="fab fa-facebook"></i></i></a></li>
            <li><a href="https://www.instagram.com/imsanketbodke/" target="blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/sanket-bodake-995b5b205/" target="blank"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://codepen.io/sanketbodke"><i class="fab fa-twitter" target="blank"></i></a></li>
        </ul>
    </div>
  </div>
 </div>
<br><br><br><br>
<div class="columns2">
<?php include("Display_rating.php"); ?>
</div>

<!-- Css Of About Us Page -->
 <style>

  h1 {
  font-size: 2rem;
}

@media (max-width: 768px) {
  h1 {
    font-size: 1.5rem;
  }

}


.social-menu ul{
  display: flex;
  position: absolute;
  
}
.social-menu ul li{
    list-style: none;
    margin: 0 15px;
    
}

.social-menu ul li .fab{
    font-size: 30px;
    line-height: 60px;
    transition: .3s;
    color: #000;
}

.social-menu ul li .fab{
    color: #fff;
}

.social-menu ul li a{
    position: relative;
    display: block;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    color: white;
    text-align: center;
    transition: .6s;
    box-shadow: 0 5px 4px rgba(0,0,0,.5);
}

.social-menu ul li a{
    transform: translate(0, -10%);
}

.social-menu ul li:nth-child(1) a{
    background-color: blue;
    
}
.social-menu ul li:nth-child(2) a{
   /* background-color: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%)F;*/
   background: #d6249f;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
}
.social-menu ul li:nth-child(3) a{
    background-color: green;
}
.social-menu ul li:nth-child(4) a{
    background-color: #00acee;
}


body{
  min-height: auto;
  height: 100%;
}
.row {
  width: 100%;
  text-align: center;
}

.columns1 {
  width: 33%;
  height: 50%;
  min-width: 280px;
  vertical-align: top;/*Fix for different     height elements*/
  margin-bottom: 10px;
  display: inline-block;
  background-color:transparent;
  color: black;
 
}
 .columns2 {
  margin-left: 260px;
  overflow-y: auto;
  width: 70%;
  height: 100%;
  min-width: 280px;
  vertical-align: top;/*Fix for different     height elements*/
  margin-bottom: 30px;
  display: inline-block;
  background-color:transparent;
  color: black;
 }
.columns {
  width: 470px;
  height: 250px;
  min-width: 280px;
  vertical-align: top;/*Fix for different     height elements*/
  margin-bottom: 10px;
  margin-left: 30px;
  display: inline-block;
  background-color:skyblue;
  color: black;
  box-shadow: 10px 5px 15px 10px rgba(0,50,255,0.2), 0 0 0 0px rgba(0,0,0,0.16);
 }
.align-right {
  text-align: center;
}
@media screen and (max-width: 680px) {
  .columns {
    width: 100%; 
  }
}

  </style>





 <?php
require("footer.php");
?>