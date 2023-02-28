<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use MongoDB\Driver\Session;

class indexcontroller extends Controller
{

    public function index()
    {
        return view('listings.index', ['to_dos' => ToDo::all()]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $formFields = $request->validate([
            'email' => 'required',
            'opdracht' => 'required',
            'opdracht_omschrijving' => 'required'
        ]);

        ToDo::create($formFields);
        return redirect('/')->with('message', 'Opdracht aangemaakt!');
    }

    public function edit(ToDo $todo) {
//        dd($todo);
        return view('listings.edit', ['todo' => $todo]);
    }

    public function update(Request $request, ToDo $todo)
    {
//        dd($request->all());
        $formFields = $request->validate([
            'email' => 'required',
            'opdracht' => 'required',
            'opdracht_omschrijving' => 'required'
        ]);

        $todo->update($formFields);
        return redirect('/')->with('message', 'Opdracht aangepast!');
    }

//    public function verwijderPagina(Todo $todo) {
//        return view('listings.delete');
//    }

    public function destroy(ToDo $todo) {
        $todo->delete();
        return redirect('/')->with('message', 'Opdracht verwijderd!');
    }

    public function show(string $id) {
        return view('listings.tussenpagina', [
            'todo' => ToDo::find($id)
        ]);
}
}
