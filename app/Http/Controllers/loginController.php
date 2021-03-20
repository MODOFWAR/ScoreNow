<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function postlogin (Request $request){
        $admin = DB::table('Admin')->where('username', $request->username)->where('password', $request->password)->first();
        if ($admin){
            return redirect('/home-page')->with('status','Hello');
        }
        return redirect('/login-page')->with('staus','your credentials are wrong');
    }
}
