<?php
class WeightedSelection
{
	private $weights;
	private $weightCount;
	private $weight_sum;
	
	public function __construct( $weights )
	{
		
		$this->weights = $weights;
		$this->weightCount = count( $this->weights );
		$this->weight_sum = (int)array_sum( $this->weights );
		
	}
	
	public function selectWeight()
	{
		$rgn = mt_rand( 1, $this->weight_sum );
			
		for( $i = 0; $i < $this->weightCount; $i++ )
		{
			$rgn -= $this->weights[ $i ];
				
			if( $rgn <= 0 )
			{
				return $this->weights[ $i ];
			}
		}
	}
}

$weights = [1,5,20,55,76,89];

$random = new WeightedSelection( $weights );

$naw = [0 => ["percent" =>0, "totals" => 0], 1 => ["percent" =>0, "totals" => 0], 2 => ["percent" =>0, "totals" => 0], 3 => ["percent" =>0, "totals" => 0], 4 =>["percent" =>0, "totals" => 0], 5 => ["percent" =>0, "totals" => 0]];

for( $i = 0; $i < 10000; $i++ )
{
	$boo = $random->selectWeight();
	
	switch( $boo )
	{
		case 1:
			$naw[0]["percent"] = 1;
			$naw[0]["totals"] += 1;
		break;
		
		case 5:
			$naw[1]["percent"] = 5;
			$naw[1]["totals"] += 1;
		break;
		
		case 20:
			$naw[2]["percent"] = 20;
			$naw[2]["totals"] += 1;
		break;
		
		case 55;
			$naw[3]["percent"] = 50;
			$naw[3]["totals"] += 1;
		break;
		
		case 76:
			$naw[4]["percent"] = 76;
			$naw[4]["totals"] += 1;
		break;
		
		case 89:
			$naw[5]["percent"] = 89;
			$naw[5]["totals"] += 1;
		break;
		
		default:
		
		break;
	} 
}

for( $j = 0; $j < 6; $j++ )
{
	echo '<p><b>Rarity Percent:</b> ' . $naw[$j]["percent"] . '%' . '<br /> <b>Total Occurences:</b> ' . $naw[$j]["totals"] . ' out of 10,000' . '<br /> <b>Selection percent:</b>  ' . $naw[$j]["totals"] * 100 / 10000 . '%' . '</p>';
}
?>