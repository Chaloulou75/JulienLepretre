<?php

namespace App\Http\Controllers;

use App\Programme;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
        $programme= new Programme();

        $request->validate([
                'title' => 'required|min:3',
                'descriptionGlobale' => 'required|min:10',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',                
                'prix6sesionesPesos' => 'numeric',
                'prix12sesionesPesos' => 'numeric',
                'prix6sesionesEuros' => 'numeric',
                'prix12sesionesEuros' => 'numeric',
            ]);

        if($request->hasfile('image'))
        {
            $filename1 = $request->image->getClientOriginalName();
            $request->image->storeAs('img/programas/', $filename1, 'public');
        }

        if($request->hasfile('image2'))
        {
            $filename2 = $request->image2->getClientOriginalName();
            $request->image2->storeAs('img/programas/', $filename2, 'public');
        }

        $data = array(
            'title'=> $request->title,
            'descriptionGlobale' => $request->descriptionGlobale,
            'image' => $filename1, 
            'image2' => $filename2,               
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
        $programme = Programme::with('descriptions')->where('slug' , $slug)->firstOrFail(); 

        return view('/pages/programas/show', $programme, compact('programme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $programme = Programme::with('descriptions')->where('slug' , $slug)->firstOrFail();

        return view('/pages/programas/edit', $programme, compact('programme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

        $programme = Programme::where('slug', $slug)->firstOrFail();

        $request->validate([
                'title' => 'required|min:3',
                'descriptionGlobale' => 'min:10',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'image2' => 'image|mimes:jpeg,png,jpg,gif,svg',                
                'prix6sesionesPesos' => 'numeric',
                'prix12sesionesPesos' => 'numeric',
                'prix6sesionesEuros' => 'numeric',
                'prix12sesionesEuros' => 'numeric',
            ]);


        if($request->hasfile('image'))
        {
            $filename1 = $request->image->getClientOriginalName();
            if($programme->image){
                Storage::delete('/public/img/programas'.$programme->image);
            }
            $request->image->storeAs('img/programas/', $filename1, 'public');
        }

        if($request->hasfile('image2'))
        {
            $filename2 = $request->image2->getClientOriginalName();
            if($programme->image2){
                Storage::delete('/public/img/programas'.$programme->image2);
            }
            $request->image2->storeAs('img/programas/', $filename2, 'public');
        }        

        $programme->update([
            'title' =>  $request->title,
            'descriptionGlobale' => $request->descriptionGlobale,
            'image' => $filename1,
            'image2' => $filename2,
            'prix6sesionesPesos' => $request->prix6sesionesPesos,
            'prix12sesionesPesos' => $request->prix12sesionesPesos,
            'prix6sesionesEuros' => $request->prix6sesionesEuros,
            'prix12sesionesEuros' => $request->prix12sesionesEuros
        ]);

        return redirect()->action('ProgrammeController@index')->with('message.level', 'success')->with('message.content', __('El programa esta actualizado.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $programme = Programme::with('descriptions')->where('slug' , $slug)->firstOrFail();

        $programme->delete();

        return redirect()->action('ProgrammeController@create')->with('message.level', 'success')->with('message.content', __('El programa esta suprimido.'));
    }
}
