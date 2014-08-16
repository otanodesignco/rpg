<?php
require_once('../rank/util/experience.php');

use Rpg\Rank\Util\Experience as XP;

$xp = XP::Compute( 72 );

echo $xp;
?>