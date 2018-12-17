@extends('front.layouts.app')

@section('page_title')
Home
@endsection
@section('after_css')
<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
<link rel="stylesheet" type="text/css" href="{{ Request::root() }}/front/engine0/style.css" />
<script type="text/javascript" src="{{ Request::root() }}/front/engine0/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
@endsection

@section('content')
<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container0">
    <div class="ws_images">
        <ul>
            @foreach($sliders as $slider)
                <li><a href="#" title="1"><span><img src="{{ Request::root() }}/sliders/{{ $slider->image }}" alt="1"/>{{ $slider->title }}</span></a></li>
            @endforeach
        </ul>
    </div>
    <div class="ws_bullets">
        <div>
            @foreach($sliders as $slider)
            <a href="#" title="1"><span><img src="{{ Request::root() }}/sliders/{{ $slider->image }}" alt="1"/>{{ $slider->title }}</span></a>
            @endforeach
        </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%">
        <a href="http://wowslider.net">slider html</a> by WOWSlider.com v8.8
    </div>
    <div class="ws_shadow"></div>
</div>
<!-- End WOWSlider.com BODY section -->
<!-- start home -->
<div class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="home-text wow slideInLeft"data-wow-duration="2s" data-wow-offset="300">
                    <h6 class="title text-uppercase">Stunning Visuals</h6>
                    <br><br>
                    <p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola</p><br>
                    <button >Read More</button>
                </div>
            </div>
            <div class="col-md-4 wow fadeInup"data-wow-duration="2s" data-wow-offset="300">
                <div class="home-text ">
                    <h6 class="title text-uppercase">Clean Code</h6>
                    <br><br>
                    <p>Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by uninstall utility </p><br>
                    <button>Read More</button>
                </div>
            </div>
            <div class="col-md-4 wow slideInRight"data-wow-duration="2s" data-wow-offset="300">
                <div class="home-text">
                    <h6 class="title text-uppercase">Punctuality</h6>
                    <br><br>
                    <p>If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that nice </p><br>
                    <button>Read More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End home -->
<!-- start services -->
<div class="services">
    <div class="container">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <div class="service-head  text-center wow bounceIn"data-wow-duration="2s" data-wow-offset="300">
                    <h3>Our Offered Services</h3>
                    <h6>Re-imagining the way</h6><br><br>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 wow slideInLeft"data-wow-duration="2s" data-wow-offset="300">
                <div class="service-img">
                    <img src="{{ Request::root() }}/front/images/about.jpg"width="100%"height="350px">

                    <div class="ser-back">
                        <div class="ser-back-text">Get Started</div>
                    </div>

                </div>


            </div>
            <div class="col-md-4 wow fadeInUp"data-wow-duration="2s" data-wow-offset="300">
                <div class="service-img">
                    <img src="{{ Request::root() }}/front/images/image_1.jpg"width="100%"height="350px">
                    <div class="ser-back">
                        <div class="ser-back-text">Get Started</div>
                    </div>

                </div>

            </div>
            <div class="col-md-4 wow slideInRight"data-wow-duration="2s" data-wow-offset="300">
                <div class="service-img">
                    <img src="{{ Request::root() }}/front/images/image_3.jpg"width="100%"height="350px">
                    <div class="ser-back">
                        <div class="ser-back-text">Get Started</div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
<!-- end services -->
<!-- start looking-->
<div class="looking">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="looking-text">
                    <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                    <h6 class="wow fadeInUp" data-wow-delay="400ms">Suspendisse dictum enim sit amet libero malesuada feugiat.</h6><br>

                    <button class="text-center wow fadeInUp" data-wow-delay="500ms">Search</button>

                </div>
            </div>
        </div>

    </div>
</div>
<!--    end looking-->
<!-- start gallery -->
<div class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="gal-head text-center wow bounceIn"data-wow-duration="2s" data-wow-offset="300">
                    <h3>Our Amazing Photos</h3>
                    <h6>Re-imagining the way</h6><br><br>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 wow slideInLeft"data-wow-duration="2s" data-wow-offset="300">
                <div class="gal-img">


                </div>

            </div>
            <div class="col-md-4 wow wobble"data-wow-duration="2s" data-wow-offset="300">
                <div class="gal-img3">


                </div>
            </div>
            <div class="col-md-4 wow slideInRight"data-wow-duration="2s" data-wow-offset="300">
                <div class="gal-img2">


                </div>
            </div>
        </div>
    </div>
</div>
<!-- start tour -->
<div class="tour-wrap">
    <a href="#" class="tour-entry animate-box wow slideInLeft"data-wow-duration="2.9s" data-wow-offset="300">
        <div class="tour-img" style="background-image: url({{ Request::root() }}/front/images/tour-5.jpg);">
        </div>
        <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Greece</h2>
						<span class="city">Athens, Greece</span>
						<span class="price">$450</span>
				</span>
    </a>
    <a href="#" class="tour-entry animate-box wow slideInLeft"data-wow-duration="2.6s" data-wow-offset="300">
        <div class="tour-img" style="background-image: url({{ Request::root() }}/front/images/tour-6.jpg);">
        </div>
        <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Turky</h2>
						<span class="city">Istanbul, Turkey</span>
						<span class="price">$500</span>
					</span>
    </a>
    <a href="#" class="tour-entry animate-box wow slideInLeft"data-wow-duration="2.3s" data-wow-offset="300">
        <div class="tour-img" style="background-image: url({{ Request::root() }}/front/images/tour-7.jpg);">
        </div>
        <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
							<h2>Family Tour in Egypt</h2>
						<span class="city">Cairo, Egypt</span>
						<span class="price">$450</span>
					</span>
    </a>
    <a href="#" class="tour-entry animate-box wow slideInLeft"data-wow-duration="2s" data-wow-offset="300">
        <div class="tour-img" style="background-image: url({{ Request::root() }}/front/images/tour-8.jpg);">
        </div>
        <span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Tailand</h2>
						<span class="city">Tailand, Tailand</span>
						<span class="price">$450</span>
					</span>
    </a>
    <div class="clear"></div>
</div>
<!-- end tour -->
<div class="clear"></div>
<!--    start contact-->
<div class="contact">
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="box-c wow swing"data-wow-duration="2s" data-wow-offset="300">
                        <h6 class="text-uppercase">From the part of beginning</h6><br>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and the power of globalization. Societies are becoming more inter-connected. Thoughts from different</p><br>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 wow slideInLeft"data-wow-duration="2s" data-wow-offset="300">
            <div class="contact-l">
            </div>
        </div>
        <div class="col-md-6 wow slideInRight"data-wow-duration="2s" data-wow-offset="300">
            <div class="contact-r">


            </div>
        </div>
    </div>

</div>
<!--    end contact-->
@endsection

@section('before_js')
<script type="text/javascript" src="{{ Request::root() }}/front/engine0/wowslider.js"></script>
<script type="text/javascript" src="{{ Request::root() }}/front/engine0/script.js"></script>
@endsection