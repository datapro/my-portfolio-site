@extends('layouts.master')

@section('title')
    Publish Blogs|SYSTEMTECH|Best Web Solution|Lagos|Abuja|Port Hacourt 
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
          <h4 class="card-title"> Publish Blogs</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Title
                </th>
                <th>
                  Body
                </th>
                <th>
                  Created At
                </th>
                <th>
                  Updated_at
                </th>
                <th>
                  Picture
                </th>             
                <th class="text-right">
                  Edit
                </th>
                <th class="text-right">
                 Delete
                </th>
              </thead>
              <tbody>
                @foreach ($users as $user)

                <tr>
                  <td>
                    {{$user->id}}
                  </td>
                  <td>
                    {{$user->title}}
                  </td>
                  <td>
                    {{$user->body}}
                  </td>
                  <td>
                    {{$user->created_at}}
                  </td>
                  <td>
                    {{$user->updated_at}}
                  </td>
                  <td>
                    <img src="{{ asset('storage/picture/'.$user->picture) }}" alt="cover image" height="50" width="50">
                  </td>
                  <td class="text-right">
                    <a href="/editblog/{{$user->id}}" class="btn btn-success">Edit</a>
                  </td>
                  <td class="text-right">
                    <form action="/editblog/{{$user->id}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>                    
                @endforeach  
                {{ $users->links() }}            
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
@endsection

@section('scripts')

@endsection