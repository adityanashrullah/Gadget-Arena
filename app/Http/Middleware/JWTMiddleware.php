<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exception\TokenBlacklistedException;
use Tymon\JWTAuth\Exception\TokenExpiredException;
use Tymon\JWTAuth\Exception\TokenInvalidException;
use Tymon\JWTAuth\Exception\JWTAuth;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try{
            $user = JWTAuth::parseToken()->authenticate();
        }catch(Exception $e){
            if($e instanceof TokenInvalidException){
                return response()->json(['status'=>'Token is Invalid'], 403);
            }else if($e instanceof TokenExpiredException){
                return response()->json(['status'=>'Token is Expired'], 401);
            }if($e instanceof TokenBlacklistedException){
                return response()->json(['status'=>'Token is Invalid'], 400);
            }else{
                return response()->json(['status'=>'Authorization Token not found'], 404);
            }
        }
        return $next($request);
    }
}
