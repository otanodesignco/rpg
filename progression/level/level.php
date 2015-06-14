<?php
class Level
{
	protected $level_num; // number of Level
	protected $xp; // experience points of level
	protected $unlocks = []; // unlocks unlocked at this level
	protected $badges = []; // progression awards given at this level
	protected $nxt_level_xp; // object of next level if exists
	//setter
	public function setLevelName( $lvl_name )
	{
		$this->level_num = $lvl_name;
	}
	public function setXP( $lvl_xp )
	{
		$this->xp = $lvl_xp;
	}
	public function setNextLevelXP( $lvl_nxt_lvl_xp )
	{
		$this->nxt_level_xp = $lvl_nxt_lvl_xp;
	}
	// getter
	public function getLevelName()
	{
		return $this->level_num;
	}
	public function getXP()
	{
		return $this->xp;
	}
	public function getNextLevelXP()
	{
		return $this->nxt_level_xp;
	}
	
	public function addUnlock( $unlock_name, $lvl_unlock )
	{
		if( !array_key_exists( $unlock_name, this->unlocks ) )
		{
			$this->unlocks[$unlock_name] = $lvl_unlock;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function addBadge( $badge_name, $lvl_badge )
	{
		if( !array_key_exists( $badge_name, this->badges ) )
		{
			$this->badges[$badge_name] = $lvl_badge;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function removeUnlock( $unlock_name )
	{
		if( array_key_exists( $unlock_name, $this->unlocks ) )
		{
			unset( $this->unlocks[$unlock_name] );
			$this->unlocks = array_values( $this->unlocks );
			return true;
		}
		else
		{
			return false;
		}
	}
	public function removeBadge( $badge_name )
	{
		if( array_key_exists( $badge_name, $this->badges ) )
		{
			unset( $this->badges[$badge_name] );
			$this->badges = array_values( $this->badges );
			return true;
		}
		else
		{
			return false;
		}
	}
	public function hasUnlocks()
	{
		return ( ( count( $this->unlocks ) > 0 ) ? true : false );
	}
	public function hasBadges()
	{
		return ( ( count( $this->badges ) > 0 ) ? true : false );
	}
}
?>