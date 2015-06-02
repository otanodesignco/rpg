<?php
class TurnDeBuff extends Debuff
{
	protected $turns = 0;
	
	public function __construct( $name, $descr, $mod_amt, $type, $turns )
	{
		parent::__construct( $name, $descr, $mod_amt, $type );
		$this->turns = $turns;
	}
	
	public function getTurns( $value )
	{
		return $this->turns;
	}
	public function setTurns( $value )
	{
		$this->turns += $value;
	}
	
	public function Modify( $value )
	{
		if( $this->type == "/" )
		{
			if( $this->turns > 0 )
			{
				return $value -= ( $value * $this->mod_amount ) / 100;
			}
			else
			{
				$this->deActivate();
			}
		}
		else
		{
			if( $this->turns > 0 )
			{
				return $value -= $this->mod_amount;
			}
			else
			{
				$this->deActivate();
			}
		}
	}
}
?>