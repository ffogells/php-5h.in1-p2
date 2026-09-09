<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
</head>
<body>
    <?php
        $jaar = date('Y');
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $leeftijd = $jaar - $_POST["geboortejaar"];
        echo "<h1>Hallo ".$voornaam." ".$achternaam.". Je bent ".$leeftijd." jaar oud.</h1>\n";
    ?>
</body>
</html>