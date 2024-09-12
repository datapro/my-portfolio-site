<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use DB;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
    }
    public function itservices (){
        return view('pages.it-services')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
    }
    public function it_services_detail(){
       return view('pages.it-services-detail')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
    }
    public function case_study(){
        return view('pages.case-study')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
    }
    public function case_study_detail(){
        return view('pages.case-study-detail')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
    }
    public function about_us(){
        return view('pages.about-us')->with('articles', Article::orderBy('updated_at', 'DESC')->simplePaginate(4));
    }
}
