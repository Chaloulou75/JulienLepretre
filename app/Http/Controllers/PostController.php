<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Auth;
use Illuminate\Http\Request;
use Validator;
use Purifier;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('tag'))
        {
            $posts= Tag::where('name', request('tag'))->firstOrFail()->posts()->latest()->simplePaginate(6);
        }

        else
        {
          $posts = Post::with('tags')->latest()->simplePaginate(6);  
        }

        $tags = Tag::has('posts')->get();
        
        return view('/pages/blog/index', compact('posts', 'tags')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pages/blog/create');
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
                'title' => 'required|min:3|max:255',
                'auteur' =>'required|min:3|max:255',
                'soustitre1'=> 'required|min:3|max:255',                
                'description' => 'required|min:10',
                'soustitre2'=> 'required|min:3|max:255',
                'content' => 'required|min:10',
                'photoPost' => 'required|image|mimes:jpeg,png,jpg,gif,svg',                
                'lienYoutube' => 'url',
                'lienInstagram' => 'url',
                'lienFacebook' => 'url',
                'tags'=>'min:3|max:255',
            ]);

        if ($validator->fails()) {
            return redirect('/blog/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->lienYoutube)
        {
            $lienYoutube = $request->lienYoutube;
            $lienYoutubeId = $this->YoutubeID($lienYoutube);
        }        

        if($request->hasfile('photoPost'))
        {
            $path = $request->file('photoPost')->store('img/posts', 's3');

            Storage::disk('s3')->setVisibility($path, 'public');

            $progurl = Storage::disk('s3')->url($path);
        }

        $data = array(
            'title'=> $request->title,
            'auteur'=> $request->auteur,
            'soustitre1'=> $request->soustitre1,
            'description' => Purifier::clean($request->description),
            'soustitre2'=> $request->soustitre2,            
            'content' => Purifier::clean($request->content),
            'photoPost' => basename($path),
            'photoPostUrl' => $progurl,               
            'lienYoutube' => $lienYoutubeId, 
            'lienInstagram' => $request->lienInstagram, 
            'lienFacebook' => $request->lienFacebook,
        );

        $post = Post::create($data);

        if($request->tags)
        {
            $tags = explode(', ', $request->tags);

            foreach($tags as $key => $tag)
            {
                $newTag = Tag::firstOrCreate(['name' => $tag]);

                $post->tags()->attach($newTag);  
            } 
        }

            

        return redirect()->back()->with('message.level', 'success')->with('message.content', __('El post esta creado.'));       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::with('tags')->where('slug', $slug)->firstOrFail();

        return view('/pages/blog/show', $post, compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::with('tags')->where('slug' , $slug)->firstOrFail();

        return view('/pages/blog/edit', $post, compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        
        $post = Post::with('tags')->where('slug', $slug)->firstOrFail();
        
        $validator = Validator::make($request->all(),[
                'title' => 'required|min:3|max:255',
                'auteur' =>'required|min:3|max:255',
                'soustitre1'=> 'required|min:3|max:255',                
                'description' => 'required|min:10',
                'soustitre2'=> 'required|min:3|max:255',
                'content' => 'required|min:10',
                'photoPost' => 'required|image|mimes:jpeg,png,jpg,gif,svg',                
                'lienYoutube' => 'url',
                'lienInstagram' => 'url',
                'lienFacebook' => 'url',
                'tags'=>'min:3|max:255',
            ]);

        if ($validator->fails()) {
            return redirect('/blog/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->lienYoutube)
        {
            $lienYoutube = $request->lienYoutube;
            $lienYoutubeId = $this->YoutubeID($lienYoutube);
        }

        if($request->hasfile('photoPost'))
        {
            if($post->photoPost){

                Storage::disk('s3')->delete('/img/posts'.$post->photoPost);
            }
            $path = $request->file('photoPost')->store('img/posts', 's3');

            Storage::disk('s3')->setVisibility($path, 'public');

            $progurl = Storage::disk('s3')->url($path);
        }
       

        $post->update([
            'title'=> $request->title,
            'auteur'=> $request->auteur,
            'soustitre1'=> $request->soustitre1,
            'description' => Purifier::clean($request->description),
            'soustitre2'=> $request->soustitre2,            
            'content' => Purifier::clean($request->content),
            'photoPost' => basename($path),
            'photoPostUrl' => $progurl,               
            'lienYoutube' => $lienYoutubeId, 
            'lienInstagram' => $request->lienInstagram, 
            'lienFacebook' => $request->lienFacebook, 
        ]);

        if($request->tags)
        {
            $post->tags()->detach();

            $tags = explode(', ', $request->tags);

            foreach($tags as $key => $tag)
            {
                $newTag = Tag::firstOrCreate(['name' => $tag]);

                $post->tags()->attach($newTag);  
            } 

        }

        return redirect()->action('PostController@index')->with('message.level', 'success')->with('message.content', __('El post esta actualizado.'));    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::with('tags')->where('slug' , $slug)->firstOrFail(); //

        Storage::disk('s3')->delete('img/posts'.$post->photoPost);

        $post->tags()->detach();

        $post->delete();

        return redirect()->action('PostController@index')->with('message.level', 'success')->with('message.content', __('El post esta suprimido.'));
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
