<?php

use function PHPSTORM_META\type;

$con = mysqli_connect('localhost','root');

if ($con){
    echo "<h1>You have a nice choice ...</h1>
    <h3>We are connecting you by a expert guide of that area..</h3>";  
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'duniyaa');

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];

$query = " insert into form1(Name , email , phone , other) 
values('$name','$email','$contact','$message');";

mysqli_query($con, $query);



?>