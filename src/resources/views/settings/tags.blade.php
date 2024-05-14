<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags and Attributes</title>
</head>
@include('layouts.header')
@include('layouts.settingssidebar')
<body>
<form action="{{route('tags')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
           
  <div class="container-fluid mt-5">
                
                
                
                <div class="row ">
                        <label class="col-2">Contact Attributes</label>
                            <div class="col-2">
                                <input class="form-control" type="search" placeholder="Search or Add..." aria-label="Search">
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-secondary">Add Attributes</a>
                            </div>

                           
                        <label class="col-2">Tags</label>
                            <div class="col-2">
                                <input class="form-control" type="search" placeholder="Search or Add..." aria-label="Search">
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-secondary">Add Tags</a>
                            </div>
                </div>

                <div class="row mt-4">
                    <div class="col-5 ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Attribute name</th>
                                    <th>Actions</th>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                    <a href="" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-secondary"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        </div>

                           <div class="col"></div>

                        <div class="col-5">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tag name</th>
                                    <th>Actions</th>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>
                                    <a href="" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-secondary"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        </div>
                </div>

                
    </div>

                

                
    </div>
  <!-- /.content-wrapper -->
  
  </div>
<!-- ./wrapper -->

 

</form>
</body>
@include('layouts.footer')
</html>