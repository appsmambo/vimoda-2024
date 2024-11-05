<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Emprende;
use Mail;
use App\Mail\ToEmailEmprende;

class EmprendeController extends Controller
{
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dni' => 'required|digits_between:8,11|max:11',
            'telefono' => 'required|digits_between:9,20',
            'nombres' => 'required|regex:/^[\pL\s\-]+$/u|max:50',
            'apellidos' => 'required|regex:/^[\pL\s\-]+$/u|max:50',
            'correo' => 'required|regex:/(.+)@(.+)\.(.+)/i|email|max:50',
            'direccion' => 'required|max:50',
            'departamento' => 'nullable',
            'provincia' => 'nullable',
            'distrito' => 'nullable',
        ], [
            'dni.required' => __('DNI es requerido.'),
            'dni.digits_between' => __('DNI/RUC solo debe tener números: 8 - 11 dígitos.'),
            'telefono.required' =>  __('Teléfono es requerido.'),
            'telefono.digits_between' =>  __('Teléfono solo debe tener números: 9 dígitos.'),
            'nombres.required' =>  __('Teléfono es requerido.'),
            'nombres.regex' =>  __('Nombres solo acepta letras.'),
            'apellidos.required' =>  __('Teléfono es requerido.'),
            'apellidos.regex' =>  __('Apellidos solo acepta letras.'),
            'correo.required' =>  __('Correo es requerido.'),
            'correo.regex' => __('Correo debe ser un correo válido.'),
            'direccion.required' =>  __('Dirección es requerido.'),
        ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $emprende = new Emprende();
        $emprende->dni = $validated['dni'];
        $emprende->telefono = $validated['telefono'];
        $emprende->nombres = $validated['nombres'];
        $emprende->apellidos = $validated['apellidos'];
        $emprende->correo = $validated['correo'];
        $emprende->direccion = $validated['direccion'];
        $emprende->departamento = $validated['departamento'];
        $emprende->provincia = $validated['provincia'];
        $emprende->distrito = $validated['distrito'];
        $emprende->save();

        // send email
        $to = env('MAIL_FROM_ADDRESS', 'ventasonline@vimodashoes.pe');
        Mail::to($to)->send(new ToEmailEmprende($validated));

        $msg = env('MSG_EMPRENDE_GRACIAS');
        $msg = Str::replace('%', $validated['nombres'], $msg);
        return redirect('emprende')->with('msg', $msg);
    }
}
