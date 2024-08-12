<?php
error_reporting(0);
session_start();

if (isset($_SESSION['id'])) {
  ?>
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="index.php"><b>Royal Events</b></a>
      </div>
      <nav>
        <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="events.php">Events</a>
          </li>


          <li>
            <a href="venues.php">Venues</a>
          </li>
          <li>
            <a href="Service.php">Services</a>
          </li>
          <li>
            <a href="offers.php">Offers</a>
          </li>
          <li>

          </li>
          <li>
            <a href="aboutus.php">About us</a>
          </li>
          <?php include_once("connection.php");
          $sql = "select * from Usermaster where UId=" . $_SESSION['id'];
          $rs = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($rs);

          ?>
          <li>
            <a href="profile.php">
              <img src="<?php echo $row['Image']; ?>"
                style="height:50px;width:50px;border-radius:50%;border: 2px solid black;object-fit:cover;background:#dfdfdf" />
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
<?php } else { ?>



  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="index.php">Royal Events</a>
      </div>
      <nav>
        <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="events.php">Events</a>
          </li>


          <li>
            <a href="venues.php">Venues</a>
          </li>
          <li>
            <a href="Service.php">Services</a>
          </li>
          <li>
            <a href="offers.php">Offers</a>
          </li>
          <li>

          </li>
          <li>
            <a href="aboutus.php">About us</a>
          </li>
          <li>
            <a href="login.php" style="background-color: rgb(16, 159, 248);">Sign in</a>
          </li>
          <li>
            <a href="register.php" style="background-color: rgb(100, 120, 248);">Register</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
<?php } ?>

<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto');

  .navigation {
    height: 55px;
    background-color: lightseagreen;
  }

  .brand {
    font-family: Rockwell Extra Bold;
    font-weight: bold;
    position: absolute;
    padding-left: 20px;
    float: left;
    line-height: 55px;
    text-transform: uppercase;
    font-size: 1.4em;
  }

  .brand a,
  .brand a:visited {
    color: #ffffff;
    text-decoration: none;
  }

  .nav-container {
    max-width: 1000px;
    margin: 0 auto;
  }

  nav {
    float: right;
  }

  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  nav ul li {
    float: left;
    position: relative;
  }

  nav ul li a,
  nav ul li a:visited {
    display: block;
    padding: 0 20px;
    line-height: 55px;
    color: #fff;
    background: #262626;
    text-decoration: none;
  }

  nav ul li a {
    background: transparent;
    color: #FFF;
  }

  nav ul li a:hover,
  nav ul li a:visited:hover {
    background: #2581DC;
    color: #ffffff;
  }

  .navbar-dropdown li a {
    background: #2581DC;
  }

  nav ul li a:not(:only-child):after,
  nav ul li a:visited:not(:only-child):after {
    padding-left: 4px;
    content: ' \025BE';
  }

  nav ul li ul li {
    min-width: 190px;
  }

  nav ul li ul li a {
    padding: 15px;
    line-height: 20px;
  }

  .navbar-dropdown {
    position: absolute;
    display: none;
    z-index: 1;
    background: #fff;
    box-shadow: 0 0 35px 0 rgba(0, 0, 0, 0.25);
  }

  /* Mobile navigation */
  .nav-mobile {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    background: transparent;
    height: 55px;
    width: 70px;
  }

  @media only screen and (max-width: 800px) {
    .nav-mobile {
      display: block;
    }

    nav {
      width: 100%;
      padding: 55px 0 15px;
    }

    nav ul {
      display: none;
    }

    nav ul li {
      float: none;
    }

    nav ul li a {
      padding: 15px;
      line-height: 20px;
      background: #262626;
    }

    nav ul li ul li a {
      padding-left: 30px;
    }

    .navbar-dropdown {
      position: static;
    }

    @media screen and (min-width:800px) {
      .nav-list {
        display: block !important;
      }
    }

    #navbar-toggle {
      position: absolute;
      left: 18px;
      top: 15px;
      cursor: pointer;
      padding: 10px 35px 16px 0px;
    }

    #navbar-toggle span,
    #navbar-toggle span:before,
    #navbar-toggle span:after {
      cursor: pointer;
      border-radius: 1px;
      height: 3px;
      width: 30px;
      background: #ffffff;
      position: absolute;
      display: block;
      content: '';
      transition: all 300ms ease-in-out;
    }

    #navbar-toggle span:before {
      top: -10px;
    }

    #navbar-toggle span:after {
      bottom: -10px;
    }

    #navbar-toggle.active span {
      background-color: transparent;
    }

    #navbar-toggle.active span:before,
    #navbar-toggle.active span:after {
      top: 0;
    }

    #navbar-toggle.active span:before {
      transform: rotate(45deg);
    }

    #navbar-toggle.active span:after {
      transform: rotate(-45deg);
    }
  }
</style>
<script src="js/jquery-2.1.0.min.js"></script>
<script src="header3.js"></script>