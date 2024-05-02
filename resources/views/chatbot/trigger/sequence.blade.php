<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequence</title>
</head>
@include('layouts.header')
@include('layouts.triggersidebar')
<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
      alert(msg);
    }
  </script>
 
<body>
<form action="{{route('sequence')}}">

<div class="wrapper">

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <div class="content-header pb-5 "  style="background-color: #d3d3d3;">
            <div class="row">

                        <div class="col ">
                              <h4>   <b>Sequences </b> </h4>
                        </div>                   
                
                        <div class="col ">
                                    <div class="float-right ">
                                            <a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
                                            <a href="" class="btn btn-success"  data-toggle="modal"  data-target="#sequence">Add Sequence</a>
                                    
                                    </div>
                        </div>

                </div>  
    </div>
        <!-- /.content-header -->

        <div class="container-fluid mt-5">
    <table class="table ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Messages</th>
                <th>Triggered</th>
                <th>Completed</th>
                <th>Edit/Delete</th>
            </tr>
        </thead>
            <tr>
                <td>Lead Follow Up Series</td>
                <td>4</td>
                <td>0</td>
                <td>0%</td>
                <td> <a href="" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a></td>
            </tr>

            <tr>
                <td>Purchase Follow Ups</td>
                <td>3</td>
                <td>0</td>
                <td>0%</td>
                <td> <a href="" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a></td>
            </tr>
    </table>
        </div>
       <!-- /.container-fluid -->
   
  </div>
  <!-- /.content-wrapper -->
  
  </div>
<!-- ./wrapper -->
</form>
 


<!-- Modal addchatbot -->
<form action="{{route('sequence.post')}}" method="POST">
@csrf
<div class="modal fade" id="sequence" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="sequence1"><b>Add New Sequence</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">        
                        <p><b>Sequence Name</b></p>
                        <input type="text" class= "form-control" placeholder="Sequence Name" name="name">
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                        </div>
                        </div>
                        </div>
</form>
        <!-- Modal -->  
</body>
@include('layouts.footer')
</html>