<?php

$connection=mysqli_connect('localhost','kiranreddy','Kiran@1804','dbms');

$username;
$password ;
$email;


if(isset($_POST['sent'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email=$_POST['email'];
    $req_1="select username from signup where username='$username'";
$result=mysqli_query($connection, $req_1);

if(mysqli_num_rows($result)>0){
   header('location:signup.php');
   

}
else{
    $req_2="insert into signup values ('$username','$password','$email')";
    $resulti=mysqli_query($connection,$req_2);
    header('location:login.php');
}

}
else{
    echo 'Some thing is wrong please retry again';
    header('location:login.php');
}







?>