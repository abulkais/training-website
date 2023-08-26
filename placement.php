<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title> KVCH</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="KVCH">
    <link rel="icon" href="assets-new/img/favicon.webp" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="assets-new/css/course.css">
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.js"></script>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.css">
    <link rel=“canonical” href="https://kvch.in/placement" />
    <meta name="classification" content="placement" />
    <style>
        .slide-content {
            margin: 0 40px;
            overflow: hidden;
            border-radius: 25px;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: #cc0f0f;
            border-radius: 25px 25px 0 25px;
        }

        .overlay::before,
        .overlay::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -40px;
            height: 40px;
            width: 40px;
            background-color: #cc0f0f;
        }

        .overlay::after {
            border-radius: 0 25px 0 0;
            background-color: #FFF;
        }




        .swiper-navBtn {
            color: #fff;
            background-color: #cc0f0f;
            border-radius: 100%;
            /* font-size: 5px!important; */
            width: 45px;
            height: 45px;
            /* padding: 25px 25px; */
            transition: color 0.3s ease;
        }

        .swiper-navBtn:hover {
            color: #fff;
        }

        .swiper-navBtn::before,
        .swiper-navBtn::after {
            font-size: 25px;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-pagination-bullet {
            background-color: #cc0f0f;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #cc0f0f;
        }

        @media screen and (max-width: 768px) {
            .slide-content {
                margin: 0 10px;
            }

            .swiper-navBtn {
                display: none;
            }
        }

        .ans-place-desc .placeone .ans-place-degi {
            background: #00859d;
        }

        .ans-place-degi {
            width: 90%;
            text-align: center;
            position: absolute;
            bottom: -1px;
            /* left: 10px; */
            border-radius: 0px 0px 10px 10px;
            line-height: 1;
            color: #fff;
            /* box-shadow: 2px 2px 10px 2px #d6d6d6; */
            padding: 15px 0;
            background: orange;
        }

        .ans-place-degi strong {
            font-weight: 600;
        }

        .placement_close {
            position: absolute;
            /* top: -80px; */
            left: 1005px;
            color: #fff;
            border: none;
            background-color: transparent;
            font-size: 80px;
            font-weight: normal;
            transition: 0.3s;
        }

        .placement_close:hover,
        .placement_close:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }

        #more {
            display: none;
        }

        .labelplace {
            margin-left: 15px;
            font-size: 16px;
        }
    </style>

</head>

