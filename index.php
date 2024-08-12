<!-- <div id="first"></div> -->
<?php
require("header3.php");
?>
<html>
<head>

<title>Event Management</title>
<link  rel="icon"  type="image/x-icon" href="images/Rlogo.png">
	
<script type="text/javascript" src="js/jquery-1.12.1.min.js" ></script>
			<!--== CSS Files ==-->
			<link href="css/bootstraphome.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" rel="stylesheet" media="screen">
		<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
		<link href="css/flexslider.css" rel="stylesheet" media="screen">
		<link href="css/fancySelect.css" rel="stylesheet" media="screen">
		<link href="css/responsive.css" rel="stylesheet" media="screen">
		<link href="css/stylehome.css" rel="stylesheet" media="screen">	</head>
	<!--== Site Description ==-->
	<?php // echo $_SESSION['id']; ?>

	
<header class="header">
		
	<div class="header-cta">
				
	<div class="container">
				
					<div class="row">
						
						<div class="entry-content">
							
				            <p><span class="start-text"><b>From THE JAN 1, 2023</b></span></p>
				            <h4 class="entry-title">Organizing World class events</h1>
				            <h5><span><b>Life is an Event. Make it Memorable...</b></span></h5>
					    </div>
						
					</div>
					<h2 id="dateAndTime" style="color:black;position:absolute;left:600px;top:-100px;"></h2>	
					<center><h3 style="color:white;border:black;position:absolute;left:200px;top:400px;spacing:20px;word-spacing: 2px;">	Whether you're looking to book a party,Wedding, Birthday, Babyshower,<br>
				 business meeting,Engagement or private dining event, our dedicated <b>Royal Events</b> team can create a package <br>
				 that will meet your every need.</p></center>
				</div>
				
			</div>
			
			
<div>

						<div class="header-bg">
			<img src="images/home.jpg" height="850px" width="100%" >
					<div class="preloader"></div>
</div>
    <script>
$(function() {
    myTimer();
    setInterval(function(){ myTimer() }, 1000);
    function myTimer()
    {
        var y = new Date();
        var time = y.toLocaleTimeString();
        var year = y.getFullYear();
        var month = y.getMonth() + 1;
        var day = y.getDate();
        document.getElementById("dateAndTime").innerHTML = "" + day + "/" + month + "/" + year + " " + time + " (GMT + 0)";
    }
});
	</script>        

</header>

<?php
require("home.php");
?>
<!-- <center> -->
<!-- <a href="#first" style="background-color:yellow;color:black;font-size:25px;border-radius:5px solid black;border-color:5px solid black;">Click Up</a></center> -->
  <?php
//require("review.php");
?>
<?php
require("footer.php");
?>
	
</html>