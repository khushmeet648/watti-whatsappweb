<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Notifications</title>
</head>
@include('layouts.header')
@include('layouts.settingssidebar')
<body>
<form action="{{route('importexport')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
           
  <div class="container-fluid">
                
  <div class="row ms-5">
               <div class="col d-flex justify-content-end">
               <label class="mt-5">Desktop notifications</label>
              
               <label class="mt-5" >Sound notifications</label>
               </div>
                
    
               <div class="col d-flex justify-content-end">
               <label class="mt-5">Desktop notifications</label>
               <label class="mt-5" >Sound notifications</label>
               </div>
  </div>

  <div class="row mt-4">
          <div class="col">
          <label>New Chat Notification</label>
          <input type="checkbox">
          <input type="checkbox">
          <p>When a new chat is initiated</p>

          <label>New Message Notification</label>
          <input type="checkbox">
          <input type="checkbox">
          <p>When a new message is received</p>

          <label>New chat assigned Notification</label>
           <input type="checkbox">
          <input type="checkbox">
          <p>When a new chat is assigned to agent</p>
        </div>

        <div class="col">
          <label>New Message on assigned chat</label>
          <p>When a new message is received on an assigned chat</p>

          <label>New Chat assigned to team</label>
          <p>When a new chat is assigned to your team</p>

        </div>
  </div>  
  
  <hr>

  <p class="text-warning">*For desktop notification to work, notification must be turned on from browser settings</p>
  <div class="float-right">
    <a href="" class="btn btn-outline-success">Cancel</a>
    <a href="" class="btn btn-success">Save</a>
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