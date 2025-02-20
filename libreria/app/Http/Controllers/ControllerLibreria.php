<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Libro;

class ControllerLibreria extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }
    
    public function index()
    {
        $libros = Libro::get();
        return view('libro.index', compact('libros'));
    }

    public function create()
    {
        return view('Libro.create');
    }
    
    public function store(Request $request)
    {
        Libro::create($request->all());
        return redirect()->route('libro.index')->with('success', 'Libro creado con exito');
    }
    
    public function show(string $id)
    {

    }
    
    public function destroy(string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libro.index')->with('success', 'Libro eliminada con exito');
    }
}
