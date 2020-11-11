@extends('layout')
  
@section('content')
    <div class="row">
  

      <div class="container">
        <div class=" row justify-content-md-center">
    <div class="card" style="max-width: 29rem;">
        <div class="card-header card text-white bg-primary mb-3" >
          Show Company
        </div>
        <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="far fa-building"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Company Name:" readonly>
                    <input type="text" name="name" class="form-control" placeholder=" {{ $company->name }}" aria-label="Name" aria-describedby="btnGroupAddon">
                   
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Company Url:" readonly>
                    <input type="text" name="url" class="form-control" placeholder="{{ $company->url }}" aria-label="Name" aria-describedby="btnGroupAddon">
                  </div>
                <br>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
                  </div>
                  <input class="form-control" type="text" placeholder="Address:" readonly>
                  <input type="text" name="url" class="form-control" placeholder=" {{ $company->addresses[0]->address }}" aria-label="Name" aria-describedby="btnGroupAddon">
                
                </div>
                <br>
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
            </div>  
      </div>
    </div>
  </div>
@endsection