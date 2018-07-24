<?php namespace App\Http\Controllers\Observer;
use App\Http\Contracts\SplObserver;
use App\Http\Contracts\SplSubject;

class Publisher implements SplSubject{
    protected $linkedList = [];
    protected $observers = [];
    protected $name;
    protected $event;

    public function __construct($name) {
        $this->name = $name;
    }

    public function attach(SplObserver $spl_observer) {
        $observerKey = spl_object_hash($spl_observer);
        $this->observers[$observerKey] = $spl_observer;
        $this->linkedList[$observerKey] = $spl_observer->getPriority();
        arsort($this->linkedList);
    }

    public function detach(SplObserver $spl_observer) {
        $observerKey = spl_object_hash($spl_observer);
        unset($this->linkedList[$observerKey]);
        unset($this->observers[$observerKey]);
    }

    public function notify() {
        foreach($this->linkedList as $key => $value) {
            $this->observers[$key]->update($this);
        }
    }

    public function setEvent($event) {
        $this->event = $event;
        $this->notify();
    }

    public function getEvent() {
        return $this->event;
    }

}

