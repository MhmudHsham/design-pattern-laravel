<?php namespace App\Http\Controllers\Observer;
use App\Http\Contracts\SplSubject;
use App\Http\Contracts\SplObserver;

class Observer implements SplObserver {
    protected $name;
    protected $priority = 0;

    public function __construct($name, $priority = 0) {
        $this->name = $name;
        $this->priority = $priority;
    }

    public function update(SplSubject $publisher) {
        echo $this->name . " : " . $publisher->getEvent() . PHP_EOL;
    }

    public function getPriority() {
        return $this->priority;
    }
}