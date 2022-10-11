<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function index()
    {
        $roles = auth()->user()->roles;

        return view('roles.index', compact('roles'));
    }
}
