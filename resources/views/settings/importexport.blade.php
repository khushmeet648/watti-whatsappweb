<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import/Export Chats</title>
    <style>
        #borders
        {
            margin-top:20px;
            margin-left:20px;
            border:2px dotted green;
            width:50%;
        }

        #border1
        {
            margin-top:30px;
            
            border:2px dotted black;
        }
    </style>
</head>
@include('layouts.header')
@include('layouts.settingssidebar')
<body>
<form action="{{route('importexport')}}"></form>

<div class="wrapper">

  <div class="content-wrapper">
           
  <div class="container-fluid">
                
                <div class="btn btn-outline-success" id="borders">
                    <div class="row">
                        <div class="col">
                                 <img  width="100" height="100" src="data:image/jpeg;base64,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" alt="">
                        </div>

                        <div class="col mt-2  ml-0">
                                <h6 ><b>To get the chat  backup file, use the extension from the link below</b></h6>
                                <a href=""><u>Available in the Chrome Web Store</u></a>
                        </div>
                    </div>
                </div>
<br>
                <div class="btn btn-outline-secondary d-flex justify-content-center" id="border1">
                    <div class="row">
                      
                            <label> Upload the chat backup(zip) here</label>
                            <div width="200" height="200">
                            <i class="fas fa-upload"  aria-hidden="true"></i>
                            </div>

                            <div>
                            <p>Drag & Drop files here</p>
                            <p>or</p>
                            <a href="" class="btn btn-success">Browse files</a>
                            </div>
                    </div>
                </div>

                <br>
                <div class="ms-3" >
                    <label>To Export chat, press button as below <a href="" class="btn btn-success">Start Export</a></label>
                </div>
                <div class="float-right">
                <a href="" class="btn btn-success">Start Import</a>
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