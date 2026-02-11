<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wzory.css">
    <title>grzyb</title>
</head>
<body>
<?php
$con = new mysqli("localhost", "root", "", "grzybson");
$q1 = "SELECT count(id) as ile_id FROM grzyby";
$q2 = mysqli_query($con, $q1);
$q3 = mysqli_fetch_assoc($q2);
$ile_id = $q3['ile_id'];

$q = "SELECT * FROM grzyby"; 
$q4 = mysqli_query($con, $q);

echo "jest ".$ile_id." grzybów";
?>

<table border='1' cellpadding='5'>
    
<tr >
<th rowspan ="20">
<div id="row">    
Co chciałbyś wybrać 
</div>
</th>
<th colspan="80">grzyby</th>
</tr>
<?php

$conn = new mysqli("localhost", "root", "", "grzybson");

if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

$q1 = "SELECT MAX(id) as max_id FROM grzyby";
$q2 = mysqli_query($conn, $q1);
$q3 = mysqli_fetch_assoc($q2);
$next_id = $q3['max_id'] + 1;




$sql = "SELECT * FROM grzyby";
$result = $conn->query($sql);


echo "
        <tr>
            <th>ID</th>
            <th>Nazwa</th>
            <th>Jadalny</th>
            <th>Kolor kapelusza</th>
            <th>Występowanie</th>
            <th>Akcja</th>
        </tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><input type='radio' name='id' value='".$row['id']."'>".$row['id']."</td>
                <td>".$row['nazwa']."</td>
                <td>".$row['jadalny']."</td>
                <td>".$row['kolor_kapelusza']."</td>
                <td>".$row['wystepowanie']."</td>
                <td>
                    <form method='POST' action='Grzyby3.php'>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <input type='submit' value='Usuń' >
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>Brak danych</td></tr>";
}


$conn->close();
?>
<tr>
<th colspan="100">Bartosz Zabrocki Krzysztof Smuła</th>
</tr>
</table>
</body>
</html>
<?php