<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox Analytics</title>
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
<form action="{{route('inboxanalytics')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    
    <div class="content-header ms-3"> 
                        <h4><b> Date range filter</b></h4> 
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

    

    <div class="col d-flex align-items-center">
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
</div>
<p><i>Date range cannot be changes when displaying demo data</i></p>
</div>
       <!-- /.container-fluid -->

       <div class="row content-header ms-3"> 
                <h4><b> Overview</b></h4> 
        </div>
           
           
            <div class="row mt-1 ">

          
                    
                <div class="col ">
                    <div class="card ">
                        <div class="card-body"> 
                            <h4 class=""><b>2</b> Open Ticket</h4>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        
                            <h4 class=""><b>0</b> Pending</h4>
                       
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        
                            <h4 class=""><b>99</b> Solved</h4>
                       
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        <h4 class=""><b>31</b> Solved by Bot</h4>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                    <div class="card-body"> 
                        <h4 class=""><b>31</b> Solved by User</h4>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                    <div class="card-body"> 
                        <h4 class=""><b>140</b> Expired</h4>
                    </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card" >
                    <div class="card-body"> 
                        <h4 class=""><b>127</b> Expired without User Reply</h4>
                    </div>
                    </div>
                    </div>

            </div>
   <hr>
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