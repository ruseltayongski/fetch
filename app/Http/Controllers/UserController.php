<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
   

   public function login() {
        return view('users.login');
   }

   public function logout(Request $request) {
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

        if($request) {

            Alert::success('Success', 'You\'ve successfully logout!');
            return redirect('/');
        }

   }

   public function register() {
    return view('users.register');
   }

   public function store(Request $request) {
        $request->merge([
            'birthdate' => date("Y-m-d",strtotime($request->birthdate))
        ]);
        
        $formFields = $request->validate([
            /* 'usertype' => 'required', */
            'firstname' => ['required', 'min:3'],
            'lastname' => 'required',
            'birthdate' => 'required|date',
            'address' => 'required',
            'phone_number' => 'required',
         /*    'profile_picture' => 'required', */
            'email' => ['required', 'email', Rule::unique('users'), 'email'],
            'password' => 'required|confirmed|'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        if ($request->hasFile('profile_picture')) {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('profile', 'public');
        }

        $user = User::create($formFields);

       /*  $existing_user = $user::where('google_id', $google_user->getId())->first(); */

        try {

            if($user) {
                Alert::success('Success', 'You\'ve successfully registered!');
                return redirect('/');

                auth()->login($user);

            }
            else {
                $google_user = Socialite::driver('google')->user();

                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                auth()->login($new_user);

                return redirect('/');
            }

            
        } catch (\Throwable $th) {
            dd('Something went Wrong!', $th->getMessage()); 
        }

        /* if ($user) {
            Alert::success('Success', 'You\'ve successfully registered!');
            return redirect('/');
        }

        else {
            Alert::error('Failed', 'Registration Failed');
            return back();
        } */
        
        
   }

   public function redirect() {
        return Socialite::driver('google')->redirect();
   }


   public function authenticate(Request $request) {
   
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(Auth::attempt($formFields)) {
            $request->session()->regenerate();
            
            Alert::success('Success', 'You\'ve successfully login!');
            $user = auth()->user();

            if($user->usertype == 1) { //if 1 siya largo siya admin
                return redirect('/admin'); //redirect to admin home page
            } else {
                return redirect('/'); //redirect to user home page
            }
        } 

        else {
            Alert::error('Error', 'Invalid Credentials');
            return back();
        }
   }


   public function edit(User $user) {
        //dd($user);
        return view('users.edit', ['user' => $user]);
   }


   public function update(Request $request, User $user) {
        $formFields = $request->validate([
            'firstname' => ['required', 'min:3'],
            'lastname' => 'required',
            'birthdate' => 'required|date',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user->update($formFields);

        if ($user) {
            Alert::success('Success', 'Successfully Updated!');
            return redirect ('/');
        }
        else {
            Alert::error('Error', 'Failed Updating');
            return back();
      }
   }
}
