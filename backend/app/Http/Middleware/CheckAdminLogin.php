<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         //Kiểm tra trạng thái đăng nhập của admin
         $admin_login=session()->get('admin_login');
         if(empty($admin_login)){
             return redirect()-> route('login.hien-thi-form');
         }

         //Thực hiện tiếp tục request
        return $next($request);
    }
}
