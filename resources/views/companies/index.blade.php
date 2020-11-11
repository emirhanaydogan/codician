@extends('layout')
 
@section('content')
    <div class="row" style="margin-top:20px; margin-bottom:5px;">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Companies</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('companies.create') }}"> Create New Company</a>
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
            <th><i class="fa fa-list-ol"></i> No</th>
            <th><i class="fa fa-building"></i>  Company Name</th>
            <th>Thumbnail</th>
            <th><i class="fa fa-link"></i> Company Url</th>
            <th><i class="fa fa-link"></i> Address</th>
            <th><i class="fas fa-cogs"></i> Action</th>
        </tr>        
        @foreach ($companies as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->name }}</td>
            <td><img src="{{ $company->websites[0]->thumbnail }}" class="img-thumbnail" alt="HTML THUMBNAIL"></td>
            <td>{{ $company->url }}</td>
            <td>{{ $company->addresses[0]->address }}</td>
            <td width="300px">
                <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                   
                    <a class="btn btn-info" href="{{ route('companies.show',$company->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
      
@endsection