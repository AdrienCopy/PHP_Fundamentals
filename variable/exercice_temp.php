<?php
$temperature = 15;

if( $temperature >= 15 ) {
    // code to execute if the condition results TRUE
    $clothes = "T-shirt";
    $should_i_wear_a_scarf = false;
  } else {
    // code to execute if the condition results FALSE
    $clothes = "Pull-over";
    $should_i_wear_a_scarf = true;
  }
  
  if ($should_i_wear_a_scarf == true){
      // this is a "fake" function for the sake of the example 
      // that function is only executed in the condition is true

  }
  // The following function will be executed everytime, 
  // but its $clothes argument changes according to the result
  // of our previous conditional structure

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php echo $clothes; ?>
    </p>
    
</body>
</html>