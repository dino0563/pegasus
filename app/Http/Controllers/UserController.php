<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

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
    try {
        $validatedData = $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:6',
            'profile_photo' => 'required|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $extension = $file->getClientOriginalExtension();
            $imageName = 'user-' . time() . '.' . $extension;
            $file->storeAs('public/users/images', $imageName);
            $user->profile_photo = $imageName;
        }

        if ($user->save()) {
            return redirect()->route('user.index')->with([
                'status' => 'success',
                'message' => 'New User Added Successfully!'
            ]);
        } else {
            throw new \Exception('Failed to add new user');
        }
    } catch (\Exception $e) {
        return redirect()->route('user.index')->with([
            'status' => 'error',
            'message' => 'Failed to add new user: ' . $e->getMessage()
        ]);
    }
}



    public function destroy($user_id)
    {
        $user = Users::findOrFail((int)$user_id);
        if ($user->image) {
            $destination = 'storage/users/images/' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
        $user->delete();
        return redirect(route('user.index'))->with([
            'status' => 'success',
            'message' => 'User deleted successfully!'
        ]);
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
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $user = Users::findOrFail($user_id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        if ($request['password']) {
            $user->password = bcrypt($request['password']);
        }

        if ($request->hasFile('image')) {
            $destination = 'storage/users/images/' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = '-user-' . now()->timestamp . '.' . $extension;
            $file->storeAs('public/users/images/', $filename);
            $user->image = $filename;
        }

        $user->update();

        return redirect()->route('user.index')->with([
            'status' => 'success',
            'message' => 'User item updated successfully!'
        ]);
    }
}
