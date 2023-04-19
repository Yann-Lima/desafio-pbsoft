@extends('templates.template')

@section('content')
<h1 class="text-center">@if(isset($cliente)) Editar @else Cadastrar @endif</h1>
<hr>

<div class="col-8 m-auto">


    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
        {{$erro}}<br>
        @endforeach
    </div>
    @endif


    @if(isset($cliente))
    <form name="formEdit" id="formEdit" method="post" action="{{url("books/$cliente->id")}}">
        @method('PUT')
        @else
        
        <form name="formCad" id="formCad" method="post" action="{{url('clientes')}}">
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" required><br>
            <input class="form-control" type="date" name="data" id="data" placeholder="Data de Nascimento:" required><br>
            <input class="form-control" type="number" name="cpf" id="cpf" placeholder="CPF:" required><br>
            <input class="form-control" type="image" name="imagem" id="imagem" placeholder="Imagem:" required><br>
            <input class="form-control" type="text" name="nome_social" id="nome_social" placeholder="Nome social:" required><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
</div>
@endsection