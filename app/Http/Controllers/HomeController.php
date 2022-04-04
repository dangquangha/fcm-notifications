<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Facades\FCM;

class HomeController extends Controller
{
    public function index(Request $request)
    {   
        return view('pages.home');
    }

    public function sendNotification(Request $request)
    {
        $title = $request->title ?? 'Default Title';
        $message = $request->body ?? 'Default Message';
        $sound = 'default';

        // Build option
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60*20);
        $option = $optionBuilder->build();

        // Build content
        $notificationBuilder = new PayloadNotificationBuilder($title);
        $notificationBuilder->setBody($message)
                            ->setSound($sound);
        $notification = $notificationBuilder->build();

        // Build data
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(['icon' => 'file']);
        $data = $dataBuilder->build();

        // You must change it to get your tokens
        $token = $request->user()->device_key;

        $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);

        return redirect()->route('home');
    }
}
