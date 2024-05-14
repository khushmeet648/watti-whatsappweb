<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyword Action</title>
</head>
@include('layouts.header')
@include('layouts.triggersidebar')
<body>
<form action="{{route('keyword')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <div class="content-header"  style="background-color: #d3d3d3;">
        <div class="row ">
                <div class="col-4">
                        <h4>Add Keyword Action List</h4> 
                </div>
                <div class="col-2 align-content-center">
                        <input class="form-control" type="search" placeholder="Search">
                </div>               
           
                <div class="col mt-1">
                            <div class="float-right ">
                                    <a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
                                    <a href="" class="btn btn-success">Add Keyword action</a>
                            
                            </div>
                </div>

        </div>  
        <p><b>Note:</b> When the message matches the keyword, automatically reply</p> 
    </div>
       
        <!-- /.content-header -->

        <div class="container-fluid">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Keyword</th>
                    <th>Triggered</th>
                    <th>Matching method</th>
                    <th>Reply material</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td><a href="" class="border">#89789</a></td>
                    <td>0</td>
                    <td> Exact Matching</td>
                    <td>
                        <button class="btn btn-outline-warning">Assign to Team</button>
                        <button class="btn btn-outline-warning">ChatBots:Welcome</button>
                    </td>
                    <td>
                   <a href="{{route('keywordaction')}}" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            </thead>
        </table>

        </div>
       <!-- /.container-fluid -->
   
  </div>
  <!-- /.content-wrapper -->
  
  </div>
<!-- ./wrapper -->
</form>
</body>
@include('layouts.footer')
</html>