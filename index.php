 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->
 <title>Login</title>
<section class="login-block">
    <div class="container">
    <div class="row">
        <div class="col-md-4 login-sec">
            <h2 class="text-center">Login Now</h2>
            <form action="managing.php" method="POST" class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" name="aduser" class="form-control" placeholder="Username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" name="adpass" class="form-control" placeholder="Password">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" value="Login" class="btn btn-login float-right">Submit</button>
  </div>
  
</form>
<div class="copy-text"><i class="fa fa-heart"></i></div>
        </div>
        <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://lumiere-a.akamaihd.net/v1/images/au_movies_toystory4_hero_m_2_cb8226ff.jpeg?region=0,0,750,688" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>TOY STORE</h2>
            <p></p>
        </div>
        </div>
    </div>
</div>
</section>