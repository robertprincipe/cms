<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {

        return view('admin.users.index', [
            'users' => User::orderBy('id', 'Desc')->get()
        ]);
    }
}
