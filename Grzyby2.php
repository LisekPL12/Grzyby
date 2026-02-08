<?php
$servername = "localhost";
$username = "root";      
$password = "";          
$dbname = "grzybson";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$nazwa = $_POST['nazwa'];
$jadalny = $_POST['jadalny'];
$kolor = $_POST['kolor_kapelusza'];
$wystepowanie = $_POST['wystepowanie'];

$sql = "INSERT INTO grzyby (nazwa, jadalny, kolor_kapelusza, wystepowanie)
        VALUES ('$nazwa', '$jadalny', '$kolor', '$wystepowanie')";

if ($conn->query($sql) === TRUE) {
    echo "Dodano nowy rekord!";
} else {
    echo "Błąd: " . $conn->error;
}

$conn->close();
?>
