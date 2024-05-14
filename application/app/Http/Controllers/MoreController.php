<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreController extends Controller
{
    public function user(){
    return view("more.usermanagement");
    }

    public function integration(){
        return view("more.integration");
        }

        public function webhooks(){
            return view("more.webhooks");
            }

            public function logs(){
                return view("more.logs");
                }

                public function commerce(){
                    return view("more.commerce");
                    }
}
