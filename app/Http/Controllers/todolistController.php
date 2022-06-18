<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;

class todolistController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        todolist::create([
            'Nome'=> $request->Nome,
            'Descricao'=> $request->Descricao,
        ]);
        return "Tarefa cadastrada com sucesso!";    
    }

    public function show($id)
    {
        $todolist = todolist::findOrFail($id);
        return view('show', ['todolist' => $todolist]);
    }

    public function edit($id)
    {
        $todolist = todolist::findOrFail($id);
        return view('edit', ['todolist' => $todolist]);
    }

    public function update(Request $request, $id)
    {
        $todolist = todolist::findOrFail($id);

        $todolist->update([
            'Nome'=>$request->Nome,
            'Descricao'=>$request->Descricao,
        ]);
        return 'Tarefa atualizada com sucesso!';
    }

    public function delete($id)
    {
        $todolist = todolist::findOrFail($id);
        return view('delete', ['todolist' =>$todolist]);
    }

    public function destroy($id)
    {
        $todolist = todolist::findOrFail($id);
        $todolist->delete();

        return "Tarefa excluida com sucesso!";
    }
}
