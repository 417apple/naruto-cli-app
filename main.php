<?php
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');

$human = new Human();
$enemy = new Enemy();

$human->name = "ナルト";
$enemy->name = "ペイン";

while($human->hitPoint > 0 && $enemy->hitPoint >0){
    echo $human->name . ":" . $human->hitPoint . "/" . $human::MAX_HITPOINT . "\n";
    echo $enemy->name . ":" . $enemy->hitPoint . "/" . $enemy::MAX_HITPOINT . "\n";
    $human->doAttack($enemy);
    $enemy->doAttack($human);
    echo "\n";
}
echo "戦闘終了\n";
echo $human->name . ":" . $human->hitPoint . "/" . $human::MAX_HITPOINT . "\n";
echo $enemy->name . ":" . $enemy->hitPoint . "/" . $enemy::MAX_HITPOINT . "\n";