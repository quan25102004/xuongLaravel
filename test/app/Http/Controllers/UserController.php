<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {

        return view('auth.register');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => 'required|string|min:8|confirmed',
        ]);
        try {
            User::create($data);
            return redirect()->route('login')->with('success', 'Người dùng đã được tạo thành công.');
        } catch (\Throwable $th) {
        }
    }

}
