# context-fsm

Reusable classes based on the finite state machine pattern that could be used for a specific flow of steps, for instance an ordering flow. The advantages with this approach is encapsulating in a State child class the logic of allowing a move to a specific step, and the function to be executed when moving there.

It also has decorators for logging the specific actions taken, or for a debug mode, where you would like to execute the steps even if it is not allowed to do so.

I have wrote two examples, one for a linear flow, and one for a tree flow. You can run the examples like:

php examples/test_linear.php
php examples/test_tree.php

This was based on Robert Martin's papers:

https://drive.google.com/file/d/0BwhCYaYDn8EgNTllNDg5NTItMjhkNC00NzQ5LTgyZTAtZTY1Zjg0N2U2NWQ0/view
http://www.objectmentor.com/resources/articles/umlfsm.pdf

and on a php example of the pattern:

https://sourcemaking.com/design_patterns/state/php

Robert Martin also wrote a compiler that translates a table of state transitions and functions to be executed to C++ code. The link is included in the second paper.
