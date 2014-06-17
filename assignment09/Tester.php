<?php


class Tester {

	public $passed = 0;
	public $failed = 0;
	public $message = "";
	
	
	function test($a, $b) {
		if ($a == $b) {
			$this->passed = $this->passed +1;
			$this->message = "PASS";
			return true;
			
		} else {
			$this->failed = $this->failed + 1;
			$this->message = "FAIL: expected $b, got $a";
			return false;		
		}
	}
	
}


?>