@extends('layouts.master')

@section('title')
    Edit Registered Person|SYSTEMTECH |Best Web Solution|Lagos|Abuja|Port=Hacourt 
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role For Registered User.</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @include('inc.messages')
                            <form action="/systemtech/tech/public/role-register-update/{{$users->id}}" method="POST">
                                {{method_field('PUT')}}
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="name"  value="{{$users->name}}">
                                  </div>
                                  <div class="form-group">
                                  <label for="">Give Role</label>
                                  <select name="usertype" id="" class="form-control">
                                    <option value="none">none</option>
                                    <option value="admin">admin</option>
                                    <option value="vendor">vendor</option>
                                  </select>
                                  </div>
                                  <button type="submit" class="btn btn-success">Update</button>
                                  <a href="{{url('/role-register')}}" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection