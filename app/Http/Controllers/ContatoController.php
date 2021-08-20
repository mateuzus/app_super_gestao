<?php

namespace App\Http\Controllers;

use App\Model\MotivoContato;
use App\Model\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['title'=>'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //validação dos campos no formulário
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ],
        [
            'nome.required' => 'O campo nome precisa ser preenchido.',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome pode ter no máximo 40 caracteres.',
            'telefone.required' => 'O campo telefone precisa ser preenchido.',
            'email.email' => 'O campo e-mail precisa ser preenchido.',
            'motivo_contatos_id.required' => 'O campo motivo contato precisa ser selecionado.',
            'mensagem.required' => 'O campo mensagem precisa ser preenchido.'

            /*
             * ['required' => 'O campo :attribute precisa ser preenchido.];
             */
        ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
