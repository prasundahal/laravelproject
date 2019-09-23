
@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-2 offset-sm-2">
        <h1 class="display-3">EDIT SUPLIERS</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('supliers.update', $suplier->id) }}">
            @csrf

                        @method('PATCH') 


            <div class="form-group">
                <label for="sellers_name">seller's Name:</label>
                <input type="text" class="form-control" name="sellers_name" value={{ $suplier->sellers_name }} />
            </div>

            <div class="form-group">
                <label for="sellers_vatpan">sellers's VAT/PAN NO:</label>
                <input type="text" class="form-control" name="sellers_vatpan" value={{ $suplier->sellers_vatpan }} />
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" value={{ $suplier->address }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p></p>
</div>
