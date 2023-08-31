<?php

namespace App\Http\Controllers;

use App\Models\formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function nuevo(Request $post){
        $message = new formulario();

        $message->nombre = $post->nombre;
        $message->email = $post->email;
        $message->asunto = $post->asunto;
        $message->mensaje = $post->mensaje;

        $message->save();

        return "Creado correctamente";
    }
}
