<?php
namespace Rpg\Utils;

// class that computes the experience level of a rank

class Experience
{
	// define private constants
	const Multiplier = 60.0;
	const Power = 2.8;
	const Offset = 7.33;
	
	
	public function Compute( $level )
	{
		//return (int)Math.Floor((Math.Pow(level, _Power) + _Offset) * _Multiplier)
		return floor( ( pow( $level, SELF::Power ) + SELF::Offset ) * SELF::Multiplier );
	}
}

?>