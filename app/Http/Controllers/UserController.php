<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Storage;

class UserController extends Controller
{
    public function show(User $user)
    {
        $ideas = $user->ideas()->paginate(5);
        return view('users.show', compact('user', 'ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $editing = true;
        $ideas = $user->ideas()->paginate(5);
        return view('users.edit', compact('user', 'editing', 'ideas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:255',
            'bio' => 'min:3|max:255|nullable',
            'image' => 'image',
        ]);

        if (request('image')) {
            $validated['image'] = request()->file('image')->store('profile', 'public');

            Storage::disk('public')->delete($user->image ?? '');
        }

        $user->update($validated);
        return redirect()->route('profile');

    }

    public function profile()
    {
        return $this->show(auth()->user());
    }
}
