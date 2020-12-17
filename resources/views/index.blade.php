@extends('layouts.applanding')

@section('title',"African Health Savers Initiative")

@section('content')
<div class="swiper-container hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide hero-content-wrap">
            <img src="images/featuremedia-bg.jpg" width="800px" height="1800px" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-12 d-flex flex-column justify-content-center align-items-start"
                            style="margin-top:100px">
                            <header class="entry-header">
                                <h1>WE NEED YOUR HELP</h1>
                                <h4>LET'S STOP THIS HUNGER AND FULLFILL THEIR HAPPINESS</h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>
                                    Let leave a tradition with a future.
                                    The tender loving care of human beings will never become obsolete.
                                    People even more than things have to be restored, renewed, revived, reclaimed and
                                    redeemed and redeemed and redeemed.
                                    Never throw out anybody.

                                    Join the cause of helping humanity with a charity heart and hand….</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <a href="#" class="btn gradient-bg mr-2 donate-btn">Donate Now</a>
                                <a href="/causes" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->

        <div class="swiper-slide hero-content-wrap">
            <img src="images/spst.jpeg" width="800px" height="1800px" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1></h1>
                                <h4></h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>COVID-19 pandemic has affected the education sector so much that both the teachers
                                    and the students are those at the receiving end</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <a href="give.html" class="btn gradient-bg mr-2 donate-btn">Donate Now</a>
                                <a href="/causes" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->

        <div class="swiper-slide hero-content-wrap">
            <img src="images/hero.jpg" width="800px" height="1800px" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Donate</h1>
                                <h4>for a better world</h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum
                                    mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <a href="#" class="btn gradient-bg mr-2 donate-btn">Donate Now</a>
                                <a href="#" class="btn orange-border">Read More</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
    </div><!-- .swiper-wrapper -->

    <div class="pagination-wrap position-absolute w-100">
        <div class="container">
            <div class="swiper-pagination"></div>
        </div><!-- .container -->
    </div><!-- .pagination-wrap -->

    <!-- Add Arrows -->
    <div class="swiper-button-next flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" />
            </svg></span>
    </div>

    <div class="swiper-button-prev flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" />
            </svg></span>
    </div>
</div><!-- .hero-slider -->

<div class="home-page-icon-boxes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box active">
                    <figure class="d-flex justify-content-center">
                        <img src="images/hands-gray.png" alt="">
                        <img src="images/hands-white.png" alt="">
                    </figure>

                    <header class="entry-header">
                        <h2 class="entry-title">We Need You!</h2>
                        <h4 class="">Become a Volunteer</h4>
                    </header>

                    <div class="entry-content">
                        <p>
                            Become a Volunteer,
                            become a part of our family. Together, we can save many lives and stop this hunger.
                            <br><br> </p>
                    </div>
                    <footer class="align-items-center" style="margin-top:10px">
                        <a href="#" class="btn orange">Apply Now</a>
                    </footer><!-- .entry-footer -->
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <img src="images/donation-gray.png" alt="">
                        <img src="images/donation-white.png" alt="">
                    </figure>

                    <header class="entry-header">
                        <h2 class="entry-title">Extend Loving hand</h2>
                        <h4 class="">Outreach & Trainings</h4>
                    </header>

                    <div class="entry-content">
                        <p>Community service gives us a valuable opportunity to extend our loving hand and teach
                            people more about humanity. </p>
                    </div>
                    <footer class="align-items-center" style="margin-top:10px">
                        <a href="/news" class="btn orange">Learn more</a>
                    </footer><!-- .entry-footer -->
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <img src="images/charity-gray.png" alt="">
                        <img src="images/charity-white.png" alt="">
                    </figure>

                    <header class="entry-header">
                        <h2 class="entry-title">Free Webinar</h2>
                        <h4 class="">Online Conference</h4>
                    </header>

                    <div class="entry-content">
                        <p>We organize a free webinar and online conference through our social media plaform, enlighten
                            people about the needfulls.</p>
                    </div>
                    <footer class="align-items-center" style="margin-top:10px">
                        <a href="/news" class="btn orange">Learn more</a>
                    </footer><!-- .entry-footer -->
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->

<div class="home-page-welcome">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="welcome-content">
                    <header class="entry-header">
                        <h2 class="entry-title" style="color: white">Welcome to our Charity</h2>
                        <h3 class="" style="color: white">Story About Us</h3>
                        <h5 class="" style="color: white"> Who are we?</h5>
                    </header><!-- .entry-header -->

                    <div class="entry-content mt-5">
                        <p>

                            We are a team of volunteers working to make societal impacts through voluntary community
                            projects poised at providing good health and wellbeing for our communities through projects
                            that put an end to hunger, poverty, improve education, ensure gender quality and empower
                            women and girls.

                            Learn More</p>
                    </div><!-- .entry-content -->

                    <div class="entry-footer mt-5">
                        <a href="/about" class="btn gradient-bg mr-2">Read More</a>
                    </div><!-- .entry-footer -->
                </div><!-- .welcome-content -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                <img src="images/welcome.jpg" alt="welcome">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->

