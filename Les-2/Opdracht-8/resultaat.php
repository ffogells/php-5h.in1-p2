<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
</head>
<body>
    <?php
        $voornaam = $_GET["voornaam"];
        $achternaam = $_GET["achternaam"];
        echo "<h1>Hallo ".$voornaam." ".$achternaam."</h1>\n";
    ?>
</body>
</html>