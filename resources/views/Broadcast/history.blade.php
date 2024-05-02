<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broadcast History</title>
</head>

<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style> 
		label{margin-left: 20px;} 
		#datepicker{width:180px;} 
		#datepicker > span:hover{cursor: pointer;} 

        
		#datepicker1{width:180px;} 
		#datepicker1 > span:hover{cursor: pointer;}
        
        #datepicker3{width:180px;} 
		#datepicker3 > span:hover{cursor: pointer;}
        
		.later{
			display:none;
		}
	</style> 
    
    <!-- @if(session('success'))
	<h6 id="success-alert" class="alert alert-success d-flex justify-content-center" role="alert">{{session('success')}}</h6>
    
	@endif  -->
    <script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
      alert(msg);
    }
  </script>

@include('layouts.header')
@include('layouts.broadcastsidebar')
   
<body>
    <form action="{{route('history')}}" >

        <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <div class="content-header ms-3"> 
                        <h5><b> Date range filter</b></h5> 
                            <div class="float-right">
                                <a href="" > <i class="fa fa-play me-3" aria-hidden="true"></i>  Watch Tutorial</a>
                                <a href="" class="btn btn-success" data-toggle="modal"  data-target="#history">New Broadcast</a>
                            </div>      
                </div>
          
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

                    

        <div class="col d-flex justify-content-between align-items-center">
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

            <a href="" class="btn btn-outline-success ">Apply Now</a>
            <a href="" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>Export</a>
       </div>
                      
           
        </div>
            <!-- /.container -->
            <div class="row content-header ms-3"> 
                <h4><b> Overview</b></h4> 
            </div>
           
            <div class="row mt-3">
                <div class="col">
                    <div class="card ">
                        <div class="card-body"> 
                            <h1 class="card-title mb-5">0</h1>
                            <i class="far fa-check-circle float-right"></i>
                            <p class="card-text">Send <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        <h1 class="card-title mb-5">0</h1>
                            <i class="fas fa-check-double  float-right"></i>
                            <p class="card-text">Delivered <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        <h1 class="card-title mb-5">0</h1>
                            <i class="fa fa-eye float-right" aria-hidden="true"></i>
                            <p class="card-text">Read <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        <h1 class="card-title mb-5">0</h1>
                            <i class="fas fa-reply float-right"></i>
                            <p class="card-text">Replied <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        <h1 class="card-title mb-5">0</h1>
                            <i class="fa fa-paper-plane float-right" aria-hidden="true"></i>
                            <p class="card-text">Sending <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        <h1 class="card-title mb-5">0</h1>
                            <i class="fa fa-exclamation-triangle float-right" aria-hidden="true"></i>
                            <p class="card-text">Failed <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card" >
                        <div class="card-body"> 
                        <h1 class="card-title mb-5">0</h1>
                            <i class="fa fa-spinner float-right" aria-hidden="true"></i>
                            <p class="card-text">Processing<i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>

                    <div class="col">
                    <div class="card">
                        <div class="card-body"> 
                        <h1 class="card-title mb-5">0</h1>
                            <i class="fa fa-list float-right" aria-hidden="true"></i>
                            <p class="card-text">Queued <i class="fa fa-question-circle" aria-hidden="true"></i></p>
                        </div>
                    </div>
                    </div>
            </div>
           
            <div class="row mt-5">
            <label> Broadcast List</label> 
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
                <a class="btn btn-success" data-toggle="modal"  data-target="#filter1" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                viewBox="0 0 512 512"><path d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61
             19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg></a>
                </div>

                <div class="col">
                <button class="btn btn-success" type="submit">Updated: Just now</button>
                </div>
                </div>

                <table class="table mt-5">
            <thead>
                <tr>
                <th>Broadcast name</th>
                <th>Scheduled</th>
                <th>Successful</th>
                <th>Read</th>
                <th>Replied</th>
                <th>Recipients</th>
                <th>Failed</th>
                <th>Status</th>
                <th>Actions</th>
               </tr>
             </thead>
    
             </table>
        <div class="d-flex justify-content-center">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSChE0cO2l-3y-SfaaMASaFZqKgHz3COnfU8A&usqp=CAU" alt=""><br>
               </div> 

               <div class="d-flex justify-content-center">
               <label><i>No Broadcast added</i></label>
               </div> 
               
               <div class="d-flex justify-content-center">
               <h5><i>
               Start sending broadcast messageson WhatsApp <br> and monitor read rate, response rate etc.
               </i></h5>
               </div>
               
               <div class="d-flex justify-content-center mt-5">
               <button class="btn btn-success"> Add Broadcast</button>
               </div>               
              
        </div>

           
          
        
         <!-- Modal filter1 -->
       <div class="modal fade" id="filter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                        <div class="modal-header">
                                <h6 class="modal-title" id="filter1Title"><b>Attributes</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>

                        <div class="modal-body">        
                        <p>Choose attributes to filter</p>


                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >PENDING</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >PROCESSING</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >COMPLETED</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >STOPPED</p>
                        </div>

                        </div>

                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save</button>
                        </div>
                        </div>
                        </div>
                        </div>
        <!-- Modal --> 
        
      
      
            </div>
         <!-- /.content-wrapper -->
    
             </div> 
 <!-- ./wrapper -->
        </form>

       <!-- Modal new broadcast -->
       <form action="{{route('historypost')}}" method="POST">
       @csrf
       <div class="modal fade" id="history" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="broadcasttitle"><b>New Broadcast</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body me-2">    

                        <p><b>What message do you want to send?</b></p>
                        <p>Add broadcast name and template below</p>
                            <div>
                                <p class="mt-3">Broadcast name</p>
                                <input type="text" class="form-control" value="Untitled_260420241123" name="name">
                                <p>Select template message</p>
                                    <input type="text" class="form-control" placeholder="Template Message"  name="template">

                                    

                            </div>

                            <div class="mt-3">
                            <div class="float-right">
                                            <button class="btn btn-outline-success">Import Contacts</button>
                                    </div>
                            <p><b>Who do you want to send it to?</b></p>
                       
                           <p>Select contacts below or<a href="" class="text-primary"> <u>Download sample format for contact upload</u></a></p>

                           </div>
                            <div>
                                 <div class="row mx-3 mt-4">
                                    <div class="col"><input type="search" class="form-control" placeholder="Search"> </div>
                                    <div class="col">
                                    <a href="" class="btn btn-outline-success"><i class="fas fa-filter"></i></a>
                                    
                                </div>

                                    <p>Selected : 0 contact</p>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Allow Broadcast</th>
                                            </tr>
                                        </thead>
                                    </table>
                                 </div>
                            </div>

                            <p>When do you want to send it?</p>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="same"  onclick="showcontent('')" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Send now
                                    </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="same"  onclick="showcontent('later')">
                                <label class="form-check-label" for="flexRadioDefault2">
                                Schedule for a specific time
                                </label>
                                </div>

                            <div id="later" class="later">

                            <div class="col">
                            <div class="card ">
                                    <div class="card-body"> 
                                    <label class="ml-0">Date</label> 
                                    <div id="datepicker3" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input class="form-control " type="text" name="date"  placeholder="From Date" readonly/> 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"  value="Requestdate"></i></span> 
                                    </div>
                                    </div>
                            </div>
                </div>
					</div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Add Broadcast</button>
                        </div>
                        </div>
                        </div>
                        </div>
        </form>
        <!-- Modal -->
        
       
        </body>

</html>
@include('layouts.footer')
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

                        $(function () { 
                            $("#datepicker3").datepicker({ 
                                autoclose: true, 
                                todayHighlight: true, 
                                todayBtn : "linked", 
                                title : "Choose" 
                            }).datepicker('update'); 
                        }); 

                        
</script> 
<script src= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
		function showcontent(id) {
		
			var contentDivs = document.querySelectorAll('.later');
			contentDivs.forEach(function(div) {
				div.style.display = 'none';
			});
			
			
			var selectedDiv = document.getElementById(id);
			if (selectedDiv) {
				selectedDiv.style.display = 'block';
			}
	}
</script>