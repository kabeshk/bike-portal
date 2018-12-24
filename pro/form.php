<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "", "accounts");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if ($_POST['mobile'] != $_POST['altmobile']) {
        
        //set all the post variables
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $mobile = $mysqli->real_escape_string($_POST['mobile']);
        $altmobile = $mysqli->real_escape_string($_POST['altmobile']);
        
        $_SESSION['username'] = $username;
        $_SESSION['mobile'] = $mobile;
        
        $sql = "INSERT INTO users (username, email, mobile, altmobile) "
                        . "VALUES ('$username', '$email', '$mobile', '$altmobile')";

        if ($mysqli->query($sql) == true)
            {
                    $_SESSION['message'] = "Thank You! $username Let's go and be ready for your Ride...";
                    header("location: welcome.php");
            }
        else 
            {
                    $_SESSION['message'] = 'Sorry! some Error occured';

            }
        $mysqli->close();          
    }
    else
    {
        $_SESSION['message'] = 'Both Mobile Numbers are same!';
    }
    
}
?>



<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Enter Your Data</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Mobile" name="mobile" required />
      <input type="text" placeholder="Alt Mobile" name="altmobile" required />
      <input type="submit" value="Submit" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>