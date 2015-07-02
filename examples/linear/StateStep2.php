<?php

namespace examples\linear;

use context\Context;
use context\State;

class StateStep2 extends State {
    public function isAllowedMoveToState(Context $context) {
        return $context->currentState() == new StateStep1() || $context->hasCompletedState(new StateStep1());
    }

    public function previousState(Context $context) {
        return new StateStep1();
    }

    public function nextPossibleStates(Context $context) {
        return array(new StateStep3());
    }
}