<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="icon" href="{{url('public')}}/lpg.png" {{url('public/AssetLogin')}}  >

    <link rel="stylesheet" href="{{url('public/AssetLogin')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('public/AssetLogin')}}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('public/AssetLogin')}}/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{url('public/AssetLogin')}}/css/style.css">

    <title>LPG Tepat</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="{{url('gaskitecolor.png')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login <strong>LPG TEPAT</strong></h3>
             
            </div>
            <form action="{{url('proses')}}" method="post" >
              @csrf
              <div class="form-group first">
                <label for="username">Username/Email</label>
                <input type="text" class="form-control" name="username"  >

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password/PIN</label>
                <input type="password" class="form-control" name="password"  autocomplete="off">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="#" class="forgot-pass">Dapatkan Bantuan Lupa PIN</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

             
              
             
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{url('public/AssetLogin')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public/AssetLogin')}}/js/popper.min.js"></script>
    <script src="{{url('public/AssetLogin')}}/js/bootstrap.min.js"></script>    
    <script src="{{url('public/AssetLogin')}}/js/main.js"></script>
  </body>
</html>