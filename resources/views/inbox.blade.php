<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Team Inbox</title>
</head>
@include('layouts.header')

<body class="sidebar-collapse"> 
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
                      <label class="card-title">Send a message</label>
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
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"  viewBox="0 0 448 512"><path d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 
                      48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z"/></svg>
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
