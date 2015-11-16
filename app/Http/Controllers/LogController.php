<?php

namespace ConcursoMovil12\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use ConcursoMovil12\Http\Requests;
use ConcursoMovil12\Http\Requests\LoginRequest;
use ConcursoMovil12\Http\Controllers\Controller;

class LogController extends Controller
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
   public function store(LoginRequest $request)
    {
        //esta funcion va permitir logear y redirigir a lo
        //que 
        //nosotros queremos hacer
        //si no esta logeado 
        //regresa a la pagina login
        if(Auth::attempt(['name'=> $request['name'], 'password' => $request['password']]))
        {
            return Redirect::to('/animal/show');
        }
        Session::flash('message-error','Los datoa son incorrectos');
        return Redirect::to('/');
        //
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
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
