<?php

class Rank
{
	protected $name;
	protected $descr;
	protected $xp;
	protected $icon;
	protected $unlocks;
	protected $badges;
	protected $nxt_rank;
	
	public function setName( $rank_name )
	{
		$this->name = $rank_name;
	}
	public function setDescr( $rank_descr )
	{
		$this->descr = $rank_descr;
	}
	public function setXP( $rank_xp )
	{
		$this->xp = $rank_xp;
	}
	public function setIcon( $rank_icon )
	{
		$this->icon = $rank_icon;
	}
	public function setNextRankXP( $rank_nxt_rank_xp )
	{
		$this->nxt_rank = $rank_nxt_rank_xp;
	}
	//getters
	public function getName()
	{
		return $this->name;
	}
	public function getDescr()
	{
		return $this->descr;
	}
	public function getXP()
	{
		return $this->xp;
	}
	public function getIcon()
	{
		return $this->icon;
	}
	public function getUnlocks()
	{
		return $this->unlocks;
	}
	public function getBadges()
	{
		return $this->badges;
	}
	public function getNextRankXP()
	{
		return $this->nxt_rank;
	}
	
	public function addUnlock( $rank_unlock_name, $rank_unlock )
	{
		if( !array_key_exists( $rank_unlock_name, $this->unlocks ) )
		{
			$this->unlocks[$rank_unlock_name] = $rank_unlock;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function addBadge( $rank_badge_name, $rank_badge )
	{
		if( !array_key_exists( $rank_badge_name, $this->badges ) )
		{
			$this->badges[$rank_badge_name] = $rank_badge;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function removeBadge( $rank_badge_name )
	{
		if( array_key_exist( $rank_badge_name, $this->badges ) )
		{
			unset( $this->badges[$rank_badge_name] );
			$this->badges = array_values( $this->badges );
			return true;
		}
		else
		{
			return false;
		}
	}
	public function removeUnlock( $rank_unlock_name )
	{
		if( array_key_exist( $rank_unlock_name, $this->unlocks ) )
		{
			unset( $this->unlocks[$rank_unlock_name] );
			$this->unlocks = array_values( $this->unlocks );
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