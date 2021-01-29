<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidacionController extends Controller
{
    public function recibir(Request $request) {
        $validate = [
            'nombre' => ['required', 'string'],
            'fechaNac' => ['required', 'date', 'before: -18 years'],
            'sexo' => ['required'],
            'correo' => ['required'],
            'password' => ['required', 'different: nombre', 'min: 8']
        ];

        $message = [
            'required' => 'Este campo es obligatorio',
            'before' => 'Debes ser mayor de edad',
            'different' => 'La contraseña no puede contener el nombre',
            'min' => 'La contraseña debe ser mayor a 8 caracteres',
        ];

        $this->validate($request, $validate, $message);
    }
}
