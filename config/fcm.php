<?php

return [
    'driver' => env('FCM_PROTOCOL', 'http'),
    'log_enabled' => false,

    'http' => [
        'server_key' => env('FCM_SERVER_KEY', 'Your FCM server key'),
        'sender_id' => env('FCM_SENDER_ID', 'Your sender id'),
        'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
        'server_group_url' => 'https://android.googleapis.com/gcm/notification',
        'timeout' => 30.0, // in second
    ],

    'config' => [
        'api_key' => 'AIzaSyDww8TwkJ_sONRJgz5GLEnvLq35vzWN8pw',
        'auth_domain' => 'notifications-test-43f0f.firebaseapp.com',
        'project_id' => 'notifications-test-43f0f',
        'storage_bucket' => 'notifications-test-43f0f.appspot.com',
        'messaging_sender_id' => "1048269334430",
        'app_id' => '1:1048269334430:web:00f9ac82c97f21c4bd188f',
        'measurement_id' => "G-SNBR7Y7Y7W"
    ]
];
