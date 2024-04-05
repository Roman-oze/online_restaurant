{{-- <ul>
    <li><a href="index.php">Home<i class="fa-solid fa-house homeicon"></i></a></li>
    <li><a href="../e_delish/View/feature.php">Features</a></li>
    <li><a href="../e_delish/View/service.php">Service</a></li>
    <li><a href="../e_delish/View/profile.php">Profile</a></li>
    <li><a href="../e_delish/View/checkout.php">Menu</a></li>
    <li><a href="../e_delish/View/location.php">Location</a></li>
    <li><a href="../e_delish/View/login.php">Login</a>
    <li><a href="../e_delish/View/admin.php">Dashboard</a>
 </li>
 </ul> --}}



 
    <a class="navbar-brand" href="#"><img src="{{asset('frontend/image/fire.png')}}" alt="" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}" active >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('feature')}}">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('service')}}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('menu')}}">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profile')}}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('location')}}">Location</a>
        </li>
       
    </ul>
      </div>
      <div class="icon">
        <li class="nav-item p-2">
          <a target="_blank" href="https://twitter.com/RomanIs77635801"><i class="fa-brands fa-twitter icon-item3 p-1"></i></a>
          <a target="_blank" href="https://www.facebook.com/islamfull.5"><i class="fa-brands fa-facebook icon-item3 p-1"></i></a>
          <a target="_blank" href="https://www.instagram.com/rumu303?igsh=emdtbzRmNWMweGRo&utm_source=qr"><i class="fa-brands fa-instagram icon-item3 p-1"></i></a>        
          <a target="_blank" href="https://www.linkedin.com/in/rumu-islam-97239a151/"><i class="fa-brands fa-linkedin icon-item3 p1"></i></a>        
        </li>
      </div>
      <div class="right-padd animate__animated animate__bounce animate__repeat-2">
        <a target="_blank" href="{{route('login')}}" class="touch btn btn-md btn-outline-success bg-success text-white">Login <i class="fa-solid fa-eye"></i></a>
      </div>
  
  
    