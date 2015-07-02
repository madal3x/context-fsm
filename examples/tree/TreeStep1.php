<?php

namespace examples\tree;

use context\Context;
use context\State;

class TreeStep1 extends State {
    public function isAllowedMoveToState(Context $context)
    {
        return true;
    }

    public function nextPossibleStates(Context $context)
    {
        return array(TreeContext::step2());
    }

    public function previousState(Context $context)
    {
        return null;
    }
}