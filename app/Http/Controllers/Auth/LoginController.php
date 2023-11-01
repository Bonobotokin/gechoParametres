<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {

        if ($user->roles('designation_role')) {
            // Si l'utilisateur a le rôle "Administrator", redirigez-le vers le projet 1
            return redirect('http://parametres-gecho-app.local');
        } else {
            // Sinon, redirigez-le vers le projet 2
            return redirect('http://patient-manager');
        }
    }
}
