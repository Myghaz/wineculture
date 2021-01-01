<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagens;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function frontend_store(Request $request)
    {

        Mensagens::create([
            'id_envio' =>  Auth::user()->id,
            'id_destino' => $request->id_destino,
            'mensagem' => $request->mensagem,
        ]);

        return redirect()->route('admin_dashboard');
    }
}
