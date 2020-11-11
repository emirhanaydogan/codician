@extends('layout')
 
@section('content')
 
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   

    <table class="table table-striped  table-hover">
        <caption style="caption-side: top;"><h2>Employees</h2></caption>
        <tr>
            <th><i class="fa fa-list-ol"></i> No</th>
            <th><i class="fa fa-user"></i> Name</th>
            <th><i class="fa fa-user-tag"></i> Lastname</th>
            <th><i class="fa fa-link"></i> Title</th>
            <th><i class="fa fa-mail-bulk"></i> Email</th>
            <th><i class="fa fa-phone"></i> Phone</th>
            <th><i class="fa fa-building"></i> Company</th>
            <th><i class="fas fa-cogs"></i> Action</th>
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
                    <a class="btn btn-success" href="{{ route('employees.create') }}">Create</a>
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