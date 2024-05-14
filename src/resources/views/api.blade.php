<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Docs</title>
</head>
@include('layouts.header')
<body class="sidebar-collapse">
<form action="{{route('ctwa')}}"></form>

    <div class="wrapper">
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->    
        <div class="content-header" style="background-color: #d3d3d3;"> 
                            <h3><b> WATI APIs for WhatsApp</b></h3> 
                            <div class="float-right">
                                    <a href="" class="btn btn-outline-success"  data-toggle="modal"  data-target="#authorize">Authorize</a>
                                    <a href="" class="btn btn-success">Download Postman Collection</a>
                            </div>
                            <p class="col-6">Our developer-friendly RESTful APIs are super-easy to integrate and have bearer authentication mechanism.
                                 You can integrate these APIs with your own programming languages.</p>
                    
                                 <a href="" class="btn btn-success">API Docs</a>
                                 <a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
                    
        </div>   
            <!-- /.content-header -->

<div class="container-fluid mt-2">
         <div class="row mb-4">
                    <div class="col-3"><h5><b>Access Token</b></h5></div>
                    <div class="col-3"><input type="text" class="form-control" placeholder="" ></div>
                    <div class="col"><a href="" class="btn btn-outline-success">Copy</a></div>
                    
        </div>

        <div class="row">
                    <div class="col-3"><h5><b>API Endpoint</b></h5></div>
                    <div class="col-3"><input type="text" class="form-control" placeholder=""></div>
                    <div class="col"><a href="" class="btn btn-outline-success">Copy</a></div>
                    
        </div>

</div>
          <div class="row">
                <h5><b>API</b></h5>
                <button class="btn btn-outline-warning mb-2"><a href="" class="btn btn-warning d-table">Get</a></button>
                <button class="btn btn-outline-warning mb-2"><a href="" class="btn btn-warning d-table">Get</a></button>
                <button class="btn btn-outline-warning mb-2"><a href="" class="btn btn-warning d-table">Get</a></button>
                <button class="btn btn-outline-warning mb-2"><a href="" class="btn btn-warning d-table">Get</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
          </div>  

          <div class="row mt-4">
                <h5><b>ME</b></h5>
                <button class="btn btn-outline-warning mb-2"><a href="" class="btn btn-warning d-table">Get</a></button>
                
          </div>  

          <div class="row mt-4">
                <h5><b>WHATSAPPPAYMENT</b></h5>
               
               
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-info mb-2"><a href="" class="btn btn-info d-table">Post</a></button>
                <button class="btn btn-outline-warning mb-2"><a href="" class="btn btn-warning d-table">Get</a></button>
                <button class="btn btn-outline-warning mb-2"><a href="" class="btn btn-warning d-table">Get</a></button>
                
          </div> 


         
          </div> 
       <!-- /.container-fluid -->
            
    </div>
     <!-- /.content-wrapper --> 
    </div>
     <!-- /.wrapper --> 

     <!-- Modal fallback -->
     <div class="modal fade" id="authorize" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="authorizeTitle"><b>Available authorizations</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">        
                        <p><b>Bearer (apiKey)</b></p>
                        <p>Authorized</p>
                        <input type="text" class="form-control" value=" Enter 'Bearer' [space] and then your token in the text input below. Example: 'Bearer 12345abcdef'"readonly><br>
                        <input type="text" class="form-control" value="Name: Authorization" readonly><br>
                        <input type="text" class="form-control" value="In: header" readonly><br>
                        <input type="text" class="form-control" value="Value: *****" >
                        </div>
                        <div class="modal-footer align-items-center">
                                <button type="button" class="btn btn-outline-secondary">Logout</button>
                                <button type="button" class="btn btn-outline-secondary">Close</button>
                        </div>
                        </div>
                        </div>           
    </div>
        <!-- Modal -->
</form>
</body>
@include('layouts.footer')
</html>