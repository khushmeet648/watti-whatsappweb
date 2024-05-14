<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function inbox(){
        return view("analytics.inboxanalytics");
    }

    public function ctwa(){
        return view("analytics.ctwa");
    }
}
