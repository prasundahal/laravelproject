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
    <a href="{{ route('supliers.index')}}" class="btn btn-primary btn-block" >View Supliers</a>
    <form method="post" action="{{ route('supliers.store') }}" enctype="multipart/form-data">

          @csrf

           

          <div class="form-group">
              <label for="sellers_name">Seller's Name</label>
              <input type="text" class="form-control" name="sellers_name"/>
          </div>
          <div class="form-group">
              <label for="sellers_vatpan">Seller's VAT/PAN NO :</label>
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
<div class="jumbotron text-center" style="margin-bottom:0">
  <p></p>
</div>
@endsection
