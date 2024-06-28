<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('admin.user', compact('users'));
    }

    public function create()
    {
        return view('admin.create-user');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = new Users();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);

        $user->save();

        return redirect()->route('user.index')->with('status', 'New User Added Successfully!');
    }

    public function destroy($user_id)
    {
        $user = Users::findOrFail((int)$user_id); 
        $user->delete();
        return redirect(route('user.index'))->with('status', 'user Deleted Successfully');
    }
}