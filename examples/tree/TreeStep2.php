<?php

namespace examples\tree;

use context\Context;
use context\State;

class TreeStep2 extends State {
    public function isAllowedMoveToState(Context $context)
    {
        return $context->currentState() == TreeContext::step1() ||  $context->hasCompletedState(TreeContext::step1());
    }

    /**
     * @param Context $context
     * @return State[]
     */
    public function nextPossibleStates(Context $context)
    {
        return array(TreeContext::step3(), TreeContext::step4());
    }

    public function previousState(Context $context)
    {
        return TreeContext::step1();
    }
}