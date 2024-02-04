@extends('frontend.layouts.app')
@section('content')
    <!-- BreadCrumb Starts -->  
<section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center pt-14 pb-2">
                <h5 class="theme mb-0">Eventiz</h5>
                <h1 class="mb-0 white">User Review</h1>
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
                <h3 class="h-title">Review</h3>
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
            <div class="contact-info">
                
                <div class="contact-info-content row mb-5">
                    <div class="card-group">
                        <div class="card">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                </div>
                <div id="contact-form1" class="contact-form">
                    <div class="row">
                        <div class="col-lg-8 pe-lg-4 mb-4">
                            
                            <div id="contactform-error-msg"></div>

                            <form method="post" action="{{route('userreview.store')}}" name="contactform2" id="contactform2">
                                @csrf
                                <div class="form-group mb-2">
                                    <input type="text" name="review_title" class="form-control" id="review" placeholder="Review-Title">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="descripation"  class="form-control" id="desc" placeholder="Description">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="occupation" class="form-control" id="occupation" placeholder="consumer occupation">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Give Start Rating</label><br>
                                    One Star<input type="radio" value="1" name="rating" class="" id="radio" value="1" placeholder="subject"><br>
                                    Two Star<input type="radio" value="1" name="rating" class="" id="radio" value="2" placeholder="subject"><br>
                                    Three Star<input type="radio" value="3" name="rating" class="" id="radio" placeholder="subject"><br>
                                    Four Star<input type="radio" value="1" name="rating" class="" id="radio" value="4" placeholder="subject"><br>
                                    Five Star<input type="radio" name="rating" class="" id="radio" value="5" placeholder="subject"><br>
                                </div>
                               
                                <div class="comment-btn text-center text-lg-start">
                                    <input type="submit" class="nir-btn" id="submit2" value="Send Message">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 ps-lg-4 mb-4">
                            <div class="map">
                                <div style="width: 100%">
                                    <iframe height="500" style="filter: grayscale(1);" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact Ends -->
@endsection