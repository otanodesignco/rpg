<?php
namespace Rpg\Utils;




use Rpg\Utils\Levels as LVL;

// class that is used to create a rank and handle a ranks experience points based on it's level

class Rank
{

	private $title; // the name of the Rank

	public function __construct( $name, $levels )
	{
		// constructor takes the ranks name and level
		$this->title = $name;
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