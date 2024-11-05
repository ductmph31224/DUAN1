<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}
