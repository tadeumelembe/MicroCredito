<?php

namespace App\Http\Controllers;

use App\Models\Parente;
use Illuminate\Http\Request;

class ParenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $messages = [
            'same' => 'O :attribute e :other devem ser iguais.',
            'size' => 'O :attribute deve ser exactamente :size.',
            'between' => 'O :attribute valor de :input não esta entre :min - :max.',
            'in' => 'O :attribute deve ser um dos seguintes tipos: :values',
            'required' => 'O campo :attribute é obrigatório.',
            'not_in' => 'Selecione :attribute ',
        ];

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'phoneNumber' => 'required',
            'docNumber' => 'required',
            'nuit' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'grauParentesco'  =>  'required',
            'bairro' => 'required',
            'rua' => 'required',
            'casa' => 'required',
            'phoneNumber' => 'required',
            'estado' => 'required',
        ], $messages);


        Parente::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'phoneNumber' => $request->phoneNumber,
            'docType' => 'BI',
            'docNumber' => $request->docNumber,
            'grauParentesco'=>$request->grauParentesco,
            'estado'=>$request->estado,
            'nuit' => $request->nuit,
            'dataNascimento' => $request->birthdate,
            'gender' => $request->gender,
            'email' => $request->email,
            'custumer_id' => $request->custumer_id,
        ]);


        return redirect()->route('customers', ['id' => $request->custumer_id])
            ->with('success', 'Parente cadastrado com sucesso!!');
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
