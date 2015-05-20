<?php
// each stat is able to be modified, stats can be applied to almost anything, engine recognizes certain stats, you can tell engine how to handle dynamic stats
// base stat, all stats inherit from this class.
class Stat
{
	protected $name; // name of stat
	protected $alias; // name used to call stats
	protected $descr; // what stat is/does
	protected $value; // base value, once set does not modify by modifiers
	protected $bonuses; // value used in engine, is modified by modifiers
	protected $buffs = []; // buff object array
	protected $debuffs = []; // debuff object array
}
// stat that is attached to a character
class CharacterStat extends Stat
{
	
}
// stat that is attached to an Item
class ItemStat extends Stat
{
	
}
// stat attached to weapons
class WeaponStat extends Stat
{
	
}

?>