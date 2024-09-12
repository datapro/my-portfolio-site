@extends('layouts.main')
@section('content')
<div class="page-title parallax parallax1 position-relative clearfix">
    <div class="section-overlay"></div>
    <div class="container">
    <div class="breadcrumbs position-relative">
    <div class="breadcrumbs-wrap">
    <h1 class="title">Request For A Quote</h1>
    <ul class="breadcrumbs-inner">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="{{url('/request')}}">Request</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
  <br/>
    <div class="about-us">
        <div class="container">
          @include('inc.messages')
    <form action="request" method="post">
      @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4" style="color: rgb(6, 5, 5)">Contact Name *</label>
          <input type="text" class="form-control" id="inputname" placeholder="Contact Name" name="name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4" style="color: rgb(18, 17, 17)">Business/Organisation Name</label>
            <input type="text" class="form-control" id="inputname1" placeholder="Business/Organisation Name" name="business">
          </div>
        </div>
        
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Phone Number *</label>
        <input type="number" class="form-control" id="inputPassword4" placeholder="Phone Number " name="phone">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Nearest bus stop and house number" name="address">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City And State</label>
        <input type="text" class="form-control" id="inputCity" placeholder="City and State" name="state">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Country</label>
        <select id="inputState" class="form-control" name="country">
          <option selected>Other...</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Angola">Angola</option>
          <option value="UK">UK</option>
          <option value="USA">USA</option>
          <option value="Canada">Canada</option>
          <option value="Ghana">Ghana</option>
          <option value="South Africa">South Africa</option>
          <option value="China">china</option>
          <option value="south Korea">south Korea</option>
          <option value="North Korea">North Korea</option>
          <option value="Japan">Japan</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="zip">
      </div>
    </div>
        <div class="form-group">
          <label><strong>Project Type / Services *</strong></label><br>
          <label><input type="checkbox" name="project[]" value="eCommerce Website Development"> eCommerce Web Development</label>
          <label><input type="checkbox" name="project[]" value="Graphic Design"> Graphic Design</label>
          <label><input type="checkbox" name="project[]" value="Mobile App Development"> Mobile App Development</label>
          <label><input type="checkbox" name="project[]" value="Digital Marketing"> Digital Marketing</label> 
          <label><input type="checkbox" name="project[]" value="Software Development"> Software Development</label>
          <label><input type="checkbox" name="project[]" value="Web Design & Development"> Web Design & Development</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
        </div>
    </div>

@endsection