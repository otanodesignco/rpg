<?php
// an item is not a weapon, can have modifiers, be lootable, or be part of a buildable but only one of these
class Item
{
	protected $name; // name of the item
	protected $descr; // description, i.e. what item does
	protected $icon; // icon used to show item in inventory
	protected $logo; // full size view image used on item view
	protected $trade_value; // value for trade in stores or xp
	protected $cost; // cost of item in stores
	protected $rarity; // assigned rarirty object used in lootables and drops
	protected $active; // tells engine if item is active so it can apply mods, allow to be used
}
// item that holds loot, these are generated at run time
class LootableItem extends Item
{
	private $loot_amount; // int specifies number of items to fill with
	private $loot = []; // array holds the loot objects
	private $looted = false; // once flag is true item is destroyed
	private $modified = false; // says it rarity increases happened to decide if bonuses apply
	private $rarityBonus = []; // holds objects that modify rarity levels to effect drop chances
}
// item that is buildable and is made of other buildable items that are type parts
class BuildableItem extends Item
{
	const PART = 1;
	const ITEM = 2;
	private $type; // needs to be either a part or Item
	private $parts = []; // holds the parts
	private $built = false; // if item has been built or not
}
// class is an item that is used to modify a stat
class ModifierItem extends Item
{
	private $stats = []; // since stats have modifiers on them, reference a stat here and attach a buff/debuff to it
}
?>