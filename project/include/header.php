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

   
    
</head>
<style type="text/css">

  nav a {
    padding: 10px;
    color: rgb(164, 164, 236);
    float: right;
  }

  h1 {
    color: rgb(164, 164, 236);
}
.nav {
    background-color: #00001a;
    padding-top: 14px;
    padding:22px;
}
</style>
<body>
<div class="nav">
<h1>Everyday blogs</h1>
<nav>

  <a href="contact.php">Contact Us</a> &nbsp;
  <a href="about.php">About Us</a> &nbsp;
   <a href="bloglist.php">Blogs</a> &nbsp;
   
   <a href="index.php">Home</a> &nbsp;
   
</nav>
</div>
<?php
    $cookie_name="username";
    $cookie_value ="Prashanna";



    setcookie($cookie_name, $cookie_value, time()+(86400*30));



    $_SESSION['user_id']='PrashannaPunMagar@kbc.edu.np';


?>

</body>
</html>