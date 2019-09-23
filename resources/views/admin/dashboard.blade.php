@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Admin </div>

                    <div class="card-body">
                        </br></br>
                                        <a href="{{ route('supliers.create') }}" class="button"><span>Add Suppliers </span></button></a>
                                        <a href="{{ route('supliers.index')}}" class="button"><span> View Supliers</span></button></a></br></br></br>
                                        <a href="{{ route('supliers.part') }}" class="button"><span>Add Particular </span></button></a>
                                        <a href="{{ route('particulars.index')}}" class="button"><span>View Particulars</span></button></a>
                                          <br />  <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
.button {
  border-radius: 100px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 18px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 15px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>