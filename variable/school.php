<form method="get" action="">
    <br>
	<label for="note">Enter the number annotated :</label>
	<input type="text" name="note">
    <br><br>    
	<input type="submit" name="submit" value="Enter">
</form>


<?php 
if (isset($_GET['note'])) {
    $note = $_GET['note'];
    if ($note < 4) {
        echo "This work is really bad. What a dumb kid!";
    } else if ($note >= 5 && $note < 10) {
        echo "This is not sufficient. More studying is required.";
    } else if ($note == 10) {
        echo "barely enough!";
    } else if ($note >= 11 && $note < 15) {
        echo "Not bad!";
    } else if ($note >= 15 && $note < 19) {
        echo "Bravo, bravissimo!";
    } else if ($note >= 19 && $note <= 20) {
        echo "Too good to be true : confront the cheater!";
    }
}

?>