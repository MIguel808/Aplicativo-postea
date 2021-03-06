<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    public function __contstruc()
    {
        $this->middleware('auth');
    }

    public function enviar(Request $request, $numero)
    {
        $user = $request->user();
        $correo = new  MailBienvenida($user, $numero);
        
        Mail::to($user)->send($correo);

        return "Revise su cuenta";
    }
}