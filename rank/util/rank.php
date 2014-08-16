<?php
namespace Rpg\Rank\Util;

require_once('level.php');

class Rank
{
	private $title;
	private $levels;
	private $lvlCount;
	
	public function __construct( $title )
	{
		$this->lvlCount = 0;
		$this->title = $title;
		$this->levels = array();
	}
	
	public function addLevel( Level $lvl )
	{
		array_push( $this->levels, $lvl );
		$this->lvlCount++;
	}
	
	public function removeLevel()
	{
		array_pop( $this->levels );
		$this->lvlCount--;
	}
	
	public function Name()
	{
		return $this->title;
	}
	
	public function Levels()
	{
		return $this->lvlCount;
	}
	
	public function getLevels()
	{
		return ( ( is_array( $this->levels ) ) ? $this->levels : 0 );
	}
}
?>