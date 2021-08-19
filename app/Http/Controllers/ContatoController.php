<?php

namespace App\Http\Controllers;

use App\Model\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $reason_contacts = [
           '1' => 'Dúvida',
           '2' => 'Elogio',
           '3' => 'Reclamação'
        ];

        return view('site.contato', ['title'=>'Contato', 'reason_contacts' => $reason_contacts]);
    }

    public function salvar(Request $request)
    {
        //validação dos campos no formulário
        $request->validate([
            'name' => 'required|min:3|max:40',
            'phone' => 'required',
            'email' => 'required',
            'reason_contact' => 'required',
            'message' => 'required'
        ]);
    }
}
