<?php
class Unlockable
{
	protected $id; // @int, used to identify
	protected $title; // @string, used to display name
	protected $descr; // @string, used to display description
	protected $icon; // @string path/url to icon for unlock image
	protected $order; // @int, used for display position
	protected $unlocked; // @bool, status of the achievement
	
	public function locked()
	{
		return this->unlocked;
	}
}
?>