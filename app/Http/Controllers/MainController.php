<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function zmienStanUwierzytelnienia()
{
    if(auth()->check()){
    $user = auth()->user();
    Auth::logout();
    return view('loggedout');
}
    else{
        return redirect('/register');
}
}


}
