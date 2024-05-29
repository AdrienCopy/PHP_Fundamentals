<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
echo "$countries[2]<br>";

$family_boels_heymans = ['Adrien', 'Eléonore', 'Alice'];
print_r ("$family_boels_heymans<br>");


$films = ['Le Parrain', 'Le Parrain 2', 'Le Chevalier Noir', '12 Hommes en colère', 'La Liste de Schindler', 'Le Seigneur des anneaux : Le Retour du roi', 'Pulp Fiction', 'Le Seigneur des anneaux : La Communauté de l anneau', 'Le Bon, la Brute et le Truand'];
print_r ("$films[7]<br>");

var_dump($countries);
echo "<br>";
echo $countries[2];
echo "<br>";
array_push($countries, 'England');
$countries[] = 'Lalaland';
var_dump($countries);
echo "<br>";

$me = array ( 
    'firstname' => 'Adrien',
    'lastname' => 'Copy',
    'address' => 'Rue de la Roche 13',
    'city' => 'CSE',
    'favourite_season' => 'Spring',
    'like_soccer' => true,
    'favorite_movie' => array('Le Parrain', 'Le Parrain 2', 'Le Chevalier Noir', '12 Hommes en colère', 'La Liste de Schindler', 'Le Seigneur des anneaux : Le Retour du roi', 'Pulp Fiction', 'Le Seigneur des anneaux : La Communauté de l anneau', 'Le Bon, la Brute et le Truand')
    );

$me['hobbies'] = array('write code', 'build my house', 'ride a bike');

$she = array ( 
    'firstname' => 'Lélé',
    'lastname' => 'Copy',
    'address' => 'Rue de la Roche 13',
    'city' => 'CSE',
    'favourite_season' => 'Spring',
    'like_soccer' => false,
    'favorite_movie' => array('Le Parrain', 'Le Parrain 2', 'Le Chevalier Noir', '12 Hommes en colère', 'La Liste de Schindler', 'Le Seigneur des anneaux : Le Retour du roi', 'Pulp Fiction', 'Le Seigneur des anneaux : La Communauté de l anneau', 'Le Bon, la Brute et le Truand'),
    'hobbies' => array('sewing', 'to cook', 'do some gardening', 'to party', 'ride a bike'),
    'marry' => $me['firstname']
    );

$me['marry'] = $she;
$me['hobbies'][] = 'taxidermie';
$me['lastname'] = 'SuperCopy';

echo '<pre>';
print_r($me);
echo '</pre>';

$number_of_elements = count($me['hobbies']);
echo $number_of_elements;
echo "<br>";

$possible_hobbies_via_merge = array_merge($me['hobbies'], $she['hobbies']);
$possible_hobbies_via_merge = array_unique($possible_hobbies_via_merge);
$common_hobbies = array_intersect($me['hobbies'], $she['hobbies']);
echo '<pre>';
print_r($possible_hobbies_via_merge);
print_r($common_hobbies);
echo '</pre>';


$web_development = array('frontend[]', 'backend[]');
$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'ruby_on_rails';
$web_development['frontend'][] = 'css';
$web_development['frontend'][] = 'flash';
$web_development['frontend'][] = 'javascript';
$web_development['frontend']['0'] = 'html';
//unset($web_development['frontend'][2]);
array_splice($web_development['frontend'], 2, 1);
echo '<pre>';
print_r($web_development);
echo '</pre>';


?>