<?php
require_once('../rank/util/level.php');

use Rpg\Rank\Util\Level as LVL;

$lvl = new LVL( 72 );
$lvl->addSkillPoint();


echo "Total XP: " . $lvl->Xp() . " / Level " . $lvl->Point();
?>