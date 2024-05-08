<!-- <style>
  .offcanvas{
    display:none;
  }
</style> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="dist/css/style.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li>
        <a href="{{route('inbox')}}" class="nav-link"><i class="fas fa-inbox"></i> Team Inbox</a>
      </li>
      <li>
        <a href="{{route('history')}}" class="nav-link"><i class="fas fa-broadcast-tower"></i> Broadcast</a>
      </li>
      <li>
        <a href="{{route('chatbotflows')}}" class="nav-link"><i class="fas fa-robot"></i> ChatBots</a>
      </li>
      <li>
        <a href="{{route('contact')}}" class="nav-link"><i class="fa fa-phone"></i> Contacts</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('default')}}" class="nav-link"><i class="fa fa-cogs"></i> Automations</a>
      </li>
      <li>
        <a href="{{route('inboxanalytics')}}" class="nav-link"><i class="fas fa-chart-bar"></i> Analytics</a>
      </li>
      
      <li>
        <a href="{{route('api')}}" class="nav-link"><i class="fas fa-folder"></i> API Docs</a>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link"  id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class=" fas fa-ellipsis-v" ></i> More</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{route('user')}}"><i class="fa fa-users" aria-hidden="true"></i> User Management  </a>
          <a class="dropdown-item" href="{{route('integration')}}"><i class="fa fa-link" aria-hidden="true"></i>  Integrations</a>
          <a class="dropdown-item" href="{{route('webhooks')}}"><i class="fa fa-globe" aria-hidden="true"></i>  Webhooks</a>
          <a class="dropdown-item" href="{{route('commerce')}}"><i class="fas fa-list"></i>  Commerce</a>
        </div>
      </li>


    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">

             
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    </ul>
    
    <div class="justify-content-right">
                  <button class="btn btn-outline-success rounded" type="submit">
                  Book a Demo
                  </button>
  
      <button class="btn btn-navbar" type="button">
      <i class="fas fa-bell"></i>
       </button>

      
      <a class="btn btn-navbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <i class="fas fa-user"></i></a>

          <a class="btn btn-outline-success rounded" href="{{route('login.post')}}"> Logout </a>
      </div>
  </nav>
  <!-- /.navbar -->

  <!-- modal -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
        <img src="{{asset('dist/img/avatar.png')}}" alt="" width="100" height="100">
    <div class="row">
    <h5 class="col-12"><b>{{Session::get('name')}}</b></h5>
    <br>
    <small class="col">{{Session::get('email')}}</small>
    </div>
    
      <button class="btn btn-outline-success">
            Sign Out 
      </button>
    
    <!-- <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
  </div>
  <div class="offcanvas-body">
    <div class="col row d-flex justify-content-center">
      <div class=" col-auto"> 
        <div >
          <a class="btn btn-outline-success" href="{{route('profile')}}">Settings</a>
        </div>
      </div>
      <div class="btn btn-outline-success col-auto">Copy click-to-chat link</div>
    </div>

    <div class="col row mt-4 d-flex justify-content-center">
      <div class=" col-auto"> 
       <a href=""> <i class="fas fa-info-circle" aria-hidden="true"></i> Change Info </a>
      </div>

      <div class=" col-auto">
        <a href="{{route('manage')}}"> 
             <i class="fas fa-bell" aria-hidden="true"></i> Manage notifications </a> 
      </div>

    </div>

    <div class="mt-4"><a href="{{route('switchaccount')}}" class="col btn btn-outline-warning">Manage Accounts</a></div>

    <div class="col btn btn-success mt-4">Subscription</div><hr>

    <div class="col btn btn-outline-secondary mt-4">Add Whatsapp Chat Button to your Website</div><hr>

     <label class="ml-0">Language</label>
    <select name="" id="" class="form-control">
      <option value="">English</option>
      <option value="">Portuguse</option>
      <option value="">Default</option>
      <option value="">French</option>
    </select>
    <hr>

    <div class="d-flex justify-content-center">
      <div class="me-4 "><a href="https://apps.apple.com/us/app/wati/id1507066694"><img width="40" height="40" src="data:image/png;base64,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" alt=""></a>
      <h6 class="ms-2"><a href="https://apps.apple.com/us/app/wati/id1507066694"></a>IOS</h6>  
    </div>

    <div class="">
    <a href="https://play.google.com/store/apps/details?id=com.clareai.wati"> <img width="40" height="40" 
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJtrzNIGiR7VkuOd4RU5FY7GxXGQVJ50SQmQ&usqp=CAU" alt=""></a>
   
    <h6> <a href="https://play.google.com/store/apps/details?id=com.clareai.wati&hl=en&gl=US"></a>Android</h6>
    </div>
  </div>

  </div>
</div>
 <!-- modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  var offcanvasElement = document.getElementById('offcanvasRight');
  var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
</script>