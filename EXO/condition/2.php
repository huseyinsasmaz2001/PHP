<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 2</title>
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

    $now = date("H:i"); // Obtient l'heure actuelle au format 24 heures

    // Teste la valeur de $now et affiche le message approprié selon les spécifications.
    if ($now >= "05:00" && $now <= "09:00") {
        echo "Bonjour !";
    } else if ($now >= "09:01" && $now <= "12:00") {
        echo "Bonne journée !";
    } else if ($now >= "12:01" && $now <= "16:00") {
        echo "Bon après-midi !";
    } else if ($now >= "16:01" && $now <= "21:00") {
        echo "Bonsoir !";
    } else {
        echo "Bonne nuit !";
    }

    ?>
</body>

</html>