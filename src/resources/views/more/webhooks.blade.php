<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webhooks</title>
</head>
@include('layouts.header')
<body class="sidebar-collapse">
<form action="">
<div class="wrapper">

<div class="content-wrapper">

<!-- header -->

<div class="content-header" style="background-color:#d3d3d3;" >   
                             <h3><b>Webhooks</b></h3> 
                            <p class="col-6">You can add a webhook to receive event callbacks for events such as new message received, when a message is read, etc.</p>
                    <div class="float-right">
                            <a href="{{route('logs')}}" class="btn btn-outline-success">logs</a>
                    </div>
                            <a href="" class="btn btn-success me-3">Learn More</a>
                            <a href="" class=""> <i class="fa fa-play  " aria-hidden="true"></i>  Watch Tutorial</a> 
                    
</div>
<!-- header ends -->

<div>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th>Url</th>
                            <th>Status</th>
                            <th>Event Types</th>
                            <th>Created</th>
                            <th>Last Updated</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                        
                        
                        </tr>
                    </thead>
                </table>
                
              <div class="d-flex justify-content-center">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSChE0cO2l-3y-SfaaMASaFZqKgHz3COnfU8A&usqp=CAU" alt=""><br>
               </div> 

               <div class="d-flex justify-content-center">
               <label><i>No webhooks added</i></label>
               </div> 
               
               <div class="d-flex justify-content-center">
               <h5><i>
                You can add a webhook to receive event callbacks for events such as new message received.
               </i></h5>
               </div>
               
               <div class="d-flex justify-content-center mt-5">
               <button class="btn btn-success"> Add webhook</button>
               </div>
               
               
              
</div>


</div>
</div>
</form>
@include('layouts.footer')
</body>
</html>