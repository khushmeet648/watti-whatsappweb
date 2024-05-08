<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
   <style>
    .content{
        display:none;
    }
   </style>
</head>
@include('layouts.header')
<body class="sidebar-collapse">
<form action="{{route('default')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <h3 ><b>Contacts</b></h3>
            <div class="float-right">
            <a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
            <a href="" class="btn btn-success" >  Add Contact</a>
            </div> 
            <p class="col-5">Contact list stores the list of numbers that you've interacted with. You can even manually export or import contacts.</p>
        </div>
        <!-- /.content-header -->


        <div class="content-header"  style="background-color: #d3d3d3;">
        <div class="row mt-5">
                <div class="col row">
                <label class="col">Sorted By:</label> 
                            <select name="" id="" class="form-control col">
                                <option value="">Latest</option>
                                <option value="">Oldest </option>
                                <option value=""></option>
                            </select>
                            </div>
                <div class="col">
                <input class="form-control" type="search" placeholder="Search">
                </div>
                <div class="col">
                <a class="btn btn-success"  data-toggle="modal"  data-target="#filter4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61
             19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg></a>
                </div>

               <div class="col float-right">
               <a href="" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>Export</a>
                <a href="" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>Import</a>
                <a href="" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
               </div>
        </div>
        </div>

        <table class="table mt-5">
            <thead>
                <tr>
                    <!-- <th><input class="form-check-input" type="checkbox"></th> -->
                    <th>Basic Info</th>
                     <th>Contact Attributes</th>
                     <th>Created Date</th>
                     <th>Broadcast</th>
                     <th>SMS</th>
                     <th>Edit/Delete</th>
                </tr>
            </thead>

            <tr>
                    <!-- <td><input class="form-check-input" type="checkbox"></td> -->
                    <td>{{Session::get('name')}}</td>
                     <td></td>
                     <td>Apr-22-2024</td>
                     <td></td>
                     <td></td>
                     <td>
                    <a href="" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a>

                     </td>
                </tr>
        </table>
  <!-- /.content-wrapper -->
  
  </div>
<!-- ./wrapper -->

  <!-- Modal filter4 -->
  <div class="modal fade" id="filter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="filter1Title"><b>Filter contacts</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body"> 
                            <!-- onclick -->
                            <div class="content"  id="open">
                                                <div class="row">
                                                        <div class="col-4">
                                                        <select name="" id="" class="form-control" >
                                                            <option value="" disabled selected>Attribute</option>
                                                            <option value="">AllowBroadcast</option>
                                                            <option value="">AllowSMS</option>
                                                            <option value="">end time</option>
                                                            <option value="">shop_content</option>
                                                            <option value="">name</option>
                                                        </select>
                                                        </div>

                                                        <div class="col-4">
                                                        <select name="" id=""  class="form-control">
                                                            <option value="" disabled selected>Operation</option>
                                                            <option value="">Contains</option>
                                                            <option value="">Does not Contain</option>
                                                            <option value="">Exist</option>
                                                            <option value="">Does not exist</option>
                                                            <option value="">=</option>
                                                            <option value=""><></option>
                                                            <option value=""><</option>
                                                            <option value="">></option>
                                                            <option value="">>=</option>
                                                            <option value="">=<</option>
                                                        </select>
                                                        </div>

                                                        <div class="col-2">
                                                        <input type="text" placeholder="Value" class="form-control">
                                                        </div>

                                                        <div class="col-2">
                                                        <button class="btn btn-outline-danger"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                                        </div>
                                                </div>
                                        </div>
                                            <!--  -->       

                        <button type="button" class="btn btn-outline-success mt-4" onclick="showcontent('open')">Add New Segment +</button>
                                    
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Apply</button>
                        </div>
                        </div>
                        </div>
                        </div>
        <!-- Modal --> 
       

</form>
</body>
@include('layouts.footer')
</html>

<script>
              function showcontent(id) {
              
                var contentDivs = document.querySelectorAll('.content');
                contentDivs.forEach(function(div) {
                  div.style.display = 'none';
                });
                
                
                var selectedDiv = document.getElementById(id);
                if (selectedDiv) {
                  selectedDiv.style.display = 'block';
                }
              }
            </script>