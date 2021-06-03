<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
       $this->user = $user;
    }

    public function index()
    {
        $users = User::all();
        $user = collect($users)->last();
        
        return view('home', compact('user'));
    }
}
