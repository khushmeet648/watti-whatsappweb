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
<form action="{{route('profile.post')}}" method="POST">
@csrf
<div class="wrapper">

  <div class="content-wrapper">
            <div class="container">
                <label class="mt-5 ">Profile Picture</label>
                <br>
                <img width="150" height="150" src="data:image/png;base64,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" alt="">
                <br>
                <a href="" class="btn btn-outline-success col-auto my-3">Change Profile Picture</a>
                
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

