<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wzory.css">
    <title>Grzybki</title>
</head>
<body>

<form action="Grzyby2.php" method="POST">

    <label>Nazwa grzyba:</label><br>
    <input type="text" name="nazwa" required><br><br>

    <label>Czy jadalny:</label><br>
    <label><input type="radio" name="jadalny" value="1" required> Tak</label>
    <label><input type="radio" name="jadalny" value="0"> Nie</label><br><br>

    <label>Kolor kapelusza:</label><br>
    <input type="text" name="kolor_kapelusza" required><br><br>

    <label>Występowanie:</label><br>
    <select name="wystepowanie" required>
        <option value="lasy liściaste">Lasy liściaste</option>
        <option value="lasy iglaste">Lasy iglaste</option>
        <option value="lasy mieszane">Lasy mieszane</option>
        <option value="lasy sosnowe">Lasy sosnowe</option>
        <option value="Bory tucholskie">Bory tucholskie</option>
    </select><br><br>

    <button type="submit">Dodaj do bazy</button>
</form>



</body>
</html>