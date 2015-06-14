<?php
class LevelRank extends Rank
{
	private $levels = [];
	
	public function addLevel( $level, $rank_lvl )
	{
		if( !array_key_exists( $level, $this->levels[$level] ) )
		{
			$this->levels[$level] = $rank_lvl;
		}
	}
	public function getLevels()
	{
		return $this->levels;
	}
	public function removeLevel( $level )
	{
		if( array_key_exists( $level, $this->levels ) )
		{
			unset( $this->levels[$level] );
			$this->levels = array_values( $this->levels );
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>