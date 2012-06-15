<?php
interface Strategy1
{
	public function do_strategy1();
}

class Strategy1A implements Strategy1
{
	
	function __construct()
	{
	}

	public function do_strategy1()
	{
		echo "Do Strategy1A!\n";
	}
}

class Strategy1B implements Strategy1
{
	
	function __construct()
	{
	}

	public function do_strategy1()
	{
		echo "Do Strategy1B!\n";
	}
}
?>
