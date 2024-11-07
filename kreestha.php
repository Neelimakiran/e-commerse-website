<?php
$conn=mysqli_connect("localhost","root","","NEELIMA");
if($conn)
{
echo "success";
}
else
{
echo "fail";
}
$query1="CREATE TABLE `order`(`NAME` CHAR(20),`EMAIL` CHAR(20),`PHONENUMBER` CHAR(20),`ADDRESS` CHAR(50),`PINCODE` CHAR(6),`PAYMENT TYPE` CHAR(20))";
mysqli_query($conn,$query1);
?>
