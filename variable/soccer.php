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
    
	<input type="submit" name="submit" value="Registration">
</form>

<?php 

if (isset($_GET['age']) && isset($_GET['gender'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    if ($age >= 21 && $age <= 40 && $gender == 'female') {
        echo "Welcome to the team!";
        return;
    }
    echo "Sorry, you don't fit the criteria...";
}

?>