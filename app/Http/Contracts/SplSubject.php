<?php namespace App\Http\Contracts;
interface SplSubject {
    public function attach(SplObserver $spl_observer);

    public function detach(SplObserver $spl_observer);

    public function notify();
}