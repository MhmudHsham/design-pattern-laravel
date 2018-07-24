<?php

namespace App\Http\Controllers\Facade;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        ProductsFacade::orderNow();
    }
}
