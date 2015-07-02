<?php

require_once dirname(__FILE__)."/../Autoloader.php";

use context\LogContextDecorator;
use context\DebugContextDecorator;
use examples\tree\TreeContext;

echo PHP_EOL.PHP_EOL;
echo "1".PHP_EOL;
echo "|".PHP_EOL;
echo "2".PHP_EOL;
echo "|\\".PHP_EOL;
echo "3 4".PHP_EOL;
echo "  |".PHP_EOL;
echo "  5".PHP_EOL;

echo PHP_EOL.PHP_EOL."1 -> 2 -> 3".PHP_EOL.PHP_EOL;

$context = new LogContextDecorator(new TreeContext(TreeContext::step1()));

$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());

$context->moveToState(TreeContext::step2());

$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());

$context->moveToState(TreeContext::step3());

$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());


echo PHP_EOL.PHP_EOL."1 -> 2 -> 4 -> 5".PHP_EOL.PHP_EOL;

$context = new LogContextDecorator(new TreeContext(TreeContext::step1()));
$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());

$context->moveToState(TreeContext::step2());

$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());

$context->moveToState(TreeContext::step4());

$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());

$context->moveToState(TreeContext::step5());

$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());

echo PHP_EOL.PHP_EOL."Debug mode".PHP_EOL.PHP_EOL;

$context = new LogContextDecorator(new DebugContextDecorator(new TreeContext(TreeContext::step1())));
$context->currentState();
$context->previousState();
$context->nextPossibleStates();
$context->isAllowedMoveToState(TreeContext::step1());
$context->isAllowedMoveToState(TreeContext::step2());
$context->isAllowedMoveToState(TreeContext::step3());
$context->isAllowedMoveToState(TreeContext::step4());
$context->isAllowedMoveToState(TreeContext::step5());
$context->moveToState(TreeContext::step2());
$context->currentState();
$context->moveToState(TreeContext::step3());
$context->currentState();
$context->moveToState(TreeContext::step4());
$context->currentState();
$context->moveToState(TreeContext::step5());
$context->currentState();