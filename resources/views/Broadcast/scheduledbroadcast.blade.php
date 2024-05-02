

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduled Broadcast</title>
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style> 

        
        #datepicker2{width:180px;} 
		#datepicker2 > span:hover{cursor: pointer;}
        
		.later{
			display:none;
		}
	</style> 
    <script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
      alert(msg);
    }
  </script>
</head>
@include('layouts.header')
@include('layouts.broadcastsidebar')
   
<body>
<form action="{{route('scheduledbroadcast')}}">
<div class="wrapper">

<div class="content-wrapper">

    <div class="content-header mb-5 row"  style="background-color: #d3d3d3;"> 
        <div class="col-6">
                    <h2>  Scheduled Broadcast</h2> 
        </div>
        <div class="col">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" >
                    </div>
                    <div class="col mt-2 text-center">
                    <h6>Messaging-Limit:- <i class="fa fa-exclamation-circle" aria-hidden="true"></i></h6> 
                    </div>
                    <div class="col">
                    <a href="" class="btn btn-success col"  data-toggle="modal"  data-target="#schedule">New Broadcast</a>
                    </div>
                
    </div>
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Broadcast name</th>
                    <th>Scheduled</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
</div>
</form>
 <!-- Modal new broadcast -->
 <form action="{{route('historypost')}}" method="POST">
 @csrf
 <div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                <input type="text" class="form-control" name="name" value="Untitled_260420241123" >
                                <p>Select template message</p>
                                    <input type="text" class="form-control"  name="template" placeholder="Template Message">

                                    

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
                                    <div class="col">
                                        <input type="search" class="form-control" placeholder="Search">
                                        </div>
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
                                    <div id="datepicker2" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input class="form-control " type="text" name=date  placeholder="From Date" readonly/> 
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"  value="Requestdate"></i></span> 
                                    </div>
                                    </div>
                            </div>
                </div>
					</div>
                        </div>
                        <div class="modal-footer">
                                <button  class="btn btn-success" type="submit">Add Broadcast</button>
                        </div>
                        </div>
                        </div>
                        </div>
</form>
        <!-- Modal -->  
@include('layouts.footer')
</body>
</html>
<script> 
                   
                        $(function () { 
                            $("#datepicker2").datepicker({ 
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