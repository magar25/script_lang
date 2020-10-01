<?php

include 'include/header.php'


?>
<br><br><br><br><br><br><br>

<h3>this is the about section of web</h3>

<br><br><br><br><br><br><br>



<?php


if(!isset($_COOKIE[$cookie_name])){

    echo "Cookie name is not set";
}

else{
    echo"Cookie ".$cookie_name. " is set.";
    echo " and the vlaue is ".$cookie_value;
}


if(!isset($_SESSION["user_id"]))
{
    echo "<br> <h4> you are not currently authenticated </h4>";
}

else
{
    echo"<br> Session is avilable and you are logged in as : ".$_SESSION["user_id"];
}


?>







<?php

include 'include/footer.php'






?>