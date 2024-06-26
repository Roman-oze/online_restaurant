@extends('layout._master')

@section('main_content') 
    <br>
    <br>
    <br>
    <br>
    <div class="text-center">
        <h1>Our Location <i class="fa-solid fa-location-dot text-danger"></i></h1>

    </div>
 

<div class="main">
   
    <hr>
    <br>
    <div class="row">
       
        <div class="col-md-6 p-3">
            <div class="div1">
                <h3>Our All Branch List Here</h3>
            </div>
            <div class="item">
              <div class="image">
                <img src="../Model/outlet1.jpg" class="img">
              </div>
              <div class="description">
                <p  class="pp">Amazing restaurant view near by New York</p>
                <button>View</button>
              </div>
            </div>
            <div class="item">
                <div class="image">
                   <img src="../Model/outlet2.jpeg" class="img">
                </div>
                <div class="description">
                    <p class="pp">Wonderful restaurant view near by Toronto</p>
                    <button>View</button>
                </div>
              </div>
              <div class="item">
                <div class="image">
                    <img src="../Model/outlet3.jpg" class="img">
                </div>
                <div class="description">
                    <p class="pp">Beautiful restaurant view near by Gulshan</p>
                    <button>View</button>
                </div>
              </div>
        </div>
        <div class="col-md-6 map p-3">
            <div class="div1">
                <h3>Our Map</h3>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.06792954881!2d.9035101527195818!3d23.764597991674382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9ba3d447%3A0x1babce9f1c6c95a3!2sMohammadpur%2C%20Dhaka%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1658939784814!5m2!1sen!2sus" width="100%" height="450px" style="border: 1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</div>
    <br>
  @endsection