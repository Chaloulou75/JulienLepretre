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
        $programme= new Programme();

        $request->validate([
                'title' => 'required|min:3',
                'descriptionGlobale' => 'required|min:10',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',                
                'prix6sesionesPesos' => 'numeric',
                'prix12sesionesPesos' => 'numeric',
                'prix6sesionesEuros' => 'numeric',
                'prix12sesionesEuros' => 'numeric',
            ]);

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img/programas/'.$filename);
        Image::make($image->getRealPath())->save($path); 
        $programme->image = 'img/programas/'.$filename;

        $image2 = $request->file('image2');
        $filename2  = time() . '.' . $image2->getClientOriginalExtension();
        $path2 = public_path('img/programas/'.$filename2);
        Image::make($image2->getRealPath())->save($path2); 
        $programme->image2 = 'img/programas/'.$filename2;

        $data = array(
            'title'=> $request->title,
            'descriptionGlobale' => $request->descriptionGlobale,
            'image' => $programme->image, 
            'image2' => $programme->image2,               
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
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',                
                'prix6sesionesPesos' => 'numeric',
                'prix12sesionesPesos' => 'numeric',
                'prix6sesionesEuros' => 'numeric',
                'prix12sesionesEuros' => 'numeric',
            ]);


        if($request->hasfile('image'))
        {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/img/programas/'.$filename);
            Image::make($image->getRealPath())->save($path); //->resize(468, 249)
            $programme->image = '/img/programas/'.$filename;
        }
        if($request->hasfile('image2'))
        {
            $image2 = $request->file('image2');
            $filename2  = time() . '.' . $image2->getClientOriginalExtension();
            $path2 = public_path('/img/programas/'.$filename2);
            Image::make($image2->getRealPath())->save($path2); //->resize(468, 249)
            $programme->image2 = '/img/programas/'.$filename2;
        }         

        $programme->title =  $request->title;
        $programme->descriptionGlobale = $request->descriptionGlobale;
        $programme->image = $programme->image;
        $programme->image2 = $programme->image2;                 
        $programme->prix6sesionesPesos = $request->prix6sesionesPesos;
        $programme->prix12sesionesPesos = $request->prix12sesionesPesos;
        $programme->prix6sesionesEuros = $request->prix6sesionesEuros;
        $programme->prix12sesionesEuros = $request->prix12sesionesEuros;

        $programme->save();

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
