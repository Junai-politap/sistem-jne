<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess()
    {
        $userid = request('userid');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if ($strlen == 20) {
                $field = 'nup';
            
            } else {
                $field = 'username';
            }
        }
        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];
        
        
        if (auth()->attempt($credential)) {
                $user = auth()->user();
                return $this->manageRedirect($user);
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        
    }

    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }

    
    public function manageRedirect($user)
    {
        $list_role = $user->role;
        $firstRole = $list_role->first();
        $url = $firstRole->module->url;
        return redirect($url);
    }
    

   
    
}
