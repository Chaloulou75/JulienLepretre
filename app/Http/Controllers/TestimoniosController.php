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
        //$admin = User::where('admin', true)->get();
        //$testimonios = Testimonios::latest()->get();
        return view('/pages/testimonios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonio= new Testimonios();

        $request->validate([
                'name' => 'required|min:3',
                'msg' => 'required|min:5',
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

        if($request->hasfile('avatar'))
        {
            //$filename = $request->avatar->getClientOriginalName();
            $path = $request->file('avatar')->store('img/avatars', 's3');

            Storage::disk('s3')->setVisibility($path, 'public');

            $url = Storage::disk('s3')->url($path);

        }

        $data = array(
            'name'=> $request->name,
            'msg' => $request->msg,
            'avatar' => basename($path),
            'avatarurl' => $url,             
        );
        
        Testimonios::create($data);

        return redirect()->back()->with('message.level', 'success')->with('message.content', __('Gracias por tu testimonio.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonios  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonios $testimonio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonios  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonios $testimonio)
    {

        return view('/pages/testimonios/edit', $testimonio, compact('testimonio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonios  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonios $testimonio)
    {
        dump($testimonio);
        return 'we will update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonios  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonios $testimonio)
    {
       dump($testimonio); 
       return 'go go destroyyyyeddd';
    }
}
