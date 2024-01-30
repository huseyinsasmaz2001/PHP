<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO 1.2</title>
</head>
<body>
    <?php 
    // 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array(
    0 => "health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if( $room_filthiness == $possible_states[0]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == $possible_states[1]){
	echo "Yuk, Room is filthy : let's clean it up! ";
// ...
} else if ($room_filthiness == $possible_states[2]) {
	echo "Yuk, Room is dirty : let's clean it up! ";
}else if ($room_filthiness == $possible_states[3]){
    echo "WaWWW, Room is clean  ";
}else if ($room_filthiness == $possible_states[4]){
    echo "WaWWW, Room is Immaculate  ";
}else {
	echo "<br>Nothing to do, room is neat.";
}

    ?>
</body>
</html>