@extends('layout._master')


@section('main_content')
<br>
<br>
<br>
<h1 class="text-center mt-5">My Profile<i class="fa-solid fa-user img"></i>
    <div class="container mt-5">
      <div class="row ">
      
      <div class="col-md-6 p-1">
        <img src="{{asset('frontend/image/diu-3.png')}}" alt="" class="">
      </div>
      <div class="col-md-6 d-flex justify-content-center  align-items-center">
        <main class="text-start">
          <h5 class="medium-text p-1"><i class="fa-solid fa-graduation-cap "></i> Studis at Daffodil International University-ITM</h5>
          <h6 class="medium-text p-1"><i class="fa-solid fa-graduation-cap"></i> Studies at Dhanmondi Ideal College</h6>
          <h6 class="medium-text p-1"><i class="fa-solid fa-house"></i> Living in Dhaka</h6>
          <h6 class="text-muted "><i class="fa-solid fa-heart text-danger"></i> Single</h6>
                <!-- <a href="">Facebook</a>
                <a href="">Linkdin</a> -->
              <br>
              <p id="demo bg-dark">
                <button class="btn bg-success btn-md btn-outline-dark p-2">Download </button><br><br>
                <button  onclick="typeWriter()" class="touch btn bg-success btn-md btn-outline-dark p-2">Touch me</button>
              </p>  
         </main>    
      </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    
    
  @endsection