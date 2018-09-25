<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $materias = Materia::all();
      return view('materias.indexMateria', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.formMateria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
				Materia::create($request->all());
			
// 			$materia = new Materia();
			
// 			$materia->materia = $request->input('materia');
// 			$materia->crn = $request->input('crn');
// 			$materia->seccion = $request->input('seccion');
// 			$materia->horario = $request->input('horario');
			
// 			//insertar a base de datos
// 			$materia->save();
			
				//redireccionar
				return redirect()->route('materias.index');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nombre = 'Programación para Internet';
  			return view('materias.showMateria', compact('id','nombre'));
    		//->with(['id' => $id, 'nombre' => $nombre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('materias.formEditMateria');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
