<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::whereHas('posts')->with('posts')->orderBy('name')->paginate(9);
        return view('pages.users', compact('users'));
    }
}
