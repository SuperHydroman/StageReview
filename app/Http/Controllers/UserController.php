<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UserController extends Controller
{
    /**
     * Show the profile for a given users.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $users = User::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(10);

        return view('teacher.users.index', compact('users'));
    }

    // Create index
    function create()
    {
        $users = User::all();
        return view('teacher.users.create', compact('users'));
    }

    // Save to db
    function store(Request $request)
    {
        $password = Str::random(8);

        $request->validate([
            'role_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        User::create([
            'role_id' => $request->role_id,
            'name' => $request->firstname . " " . $request->middlename . " " . $request->lastname,
            'firstname' => $request->firstname,
            'lastname' => $request->middlename . " " . $request->lastname,
            'password' => bcrypt($password),
            'email' => $request->email,
        ]);
        return redirect()->route('teacher.users.index');
    }

    // Edit index
    function edit($id)
    {
        $user = User::find($id);
        return view('teacher.users.update', compact('user'));
    }

    // Update to db
    function update(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        User::find($id)->update([
            'role_id' => $request->role_id,
            'name' => $request->firstname . " " . $request->middlename . " " . $request->lastname,
            'firstname' => $request->firstname,
            'lastname' => $request->middlename . " " . $request->lastname,
            'password' => bcrypt($request->password),
            'email' => $request->email,
        ]);
        return redirect()->route('teacher.users.index');
    }

    // Delete index
    function delete($id)
    {
        $user = User::find($id);
        return view('teacher.users.delete', compact('user'));
    }

    // Delete from db
    function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('teacher.users.index');
    }

}
