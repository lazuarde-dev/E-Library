<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // cek dulu apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // cek role user
        if (!Auth::user()->role === 'admin') {
            return $next($request);
        }

        // untuk request AJAX/API, return status 403
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['Message' => 'Anda tidak memiliki akses untuk operasi ini.'], 403);
        }

        return redirect()-> route('books.index')
            ->with('error', 'You do not have admin access.');
    }
}