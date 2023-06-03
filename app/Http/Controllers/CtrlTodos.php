<?php

namespace App\Http\Controllers;

use App\Models\todos;
use Illuminate\Http\Request;

class CtrlTodos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = todos::all();
        foreach ($todos as $val) {
            echo <<<END
                id => $val->id
                title => $val->title
                description => $val->description
                created_at => $val->created_at
                updated_at => $val->updated_at
                <br>
            END;
        }
        return view('todos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
        ]);
        // dd($data);
        todos::create($data);
        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $todos = todos::find($id);
        echo <<<END
            id => $todos->id <br>
            title => $todos->title <br>
            description => $todos->description <br>
            created_at => $todos->created_at <br>
            updated_at => $todos->updated_at
        END;
        return view('todos.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todos $todos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todos $todos)
    {
        //
    }
}
