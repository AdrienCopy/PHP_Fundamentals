<?php
$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$words = explode(" ", $text);

foreach($words as $word) {
    $word = str_shuffle($word);
    $tab[] = $word;
}

$text = implode(" ", $tab);

echo '<pre>';
print_r($text);
echo '</pre>';


function capitalize($a) {
    $a = ucfirst($a);
    echo $a . "<br>";
}
capitalize('eléonore');

function capitalize2($a) {
    $a = mb_convert_case($a, MB_CASE_TITLE, "UTF-8");
    echo $a . "<br>";
}

capitalize2('éléonore');

echo date('Y-m-d') . "<br>";

function sum($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
        $c = $a + $b;
        echo $c . "<br>";
    } else {
        echo "$a et/ou $b n'est pas un nombre.<br>";
    }
}
sum(2, 4);

function acronyme($string) {
    $words = explode(" ", $string);
    $firstLetters = array_map(function($word) {
        return substr($word, 0, 1);
    }, $words);

    echo implode("", $firstLetters);
}

acronyme('Adrien Copy');

echo "<br>";

function replace($a) {
    $letterToReplace = "ae";
    $replacementLetter = "æ";
    $b = str_replace($letterToReplace, $replacementLetter, $a);
    echo $b;
}
replace("sphaerotheca");

echo "<br>";

function replace2($a) {
    $letterToReplace = "æ";
    $replacementLetter = "ae";
    $b = str_replace($letterToReplace, $replacementLetter, $a);
    echo $b;
}
replace2("sphærotheca");

echo "<br>";

function feedback($message, $type) {
    switch ($type) {
        case "error":
            $class = "error";
            break;
        case "warning":
            $class = "warning";
            break;
        case "notice":
            $class = "notice";
            break;
        default:
            $class = "info";
    }

    return "<div class='$class'>Error: $message</div>";
}

// Exemple d'utilisation de la fonction feedback
echo feedback("Incorrect email address", "error");
echo feedback("Incorrect email address", "e");

function min_letter($letter) {
    $letter = strtolower($letter);
    echo $letter;
}

$capital = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";

min_letter($capital);

echo "<br><br>";

$volume = 5 * 5 * 3.14 * 2 * (1/3);
echo '(exemple) The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';

echo "<br><br>";

function volume($a, $b) {
    $c = $a * $a * 3.14 * $b * (1/3);
    echo 'The volume of a cone which ray is ' . $a . ' and height is ' . $b . ' = ' . $c . ' cm<sup>3</sup><br />';
}

volume(5, 5);

echo "<br><br>";

$email = ">>>>lou@reed.org%dùf";

$email1 = filter_var($email, FILTER_SANITIZE_EMAIL);

echo $email1;

?>
