<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wzory.css">
    <title>hasla</title>
</head>
<body>



<article>

<form>
<label> Bartosz Zabrocki </label>
</form>
<?php

echo("<form action='' method='get' >");
echo("<input type='text' name='imie'   >");
echo("<input type='text' name='haslobezsha'   >");
?>
<input type='submit' value='zaloguj'> </form>




<?php

if (isset($_GET['imie'])&&($_GET['haslobezsha'])){

    $shahaslock = sha1($_GET['haslobezsha']);

$con = new mysqli("127.0.0.1","root","","poczta2");

$q2= "SELECT imie,haslobezsha FROM wiadomosci WHERE imie='".$_GET['imie']."' && haslobezsha='".$_GET['haslobezsha']."' || haslobezsha='".$shahaslock."'";

if($wynik=$con->query($q2));
$row1=$wynik->fetch_array();
if(!isset($row1)){
    echo("Nie zalogowano");
}
else
{
    echo("zalogowano");
}

}
?>
<br><br><br>
<a>Tworzenie nowego Uzytkownika</a>
<form action='' method='get' >
<input type='text' name='newlogin'>
<input type='text' name='newhaslo'>

<input type='submit' value='stworz konto'> </form>

<?php

if (isset($_GET['newlogin'])&&($_GET['newhaslo'])){

    $shahaslo = sha1($_GET['newhaslo']);

$con = new mysqli("127.0.0.1","root","","poczta2");

$q3= "INSERT INTO wiadomosci (imie, haslo, haslobezsha) VALUES ('".$_GET['newlogin']."','".$shahaslo."','".$_GET['newhaslo']."')";

$wynik1=$con->query($q3);

}
?>


</article>

</body>
</html>