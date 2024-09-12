@extends('layouts.master')

@section('title')
    Edit Published Blog|SYSTEMTECH |Best Web Solution|Lagos|Abuja|Port=Hacourt 
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Published Blog.</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @include('inc.messages')
                            <form action="/editblog/{{$users->id}}" method="POST" enctype="multipart/form-data">
                                {{method_field('PUT')}}
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title"  value="{{$users->title}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Body</label>
                                    <textarea class="form-control" name="body"  rows="20" cols="20">{{$users->body}}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <img src="{{ asset('storage/picture/'.$users->picture) }}" alt="" height="200" width="200">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Upload Your Cover Picture</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"  name="picture"  >
                                  </div>
                                  <button type="submit" class="btn btn-success">Update</button>
                                  <a href="{{url('/blogtable')}}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
@endsection