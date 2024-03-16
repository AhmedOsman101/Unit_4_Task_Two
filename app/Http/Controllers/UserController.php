<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return response()->json(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        return response()->json(User::create($request->all()));
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
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'in:individual,team',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user
        $user->update($validatedData);

        // Redirect to users dashboard
        return redirect()
            ->intended('admin/users')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect to users dashboard
        return redirect()
            ->intended('admin/users')
            ->with('success', 'User updated successfully');
    }
}
