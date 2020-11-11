@extends('layout')
  
@section('content')
        
           
    
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <div class="container">
      <div class=" row justify-content-md-center">
    <div class="card" style="max-width: 25rem;">
        <div class="card-header card text-white bg-primary mb-3" >
          Add New Person
        </div>
        <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="far fa-user"></i></div>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user-tag"></i></div>
                    </div>
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                  </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
                    </div>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                  </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-mail-bulk"></i></div>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                  </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-phone"></i></div>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                  </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-building"></i></div>
                    </div>
                    <select name="company_id" class="form-control">
                        @foreach ($companies as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                  </div>
                <br>


                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{ route('employees.index') }}"> Back</a>
                </div>
      </div>
    </div>
       
  </div> 
    </div>
   
</form>
@endsection