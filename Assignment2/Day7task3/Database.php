
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sum";

try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // begin the transaction
   $conn->beginTransaction();
   // our SQL statements
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('Suman', 'Samsung', '1200000')");
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('Emon', 'Iphone', '3450000')");
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('Shohel', 'Samsung', '340000')");
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('Milon', 'Xparia', '5400000')");
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('REdoy', 'Itel', '20000')");
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('Monir', 'Jetly', '1200')");
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('Arif', 'Samsung', '600000')");
   $conn->exec("INSERT INTO phone (Name, Model, Price)
   VALUES ('Jewel', 'Symphone', '12000')");
   

   // commit the transaction
   $conn->commit();
   echo "New records created successfully";
   }
catch(PDOException $e)
   {
   // roll back the transaction if something failed

   echo "Error: " . $e->getMessage();
   }


?>
