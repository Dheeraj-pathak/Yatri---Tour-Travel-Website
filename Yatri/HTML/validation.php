<?php

session_start();


$con = mysqli_connect('localhost','root');

if ($con){
    echo "<h1>Connection successful</h1>";
}
else{
    echo "no connection";
}
mysqli_select_db($con, 'duniyaa');

$email=$_POST['email'];

$password=$_POST['password'];

$q = "select * from signup where email = '$email' && password = '$password'";

$result = mysqli_query($con , $q);

$num = mysqli_num_rows($result);


if($num){

    header('location:home.html');

}
else{
    
    header('location:login.html');
}


?>