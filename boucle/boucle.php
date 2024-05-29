<?php 
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun){
    if ($pronoun == 'He/She'){
        echo "$pronoun codes<br>";
    } else {
        echo "$pronoun code<br>";
    }
}

$amount_of_lines = 1;

while ($amount_of_lines <= 120)
{
    echo $amount_of_lines . ", !";
    $amount_of_lines ++; 
}
echo "<br><br>";

for ($count = 1; $count <= 120; $count ++)
{
    echo $count . ", ";
}

echo "<br><br>";

$prenoms_startup = array(
    "James",
    "Emma",
    "William",
    "Olivia",
    "Noah",
    "Ava",
    "John",
    "Sophia",
    "Robert",
    "Isabella",
    "Michael",
    "Charlotte",
    "David",
    "Amelia",
    "Joseph"
);

foreach ($prenoms_startup as $prenom) {
    echo $prenom . "<br>";
}

$country_array = array(
    "FR" => "France",
    "US" => "United States",
    "GB" => "United Kingdom",
    "DE" => "Germany",
    "IT" => "Italy",
    "ES" => "Spain",
    "JP" => "Japan",
    "CN" => "China",
    "IN" => "India",
    "BR" => "Brazil",
    "RU" => "Russia",
    "CA" => "Canada",
    "AU" => "Australia",
    "MX" => "Mexico",
    "ZA" => "South Africa"
);

echo '<select name="country" id="country-select"> <option value="">--Please choose an option--</option>';
foreach ($country_array as $code => $country) {
    echo "<option value=\"$code\">$country</option>";
}
echo '</select>';

echo '<select name="country" id="country-select"> <option value="">--Please choose an option--</option>';
foreach ($country_array as $code => $country) {
    echo "<option value=\"$code\">$code</option>";
}
echo '</select>';

?>