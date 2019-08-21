<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'mensaje' => 'Soy la calculadora',
            'parametros' => [
                'funcion' => 'sumar|restar|dividir|multiplicar',
                'valor1'  => 'El valor uno',
                'valor2'  => 'El valor dos',
            ]
        ];
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


        $funcion = $request->input('funcion');
        $valor1  = $request->input('valor1');
        $valor2  = $request->input('valor2');

        $resultado = 0;
        switch($funcion) {
            case 'sumar':
                $resultado = $valor1 + $valor2;
                break;
            case 'dividir':
                if ($valor2 <= 0) {
                    return [
                        'valor2' => 'No se aceptan valores igual o inferior a 0'
                    ];
                }
                $resultado = $valor1 / $valor2;

                break;
        }

        return [
            'resultado' => $resultado,
        ];
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
