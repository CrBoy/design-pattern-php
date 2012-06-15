<?php
require 'context.php';
require 'strategy1.php';
require 'strategy2.php';

$context = new Context();

function test_do($context)
{
	$context->do_strategy1();
	$context->do_strategy2();
}

test_do($context);

$context->set_strategy1(new Strategy1A());
$context->set_strategy2(new Strategy2A());

test_do($context);

$context->set_strategy1(new Strategy1B());

test_do($context);

$context->set_strategy1(new Strategy1A());
$context->set_strategy2(new Strategy2B());

test_do($context);

echo "===== Derived Classes =====\n";
test_do(new ContextAA());
test_do(new ContextAB());
test_do(new ContextBA());
test_do(new ContextBB());

?>
