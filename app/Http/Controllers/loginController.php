<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function postlogin (Request $request){
        // $admin = DB::table('Admin')->where('username', $request->username)->where('password', $request->password)->first();
        // if ($admin){
        //     return redirect('/admin-page')->with('status','Hello');
        // }
        // return redirect('/login-page')->with('staus','your credentials are wrong');

        $admin = DB::table('admins')->where('username', $request->username)->first();
        if ($admin){
            if (Hash::check($request->password, $admin->password)){
                return redirect('/admin-page');
            }
            return redirect('/login-page');
        }
        return redirect('/login-page');
    }
}
