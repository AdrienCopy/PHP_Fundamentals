<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = [
    0 => "health hazard",
    1 => "filthy", 
    2 => "dirty", 
    3 => "clean", 
    4 => "immaculate"
];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3]; 

if( $room_filthiness ==  "health hazard"){
	echo "<br>Yuk, Room is health hazard ! Let's clean it up !";
} else if( $room_filthiness == "filthy"){
	echo "<br>Yuk, Room is filthy : let's clean it up !";
} else if( $room_filthiness == "dirty"){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness == "clean"){
	echo "<br>Yuk, Room is clean !";
} else if( $room_filthiness == "immaculate"){
	echo "Yuk, Room is immaculate, wouaw !";
}
 else {
	echo "<br>Nothing to do, room is neat.";
}

// Afficher l'heure actuelle
$datetime = new DateTime();
$current_time = $datetime->format('H:i:s');
echo "<br>L'heure actuelle est : " . $current_time;
echo "<br>Fuseau horaire actuel : " . date_default_timezone_get();
date_default_timezone_set('Europe/Paris');
$current_time_2 = date("H:i:s");
echo "<br>L'heure actuelle est : " . $current_time_2;
$current_hour = date("H");

if($current_hour >=5 && $current_hour < 9){
    echo "<br>Good morning !";
} else if ($current_hour >=9 && $current_hour < 12){
    echo "<br>Good day !";
} else if ($current_hour >=12 && $current_hour < 16){
    echo "<br>Good afternoon !";
} else if ($current_hour >=16 && $current_hour < 21){
    echo "<br>Good evening !";
} else if ($current_hour >=21 && $current_hour < 5){
    echo "<br>Good night !";
}

?>

<form method="get" action="">
    <br>
	<label for="age">Enter your age :</label>
	<input type="text" name="age">
    <br><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Homme</label>
    <br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Femme</label>
    <br><br>

    <p>Do you speak English ?</p>
    <label for="language">Yes</label>
    <input type="radio" id="yes" name="language" value="yes">
    <br>
    <label for="language">No</label>
    <input type="radio" id="no" name="language" value="no">
    
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php 

if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['language'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $language = $_GET['language'];
    

        if ($gender == 'male') {
            if ($age < 12) {
                if ($language == yes) {
                    echo "<br>Hello mister kiddo!";
                } else {
                    echo "<br>Aloha mister kiddo!";
                }
            } else if ($age >= 12 && $age < 18){
                if ($language == yes) {
                    echo "<br>Hello mister Teenager !";
                } else {
                    echo "<br>Aloha mister Teenager !";
                }
            } else if ($age >= 18 && $age < 115){
                if ($language == yes) {
                    echo "<br>Hello mister Adult !";
                } else {
                    echo "<br>Aloha mister Adult !";
                }
            } else if ($age >= 115){
                if ($language == yes) {
                    echo "<br>Wow mister! Still alive ? Are you a robot, like me ? Can I hug you ?";
                } else {
                    echo "<br>Wow Aloha mister! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            }
        } elseif ($gender == 'female') {
            if ($age < 12) {
                if ($language == yes) {
                    echo "<br>Hello Miss kiddo!";
                } else {
                    echo "<br>Aloha Miss kiddo!";
                }
            } else if ($age >= 12 && $age < 18){
                if ($language == yes) {
                    echo "<br>Hello Miss Teenager !";
                } else {
                    echo "<br>Aloha Miss Teenager !";
                }
            } else if ($age >= 18 && $age < 115){
                if ($language == yes) {
                    echo "<br>Hello Miss Adult !";
                } else {
                    echo "<br>Aloha Miss Adult !";
                }
            } else if ($age >= 115){
                if ($language == yes) {
                    echo "<br>Wow Miss! Still alive ? Are you a robot, like me ? Can I hug you ?";
                } else {
                    echo "<br>Wow Aloha Miss! Still alive ? Are you a robot, like me ? Can I hug you ?";
                }
            }
        }
} 

?>