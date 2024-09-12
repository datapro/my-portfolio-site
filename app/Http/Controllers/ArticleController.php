<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Article;
use DB;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('articles')->simplePaginate(3);
        return view('admin.blogtable')->with('users', $users)->with('status','record found');
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
        //
        $request->validate([
            'title'=>'required',
            'picture'=>'required|mimes:png,jpeg,jpg,gif,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts,qt|max:5048',
            'body'=>'required',

          ]);
    /** 
          if($request->file('picture')){
            $file= $request->file('picture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/picture'), $filename);
        }
        */
          if ($request->hasfile('picture')){
            $filenameWithEXT=$request->file('picture')->getClientOriginalName();
            $filename=pathinfo($filenameWithEXT,PATHINFO_FILENAME);
            $extension=$request->file('picture')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path=$request->file('picture')->storeAs('public/picture',$fileNameToStore);

        }else{
            $filenameToStore='noimage.jpg';
        }

        Article::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'slug' => SlugService::createSlug(Article::class, 'slug', $request->title),
            'usertype' => auth()->user()->usertype,
            'picture'=>$fileNameToStore,
        ]);
          return redirect('/blogtable')->with('status','Blog publish successfully');

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
        $users=Article::findorFail($id);
        return view('admin.editblog',(['users'=>$users]));
     

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
        if ($request->hasfile('picture')){
            $filenameWithEXT=$request->file('picture')->getClientOriginalName();
            $filename=pathinfo($filenameWithEXT,PATHINFO_FILENAME);
            $extension=$request->file('picture')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path=$request->file('picture')->storeAs('public/picture',$fileNameToStore);

        }else{
            $filenameToStore='noimage.jpg';
        }
        $users = Article::find($id);
        $users->title=$request->input('title');
        $users->body=$request->input('body');
        if($request->hasfile('picture')){
        $users->picture=$fileNameToStore;
    }
        //$users->picture=$request->input('picture');
        $users->update();
        return redirect('/blogtable')->with('status','Updated successfully');
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
        $users=Article::findorFail($id);
        $users->delete();
        return redirect('/blogtable')->with('status','Blog removed');
    }
}
