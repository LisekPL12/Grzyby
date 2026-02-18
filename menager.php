<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menager.css">
    <title>menager haseł</title>
</head>
<body>
<article>
    <header>Krzysztof Smuła</header>
<?php

echo("<form action='' method='get' >");
echo("<input type='text' name='login'   >");
echo("<input type='text' name='haslo'   >");
?>
<input type='submit' value='loguj'> </form>




<?php

if (isset($_GET['login'])&&($_GET['haslo'])){

    $shahaslock = sha1($_GET['haslo']);

$con = new mysqli("127.0.0.1","root","","jozef");

$q2= "SELECT login,haslo FROM users WHERE login='".$_GET['login']."' && haslo='".$_GET['haslo']."' || haslo='".$shahaslock."'";

if($wynik=$con->query($q2));
$row1=$wynik->fetch_array();
if(!isset($row1)){
    echo("zły login");
}
else
{
    echo("zalogowano");
}

}
?>
<br><br><br>
Tworzenie nowego Uzytkownika
<form action='' method='get' >
<input type='text' name='newlogin'>
<input type='text' name='newhaslo'>

<input type='submit' value='zarejestroj'> </form>

<?php

if (isset($_GET['newlogin'])&&($_GET['newhaslo'])){

    $shahaslo = sha1($_GET['newhaslo']);

$con = new mysqli("127.0.0.1","root","","jozef");

$q3= "INSERT INTO users (login, haslo) VALUES ('".$_GET['newlogin']."','".$shahaslo."')";

$wynik1=$con->query($q3);

}
?>
</article>
</body>
</html>