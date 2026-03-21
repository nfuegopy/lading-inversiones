<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactController extends Controller
{
    public function enviar(Request $request)
    {
        $validado = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        try {
            Mail::to('admin@acbldeveloper.com')
                ->cc('acbleguizamon@gmail.com')
                ->send(new ContactoMail($validado));

            return back()->with('success', 'Mensaje enviado.');
        } catch (\Exception $e) {
            \Log::error("Error de correo: " . $e->getMessage());
            return back()->withErrors(['error' => 'Error al enviar.']);
        }
    }
}
