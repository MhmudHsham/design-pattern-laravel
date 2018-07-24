<?php namespace App\Http\Contracts;

interface SplObserver {
    public function update(SplSubject $spl_subject);
}