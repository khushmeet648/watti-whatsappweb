<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageAccountController extends Controller
{
   public function index()
   {
    return view('manageaccount');
   }
}
