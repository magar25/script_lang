<?php
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="css/style.css">

    <!-- <a href="index.php">Home</a> &nbsp;
    <a href="about.php">About Us</a> &nbsp;
    <a href="bloglist.php">Blogs</a> &nbsp;
    <a href="contact.php">Contact Us</a> &nbsp; -->
</head>
<body>
  <nav>
<ul>
<h1>Everyday blogs</h1>
<li>  <a href="index.php">Home</a> &nbsp;</li>
<li>  <a href="about.php">About Us</a> &nbsp;</li>
<li>  <a href="bloglist.php">Blogs</a> &nbsp;</li>
<li>  <a href="contact.php">Contact Us</a> &nbsp;</li>


</ul>
</nav>


<?php
    $cookie_name="username";
    $cookie_value ="Prashanna";



    setcookie($cookie_name, $cookie_value, time()+(86400*30));



    $_SESSION['user_id']='PrashannaPunMagar@kbc.edu.np';




?>
    
</body>
</html>