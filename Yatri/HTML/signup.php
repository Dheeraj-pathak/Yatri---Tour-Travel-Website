<?php

session_start();
 

$con = mysqli_connect('localhost','root');

if ($con){
   
}
else{
    echo "no connection";
}
mysqli_select_db($con, 'duniyaa');

$username=$_POST['username'];

$email=$_POST['email'];

$password=$_POST['password'];

$password2=$_POST['password2'];

if($password == $password2){

$q = " select * from signup where email = '$email' ";

$result = mysqli_query($con , $q);

$num = mysqli_num_rows($result);

if($num){
    echo '<script>alert("This e-mail has already account..")</script>';
    echo "<h1>Create your account with another e-mail....</h1>";
    echo "<h3>If that email belongs to you than you need to login....</h3>";
    echo '<form><input type="button" value="Return to Signup page" onClick="javascript:history.go(-1)"></form>';
    echo '<a href="login.html">
    <button>Go to login Page</button></a>';
}
else{
    $query = "insert into signup(user,email,password) values ('$username' , '$email' , '$password')";
    mysqli_query($con, $query);
    header('location:login.html');
}
}
else{
    echo '<script>alert("password and confirm password do not match of this account..")</script>';
    echo '<form><input type="button" value="Return to Signup page" onClick="javascript:history.go(-1)"></form>';
}

?>