<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'posts' => $user->posts()->latest()->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'bio' => ['string', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
        ]);

        if(request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatar');

            // Delete the previous avatar image before update the new image
            Storage::delete($user->getAttributes()['avatar']);
        }

        if(request('password')) {
            // Validation for passowrd works only input password.
            $attributes = request()->validate([
                'password' => ['string', 'min:8', 'max:255', 'confirmed'],
            ]);

            $attributes['password'] = Hash::make(request('password'));
        }

        $user->update($attributes);

        return redirect($user->path());

    }
}
