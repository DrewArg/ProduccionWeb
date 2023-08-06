<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Validate the user's credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function validateCredentials($request, $credentials)
    {
        $plainPassword = $credentials['password'];

        // Deshasheamos la contraseña almacenada en la base de datos usando Auth::getProvider()->getHasher()
        $hashedPassword = Auth::getProvider()->getHasher()->getHash();

        return [
            'email' => $credentials['email'],
            'password' => $plainPassword,
        ];
    }
}
