<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthRequest;
use illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view("auth.login");
    }
    public function authenticate(StoreAuthRequest $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (auth()->user()->level == 'petugas') {
                return redirect()->route('pembayaran.index');
            } else {
                return redirect()->route('spp.index');
            }
        }

        return back()->withErrors([
            'notif' => 'Kredensial Tidak Valid',
        ])->withInput($request->only('username'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login')->withSuccess('Anda Telah Keluar Dari Sistem');
    }
}
