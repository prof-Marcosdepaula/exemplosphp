<!DOCTYPE html>
<html>
<body>

<h1>Meu primeiro programa PHP</h1>

<?php
$color = "red";
echo "hello World!";
echo "<br/>";
echo "dia " . date('d/m/Y');
echo "<br/>";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";
?>
<br/><br/>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<br/><br/>
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<br/><br/>
<a href="conect.php">Banco</a>
<br/><br/>

<?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";      
      exit();
   }
?>
   
    <form action = "<?php $_PHP_SELF ?>" method = "GET">
     Name: <input type = "text" name = "name" />
     Age: <input type = "text" name = "age" />
      <input type = "submit" />
    </form>
      


</body>
</html>