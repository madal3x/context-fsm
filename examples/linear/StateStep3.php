<?php

namespace examples\linear;

use context\Context;
use context\State;

class StateStep3 extends State {
    public function isAllowedMoveToState(Context $context) {
        return $context->currentState() == new StateStep2() || $context->hasCompletedState(new StateStep2());
    }

    public function previousState(Context $context) {
        return new StateStep2();
    }

    public function nextPossibleStates(Context $context) {
        return array();
    }
}