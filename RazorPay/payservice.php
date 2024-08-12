<?php

require('config.php');
require('razorpay-php/Razorpay.php');
include('Gateway-config.php');

session_start();
?>
<html>
    <head><title>Payment page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
       

<?php

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);
$uname = $_SESSION['name'];
$service= $_SESSION['Sname'];
$price =$_SESSION['price'];
$today = getdate();
$_SESSION['date']=$date = "$today[year]-$today[mon]-$today[mday]";
$displayCurrency = 'INR';








$orderData = [
    'receipt'         => 3456,
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $service." Booking",
    "description"       => "Tron Legacy",
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill"           => [
    "name"              => $uname,
    "email"             => "customer@merchant.com",
    "contact"           => "9999999999",
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


?>

<div class="container rounded bg-white">
        <div class="row d-flex justify-content-center pb-5">
            <div class="col-sm-5 col-md-5 ml-1">
                <div class="bg-light rounded d-flex flex-column">
                    <div class="p-2 ml-3">
                        <h4 align="center">Payment Details</h4>
                    </div>
                    <div class="p-2 d-flex">
                        <div class="col-8">User Name  </div>
                        <div class="ml-auto"><?php echo $uname;?></div>
                    </div>
                        <div class="p-2 d-flex">
                        <div class="col-8">Service Type</div>
                        <div class="ml-auto"><?php echo $service; ?></div>
                    </div>
                  
                  
                    <div class="p-2 d-flex">
                        <div class="col-8"> Date </div>
                        <div class="ml-auto"><?php 
                        echo $date = "$today[year]-$today[mon]-$today[mday]"; ?> </div>
                    </div>
                    <div class="border-top px-4 mx-3">
                    </div>
                   
                   
                    <div class="border-top px-4 mx-3"></div>
                    <div class="p-2 d-flex pt-3">
                        <div class="col-8"><b>Payable Bill</b></div>
                        <div class="ml-auto"><b class="green">₹<?php echo $price;?>.00</b></div>
                    </div>
                </div>
            </div>
        </div>



<center>
<form action="verifyservice.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>
</center>
    </body>
</html>
<style>
    input.razorpay-payment-button {
    border-radius: 6px;
    display: inline-block;
    outline: 0;
    cursor: pointer;
    border: none;
    padding: 0 56px;
    height: 45px;
    line-height: 45px;
    border-radius: 7px;
    background-color: #0070f3;
    color: white;
    font-weight: 400;
    font-size: 16px;
    box-shadow: 0 4px 14px 0 rgb(0 118 255 / 39%);
    transition: background 0.2s ease,color 0.2s ease,box-shadow 0.2s ease;
    : ;
}
    </style>