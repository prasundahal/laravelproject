@extends('base')

@section('main')




<div class="jumbotron text-center" style="margin-bottom:0">
  <h2> Total Particulars</h2>
  <a href="{{ route('supliers.index')}}" class="btn btn-primary " >View Supliers</a>
</div>
<div class="row">
<div class="col-sm-12">


       
  <table class="table table-hover">
    <thead>
        <tr>
          <td>Supliers Name***</td>
          <td>Particulars</td>
          <td>Quantity</td>
          <td>Rate Per Unit</td>
          <td>Piece</td>
          <td>Amount</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($particulars as $particular)
        <tr>
           
            <td>
               @if(isset($particular->suplier->sellers_name))
              {{$particular->suplier->sellers_name}}
            @endif
           </td> 
          
          <td>
           @if(isset($particular->parts->particulars))
              {{$particular->parts->particulars}}
            @endif
          </td>
            <td>{{$particular->quantity}}</td>
            <td>{{$particular->rateperunit}}</td>
            <td>{{$particular->piece}}</td>
            <td>{{$particular->amount}}</td>

           
            <td>
                <a href="{{ route('particulars.edit',$particular->id)}}" class="btn btn-primary">Edit</a>
            </td>
       


            <td>
                <form action="{{ route('particulars.destroy', $particular->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

<a href="{{ route('supliers.create') }}" class="btn btn-primary"><span>Add Suppliers </span></button></a>
<a href="{{ route('supliers.part') }}" class="btn btn-primary"><span>Add New Particular </span></button></a>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p></p>
</div>

</body>
</html>
