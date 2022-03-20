<?php
require_once 'functions.php';
require_once './namespace/index.php';

// function getGreeting() {
//   echo 'ごきげんよう';
// }
// function getGreeting() {
//   echo 'ガルルルル';
// }
// getGreeting();

echo man\getGreeting();
echo "\n";
echo man\getHeight();
echo "\n";
echo dog\getGreeting();
echo "\n";

// print_r(get_declared_classes());
// print_r(get_defined_functions());

use asia\JP\tohoku\aomori\man as tugarujin;

echo tugarujin\getGreeting();
echo "\n";

require_once 'classes/human.php';

use Amniota\Synapsida\Therapsida\Cynodontia\Hominina\Homo as human;

$hoge = new human\human();
var_dump($hoge);

echo $hoge->getName();
