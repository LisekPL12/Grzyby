<?php

$conn = new mysqli("localhost", "root", "", "grzybson");

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM grzyby WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Usunięto rekord!";
} else {
    echo "Błąd: " . $conn->error;
}

$conn->close();
?>
