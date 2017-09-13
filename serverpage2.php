<?php
// 
require_once('connection.php');
$conn = mysqli_connect($servername, $username, $password,'mandarsystem');





$first_name=$_POST['first_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$looking_for=$_POST['looking_for'];
$feedback=$_POST['feedback'];



$yourbudget=$_POST['yourbudget'];
$place1=$_POST['place1'];
$date1=$_POST['date1'];
$month1=$_POST['month1'];
$year1=$_POST['year1'];
$ac1=$_POST['ac1'];
$buffet1=$_POST['buffet1'];
$lunchdinner=$_POST['lunchdinner'];
$canteen1=$_POST['canteen1'];
$typeofevent1=$_POST['typeofevent1'];
$numberofpeopleattending1=$_POST['numberofpeopleattending1'];
$drinksneeded1=$_POST['drinksneeded1'];
$decorationneeded1= $_POST['decorationneeded1'];
$pickupdropneeded1= $_POST['pickupdropneeded1'];


$state2=$_POST['state2'];
$locallocation=$_POST['locallocation'];
$contactinformation2=$_POST['contactinformation2'];
$capacityofthevenue=$_POST['capacityofthevenue'];
$nameofthevenue=$_POST['nameofthevenue'];
$musicavaliable2=$_POST['musicavaliable2'];
$ac2=$_POST['ac2'];
$decorationavaliable2=$_POST['decorationavaliable2'];
$drinksavaliable2=$_POST['drinksavaliable2'];
$buffetavaliable2=$_POST['buffetavaliable2'];
$canteenavaliable2=$_POST['canteenavaliable2'];
$swimmingpoolavaliable2=$_POST['swimmingpoolavaliable2'];
$date2=$_POST['date2'];
$month2=$_POST['month2'];
$year2=$_POST['year2'];
$bookingcharges=$_POST['bookingcharges'];



$sql="INSERT INTO contactus values('{$first_name}','{$email}','{$phone}','{$looking_for}','{$feedback}')";
   mysqli_query($conn,$sql);



$sql="INSERT INTO venueneeder values('{$yourbudget}','{$place1}','{$date1}','{$month1}','{$year1}','{$ac1}','{$buffet1}','{$lunchdinner}','{$canteen1}','{$typeofevent1}','{$numberofpeopleattending1}','{$drinksneeded1}','{$decorationneeded1}','{$pickupdropneeded1}')";
   mysqli_query($conn,$sql);



$sql="INSERT INTO venueowner values('{$state2}','{$locallocation}','{$contactinformation2}','{$capacityofthevenue}','{$nameofthevenue}','{$musicavaliable2}','{$ac2}','{$decorationavaliable2}','{$drinksavaliable2}','{$buffetavaliable2}','{$canteenavaliable2}','{$swimmingpoolavaliable2}','{$date2}','{$month2}','{$year2}','{$bookingcharges}')";
   mysqli_query($conn,$sql);

?>