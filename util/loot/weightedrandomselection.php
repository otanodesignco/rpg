<?php

class WeightedRandomSelection
{
	private $total_weight;
	private $weights;
	private $weight_count;
	
	public function __construct( $weights )
	{
		$this->weights = $weights;
		$this->total_weight = (int)array_sum( $this->weights );
		$this->weight_count = count( $this->weights );
	}
	
	public function selectWeight()
	{
		$rgn = mt_rand( 1, $this->total_weight );
		$weight_sum = 0;
		
		for( $i = 0; $i < $this->weight_count; $i++ )
		{
			$weight_sum += $this->weights[ $i ];
			
			if( $weight_sum >= $rgn )
			{
				return $this->weights[ $i ];
			}
		}
	}
}
?>