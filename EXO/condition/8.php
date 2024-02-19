<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de notation</title>
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

    <form method="post">
        <label for="grade">Entrez la note de l'élève :</label>
        <input type="number" name="grade" min="0" max="20" required>
        <button type="submit">Évaluer la note</button>
        <p>
            <?php
           
                $grade = $_POST["grade"];
                
                if ($grade < 4) {
                    echo "Ce travail est vraiment mauvais. Quel gamin idiot !";
                } elseif ($grade >= 5 && $grade <= 9) {
                    echo "Ceci n'est pas suffisant. Il faut étudier davantage.";
                } elseif ($grade == 10) {
                    echo "À peine assez !";
                } elseif ($grade >= 11 && $grade <= 14) {
                    echo "Pas mal !";
                } elseif ($grade >= 15 && $grade <= 18) {
                    echo "Bravo, bravissimo !";
                } elseif ($grade == 19 || $grade == 20) {
                    echo "Trop beau pour être vrai : affrontez le tricheur !";
                }
            
            ?>

        </p>
    </form>

</body>

</html>