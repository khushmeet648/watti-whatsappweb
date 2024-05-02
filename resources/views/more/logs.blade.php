<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebhooksLogs</title>
</head>
@include('layouts.header')
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style> 
		label{margin-left: 20px;} 
		#datepicker{width:180px;} 
		#datepicker > span:hover{cursor: pointer;} 

        
		#datepicker1{width:180px;} 
		#datepicker1 > span:hover{cursor: pointer;} 
	</style> 
<body class="sidebar-collapse">
<form action="">
<div class="wrapper">

<div class="content-wrapper">
    
        <!-- header -->

        <div class="content-header" style="background-color:#d3d3d3;" > 
                <div class="col row"> 
                <div class="col-auto">
                            <a href="{{route('webhooks')}}"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </div>

                        <div class="col-auto">
                        <h3><b>Logs</b></h3> 
                        </div>


                        <div class="col-auto">
                                    <div class="card ">
                                            <div class="card-body"> 
                                            <label class="ml-0">From</label> 
                                                <div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
                                                <input class="form-control " type="text" name=""  placeholder="From Date" readonly/> 
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"  value="Requestdate"></i></span> 
                                                </div>
                                            </div>
                                    </div>
                        </div>
            
                        <div class="col-auto">
                                    <div class="card ">
                                            <div class="card-body"> 
                                            <label class="ml-0">To</label> 
                                                <div id="datepicker1" class="input-group date" data-date-format="yyyy-mm-dd">
                                                <input class="form-control " type="text" name=""  placeholder="To Date" readonly> 
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"  value="Requestdate"></i></span> 
                                                </div>
                                            </div>
                                        </div>

                            </div>


                            <div class="col-auto">
                                    <a class="btn btn-success"  data-toggle="modal"  data-target="#filter" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3
                                     40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 
                                     0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 
                                     0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0
                                      64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg></a>
                          </div>

                </div>                    
        </div>
        <!-- header ends -->


        <div class="mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Url</th>
                        <th>EventType</th>
                        <th>Status Code</th>
                        <th>Last Updated</th>
                        <th>Retries Count</th>
                    </tr>
                </thead>
            </table>
        </div>
</div>
</div>
</form>
 <!-- Modal fallback -->
 <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="filterTitle"><b>Attributes</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">        
                        <p>Choose attributes to filter</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Message Recieved</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">New Contact Message</p>
                        <p><input class="form-check-input" type="checkbox" value="" id=""> Session Message Sent</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Template Message Sent</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Sent Message is DELIVERED</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Sent Message is READ</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Sent Message is REPLIED</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Template Message Sent v2</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Sent Message is DELIVERED v2</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Sent Message is READ v2</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Sent Message is REPLIED v2</p>
                        <p><input class="form-check-input" type="checkbox" value="" id="">Payment Captured</p>

                        
                        </div>
                        <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-success">Save</button>
                        </div>
                        </div>
                        </div>           
    </div>
        <!-- Modal -->
@include('layouts.footer')
</body>
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