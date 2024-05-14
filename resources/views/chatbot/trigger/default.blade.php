<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default Action</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>  

    <style>
        
    #brd
    {
        border-right: 1px solid #000;
    }
    </style>
</head>
@include('layouts.header')
@include('layouts.triggersidebar')

<body>
<form action="{{route('default')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
       <label class="mt-3">Check when the keyword reply does not match, according to the set working time, use the default reply.</label>
       <div class="float-right mt-3">
                        <a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
        </div> 
        </div>
        <!-- /.content-header -->
<hr>
<div class="container-fluid">
    <div class="col mb-3">
    <label class="">Current Working hours :</label>
    <a class="btn btn-success ms-3" data-toggle="modal"  data-target="#hours">set working hours</a>
    </div>
<div class="row">
<div class="col" id="brd">
            <div class="form-check my-3 ">
            <input class="form-check-input" type="checkbox" value="">
            <h5 class="form-check-label">    When it is not working hours, reply the following</h5>
            </div>
            <div class="col-4">
                    <select  name="template_name" id="inputtype" class="form-control">
                        <option value="" selected disabled>Select Material</option>
                        <option value="">Text</option>
                        <option value="">Image</option>
                        <option value="">Video</option>
                        <option value="">Chatbot</option>
                        <option value="">Sticker</option>
                        <option value="">Sequence</option>
                    </select>
            </div>

            <div class="form-check my-3 ">
            <input class="form-check-input" type="checkbox" value="">
            <h5 class="form-check-label"> When there is no customer service online during working hours, reply the following</h5>
            </div>
            <div class="col-4">
                    <select  name="template_name" id="inputtype" class="form-control">
                        <option value="" selected disabled>Select Material</option>
                        <option value="">Text</option>
                        <option value="">Image</option>
                        <option value="">Video</option>
                        <option value="">Chatbot</option>
                        <option value="">Sticker</option>
                        <option value="">Sequence</option>
                    </select>
            </div>

            <div class="form-check my-3 ">
            <input class="form-check-input" type="checkbox" value="">
            <h5 class="form-check-label"> Send the following welcome message when a new chat is started and no keyword search criteria is met</h5>
            </div>
            <div class="col-4">
                    <select  name="template_name" id="inputtype" class="form-control">
                        <option value="" selected disabled>Select Material</option>
                        <option value="">Text</option>
                        <option value="">Image</option>
                        <option value="">Video</option>
                        <option value="">Chatbot</option>
                        <option value="">Sticker</option>
                        <option value="">Sequence</option>
                    </select>
            </div>

            <div class="form-check my-3 ">
            <input class="form-check-input" type="checkbox" value="">
            <h5 class="form-check-label">Welcome
        During working hours, users wait more than __
        minutes without any reply and no keyword matched, reply the following</h5>
            </div>
            <div class="col-4">
                    <select  name="template_name" id="inputtype" class="form-control">
                        <option value="" selected disabled>Select Material</option>
                        <option value="">Text</option>
                        <option value="">Image</option>
                        <option value="">Video</option>
                        <option value="">Chatbot</option>
                        <option value="">Sticker</option>
                        <option value="">Sequence</option>
                    </select>
            </div>
            <a class="btn btn-success ms-3 mt-5">Save settings</a>
</div>

<div class="col">
        <div class="form-check my-3 ">
                    <input class="form-check-input" type="checkbox" value="">
                    <h5 class="form-check-label">Send the following fallback message if no keyword search criteria is met and no default action criteria is met</h5>
                    </div>
                    <div class="col-4">
                            <select  name="" id="inputtype" class="form-control">
                                <option value="" selected disabled>Select Material</option>
                                <option value="">Text</option>
                                <option value="">Image</option>
                                <option value="">Video</option>
                                <option value="">Chatbot</option>
                                <option value="">Sticker</option>
                                <option value="">Sequence</option>
                            </select>
            </div>

            <div class="form-check my-3 ">
                    <input class="form-check-input" type="checkbox" value="">
                    <h5 class="form-check-label">If customer does not respond and it's not SOLVED, when it almost reaches 24 hours since last message, use the following reply</h5>
                </div>
                <div class="col-4">
                            <select  name="" id="inputtype" class="form-control">
                                <option value="" selected disabled>Select Material</option>
                                <option value="">Text</option>
                                <option value="">Image</option>
                                <option value="">Video</option>
                                <option value="">Chatbot</option>
                                <option value="">Sticker</option>
                                <option value="">Sequence</option>
                            </select>
            </div>

            <div class="form-check my-3 ">
                    <input class="form-check-input" type="checkbox" value="">
                    <h5 class="form-check-label">Expired or Closed chat will not be assigned to Bot but leave the last assignee in case of new message</h5>
                </div>

                <div class="form-check my-3 ">
                    <input class="form-check-input" type="checkbox" value="">
                    <h5 class="form-check-label">During out of office, send out of office message always (even if a keyword match is found).</h5>
                </div>

                <div class="form-check my-3 ">
                    <input class="form-check-input" type="checkbox" value="" >
                    <h5 class="form-check-label">Assign newly opened chats in round robin manner within users of the assigned team</h5>
                </div>
