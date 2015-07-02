<?php

namespace context;

/**
 * Decorator to echo the steps taken by the Context FSM
 *
 * Class LogContextDecorator
 * @package context
 */
class LogContextDecorator extends Context {
    private $context;

    public function __construct(Context $context) {
        echo "initial state: ".$context->currentState().PHP_EOL;

        $this->context = $context;
    }

    public function isAllowedMoveToState(State $state)
    {
        echo __METHOD__." ".$state.": ".($this->context->isAllowedMoveToState($state) ? 'yes' : 'no').PHP_EOL;
    }

    public function previousState()
    {
        echo __METHOD__.": ".$this->context->previousState().PHP_EOL;
    }

    public function nextPossibleStates()
    {
        echo __METHOD__.": ".implode(", ", $this->context->nextPossibleStates()).PHP_EOL;
    }

    public function moveToState(State $state)
    {
        echo __METHOD__.": ".$state.PHP_EOL;
        $this->context->moveToState($state);
    }

    public function currentState()
    {
        echo __METHOD__.": ".$this->context->currentState().PHP_EOL;
        return $this->context->currentState();
    }

    public function hasCompletedState(State $otherState)
    {
        return $this->context->hasCompletedState($otherState);
    }
}