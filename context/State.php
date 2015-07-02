<?php

namespace context;

/**
 * Reusable State class that encapsulates the logic to move into this step, through isAllowedMoveToState
 * and the function to be executed when moving into this State, through moveHook
 *
 * moveHook can be overridden in specific States to execute specific actions when moving to that specific state
 *
 * Class State
 * @package context
 */
abstract class State {
    abstract public function isAllowedMoveToState(Context $context);

    /**
     * @param Context $context
     * @return State[]
     */
    abstract public function nextPossibleStates(Context $context);
    abstract public function previousState(Context $context);

    public function moveHook(Context $context) {
        echo PHP_EOL.get_called_class()."::moveHook".PHP_EOL;
    }

    public function __toString() {
        return get_class($this);
    }
}