</div>
</div>
</div>
   

 <!-- Modal working hours -->
 <div class="modal fade" id="hours" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLongTitle">Set Working Hours</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">        
                            <div class="row">
                                    <h6 class="col-3"><b>Holiday Mode: </b></h6>
                                    <p class="col-2">Off</p>
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col-1">On</p>    
                            </div>
                           <p class="text-warning"><i>(Holiday mode is on: Users will be replied with out of office hour reply.)</i></p>

                            <h6 class="mb-4"><b>Working Hours: </b> </h6>

                           


                            <div class="row">
                                    <h6 class="col-3"><b> Monday </b></h6>
                                  
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col text-success">Open</p>
                                    <input class="col mb-3" type="text" id="time" placeholder="12:00"/> 
                                    <p class="col-1">to</p>  
                                    <input class="col mb-3" type="text" id="time1" placeholder="12:00"/> 
                                    <i class="fas fa-plus col   d-flex justify-content-end" aria-hidden="true"></i>
  
                            </div>
                           
                            <div class="row">
                                    <h6 class="col-3"><b> Tuesday </b></h6>
                                  
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col text-success">Open</p>
                                    <input class="col mb-3" type="text" id="time2" placeholder="12:00"/> 
                                    <p class="col-1">to</p>  
                                    <input class="col mb-3" type="text" id="time3" placeholder="12:00"/> 
                                   <i class="fas fa-plus col  d-flex justify-content-end" aria-hidden="true"></i>   
                            </div>
                           
                            <div class="row">
                                    <h6 class="col-3"><b> Wednesday </b></h6>
                                  
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col text-success">Open</p>
                                    <input class="col mb-3" type="text" id="time5" placeholder="12:00"/> 
                                    <p class="col-1">to</p>  
                                    <input class="col mb-3" type="text" id="time6" placeholder="12:00"/> 
                                   <i class="fas fa-plus col  d-flex justify-content-end" aria-hidden="true"></i>   
                            </div>

                            <div class="row">
                                    <h6 class="col-3"><b> Thursday </b></h6>
                                  
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col text-success">Open</p>
                                 <input class="col mb-3" type="text" id="time7" placeholder="12:00"/> 
                                    <p class="col-1">to</p>  
                                <input class="col mb-3" type="text" id="time8" placeholder="12:00"/> 
                                   <i class="fas fa-plus col  d-flex justify-content-end" aria-hidden="true"></i>  
                            </div>

                            <div class="row">
                                    <h6 class="col-3"><b> Friday </b></h6>
                                  
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col text-success">Open</p>
                                    <input class="col mb-3" type="text" id="time13" placeholder="12:00"/> 
                                    <p class="col-1">to</p>  
                                    <input class="col mb-3" type="text" id="time14" placeholder="12:00"/> 
                                   <i class="fas fa-plus col  d-flex justify-content-end" aria-hidden="true"></i>
                            </div>

                            <div class="row">
                                    <h6 class="col-3"><b> Saturday </b></h6>
                                  
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col text-success">Open</p>
                                  <input class="col mb-3" type="text" id="time9" placeholder="12:00"/> 
                                    <p class="col-1">to</p>  
                                  <input class="col mb-3" type="text" id="time10" placeholder="12:00"/> 
                                   <i class="fas fa-plus col  d-flex justify-content-end" aria-hidden="true"></i>    
                            </div>

                            <div class="row">
                                    <h6 class="col-3"><b> Sunday </b></h6>
                                  
                                     <div class="form-check form-switch col-1">
                                    <input class="form-check-input " type="checkbox" role="switch" id="">
                                    </div>
                                    <p class="col text-success">Open</p>
                                    <input class="col mb-3" type="text" id="time11" placeholder="12:00"/> 
                                    <p class="col-1">to</p>  
                                   <input class="col mb-3" type="text" id="time12" placeholder="12:00"/> 
                                   <i class="fas fa-plus col d-flex justify-content-end" aria-hidden="true"></i>   
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save changes</button>
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
</body>
@include('layouts.footer')
</html>




<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>  
    $('#time').datetimepicker({  
        format: 'HH:mm'  
    });
    
    $('#time1').datetimepicker({  
        format: 'HH:mm'  
    });

   

    $('#time2').datetimepicker({  
        format: 'HH:mm'  
    });

    $('#time3').datetimepicker({  
        format: 'HH:mm'  
    });

    $('#time4').datetimepicker({  
        format: 'HH:mm'  
    });

    $('#time5').datetimepicker({  
        format: 'HH:mm'  
    });

    $('#time6').datetimepicker({  
        format: 'HH:mm'  
    });

    $('#time7').datetimepicker({  
        format: 'HH:mm'  
    });
    $('#time8').datetimepicker({  
        format: 'HH:mm'  
    });
    $('#time9').datetimepicker({  
        format: 'HH:mm'  
    });
    $('#time10').datetimepicker({  
        format: 'HH:mm'  
    });
    $('#time11').datetimepicker({  
        format: 'HH:mm'  
    });
    $('#time12').datetimepicker({  
        format: 'HH:mm'  
    });
    $('#time13').datetimepicker({  
        format: 'HH:mm'  
    });
    $('#time14').datetimepicker({  
        format: 'HH:mm'  
    });
   

</script>  