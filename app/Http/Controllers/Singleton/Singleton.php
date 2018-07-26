<?php

namespace App\Http\Controllers\Singleton;

use App\Http\Controllers\Controller;

class Singleton extends Controller
{
    private $author = "Mahmoud Gabr";
    private $title = "Signleton";
    public static $book = NULL;
    public static $isLoanedOut = FALSE;

    private function __construct() { }

    public static function getInstance()
    {
        if (self::$isLoanedOut == FALSE) {
            if (self::$book == NULL) {
                self::$book = new self();
            }
            self::$isLoanedOut = TRUE;
            return self::$book;
        } else {
            return NULL;
        }
    }

    public static function removeInstance(Singleton $singleton)
    {
        self::$isLoanedOut = FALSE;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorAndTitle()
    {
        return "The author is : " . $this->getAuthor() . ", and title is : " . $this->getTitle();
    }
}
