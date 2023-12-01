<?php

require_once 'Hero.php';
require_once 'Warrior.php';
require_once 'Mage.php';
require_once 'Rogue.php';

$arthas = new Warrior('Arthas');
$dumbledore = new Mage('Dumbledor');
$lupin = new Rogue('Lupin');

$lupin->assassinat($dumbledore);
$lupin->assassinat($dumbledore);



