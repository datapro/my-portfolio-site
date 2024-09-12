@extends('layouts.master')

@section('title')
    Request Quote|SYSTEMTECH|Best Web Solution|Lagos|Abuja|Port Hacourt 
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
          <h4 class="card-title"> Requested Quotes</h4>
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
                  Business
                </th>
                <th>
                  Email
                </th>
                <th>
                  Phone
                </th>
                <th>
                  Address
                </th>     
                <th>
                    state
                </th> 
                <th>
                    Country
                  </th> 
                  <th>
                    Project
                  </th> 
                  <th>
                    created_at
                  </th>         
                <th class="text-right">
                 Delete
                </th>
              </thead>
              <tbody>
                @foreach ($quotes as $quote)

                <tr>
                    
                  <td>
                    {{$quote->id}}
                  </td>
                  <td>
                    {{$quote->name}}
                  </td>
                  <td>
                    {{$quote->business}}
                  </td>
                  <td>
                    {{$quote->email}}
                  </td>
                  <td>
                    {{$quote->phone}}
                  </td>
                  <td>
                    {{$quote->address}}
                  </td>
                  <td>
                    {{$quote->state}}
                  </td>
                  <td>
                    {{$quote->country}}
                  </td>
                  <td>
                    {{$quote->project}}
                  </td>
                  <td>
                    {{$quote->created_at}}
                  </td>
                  <td class="text-right">
                    <form action="/quote/{{$quote->id}}" method="post">
                      @csrf
                      {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>                    
                @endforeach  
                {{ $quotes->links() }}          
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
@endsection

@section('scripts')

@endsection