<html>
<head>
<meta charset="UTF-8">
<title>Skibidi</title>
</head>
<body>
<form action="login.php">
  <text>Login: </text><input type="text" name="login"><br>
  <text>Hasło: </text><input type="text" name="Passw"><br>
  <input type="submit" value="Submit">
</form> 

<?php
if (isset($_GET['login'])&&($_GET['Passw'])) {
    $con = new mysqli("localhost","root","","users");
    $query1 = "SELECT 'Login', 'Passw' FROM users WHERE Login='".$_GET['login']."' AND Hasło='".$_GET['Passw']."'";

    $wynik1=$con->query($query1);
    $row1=$wynik1->fetch_array();

    if(isset($row1)) {
        echo("Jesteś zalogowany");
    }

    else {
        echo("Nie jesteś zalogowany");

        mysql_query("INSERT INTO users (Login, Hasło) VALUE (".$_GET['login'].", ".$_GET['Passw'].")");

   }



}
?>
</body>

</html>

