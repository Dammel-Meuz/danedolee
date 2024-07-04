<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
      

    protected $redirectTo = '/ouvrier/home';

    public function __construct()
    {
        $this->middleware('guest:ouvrier')->except('logout');
    }

     public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials = $request->only('email', 'password');
        $ouvrier = DB::table('ouvriers')->where('email', $credentials['email'])->first();

        $check=$request->all();
    

            if ($ouvrier) {
                return view('ouvrier.dashboard',compact('ouvrier'))->with('success', 'Connexion réussie');
            } else {
                return back()->with('error', 'Email ou mot de passe incorrect');
            }
        


    }

    public function showLoginForm()
    {
        return view('ouvrier.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('ouvrier');
    }



    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
