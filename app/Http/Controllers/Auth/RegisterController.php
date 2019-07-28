<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\User;
use App\PersonenRolle;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
        ]);
    }

    /**
     * PS  -  28.07.2019
     * @version 1.0
     * Erzeugt nach einer erfolgreichen Validierung einen neuen User inkl. der Berechtigungen
     * 
     * Ueberlegung: die Erzeugung des Personen Rolle Datensatzes in eine eigene Funktion auslagern
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {

        $user = User::create([
            'name' => $data['name'],
            'nachname' => $data['nachname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->save();

        $userId = $user->id;

        $contains_privat = Arr::has($data, 'privatperson');

        if ($contains_privat == false) {
            $isprivat = 0;
            $isgesch = 1;
        } else {
            $isprivat = 1;
            $isgesch = 0;
        }

        if($isgesch == 1) {
            $uid = $data["uid"];
        } else {
            $uid = 0;
        }

        $personenrolle = PersonenRolle::create([
            'u_id' => $userId,
            'privatperson' => $isprivat,
            'geschaeftsperson' => $isgesch,
            'uid' => $uid,
            'admin' => 0
        ]);

        $personenrolle->save();

        return $user;
    }
}