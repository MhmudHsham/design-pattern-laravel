<?php namespace App\Http\Controllers\Facade;

use App\Http\Controllers\Controller;

class Products extends Controller
{
    public function __construct() { }

    public function addProductToCart() {
        echo '<p>addProductToCart</p>';
    }

    public function saveProductInOrder() {
        echo '<p>saveProductInOrder</p>';
    }

    public function getRandomOrderId() {
        echo '<p>getRandomOrderId</p>';
    }

    public function applyDiscount() {
        echo '<p>applyDiscount</p>';
    }

    public function applyRecharge() {
        echo '<p>applyRecharge</p>';
    }
}
