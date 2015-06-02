<?php
// base modifier, holds shared properties and methods
abstract class Modifier
{
	const PERCENT = "/";
	const VALUE = "#";
	protected $type;
	protected $name;
	protected $descr;
	protected $mod_amount;
	protected $active;
	
	abstract public function Modify( $value );
	// setter methods
	public function setName( $value )
	{
		$this->name = $value;
	}
	public function setDescr( $value )
	{
		$this->descr = $value;
	}
	public function setModAmount( $value )
	{
		$this->mod_amount = $value;
	}
	// getter methods
	public function getName()
	{
		return $this->name;
	}
	public function getDescr()
	{
		return $this->descr;
	}
	public function getModAmount()
	{
		return $this->mod_amount;
	}
	
	public function activate()
	{
		$this->active = true;
	}
	public function deActivate()
	{
		$this->active = false;
	}
	public function isActive()
	{
		return $this->active;
	}
}


?>