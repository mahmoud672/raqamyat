@extends('website.layouts.layouts')
@section('title', 'home'))

@section('content')
    <section class="slider" style="background-image: url({{asset("web/images/home/slider.png")}})">

        <div class="container">
            <div class="navbar navbar-header">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <!--<a class="navbar-brand" href="#">Navbar</a>-->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Media</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="transparent-navbar-logo">
                    <!--<img src="images/logo/logo11.png" style="width:100px" alt="">-->
                    <p>raqamyat</p>
                </div>

                <div class="contact-us">
                    <button class="btn btn-primary bordered-div">contact us</button>
                </div>
            </div>

        </div>

        <div class="slider-content">
            <div class="slider-content-head">
                <h1>welcome to raqamyat</h1>
            </div>

            <div class="slider-content-body">
                <p>
                    we dig deep into a brand's essence and values, clearly understand them, then inject them into the design.
                </p>
            </div>

            <div class="slider-content-buttons">
                <button class="btn btn-primary">
                    <span>know more</span>
                    <i >
                        <svg style="width:15px;height:15px;margin-top:5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </i>
                </button>
            </div>



        </div>


    </section>

    <div class="parallax-section about-sec bg-white">
        <div class="container ">

            <section class="sec-container">
                <div class="row">
                    <div class="about-us-image">
                        <img src="images/home/about-us.png" alt="">
                    </div>
                    <div class="about-us bordered-div">
                        <div class="sec-head ">
                            <h4>
                                about the company.
                            </h4>
                        </div>
                        <div class="sec-body sec-body-about">
                            <p>
                                Established in Riyadh by a group of elite marketing & creative professionals, carrying all-around knowledge and
                                extensive experience on 360 integrated creative solutions, indluding but not limited to
                                Marketing / Event Management / Social Media / Branding / Promotional Gifts / Printing & Production
                                We strive to explore and create better options for our valued clients to attain their marketing goals with creativity and
                                good vibes
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="parallax-section why-us-sec bg-white">
        <div class="container ">

            <div class="row">

                <div class="col-md-4">
                    <div class="sec-head">
                        <h5>What make us different?</h5>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sec-body">
                        <p class="text-align-left minifying-font">
                            It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page When Looking At Its Layout. The Point Of Using Lorem
                        </p>
                    </div>
                </div>


            </div>
            <section id="" class="why-us">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-sec">
                            <div class="icon-thump">
                                <!--<img src="" alt="">-->
                                <i class="fa-solid fa-eye font-icon"></i>
                            </div>
                            <h4>vision </h4>
                            <p>
                                It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-sec">
                            <div class="icon-thump">
                                <!-- <img src="" alt="">-->
                                <i class="fa-brands fa-nfc-directional font-icon"></i>
                            </div>
                            <h4> values </h4>
                            <p>
                                It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-sec">
                            <div class="icon-thump">
                                <!--<img src="" alt="">-->
                                <i class="fa-regular fa-lightbulb font-icon"></i>
                            </div>
                            <h4>values </h4>
                            <p>
                                It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page

                            </p>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>


    <!-- Screens Section -->
    <div class="parallax-section application-screen">
        <div class="container">

            <div class="sec-head">
                <h2 style="position: relative;top: 75px;">Our scope</h2>

            </div>

            <section class="why-us">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-sec">
                            <div class="icon-thump full-width text-align-center">
                                <!--<img src="" alt="">-->
                                <i class="fa-solid fa-eye font-icon"></i>
                            </div>
                            <h4 class="text-align-center">operations </h4>
                            <p>
                                It Is A Long Established Fact That A Reader
                            </p>
                            <div class="sec-button text-align-center">
                                <button class="btn btn-primary bordered-div">
                                    <span>learn more</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-sec feature-sec-even">
                            <div class="icon-thump full-width text-align-center">
                                <!-- <img src="" alt="">-->
                                <i class="fa-brands fa-nfc-directional font-icon"></i>
                            </div>
                            <h4 class="text-align-center"> marketing </h4>
                            <p>
                                It Is A Long Established Fact That A Reader
                            </p>
                            <div class="sec-button text-align-center">
                                <button class="btn btn-primary bordered-div">
                                    <span>learn more</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-sec">
                            <div class="icon-thump full-width text-align-center">
                                <!--<img src="" alt="">-->
                                <i class="fa-regular fa-lightbulb font-icon"></i>
                            </div>
                            <h4 class="text-align-center">development </h4>
                            <p>
                                It Is A Long Established Fact That A Reader

                            </p>

                            <div class="sec-button text-align-center">
                                <button class="btn btn-primary bordered-div">
                                    <span>learn more</span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>


@endsection
