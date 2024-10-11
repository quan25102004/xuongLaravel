<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,...$roles): Response
    {
        if(!Auth::check()){
            return redirect('login');
        }

        $userRole = Auth::user()->quyen;
           // Kiểm tra quyền truy cập
        $access = [
        //các trường trong []
        // *thứ tự 1 là trang có thể truy cập
        // * nếu bỏ trống các vị trí còn lại sau vị trí 1 thì sẽ có thể truy cập được tất cả các trang
        // * nếu điền khách vị trí còn lại sai vị trí 1 thì là không được phép vào
        
        'admin' => ['admin'], //['admin (t1: có thể vào admin)',null(có thể vào khách trang còn lại khách),...]
        'nhanvien' => ['nhanvien', 'admin'], //['admin (t1: có thể vào nhanvien)','admin (t2: không thể vào admin)',...]
        'khachhang' => ['khachhang','nhanvien', 'admin'], // Khách hàng chỉ có quyền vào khách hàng
    ];
        if(!in_array($userRole,$access[$roles[0]])){
            return redirect('/')->withErrors(['error'=> 'ban khong co quyen']);
        }
        return $next($request);
    }
}
