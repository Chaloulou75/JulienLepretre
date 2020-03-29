<?php

namespace App\Http\Controllers;

use App\Programme;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Image;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes = Programme::latest()->get();

        return view('/pages/programas/index', compact('programmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$admin = User::where('admin', true)->get();
        return view('/pages/programas/create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
                'title' => 'required|min:3',
                'descriptionGlobale' => 'required|min:10',
                'prog_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',                
                'prix6sesionesPesos' => 'numeric',
                'prix12sesionesPesos' => 'numeric',
                'prix6sesionesEuros' => 'numeric',
                'prix12sesionesEuros' => 'numeric',
            ]);

        $originalImage= $request->file('prog_image');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/img/programas/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

        $programme= new Programme();
        $programme->prog_image=time().$originalImage->getClientOriginalName();
        

        $data = array(
            'title'=> $request->title,
            'descriptionGlobale' => $request->descriptionGlobale,
            'prog_image' => $programme->prog_image,                
            'prix6sesionesPesos' => $request->prix6sesionesPesos,
            'prix12sesionesPesos' => $request->prix12sesionesPesos,
            'prix6sesionesEuros' => $request->prix6sesionesEuros,
            'prix12sesionesEuros' => $request->prix12sesionesEuros,
        );
        
        Programme::create($data);

        return redirect()->back()->with('message.level', 'success')->with('message.content', __('El programa esta en la database.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {    
        $programme = Programme::where('slug' , $slug)->firstOrFail();
        //dd($programme);

        return view('/pages/programas/show', $programme, compact('programme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit(Programme $programme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programme $programme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        //
    }
}
