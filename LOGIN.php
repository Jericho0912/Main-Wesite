<?php
    $link = mysqli_connect("localhost", "root", "", "gym");

    //check connection
    if($link === false){
        die("ERROR: Could not connect." .mysqli_connect_error());
    }

    $ID = $_POST ['ID'];
    $Fname = $_POST['fname'];// $Variable
    $Lname = $_POST['lname'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $sql = "SELECT *FROM client WHERE ID = '$ID' 
    AND fname = '$Fname'
    AND lname = '$Lname'
    AND email = '$Email'
    AND password = '$Password'";
    $result = $link->query($sql);
    if (!$row = $result-> fetch_assoc()){
        echo "Your account is not accepted!!!!";
        header ("location: LOGIN.html");
    }else{
        header ("location: Main.html");
    }
    ?>