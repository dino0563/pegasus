<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
                'password' => 'required|min:8',
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
    try {
        $user = User::findOrFail((int)$user_id);
        // Hapus gambar pengguna jika ada
        if ($user->image) {
            $destination = 'storage/users/images/' . $user->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }

        // Hapus pengguna
        $user->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function edit(Request $request, $user_id)
    {
        $user = Users::findOrFail($user_id);
        return view('admin.user.edit', compact('user'));
    }

    // Controller Method
    public function update(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user_id,
            'profile_photo' => 'nullable|file|image|mimes:jpg,jpeg,png|max:10240',
        ]);

        $user->name = $request['name'];
        $user->email = $request['email'];

        if ($request->hasFile('profile_photo')) {
            $destination = 'storage/users/images/' . $user->profile_photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('profile_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = 'user-' . now()->timestamp . '.' . $extension;
            $file->storeAs('public/users/images/', $filename);
            $user->profile_photo = $filename;
        }

        $user->save();

        return redirect()->route('user.index')->with([
            'status' => 'success',
            'message' => 'User item updated successfully!'
        ]);
    }
}
