<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisis ton être magique</title>
</head>
<body>

<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère la valeur du champ "creature" du formulaire
    $creature = $_POST["creature"];

    // Utilise une opération ternaire pour sélectionner le lien du GIF approprié
    $gifUrl = ($creature == "humain") ? "https://giphy.com/embed/iefDKhgLY7FWE" : (($creature == "chat") ? "https://giphy.com/embed/JIX9t2j0ZTN9S" : "https://giphy.com/embed/3oKIPrCu48s5KfzV7i");

    // Affiche le formulaire
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="creature">Es-tu un humain, un chat ou une licorne ?</label>
        <select name="creature" id="creature">
            <option value="humain">Humain</option>
            <option value="chat">Chat</option>
            <option value="licorne">Licorne</option>
        </select>
        <button type="submit">Soumettre</button>
    </form>

    <!-- Affiche le GIF à l'aide d'une balise iframe -->
    <iframe src='<?php echo $gifUrl; ?>' width='480' height='380' frameBorder='0' class='giphy-embed' allowFullScreen></iframe>

<?php
} else {
    // Affiche le formulaire si le formulaire n'a pas encore été soumis
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="creature">Es-tu un humain, un chat ou une licorne ?</label>
        <select name="creature" id="creature">
            <option value="humain">Humain</option>
            <option value="chat">Chat</option>
            <option value="licorne">Licorne</option>
        </select>
        <button type="submit">Soumettre</button>
    </form>

<?php } ?>

</body>
</html>
