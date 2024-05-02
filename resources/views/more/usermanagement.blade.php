<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
		.actiontaken{
			display:none;
		}
		</style>
</head>
@include('layouts.header')
<body class="sidebar-collapse">
<form action=""></form>

<div class="wrapper">
<div class="content-wrapper">
    

 <!-- Content Header (Page header) --> 
 <div class="content-header "> 
                 <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-success active">
                                    <input type="radio" name="options"  autocomplete="off" checked  onclick="showcontent('user')"> Users 
                                </label>
                                <label class="btn btn-success">
                                    <input type="radio" name="options"  autocomplete="off"  onclick="showcontent('team')"> Teams
                                </label>
</div>   

<div class="float-right">  
<a href="" > <i class="fa fa-play " aria-hidden="true"></i>  Watch Tutorial</a>
           <!-- <input  type="search" class="form-control" placeholder="Search" >  -->
           <!-- doubt in search -->
                        <!-- <a href="" class="btn btn-success">Add User</a>  -->
</div>    


</div>
 <!-- Content Header (Page header) --> 

                  
<!-- container --> 
        <div class="actiontaken mt-3" id="user">
        <div class="float-right mb-3">
            <a href="" class="btn btn-success">Add User</a> 
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Online Status</th>
                            <th>Email/Phone</th>
                            <th>Role</th>
                            <th>Teams</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="actiontaken mt-3" id="team">
                <div class="float-right mb-3">
            <a href="" class="btn btn-success">Add Team</a> 
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Team Name</th>
                            <th>Default Team <i class="fa fa-info-circle" aria-hidden="true"></i></th>
                            <th>Team Size</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>

<!-- container -->

</div>
     <!-- /.content-wrapper --> 
    </div>
     <!-- /.wrapper --> 
</form>
</body>

@include('layouts.footer')

</html>
<script>
		function showcontent(id) {
		
			var contentDivs = document.querySelectorAll('.actiontaken');
			contentDivs.forEach(function(div) {
				div.style.display = 'none';
			});
			
			
			var selectedDiv = document.getElementById(id);
			if (selectedDiv) {
				selectedDiv.style.display = 'block';
			}
	}
</script>