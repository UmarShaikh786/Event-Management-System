<?php

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"RoyalEvents");
if(!$conn)
{
echo mysqli_connect_error();
}else
//echo "connected";

?>