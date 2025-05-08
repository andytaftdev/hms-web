<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {

        $user = $request->user();

        if (!$user || !$user->hasVerifiedEmail()) {
            return redirect('/email/verify'); // halaman verifikasi email
        }

        if (!$user->is_approved) {
            return redirect('/email/verify'); // halaman nunggu approve admin
        }

        return $next($request);
    }
}
