<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

// 3. membuat class AdminAuthController yang mengextends Controller
class AdminAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:50', 'unique:admin,username'],
            'email' => ['required', 'email', 'max:255', 'unique:admin,email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Akun admin berhasil dibuat, silakan login.');
    }


    public function login(Request $request)
    {
        $admin = Admin::where('username', $request->username)->first();

        if (! $admin) {
            return back()->with('error', 'Username tidak ditemukan.');
        }

        if (! Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Password salah.');
        }

        $token = hash('sha256', $admin->email);

        return redirect()->route('admin.dashboard')
            ->with('success', 'Login berhasil.')
            ->withCookie(cookie('admin_token', $token, 120));
    }


        public function logout()
        {
            return redirect()->route('admin.login')
                ->with('success', 'Anda sudah logout.')
                ->withCookie(cookie()->forget('admin_token'));
        }

        public function index()
        {
            $admin = Admin::orderBy('username')->get();
            return view('admin.index', compact('admin'));
        }

        public function edit(Admin $admin)
        {

            return view('admin.edit', compact('admin'));
        }

        public function update(Request $request, Admin $admin)
        {
        $request->validate([
            'username' => ['required', 'string', 'max:50', Rule::unique('admin', 'username')->ignore($admin)],
            'email' => ['required', 'email', 'max:255', Rule::unique('admin', 'email')->ignore($admin)],
            'password' => ['nullable', 'string', 'min:6'],
        ]);

        $data = $request->only('username', 'email');

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

            $admin->update($data);

            return redirect()->route('admin.dashboard')->with('success', 'Data admin berhasil diperbarui.');
        }

        public function destroy(Admin $admin)
        {
            $admin->delete();
            return redirect()->route('admin.dashboard')->with('success', 'Data admin berhasil dihapus.');
        }

}
