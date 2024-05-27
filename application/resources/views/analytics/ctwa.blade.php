<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click to whatsapp ads</title>
</head>
@include('layouts.header')
@include('layouts.analyticssidebar')
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style> 
		label{margin-left: 20px;} 
		#datepicker{width:180px;} 
		#datepicker > span:hover{cursor: pointer;} 

        
		#datepicker1{width:180px;} 
		#datepicker1 > span:hover{cursor: pointer;} 
	</style>
<body>
<form action="{{route('ctwa')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    
    <div class="content-header ms-3"> 
                        <h5><b> Date range filter</b></h5> 
    </div>   
    
        <!-- /.content-header -->

        
<div class="container-fluid mt-2">

<div class="row mt-3">

    <div class="col">
                <div class="card ">
                        <div class="card-body"> 
                        <label class="ml-0">Date picker from</label> 
                        <div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
                        <input class="form-control " type="text" name=""  placeholder="From Date" readonly/> 
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"  value="Requestdate"></i></span> 
                        </div>
                        </div>
                </div>
    </div>

    <div class="col">
                <div class="card ">
                        <div class="card-body"> 
                        <label class="ml-0">Date picker to</label> 
                        <div id="datepicker1" class="input-group date" data-date-format="yyyy-mm-dd">
                        <input class="form-control " type="text" name=""  placeholder="To Date" readonly> 
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"  value="Requestdate"></i></span> 
                        </div>
                        </div>
                    </div>
    </div>

    <div class="col  ">
        <div class="card ">
                    <div class="card-body"> 
                        <label class="ml-0">Period</label><br> 
                        <select name="" id="" class="form-control">
                            <option value="">Custom range</option>
                            <option value="">Last 7 Days</option>
                            <option value="">Last 30 Days</option>
                        </select>
                    </div>
        </div>
    </div>

    <div class="col ">
      <button class="btn btn-danger">Disconnect</button>
    </div>
    
    <div class="row d-flex align-items-end">
            <div class="col ">
                <div class="row">
                    <div class="col">
                                    <h5>Sorted by:</h5>
                    </div>
                    <div class="col">
                                    <select name="" id="" class="form-control">
                                        <option value="">Start time</option>
                                        <option value="">Click</option>
                                        <option value="">Impression</option>
                                        <option value="">Cost per result</option>
                                        <option value="">Ad spend</option>
                                        <option value="">Contacts</option>
                                    </select>
                    </div>
                </div>
            </div>
            
            <div class="col">
            <div class="row">
                    <div class="col">
                                    <h5>Ad account:</h5>
                    </div>
                    <div class="col">
                                    <select name="" id="" class="form-control">
                                        <option value="">Vaga</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        
                                    </select>
                    </div>
            </div>    
            </div>

            <div class=" col">
            <input class="form-control" type="search" placeholder="Search">
            </div>
    </div>
</div>

<div class="row mt-3">
                    <div class="col-2">
                    <div class="card">
                        <div class="card-body"> 
                        <h1>0</h1>
                           
                            <p class="card-text">Total Impressions </p>
                        </div>
                    </div>
                    </div>

                    <div class="col-2">
                    <div class="card">
                        <div class="card-body"> 
                        <h1>0</h1>
                          
                            <p class="card-text">Total Reach </p>
                        </div>
                    </div>
                    </div>

                    <div class="col-2">
                    <div class="card">
                        <div class="card-body"> 
                        <h1>0</h1>
                           
                            <p class="card-text">Total Clicks </p>
                        </div>
                    </div>
                    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Ad Name</th>
            <th>Source ID</th>
            <th>Source URL</th>
            <th>Status</th>
            <th>Start time</th>
            <th>End time</th>
            <th>Ad spend</th>
            <th>Impressions</th>
            <th>Clicks</th>
            <th>Cost per result</th>
            <th>Contacts</th>
            <th>Export</th>
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
<script> 
                        $(function () { 
                            $("#datepicker").datepicker({ 
                                autoclose: true, 
                                todayHighlight: true, 
                                todayBtn : "linked", 
                                title : "Choose" 
                            }).datepicker('update'); 
                        }); 

                        $(function () { 
                            $("#datepicker1").datepicker({ 
                                autoclose: true, 
                                todayHighlight: true, 
                                todayBtn : "linked", 
                                title : "Choose" 
                            }).datepicker('update'); 
                        }); 
</script> 
<script src= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>