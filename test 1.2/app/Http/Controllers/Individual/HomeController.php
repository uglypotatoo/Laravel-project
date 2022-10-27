<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        if (Auth::User($role = 1)) {
            return view('establishment.home');
        } else if (Auth::User($role = 2)) {
            return view('establishment.home');
        } else {
            return view('individual.home');
        }
    }

    

    public function qrcode() {
        return view('individual.qr');
    }

    public function account() {
        return view('individual.account');
    }
    public function logs() {
        return view('individual.logs');
    }
    public function accountse() {
        return view('establishment.account');
    }
}
