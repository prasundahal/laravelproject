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

<!DOCTYPE html>

<html>

<head>

    <title>Laravel </title>


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

    
<div class="jumbotron text-center" style="margin-bottom:0">
 
  <h2>  Home Page</h2>
  
</div>
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
<br />  <br />
<a href="{{ route('supliers.create') }}" class="button"><span>Add Suppliers </span></button></a>
<a href="{{ route('supliers.index')}}" class="button"><span> View Supliers</span></button></a><br /><br /><br />
<a href="{{ route('supliers.part') }}" class="button"><span>Add Particular </span></button></a>
<a href="{{ route('particulars.index')}}" class="button"><span>View Particulars</span></button></a>
<br />  <br />



   
<div class="jumbotron text-center" style="margin-bottom:0">
<p></p>
</div>
</div></div>



<div class="modal fade" id="editTaskModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmEditTask">
                <div class="modal-header">
                    <h4 class="modal-title">
Edit Suplier
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
                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" >
                        <ul id="edit-task-errors">
                        </ul>
                    </div>
                    <div class="form-group">
                <label for="sellers_name">seller's Name:</label>
                <input type="text" class="form-control" name="sellers_name" id="sellers_name" value={{ $suplier->sellers_name }} />
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" id="address" value={{ $suplier->address }} />
            </div>
            <div class="form-group">
                <label for="sellers_vatpan">sellers's VAT/PAN NO:</label>
                <input type="text" class="form-control" name="sellers_vatpan" id="sellers_vatpan"value={{ $suplier->sellers_vatpan }} />
            </div>
      </div>
                <div class="modal-footer">
                    <input id="id" name="id" type="hidden" value="0">
                        <input class="btn btn-default" data-dismiss="modal" type="button" value="Cancel">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </input>
                    </input>
                </div>
            </form>
        </div>
    </div>
</div>

</body></html>
<script>
  $(document).ready(function() {
      $("#btn-info").click(function() {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: '/supliers/' + $("#frmEditTask input[name=id]").val(),
            data: {
                sellers_name: $("#frmEditTask input[name=sellers_name]").val(),
                sellers_vatpan: $("#frmEditTask input[name=sellers-vatpan]").val(),
                address: $("#frmEditTask input[name=address]").val(),
                
            },
            dataType: 'json',
            success: function(data) {
                $('#frmEditTask').trigger("reset");
                $("#frmEditTask .close").click();
                window.location.reload();
            },
            error: function(data) {
                var errors = $.parseJSON(data.responseText);
                $('#edit-task-errors').html('');
                $.each(errors.messages, function(key, value) {
                    $('#edit-task-errors').append('<li>' + value + '</li>');
                });
                $("#edit-error-bag").show();
            }
        });
    });

});


  function editTaskForm($id) {
    $.ajax({
        type: 'GET',
        url: '/supliers/' + id,
        success: function(data) {
            $("#edit-error-bag").hide();
            $("#frmEditTask input[name=sellers_name]").val(data.sellers_name);
            $("#frmEditTask input[name=address]").val(data.address); 
            $("#frmEditTask input[name=sellers_vatpan]").val(data.sellers_vatpan);
            $('#editTaskModal').modal('show');
        },
        error: function(data) {
            console.log(data);
        }
    });
}


</script>