<body>
    <?php
    $url = "placement";
    include('assets-new/includes/header.php');
    include('assets-new/includes/navbar.php');
    ?>
    <section class="banner">
        <div class="hero-img"><img src="assets-new/img/banner/placement-banner.webp" alt="placement"></div>
        <div class="masthead all-course-masthead" style="padding-top:0; ">
            <div class="container">
                <div class="masthead-text">
                    <div class="row">
                        <div class="col-xl-12 col-lg-8 col-md-8">
                            <span>Placement</span>
                            <h2>Our Placement Showcase</h2>
                            <p>KVCH's training programs equip learners with the expertise and knowledge to serve a worldwide clientele. Our experts are dedicated to keeping our curriculum current with the needs of the business world and the highest standards of excellence.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="home-hero-wrap1 mt-1" style="padding-bottom: 0px;">
                                        <ul class="data-list data-list-wrap">
                                            <li class="data-list-wrap-item data-list-one"> <b style="color:#cc0f0f;"> 2.2</b> Million Learners</li>
                                            <li class="data-list-wrap-item data-list-two"> <b style="color:#cc0f0f;"> 4.8/5</b> Learner’s Rating</li>
                                            <li class="data-list-wrap-item data-list-three"> <b style="color:#cc0f0f;"> 450%</b> Highest Salary Hike</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="courses_page_rating mt-3" style="float:left;">
                                        <p><i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star"> </i> <i class="fa fa-star-half-o"> </i> 4.8 (out of 5 based on 65489 votes)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 mb-4">
                                <div class="col-sm-6">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#learnmore" class="btn">Learn More</a>



                                </div>

                                <div class="col-sm-5" style="padding-left: 0;">

                                    <img src="assets-new/img/icons/rating-bnner.webp" alt="rating" style="width:100%; height:auto;">


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container mb-3 mt-3">
        <div class="banner_home">
            <div class="row" style="padding:25px;">

                <div class="col-sm-3" style="border-right: 1px solid #bfbfbf;">
                    <a href="javascript:void(0)" class="banner_home_section"> <span class="banner_home_img">
                            <img src="assets-new/img/global.webp" style="height:25px; width:35px;"></span> <span class="ml-3">Well Qualified <br> Certified Experts</span> </a>
                </div>

                <div class="col-sm-3" style="border-right: 1px solid #bfbfbf;">
                    <a href="javascript:void(0)" class="banner_home_section"> <span class="banner_home_img">
                            <img src="assets-new/img/sessions.webp" style="height:35px; width:28px;"></span> <span class="ml-3">Quality Learning <br> with Certification</span> </a>

                </div>

                <div class="col-sm-3" style="border-right: 1px solid #bfbfbf;">
                    <a href="javascript:void(0)" class="banner_home_section"> <span class="banner_home_img">
                            <img src="assets-new/img/job.webp" style="height:25px; width:35px;"></span> <span class="ml-3">Job Opportunities <br> & Career Growth </span> </a>

                </div>

                <div class="col-sm-3 bg-white ">
                    <a href="javascript:void(0)" class="banner_home_section"> <span class="banner_home_img">
                            <img src="assets-new/img/average.webp" style="height:25px; width:35px;"></span> <span class="ml-3">Upto 50% <br> Salary Hike</span> </a>

                </div>

            </div>
        </div>
    </div>













    <section style="  background-color: #fafbfc; padding: 44px 0;">
        <div class="container">
            <div class="text-center text-center-working">
                <h2 style="padding-bottom:0;">Our Placement Window</h2>
                <hr class="bottom_line">
                <p style="width:100%;">KVCH alumni are now working for some of the world's most prestigious corporations. Some of the applicants were offered positions in multinational corporations, while others have been outsourced to major clients.</p>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                        <figure>
                            <img src="assets-new/img/reviews/shubham_kumar.webp" alt="shubham_kumar" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                        <figure>
                            <img src="assets-new/img/reviews/ms-kumari-shristy.webp" alt="ms-kumari-shristy" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>





                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">

                        <figure>
                            <img src="assets-new/img/reviews/yash-bhardwaj.webp" alt="yash-bhardwaj" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                        <figure>
                            <img src="assets-new/img/reviews/ms_shristi.webp" alt="ms_shristi" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                        <figure>
                            <img src="assets-new/img/reviews/mohd-shahzed.webp" alt="Mohad Shahzed Pleaced Student" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                        <figure>
                            <img src="assets-new/img/reviews/mohd-azeem.webp" alt="mohd azeem placed student" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                        <figure>
                            <img src="assets-new/img/reviews/mahima.webp" alt="mahima placed student" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">

                        <figure>
                            <img src="assets-new/img/reviews/deepak-thakur.webp" alt="deepak thakur pleaced student" style="width:100%; height:auto;  border-radius:10px;">
                        </figure>
                    </div>
                </div>
            </div>
            <span id="dots"></span><span id="more">

                <div class="row mt-4">
                    <div class="col-sm-3">
                        <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                            <figure>
                                <img src="assets-new/img/reviews/avanish_kumar.webp" alt=" avanish kumar Placed student" style="width:100%; height:auto;  border-radius:10px;">
                            </figure>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                            <figure>
                                <img src="assets-new/img/reviews/neha_bhardwaj.webp" alt="Neha Placed student" style="width:100%; height:auto;  border-radius:10px;">
                            </figure>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">
                            <figure>
                                <img src="assets-new/img/reviews/aman-mehra.webp" alt="Aman Mehara Placed student" style="width:100%; height:auto;  border-radius:10px;">
                            </figure>
                        </div>
                    </div>


                    <div class="col-sm-3">
                        <div style="padding:px; box-shadow: 2px 2px 10px 2px #d6d6d6; border-radius:10px;">

                            <figure>
                                <img src="assets-new/img/reviews/ms_asha-pal.webp" alt="asha Placed Student" style="width:100%; height:auto;  border-radius:10px;">
                            </figure>
                        </div>
                    </div>
                </div>
            </span>
            <button onclick="myFunction()" class="mt-3" id="myBtn" style="background:#cc0f0f; border:none; padding:7px 20px; border-radius:10px; color:#fff; margin:auto; display:block;">View More</button>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2>Frequently Asked Questions
            </h2>
            <div class="faq-accordion">
                <h3>Who can join KVCH Training & Placement Solutions ?</h3>
                <div class="faq-item">
                    <p>Anyone who is a graduate or looking for placements in IT/Non IT domain can join KVCH. We provide a wide variety of learning and placement solutions for students enrolled in our courses. These are one-of-a-kind educational and job-placement opportunities designed to help ambitious individuals get ahead faster in their chosen fields. </p>
                </div>

                <h3>Why does KVCH charge a fee for these training programs ?</h3>
                <div class="faq-item">
                    <p>The purpose of the curriculum is to train students on several levels and prepare them for job success. Each programme has a unique fee structure and duration.</p>
                </div>

                <h3>What is the fee for Training & Placement Solutions for Degree / Engineering / Post Graduates ?</h3>
                <div class="faq-item">
                    <p>Different courses have different fees. You can connect with our advisors for more information about courses.</p>
                </div>

                <h3>What is the duration of the program for Training & Placement Solutions for Degree / Engineering / Post Graduates ?</h3>
                <div class="faq-item">
                    <p>The duration is different for each course. It can vary from 4/6/12 weeks to 4/6 months.</p>
                </div>

                <h3>Is a Job Guaranteed at the end of completing these Training & Placement Solutions ?</h3>
                <div class="faq-item">
                    <p>We do provide 100% placement assistance to our students, but getting a job completely depends on your calibre. Companies claiming to provide a guaranteed job are scamming students. Nonetheless, a few of our courses do provide guaranteed jobs, for which you can consult our training advisors. </p>
                </div>
                <h3>Is a laptop necessary for the course ?</h3>
                <div class="faq-item">
                    <p>Yes, the training programme needs applicants to access content and tools, and take online tests, so candidates must have their own laptops/desktops/tablets etc.</p>
                </div>

                <h3>What is the mode of course delivery ?</h3>
                <div class="faq-item">
                    <p>Our training programmes are delivered via a mix of instructor-led classroom training, e-learning modules, and hands-on experience with the topics taught. Soft skills training employs an activity-based learning strategy. Candidates can also learn from industry professionals by attending invited conferences.</p>
                </div>


            </div>
        </div>
    </section>



    <div class="modal  modal-center" id="placement-1">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/full_stack_developer_it_software.webp" alt="full stack developer it software">
            </div>
        </div>
    </div>


    <div class="modal  modal-center" id="placement-2">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/in2it_technologies_noida.webp" alt="in2it technologies">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-3">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/java_core_and_advance.webp" alt="JAVA Core And Advance">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-4">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/java_developer.webp" alt="java developer">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-5">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/java_dot_net_developer.webp" alt="java dot net developer">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-6">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/java_php_and_angular.webp" alt="java php and angular">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-7">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/placement_img (1).webp" alt="cloud java sql developer">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-8">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/placement_img (2).webp" alt="php developer">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-9">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/placement_img (3).webp" alt="php and dot-net">
            </div>
        </div>
    </div>

    <div class="modal  modal-center" id="placement-10">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/placement_img (4).webp" alt="CCNA developer">
            </div>
        </div>
    </div>


    <div class="modal  modal-center" id="placement-11">
        <div class="modal-dialog2 modal-center">
            <div class="modal-content">
                <button type="button" class="placement_close" data-dismiss="modal">&times;</button>
                <img src="assets-new/img/reviews/placement_img (5).webp" alt="php developer">
            </div>
        </div>
    </div>



    <?php
    include('assets-new/includes/index-scripts.php');
    include('assets-new/includes/footer.php');
    ?>
    <script>
        var swiper = new Swiper(".slide-content", {
            centerSlide: 'true',
            fade: 'true',
            allowSlideNext: true,
            grabCursor: 'true',
            slidesPerView: 3,
            spaceBetween: 5,
            loop: true,
            autoplay: true,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            autoplayTimeout: 10000,

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },

            },

        });
        //   
    </script>
    <!-- view more script -->
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "View more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "View Less";
                moreText.style.display = "inline";
            }
        }
    </script>
</body>

</html>