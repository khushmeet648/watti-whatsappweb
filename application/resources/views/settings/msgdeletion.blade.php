<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
    #border{
        border-right: 1px solid grey;
        margin-top:20px;
       
    }

    </style> -->
</head>
@include('layouts.header')
@include('layouts.settingssidebar')
<body>
<form action="{{route('msgdeletion')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
           
  <div class="container-fluid">
            <div class="row">
                        <div class="col">
                    
                            <h5 class="mt-3 "><b> Auto-deletion settings</b></h5>
                        </div>

                        <!-- <div class="col" id="border"></div> -->

                        <div class="col">
                        <h5 class="mt-3 "><b> Manual message deletion</b></h5>
                        
                        </div>
            </div>   
                
            <div class="row">
                <div class="col">
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <p>Auto-delete all <a href="">Media</a> messages older than _______ days</p>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <p>Auto-delete all <a href="">Text</a>  messages older than _______ days</p>
                        </div>

                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <p>Auto-delete all <a href="">Contacts</a> older than _______ days</p>
                        </div>

                        <div class="float-right">
                        <a href="" class="btn btn-success">Save</a>
                        </div>
                </div>

                

                <div class="col">
               
                        <div class="row">
                        <p class="col">Find all <select name="" id="">
                            
                                <option value="Text">Text</option>
                                <option value="Media">Media</option>
                            </select> messages older than _______ days</p>
                        
                                <div class="float-right col">
                                <a href="" class="btn btn-success">Find</a>
                                </div>
                        </div>

                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                    <th>Number of Messages</th>
                                    <th>Size of Messages</th>
                                    <th>Actions</th>
                                </tr>

                                <tr>
                                    <th>0</th>
                                    <th>0</th>
                                    <th></th>
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