<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 3</title>
</head>
<body>
<?php
if (isset($_GET["age"])) {
    // Récupère l'âge à partir de la requête GET
    $age = $_GET["age"];

    // Affiche le message en fonction de l'âge
    if ($age < 12) {
        echo "Bonjour, gamin !";
    } elseif ($age >= 12 && $age <= 18) {
        echo "Bonjour Adolescent !";
    } elseif ($age > 18 && $age <= 115) {
        echo "Bonjour Adulte !";
    } else {
        echo "Wow ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";
    }
}
?>

<form method="get" action="">
    <label for="age">Veuillez saisir votre âge :</label>
    <input type="number" name="age" id="age" required>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>