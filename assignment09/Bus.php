<?php

class Bus {

	const DEATH_SPEED = 50;  
	public $armed = false;
	public $exploded = false;
	private $currentSpeed = 0;
	
		
	function getSpeed() {
		
		return $this->currentSpeed;
	}	
	
	function setSpeed($speed) {
		
		$this->currentSpeed = $speed;
		
		if ($speed > $this::DEATH_SPEED && $this->armed == false) {
			
			$this->armed = true;
			
		} else if ($speed < $this::DEATH_SPEED && $this->armed == true) {
		
			$this->exploded = true;
		
		}		
	}

	function trigger() {
	
		$this->exploded = true;
	}
	
}

?>