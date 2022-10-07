<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    "media" => [
        "middleware" => ['web', 'auth', 'userStatus', 'lastLogin', 'optimizeImages'],
        // adds the prefix to the start of the url
        "prefix" => "",
        "filesystem_disk_name" => "cms",
        "fetch_url"  => env("MEDIA_FETCH_URL"),
    ],
    "log" => [
        "middleware" => ['web', 'auth', 'userStatus', 'lastLogin', 'optimizeImages', 'permission', 'menuStatus'],
        // adds the prefix to the start of the url
        "prefix" => "",
    ],
];
