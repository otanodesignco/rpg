<?php

require_once('/utils/levels.php');

use Rpg\Utils\Levels as LVL;

$lvls = new LVL( 72 );

print_r( $lvls->GetXpPoints() );

?>