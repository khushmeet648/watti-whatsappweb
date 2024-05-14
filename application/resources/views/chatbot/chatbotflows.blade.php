<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Flows</title>
</head>

@include('layouts.header')
@include('layouts.chatbotsidebar')
<body>
<form action="{{route('scheduledbroadcast')}}">
<div class="wrapper">

<div class="content-wrapper">

    <div class="content-header mb-5 row" style="background-color: #d3d3d3;"> 
                        <div class="row ">
                                <div class="col-auto">
                                        <h3 >Chatbotflows </h3> 
                                </div>
                                <div class="col-auto mt-1">
                                        <p >(50/50)</p>
                                        
                                </div>
                        
                                <div class="col-auto">
                                <input class="form-control" type="search" placeholder="Search">
                                </div>
                        
                           
                        <div class="col">
                                <div class="float-right ">
                                        <a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
                                        <a href="" class="btn btn-outline-success"  data-toggle="modal"  data-target="#fallback">Fallback Message</a>
                                        <a href="" class="btn btn-outline-success"  data-toggle="modal"  data-target="#exampleModalCenter1"> Chatbot Timer</a>
                                        <a href="" class="btn btn-success">Add Chatbot</a>
                                
                                </div>
                        </div>       
                        </div>  
       </div>
       
       <table class="table mt-5">
                <thead>
                        <tr>
                        <th>Name</th>
                        <th>Triggered</th>
                        <th>Steps Finished</th>
                        <th> Finished</th>
                        <th>Modified on</th>
                        <th>Actions</th>
                        
                </tr>
                </thead>

                <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        <a href="" class="btn btn-outline-secondary"><i class="fas fa-copy"></i></a>
                        <a href="" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a>
                        </td>
                        
                </tr>
        </table>
         
       <!-- Modal fallback -->
       <div class="modal fade" id="fallback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLongTitle">Fallback message</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <input type="checkbox" class="check">  
                                <label>Enable Fallback Message</label> 
                            
                                <p class="msg1">Set fallback message if no keyword is matched in the chatbot: 
                                        <textarea name="" id="" cols="55" rows="5"></textarea>
                                        Fallback message will be triggered up to 
                                        <select name="" id="">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option></select> times before chatbot ends.
                                </p>
                         
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                        </div>
                        </div>
                        </div>
        <!-- Modal -->   
         <!-- Modal chatbot-->
       <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLongTitle">Chatbot Timer Settings</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                                <h6>If user does not reply more than 10 minutes, the chatbot will end automatically.</h6> </p>

                               <p><input type="checkbox" class="check1"> Enable exit chatbot notification
                               <p class="enable">Exit Chatbot Notification:
                               <textarea name="" id="" cols="60" rows="5" placeholder="write a message"></textarea>
                               This exit chatbot notification will show minutes before the chatbot ends.
                               </p>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save changes</button>
                        </div>
                        </div>
                        </div>
        </div>
        <!-- Modal -->   
</div>
</div>
</form>
@include('layouts.footer')  
</body>
</html>
<script>
        $().ready(function(){
        $(".msg1").hide();
                $(".check").click(function() {
                if($(this).is(":checked")) {
                        $(".msg1").show(300);
                } else {
                        $(".msg1").hide(200);
                }
                });
})

$().ready(function(){
        $(".enable").hide();
                $(".check1").click(function() {
                if($(this).is(":checked")) {
                        $(".enable").show(300);
                } else {
                        $(".enable").hide(200);
                }
                });
})
</script>
