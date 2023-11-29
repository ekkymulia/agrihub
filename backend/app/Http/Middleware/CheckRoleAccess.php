<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        // dd($user);

        if ($user) {
            $routeName = Route::currentRouteName();
            $userRole = session('u_data')->role_id;

            // Note buat Backend Dev:
            // Tambahkan lebih banyak auth logic nanti dibawah sini, sesuai kebutuhan
            // Misal untuk route tertentu, hanya boleh diakses oleh user dengan role_id 2 (klo di db yang bayar) dan lainnya

            if($userRole == 3){
                return $next($request);
            }

            if($userRole == 2){
                return $next($request);
            }

            if($userRole == 1){
                return $next($request);
            }

        }else{
            return redirect()->route('logout');
        }

        // return $next($request);
        return redirect()->route('logout');
    }
}
