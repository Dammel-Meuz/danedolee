<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Ouvrier;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Auth;



class RegisterController extends Controller
{
   
    protected $redirectTo = '/ouvrier/home';

    public function __construct()
    {
        $this->middleware('guest:ouvrier');
    }

    public function showRegistrationForm()
    {
        return view('ouvrier.auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:ouvriers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        
        return Ouvrier::create([
            'firstName' => $data['firstName'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
    
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        return view('ouvrier.auth.login');

    }

    public function profile(Request $request){
        dd($request);
    }
}
  