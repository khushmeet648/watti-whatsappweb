<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

<div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class= "alert alert-danger">{{$error}} </div>
            @endforeach
        </div>
        @endif
         
        @if(session()->has('error'))
            <div class= "alert alert-danger">{{session('error')}} </div>
        @endif

        @if(session()->has('success'))
            <div class= "alert alert-success">{{session('success')}} </div>
        @endif  

    </div>

<form action="{{route ('login.post')}}" method="POST" class="ms-auto me-auto mt-auto" style= "width: 500px">
@csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control"  name="email" placeholder="email" >
        </div>

        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        
        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Remember me</label>
        </div> -->

        <button type="submit" class="btn btn-primary">Login</button>
        <br>
<hr>OR
            <div class="mb-3">
            <label  class="form-label">Don't have an account? <a href="{{route('register.post')}}">Sign Up</a></label>
           
        </div>
</form>
</div>  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

</html>




