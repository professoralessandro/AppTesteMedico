<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medico;

class SiteController extends Controller
{
    private $medico;
    
    public function __construct(Medico $medico)
    {
        $this->medico = $medico;
    }

    public function index()
    {
        $medicos = $this->medico->all();
        
        return view('site.home.home');
        
        return view('site.home.home', compact('medicos'));
    }
    
    public function cadastrarPaciente()
    {
        return 'CADASTRAR PACIENTE';
    }
    
    public function cadastrarMedico()
    {
        return 'CADASTRAR MEDICO';
    }
    
    public function store(Request $request)
    {
        
    }
    
    public function show($id)
    {
        
    }
}//CLASS
