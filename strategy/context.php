<?php
class Context
{
	private $strategy1 = null;
	private $strategy2 = null;
	public function __construct()
	{
	}

	public function set_strategy1($strategy1)
	{
		$this->strategy1 = $strategy1;
	}

	public function set_strategy2($strategy2)
	{
		$this->strategy2 = $strategy2;
	}

	public function do_strategy1()
	{
		return $this->strategy1 ? $this->strategy1->do_strategy1() : null;
	}

	public function do_strategy2()
	{
		return $this->strategy2 ? $this->strategy2->do_strategy2() : null;
	}

}

class ContextAA extends Context
{
	public function __construct()
	{
		$this->set_strategy1(new Strategy1A);
		$this->set_strategy2(new Strategy2A);
	}
}
class ContextAB extends Context
{
	public function __construct()
	{
		$this->set_strategy1(new Strategy1A);
		$this->set_strategy2(new Strategy2B);
	}
}
class ContextBA extends Context
{
	public function __construct()
	{
		$this->set_strategy1(new Strategy1B);
		$this->set_strategy2(new Strategy2A);
	}
}
class ContextBB extends Context
{
	public function __construct()
	{
		$this->set_strategy1(new Strategy1B);
		$this->set_strategy2(new Strategy2B);
	}
}
?>
