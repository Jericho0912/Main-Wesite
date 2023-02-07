<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>LOGIN</title>
    <style>
        body {
            background-color: black;
        }
    </style>
</head>
<body>

    <section id="sign in" class="contact section-padding">
        <div class="container">
          <div class="row">
           <div class="col-md-12">
            <div class="section-header text-center pb-5 text-light">
            <h2>LOGIN</h2>
            <p>JOIN US WITH OUR LIMITED MEMBERSHIP<br>ACCESS OUR LATEST GOOD FEATURE THAT TURN YOUR LIFESTYLE GOOD AND HEALTHY</p>
            </div>
           </div>
          </div>
           <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 pb-4">
             
              <form action="LOGIN.php" method="post" class="bg-light p-4 rounded-4">
                <!-- new -->
                <?php if (isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                
             <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="text" class="form-control" name="ID" id="ID"  placeholder="your ID" autocomplete="off" >
                 </div>
               <div class="mb-3">
                <input type="text" class="form-control" name="fname" id="fname"  placeholder="your first name" autocomplete="off">
               </div>
               <div class="mb-3">
                <input type="text" class="form-control" name="lname" id="lname"  placeholder="your last name" autocomplete="off">
               </div>
             </div>
             <div class="col-md-12">
              <div class="mb-3">
               <input type="email" class="form-control" name="email" id="email"  placeholder="your email here" autocomplete="off">
              </div>
             </div>
             <div class="col-md-12">
              <div class="mb-3">
               <input type="password" class="form-control" name="password" id="password"  maxlength="11" placeholder="password" autocomplete="off">
              </div>
             </div>
             <button type="submit" name="link" id="link" value="Login" class="bg-info p-3 rounded-4">LOGIN</button>
             <!--<input type="submit" name="link" id="link" value="Login" class="bg-info">
             <div class="container signin">-->
<script>
      var button1 = document.getElementById("link")[0];

      button1.onclick = function() { if(button1>0){
        
      } };
  function myFunction() {
  alert("Please check your password and account name and try again.");
}
</script>
</body>
</html>