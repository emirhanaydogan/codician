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
<div class="container">
    <div class="col-md-10 col-md-offset-10">	   
<form action="{{ route('companies.store') }}" method="POST">
    @csrf
    <div class="container">
    <div class=" row justify-content-md-center">
<div class="card" style="max-width: 25rem;">
    <div class="card-header card text-white bg-primary mb-3" >
      Add New Company
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text" id="btnGroupAddon"><i class="far fa-building"></i></div>
        </div>
        <input type="text" name="name" class="form-control" placeholder="Company Name" aria-label="Name" aria-describedby="btnGroupAddon" required>
      </div>
      <br>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
        </div>
        <input type="url" name="url" class="form-control" placeholder="https://example.com" pattern="https://.*" size="50" required>
      </div>
      <br>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-search-location"></i></div>
        </div>
        <input  id="searchTextField" class="form-control" name="address" type="text" placeholder="Enter a location" autocomplete="off" required>
      </div>
      <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="{{ route('companies.index') }}"> Back</a>
        </div>
       
    </div>
  </div>
</div>
</div>
   
</form>
</div>
</div>
@endsection
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk3esWuI3nF4MirP43iMLEblHpbvuPkpk&libraries=places"></script>

<script type="text/javascript">
    function initialize() {
            var input = document.getElementById('searchTextField');
            var autocomplete = new google.maps.places.Autocomplete(input);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
