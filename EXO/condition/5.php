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
    if (isset($_GET["age"], $_GET["gender"], $_GET["english"])) {
        $age = $_GET["age"];
        $gender = $_GET["gender"];
        $english = $_GET["english"];

        $sex = 'fille';
        if ($gender == 'Man') {
            $sex = 'garçon';
        }

        $greeting = 'Aloha';
        if ($english == 'oui') {
            $greeting = 'Bonjour';
        }

        $message = '';

        if ($age < 12) {
            $message = "$greeting, $sex !";
        } elseif ($age >= 12 && $age <= 18) {
            $message = "$greeting l'Adolescent!";
        } elseif ($age > 18 && $age <= 115) {
            $message = "$greeting l'Adulte!";
        } else {
            $message = "Wow $greeting ! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te serrer dans mes bras ?";
        }

        echo $message;
    }
    ?>

    <form method="get" action="">
        <label for="age">Veuillez saisir votre âge :</label>
        <input type="number" name="age" id="age" required>

        <label for="gender">Man<input value="Man" type="radio" name="gender">
            Woman<input value="Woman" type="radio" name="gender">
        </label>

        <label for="english">Oui<input value="oui" type="radio" name="english">
            Non<input value="non" type="radio" name="english">
        </label>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
