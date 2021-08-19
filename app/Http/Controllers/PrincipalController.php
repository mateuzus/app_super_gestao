<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    public function principal()
    {
        $reason_contacts = [
        '1' => 'Dúvida',
        '2' => 'Elogio',
        '3' => 'Reclamação'
        ];

        return view('site.principal',['title' => 'Home', 'reason_contacts => $reason_contacts']);
    }
}
