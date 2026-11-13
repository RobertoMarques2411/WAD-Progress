<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckClerkRole
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user login DAN role-nya 'clerk'
        if ($request->user() && $request->user()->role === 'clerk') {
            return $next($request);
        }

        // Jika CLIENT yang masuk, tolak dengan error 403
        abort(403, 'AKSES DITOLAK: Halaman ini hanya boleh diakses oleh Clerk (Petugas Laundry).');
    }
}