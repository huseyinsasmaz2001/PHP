<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EXO PHP VARIABLE</h1>

    <?php

    $nom = "Huseyin";
    $age = 22;
    $eye_color = "brun";
    $tab_family = array(
        0 => 'Papa',
        1 => 'Maman',
        2 => 'Sibel',
        3 => 'Hatice',
        4 => 'Selda',
        5 => 'Sultan'
    );
    $faim = true

    ?>

    <p>
        <?php
        echo "Salut! Mon nom est $nom.";
        ?>
    </p>
    <br>
    <p> <?php echo "J'ai $age ans .";   ?> </p>
    <br>
    <p> <?php echo "Mes yeux sont $eye_color ."; ?> </p>
    <br>
    <p> <?php echo "La premiere personne de ma famille est $tab_family[0] .";   ?> </p>
    <p> <?php echo "La deuxieme personne de ma famille est $tab_family[1] .";   ?> </p>
    <p> <?php echo "La troisieme personne de ma famille est $tab_family[2] .";   ?> </p>
    <p> <?php echo "La quatrieme personne de ma famille est $tab_family[3] .";   ?> </p>
    <p> <?php echo "La cinquieme personne de ma famille est $tab_family[4] .";   ?> </p>
    <p> <?php echo "La sixieme personne de ma famille est $tab_family[5] .";   ?> </p>
    <br>
    <p>
        <?php
        if ($faim) {
            echo "J'ai faim !!";
        } else {
            echo "J'ai pas faim !!";
        }
        ?>
    </p>



</body>

</html>