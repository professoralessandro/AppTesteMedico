@extends('site.templates.template')

@section('content')

<h1>Home page do site</h1>
    
    @foreach($medicos as $medico)
    <tr>
        <td>{{$medico->nome = new type(arguments);}}</td>
        <td>{{$medico->telefone = new type(arguments);}}</td>
        <td>{{$medico->imagem = new type(arguments);}}</td>
    </tr>
    @endforeach

@endsection