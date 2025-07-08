<?php

use App\Models\Service;

if (!function_exists('getServices')) {
    function getServices() {
        return Service::all();
    }
}
