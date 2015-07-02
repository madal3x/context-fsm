<?php

namespace context;

/**
 * Decorator for the Context FSM to override isAllowedMoveToState to always return true
 * so in debug mode you can walk through all the states
 * and to just execute moveHook on the state without actually moving
 *
 * Class DebugContextDecorator
 * @package context
 */
class DebugContextDecorator extends Context {
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function moveToState(State $state)
    {
        $state->moveHook($this);
    }

    public function isAllowedMoveToState(State $state)
    {
        return true;
    }

    public function previousState()
    {
        return $this->context->previousState();
    }

    public function currentState()
    {
        return $this->context->currentState();
    }

    public function nextPossibleStates()
    {
        return $this->context->nextPossibleStates();
    }

    public function hasCompletedState(State $otherState)
    {
        return $this->context->hasCompletedState($otherState);
    }
}