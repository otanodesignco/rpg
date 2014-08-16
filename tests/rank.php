<?php
require_once('../rank/util/rank.php');
require_once('../rank/util/level.php');

use Rpg\Rank\Util\Rank as Rank;
use Rpg\Rank\Util\Level as LVL;

$rank = new Rank( 'Academy Student' );

$lvl1 = new LVL( 1 );
$rank->addLevel( $lvl1 );
$lvl2 = new LVL( 2 );
$rank->addLevel( $lvl2 );
$lvl3 = new LVL( 3 );
$rank->addLevel( $lvl3 );

$lvls = $rank->getLevels();

echo "<h2>" . $rank->Name() . "</h2>";

foreach( $lvls as $l )
{
	echo "Level: " . $l->Point();
	echo "<br />";
	echo "Xp required: " . $l->XP();
	echo "<br /><br />";
}
?>