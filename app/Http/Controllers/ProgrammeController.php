<?php

namespace App\Http\Controllers;

use App\Programme;
use App\Testimonios;
use Auth;
use Illuminate\Http\Request;
use Validator;
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
        $validator = Validator::make($request->all(),[
                'title' => 'required|min:3',
                'descriptionCourte' => 'required|min:10',
                'descriptionComplete' => 'required|min:10',
                'photoProgramme' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',                
                'prixPesos' => 'numeric',
                'prixDollar' => 'numeric',
                'lienYoutube' => 'url',
                'lienTiendup' => 'url',
            ]);

        if ($validator->fails()) {
            return redirect('/programas/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->lienYoutube)
        {
            $lienYoutube = $request->lienYoutube;
            $lienYoutubeId = $this->YoutubeID($lienYoutube);
        }
        

        if($request->hasfile('photoProgramme'))
        {
            //$filename1 = $request->image->getClientOriginalName();
            $pathy = $request->file('photoProgramme')->store('img/programas', 's3');

            Storage::disk('s3')->setVisibility($pathy, 'public');

            $progurl = Storage::disk('s3')->url($pathy);
        }

        if($request->hasfile('image'))
        {
            //$filename1 = $request->image->getClientOriginalName();
            $path = $request->file('image')->store('img/programas', 's3');

            Storage::disk('s3')->setVisibility($path, 'public');

            $url = Storage::disk('s3')->url($path);
        }

        if($request->hasfile('image2'))
        {
            //$filename2 = $request->image2->getClientOriginalName();
            $path2 = $request->file('image2')->store('img/programas', 's3');

            Storage::disk('s3')->setVisibility($path2, 'public');

            $url2 = Storage::disk('s3')->url($path2);
        }

        $data = array(
            'title'=> $request->title,
            'descriptionCourte' => $request->descriptionCourte,
            'descriptionComplete' => $request->descriptionComplete,
            'photoProgramme' => basename($pathy),
            'photoProgUrl' => $progurl, 
            'image' => basename($path), 
            'image2' => basename($path2),               
            'prixPesos' => $request->prixPesos,
            'prixDollar' => $request->prixDollar,
            'imageurl' => $url, 
            'image2url' => $url2,
            'lienYoutube' => $lienYoutubeId, 
            'lienTiendup' => $request->lienTiendup, 
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

        $testimonios = Testimonios::latest()->take(3)->get(); 

        return view('/pages/programas/show', $programme, compact('programme', 'testimonios'));
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

        $validator = Validator::make($request->all(),[
                'title' => 'required|min:3',
                'descriptionCourte' => 'min:10',
                'descriptionComplete' => 'min:10',
                'photoProgramme' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'image2' => 'image|mimes:jpeg,png,jpg,gif,svg',                
                'prixPesos' => 'numeric',
                'prixDollar' => 'numeric',
                'lienYoutube' => 'url',
                'lienTiendup' => 'url',
            ]);

        if ($validator->fails()) {
            return redirect('/programas/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->lienYoutube)
        {
            $lienYoutube = $request->lienYoutube;
            $lienYoutubeId = $this->YoutubeID($lienYoutube);
        }

        if($request->hasfile('photoProgramme'))
        {
            //$filename1 = $request->image->getClientOriginalName();
            if($programme->photoProgramme){

                Storage::disk('s3')->delete('/img/programas'.$programme->photoProgramme);
            }
            $pathy = $request->file('photoProgramme')->store('img/programas', 's3');

            Storage::disk('s3')->setVisibility($pathy, 'public');

            $progurl = Storage::disk('s3')->url($pathy);
        }

        if($request->hasfile('image'))
        {
            //$filename1 = $request->image->getClientOriginalName();
            if($programme->image){

                Storage::disk('s3')->delete('/img/programas'.$programme->image);
            }
            $path = $request->file('image')->store('img/programas', 's3');

            Storage::disk('s3')->setVisibility($path, 'public');

            $url = Storage::disk('s3')->url($path);
        }

        if($request->hasfile('image2'))
        {
            //$filename2 = $request->image2->getClientOriginalName();
            if($programme->image2){
                
                Storage::disk('s3')->delete('/img/programas'.$programme->image2);
            }
            $path2 = $request->file('image2')->store('img/programas', 's3');
            Storage::disk('s3')->setVisibility($path2, 'public');

            $url2 = Storage::disk('s3')->url($path2);
        }        

        $programme->update([
            'title'=> $request->title,
            'descriptionCourte' => $request->descriptionCourte,
            'descriptionComplete' => $request->descriptionComplete,
            'photoProgramme' => basename($pathy),
            'photoProgUrl' => $progurl, 
            'image' => basename($path), 
            'image2' => basename($path2),               
            'prixPesos' => $request->prixPesos,
            'prixDollar' => $request->prixDollar,
            'imageurl' => $url, 
            'image2url' => $url2,
            'lienYoutube' => $lienYoutubeId, 
            'lienTiendup' => $request->lienTiendup, 
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
        Storage::disk('s3')->delete('img/programas'.$programme->photoProgramme);
        Storage::disk('s3')->delete('img/programas'.$programme->image);
        Storage::disk('s3')->delete('img/programas'.$programme->image2);

        $programme->delete();

        return redirect()->action('ProgrammeController@create')->with('message.level', 'success')->with('message.content', __('El programa esta suprimido.'));
    }

    protected function YoutubeID($lienYoutube)
    {
        if(strlen($lienYoutube) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $lienYoutube, $match))
            {
                return $match[1];
            }
            else{
                return false;
            }
        }
        return $lienYoutube;
    }
        
}
