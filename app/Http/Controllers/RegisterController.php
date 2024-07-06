<?php

namespace App\Http\Controllers;


use Auth;
use App\Models\Ouvrier;
use App\Models\profile;
use Illuminate\Http\Request;
use App\Models\Ouvrierprofile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;



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

        $request->validate([
            'ouvrier_id' => 'required|exists:ouvriers,id',
            'jod_id' => 'required|exists:jods,id',
            'addres' => 'nullable|string',
            'region' => 'nullable|string',
            'experience' => 'nullable|string',
            'phone' => 'nullable|string'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);


        $profile=new profile([
            'ouvrier_id' => $request->ouvrier_id,
            'jod_id' => $request->jod_id,
            'addres' => $request->addres,
            'region' => $request->region,
            'experience' => $request->experience,
            'phone' => $request->phone,
            'image' => $imageName
        ]);

           $profile->save();
        }
        // return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
        return redirect()->back()->with('success', 'Profile created successfully.');
    }
}
