<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
        0 => [
            'nome'=>'Fornecedor ',
            'status'=>'N',
            'cnpj'=>'',
            'ddd'=>'11',
            'telefone'=>'98756-1209'
        ],
            1 => [
                'nome'=>'Fornecedor 2',
                'status'=>'S',
                'cnpj'=>'',
                'ddd'=>'85',
                'telefone'=>'99162-0147'
            ],
            2 => [
                'nome'=>'Fornecedor 3',
                'status'=>'S',
                'cnpj'=>'',
                'ddd'=>'32',
                'telefone'=>'99258-4590'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
