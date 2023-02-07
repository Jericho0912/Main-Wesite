<?php
$connection = mysqli_connect('localhost','root','','gym');

if(!$connection){
    die(mysqli_error("Error"+ $connection));
}

if(isset($_POST['submit'])){
    $ID=$_POST['ID'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  
    //insert query
  
    $sql="insert into `client`(ID,fname,lname,email,password) 
    values('$ID','$fname','$lname','$email','$password')";
  
    $result=mysqli_query($connection,$sql);
    if($result){
      header ("location: Main.html");
    }
}


?>