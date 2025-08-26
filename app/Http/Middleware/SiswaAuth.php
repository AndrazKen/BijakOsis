<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('siswa')->check()) {
            return redirect('/login')->withErrors(['login' => 'Harus login sebagai Siswa']);
        }

        return $next($request);
    }
}
