<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Profile</title>
    <script>
         var msg = '{{Session::get('success')}}';
        var exist = '{{Session::has('success')}}';
        if(exist){
        alert(msg);
        }

    </script>
</head>
@include('layouts.header')
@include('layouts.settingssidebar')

<body>
<form action="{{route('profile.post')}}" method="POST" enctype="multipart/form-data">
@csrf


<div class="wrapper">

  <div class="content-wrapper">
            <div class="container">
                <label class="mt-5">Profile Picture</label>
                <br>
                <br>
                <img src="{{asset('dist/img/avatar.png')}}" alt="" width="200" height="200">
                <input type="file" name="image" class="form-control mt-4" >
                <!-- <a href="" id="upload_link" class="btn btn-outline-success col-auto my-3">Upload Profile Picture</a> -->
                

                <div class="row my-4">
                    <div class="col">
                    <label> Phone Number</label>
                    <input type="text" class="form-control" name="number" placeholder="+14798024855">
                    </div>

                    <div class="col">
                    <label> About</label>
                    <input type="text" class="form-control" name="about" value="WATI.io - WhatsApp Official API Partner">
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                    <label> Business address</label>
                    <input type="text" class="form-control" name="address">
                    </div>

                    <div class="col">
                    <label> Business description</label>
                    <input type="text" class="form-control" value="WATI Trial Sandbox" name="description">
                    </div>
                </div>

                <div class="row my-4" >
                    <div class="col">
                    <label> Email for business contact</label>
                    <input type="text" class="form-control" value="support@wati.io" name="email">
                    </div>

                    <div class="col">
                    <label> Business industry</label>
                    <select name="industry" id=""  class="form-control">
                        <option value="Automative">Automative</option>
                        <option value="Beauty,Spa and Salon">Beauty,Spa and Salon</option>
                        <option value="Clothing and Apparel">Clothing and Apparel</option>
                        <option value="Education">Education</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Finance and Banking">Finance and Banking</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Medical an Health">Medical an Health</option>
                        <option value="Professional Services" selected>Professional Services</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Other">Other</option>

                    </select>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                    <label> Business website 1</label>
                    <input type="text" class="form-control" value="https://wati.io" name="web1">
                    </div>

                    <div class="col">
                    <label> Business website 2</label>
                    <input type="text" class="form-control" value="https://wati.com"  name="web2">
                    </div>
                </div>

                <div class="float-right mt-4">
                    <a href="" class="btn btn-outline-success">Cancel</a>
                    <button type="submit"  class="btn btn-success">Save</button>
                </div>
    </div>
  <!-- /.content-wrapper -->
  
  </div>
<!-- ./wrapper -->

  
       

</form>
</body>
@include('layouts.footer')
</html>

