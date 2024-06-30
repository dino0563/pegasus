<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function editt(Request $request)
    {
        $user_id = 1;
        $user = Users::findOrFail($user_id);
        return view('profile.settings', compact('user'));
    }

    public function updatee(Request $request)
    {
        $user_id = 1;
        $user = Users::findOrFail($user_id);

        $validatedData = $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|email|max:250|unique:users,email,' . $user->id,
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        $user->save();

        return redirect()->route('profile.index')->with('status', 'Profile updated successfully!');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:jpg,jpeg,png,gif|max:800',
        ]);

        if ($request->hasFile('photo')) {
            $user = Auth::user();
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_photos', $filename, 'public');

            // Simpan path ke database
            $user->profile_photo = $path;
            $user->save();

            return redirect()->route('profile.index')->with('status', 'Profile photo updated successfully!');
        }

        return redirect()->route('profile.index')->withErrors('No photo uploaded.');
    }
}
