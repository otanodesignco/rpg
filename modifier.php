<?php
// class that requires methods to be defined but gives standard variables that are shared
abstract class Modifier
{
	protected $name; // name of modifier
	protected $descr; // description, what it does
	protected $amount; // amount to modify by
	protected $active; // tells if it's on and show be used or not or hidden
	
	abstract public function Modify( $value );
	abstract public function Active();
	abstract public function Activate();
	abstract public function Deactivate();
}
// buff, increases a stats value
class Buff extends Modifier
{
	public function __construct( $buff_name, $buff_descr, $buff_amount, $on )
	{
		$this->name = $buff_name;
		$this->descr = $buff_descr;
		$this->amount = $buff_amount;
		$this->active = $on;
	}
	// implemented modify method to increase amount
	public function Modify( $value )
	{
		$value += ( $value * $this->amount ) / 100;
		return $value;
	}
	// implement active method
	public function Active()
	{
		return (($this->active == 1) ? true : false );
	}
	// implement activate method
	public function Activate()
	{
		$this->active = 1;
	}
	// implement deactivate method
	public function Deactivate()
	{
		$this->active = 0;
	}
}
// debuff, decreases a stats value
class Debuff extends Modifier
{
	public function __construct( $debuff_name, $debuff_descr, $debuff_amount )
	{
		$this->name = $debuff_name;
		$this->descr = $debuff_descr;
		$this->amount = $debuff_amount;
	}
	// implemented modify method to increase amount
	public function Modify( $value )
	{
		$value -= ( $value * $this->amount ) / 100;
		return $value;
	}
	// implement active method
	public function Active()
	{
		return (($this->active == 1) ? true : false );
	}
	// implement activate method
	public function Activate()
	{
		$this->active = 1;
	}
	// implement deactivate method
	public function Deactivate()
	{
		$this->active = 0;
	}
}
// class that buff or debuff base for durations
class TimedBuff extends Modifier
{
	protected $turns; // number of turns to modify by
	protected $counter; // internal counter used to 
	
	public function __construct( $buff_name, $buff_descr, $buff_amount, $duration)
	{
		$this->name = $buff_name;
		$this->descr = $buff_descr;
		$this->amount = $buff_amount;
		$this->turns = $duration;
		$this->counter = $duration;	
	}
	// implemented modify method to increase amount
	public function Modify( $value )
	{
		$value += ( $value * $this->amount ) / 100;
		$this->CountDown();
		
		return $value;
	}
	// implement active method
	public function Active()
	{
		return (($this->active == 1) ? true : false );
	}
	// implement activate method
	public function Activate()
	{
		$this->active = 1;
	}
	// implement deactivate method
	public function Deactivate()
	{
		$this->active = 0;
	}
	// counts the turns down everytime modify is called
	protected function CountDown()
	{
		$this->counter -= 1;
		
		if( $this->counter == 0 )
		{
			$this->Deactivate();
		}
	}
}
// duration Debuff
class TimedDebuff extends Modifier
{
	protected $turns; // number of turns to modify by
	protected $counter; // internal counter used to 
	
	public function __construct( $debuff_name, $debuff_descr, $debuff_amount, $duration)
	{
		$this->name = $debuff_name;
		$this->descr = $debuff_descr;
		$this->amount = $debuff_amount;
		$this->turns = $duration;
		$this->counter = $duration;	
	}
	// implemented modify method to increase amount
	public function Modify( $value )
	{
		$value -= ( $value * $this->amount ) / 100;
		$this->CountDown();
		
		return $value;
	}
	// implement active method
	public function Active()
	{
		return (($this->active == 1) ? true : false );
	}
	// implement activate method
	public function Activate()
	{
		$this->active = 1;
	}
	// implement deactivate method
	public function Deactivate()
	{
		$this->active = 0;
	}
	// counts the turns down everytime modify is called
	protected function CountDown()
	{
		$this->counter -= 1;
		
		if( $this->counter == 0 )
		{
			$this->Deactivate();
		}
	}
}


// How it works buffs and debuffs will be in seperate object arrays. Loop through both and try to find matchs to avoid issues. All active modifiers will be processed per turn since items can add a debuff. Once deactivated modifer is removed from the list at turn start.
?>