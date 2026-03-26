<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Log; // Importación correcta del Log

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
            // El correo principal al que llega el mensaje
            Mail::to('admin@paraguayinvesting.com')
                // Los correos que van en copia
                ->cc([
                    'acbleguizamon@gmail.com',
                    'comercial@paraguayinvesting.com'
                ])
                ->send(new ContactoMail($validado));

            return back()->with('success', 'Mensaje enviado exitosamente.');

        } catch (\Exception $e) {
            Log::error("Error de correo: " . $e->getMessage());
            return back()->withErrors(['error' => 'Hubo un problema al enviar el mensaje. Inténtalo más tarde.']);
        }
    }
}
