<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Team Inbox</title>
</head>
@include('layouts.header')

<body class="sidebar-collapse antialiased"> 
<form action="{{route('inbox')}}">
<div class="wrapper">

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
        
<div class="container-fluid text-center mt-5">
            <b><h2>Send your first message to check out team inbox</h2></b>
              <h6>You must send the WhatsApp Message starting with #0O5Md</h6>
          <div class="row mt-5 justify-content-center align-items-center">
                  <div class="card col-auto " style="width: 18rem;">
                  <i class="fa fa-whatsapp" style="font-size:36px"></i>
                  <div class="card-body">
                      <label class="card-title ">Send a message</label>
                      <p class="card-text">Use the below buttons to send a pre-filled WhatsApp message. You can also save +876767676767 to your contacts and send a message starting with #o099</p>
                      <a href="https://web.whatsapp.com/" class="btn btn-success "><i class="fa fa-globe" aria-hidden="true"></i> WhatsApp Web</a>
                      <a href="https://www.whatsapp.com/download" class="btn btn-success mt-3"><i class="fa fa-desktop" aria-hidden="true"></i> WhatsApp Desktop App</a>
                  </div>
                  </div>

                  <div class="col-auto">(OR)</div>

                  <div class="card col-auto " style="width: 18rem;">
                  <i class="fa fa-whatsapp" style="font-size:36px"></i>
                  <div class="card-body">
                      <label class="card-title">Scan the QR Code</label>
                      <p class="card-text">Use the phone camera to scan the below code. Tap on the link to open a pre-filled WhatsApp message. Hit "send" to kick start the trial.</p>
                     <a href="{{route('show')}}">{!! QrCode::generate('Make me into a QrCode!') !!}</a>
                  </div>
                  </div>
          </div>
</div>
      <!-- /.container -->
    </div>
    <!-- /.content-header -->

   
  </div>

  <!-- /.content-wrapper -->
  
  </div>
<!-- ./wrapper -->
</form>
</body>
@include('layouts.footer')
</html>
