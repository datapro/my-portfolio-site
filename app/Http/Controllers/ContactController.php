<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\Quote;
use App\Models\Contsct;
use App\Models\Article;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        //
        return view('contact.contact')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
    }

    public function request(){
        return view('contact.request')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
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
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',

          ]);
        $data=new Contsct;
        $data->email=$request->input('email');
        $data->name=$request->input('name');
        $data->message=$request->input('message');
        $data->save();
        
        
          //mailing
          Mail::to('sales@systech.com.ng')->send(new ContactFormMail($data));
          return redirect('/contact')->with('success','Message sent...');
    }
    public function message(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',

          ]);
          $data=new Contsct;
          $data->email=$request->input('email');
          $data->name=$request->input('name');
          $data->message=$request->input('message');
          $data->save();
           //mailing
           Mail::to('sales@systech.com.ng')->send(new ContactFormMail($data));
           return redirect('/')
           ->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4))
           ->with('success','Message sent...');

    }
    public function request_store(Request $request){
        //
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'state'=>'required',
            'country'=>'required',
            'business'=>'required',
            'zip'=>'required',
            'project'=>'required',

          ]);
        $post=new Quote;
        $post->email=$request->input('email');
        $post->name=$request->input('name');
        $post->phone=$request->input('phone');
        $post->address=$request->input('address');
        $post->state=$request->input('state');
        $post->country=$request->input('country');
        $post->business=$request->input('business');
        $post->zip=$request->input('zip');
        $post->project=$request->input('project');
        $post->save();
        return redirect('/request')
        ->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4))
        ->with('success','Qoute sent...');

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
    }
}
