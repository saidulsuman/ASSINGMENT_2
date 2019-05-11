<?php
include'Myname.php';
//include'Fullname.php';
$name = new MyName();
$name->printName();
echo"<br/>";
$name= new FullName();
$name->printName();

 ?>
