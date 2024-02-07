@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
<section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center pt-14 pb-2">
                <h5 class="theme mb-0">Eventiz</h5>
                <h1 class="mb-0 white"> My Bookings </h1>
            </div>
        </div>
    </div>
    <div class="bread-overlay"></div>
</section>
<!-- BreadCrumb Ends --> 

<!-- contact starts -->
<section class="contact-main pb-8" style="background-image: url({{asset('frontend/assets/images/testimonial-1.png')}});">
    <div class="container">
        <div class="contact-info-main mt-0">
            <div class="section-title mb-5 w-75 mx-auto text-center">
                <h3 class="h-title">My Booking</h3>
                <h4 class="theme">Touch WIth Us</h4>
                <div class="selector4" style="display: flex; justify-content: center;">
                    <h2 class="ah-headline mb-0">
                        <span>How Can We </span>
                        <span class="ah-words-wrapper white theme">
                        <b class="is-visible textcap">help?</b>
                        <b>help?</b>
                        </span>
                    </h2>
                </div>
            </div>
    <h1> My Bookings </h1>
    <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $item)
                        
                    <tr>
                        <th scope="row">3</th>
                        <td>{{$item['member']}}</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
         
  
           
         
            
           
             
              
                    <div class="row">
                            
                </div>



              
                       
                    </div>
                </div>
 </div>
        </div>
    </div>
</section>

@endsection