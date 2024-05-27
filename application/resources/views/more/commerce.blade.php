<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commerce</title>
    <style>
        #brd1{
            border-left: 1px solid black;
        }
        
    </style>
    <!-- <script>
$(document).ready(function(){
  $("#next").click(function(){
    $("#khu").toggle();
  });
});
</script> -->
</head>
@include('layouts.header')
@include('layouts.more.commercesidebar')
<body>
<form action="">
<div class="wrapper">

<div class="content-wrapper">

<!-- header -->

        <div class="content-header row" > 
                            <div class="col">
                                    <h3><b>Setup Whatsapp Catalog Messages</b></h3> 
                                    <p>Complete steps below to enable catalog messages</p>
                                    </div>
                                  
                                    <div class="col-4">
                                        <a href=""><i class="fa fa-play"></i> What is WhatsApp Catalog?</a>
                                        <a href="" class="btn btn-outline-success"  data-toggle="modal"  data-target="#share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                    </div>
                                  
                            
        </div>

<!-- header ends -->


<section class="row">
        <div class="nav flex-column nav-pills col-2 list-group " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active list-group-item list-group-item-action" id="v-pills-create-tab" data-bs-toggle="pill" href="#v-pills-create" role="tab" aria-controls="v-pills-create" aria-selected="true">Create Catalog</a>
            <a class="nav-link list-group-item list-group-item-action" id="v-pills-connectwhatsapp-tab" data-bs-toggle="pill" href="#v-pills-connectwhatsapp" role="tab" aria-controls="v-pills-connectwhatsapp" aria-selected="false">Connect To Whatsapp </a>
            <a class="nav-link list-group-item list-group-item-action" id="v-pills-assignpartner-tab" data-bs-toggle="pill" href="#v-pills-assignpartner" role="tab" aria-controls="v-pills-assignpartner" aria-selected="false">Assign Partner  Access</a>
            <a class="nav-link list-group-item list-group-item-action" id="v-pills-connectcatalog-tab" data-bs-toggle="pill" href="#v-pills-connectcatalog" role="tab" aria-controls="v-pills-connectcatalog" aria-selected="false">Connect Catalog</a>
        </div>

    <div class="tab-content col-8" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-create" role="tabpanel" aria-labelledby="v-pills-create-tab">
                         <h4><b>Create Catalog</b></h4>
                        <div class="col row">
                            
                        <p  class=" col-auto ">Create catalog via <a href=""> <i  class="fas fa-play"></i> Google Sheet </a></p> 
                        <p id="brd1" class="  col-auto pl-2"> Create catalog via <a href="" ><i  class="fas fa-play"></i> Shopify</a></p>
                        </div>
                    
                        <div class="class row">
                            <a href="" class="col-auto btn btn-primary">Go to Meta <i class="fas fa-arrow-right"></i></a>
                            <p class="col-auto align-items-center">(OR)</p>
                            <a href="" class="col-auto btn btn-success">Go to Shopify <i class="fas fa-arrow-right"></i></a>
                        </div>

                        <hr>
                        <div class="float-right">
                            <a href="#v-pills-connectwhatsapp" class="btn btn-primary" >Next</a>
                           
                        </div>
        </div>

        <div class="tab-pane fade" id="v-pills-connectwhatsapp" role="tabpanel" aria-labelledby="v-pills-connectwhatsapp-tab">
            
        <h4><b>Connect Catalog To Whatsapp Account</b></h4>
                            <div class="col row">   
                            <p >Follow the steps in <a href=""> <i  class="fas fa-play"></i> Video </a>on how to connect catalog to Whatsapp account.</p> 
                            </div>
                            <div class="mt-3">
                            <a href="" class="btn btn-primary">Go to Meta <i class="fas fa-arrow-right"></i></a>
                            </div>  

                        <hr>
                        <div class="float-right">
                        <a href="#v-pills-create" class="btn btn-outline-dark" >Back</a>  
                        <a href="#v-pills-assignpartner" class="btn btn-primary" >Next</a>
                        </div>
        </div>

        <div class="tab-pane fade" id="v-pills-assignpartner" role="tabpanel" aria-labelledby="v-pills-assignpartner-tab">
            
                        <h4><b>Assign WATI as Catalog Partner</b></h4>
                        <p>Follow the steps in <a href=""> <i  class="fas fa-play"></i> Video </a> to assign WATI as catalog partner</p> 
                        <p>Wati Business Manager ID (272761826427695)</p> 
                        
                            <div class="mt-3">
                            <a href="" class="btn btn-primary">Go to Meta <i class="fas fa-arrow-right"></i></a>
                            </div>  

                        <hr>
                            <div class="float-right">
                                    <a href="#v-pills-connectwhatsapp" class="btn btn-outline-dark">Back</a>  
                                    <a href="#v-pills-connectcatalog" class="btn btn-primary">Next</a>
                            </div>
        </div>

        <div class="tab-pane fade" id="v-pills-connectcatalog" role="tabpanel" aria-labelledby="v-pills-connectcatalog-tab">
            
                        <h4><b>Enter Facebook Catalog ID</b></h4>
                        <p>Copy Catalog ID from Business Settings page and paste in field below and Hit the Connect button.</p> 
                    
                            <div class="mt-3">
                                        <div class="col row">
                                            <div class="col-4"><input class="form-control" type="search" placeholder="Search"></div>
                                                <div class="col"> <a href="" class="btn btn-primary">Connect Now</a>
                                                <a href="" > <i class="fa fa-play"></i> Watch How?</a>
                                                </div>
                                            </div>  
                                    </div>
                            <hr>
                                    <div class="float-right">
                                        <a href="#v-pills-assignpartner" class="btn btn-outline-dark">Back</a>  
                                    </div>
        </div>

    </div>
    
    <div class="justify-content-end col-2 bg-light">
                        <h5><b>Frequently Asked Questions</b></h5>
                        <p>Can I send Catalog Messages using Keyword action?</p>
                        <hr>
                        <p>Can I send Catalog Messages in Automation chatbots?</p>
                        <hr>
                        <p>Is it mandatory to create a Catalog in Facebook commerce manager?</p>
                        <hr>
                        <p>Is the Catalog feature available for all WATI paid plans.</p>
                        <hr>
                        <p>Can I connect multiple Catalogs to WATI?</p>
                        </div>
</section>
</div>
   <!-- row ends -->

         

</div>
</div>

 <!-- Modal new broadcast -->
 <div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="broadcasttitle"><b>View Catalog</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body me-2">    

                            <p>Connect catalog to access the link below</p>                         
                            <p>When do you want to send it?</p>
                            <div class="d-flex justify-content-center">
                                  <a href="" class="text-success"> <i class="fas fa-sms"></i> <b>  https://wa.me/c/xxxx-xxxx-xxxx</b></a>
                            </div>
                             
                            

                            <div class="d-flex justify-content-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSChE0cO2l-3y-SfaaMASaFZqKgHz3COnfU8A&usqp=CAU" alt=""><br>
                            </div> 

                            <div class="d-flex justify-content-center">
                            <label><i>Catalog Not Connected</i></label>
                            </div> 
                            
                
                          
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Connect</button>
                        </div>
                        </div>
                        </div>
                        </div>
        <!-- Modal -->  
</form>
@include('layouts.footer')
</body>
</html>
