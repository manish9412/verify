<!DOCTYPE html>
<html>
<head>
  <title>Header</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
  .navbar{
    background-color: #fd8200;
  }
  ul li a{
    font-size: 20px;
    font-variant-caps: petite-caps;
  }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" >
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><img src="image.png"></a>

  <div class="collapse navbar-collapse   " id="navbarToggler">
    <ul class="navbar-nav mr-3 mt-2 ml-auto mt-lg-0 ">
      <li class="nav-item active">
        <a class="nav-link text-light" href="logged.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light " href="#">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Here..." aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
</body>
</html>