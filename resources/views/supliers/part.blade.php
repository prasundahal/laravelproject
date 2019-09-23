@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">ROYAL NEPAL</h1>
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
    <form method="post" action="{{ route('part.store') }}" enctype="multipart/form-data">

          @csrf
         

            



          <div class="form-group">
              <label for="particulars">Particulars</label>
              <input type="text" class="form-control" name="particulars"/>
          </div>

          <div class="form-group">
              <label for="brand">Brand</label>
              <input type="text" class="form-control" name="brand"/>
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
