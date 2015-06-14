<?php
class SkillPointRank extends Rank
{
	private $skill_point = 0;
	
	public function addSkillPoint( $num_points )
	{
		$this->skill_point = $num_points;
	}
	public function removeSkillPoint()
	{
		$this->skill_point = 0;
	}
	public function hasSkillPoint()
	{
		return ( ( $this->skill_point > 0 ) ? true : false );
	}
}
?>