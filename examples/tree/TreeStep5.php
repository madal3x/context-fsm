<?php

namespace examples\tree;

use context\Context;
use context\State;

class TreeStep5 extends State {
    public function isAllowedMoveToState(Context $context)
    {
        return $context->currentState() == TreeContext::step4() ||  $context->hasCompletedState(TreeContext::step4());
    }

    /**
     * @param Context $context
     * @return State[]
     */
    public function nextPossibleStates(Context $context)
    {
        return array();
    }

    public function previousState(Context $context)
    {
        return TreeContext::step4();
    }
}