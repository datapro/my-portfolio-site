@extends('layouts.master')

@section('title')
    Post Blog|SYSTEMTECH|Best Web Solution|Lagos|Abuja|Port=Hacourt 
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
        <div class="card-header">
          <h4 class="card-title"> Post Blog</h4>
        </div>
        <div class="card-body">
          <form action="createblog" method="post" enctype="multipart/form-data">
            @csrf
           <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter blog title" name="title">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Upload Your Cover Picture</label>
              <input type="file" class="form-control" id="exampleFormControlInput1"  name="picture">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Body</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="body"></textarea>
            </div>
           <div class="mb-3">
            <button type="submit" class="btn btn-primary">Publish</button>
           </div>
          </form>
          </div>
        </div>
      </div>
    
    </div>

@endsection