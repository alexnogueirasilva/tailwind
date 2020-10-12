<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membros = Membro::paginate(10);
        $title = ['title' => 'Membros'];
        return view('agendamento.membro.index', compact('membros'))->with($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = ['title' => 'Novo Membro'];
        return view('agendamento.membro.store')->with($title);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membro  $membro
     * @return \Illuminate\Http\Response
     */
    public function show(Membro $membro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membro  $membro
     * @return \Illuminate\Http\Response
     */
    public function edit(Membro $membro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membro  $membro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membro $membro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membro  $membro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membro $membro)
    {
        //
    }
}
