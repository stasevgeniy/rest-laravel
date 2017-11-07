<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    /*
    * Check Params, Valid Params, etc.
    * Create account or return error
    * Return StatusCode and any params
    * */
    public function CreateAccount(Request $request){

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        /*
        *
        * User::create([
           'name' => $name,
           'email' => $email,
           'password' => bcrypt($password),
           ]);
        *
        * */

        /*
         * If error
         * */

        return response()
            ->json(['Text' => 'Error, any parametr not valid'])
            ->setStatusCode(406);

        /*
        * If success
        * */

        return response()
            ->json(['Text' => 'Account create'])
            ->setStatusCode(200);
    }

    /*
    *
    * Delete account from database, etc.
    *
    * */
    public function DeleteAccount(Request $request){

        /*
        * Success
        * */

        return response()
            ->json(['Text' => 'Account success delete'])
            ->setStatusCode(200);
    }

    /*
    *
    * Login user
    * Can use Default AuthController
    *
    * */
    public function Login(Request $request){

        /*
         *
         * if (Auth::attempt() {
                // Authentication passed...
            }
         *
         * */

        return response()
            ->json(['Text' => 'Ok'])
            ->setStatusCode(200);
    }
}