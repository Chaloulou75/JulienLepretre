<?php

namespace App\Http\Controllers;

use App\Testimonios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class TestimoniosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonios = Testimonios::latest()->simplePaginate(6);
        return view('/pages/testimonios/index', compact('testimonios'));//
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
        //dd($request);
        $testimonio= new Testimonios();

        $request->validate([
                'name' => 'required|min:3',
                'testimonio' => 'required|min:5',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

        if($request->hasfile('avatar'))
        {
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('img/avatars/', $filename, 'public');
        }

        $data = array(
            'name'=> $request->name,
            'testimonio' => $request->testimonio,
            'avatar' => $filename,             
        );
        
        Testimonios::create($data);

        return redirect()->back()->with('message.level', 'success')->with('message.content', __('Gracias por tu testimonio.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimonios  $testimonios
     * @return \Illuminate\Http\Response
     */
    public function show(testimonios $testimonios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimonios  $testimonios
     * @return \Illuminate\Http\Response
     */
    public function edit(testimonios $testimonios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimonios  $testimonios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimonios $testimonios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimonios  $testimonios
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimonios $testimonios)
    {
        //
    }
}
