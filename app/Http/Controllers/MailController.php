<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ToEmailContacto;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $msg = env('MSG_MAIL_GRACIAS');
        $mailData = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'mensaje' => $request->input('mensaje'),
        ];

        $to = env('MAIL_FROM_ADDRESS', 'ventasonline@vimodashoes.pe');
        Mail::to($to)->send(new ToEmailContacto($mailData));
        return view('frontend.contactos', ['msg' => $msg]);
    }
}
