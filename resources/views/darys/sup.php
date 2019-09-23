@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">RAJNA tailor</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('supliers.store') }}">
          @csrf
           

          <div class="form-group">
              <label for="sellers">sellers's Name</label>
              <input type="text" class="form-control" name="buyers_name"/>
          </div>
          <div class="form-group">
              <label for="sellers_vatpan">sellers's VAT/PAN NO :</label>
              <input type="text" class="form-control" name="sellers_vatpan"/>
          </div>
<div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address"/>
          </div>

          
            <div class="form-group text-left">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add " />
 </div>                    
        
      </form>
  </div>
</div>
</div>
@endsection
