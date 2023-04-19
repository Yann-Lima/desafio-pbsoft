@extends('templates.template')

@section('content')
<h1 class="text-center">Crud</h1>
<hr>
<div class="text-center mt-3 mb-4">
    <a href="">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
        {{$erro}}<br>
        @endforeach
    </div>
    @endif
    @csrf
    <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($cliente as $clientes)
            @php
            $user=$clientes->find($clientes->id)->relUsers;
            @endphp
            <tr>
                <th scope="row">{{$clientes->id}}</th>
                <td>{{$clientes->nome}}</td>
                <td>{{$clientes->data_nasc}}</td>
                <td>{{$clientes->cpf}}</td>
                <td>{{$clientes->foto}}</td>
                <td>{{$clientes->nome_social}}</td>
                <td>
                    <a href="{{url("clientes/$clientes->id")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="{{url("books/$clientes->id")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>

                    <a href="{{url("books/$books->id/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{url("books/$books->id")}}" class="js-del">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$book->links()}}
</div>
@endsection