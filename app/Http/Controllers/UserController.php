<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
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

    public function edit(Request $request, $user_id)
    {
        $user = Users::findOrFail($user_id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,',
            'password' => 'nullable|string|min:8|confirmed', 
        ]);

        $user = Users::findOrFail($user_id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        if ($request['password']) {
            $user->password = bcrypt($request['password']);
        }

        $user->update();

        return redirect(route('user.index'))->with('success', 'User item updated successfully.');
    }
}
