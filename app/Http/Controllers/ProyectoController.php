<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use PDF;

class ProyectoController extends Controller
{
    public function index()
    {

        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NombreInstitucion' => 'nullable|string|max:255',
            'NombreProyecto' => 'required|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'MontoPlanificado' => 'required|numeric|min:0',
            'MontoPatrocinado' => 'required|numeric|min:0',
            'MontoFondosPropios' => 'required|numeric|min:0',
        ]);

        Proyecto::create($request->all());

        return redirect()->route('proyectos.index')->with('success', 'Proyecto agregado correctamente.');
    }

    public function show($id)
    {
        return "Mostrando el proyecto con ID: $id";
    }

    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('proyectos.edit', compact('proyecto'));    
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'NombreProyecto' => 'required|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'MontoPlanificado' => 'required|numeric|min:0',
            'MontoPatrocinado' => 'required|numeric|min:0',
            'MontoFondosPropios' => 'required|numeric|min:0',
        ]);
    
        $proyecto->update($request->all());
    
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete(); 

        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }

    public function generarPDF()
    {
        $proyectos = Proyecto::all();
        $fecha = now()->format('d/m/Y');

        $pdf = PDF::loadView('proyectos.pdf', compact('proyectos', 'fecha'));
        return $pdf->download('informe_proyectos.pdf');
    }
}
