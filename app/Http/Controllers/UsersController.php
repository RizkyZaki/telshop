namespace App\Http\Controllers;
<?php
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'     => 'required|string',
            'email'    => 'required|email|unique:users',
            'no_telp'  => 'required|string',
            'username' => 'required|string|unique:users',
            'lokasi'   => 'required|string',
        ]);

        User::create($validated);
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        return redirect()->route('users.index');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'nama'     => 'required|string',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'no_telp'  => 'required|string',
            'username' => 'required|string|unique:users,username,' . $user->id,
            'lokasi'   => 'required|string',
        ]);

        $user->update($validated);
        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }
}
