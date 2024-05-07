<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
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
    <h4 class="d-flex justify-content-center mb-5">Welcome</h4>
        <form action="{{route ('register.post')}}" method="POST" class="ms-auto me-auto mt-auto" style= "width: 500px">
             @csrf
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Full Name">
                
            </div>
            
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email">
                <input type="hidden"  name="type" value="2" >
            </div>
        
            <div class="mb-3">
            <label class="form-label">Type</label>
            <select class="form-control" name="type">
             <option value="1">Admin</option>
             <option value="2">User</option>
             </select>
             </div>
             
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

            <br>
 <hr>OR
                    <div class="mb-3">
                    <label  class="form-label">Already have an account? <a href="{{route('login.post')}}">Sign in</a></label>
                   
                </div>
        </form>
        
 </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
