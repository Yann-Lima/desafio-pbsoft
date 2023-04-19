<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Http\Requests\ClienteRequest;
use App\Http\Controllers\User;

class BookController extends Controller
{
    private $objUser;
    private $objCliente;

    public function __construct()
    {
        $this->objCliente = new ModelBook();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = $this->objCliente->paginate(5);
        return view('index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = $this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($request)
    {
        $cad = $this->objCliente->create([
            'nome' => $request->nome,
            'data_nasc' => $request->data_nasc,
            'cpf' => $request->cpf,
            'foto' => $request->foto,
            'nome_social' => $request->nome_social,
        ]);
        if ($cad) {
            return redirect('clientes');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = $this->objCliente->find($id);
        return view('show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = $this->objCliente->find($id);
        $users = $this->objUser->all();
        return view('create', compact('clientes', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($request, $id)
    {
        $this->objCliente->where(['id' => $id])->update([
            'nome' => $request->nome,
            'data_nasc' => $request->data_nasc,
            'cpf' => $request->cpf,
            'foto' => $request->foto,
            'nome_social' => $request->nome_social,
        ]);
        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del = $this->objCliente->destroy($id);
        return ($del) ? "sim" : "não";
    }
}
