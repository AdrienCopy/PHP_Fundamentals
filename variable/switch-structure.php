<form method="get" action="">
    <br>
	<label for="note">Enter the number annotated :</label>
	<input type="text" name="note">
    <br><br>    
	<input type="submit" name="submit" value="Enter">
</form>

<?php 
if (isset($_GET['note'])) {
    $note = (int)$_GET['note']; // Cast to integer to ensure it's a number
    
    switch (true) {
        case ($note < 4):
            echo "This work is really bad. What a dumb kid!";
            break;
        case ($note >= 5 && $note < 10):
            echo "This is not sufficient. More studying is required.";
            break;
        case ($note == 10):
            echo "Barely enough!";
            break;
        case ($note >= 11 && $note < 15):
            echo "Not bad!";
            break;
        case ($note >= 15 && $note < 19):
            echo "Bravo, bravissimo!";
            break;
        case ($note >= 19 && $note <= 20):
            echo "Too good to be true: confront the cheater!";
            break;
        default:
            echo "Invalid note.";
            break;
    }
}
?>
