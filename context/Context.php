<?php

namespace context;

/**
 * Extendable FSM
 *
 * Class Context
 * @package context
 */
class Context {
    /** @var State */
    private $currentState;
    /** @var State[] */
    private $completedStates = array();

    public function __construct(State $initialState) {
        $this->currentState = $initialState;
    }

    public function moveToState(State $state) {
        $this->completedStates[] = $this->currentState;
        $this->currentState = $state;

        $state->moveHook($this);
    }

    public function isAllowedMoveToState(State $state) {
        return $state->isAllowedMoveToState($this);
    }

    public function previousState() {
        return $this->currentState->previousState($this);
    }

    public function currentState() {
        return $this->currentState;
    }

    public function nextPossibleStates() {
        return $this->currentState->nextPossibleStates($this);
    }

    public function hasCompletedState(State $otherState) {
        foreach ($this->completedStates as $state) {
            if ($state == $otherState) {
                return true;
            }
        }

        return false;
    }
}