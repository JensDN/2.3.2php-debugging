<?php
echo "Exercise 1 starts here:";
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise(2); // every array starts with a 0
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;
new_exercise(3); // using the right string syntax helps
$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10);
new_exercise(4); // we use & to change our reference array week
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}
print_r($week);
new_exercise(5); // Because it's a lexical (i.e. alphabetical) comparison. aa is "less than" z because it would come first when you alphabetize them. The reason it stops at yz is because the next string would be za, which comes after (is "greater than") z alphabetically.
$arr = [];
for ($letter = 'a'; $letter !='aa'; $letter++) {
    array_push($arr, $letter);
}
print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array
new_exercise(6);
$arr = [];
function combineNames() {
    $params = randomHeroName();

    return implode('-', $params );
}
/*function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}*/ // I think this is a fake function. not necessary for this exercise

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = [$heroes[0][rand(0,count($heroes[0])-1)],$heroes[1][rand(0,count($heroes[1])-1)]];
    return $randname;
}
echo "Here is the name: " . combineNames();
new_exercise(7);
function copyright(int $year) {
    return  "&copy $year BeCode";
}
//print the copyright
echo copyright(date('Y'));
new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    }
    return 'No access';
}
//should great the user with his full name (John Smith)
echo $login = login('john@example.be', 'pocahontas');
//no access
echo $login = login('john@example', 'dfgidfgdfg');
//no access
echo $login = login('wrong@example', 'wrong');
new_exercise(9); // https:
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) > -1) {
            return 'invalid link<br />';
        }
    }
    return 'VALID link<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');
new_exercise(10);
//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for($i=count($areTheseFruits); $i >= 0; $i--) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this