@extends('layouts.master')

@section('title')
    Registered Roles|SYSTEMTECH|Best Web Solution|Lagos|Abuja|Port=Hacourt 
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
          <h4 class="card-title"> Registered Roles</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Name
                </th>
                <th>
                  Phone 
                </th>
                <th>
                  Email
                </th>
                <th>
                  Usertype
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
                    {{$user->name}}
                  </td>
                  <td>
                    {{$user->phone}}
                  </td>
                  <td>
                    {{$user->email}}
                  </td>
                  <td>
                    {{$user->usertype}}
                  </td>
                  <td class="text-right">
                    <a href="/systemtech/tech/public/role-edit/{{$user->id}}" class="btn btn-success">Edit</a>
                  </td>
                  <td class="text-right">
                    <form action="/systemtech/tech/public/role-delete/{{$user->id}}" method="post">
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