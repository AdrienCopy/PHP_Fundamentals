<?php 
$name = "Adrien";
$age = 36;
$color_eyes = "green";
$family_team = array(
    0 => Eléonore,
    1 => Adrien,
    2 => Alice);
$hungry = false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi! My name is <?php echo $name; ?></h1>
    <h2>I am <?php echo $age; ?> years old.</h2>
    <h2>My eyes are <?php echo $color_eyes; ?></h2>
    <p>The first person in my family is <?php echo $family_team[0]; ?></p>
</body>
</html>