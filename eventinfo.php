<?php
session_start();
require("header3.php");
?>
<html>
  <head>
  
<link rel="stylesheet" href="css/slider.css">
<script src="js/slider.js"></script>
</head>

<body>
  <?php $name=$_GET['Ename']; 
  
  if($name=="Wedding"){
  ?>
<hr class="customline">
<br><br>
 

<center><div class="slider">
  <div class="slides">
   
     <input type="radio" name="radio-btn" id="radio1">
     <input type="radio" name="radio-btn" id="radio2">
     <input type="radio" name="radio-btn" id="radio3">
     <input type="radio" name="radio-btn" id="radio4">

      
   
   <div class="slide first">
     <img src="images/couple3.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/couple1.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/couple2.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/wedding2.jpg" alt="">
   </div>
  
   
 </div>
 
 
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>                       

</div>
</center>
    

<div class="center">
<h1>--: Wedding :--</h1><!--title-->
                       
<p><!--content-->
                            The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.
                         <br><br>
                         A wedding is a beautiful celebration of love and commitment between two individuals. It is a day filled with joy, laughter, and happy tears as family and friends come together to witness the union of two souls. From the stunning venue to the intricate details of the decor, every aspect of a wedding is carefully planned and executed to create an unforgettable experience. The bride and groom exchange heartfelt vows and rings, promising to love and cherish each other for a lifetime. The reception is a time for celebration, with dancing, delicious food, and toasts to the newlyweds. A wedding is a magical moment in time, marking the beginning of a new chapter in the couple's lives together.

                            </p>
                            <link rel="stylesheet" href="css/btnbook.css">
                          
                          <?php if(isset($_SESSION['id'])) {?>  <a href="Eventbookform.php?Ename=Wedding"><?php }else {?><a href="login.php"><?php }?>
                            <button>
 
                            <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <span>Book Now</span>
</button>
</div>   </a>     



<?php } elseif ($name=="Birthday")  {?>
  <hr class="customline">
<br><br>
 

<center><div class="slider">
  <div class="slides">
   
     <input type="radio" name="radio-btn" id="radio1">
     <input type="radio" name="radio-btn" id="radio2">
     <input type="radio" name="radio-btn" id="radio3">
     <input type="radio" name="radio-btn" id="radio4">

      
   
   <div class="slide first">
     <img src="images/birthday22.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/birthday2.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/birthday3.jpeg" alt="">
   </div>
   <div class="slide">
      <img src="images/birthday4.jpeg" alt="">
   </div>
  
   
 </div>
 
 
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>                       

</div>
</center>
    

<div class="center">
<h1>Birthday</h1><!--title-->
                       
<p>A birthday celebration is a special occasion that allows us to celebrate life and the people we love. It's a time to come together, share laughter and joy, and create unforgettable memories.

One of the most important aspects of any birthday event is the venue. Whether you choose to celebrate in a cozy home setting or a grand party hall, the right venue sets the tone for the entire event. It should be a space that reflects the personality and style of the birthday person, while also accommodating the size of the guest list.
                            </p>
                            <link rel="stylesheet" href="css/btnbook.css">
                            <?php if(isset($_SESSION['id'])) {?>  <a href="Eventbookform.php?Ename=Birthday"><?php }else {?><a href="login.php"><?php }?>
                            <button>
 
                            <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <span>Book Now</span>
</button>
</div>   </a>     


<?php }elseif($name=="Party") {?>
  <hr class="customline">
<br><br>
 

<center><div class="slider">
  <div class="slides">
   
     <input type="radio" name="radio-btn" id="radio1">
     <input type="radio" name="radio-btn" id="radio2">
     <input type="radio" name="radio-btn" id="radio3">
     <input type="radio" name="radio-btn" id="radio4">

      
   
   <div class="slide first">
     <img src="images/party2.jpeg" alt="">
   </div>
   <div class="slide">
      <img src="images/party3.jpeg" alt="">
   </div>
   <div class="slide">
      <img src="images/party5.jpeg" alt="">
   </div>
   <div class="slide">
      <img src="images/party6.jpeg" alt="">
   </div>
  
   
 </div>
 
 
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>                       

</div>
</center>
    

<div class="center">
<h1>Party</h1><!--title-->
                       
<p>Party celebrations are always a source of joy and excitement for everyone involved. It can be the celebration of an important milestone, like a birthday or a graduation, or it can be a simple get-together with friends and family. Whatever the occasion, a party celebration is a time to let loose, relax and enjoy the company of those around you.

The first step in planning a party celebration is deciding on the theme or purpose. This will determine the decorations, food, music and activities that will take place during the party. Some popular themes include a pool party, a costume party, a beach party or a sports-themed party.

The next step is to make a guest list and send out invitations. It is important to invite people well in advance so that they can RSVP and plan their schedules accordingly. Once the guest list is finalized, it is time to plan the menu. Depending on the type of party, the menu can vary from simple finger foods to a full-scale buffet or sit-down dinner.

                            </p>
                            <link rel="stylesheet" href="css/btnbook.css">
                            
                            <?php if(isset($_SESSION['id'])) {?>  <a href="Eventbookform.php?Ename=Party"><?php }else {?><a href="login.php"><?php }?>
                            <button>
 
                            <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <span>Book Now</span>
</button>
</div>   </a>     


<?php } elseif ($name=="Engagement") {?>
  <hr class="customline">
<br><br>
 

<center><div class="slider">
  <div class="slides">
   
     <input type="radio" name="radio-btn" id="radio1">
     <input type="radio" name="radio-btn" id="radio2">
     <input type="radio" name="radio-btn" id="radio3">
     <input type="radio" name="radio-btn" id="radio4">

      
   
   <div class="slide first">
     <img src="images/engage1.jpeg" alt="">
   </div>
   <div class="slide">
      <img src="images/engage2.jpeg" alt="">
   </div>
   <div class="slide">
      <img src="images/engage3.jpeg" alt="">
   </div>
   <div class="slide">
      <img src="images/engage4.jpeg" alt="">
   </div>
  
   
 </div>
 
 
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>                       

</div>
</center>
    

<div class="center">
<h1>Engagement</h1><!--title-->
                       
<p>The engagement event is a great way for the couple to introduce their families and close friends to each other. This event is usually organized by the couple's parents or by the couple themselves. The engagement ceremony is usually a formal affair that is attended by close family members and friends.

The ceremony usually begins with a ring ceremony where the groom-to-be gives the bride-to-be a ring as a symbol of his love and commitment. This is followed by a formal announcement of the engagement and the couple's families exchange gifts as a token of happiness.
                            </p>
                            <link rel="stylesheet" href="css/btnbook.css">
                            <?php if(isset($_SESSION['id'])) {?>  <a href="Eventbookform.php?Ename=Engagement"><?php }else {?><a href="login.php"><?php }?>
                            <button>
 
                            <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <span>Book Now</span>
</button>
</div>   </a>     



<?php } else{?>
  <hr class="customline">
<br><br>
 

<center><div class="slider">
  <div class="slides">
   
     <input type="radio" name="radio-btn" id="radio1">
     <input type="radio" name="radio-btn" id="radio2">
     <input type="radio" name="radio-btn" id="radio3">
     <input type="radio" name="radio-btn" id="radio4">

      
   
   <div class="slide first">
     <img src="images/baby1.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/baby2.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/baby3.jpg" alt="">
   </div>
   <div class="slide">
      <img src="images/baby4.jpg" alt="">
   </div>
  
   
 </div>
 
 
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>                       

</div>
</center>
    

<div class="center">
<h1>Baby Shower</h1><!--title-->
                       
<p> A baby shower is a celebration held in honor of an expectant mother, usually during the third trimester of her pregnancy. The purpose of a baby shower is to shower the mother-to-be with gifts, support, and love as she prepares to bring a new life into the world.

Baby showers are typically organized by close friends or family members of the expectant mother. They can be held in a variety of locations, such as a home, restaurant, or event space. The decor and theme of the shower are usually centered around the baby, with colors and decorations typically being pastel or bright and cheerful.

There are a variety of games and activities that can be played during a baby shower, including guessing games about the gender, weight, and due date of the baby. Guests are also often asked to bring a gift for the mother-to-be or the new baby, such as clothing, diapers, or toys.


                            </p>
                            <link rel="stylesheet" href="css/btnbook.css">
                            <?php if(isset($_SESSION['id'])) {?>  <a href="Eventbookform.php?Ename=Baby Shower"><?php }else {?><a href="login.php"><?php }?>
                            <button>
 
                            <div class="svg-wrapper-1">
    <div class="svg-wrapper">
      <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <span>Book Now</span>
</button>
</div>   </a>     


<?php } ?>
<hr class="customline">


 </html>
 <?php
require("footer.php");
?>