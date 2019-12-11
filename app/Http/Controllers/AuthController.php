<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\User;


class AuthController extends Controller
{
    public function showLogin()
    {

        return view('auth.login');
    }

    public function showRegister()
    {

        return view('auth.register');
    }

    public function register(Request $request) {
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'confirm-password' => 'required|min:8|same:password',
        ];

        $messages = [
            'name.required' => 'Su nombre es requerido.',
            'lastname.required' => 'Su apellido es requerido.',
            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de correo electrónico es invalido',
            'email.unique' => 'Ua existe un usuario registrado con este correo electrónico',
            'password' => 'Por favor escriba una contraseña',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'confirm-password.required' => 'Es necesario confirmar la contraseña.',
            'confirm-password.min' => 'La confirmación de la contraseña debe tener al menos 8 caracteres.',
            'confirm-password.same' => 'Las contraseñas no coinciden',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se producido un error.')->with('typealert', 'danger');
        endif;

        $user = new User();
        $user->name = e($request->input('name'));
        $user->lastname = e($request->input('lastname'));
        $user->email = e($request->input('email'));
        $user->password = Hash::make($request->input('password'));

        if ($user->save()):
            return redirect('/login')->with('message', 'Su usuario se creo con éxito, puedes iniciar sesión.')->with('typealert', 'success');
        endif;
    }
}
