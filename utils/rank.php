<?php
namespace Rpg\Utils;

require_once('levels.php');


// class that is used to create a rank and handle a ranks experience points based on it's level

class Rank
{

	private $title; // the name of the Rank
	private $lvls; // object for levels and xp in an array
	private $xp; // array of levels and xp
	private $xpToNextRank; // last element of array

	public function __construct( $name, Levels $levels )
	{
		// constructor takes the ranks name and level
		$this->title = $name;
		$this->lvls = $levels;
		$this->xp = $this->lvls->GetXpPoints();
		$this->xpToNextRank = $this->xp[$this->lvls->GetLevels() + 1];
	}
	
	public function Title( $name = null )
	{
		if( empty( $name ) )
		{
			return $this->title;
		}
		else
		{
			$this->title = $name;
		}
	}
	
}
?>