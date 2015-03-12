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
?>