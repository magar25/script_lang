<?php

include_once 'config/db_conn.php';

include 'include/header.php';


?>
<br><br><br><br><br><br><br>

<h3>this is the blog section of web</h3>

<br><br><br><br><br><br><br>



<h3 ><a href="addblog.php"> Creat New Blog</a></h3>

<?php

$sqlquery= "SELECT * FROM blog;";

$data = mysqli_query($conn, $sqlquery);

foreach($data as $unitdata): ?>
<h3> 

<?php
       echo $unitdata ['id']; ?>

</h3>


<div style="border:2px solid black; background-color:gray">
<h1> 

<?php
       echo $unitdata ['title']; ?>

</h1>

<p> 

<?php
       echo $unitdata ['detail']; ?>

</p>

<a href="#">Read More</a>


</div>



<?php  

endforeach;

?>







<?php

include 'include/footer.php';






?>