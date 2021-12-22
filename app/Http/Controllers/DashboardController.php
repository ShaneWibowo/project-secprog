<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;



class DashboardController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        return view('products');
    }

    public function contact()
    {
        return view('contact');
    }

    // public function redirect()
    // {
    //     $usertype=Auth::user()->usertype;

    //     if($usertype=='1')
    //     {
    //         return view('admin.home');
    //     }

    //     else
    //     {
    //         return view('user.home');
    //     }
    // }

    // public function index()
    // {
    //     $user_id = auth()->user()->id;
    //     $user = User::find($user_id);

    //     return view('dashboard')->with('posts', $user->posts);
    // }

}

