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
  
    <form action="{{ route('employees.update',$employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
          <div class=" row justify-content-md-center">
        <div class="card" style="max-width: 25rem;">
            <div class="card-header card text-white bg-primary mb-3" >
              Edit Employee
            </div>
            <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="far fa-user"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Name:" readonly>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name">
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user-tag"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Last Name:" readonly>
                    <input type="text" name="lastname" value="{{ $employee->lastname }}" class="form-control" placeholder="lastname">
                  </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Title:" readonly>
                    <input type="text" name="title" value="{{ $employee->title }}" class="form-control" placeholder="title">
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-mail-bulk"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Email:" readonly>
                    <input type="text" name="email" value="{{ $employee->email }}" class="form-control" placeholder="email">
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-phone"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Phone:" readonly>
                    <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control" placeholder="phone">
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-building"></i></div>
                    </div>
                    <input class="form-control" type="text" placeholder="Company:" readonly>
                    <select name="company_id" class="form-control">
                        <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                        @foreach ($companies as $key => $value)
                            @if ($key !== $company->id )
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endif
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
    </form>
@endsection