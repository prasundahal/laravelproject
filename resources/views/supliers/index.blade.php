<style>
.button {
  border-radius: 100px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 10px;
  padding: 15px;
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

<!DOCTYPE html>

<html>

<head>

    <title>Suplier Home page  </title>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
 <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/tasks.js')}}"></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>
<body>

    
@extends('layouts.backend')

@section('content')

    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Suplier's Home Page</div>
 
  
  

<div class="row">
<div class="col-sm-12">


  <table class="table table-hover">
    <thead>
        <tr>
          <th>Sellers's Name</th>
          <th>Sellerss VAT/PAN NO</th>
          <th>Address</th>
          <th colspan = 3>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($supliers as $suplier)
        <tr>
            <td>{{$suplier->sellers_name}}</td>
            <td>{{$suplier->sellers_vatpan}}</td>
            <td>{{$suplier->address}}</td>

           <td>
                <a href="{{ route('particulars.create',$suplier->id)}}" class="btn btn-primary">Add The Particulars </a>
            </td>
 





             <td>
             <a onclick="event.preventDefault();editTaskForm ({{$suplier->id}});" href="#" class="edit-modal btn btn-info" data-toggle="modal" value="{{$suplier->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                           </td>
                   </div></div></div></div> 
                    <td>
                    <form action="{{ route('supliers.destroy', $suplier->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button></form>
                                      
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>




   
</div>
</div></div>


</div>
</div>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
<p></p>

</div>
@endsection

</body></html>





