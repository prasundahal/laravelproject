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
      </div><br /></div>
    @endif
    <a href="{{ route('supliers.index')}}" class="btn btn-primary" >View Supliers</a>
    <a href="{{ route('supliers.part') }}" class="btn btn-primary"><span>Add Particular </span></button></a>
    <script>
function myFunction(p1, p2) {
  return p1 * p2;
}
document.getElementById("demo").innerHTML = myFunction(4, 3);
</script>

      <form method="post" action="{{ route('particulars.store') }}">
          @csrf

<div class="form-group">    
              <input type="hidden" value='{{$suplier_id}}' name="suplier_id">        
          </div>
<br /> <br /> 




 <div class="row">  
    <div class="col-md-15">
      <div>
  <label for="particulars">Particulars</label>
  
              <select name="particulars" class="selectpicker" data-style="select-with-transition" title="select Class" data-size="1" > 
              @foreach ($classname_array as $data)                                       
                  <option value="{{ $data->id }}"  >{{ $data->particulars }}</option>        
              @endforeach
              </select>

      </div>
    
              </div>

</div>

          <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="text" class="form-control" name="quantity"/>
          </div>

          <div class="form-group">
              <label for="rateperunit">Rate per unit</label>
              <input type="text" class="form-control" name="rateperunit"/>
          </div>
           <div class="form-group">
              <label for="piece">Piece</label>
              <input type="text" class="form-control" name="piece"/>
          </div>
           <div class="form-group">
              <label for="amount">Amount</label>
              <input type="text" class="form-control" name="amount"/>
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
