<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UserDeleteRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('profile')->filter($request->search)->paginate('10');

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserStoreRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_default' => $request->password_default,
            'is_active' => $request->is_active,
        ]);

        return to_route('users.show, $user->slug')->with('success', 'User berhasil ditambahkan');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'password_default' => $request->password_default,
            'is_active' => $request->is_active,
        ]);

        return to_route('users.show, $user->slug')->with('success', 'User berhasil diperbarui');
    }

    public function destroy(UserDeleteRequest $request, User $user)
    {
        // Check validation username input
        // if not same, redirect back with error validation
        if($user->username != $request->username){
            // Redirect back user with session failed
            return back()->with('failed', 'Username <b>'.$request->username.'</b> not found!');
        }
        
        // If same, delete user
        $user->delete();

        // Redirect to index user with session succes
        return to_route('users.index')->with('success', 'User <b>'.$request->username.'</b> has been deleted');
    }

    public function check($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();

        $data = json_encode($user);

        return $data;
    }

}
