<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Panda</title>
</head>
<body>

  <!-- nav start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="logo.png" alt="" style="width: 150px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shoes</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="#">BackPack</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
    
        <button class="btn btn-outline-success" type="submit">Sing In</button>
      </form>
    </div>
  </div>
</nav>

<!-- nav end -->
  <!-- hero start -->
   <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @if (count($hero)>0)
    @foreach ($hero as $hero)
          <div class="carousel-item active">
    <div class="row row row-cols-1 row-cols-md-2 align-items-center g-3 justify-content-between">
        <div class="col">
          <div class="m-4" >
  <div class="card-body">
    <h1 class="card-title">{{ $hero->title }}</h1>
    <p class="card-text">{{ $hero->description }}</p>
    <h1 class="text-primary">${{ $hero->price }}</h1>
    <a href="#" class="btn btn-primary">BUY NOW</a>
  </div>
</div>

        </div>
        <div class="col">
          <img class="img-fluid d-none d-md-block" src="{{ url($hero->hero_image) }}" alt="" style="height: 460px;width: 431px;">
        </div>
    </div>
    </div>
    @endforeach
      
    @endif

  

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<!-- hero end -->

<!-- card strt -->

<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-5">
    <div class="col">
      <div class="card-items d-flex justify-content-between align-items-center" style="background-color: orange;width: 356px;height: 160px;padding: 5px;border-radius: 10px; ">
        <div class="titel"><H1 class="text-white">Watch</H1></div>
        <div class="img"><img src="{{ asset('image/watch.png') }}" alt=""></div>
      </div>
    </div>
      <div class="col ">
      <div class="card-items d-flex justify-content-between align-items-center" style="background-color: #DB7093;width: 356px;height: 160px;padding: 5px;border-radius: 10px; ">
        <div class="titel"><H1 class="text-white">Beg</H1></div>
        <div class="img"><img src="{{ asset('image/bag.png') }}" alt=""></div>
      </div>
    </div>
      <div class="col">
      <div class="card-items d-flex  justify-content-between align-items-center" style="background-color: #87CEFA;width: 356px;height: 160px;padding: 5px;border-radius: 10px; ">
        <div class="titel"><H1 class="text-white">Shoes</H1></div>
        <div class="img"><img src="{{asset('image/shoes.png')}}" alt=""></div>
      </div>
    </div>
    
  </div>
</div>
 <!-- card end -->

 <!-- shoes start -->

 <div class="container mt-5">
  <h1>Shoes</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('image/shoe-1.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Supply 305</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <h5>$120</h5>
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
      </div>
     
    </div>
  </div>
 <div class="col">
    <div class="card h-100">
      <img src="{{ asset('image/shoe-2.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nike 320</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <h5>$320</h5>
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
      </div>
     
    </div>
  </div>
<div class="col">
    <div class="card h-100">
      <img src="{{ asset('image/shoe-3.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Red Max</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <h5>$350</h5>
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
      </div>
     
    </div>
  </div>
</div>
 </div>
  <!-- shoes end -->
   <!-- beg start -->
     <div class="container mt-5">
  <h1>Beg</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('image/bag-1.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Red Backpack</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <h5>$125</h5>
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
      </div>
     
    </div>
  </div>
 <div class="col">
    <div class="card h-100">
      <img src="{{ asset('image/bag-2.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bule Backpack</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <h5>$350</h5>
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
      </div>
     
    </div>
  </div>
<div class="col">
    <div class="card h-100">
      <img src="{{ asset('image/bag-3.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Black Backpack</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <h5>$169</h5>
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
      </div>
     
    </div>
  </div>
</div>
 </div>
    <!-- beg end -->

    <div class="container text-center py-5">
      <h1>LET'S STAY IN TOUCH</h1>
      <p>Get updates on sales, specials and more</p>
      <a class="btn btn-danger text-uppercase fw-bold" href="#">Subscribe Now</a>
    </div>

    <footer>
      <div class="container text-center mt-5">
        <p>© Panda Commerce with Bootstrap 2025 All right reserved <span class="text-primary"> Abujor </span></p>
      </div>
    </footer>
    
</body>
</html>