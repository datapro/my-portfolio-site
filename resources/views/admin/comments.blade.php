@extends('layouts.master')

@section('title')
    Users Comments|SYSTEMTECH|Best Web Solution|Lagos|Abuja|Port Hacourt 
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
          <h4 class="card-title"> Users Comments</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                    Postname
                </th>
                <th>
                  Created At
                </th>
                <th>
                  Comment
                </th>
                <th class="text-right">
                 Delete
                </th>
              </thead>
              <tbody>
                @foreach ($comments as $comment)

                <tr>
                  <td>
                    {{$comment->id}}
                  </td>
                  <td>
                    {{$comment->name}}
                  </td>
                  <td>
                    {{$comment->created_at}}
                  </td>
                  <td>
                    {{$user->comment}}
                  </td>
                  <td class="text-right">
                    <a href="/systemtech/tech/public/editblog/{{$comment->id}}" class="btn btn-success">Edit</a>
                  </td>
                  <td class="text-right">
                    <form action="/systemtech/tech/public/editblog/{{$comment->id}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>                    
                @endforeach            
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
@endsection

@section('scripts')

@endsection