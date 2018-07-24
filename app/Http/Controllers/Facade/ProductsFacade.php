<?php

namespace App\Http\Controllers\Facade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsFacade extends Controller
{
    public function __construct() { }

    public static function orderNow() {
        $products = new Products();
        $products->addProductToCart();
        $products->applyDiscount();
        $products->applyRecharge();
        $products->getRandomOrderId();
        $products->saveProductInOrder();
    }
}
