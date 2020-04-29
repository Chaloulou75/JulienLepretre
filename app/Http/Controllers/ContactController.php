<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessagesCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.contact');
    }

    public function store(Request $request)
    {
        

        $request->validate([
            'apellidos'=> 'required|min:3',
            'nombre'=> 'required|min:3',
            'email' =>'required|email',
            'birthdate'=> 'required|date',           
            'altura' => 'required|numeric',
            'peso'=>'required|numeric',
            'forma'=> 'required|numeric',
            'phone' =>'required',
            'trabajo' =>'required|min:3',
            'deportes'=>'required|min:3',
        ]);

        $mailable = new ContactMessagesCreated(
            $request->apellidos,
            $request->nombre,   
            $request->email,
            $request->birthdate, 
            $request->msg, 
            $request->problema,
            $request->alivia,
            $request->antecedentes,
            $request->objetivos,             
            $request->altura, 
            $request->peso, 
            $request->forma, 
            $request->phone,
            $request->trabajo, 
            $request->deportes,
        );  

        Mail::to('julienlepretreosteo@gmail.com')->send($mailable);

        return back()->with('message.level', 'success')->with('message.content', __('Su mensaje ha sido enviado correctamente.'));
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
