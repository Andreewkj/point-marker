@extends('layouts.header')
@section('content')
<div class="container mt-4">

    <form class="row g-3">
        @csrf
        <div class="col-2">
            <div class="col-12">
                <p class="fst-italic fs-4">First name</p>
                <img src="{{ asset('images/randon.jpg') }}" class="img-thumbnail">
            </div>
        </div>
        <div class="col-10">
            <div class="col-12 d-flex">
                <div class="col-md-3 p-1">
                    <label for="inputName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="inputName">
                  </div>
                  <div class="col-md-3 p-1">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                  <div class="col-3 p-1">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
            </div>

            <div class="col-12 d-flex">
                <div class="col-md-3 p-1">
                    <label for="inputCity" class="form-label">Post</label>
                    <select name="post" id="inputCity" class="form-select">
                        <option value="1">Jr</option>
                        <option value="2">Pl</option>
                        <option value="3">Sr</option>
                    </select> 
                </div>
                <div class="col-3 p-1">
                    <label for="dateHired" class="form-label">Hired at</label>
                    <input type="text" class="form-control" id="dateHired" placeholder="02/10/2020" readonly>
                </div>
        
                <div class="col-3 p-1">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="(99)99999-9999">
                </div>
            </div>
            <div class="col-12 d-flex p-1 mt-3">
                <a href="#" class="btn btn-primary">Stitch sheet</a>
            </div>
        </div>    
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>

</div>

@endsection