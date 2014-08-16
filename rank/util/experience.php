<?php
namespace Rpg\Rank\Util;

class Experience
{
	public static function Compute( $level )
	{
		$xp = 60 * ( ( pow( $level , 2.8 ) ) - 1 );
		
		if( $level > 50 )
		{
			return ceil( $xp ) - 1;
		}
		else
		{
			return ceil( $xp );
		}
		
	}
}
?>