<?php
#Controller untuk fungsi login

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    #Method untuk melakukan login oleh admin, sekaligus menampilkan seluruh data pemain dan club pada menu utama admin
    public function postlogin (Request $request){
        $admin = DB::table('admins')->where('username', $request->username)->first();
        if ($admin){
            if (Hash::check($request->password, $admin->password)){
                $pemain = DB::table('pemain')->join('club', 'pemain.id_club', '=', 'club.id_club')->get();
                $club = DB::table('club')->get(); 
                return view('pages.admin-page', ['pemain' => $pemain], ['club' => $club]);
            }
            return redirect('/login-page');
        }
        return redirect('/login-page');
    }
}
