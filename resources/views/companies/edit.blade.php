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
  
  
        
    <form action="{{ route('companies.update',$company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
          <div class=" row justify-content-md-center">
        <div class="card" style="max-width: 30rem;">
            <div class="card-header card text-white bg-primary mb-3" >
              Edit Company
            </div>
            <div class="card-body">
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text" id="btnGroupAddon"><i class="far fa-building"></i></div>
                        </div>
                        <input class="form-control" type="text" placeholder="Company Name:" readonly>
                        <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Name">
                      </div>
                      <br>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
                        </div>
                        <input class="form-control" type="text" placeholder="Company Url:" readonly>
                        <input type="text" name="url" class="form-control" value="{{ $company->url }}" placeholder="Company Wen Address" aria-label="Name" aria-describedby="btnGroupAddon">
                      </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-link"></i></div>
                        </div>
                        <input class="form-control" type="text" placeholder="Address:" readonly>
                        <input  id="searchTextField" class="form-control" name="address" type="text" value="{{ $company->addresses[0]->address }}"   autocomplete="off" required>
                      </div>
                
    
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-danger" href="{{ route('companies.index') }}"> Back</a>
            </div>
        </div>
      </div>
    </div>
   
    </form>

   
@endsection
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk3esWuI3nF4MirP43iMLEblHpbvuPkpk&libraries=places"></script>

<script type="text/javascript">
    function initialize() {
            var input = document.getElementById('searchTextField');
            var autocomplete = new google.maps.places.Autocomplete(input);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
 