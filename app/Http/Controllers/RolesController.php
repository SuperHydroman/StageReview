<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', ['roles'=>$roles]);
    }
}
