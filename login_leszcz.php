<html>
<head>
<meta charset="UTF-8">
<title>Skibidi</title>
</head>
<body>
<form action="login_leszcz.php">
  <text>Login: </text><input type="text" name="login"><br>
  <text>Hasło: </text><input type="text" name="haslo"><br>
  <input type="submit" value="Submit">
</form> 

<?php
if (isset($_GET['login'])&&($_GET['haslo'])) {
    $con = new mysqli("localhost","root","","users");
    $query1 = "SELECT 'Login', 'Hasło' FROM users WHERE Login='".$_GET['login']."' AND Hasło='".$_GET['haslo']."'";

    $wynik1=$con->query($query1);
    $row1=$wynik1->fetch_array();

    if(isset($row1)) {
        echo("Jesteś zalogowany");
    }

    else {
        echo("Nie jesteś zalogowany");

        mysql_query("INSERT INTO users (Login, Hasło) VALUE (".$_GET['login'].", ".$_GET['haslo'].")");

   }



}
?>
</body>
</html>