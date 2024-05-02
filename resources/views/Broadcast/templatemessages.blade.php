<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Messages</title>
</head>
<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
      alert(msg);
    }
  </script>
@include('layouts.header')
@include('layouts.broadcastsidebar')
<body>

<form action="{{route('templatemessages')}}">
<div class="wrapper">

<div class="content-wrapper">

<div class="content-header mt-3">   
            <div class="row">
                        <div class="col row">
                            <label class="col">Sorted By:</label> 
                                        <select name="" id="" class="form-control col">
                                            <option value="Latest">Latest</option>
                                            <option value="Oldest">Oldest </option>
                                            <option value=""></option>
                            </select>
                        </div>

                        <div class="col-auto">
                            <input class="form-control" type="search" placeholder="Search">
                        </div>

                    <div class="col">
                    <a class="btn btn-success" data-toggle="modal"  data-target="#filter2" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" 
                    viewBox="0 0 512 512"><path d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61
                    19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg></a>
                        
                                        <a href="" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>Export</a>
                                
                                        <a href="" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>Import</a>

                                        <div class="float-right">
                            <a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
                            <a href="" class="btn btn-success"  data-toggle="modal"  data-target="#msg">New Template Message</a>
                    
                    </div>
                    </div>
                   
            </div>
            <div class="mt-4 " style="border-radius: 85px;">
            <button class="btn btn-outline-success text-dark">All templates must adhere to WhatsApp's Template Message Guidelines.  <a href="" class="text-success"><u>Click here to read</u></a></button>
        </div>
</div>
        
<table class="table mt-5">
            <thead>
                <tr>
                <th>Template Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Language</th>
                <th>Last Updated</th>
                <th>Actions</th>
                
               </tr>
             </thead>
             <tr>
                <td>shopify_default_cod_confirm_order_v6</td>
                <td>Marketing</td>
                <td></td>
                <td>English (US)</td>
                <td>12/8/2023</td>
                <td>
                <a href="" class="btn btn-outline-secondary"><i class="fas fa-copy"></i></a>
                <a href="" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-outline-secondary"><i class="fas fa-trash" aria-hidden="true"></i></a>

                </td>
                
               </tr>
             </table>
         <!-- Modal filter1 -->
       <div class="modal fade" id="filter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                        <div class="modal-header">
                                <h6 class="modal-title" id="filter1Title"><b>Attributes</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        
                        <div class="modal-body">        
                        <p>Choose attributes to filter</p>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >DRAFT</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >PENDING</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >APPROVED</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >REJECTED</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >DELETED</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >PAUSED</p>
                        </div>

                        <div><input class="form-check-input ms-3 " type="checkbox" value="" id="">
                        <p class="ms-5" >DISABLED</p>
                        </div>
                        
                        </div>

                        <div class="modal-footer">
                                <button type="button" class="btn btn-success">Save</button>
                        </div>

                        </div>
                        </div>
            </div>
</form>
        <!-- Modal --> 
 

            


</div>
</div>
</form>
<!-- Modal new broadcast -->
<form action="{{route('template.post')}}" method="POST">
    @csrf
            <div class="modal fade" id="msg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="broadcasttitle"><b>Create Template Message</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body me-2">    

                        <div class="text-center row">
                        <p class="col">Need help getting started? Use a sample from our template gallery</p>
                        <button class="btn btn-outline-primary">Use a Sample</button>
                        <!-- <a href="" > </a> -->
                                    </div>
                       
                       

                            <div class="mt-5 col row">
                                        <div class="col">
                                        <p>Template Name</p>
                                    <input type="text" class="form-control" placeholder="Template Name" name="name">
                                        </div>

                                        <div class="col">
                                        <p>Category</p>
                                        <select id="inputtype" class="form-control" name="category">
                                        <option value="all" selected disabled>Category...</option>
                                        <option value="Authentication">Authentication</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Utility">Utility</option>
                                        </select>
                                        </div>

                                        <div class="col">
                                        <p>Language</p>
                                        <select   class="form-control" name="language">
                                            <option value="AF">Afrikaans</option>
                                            <option value="SQ">Albanian</option>
                                            <option value="AR">Arabic</option>
                                            <option value="HY">Armenian</option>
                                            <option value="EU">Basque</option>
                                            <option value="BN">Bengali</option>
                                            <option value="BG">Bulgarian</option>
                                            
                                            <option value="NL">Dutch</option>
                                            <option value="EN">English</option>
                                            <option value="ET">Estonian</option>

                                            <option value="HI">Hindi</option>
                                            <option value="HU">Hungarian</option>
                                            <option value="IS">Icelandic</option>
                                            <option value="ID">Indonesian</option>
                                            
                                            <option value="JA">Japanese</option>
                                            <option value="JW">Javanese</option>
                                            <option value="KO">Korean</option>
                                            <option value="LA">Latin</option>
                                            
                                            <option value="MI">Maori</option>
                                            <option value="MR">Marathi</option>
                                            <option value="MN">Mongolian</option>
                                            <option value="NE">Nepali</option>
                                            <option value="NO">Norwegian</option>
                                            <option value="FA">Persian</option>
                                            <option value="PL">Polish</option>
                                            <option value="PT">Portuguese</option>
                                            <option value="PA">Punjabi</option>
                                            
                                            
                                            <option value="TR">Turkish</option>
                                            <option value="UK">Ukrainian</option>
                                            <option value="UR">Urdu</option>
                                            <option value="UZ">Uzbek</option>
                                            <option value="VI">Vietnamese</option>
                                            <option value="CY">Welsh</option>
                                            <option value="XH">Xhosa</option>
                                            </select>
                                        </div>
                           </div>
<hr>
                            <div>
                               <h6><b>Broadcast title (Optional)</b></h6> 
                               <p>Highlight your brand here, use images or videos, to stand out</p>
                               <div class="col-4">
                                      
                                        <select  name="title" id="inputtype" class="form-control" >
                                        <option value="all" selected disabled>None</option>
                                        <option value="Text">Text</option>
                                        <option value="Media">Media</option>
                                        
                                        </select>
                                        </div>
                            </div>
<hr>
                            <h6><b>Body</b></h6> 
                            <p>Make your messages personal using variables like and get more replies!</p>
                            <a href="" class="btn btn-outline-success">Add Variable</a>
                         <textarea id="" cols="55" rows="5" class="form-control mt-3" name="body" placeholder="Template Message........."></textarea>
<hr>
                            <h6><b>Footer </b>(Optional)</h6>
                            <p>Footers are great to add any disclaimers or to add a thoughtful PS</p> 
                            <input type="text" class="form-control mt-3" name="footer" placeholder="Enter Text">

<hr>
                            <h6><b>Buttons </b>(Optional)</h6>
                            <p>Insert buttons so your customers can take action and engage with your message!</p> 
                            <select  name="button" id="inputtype" class="form-control col-4">
                                        <option value="all" selected disabled>None</option>
                                        <option value="Call to Action">Call to Action</option>
                                        <option value="Quick Reply">Quick Reply</option>
                                        
                                        </select>

                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-success">New Template Message</button>
                        </div>
                        </div>
                        </div>
            </div>
</form>
        <!-- Modal --> 
        @include('layouts.footer')
</body>
</html>
