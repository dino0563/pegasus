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
        'password' => 'required|min:6',
        'profile_photo' => 'nullable|file|image|mimes:jpg,jpeg,png|max:10240',
    ]);

    // Debug: Check the validated data
    // dd($validatedData);

    try {
        $user = new Users(); // Assuming your model name is Users (or User, verify this)
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);

        // Debug: Check the user object before saving
        // dd($user);

        if ($request->file('profile_photo')) {
            $extension = $request->file('profile_photo')->getClientOriginalExtension();
            $imageName = 'user-' . now()->timestamp . '.' . $extension;
            $request->file('profile_photo')->storeAs('public/users/images', $imageName);
            $user->image = $imageName;

            // Debug: Check the image name and user object after assigning the image
            // dd($imageName, $user);
        }

        $user->save();

        // Debug: Check the user object after saving
        dd($user);

        return redirect()->route('user.index')->with([
            'status' => 'success',
            'message' => 'New User Added Successfully!'
        ]);
    } catch (\Exception $e) {
        \Log::error('Failed to add new user: ' . $e->getMessage());

        // Debug: Check the exception message
        // dd($e->getMessage());

        return redirect()->route('user.index')->with([
            'status' => 'error',
            'message' => 'Failed to add new user'
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
