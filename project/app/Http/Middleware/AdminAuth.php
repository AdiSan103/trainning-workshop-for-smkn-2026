<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        $token = $request->cookie('admin_token');

        if (! $token) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $cocok = Admin::all()->contains(function ($admin) use ($token) {
            return hash('sha256', $admin->email) === $token;
        });

        if (! $cocok) {
            return redirect()->route('admin.login')->with('error', 'Sesi tidak valid, silakan login ulang.');
        }

        return $next($request);
    }
}
