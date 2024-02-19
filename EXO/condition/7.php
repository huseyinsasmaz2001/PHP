<!-- ------------------------------------------PHP--------------------------------------------------------------- -->


<?php
$name = isset($_POST["name"]) ? $_POST["name"] : null;
$age = isset($_POST["age"]) ? $_POST["age"] : null;
$gender = isset($_POST["gender"]) ? $_POST["gender"] : null;

$welcome_message = "Désolé, vous ne répondez pas aux critères.";

if ($age >= 21 && $age <= 40 && $gender == 'female') {
    $welcome_message = "Bienvenue dans l'équipe $name !";
}

echo $welcome_message;
?>


<!-- ------------------------------------------Html--------------------------------------------------------------- -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription à l'équipe de football</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>

        <label for="age">Âge :</label>
        <input type="number" name="age" id="age" required>

        <label for="gender">Genre :</label>
        <select name="gender" id="gender" required>
            <option value="female">Femme</option>
            <option value="male">Homme</option>
        </select>

        <input type="submit" value="Soumettre">
    </form>
</body>

</html>