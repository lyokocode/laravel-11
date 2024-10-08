<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
     // Register User
    public function register(Request $request) {
   
        //Validate
        $fields = $request -> validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email','unique:users'],
            'password' => ['required', 'min:5', 'confirmed'],
         ], [
            'username.required' => 'Kullanıcı adı zorunludur!',
            'email.required' => 'E-posta adresi zorunludur!',
            'email.email' => 'Geçerli bir e-posta adresi giriniz!',
            'email.unique' => 'Bu e-posta adresi zaten kullanılıyor!',
            'password.required' => 'Şifre zorunludur.',
            'password.min' => 'Şifre en az 5 karakter olmalıdır.',
            'password.confirmed' => 'Şifreler eşleşmiyor.',
        ]);
    
        //Register
        $user = User::create($fields);

        //Login
        Auth::login($user);

     //Re-direct
        return redirect()->route('home');
    }

    // Login User
    public function login (Request $request){
         //Validate for login
        $fields = $request -> validate([
          'email' => ['required', 'max:255', 'email'],
          'password' => ['required'],
           ], [
            'email.required' => 'E-posta adresi zorunludur!',
            'email.email' => 'Geçerli bir e-posta adresi giriniz!',
            'password.required' => 'Şifre zorunludur.',
            'password.min' => 'Şifre en az 5 karakter olmalıdır.',
    ]);
       
    // try to login user
      if(Auth::attempt($fields, $request->remember)){
          return redirect()->intended();
       }else{
           return back()->withErrors([
              'failed'=> 'Kullanıcı adı ya da şifre yanlış, Lütfen yeniden deneyin.'
          ]);
     }

    }

    // Logout User
    public function logout(Request $request) {
        
        // logout the user
        Auth::logout();
        
        // Invalidate User's session
        $request -> session() -> invalidate();

        // Regenerate CSRF token
        $request -> session() -> regenerateToken();

        // Redirect to home
        return redirect()->route('login');
    }

}
