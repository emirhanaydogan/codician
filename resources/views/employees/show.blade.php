@extends('layout')
  
@section('content')

   <div class="container">
     <div class=" row justify-content-md-center">
    <div class="card" style="max-width: 29rem;">
        <div class="card-header card text-white bg-primary mb-3" >
          Show Employee
        </div>
        <div class="card-body">
            <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="btnGroupAddon"><i class="far fa-user"></i></div>
                </div>
                <input class="form-control" type="text" placeholder="Name:" readonly>
                <input type="text" name="name" class="form-control" placeholder=" {{ $employee->name }}" aria-label="Name" aria-describedby="btnGroupAddon">
               
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user-tag"></i></div>
                </div>
                <input class="form-control" type="text" placeholder="Last Name:" readonly>
                <input type="text" name="url" class="form-control" placeholder="{{ $employee->lastname }}" aria-label="Name" aria-describedby="btnGroupAddon">
              </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
                </div>
                <input class="form-control" type="text" placeholder="Title:" readonly>
                <input type="text" name="url" class="form-control" placeholder="{{ $employee->title }}" aria-label="Name" aria-describedby="btnGroupAddon">
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-mail-bulk"></i></div>
                </div>
                <input class="form-control" type="text" placeholder="Email" readonly>
                <input type="text" name="url" class="form-control" placeholder="{{ $employee->email }}" aria-label="Name" aria-describedby="btnGroupAddon">
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-phone"></i></div>
                </div>
                <input class="form-control" type="text" placeholder="Phone:" readonly>
                <input type="text" name="url" class="form-control" placeholder="{{ $employee->phone }}" aria-label="Name" aria-describedby="btnGroupAddon">
              </div>
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text" id="btnGroupAddon"><i class="far fa-building"></i></div>
                </div>
                <input class="form-control" type="text" placeholder="Company:" readonly>
                <input type="text" name="url" class="form-control" placeholder="{{ $employee->company->name  }}" aria-label="Name" aria-describedby="btnGroupAddon">
              </div>
              <br>  
              <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>                        
      </div>
    </div>
    </div>
    </div>

    
@endsection