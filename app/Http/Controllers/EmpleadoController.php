<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use App\Models\tareas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        $tarea =tareas::where('pago',1)->get();
        return view('index',compact('tarea'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new empleado();
        $producto->nombre = $request->nombre;
        $producto->fecha_con = $request->fecha_con;
        $producto->salario = $request->salario;
        $producto->horas_tr = $request->horas_tr;
        $producto->dapartamento = $request->departamento;
        $producto->pago=false;
        $producto->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(empleado $empleado)
    {
        //
    }
}
