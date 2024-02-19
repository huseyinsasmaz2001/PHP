<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <title>Fake Excuses Notes Generator</title>
    <style>
        body {
            width:90%;
            height: 90%;
            margin-left: auto;
            margin-right: auto;
            background-color: #333;
            background-image: url(assets/excusesbackground.png);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap;
            
        }

        form {
            width: 350px;
            margin-top: 2rem;
            margin-left: 2rem;
            margin-right: 2rem;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        label {
            font-weight: 900;
        }

        input {
            
            margin: 5px;
            padding: 2px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #submit {
            text-align: center;
            background-color: #333;
            color:#fff;
            width: 76px;
            height:26px;
            
           
        }

        #submit:hover {
    background-color: black;
    
}

        #buttonContainer {
            text-align: center;
        }

        #GeneratedExcuse {
            width: 350px;
            margin-top: 2rem;
            margin-left: 2rem;
            margin-right: 2rem;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
        }
    </style>

</head>
<body>

<form method="get" action="excuse.php">
    <h2>Fake Excuses Notes Generator</h2>
    
    <label for="ChildName">Nom de l'enfant :</label>
    <br>
    <input type="text" id="ChildName" name="ChildName" required>
    
    <p>Genre:</p>
    <input type="radio" id="boy" name="gender" value="fils" required> fils
    <input type="radio" id="girl" name="gender" value="fille" required> fille
    <br>

    <label for="TeacherName">Enseignant :</label>
    <br>
    <input type="text" id="TeacherName" name="TeacherName" required>
    <br>
    <label for="date"> Date d'absence :</label>
    <input type="date" id="date" name="date" required>
    <br>
    
    <label for="illness">Choisissez un motif :</label>
    <br>
    <input type="radio" id="illness" name="reason" value="maladie" required> Maladie
    <br>
    <input type="radio" id="death" name="reason" value="décès de l'animal (ou d'un membre de la famille)" required>Décès de l'animal (ou d'un membre de la famille)
    <br>
    <input type="radio" id="extracurricular" name="reason" value="activité extrascolaire importante" required> Activité extrascolaire importante
    <br>
    <input type="radio" id="dumb" name="reason" value="Trop bête" required> Trop bête

    <div id="buttonContainer">
    <input type="submit" id="submit" name="submit" value="Génerer">
    </div>
</form>


    <div id="GeneratedExcuse">
    <?php

$excuses = array(
    "illness" => array(
        "Je suis désolé, mais mon ellnessnfant n'est pas très en forme et ne pourra pas aller à l'école aujourd'hui", "Malheureusement, mon enfant a contracté une maladie et il est préférable qu'il reste à la maison",
        "Malheureusement, mon enfant a contracté une maladie et il est préférable qu'il reste à la maison", "En raison d'une maladie soudaine, mon enfant ne pourra pas se rendre à l'école aujourd'hui",
        "En raison d'une maladie soudaine, mon enfant ne pourra pas se rendre à l'école aujourd'hui",
        "Mon enfant a de la fièvre et présente des symptômes grippaux, il doit donc se reposer à la maison",
        "J'ai le regret de vous informer que mon enfant a contracté une maladie contagieuse et que nous prenons des précautions",
    ),
    "death of the pet (or a family member)" => array(
        "Mon enfant traverse une période difficile à la suite de la perte d'un animal de compagnie", "Nous avons vécu une tragédie familiale avec la perte d'un animal de compagnie et mon enfant a besoin de temps pour y faire face",
        "Nous avons vécu une tragédie familiale avec la perte d'un animal de compagnie et mon enfant a besoin de temps pour y faire face,
        Il y a eu un triste incident dans notre famille avec la perte d'un animal de compagnie", "Mon enfant est en deuil à cause de la perte d'un animal de compagnie",
        "Mon enfant pleure la perte d'un animal de compagnie bien-aimé et n'est pas en état d'aller à l'école",
        "Nous sommes confrontés à la mort soudaine d'un membre de la famille proche, ce qui affecte le bien-être de mon enfant",
    ),
    "significant extra-curricular activity" => array(
        "Mon enfant a une activité extrascolaire importante qu'il ne peut pas manquer aujourd'hui",
        "Mon enfant doit participer à une activité extrascolaire importante", "Mon enfant a un événement spécial pour son activité extrascolaire aujourd'hui",
        "Mon enfant doit participer à un événement spécial dans le cadre de son activité extrascolaire aujourd'hui",
        "Mon enfant participe à une compétition extrascolaire qui requiert sa présence",
        "Nous avons pris des engagements préalables pour un événement extrascolaire important, et la participation de mon enfant est essentielle",
    ),
    "Too dumb" => array(
        "Mon enfant se sent dépassé par le travail scolaire et nous devons nous pencher sur ce problème",
        "Nous avons remarqué des difficultés de compréhension chez mon enfant et nous prenons des mesures pour y remédier",
        "En raison de ses difficultés scolaires, mon enfant a besoin d'une pause pour rattraper son retard",
        "Mon enfant éprouve des difficultés à suivre le programme scolaire et nous recherchons un soutien supplémentaire",
        "Nous sommes préoccupés par les progrès scolaires de mon enfant et nous élaborons un plan pour améliorer ses résultats",
    )
);

$childName = isset($_GET['ChildName']) ? $_GET['ChildName'] : " ";
$gender = isset($_GET['gender']) ? $_GET['gender'] : " ";
$teacherName = isset($_GET['TeacherName']) ? $_GET['TeacherName'] : " ";
$date = isset($_GET['date']) ? $_GET['date'] : " ";
$reason = isset($_GET['reason']) ? $_GET['reason'] : " ";


$selectedApology = "";

if (isset($excuses[$reason]) && is_array($excuses[$reason]) && count($excuses[$reason]) > 0) {
    $selectedApology = $excuses[$reason][array_rand($excuses[$reason])];
} else {
    $selectedApology = "Error: Unable to generate excuse. Please check your input.";
}


$apologyLetter = "Cher $teacherName,\n\n";
$apologyLetter .= "Je vous écris pour vous informer que mon $gender, $childName,ne pourra pas se rendre à l'école le $date.\n\n";
$apologyLetter .= "La raison de l'absence est la suivante : $reason.\n\n";
$apologyLetter .= "Excuses : $selectedApology\n\n";
$apologyLetter .= "Je vous prie d'agréer, Madame, Monsieur, l'expression de mes salutations distinguées.";

echo "<h2>Excuse générée</h2>";
echo nl2br($apologyLetter);

    ?>

    </div>

   
    
</body>
</html>