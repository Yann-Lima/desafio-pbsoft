@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
            $user=$cliente->find($cliente->id)->relUsers;
        @endphp
        Nome: {{$clientes->nome}}<br>
        Data de Nascimento: {{$clientes->data_nasc}}<br>
        CPF: R$ {{$clientes->cpf}}<br>
        Imagem: {{$clientes->foto}} <br>
        Nome Social: {{$clientes->nome_social}} <br>
    </div>
@endsection