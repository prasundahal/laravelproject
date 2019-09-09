@extends('base')

<div class="row">
    <div class="col-sm-2 offset-sm-2">
        <h1 class="display-3">EDIT</h1>

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
        <form method="post" action="{{ route('particulars.update', $particular->id) }}">
            @csrf

                        @method('PATCH') 

            <div class="form-group">

                <label for="particulars">Particulars:</label>
                <input type="text" class="form-control" name="particulars" value={{ $particular->particulars }} />
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" class="form-control" name="nepali" value={{ $particular->quantity }} />
            </div>

            <div class="form-group">
                <label for="rateperunit">Rate Per Unit:</label>
                <input type="text" class="form-control" name="rateperunit" value={{ $particular->rateperunit}} />
            </div>
            <div class="form-group">
                <label for="piece">Piece:</label>
                <input type="text" class="form-control" name="piece" value={{ $particular->piece }} />
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" name="amount" value={{ $particular->amount }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p></p>
</div>
