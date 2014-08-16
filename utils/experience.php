<?php
namespace Rpg\Utils;

// class that computes the experience level of a rank

class Experience
{
	// define private constants
	const Multiplier = 60;
	const Power = 2.8;

	public function Compute( $level )
	{
		// uses borderlands xp algorithm
		return ceil( ( self::Multiplier * pow( $level, self::Power ) ) - self::Multiplier );
	}
}

?>