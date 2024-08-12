<?php require('config.php');

?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Payment Gateway Demo</title>

</head>

<body>



    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">User Id :</label>
                <input type="text" class="form-control" id="txtUserId" name="txtUserId">
            </div>
            <div class="mb-3">
                <label class="form-label">User Name :</label>
                <input type="text" class="form-control" id="txtUserName" name="txtUserName">
            </div>

            <div class="mb-3">
                <label class="form-label">Amount</label>
                <input type="number" class="form-control" id="txtAmount" name="txtAmount">
            </div>
            <input type="submit" class="btn btn-primary" name="Pay" value="Pay Now" />
    </div>

    <?php
    if (isset($_POST['Pay'])) {

        session_start();

        $_SESSION['userid'] = $_POST['txtUserId'];
        $_SESSION['username'] = $_POST['txtUserName'];
        $_SESSION['amount'] = $_POST['txtAmount'];


        header("location:pay.php");
    }


    ?>


    </form>

    






</body>

</html>