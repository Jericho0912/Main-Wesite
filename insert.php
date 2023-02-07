<?php
          $ID = $_POST['ID'];
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $password = $_POST['password'];

try{
    $connect = mysqli_connect("localhost", "root", "", 'gym');

} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

if(isset($_POST['insert']))
    {
        $insert_Query = "INSERT INTO client (fname,lname, email, password,ID) 
        VALUES ('$fnam', '$lname', '$email','$password','$ID')";
        try{
            $insert_Result = mysqli_query($connect, $insert_Query);
            
            if($insert_Result)
            {
                if(mysqli_affected_rows($connect) > 0)
                {
                    echo 'Data Inserted';
                }else{
                    echo 'Data Not Inserted';
                }
            }
        } catch (Exception $ex) {
            echo 'Error Insert '.$ex->getMessage();
        }
    }
          ?>
?>