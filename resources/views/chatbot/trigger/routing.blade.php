<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing</title>
</head>
@include('layouts.header')
@include('layouts.triggersidebar')
<body>
<form action=""></form>

<div class="wrapper">

  <div class="content-wrapper">
   
  <section class="row">
        <div class="nav flex-column nav-pills col-2 list-group " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active list-group-item list-group-item-action" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="true"><i class="fa fa-bell" aria-hidden="true"></i> Send Notification</a>
            <a class="nav-link list-group-item list-group-item-action" id="v-pills-document-user" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false"><i class="fa fa-user" aria-hidden="true"></i> Assign to User</a>
            <a class="nav-link list-group-item list-group-item-action" id="v-pills-image-team" data-toggle="pill" href="#v-pills-team" role="tab" aria-controls="v-pills-team" aria-selected="false"><i class="fa fa-users" aria-hidden="true"></i> Assign to Team</a>
        </div>

    <div class="tab-content col-9" id="v-pills-tabContent">
         <div class="tab-pane fade show active" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-text-tab">
                    <div class="float-right mt-3">
                        <a href="" class="btn btn-outline-success">Add</a>
                    </div>  
                    
        </div>

        <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-document-tab">
                      <div class="float-right mt-4">
                        <a href=""  data-toggle="modal"  data-target="#user" class="btn btn-outline-success">Add</a>
                    </div>  
                    <div class="row mt-4">
                        <div class="col-3 ">
                                <div class="card">
                                <div class="card-body">
                                    <div class="float-right">
                                    <a href="" data-toggle="modal"  data-target="#user" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                    </div>
                                    <h5 class="card-title text-green">Assign to Bot</h5>
                                    <p class="card-text mt-5">Assign to User <b>Bot</b></p>
                                    
                                    
                                </div>
                                </div>
                        </div>
                    </div>
        
        </div>

        <div class="tab-pane fade" id="v-pills-team" role="tabpanel" aria-labelledby="v-pills-image-tab">
                     <div class="float-right mt-4">
                        <a href="" data-toggle="modal" data-target="#team" class="btn btn-outline-success"> Add</a>
                    </div>  
                     
                    <div class="row mt-4">
                        <div class="col-3 ">
                                <div class="card">
                                <div class="card-body">
                                <div class="float-right">
                                    <a href="" data-toggle="modal"  data-target="#team" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a>
                                    </div>
                                    <h5 class="card-title text-green">Route to 5iI6x</h5>
                                    <p class="card-text mt-5"><i class="fas fa-user"></i> 5iI6x</p>
                                    
                                    
                                </div>
                                </div>
                        </div>
                    </div>
        </div>

       
    </div>
    
   
</section>



    </div>
  <!-- /.content-wrapper -->
  
  </div>
<!-- ./wrapper -->
</form> 

<!-- Modal user -->
<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                        <div class="modal-header">
                                <h6 class="modal-title" id="filter1Title"><b>Assign to User Material</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        
                        <div class="modal-body">        
                             <p>Material name</p>
                             <input type="text" class="mb-2 form-control">

                             <p>Selected user</p>
                            <select name="" id="" class="form-control">
                                <option value="Bot">Bot</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save</button>
                        </div>

                        </div>
                        </div>
            </div>

<!-- Modal -->

<!-- Modal team -->
<div class="modal fade" id="team" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                        <div class="modal-header">
                                <h6 class="modal-title" id="filter1Title"><b>New Routing Material</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        
                        <div class="modal-body">        
                             <p>Material name</p>
                             <input type="text" class="mb-2 form-control">

                             <p>Selected Team</p>
                            <select name="" id="" class="form-control">
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save</button>
                        </div>

                        </div>
                        </div>
            </div>

<!-- Modal -->
</body>
@include('layouts.footer')

</html>