<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Log;
use Illuminate\Config\Repository as Config;
use Session;
use App\AuthenticateUser;
use App\AuthenticateUserListener;

 class AuthController extends Controller implements AuthenticateUserListener
 {

      public function login(AuthenticateUser $authenticateUser, Request $request)
      {
        return $authenticateUser->execute($request->has('code'), $this);
      }

      public function userHasLoggedIn($user)
      {
        return redirect('');
      }
 }