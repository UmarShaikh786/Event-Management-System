<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link  rel="icon"  type="image/x-icon" href="../images/Rlogo.png">
<form method="post">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="draw2.png" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 ">


          <div class="divider d-flex align-items-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0 text-muted">Login Administrator</h3>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4 ">
            <label class="form-label" for="form1Example13">Admin Name</label>
            <input type="text" id="form1Example13" name="id" class="form-control form-control-lg" />

          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Password</label>

            <input type="password" id="form1Example23" name="pass" class="form-control form-control-lg" />
          </div>

          
            
            <?php
require("connection.php");
          if (isset($_POST['submit'])) {
            session_start();

            $_SESSION['name'] = $username = $_POST['id'];
            $_SESSION['pass'] = $pass = $_POST['pass'];

            $sql = "select * from Admin where Name='" . $username . "' and Password='" . $pass . "'";

            $rs = mysqli_query($conn, $sql);

            try{
				
			if (mysqli_num_rows($rs) > 0) {
              $_SESSION['login'] = "success";
              header("location:main.php");


            } else
              echo "<label class='alert alert-danger'> Invalid Creditionals </label>";
          }
		  catch(Exception $e)
		  {
			                echo "<label class='alert alert-danger'> Invalid Creditionals </label>";

		  }
		  }
          ?>
<div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
          </div>
         




</form>
</div>
</div>
</div>
</section>

<style>
  .divider:after,
  .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
  }
</style>