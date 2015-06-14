<?php
class BorderlandsXPCalculator implements XP
{
	public function calculate( $level )
	{
		if( $level == 1 )
		{
			return 0;
		}
		
		$offset = 0;
		$xp = ceil( 60 * pow( $level, 2.8 ) - 60 );
		
		if( $level > 50 && $level < 60 )
		{
			$offset = 1;
		}
		else if( $level > 60 && $level < 72 )
		{
			$offset = 2;
		}
		else if( $level > 72 && $level < 81 )
		{
			$offset = 3;
		}
		
		return $xp - $offset;
	}	
}
?>