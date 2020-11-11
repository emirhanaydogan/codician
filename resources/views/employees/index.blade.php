@extends('layout')
 
@section('content')
<div class="row" style="margin-top:20px; margin-bottom:5px;">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Employees</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New Employee</a>
        </div>
    </div>
</div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   

    <table class="table table-striped  table-hover">
        
        <tr>
            <th><i class="fa fa-list-ol">No</i></th>
            <th><i class="fa fa-user">Name</i></th>
            <th><i class="fa fa-user-tag">Lastname</i></th>
            <th><i class="fa fa-link">Title</i></th>
            <th><i class="fa fa-mail-bulk">Email</i></th>
            <th><i class="fa fa-phone">Phone</i></th>
            <th><i class="fa fa-building">Company</i></th>
            <th><i class="fas fa-cogs">Action</i></th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->title }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->phone }}</td>            
            <td>{{ $employee->company->name }}</td>    
            <td  width="300px">
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                    
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>    
@endsection