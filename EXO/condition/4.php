<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 4</title>
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
    <?php
    if (isset($_GET["age"]) && isset($_GET["gender"])) {
        // Récupère l'âge à partir de la requête GET
        $age = $_GET["age"];
        $gender = $_GET["gender"];

        $sex = "";

        if ($gender == 'Man') {
            $sex = "Monsieur";
        } else {
            $sex = 'Madame';
        }


        // Affiche le message en fonction de l'âge
        if ($age < 12) {
            echo "Bonjour, $sex le gamin / la gamine !";
        } elseif ($age >= 12 && $age <= 18) {
            echo "Bonjour $sex l' Adolescent !";
        } elseif ($age > 18 && $age <= 115) {
            echo "Bonjour $sex l' Adulte !";
        } else {
            echo "Wow ! Toujours en vie ? Es-tu un $sex robot, comme moi ? Puis-je te serrer dans mes bras ?";
        }
    }
    ?>

    <form method="get" action="">
        <label for="age">Veuillez saisir votre âge :</label>
        <input type="number" name="age" id="age" required>
        <label for="gender">Man<input value="Man" type="radio" name="gender">
            Woman<input value="Woman" type="radio" name="gender">
        </label>
        <input type="submit" value="Envoyer">

    </form>
</body>

</html>