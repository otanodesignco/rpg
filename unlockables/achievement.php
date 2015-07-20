<?php

class Achievement extends Unlockable
{
	protected $conditions = [];	 // @Condition, requirements of achievement
	
	public function __construct(  )
	{
		$this->conditions = [];
		$this->unlock = false;
	}	
}

?>
