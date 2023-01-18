<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    public function handle(Request $request, Closure $next) {
        try {
            // $user = JWTAuth::parseToken()->authenticate();
            $user = 'Bearer '. request()->cookie('bearer_token');
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json(['status'=>'Kode Token Salah']);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json(['status'=>'Kode Token Kadaluarsa']);
            } else {
                return response()->json(['status'=>'Kode Token Otorisasi Tidak Ditemukan']);
            }
        }return $next ($request);
    }
}
