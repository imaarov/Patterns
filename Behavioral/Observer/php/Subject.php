<?php

namespace DesignPattern\Behavioral\Observer\Php;

use DesignPattern\Behavioral\Observer\Php\Interface\ObserverInterface;

class Subject {

    private array $observers;

    /**
     * Add Subscriber (Observers) to subscribers array to use it for notification
     *
     * @param ObserverInterface $observer
     * @return void
     */
    public function addObserver(ObserverInterface $observer) : void
    {
        array_push($this->observers, $observer);
    }

    /**
     * Remove an Subscriber(Observer) from array
     * 
     * @param ObserverInterface $observer
     * @return void
     */
    public function removeObserver(ObserverInterface $observer) : void
    {
        unset($this->observers[$observer]);
    }

    /**
     * Notify all of the subscriber(Observers)
     * 
     * @param mixed $value
     * @return void
     */
    public function notify($value)
    {
        foreach ($this->observers as $key => $observer) {
            $observer->update($value);
        }
    }
}