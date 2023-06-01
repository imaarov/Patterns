<?php

namespace DesignPattern\Structural\Composite\Php;

class Main {

    public function __construct()
    {
        # add to shape to group1
        $group1 = new Group();
        $group1->add(new Shape());
        $group1->add(new Shape());

        # add to shape to group2
        $group2 = new Group();
        $group2->add(new Shape());
        $group2->add(new Shape());

        # add group1 and group2 to group
        $group = new Group($group1);
        $group = new Group($group2);

        # rendering all
        $group->render();

    }
}