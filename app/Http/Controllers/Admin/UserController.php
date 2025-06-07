<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pages.users.index', [
            'title' => 'Pengguna',
            'heading' => 'Kelola Pengguna',
            'collection' => User::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.pages.users.create', [
            'title' => 'Pengguna',
            'heading' => 'Buat Pengguna',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email'    => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'phone'    => 'required|string|max:20',
            'role'     => ['required', Rule::in(['admin', 'buyer', 'seller'])],
            'address'  => 'nullable|string'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail(decrypt_it($id));

        return view('admin.pages.users.update', [
            'title' => 'Edit Pengguna',
            'heading' => 'Edit Data Pengguna',
            'user' => $user,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail(decrypt_it($id));

        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'email'    => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:6',
            'phone'    => 'required|string|max:20',
            'role'     => ['required', Rule::in(['admin', 'buyer', 'seller'])],
            'address'  => 'nullable|string'
        ]);

        if ($validated['password']) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $usr = User::where('id', decrypt_it($id))->first();

        if ($usr) {
            $usr->delete();

            return response()->json([
                'status' => 'true',
                'title' => 'Success',
                'description' => 'Pengguna Berhasil Dihapus.',
                'icon' => 'success',
            ]);
        } else {
            return response()->json([
                'status' => 'false',
                'title' => 'Error',
                'description' => 'Kesalahan saat menghapus.',
                'icon' => 'error',
            ]);
        }
    }
}
