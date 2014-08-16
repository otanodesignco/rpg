<?php
namespace Rpg\Rank\Util;

require_once('experience.php');

class Level
{
	private $skillPoint;
	private $level;
	private $xp;
	
	public function __construct( $level )
	{
		if( $level > 0 )
		{
			$this->level = $level;
		}
		else
		{
			$this->level = 1;
		}
		
		$this->xp = Experience::Compute( $this->level );
		
		$this->skillPoint = 0;
	}
	
	public function addSkillPoint()
	{
		// add a skill point for this level
		if( $this->skillPoint == 0 )
		{
			$this->skillPoint = 1;
		}
	}
	
	public function removeSkillPoint()
	{
		if( $this->skillPoint == 1 )
		{
			$this->skillPoint = 0;
		}
	}
	
	public function hasSkillPoint()
	{
		return ( ( $this->skillPoint > 0 ) ? true : false );
	}
	
	public function Xp()
	{
		return $this->xp;
	}
	public function Point()
	{
		return $this->level;
	}
}
?>