<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyword Action</title>
    <style>
      .content3{
        display:none;
      }

      #key {
        border-style: dotted;
        border-color:green;
      }
    </style>
</head>
@include('layouts.header')
@include('layouts.triggersidebar')
<body>
<form action=""></form>

<div class="wrapper">

  <div class="content-wrapper">
        <div class="my-4 ms-4">
         <a href="{{route('keyword')}}" class=""><i class="fas fa-arrow-left"></i> Back</a>
         </div>
     
       <div class="my-4">
  
                <div class="row container">
                <div class="col-1">
                Keyword(s):
                </div>
                <div class="col-1">
                #534543
                </div>
                <div class="col-2 text-success" id="key" data-toggle="modal"  data-target="#key1">
                Add Keyword
                <i class="fas fa-plus ms-5 "></i>
                </div>

            </div>
       </div>

       <div class="row container">
                <div class="col">
                    Message matching methods:
                </div>
                <div class="col row">
                        <div class="form-check col">
                        <input class="form-check-input" type="radio" name="1" id="" onclick= "showcontent('Fuzzy')">
                        <label class="form-check-label">
                            Fuzzy matching
                        </label>
                        </div>
                        <div class="form-check col">
                        <input class="form-check-input" type="radio" name="1" id="" onclick= "showcontent('Exact')">
                        <label class="form-check-label" >
                        Exact matching
                        </label>
                        </div>
                        <div class="form-check col">
                        <input class="form-check-input" type="radio" name="1" id="" onclick= "showcontent('Exact')">
                        <label class="form-check-label" >
                        Contains
                        </label>
                        </div>
                </div>

                <div id="Fuzzy" class="content3">
                    <br>  
                    <div>
                   <div class="col row">
                    <div class="col-1">0%</div>
                    <input type="range" class="form-range  bg-success col" id="customRange1">
                    <div class="col">100%</div>
                    </div>
                    <div class="mt-4">
                      <button class="btn btn-success"> Next step </button>
                      <button class="btn btn-secondary"> Save changes</button>
                      </div> 
                    </div>
					      </div>

                <div id="Exact" class="content3">
						          <br>  
                      <div class="mt-4">
                      <button class="btn btn-success"> Next step </button>
                      <button class="btn btn-secondary"> Save changes</button>
                      </div>
	              </div>
            </div>
  </div>
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->

<!-- Modal keyword -->

<div class="modal fade" id="key1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title" id="sequence1"><b>Add Keyword</b></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">        
                        <input type="text" class= "form-control" placeholder="Please input a keywords" name="name">
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary">Add</button>
                        </div>
                        </div>
                        </div>
                        </div>

        <!-- Modal -->

</form> 
</body>
@include('layouts.footer')
</html>
<script>
  function showcontent(id){
     var content= document.querySelectorAll('.content3');
     content.forEach(function(div){
				div.style.display = 'none';
			});

      var selectedDiv = document.getElementById(id);
			if (selectedDiv) {
				selectedDiv.style.display = 'block';
			}
  }
</script>