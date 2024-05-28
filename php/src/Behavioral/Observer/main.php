<?php

use Imaarov\Patterns\Behavioral\Observer\Observer\Admin;
use Imaarov\Patterns\Behavioral\Observer\Observer\User;
use Imaarov\Patterns\Behavioral\Observer\Subscription;

class Main {
    public function __construct()
    {
        $subscription = new Subscription();
        $user1        = new User();
        $user2        = new User();
        $admin        = new Admin();

        # Add Observers to subscription
        $subscription->addObserver($user1);
        $subscription->addObserver($user2);
        $subscription->addObserver($admin);

        # Change the popUp Value that cause the notification to all observers
        $subscription->setPopUp(true);
    }
}