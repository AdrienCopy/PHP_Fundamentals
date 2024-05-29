<form method="get" action="">
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Homme</label>
    <br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Femme</label>
    <br><br>
    
	<input type="submit" name="submit" value="Registration">
</form>

<?php 
$gender = $_GET['gender'];
$hello = ($gender == male) ? "Welcome Mister" : "Welcome Miss";
echo $hello;
?>