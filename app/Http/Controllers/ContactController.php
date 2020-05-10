<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessagesCreated;
use Illuminate\Http\Request;
use Validator;
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

    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
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

        if ($validator->fails()) {
            return redirect('/contacto')
                        ->withErrors($validator)
                        ->withInput();
        }

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
}
