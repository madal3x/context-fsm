<?php

require_once dirname(__FILE__)."/../Autoloader.php";

use context\LogContextDecorator;
use context\DebugContextDecorator;
use examples\linear\LinearContext;

echo PHP_EOL.PHP_EOL."1 -> 2 -> 3".PHP_EOL.PHP_EOL;


$context = new LogContextDecorator(new LinearContext(LinearContext::step1()));
$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(LinearContext::step1());
$context->isAllowedMoveToState(LinearContext::step2());
$context->isAllowedMoveToState(LinearContext::step3());

$context->moveToState(LinearContext::step2());

$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(LinearContext::step1());
$context->isAllowedMoveToState(LinearContext::step2());
$context->isAllowedMoveToState(LinearContext::step3());

$context->moveToState(LinearContext::step3());

$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(LinearContext::step1());
$context->isAllowedMoveToState(LinearContext::step2());
$context->isAllowedMoveToState(LinearContext::step3());

echo PHP_EOL.PHP_EOL."Debug mode".PHP_EOL.PHP_EOL;

$context = new LogContextDecorator(new DebugContextDecorator(new LinearContext(LinearContext::step1())));
$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(LinearContext::step1());
$context->isAllowedMoveToState(LinearContext::step2());
$context->isAllowedMoveToState(LinearContext::step3());
$context->moveToState(LinearContext::step2());
$context->currentState();
$context->moveToState(LinearContext::step3());
$context->currentState();