<?php
interface Strategy2
{
	public function do_strategy2();
}

class Strategy2A implements Strategy2
{
	
	function __construct()
	{
	}

	public function do_strategy2()
	{
		echo "Do Strategy2A!\n";
	}
}

class Strategy2B implements Strategy2
{
	
	function __construct()
	{
	}

	public function do_strategy2()
	{
		echo "Do Strategy2B!\n";
	}
}
?>
