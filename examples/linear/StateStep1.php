<?php

namespace examples\linear;

use context\Context;
use context\State;

class StateStep1 extends State {
    public function isAllowedMoveToState(Context $context) {
        return true;
    }

    public function previousState(Context $context) {
        return null;
    }

    public function nextPossibleStates(Context $context) {
        return array(new StateStep2());
    }
}