<div class="home-page-events">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="upcoming-events">
                    <div class="section-heading">
                        <h2 class="entry-title">Upcoming Events</h2>
                    </div><!-- .section-heading -->

                    @foreach($events as $event)
                    <div class="event-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{$event->img}}" alt="">
                        </figure>

                        <div class="event-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="/event/{{$event->id}}">{{$event->title}}</a>
                                </h3>

                                <div class="posted-date">
                                    <a href="/event/{{$event->id}}">{{$event->event_date}} </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="/event/{{$event->id}}">{{$event->location}}</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">{{ substr($event->body, 0,  120) }}...</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer">
                                <a href="/event/{{$event->id}}">Read More</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-wrap -->
                    @endforeach



                </div><!-- .upcoming-events -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="featured-cause">
                    <div class="section-heading">
                        <h2 class="entry-title">Featured Cause</h2>
                    </div><!-- .section-heading -->
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class=" m-0 col-6">
                            <img src="{{$events[0]->img}}" width="100%" heigth="100%" alt="">
                        </figure>

                        <div class="cause-content-wrap col-6">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a
                                        href="/event/{{$event->id}}">{{$events[0]->title}}</a></h3>

                                <div class="posted-date">
                                    <a href="/event/{{$event->id}}">{{$events[0]->event_date}} </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="/event/{{$event->id}}">{{$events[0]->location}}</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">{{ substr($events[0]->body, 0,  120) }}...</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer mt-5">
                                <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .cause-content-wrap -->

                        <div class="fund-raised w-100">
                            <div class="featured-fund-raised-bar barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div><!-- .tipWrap -->

                                <span class="fill" data-percentage="0"></span>
                            </div><!-- .fund-raised-bar -->

                            <div
                                class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    Raised: &#x20A6;{{$events[0]->donated_amount }}
                                </div><!-- .fund-raised-total -->

                                <div class="fund-raised-goal mt-4">
                                    Goal: &#x20A6;{{$events[0]->target_amount}}
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-wrap -->

                </div><!-- .featured-cause -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-events -->

<div class="our-causes">
    <div class="container">
        <div class="row">
            <div class="coL-12">
                <div class="section-heading">
                    <h2 class="entry-title">Our Causes</h2>
                </div><!-- .section-heading -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <div class="swiper-container causes-slider">
                    <div class="swiper-wrapper">

                        @foreach($events as $event)
                        <div class="swiper-slide">
                            <div class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{$event->img}}" height="200px" alt="">

                                    <div
                                        class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <a href="#" class="btn gradient-bg mr-2 donate-btn">Donate Now</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="/event/{{$event->id}}"
                                                style="white-space:nowrap; overflow:hidden">
                                                {{explode(' ',$event->title)[0]}} {{explode(' ',$event->title)[1]}}
                                                {{explode(' ',$event->title)[2]}}...</a>
                                        </h3>

                                    </header><!-- .entry-header -->

                                    <div class=" entry-content">
                                        <p class="m-0">{{ substr($event->body, 0,  120) }}.</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-1 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="0"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div
                                            class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Raised: &#x20A6;{{$event->donated_amount }}
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                                Goal: &#x20A6;{{$event->target_amount }}
                                            </div><!-- .fund-raised-goal aget-->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->
                        @endforeach
                    </div><!-- .swiper-wrapper -->

                </div><!-- .swiper-container -->

                <!-- Add Arrows -->
                <div class="swiper-button-next flex justify-content-center align-items-center">
                    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" />
                        </svg></span>
                </div>

                <div class="swiper-button-prev flex justify-content-center align-items-center">
                    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" />
                        </svg></span>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .our-causes -->

<div class="home-page-limestone">
    <div class="container">
        <div class="row align-items-end">
            <div class="coL-12 col-lg-6">
                <div class="section-heading">
                    <h2 class="entry-title">We love to help all the children that have problems in the world. After 15
                        years we have many goals achieved.</h2>

                    <p class="mt-5">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis
                        aliquam. Lorem ipsum dolor sit amet.</p>
                </div><!-- .section-heading -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="milestones d-flex flex-wrap justify-content-between">
                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="images/teamwork.png" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="120" data-speed="2000"></div>
                                <div class="counter-k">K</div>
                            </div>

                            <h3 class="entry-title">Children helped</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->

                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="images/donation.png" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="79" data-speed="2000"></div>
                            </div>

                            <h3 class="entry-title">Water wells</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->

                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="images/dove.png" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="253" data-speed="2000"></div>
                            </div>

                            <h3 class="entry-title">Volunteeres</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->
                </div><!-- .milestones -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .our-causes -->

@include('modals.donate')
@endsection