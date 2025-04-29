<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAkses
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['message' => 'Silakan login terlebih dahulu']);
        }

        // Cek apakah user memiliki role yang sesuai
        if (Auth::user()->role !== $role) {
            return redirect('/login')->withErrors(['message' => 'Anda tidak memiliki akses']);
        }

        return $next($request);
    }
}
