<?php namespace App\Http\Controllers\Observer;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $notification = new Publisher("NotificationPublisher");
        $email        = new Observer("Email Observer", 10);
        $slack        = new Observer("Slack Observer", 20);
        $dashboard    = new Observer("Notification Observer", 15);

        $notification->attach($email);
        $notification->attach($slack);
        $notification->attach($dashboard);

        $notification->setEvent("Server is going down.");
    }
}
