<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use App\Models\Paises;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamentos::all();
        return response()->json([
            'res' => true,
            'message'=> 'Ok',
            'data' => $departamentos
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_pais' => 'required|max:3',
            'name' => 'required',
        ]);

        $pais = Paises::find($request->id_pais);

        if ($pais) {
            $res = Departamentos::create($request->all());
        
            if ($res) {
                return response()->json([
                    'res' => true,
                    'message'=> 'Ok',
                    'data' => $res
                ],200);
            } else {
                return response()->json([
                    'res' => false,
                    'message'=> 'Error al guardar'
                ],400);
            }        
        }else {
            return response()->json([
                'res' => false,
                'message'=> 'El pais no existe'
            ],400);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
