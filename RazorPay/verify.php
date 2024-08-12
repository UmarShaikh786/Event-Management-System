<?php

require('config.php');
require('razorpay-php/Razorpay.php');
include('Gateway-config.php');

session_start();
?>
<html>
    <head><title>Payment Varification</title>
    </head>

    <body>
        <h1 align="center">Payment Status</h1>

<?php

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{

    //insert database codde write here
        require("../connection.php");   
     $name=$_SESSION['name'];
        $vprice=$_SESSION['Vprice'];
        $fprice=$_SESSION['Fprice'];
        $dprice=$_SESSION['drange'];
        $total=$_SESSION['payprice'];
        $uid=$_SESSION['id'];
        $pid=$_POST['razorpay_payment_id'];
        $today = getdate();
    $_SESSION['date']=$date = "$today[year]-$today[mon]-$today[mday]";

   $sql="insert into Billmaster(Uname,Vbill,Fbill,Dbill,Total,date,paymentid,UId)values('$name','$vprice','$fprice','$dprice','$total','$date','$pid',$uid)";
    mysqli_query($conn,$sql);
    

    //this for payment id
    $html = "Success";
            
       $sqll="update Bookingmaster set Payment='".$html."' where UId=".$uid." and Etype='".$_SESSION['Event']."'";

             mysqli_query($conn,$sqll);
             //header("location:../fpdf184/pdf.php");
          
          ?>
          
	<!DOCTYPE html>
<html>

<head>
    <title>Payment successful</title>
    <script>
        var time = '' || 5000;
        if ('https://www.prepleaf.com') {
            setTimeout(function() {
                //- window.location = "https://www.prepleaf.com"
            }, time);
        }
    </script>
    <style type="text/css">
        *,
        *:after,
        *:before {
            box-sizing: border-box;
            font-family: Sans-Serif;
        }

        .tick {
            display: inline-block;
            transform: rotate(45deg);
            height: 36px;
            width: 18px;
            border-bottom: solid 3px #2196f3;
            border-right: solid 3px #2196f3;
            margin-bottom: 8px;
        }

        .tick-container {
            padding: 20px;
            border-radius: 100px;
            height: 56px;
            width: 56px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            margin-bottom: 12px;
        }

        body {
            background: white;
            margin: 0;
            background: #2196f3;
            text-align: center;
        }

        .heading {
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-bottom: 32px;
        }

        .container {
            color: #fff;
            margin: auto;
            padding: 32px 16px 16px;
        }

        .text-container {
            line-height: 1.8em;
        }

        .primary-button {
            color: #2196f3;
            background-color: #fff;
            padding: 12px 16px;
            display: inline-block;
            margin-top: 32px;
            border-radius: 6px;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>

<body style="font-family:sans-serif;">
    <div class="container">
        <div class="heading"><span class="tick-container"><i class="tick" style="color:green;">&nbsp;</i></span><span>Your payment is successful</span></div>
        <div class="text-container">
            <div>You will be logged out of all the devices except this one.</div>
            <div>You will be redirected to the website in 5 seconds.</div>
            <div>Click the button below, if you are not redirected to the website.</div><a class="primary-button" href="../fpdf184/pdf.php">Download Bill</a>
        </div>
    </div>
</body>

</html>
            <?php }
else
{


    $html = "Failed";

             $sqll="update Bookingmaster set Payment=".$html." where UId=".$uid."and Etype='".$_SESSION['Event']."'";
             //header("location:../fpdf184/pdf.php");
             
}

//echo $html;

?>
    </body>
</html>
