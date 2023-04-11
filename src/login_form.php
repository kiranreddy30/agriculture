<?php

$connection=mysqli_connect('localhost','kiranreddy','Kiran@1804','dbms');

$username;
$password ;



if(isset($_POST['sent'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $req_1="select username,password from signup where username='$username' and password='$password' ";
$result=mysqli_query($connection, $req_1);

$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
   // echo 'success';
    header("Location:admin.php");

}
else{
// echo 'faile';
     header("Location:login.php");
}


}
else{
    echo 'Some thing is wrong please retry again';
    header('location:login.php');
}







?>