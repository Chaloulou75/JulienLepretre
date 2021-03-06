<?php

namespace App\Http\Controllers;

use App\Description;
use App\Programme;
use Illuminate\Http\Request;
use Validator;


class DescriptionController extends Controller
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
    public function store(Request $request, $slug)
    {
        $programme = Programme::where('slug' , $slug)->firstOrFail();

        $validator = Validator::make($request->all(),[                
            'phrase' => 'required|min:5',
        ]);
        
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $description = Description::create([
            'programme_id' => $programme->id,
            'phrase' => $request->phrase,         
        ]);

        return redirect()->back()->with('message.level', 'success')->with('message.content', __('description insérée pour le programme.'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function show(Description $description)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function edit(Description $description)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug, Description $description)
    {

        $programme = Programme::with('descriptions')->where('slug' , $slug)->firstOrFail();

        $request->validate([                
            'phrase' => 'required|min:5',
        ]);

        $description = Description::find($description->id);
        $description->programme_id = $programme->id;
        $description->phrase = $request->phrase;
        $description->save();

        return redirect()->back()->with('message.level', 'success')->with('message.content', __('description actualisée pour le programme.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, Description $description)
    {
        $description = Description::find($description->id);
        $description->delete();

        return redirect()->back()->with('message.level', 'success')->with('message.content', __('La phrase de description a bien été supprimée pour ce programme.'));
    }
}
