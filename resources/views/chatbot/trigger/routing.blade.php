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
                        <a href="" class="btn btn-outline-success">Add</a>
                    </div>  
                    <div class="row mt-4">
                        <div class="col-3 ">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-green">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
                                </div>
                                </div>
                        </div>
                    </div>
        
        </div>

        <div class="tab-pane fade" id="v-pills-team" role="tabpanel" aria-labelledby="v-pills-image-tab">
                     <div class="float-right mt-4">
                        <a href="" class="btn btn-outline-success">Add</a>
                    </div>  
                     
                    <div class="row mt-4">
                        <div class="col-3 ">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-green">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    
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
</body>
@include('layouts.footer')

</html>