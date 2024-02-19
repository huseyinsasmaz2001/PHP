<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message de bienvenue</title>
</head>
<body>

<?php
// Déclaration de la variable $gender
$gender = "M";

// Déclaration de la variable $hellovariable avec un message par défaut
$hellovariable = "Bienvenue";

// Vérification du genre et modification du message en conséquence
if ($gender == "M") {
    $hellovariable .= " Monsieur";
} elseif ($gender == "F") {
    $hellovariable .= " Madame";
}

// Affichage du message résultant
?>

    <p><?php echo $hellovariable; ?></p>

</body>
</html>
