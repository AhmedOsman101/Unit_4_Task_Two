<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|in:individual,team',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        $user->update($validatedData);

        return redirect()
            ->intended('admin.users')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        // Find the user by ID
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()
            ->intended('admin.users')
            ->with('success', 'User updated successfully');
    }
}
