<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DashboardController extends Controller
{
    public function index(){
        return view("inbox");
    }

    public function show()
    {
        return QrCode::generate('Hello, World!');
    }
}
