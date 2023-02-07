<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
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
    if ($row = $result-> fetch_assoc()){// change
        header ("location: Main.php");
        die;
    }else{// change header login.php
        header ("location: LOGIN_main.php?error=User Name is required");
        exit();
    }
    ?>