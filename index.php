

<?php

// Set the number of seconds to wait before reloading the page.
$seconds = 5;

// Start a timer.
$start_time = time();

// Check if the user has visited the page before.
if (isset($_COOKIE['last_visit'])) {
    // If the user has visited the page before, then calculate the time since the last visit.
    $time_since_last_visit = time() - $_COOKIE['last_visit'];

    // If the time since the last visit is less than the number of seconds we want to wait, then do nothing.
    if ($time_since_last_visit < $seconds) {
        // Do nothing.
    } else {
        // Reload the page.
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }
} else {
    // If the user has never visited the page before, then set a cookie and reload the page.
    setcookie('last_visit', time(), time() + $seconds);
    header('Location: ' . $_SERVER['REQUEST_URI']);
}

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Training Solutions for Professionals/Corporates -KVCH</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="We leverage our technical proficiency and experience in offering interactive solutions for IT training, E-learning, corporate training, online training, employees training.">
    <meta name="keywords" content="Employee Training Solution, training solution, elearning solutions, corporate training solutions, online training solutions, employee training solutions, it training solutions, e learning solutions company, digital training solutions,professional training solutions, learning solutions 2022, onsite training solutions, it courses">
    <meta name="author" content="KVCH">
    <meta name="user-interest" content="KVCH global training,corporate trainers in india, training company in India,global training center, national industrial training centre, training and placement companies, it training companies,technical training for employees, online training companies, training platforms for employees, soft skill training for employees, best business analyst course with placement, lt training center, custom e learning solutions, global training academy, training and development programs for employees, training companies near me,top training and development companies, best it training companies, it training solutions, it training company, top it training companies, it company training program, it training and consulting companies,online it training companies, it training corporation, Professional IT Training,institutes of computer courses in india, Job oriented training in india, Best software training institutes in india, Software courses in Bangalore with placements, 100% job placement assistance, Online IT Training india, Online training in india">
    <link rel="icon" href="assets-new/img/favicon.webp" type="image/x-icon" />


    <!-- seo tag -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "brand": {
                "@type": "brand",
                "name": "Training Solutions for Professionals/Corporates -KVCH"
            },
            "description": "We leverage our technical proficiency and experience in offering interactive solutions for IT training, elearning,corporate training,online training,employees training.",
            "sku": "0",
            "mpn": "0",
            "image": "https://kvch.in/assets-new/img/logo.webp",
            "name": "Training Solutions",
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "4.7"
                },
                "author": {
                    "@type": "Person",
                    "name": "Maniyam Sethi"
                },
                "reviewBody": "We leverage our technical proficiency and experience in offering interactive solutions for IT training, elearning,corporate training,online training,employees training."
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.7",
                "bestRating": "5",
                "ratingCount": "27383"
            },
            "offers": {
                "@type": "Offer",
                "url": "#",
                "priceCurrency": "INR",
                "price": "0",
                "priceValidUntil": "2023-06-01",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock",
                "seller": {
                    "@type": "Organization",
                    "name": "KVCH"
                }
            }
        }
    </script>

    <meta http-equiv="content-language" content="en-us">
    <link rel=“canonical” href="https://kvch.in/" />
    <meta name="Classification" content="Training Solutions" />

    <!-------------------------------OG Tags------------------------------->

    <meta name="author" content="KVCH" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://kvch.in/" />
    <meta property="og:title" content="Training Solutions for Professionals/Corporates -KVCH" />
    <meta property="og:description" content="We leverage our technical proficiency and experience in offering interactive solutions for IT training, elearning,corporate training,online training,employees training." />
    <meta property="og:image" content="assets-new/img/og-img.webp" />
    <meta property="og:site_name" content="KVCH" />
    <meta name="fb:page_id" content="917299661698634" />
    <meta property="article:publisher" content="https://www.facebook.com/KVCHGLOBAL/" />
    <meta name="og:email" content="training@kvch.in" />
    <meta name="og:phone_number" content="+91 9510-860-860" />
    <meta name="og:position" content="28.584687; 77.316123">
    <meta name="og:latitude" content="28.584687" />
    <meta name="og:longitude" content="77.316123" />
    <meta name="og:street-address" content="C-109, Sector 2" />
    <meta name="og:locality" content="Noida" />
    <meta name="og:region" content="Gautam Buddh Nagar" />
    <meta name="og:postal-code" content="201301" />
    <meta name="og:country-name" content="India" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:locale" content="en_AE" />
    <meta property="og:locale" content="en_BW" />
    <meta property="og:locale" content="en_TZ" />
    <meta property="og:locale" content="en_RW" />
    <meta property="og:locale" content="en_BR" />
    <meta property="og:locale" content="en_AR" />
    <meta property="og:locale" content="en_NG" />
    <!--------------------------------Twitter Card------------------------------->

    <meta name="twitter:title" content="Training Solutions for Professionals/Corporates -KVCH">
    <meta name="twitter:description" content="We leverage our technical proficiency and experience in offering interactive solutions for IT training, elearning,corporate training,online training,employees training.">
    <meta name="twitter:image" content="assets-new/img/og-img.webp">
    <meta name="twitter:creator" content="@kvchnoida" />
    <meta name="twitter:site" content="@kvchnoida, https://kvch.in" />
    <meta name="twitter:image:alt" content="Training Solutions for Professionals/Corporates -KVCH">
    <meta name="twitter:url" content="https://kvch.in/">
    <!--------------------------   hreflang Tags------------------------------------->
    <link rel="alternate" href="https://kvch.in/" hreflang="en-in" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ae" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-bw" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-tz" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-rw" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-br" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ar" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ng" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-uk" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-tr" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ar" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-om" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-qa" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-sy" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-sa" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-na" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ga" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ne" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-sd" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ao" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-za" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-lr" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-dz" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-ti" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-fon" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-egy" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-sr" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-at" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-be" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-hu" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-bg" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-it" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-da" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-fi" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-no" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-pi" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-swe" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-sw" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-am" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-bem" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-srp" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-bel" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-hun" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-cu" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-fin" />
    <link rel="alternate" href="https://kvch.in/" hreflang="en-swa" />

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "description": "We leverage our technical proficiency and experience in offering interactive solutions for IT training, elearning,corporate training,online training,employees training.",
            "image": "assets-new/img/og-img.webp",
            "inLanguage": "English",
            "keywords": "Employee Training Solution, training solution, elearning solutions,corporate training solutions,online training solutions,employee training solutions,it training solutions,e learning solutions company,digital training solutions,professional training solutions,learning solutions 2022,onsite training solutions,it courses",
            "name": "KVCH",
            "url": "https://kvch.in/"
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Noida",
                "addressRegion": "UP",
                "streetAddress": "201301 C-109 India"
            },
            "description": "We leverage our technical proficiency and experience in offering interactive solutions for IT training, elearning,corporate training,online training,employees training.",
            "name": "KVCH",
            "telephone": "+91-9510-860-860"
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Course",
            "type": "thing",
            "alternativeHeadline": "Training Solutions for Professionals/Corporates -KVCH",
            "description": "We leverage our technical proficiency and experience in offering interactive solutions for IT training, elearning,corporate training,online training,employees training.",
            "url": "https://kvch.in/",
            "keywords": "Employee Training Solution, training solution, elearning solutions,corporate training solutions,online training solutions,employee training solutions,it training solutions,e learning solutions company,digital training solutions,professional training solutions,learning solutions 2022,onsite training solutions,it courses",
            "hasCourseInstance": {
                "@type": "CourseInstance",
                "name": "Training Solutions",
                "courseMode": ["classroom", "online", "Instructor-Led"]
            }
        }
    </script>

    <style>
        .country-form-design {
            border-radius: 4px;
            display: flex;
            border: 1px solid #000;
            height: 45px !important;
            padding: 10px;
            box-shadow: inset 0 0 3px 0 rgb(0 0 0 / 30%);
            border: 1px solid #cbd6e2;
        }

        .slideshow {
            position: relative;
            z-index: 50;
            height: 100%;
            width: 100%;
            margin: 0px auto;
            margin-top: 50px;
        }

        .slideshow * {
            outline: none;
        }



        .slideshow .slider-track {
            -webkit-transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
            transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
        }

        .slideshow .item {
            height: 100%;
            position: relative;
            z-index: 1;
        }

        .slideshow .item img {
            width: 100%;
            -webkit-transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
            transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .slideshow .item.slick-active img {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-animation: cssAnimation 8s 1 ease-in-out forwards;
            animation: cssAnimation 8s 1 ease-in-out forwards;
        }

        /* 
        .home_banner_slide {
            background-image: url('assets-new/img/banner/kvch_banner.webp');
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            height: 470px;
            border: none;
            background-size: cover;
            background-position: center;
        } */

        /* .home_banner_slide1 {
            background-image: url('assets-new/img/banner/l-size-wokshop.webp');
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            height: 470px;
            border: none;
            background-size: cover;
            background-position: center center;
        } */

        .home_banner_slide2 {
            background-image: url('assets-new/img/banner/software_testing-home-banner.webp');
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            height: 470px;
            border: none;
            background-size: cover;
            background-position: center center;
        }

        .home_banner_slide3 {
            background-image: url('assets-new/img/banner/full-stack-banner.webp');
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            height: 470px;
            border: none;
            background-size: cover;
            background-position: center center;
        }




        .home_banner_slide4 {
            background-image: url('assets-new/img/banner/kvch-mis-banner.webp');
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            height: 470px;
            border: none;
            background-size: cover;
            background-position: center center;
        }

        .home_banner_slide5 {
            background-image: url('assets-new/img/banner/4-6-week-month.webp');
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            height: 470px;
            border: none;
            background-size: cover;
            background-position: center center;
        }

        .home_banner_slide6 {
            background-image: url('assets-new/img/banner/mega-walk-in-drive-banner.webp');
            background-repeat: no-repeat;
            position: relative;
            width: 100%;
            height: 470px;
            border: none;
            background-size: cover;
            background-position: center center;
        }

        @media only screen and (max-width:1340px) {
            /* .home_banner_slide {
                background-image: url('assets-new/img/banner/kvch_banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 470px;
                border: none;
                background-size: cover;
                background-position: center;
            } */

            /* .home_banner_slide1 {
                background-image: url('assets-new/img/banner/l-size-wokshop.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 470px;
                border: none;
                background-size: cover;
                background-position: center center;
            } */

            .home_banner_slide2 {
                background-image: url('assets-new/img/banner/software_testing-home-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 470px;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide3 {
                background-image: url('assets-new/img/banner/full-stack-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 470px;
                border: none;
                background-size: cover;
                background-position: center center;
            }




            .home_banner_slide4 {
                background-image: url('assets-new/img/banner/kvch-mis-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 470px;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide5 {
                background-image: url('assets-new/img/banner/4-6-week-month.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 470px;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide6 {
                background-image: url('assets-new/img/banner/mega-walk-in-drive-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 470px;
                border: none;
                background-size: cover;
                background-position: center center;
            }
        }

        @media only screen and (max-width:1260px) {
            /* .home_banner_slide {
                background-image: url('assets-new/img/banner/kvch_banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 440px;
                border: none;
                background-size: cover;
                background-position: center;
            } */

            /* .home_banner_slide1 {
                background-image: url('assets-new/img/banner/l-size-wokshop.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 440px;
                border: none;
                background-size: cover;
                background-position: center center;
            } */

            .home_banner_slide2 {
                background-image: url('assets-new/img/banner/software_testing-home-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 440px;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide3 {
                background-image: url('assets-new/img/banner/full-stack-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 440px;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide4 {
                background-image: url('assets-new/img/banner/kvch-mis-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 440px;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide5 {
                background-image: url('assets-new/img/banner/4-6-week-month.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 440px;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide6 {
                background-image: url('assets-new/img/banner/mega-walk-in-drive-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 440px;
                border: none;
                background-size: cover;
                background-position: center center;
            }
        }

        @media only screen and (max-width:1024px) {
            /* .home_banner_slide1 {
                background-image: url('assets-new/img/banner/m-size-workshop.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            } */

            .home_banner_slide2 {
                background-image: url('assets-new/img/banner/software_testing-home-tab-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide3 {
                background-image: url('assets-new/img/banner/s-size-full-statck-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide4 {
                background-image: url('assets-new/img/banner/s-size-mis-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide5 {
                background-image: url('assets-new/img/banner/s-size-4-6-week-month.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide6 {
                background-image: url('assets-new/img/banner/mega-walk-in-drive-banner700.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }
        }

        @media only screen and (max-width:768px) {
            /* .home_banner_slide1 {
                background-image: url('assets-new/img/banner/m-size-workshop.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 350px !important;
                border: none;
                background-size: contain;
                background-position: center center;
            } */

            .home_banner_slide2 {
                background-image: url('assets-new/img/banner/software_testing-home-tab-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 350px !important;
                border: none;
                background-size: contain;
                background-position: center center;
            }

            .home_banner_slide3 {
                background-image: url('assets-new/img/banner/s-size-full-statck-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 350px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide4 {
                background-image: url('assets-new/img/banner/s-size-mis-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 350px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide5 {
                background-image: url('assets-new/img/banner/s-size-4-6-week-month.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 350px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide6 {
                background-image: url('assets-new/img/banner/mega-walk-in-drive-banner700.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 350px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }


        }

        @media only screen and (max-width:500px) {
            .home_banner_slide2 {
                background-image: url('assets-new/img/banner/workshop-mobile-view.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;

            }

            .home_banner_slide2 {
                background-image: url('assets-new/img/banner/software_testing-home-mobilebanner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;

            }



            .home_banner_slide3 {
                background-image: url('assets-new/img/banner/full-stack-mobile-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }



            .home_banner_slide4 {
                background-image: url('assets-new/img/banner/mis-mobile-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }


            .home_banner_slide5 {
                background-image: url('assets-new/img/banner/4-6-week-month-mobile.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .home_banner_slide6 {
                background-image: url('mega-walk-in-drive-mobile-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 400px !important;
                border: none;
                background-size: cover;
                background-position: center center;
            }

            .slideshow {
                margin-top: 102px;
            }
        }

        @media only screen and (max-width:376px) {
            /* .home_banner_slide1 {
                background-image: url('assets-new/img/banner/workshop-mobile-view.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 380px !important;
                border: none;
                background-size: contain;
                background-position: center center;

            } */


            .home_banner_slide2 {
                background-image: url('assets-new/img/banner/software_testing-home-mobilebanner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 380px !important;
                border: none;
                background-size: contain;
                background-position: center center;

            }



            .home_banner_slide3 {

                background-image: url('assets-new/img/banner/full-stack-mobile-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 380px !important;
                border: none;
                background-size: contain;
                background-position: center center;
            }


            .home_banner_slide4 {

                background-image: url('assets-new/img/banner/mis-mobile-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 380px !important;
                border: none;
                background-size: contain;
                background-position: center center;
            }

            .home_banner_slide5 {
                background-image: url('assets-new/img/banner/4-6-week-month-mobile.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 380px !important;
                border: none;
                background-size: contain;
                background-position: center center;
            }

            .home_banner_slide6 {
                background-image: url('assets-new/img/banner/mega-walk-in-drive-mobile-banner.webp');
                background-repeat: no-repeat;
                position: relative;
                width: 100%;
                height: 380px !important;
                border: none;
                background-size: contain;
                background-position: center center;
            }


            .slideshow {
                margin-top: 90px;
            }
        }

        @media only screen and (max-width:320px) {
            .slideshow {
                margin-top: 70px;
            }
        }

        .for-img-l-view {
            display: visible;
        }

        .for-con-l-view {
            display: none;
        }

        .mobile-view-h {
            width: 100% !important;
            height: auto;
            float: right;
        }

        .for-m-view {
            display: none;
        }


        .mobile-view-h1 {
            height: 100%;
            width: auto;
        }

        .for-l-view {
            display: visible;
        }


        @media only screen and (max-width:1024px) {
            .home_banner_slide {
                width: 100%;
                height: 430px;
            }

            /* .home_banner_slide1 {
                width: 100%;
                height: 430px;
            } */

            .mobile-view-h1 {
                height: auto;
                width: 100% !important;
            }

            .for-m-view {
                display: none !important;
            }

            /* .for-l-view {
                display: none;
            } */

        }

        @media only screen and (max-width:768px) {
            .home_banner_slide {

                width: 100%;
                height: 400px;

            }

            /* .home_banner_slide1 {

                width: 100%;
                height: 330px;

            } */

            .for-m-view {
                display: none !important;
            }
        }

        @media only screen and (max-width:500px) {
            .home_banner_slide {

                width: 100%;
                height: 380px;

            }

            .for-l-view {
                display: none !important;
            }

            .for-m-view {
                display: inline !important;
            }

            /* .home_banner_slide1 {

                width: 100%;
                height: 440px;
            } */

            .for-con-l-view {
                display: inline;
                text-align: center;
            }

            .for-img-l-view {
                display: none;
            }

            .mobile-view-h1 {
                height: auto;
                width: 100% !important;
            }

            .mobile-view-h {
                display: none !important;
            }
        }
    </style>


</head>

<body style="padding-right: 0px!important; margin-right:0px!important">

    <?php
    $url = '';
    include('assets-new/includes/header.php');
    include('assets-new/includes/navbar.php');

    ?>


    <div class="slideshow">
        <div class="slider">

            <!-- <div class="item">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfsXK6strHSKBWLi72QoXkneBgrJw0UemBGUNnBgSu0DrB93Q/viewform" target="_blank" title="Join Workshop">
                    <div class="home_banner_slide1">

                    </div>
                </a>

            </div> -->

            <div class="item">
                <a href="best-software-testing-training-noida" target="_blank" title="Software Testing Certification">
                    <div class="home_banner_slide2">

                    </div>
                </a>

            </div>

            <!-- <div class="item">
                <a href="6-weeks-summer-training-noida" target="_blank" title="4/6 Months/Weeks Summer Training">
                    <div class="home_banner_slide5">

                    </div>
                </a>
            </div> -->

            <div class="item">
                <a href="full-stack-developer-programme" target="_blank" title="Full Stack Training">
                    <div class="home_banner_slide3">

                    </div>
                </a>
            </div>

            <div class="item">
                <a href="best-mis-data-analysis-in-excel-training" target="_blank" title="Mis Training">
                    <div class="home_banner_slide4">

                    </div>
                </a>
            </div>






        </div>

    </div>

    <div class="container mb-3">
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


    <section class="strategic-section" style="padding-bottom:0px; padding-top:0px;">
        <div class="container" style="max-width: 770px; width:100%;">
            <h2 class="text-center" style="padding-bottom:0px;">Strategic Partnership</h2>
            <hr class="bottom_line">
            <ul class="clearfix" id="all-courses">
                <li>
                    <div><img src="assets-new/img/idp_ielts.webp" class="img-fluid" alt="idp_ielts"></div>
                </li>

                <li>
                    <div><img src="assets-new/img/Linguaskill_logo.webp" class="img-fluid" alt="longuaskill Logo"></div>
                </li>
            </ul>
        </div>
    </section>


    <section class="courses-section">
        <div class="container">
            <h2 class="text-center" style="padding-bottom: 0px;">Most Popular Courses</h2>

            <hr class="bottom_line">
            <p class="hidden-lg hidden-md hidden-sm" style="margin-top: 15px!important;"></p>
            <div class="js-tab-nav">

                <div class="tab-item">
                    <div class="tab-click">AI/ML/Data Science</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Programming & Frameworks</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Networking</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Digital Marketring</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Cloud Computing</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">BI and Visualization</div>
                </div>



                <div class="tab-item">
                    <div class="tab-click">HR & Payroll</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Software Testing</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">DevOps</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Big Data</div>
                </div>


                <div class="tab-item">
                    <div class="tab-click">Data Science</div>
                </div>



                <div class="tab-item">
                    <div class="tab-click">Frontend Development</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Cyber Security</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Data Warehousing and ETL</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Robotic Process Automation</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Artificial Intelligence</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Blockchain</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Databases</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Mobile Development</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Operating Systems</div>
                </div>



                <div class="tab-item">
                    <div class="tab-click">Architecture & Design </div>
                </div>


                <div class="tab-item">
                    <div class="tab-click">ServiceNow</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Agile & Scrum</div>
                </div>


                <div class="tab-item">
                    <div class="tab-click">Electronics & Communication</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">SAP</div>
                </div>

                <div class="tab-item">
                    <div class="tab-click">Foreign Languages</div>
                </div>
            </div>

            <div class="js-tab-content">
                <!-- data-science -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4 tab-gap">
                            <a href="best-data-science-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#f49cae,#b05ce2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/data-science-and-python.webp" class="img-fluid" alt="DevOps"></div>
                                        <div class="course-name">Data Science Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>

                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-data-science-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4 tab-gap">
                            <a href="best-python-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#46dbea,#507fd9);">

                                        <div class="course-icon"><img src="assets-new/img/icons/python.webp" class="img-fluid" alt="Kubernetes Training"></div>
                                        <div class="course-name">Python Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;"> 4 (10000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-python-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4 tab-gap">
                            <a href="best-machine-learning-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon "><img src="assets-new/img/icons/aws-certified-devops-engineer.webp" class="img-fluid" alt="AWS Certified DevOps Engineer Training"></div>
                                        <div class="course-name">Machine Learning Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (30600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-machine-learning-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4 tab-gap">
                            <a href="best-artificial-intelligence-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#ffe583,#ff63cc);">
                                        <div class="course-icon "><img src="assets-new/img/icons/ai.webp" class="img-fluid" alt="Docker Certification"></div>
                                        <div class="course-name">Artificial Intelligence Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;"> 5 (20600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-artificial-intelligence-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->
                    </div>
                </div>

                <!-- framework section  Start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->

                        <div class="col-md-3 col-sm-4">
                            <a href="full-stack-developer-programme" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#70bc55,#ea6f6f);">
                                        <div class="course-icon "><img src="assets-new/img/icons/full-stack.webp" class="img-fluid" alt="Spring Framework Certification"></div>
                                        <div class="course-name">Full Stack Development Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="full-stack-developer-programme">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="best-java-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#ff6364,#ff88bc);">
                                        <div class="course-icon"><img src="assets-new/img/icons/java.webp" class="img-fluid" alt="Java , J2EE & SOA Certification "></div>
                                        <div class="course-name">Java Training Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (31300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-java-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="python-django-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud">

                                        <div class="course-icon"><img src="assets-new/img/icons/python-django.webp" class="img-fluid" alt="Python Django Certification"></div>
                                        <div class="course-name">Python Django Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (40000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="python-django-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="best-node-js-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon "><img src="assets-new/img/icons/node-js.webp" class="img-fluid" alt="Node.js Certification"></div>
                                        <div class="course-name">Node js Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (30600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-node-js-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="c-programming-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="C Programming Certification"></div>
                                        <div class="course-name">C Programming Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="c-programming-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->

                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="best-dot-net-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading">
                                        <div class="course-icon"><img src="assets-new/img/course-icon-1.webp" class="img-fluid" alt="Microsoft .NET Framework Certification"></div>
                                        <div class="course-name">Microsoft .NET Framework Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (41300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-dot-net-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="comprehensive-java-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#fddb92,#09adef);">

                                        <div class="course-icon"><img src="assets-new/img/icons/comprehensive-java.webp" class="img-fluid" alt="Comprehensive Java Certification"></div>
                                        <div class="course-name">Comprehensive Java Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (40000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="comprehensive-java-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="best-spring-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#70bc55,#ea6f6f);">
                                        <div class="course-icon "><img src="assets-new/img/icons/spring-framework.webp" class="img-fluid" alt="Spring Framework Certification"></div>
                                        <div class="course-name">Spring Framework Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience </li>
                                            <li> Integrated Labs and Assessments</li>
                                        </ul>
                                        <a href="best-spring-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="learn-python-scripting" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#0a7dd8,#21c8db);">
                                        <div class="course-icon "><img src="assets-new/img/icons/python.webp" class="img-fluid" alt="Python Scripting Certification"></div>
                                        <div class="course-name">Python Scripting Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">4 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="learn-python-scripting">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->

                        <!-- row start  -->

                        <div class="col-md-3 col-sm-4">
                            <a href="advanced-java-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#bdd377,#09adef);">

                                        <div class="course-icon"><img src="assets-new/img/icons/java.webp" class="img-fluid" alt="Advanced Java Certification"></div>
                                        <div class="course-name">Advanced Java Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="advanced-java-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="c-plus-plus-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="C++ Programming Course"></div>
                                        <div class="course-name">C++ Programming Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="c-plus-plus-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="php-mysql-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#fc8474,#af444f);">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="PHP MySQL with MVC Frameworks"></div>
                                        <div class="course-name"> PHP MySQL with MVC Frameworks
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">4 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="php-mysql-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <!-- row  end -->

                    </div>
                </div>
                <!-- framework section End -->

                <!-- Networking -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="best-ccna-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#46dbea,#507fd9);">

                                        <div class="course-icon"><img src="assets-new/img/icons/kubernates.webp" class="img-fluid" alt="Kubernetes Training"></div>
                                        <div class="course-name">CCNA Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-ccna-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="best-mcse-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#f49cae,#b05ce2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/deveops.webp" class="img-fluid" alt="DevOps"></div>
                                        <div class="course-name">MCSE Training Course <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (32300)</i>
                                            </span>

                                        </div>

                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-mcse-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="best-ccnp-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#4692ea,#2d106c)">

                                        <div class="course-icon"><img src="assets-new/img/icons/kubernates.webp" class="img-fluid" alt="Kubernetes Training"></div>
                                        <div class="course-name">CCNP Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i> <i style="color:#fff;"> 4.5 (40000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-ccnp-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="mcsa-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#feb63d,#29c689);">
                                        <div class="course-icon"><img src="assets-new/img/icons/deveops.webp" class="img-fluid" alt="DevOps"></div>
                                        <div class="course-name">MCSA Training Course <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (32300)</i>
                                            </span>

                                        </div>

                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="mcsa-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->
                    </div>
                </div>

                <!-- Digital Marketing section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="best-digital-marketing-training-noida.php" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/digital-marketing.webp" class="img-fluid" alt="Digital Marketing Course"></div>
                                        <div class="course-name"> Digital Marketing Course <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (52300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-digital-marketing-training-noida.php">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="seo-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #c89cf4, #5ce1e2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/digital-marketing.webp" class="img-fluid" alt="Digital Marketing Course"></div>
                                        <div class="course-name"> SEO Training Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i></i><i style="color:#fff;"> 4 (52300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="seo-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="google-analytics-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #ca2f4e, #5ce29e);">
                                        <div class="course-icon"><img src="assets-new/img/icons/digital-marketing.webp" class="img-fluid" alt="Digital Marketing Course"></div>
                                        <div class="course-name"> Google Analytics Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i><i style="color:#fff;"> 4.5 (32300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="google-analytics-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="google-ads-ppc-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f4d69c, #369f3f);">
                                        <div class="course-icon"><img src="assets-new/img/icons/digital-marketing.webp" class="img-fluid" alt="Digital Marketing Course"></div>
                                        <div class="course-name"> PPC Training Certification<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="google-ads-ppc-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
                <!-- Digital Marketing section end -->

                <!-- cloud computing section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->

                        <div class="col-md-3 col-sm-4">
                            <a href="salesforce-administrator-and-developer-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading">
                                        <div class="course-icon"><img src="assets-new/img/icons/salesforce.webp" class="img-fluid" alt="salesforce"></div>
                                        <div class="course-name">Salesforce Administrator<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (17000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="salesforce-administrator-and-developer-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="aws-solution-architect-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud">

                                        <div class="course-icon"><img src="assets-new/img/icons/aws-solution-architect.webp" class="img-fluid" alt="AWS Solution Architect"></div>
                                        <div class="course-name">AWS Solution Architect

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (1800)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="aws-solution-architect-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="best-microsoft-azure-development-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="Microsoft Azure Certification"></div>
                                        <div class="course-name">Microsoft Azure Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (12700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-microsoft-azure-development-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="best-cloud-computing-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA">
                                        <div class="course-icon"><img src="assets-new/img/course-icon-4.webp" class="img-fluid" alt="course"></div>
                                        <div class="course-name">Cloud Computing Trainning
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (12700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-cloud-computing-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row end -->

                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="google-cloud-certification-training-courses" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style=" background: linear-gradient(240deg,#ddc13b,#0033a2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/google-cloud-platform.webp" class="img-fluid" alt="Google Cloud Platform "></div>
                                        <div class="course-name">Google Cloud Platform (GCP)<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (19300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="google-cloud-certification-training-courses">VIEW MORE</a>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="microservices-software-architecture-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="    background: linear-gradient(242deg, #f49cae, #b05ce2);">

                                        <div class="course-icon"><img src="assets-new/img/icons/microservice-certification.webp" class="img-fluid" alt="Microservices Certification"></div>
                                        <div class="course-name">Microservices Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;"> 4 (10000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="microservices-software-architecture-training">VIEW MORE</a>
                                    </div>
                                </div>
                                <a data-toggle="modal" data-target="#myModal1" class="course_link">
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="microsoft-azure-administrator-certification-training.php" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon "><img src="assets-new/img/icons/microsoft-azure-adimistration.webp" class="img-fluid" alt="Microsoft Azure Administrator"></div>
                                        <div class="course-name">Microsoft Azure Administrator
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (12600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="microsoft-azure-administrator-certification-training">VIEW MORE</a>
                                    </div>
                                </div>

                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="salesforce-platform-developer-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA" style="    background: linear-gradient(240deg,#fddb92,#09adef);">
                                        <div class="course-icon"><img src="assets-new/img/icons/salesforce.webp" class="img-fluid" alt="Salesforce Platform Developer"></div>
                                        <div class="course-name">Salesforce Platform Developer
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (12700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="salesforce-platform-developer-certification-training.php">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row end -->

                        <!-- row start  -->

                        <div class="col-md-3 col-sm-4">
                            <a href="best-amazon-web-services-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud">

                                        <div class="course-icon"><img src="assets-new/img/course-icon-2.webp" class="img-fluid" alt="AWS Development Certification"></div>
                                        <div class="course-name">AWS Development Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-amazon-web-services-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="aws-sysops-administrator-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="AWS SysOps Administrator"></div>
                                        <div class="course-name">AWS SysOps Administrator
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (12600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="aws-sysops-administrator-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="best-iot-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA">
                                        <div class="course-icon"><img src="assets-new/img/course-icon-4.webp" class="img-fluid" alt="IoT Certification Training"></div>
                                        <div class="course-name">IoT Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;"> 4 (30700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-iot-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row end -->
                    </div>
                </div>
                <!-- cloud computing section end -->

                <!-- Big BI & V section  Start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="best-sas-programming-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#18cdd1,#b185ba);">
                                        <div class="course-icon"><img src="assets-new/img/icons/microsoft-power-bi.webp" class="img-fluid" alt="Microsoft Power BI Certification"></div>
                                        <div class="course-name">SAS Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i><i style="color:#fff;"> 4.5 (31300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-sas-programming-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="best-mis-data-analysis-in-excel-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#18d1a5,#9fba85);">
                                        <div class="course-icon"><img src="assets-new/img/icons/microsoft-bi-certification.webp" class="img-fluid" alt="Microsoft Power BI Certification"></div>
                                        <div class="course-name">MIS Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i><i style="color:#fff;"> 4 (51300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-mis-data-analysis-in-excel-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="power-bi-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#ffaf8a,#ff6263);">
                                        <div class="course-icon"><img src="assets-new/img/icons/microsoft-power-bi.webp" class="img-fluid" alt="Microsoft Power BI Certification"></div>
                                        <div class="course-name">Microsoft Power BI Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (41300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="power-bi-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="best-tableau-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#6568ff,#d879ec);">

                                        <div class="course-icon"><img src="assets-new/img/icons/tableau.webp" class="img-fluid" alt="Tableau Certification"></div>
                                        <div class="course-name">Tableau Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (40000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-tableau-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row tab-flex">

                        <div class="col-md-3 col-sm-4">
                            <a href="business-accounting-and-taxation-training-certification" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="Advanced MS Excel 2016 Certification"></div>
                                        <div class="course-name">Busines Accounting & Taxation Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="business-accounting-and-taxation-training-certification">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- row end -->

                    </div>
                </div>
                <!-- big BI V section End -->



                <!-- hr & payroll section start-->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->

                        <div class="col-md-3 col-sm-4">
                            <a href="best-hr-generalist-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon"><img src="assets-new/img/icons/hr-generalistcertification.webp" class="img-fluid" alt="HR Generalist x Training"></div>
                                        <div class="course-name"> HR Generalist x Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-hr-generalist-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="best-hr-generalist-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading">
                                        <div class="course-icon"><img src="assets-new/img/icons/hr-certification.webp" class="img-fluid" alt="HR Certification Training"></div>
                                        <div class="course-name"> HR Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-hr-generalist-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style=" background: linear-gradient(240deg,#ddc13b,#0033a2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/hr_generalist_foundation.webp" class="img-fluid" alt="HR Generalist Foundation Training "></div>
                                        <div class="course-name">HR Generalist Foundation Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA">
                                        <div class="course-icon "><img src="assets-new/img/icons/advance_hr_generalist_training.webp" class="img-fluid" alt="Advanced HR Generalist"></div>
                                        <div class="course-name">Advanced HR Generalist Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- hr & payroll  section end-->
                <!-- software testing section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="best-software-testing-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#d677c0,#41bbbd);">
                                        <div class="course-icon"><img src="assets-new/img/icons/manual-testing.webp" class="img-fluid" alt="Selenium Certification Training"></div>
                                        <div class="course-name">Software Testing Training Course<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-software-testing-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a href="manual-testing-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#ff6364,#ff88bc);">

                                        <div class="course-icon"><img src="assets-new/img/icons/manual-testing.webp" class="img-fluid" alt="Manual Testing Certification"></div>
                                        <div class="course-name"> Manual Testing Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="manual-testing-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="best-meter-training-in-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#d677c0,#41bbbd);">
                                        <div class="course-icon "><img src="assets-new/img/icons/jmeter.webp" class="img-fluid" alt="Performance Testing Using JMeter"></div>
                                        <div class="course-name">Performance Testing Using JMeter
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-meter-training-in-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="advanced-predictived-modelling-r-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#0a7dd8,#21c8db);">
                                        <div class="course-icon "><img src="assets-new/img/icons/Microsoft-project.webp" class="img-fluid" alt="Advanced Predictive Modelling in R"></div>
                                        <div class="course-name">Advanced Predictive Modelling in R
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="advanced-predictived-modelling-r-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- row  end -->
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <a href="selenium-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#d677c0,#41bbbd);">
                                        <div class="course-icon"><img src="assets-new/img/icons/Selenium-certification.webp" class="img-fluid" alt="Selenium Certification Training"></div>
                                        <div class="course-name">Selenium Certification Training Course<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="selenium-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- software testing section end -->
                <!-- devOps section Start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="devops-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#f49cae,#b05ce2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/deveops.webp" class="img-fluid" alt="DevOps"></div>
                                        <div class="course-name">DevOps Certification Training Course<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>

                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="devops-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="kubernetes-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#46dbea,#507fd9);">

                                        <div class="course-icon"><img src="assets-new/img/icons/kubernates.webp" class="img-fluid" alt="Kubernetes Training"></div>
                                        <div class="course-name"> Kubernetes Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="kubernetes-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="aws-devops-engineer-professional-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#ffe583,#ff63cc);">
                                        <div class="course-icon "><img src="assets-new/img/icons/aws-certified-devops-engineer.webp" class="img-fluid" alt="AWS Certified DevOps Engineer Training"></div>
                                        <div class="course-name">AWS Certified DevOps Engineer Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="aws-devops-engineer-professional-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="docker-certification-training" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon "><img src="assets-new/img/icons/Microsoft-project.webp" class="img-fluid" alt="Docker Certification"></div>
                                        <div class="course-name">Docker Certification Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="docker-certification-training">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->
                    </div>
                </div>
                <!-- DevOps section End -->

                <!-- Big data section  Start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="https://kvch.in/best-apache-spark-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="    background: linear-gradient(240deg,#0b99a6,#52c37b);">
                                        <div class="course-icon"><img src="assets-new/img/course-icon-1.webp" class="img-fluid" alt="Python Spark Certification"></div>
                                        <div class="course-name">Python Spark Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (51300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="https://kvch.in/best-apache-spark-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#46dbea,#507fd9);">

                                        <div class="course-icon"><img src="assets-new/img/icons/apache-kafka.webp" class="img-fluid" alt="Apache Kafka Certification"></div>
                                        <div class="course-name"> Apache Kafka Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#e0ec51,#2eb18d);">
                                        <div class="course-icon "><img src="assets-new/img/icons/Splunk.webp" class="img-fluid" alt="Splunk Training"></div>
                                        <div class="course-name">Splunk Training & Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (16600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA" style="background: linear-gradient(240deg,#7b97de,#5d288c);">
                                        <div class="course-icon"><img src="assets-new/img/course-icon-4.webp" class="img-fluid" alt="Apache Solr Certification"></div>
                                        <div class="course-name">Apache Solr Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                </i><i style="color:#fff;"> 4 (17700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row end -->
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="https://kvch.in/best-apache-spark-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon"><img src="assets-new/img/icons/apache-spark-and-scala.webp" class="img-fluid" alt="Apache Spark and Scala Certification "></div>
                                        <div class="course-name">Apache Spark and Scala Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (31300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="https://kvch.in/best-apache-spark-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="https://kvch.in/best-big-data-hadoop-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#bdd377,#09adef);">

                                        <div class="course-icon"><img src="assets-new/img/icons/hadoop.webp" class="img-fluid" alt="Big Data Hadoop Certification"></div>
                                        <div class="course-name">Big Data Hadoop Certification

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i> <i style="color:#fff;"> 4.5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="https://kvch.in/best-big-data-hadoop-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#fddb92,#09adef);">
                                        <div class="course-icon "><img src="assets-new/img/icons/hadoop.webp" class="img-fluid" alt="Hadoop Administration"></div>
                                        <div class="course-name">Hadoop Administration
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (20600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#d66868,#e1a940);">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="ELK Stack Training"></div>
                                        <div class="course-name">ELK Stack Training Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- row end -->

                    </div>
                </div>
                <!-- big data section End -->


                <!-- Data Science section  Start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud">
                                        <div class="course-icon"><img src="assets-new/img/icons/data-science-and-python.webp" class="img-fluid" alt="Data Science with Python Certification"></div>
                                        <div class="course-name">Data Science with Python Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading ">

                                        <div class="course-icon"><img src="assets-new/img/icons/python.webp" class="img-fluid" alt="Python Certification Training"></div>
                                        <div class="course-name">Python Certification Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="best-machine-learning-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#d66868,#e1a940);">
                                        <div class="course-icon "><img src="assets-new/img/icons/python.webp" class="img-fluid" alt="Machine Learning Certification"></div>
                                        <div class="course-name">Machine Learning Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="best-machine-learning-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon "><img src="assets-new/img/course-icon-3.webp" class="img-fluid" alt="Advanced Predictive Modelling in R"></div>
                                        <div class="course-name">Advanced Predictive Modelling in R
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->
                    </div>
                </div>
                <!-- Data Science section End -->



                <!-- frontend section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon"><img src="assets-new/img/icons/CSPO.webp" class="img-fluid" alt="React with Redux Certification"></div>
                                        <div class="course-name">React with Redux Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#80d0c7,#166a9b);">

                                        <div class="course-icon"><img src="assets-new/img/icons/angular.webp" class="img-fluid" alt="Angular Certification Training"></div>
                                        <div class="course-name"> Angular Certification Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#ffe583,#ff63cc);">
                                        <div class="course-icon "><img src="assets-new/img/icons/web-development.webp" class="img-fluid" alt="Web Development Certification"></div>
                                        <div class="course-name">Web Development Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon "><img src="assets-new/img/icons/web-development.webp" class="img-fluid" alt="CSS Certification Trainin"></div>
                                        <div class="course-name">CSS Certification Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->
                    </div>
                </div>
                <!-- frontend section end -->

                <!-- cyber section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#73db9d,#fcb279);">
                                        <div class="course-icon"><img src="assets-new/img/icons/cyber-security.webp" class="img-fluid" alt="Cyber Security Training"></div>
                                        <div class="course-name">Cyber Security Training Course <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(242deg, #f49cae, #b05ce2);">

                                        <div class="course-icon"><img src="assets-new/img/icons/ethical-hacking.webp" class="img-fluid" alt="Certified Ethical Hacking Course"></div>
                                        <div class="course-name">Certified Ethical Hacking Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon "><img src="assets-new/img/icons/comptia-security+.webp" class="img-fluid" alt="CompTIA Security+ Training "></div>
                                        <div class="course-name">CompTIA Security+ Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->
                    </div>
                </div>
                <!-- cyber section end -->

                <!-- data warehousing section start-->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#7b97de,#5d288c);">
                                        <div class="course-icon"><img src="assets-new/img/icons/informatica-training.webp" class="img-fluid" alt="Informatica Training Certification"></div>
                                        <div class="course-name"> Informatica Training Certification <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#0a7dd8,#21c8db);">

                                        <div class="course-icon"><img src="assets-new/img/icons/talend.webp" class="img-fluid" alt="Talend for Data Integration and Big data"></div>
                                        <div class="course-name">Talend for Data Integration and Big data
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon "><img src="assets-new/img/icons/snowflake.webp" class="img-fluid" alt="Snowflake Certification"></div>
                                        <div class="course-name">Snowflake Certification Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon "><img src="assets-new/img/icons/CSPO.webp" class="img-fluid" alt="Snowflake Certification"></div>
                                        <div class="course-name">Snowflake Certification Training Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;">5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row  end -->
                    </div>
                </div>
                <!-- data warehousing section end-->

                <!-- robot process Automation start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/rpa-using-automation.webp" class="img-fluid" alt="RPA using UiPath Certification"></div>
                                        <div class="course-name">RPA using UiPath Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#70bc55,#ea6f6f);">

                                        <div class="course-icon"><img src="assets-new/img/icons/CSPO.webp" class="img-fluid" alt="Talend for Data Integration"></div>
                                        <div class="course-name">Talend for Data Integration and Big data
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
                <!-- robot process Automation end -->

                <!-- artificial section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#e0ec51,#2eb18d);">
                                        <div class="course-icon"><img src="assets-new/img/icons/deeplearning-with-tenserflow.webp" class="img-fluid" alt="Deep Learning Course with Tensorflow Certification"></div>
                                        <div class="course-name">Deep Learning Course with Tensorflow Certification Course <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="background: linear-gradient(240deg,#ff9fb2,#de51e3);">

                                        <div class="course-icon"><img src="assets-new/img/icons/python.webp" class="img-fluid" alt="Natural Language Processing with Python Certification"></div>
                                        <div class="course-name">Natural Language Processing with Python Certification Course
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (50000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- artificial section end -->

                <!-- blockchain section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#e0ec51,#2eb18d);">
                                        <div class="course-icon"><img src="assets-new/img/icons/blockchain.webp" class="img-fluid" alt="Blockchain and Ethereum Certification"></div>
                                        <div class="course-name">Blockchain and Ethereum Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
                <!-- blockchain section end -->

                <!-- database section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style=" background: linear-gradient(240deg,#d677c0,#41bbbd);">
                                        <div class="course-icon"><img src="assets-new/img/icons/cassendra.webp" class="img-fluid" alt="Apache Cassandra Certification"></div>
                                        <div class="course-name">Apache Cassandra Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#426a9f,#4edbec);">
                                        <div class="course-icon"><img src="assets-new/img/icons/mongodb.webp" class="img-fluid" alt="MongoDB Certification"></div>
                                        <div class="course-name">MongoDB Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#e0ec51,#2eb18d);">
                                        <div class="course-icon"><img src="assets-new/img/icons/sql-essential.webp" class="img-fluid" alt="SQL Essentials Training & Certification"></div>
                                        <div class="course-name">SQL Essentials Training & Certification<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(242deg, #f49cae, #b05ce2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/blockchain.webp" class="img-fluid" alt="Teradata Certification"></div>
                                        <div class="course-name">Teradata Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
                <!-- database section end -->

                <!-- mobile development section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon"><img src="assets-new/img/icons/ios.webp" class="img-fluid" alt="iOS App Development Certification"></div>
                                        <div class="course-name"> iOS App Development Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#0a7dd8,#21c8db);">
                                        <div class="course-icon"><img src="assets-new/img/icons/android.webp" class="img-fluid" alt="Android App Development"></div>
                                        <div class="course-name">Android App Development Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- mobile development section end -->

                <!-- Operating Systems section start-->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="best-linux-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#73db9d,#fcb279);">
                                        <div class="course-icon"><img src="assets-new/img/icons/linux.webp" class="img-fluid" alt="Linux Administration Certification"></div>
                                        <div class="course-name"> Linux Administration Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-linux-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Operating Systems section end-->

                <!-- Architecture & Design Patterns section start  -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#80d0c7,#166a9b);">
                                        <div class="course-icon"><img src="assets-new/img/icons/design-patterns.webp" class="img-fluid" alt="Design Patterns Certification Training"></div>
                                        <div class="course-name"> Design Patterns Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Architecture & Design Patterns section end  -->


                <!-- service now section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#80d0c7,#166a9b);">
                                        <div class="course-icon"><img src="assets-new/img/icons/servicenow_admin.webp" class="img-fluid" alt="ServiceNow Certification"></div>
                                        <div class="course-name">ServiceNow Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience </li>
                                            <li> Integrated Labs and Assessments</li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA">
                                        <div class="course-icon"><img src="assets-new/img/icons/servicenow_certification.webp" class="img-fluid" alt="ServiceNow Admin Certification"></div>
                                        <div class="course-name">ServiceNow Admin Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon"><img src="assets-new/img/icons/servicenow_developer.webp" class="img-fluid" alt="ServiceNow Developer Certification"></div>
                                        <div class="course-name">ServiceNow Developer Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style=" background: linear-gradient(240deg,#ddc13b,#0033a2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/servicenow_specialist.webp" class="img-fluid" alt="ServiceNow Implementation"></div>
                                        <div class="course-name">ServiceNow Implementation Specialist Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- service nw section end -->

                <!-- agile section start  -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#80d0c7,#166a9b);">
                                        <div class="course-icon"><img src="assets-new/img/icons/agile_certification.webp" class="img-fluid" alt="Agile Certification"></div>
                                        <div class="course-name">Agile Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA">
                                        <div class="course-icon"><img src="assets-new/img/icons/scrum_master.webp" class="img-fluid" alt="Certified Scrum Master"></div>
                                        <div class="course-name">Certified Scrum Master (CSM) Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET">
                                        <div class="course-icon"><img src="assets-new/img/icons/scrum_master.webp" class="img-fluid" alt="Advanced Certified Scrum Master Training"></div>
                                        <div class="course-name">Advanced Certified Scrum Master (A-CSM) Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style=" background: linear-gradient(240deg,#ddc13b,#0033a2);">
                                        <div class="course-icon"><img src="assets-new/img/icons/scrum_productowner.webp" class="img-fluid" alt="Certified Scrum Product Owner"></div>
                                        <div class="course-name">Certified Scrum Product Owner (CSPO) Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">

                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#d080ab,#9b7916);">
                                        <div class="course-icon"><img src="assets-new/img/icons/advance_scrum_master.webp" class="img-fluid" alt="Advanced Certified Scrum Product Owner"></div>
                                        <div class="course-name">Advanced Certified Scrum Product Owner (A-CSPO) Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background:linear-gradient(269.39deg, #21251c 0.47%, #4bc4ab 97.87%);">
                                        <div class="course-icon"><img src="assets-new/img/icons/advance_scrum_master.webp" class="img-fluid" alt="PSPO"></div>
                                        <div class="course-name">Professional Scrum Product Owner (PSPO) Training<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading " style="    background: linear-gradient(269.39deg, #66919a 0.47%, #6707a6 97.87%);">
                                        <div class="course-icon"><img src="assets-new/img/icons/scrummaster-certified.webp" class="img-fluid" alt="PSM training"></div>
                                        <div class="course-name">Professional Scrum Master (PSM) Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style=" background:linear-gradient(240deg,#9e3bddad,#0099a2a1)">
                                        <div class="course-icon"><img src="assets-new/img/icons/scrummaster-certified.webp" class="img-fluid" alt="PSM1 training"></div>
                                        <div class="course-name">Professional Scrum Master (PSM1) Training<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (42300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="#" data-toggle="modal" data-target="#myModal1">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- electronics section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a href="best-embedded-systems-training-noida" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="    background: linear-gradient(240deg,#0b99a6,#52c37b);">
                                        <div class="course-icon"><img src="assets-new/img/icons/embedded_system.webp" class="img-fluid" alt="Embedded Systems Certification"></div>
                                        <div class="course-name">Embedded Systems Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (51300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a href="best-embedded-systems-training-noida">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#46dbea,#507fd9);">

                                        <div class="course-icon"><img src="assets-new/img/icons/microcontroller.webp" class="img-fluid" alt="8051 Microcontroller Certification"></div>
                                        <div class="course-name">8051 Microcontroller Certification Training

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#e0ec51,#2eb18d);">
                                        <div class="course-icon "><img src="assets-new/img/icons/pic_microcontroller.webp" class="img-fluid" alt="PIC Microcontroller Certification"></div>
                                        <div class="course-name">PIC Microcontroller Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (16600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA" style="background: linear-gradient(240deg,#7b97de,#5d288c);">
                                        <div class="course-icon"><img src="assets-new/img/icons/avr_microcontroller.webp" class="img-fluid" alt="AVR Microcontroller Certification"></div>
                                        <div class="course-name">AVR Microcontroller Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;"> 4 (17700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row end -->
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon"><img src="assets-new/img/icons/arm_microcontroller.webp" class="img-fluid" alt="ARM Microcontroller Certification"></div>
                                        <div class="course-name">ARM Microcontroller Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (31300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#bdd377,#09adef);">

                                        <div class="course-icon"><img src="assets-new/img/icons/robotics.webp" class="img-fluid" alt="Robotics Certification"></div>
                                        <div class="course-name">Robotics Certification Training


                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i> <i style="color:#fff;"> 4.5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#fddb92,#09adef);">
                                        <div class="course-icon "><img src="assets-new/img/icons/rtos_certification.webp" class="img-fluid" alt="RTOS Certification"></div>
                                        <div class="course-name">RTOS Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (20600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#d66868,#e1a940);">
                                        <div class="course-icon "><img src="assets-new/img/icons/altium_certification.webp" class="img-fluid" alt="Altium Certification"></div>
                                        <div class="course-name">Altium Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- row end -->

                    </div>
                </div>
                <!-- electronics section end -->

                <!-- sap section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">

                            <div class="course-col">
                                <div class="course-heading" style="    background: linear-gradient(240deg,#0b99a6,#52c37b);">
                                    <div class="course-icon"><img src="assets-new/img/icons/sap_basic.webp" class="img-fluid" alt="SAP Certification"></div>
                                    <div class="course-name">SAP Certification Training<br>
                                        <span class="reviews_styling">Reviews</span>
                                        <br>
                                        <span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i><i style="color:#fff;"> 5 (51300)</i>
                                        </span>

                                    </div>
                                </div>
                                <div class="course-info">
                                    <h4>Key Features</h4>
                                    <ul>
                                        <li> Curriculum as per Industry Standards </li>
                                        <li> Immersive Learning Experience
                                        </li>
                                        <li> Integrated Labs and Assessments
                                        </li>
                                    </ul>

                                    <a href="best-erp-sap-training-noida" tabindex="0">VIEW MORE</a>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#46dbea,#507fd9);">

                                        <div class="course-icon"><img src="assets-new/img/icons/sap_successfactor.webp" class="img-fluid" alt="SAP SuccessFactors Certification "></div>
                                        <div class="course-name">SAP SuccessFactors Certification Training

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#e0ec51,#2eb18d);">
                                        <div class="course-icon "><img src="assets-new/img/icons/sap_fico.webp" class="img-fluid" alt="SAP FICO Certification"></div>
                                        <div class="course-name">SAP FICO Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (16600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA" style="background: linear-gradient(240deg,#7b97de,#5d288c);">
                                        <div class="course-icon"><img src="assets-new/img/icons/sap_certification.webp" class="img-fluid" alt="SAP MM Certification"></div>
                                        <div class="course-name">SAP MM Certification Training

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;"> 4 (17700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row end -->
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon"><img src="assets-new/img/icons/sap_pp.webp" class="img-fluid" alt="SAP PP Certification "></div>
                                        <div class="course-name">SAP PP Certification Training <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (31300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#bdd377,#09adef);">

                                        <div class="course-icon"><img src="assets-new/img/icons/sap_sd.webp" class="img-fluid" alt="SAP SD Certification"></div>
                                        <div class="course-name">SAP SD Certification Training


                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i> <i style="color:#fff;"> 4.5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#fddb92,#09adef);">
                                        <div class="course-icon "><img src="assets-new/img/icons/sap_basic.webp" class="img-fluid" alt="SAP BASIC Certification"></div>
                                        <div class="course-name">SAP BASIC Certification Training

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (20600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#d66868,#e1a940);">
                                        <div class="course-icon "><img src="assets-new/img/icons/sap_scm.webp" class="img-fluid" alt="SAP SCM Certification"></div>
                                        <div class="course-name">SAP SCM Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- row end -->

                    </div>
                </div>
                <!-- foregien language section start -->
                <div class="tab-content-item">
                    <div class="row tab-flex">
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="    background: linear-gradient(240deg,#0b99a6,#52c37b);">
                                        <div class="course-icon"><img src="assets-new/img/icons/foreign_language.webp" class="img-fluid" alt="Foreign Language Certification"></div>
                                        <div class="course-name">Foreign Language Certification Training<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (51300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#46dbea,#507fd9);">

                                        <div class="course-icon"><img src="assets-new/img/icons/chinese_language.webp" class="img-fluid" alt="Chinese Language Certification"></div>
                                        <div class="course-name">Chinese Language Certification Training

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i style="color:#fff;"> 5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#e0ec51,#2eb18d);">
                                        <div class="course-icon "><img src="assets-new/img/icons/french_language.webp" class="img-fluid" alt="French Language Certification"></div>
                                        <div class="course-name">French Language Certification Training
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (16600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading CCNA" style="background: linear-gradient(240deg,#7b97de,#5d288c);">
                                        <div class="course-icon"><img src="assets-new/img/icons/german_language.webp" class="img-fluid" alt="German Language Certification"></div>
                                        <div class="course-name">German Language Certification Training

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i style="color:#fff;"> 4 (17700)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- row end -->
                        <!-- row start  -->
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading" style="background: linear-gradient(240deg,#bdd377,#09adef);">
                                        <div class="course-icon"><img src="assets-new/img/icons/italian_language.webp" class="img-fluid" alt="Italian Language Certification"></div>
                                        <div class="course-name">Italian Language Certification Training<br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (31300)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>

                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading Cloud" style="background: linear-gradient(240deg,#bdd377,#09adef);">

                                        <div class="course-icon"><img src="assets-new/img/icons/russian_language.webp" class="img-fluid" alt="Russian Language Certification"></div>
                                        <div class="course-name">Russian Language Certification Training


                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i> <i style="color:#fff;"> 4.5 (30000)</i>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#fddb92,#09adef);">
                                        <div class="course-icon "><img src="assets-new/img/icons/spanish_language.webp" class="img-fluid" alt="Spanish Language Certification"></div>
                                        <div class="course-name">Spanish Language Certification Training

                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i style="color:#fff;"> 5 (20600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <a data-toggle="modal" data-target="#myModal1" class="course_link">
                                <div class="course-col">
                                    <div class="course-heading NET" style="background: linear-gradient(240deg,#d66868,#e1a940);">
                                        <div class="course-icon "><img src="assets-new/img/icons/japanese_language.webp" class="img-fluid" alt="Japanese Language Certification"></div>
                                        <div class="course-name">Japanese Language Certification
                                            <br>
                                            <span class="reviews_styling">Reviews</span>
                                            <br>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i><i style="color:#fff;"> 4.5 (40600)</i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="course-info">
                                        <h4>Key Features</h4>
                                        <ul>
                                            <li> Curriculum as per Industry Standards
                                            </li>
                                            <li> Immersive Learning Experience
                                            </li>
                                            <li> Integrated Labs and Assessments
                                            </li>
                                        </ul>
                                        <a data-toggle="modal" data-target="#myModal1" tabindex="0">VIEW MORE</a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- row end -->

                    </div>
                </div>



            </div>
            <!-- form start -->
            <section class="for-nigeria-program">
                <div class="container">
                    <div class="program">
                        <h4>Excited about joining our program? Lock on to your place right now.</h4>
                        <form action="mail" method="post" id="submitformrequestfooter">
                            <input type="text" class="hidden" name="prefered_title">
                            <input type="hidden" name="comingfrom" value="Get a Call Back Home-page">
                            <ul class="row">
                                <li class="col-sm-4 col-md-3">
                                    <div class="did-floating-label-content">
                                        <input class="did-floating-input" type="text" placeholder=" " name="name" pattern="[A-Z\sa-z]{3,20}" required>
                                        <label class="did-floating-label">Name*</label>
                                    </div>
                                </li>

                                <li class="col-sm-4 col-md-3">


                                    <div style="display: flex; background-color: #fff; border-radius: 9px;">
                                        <select style="border:none; width:90px; background-color:#fff;" name="countrycode">
                                            
                                            <option value="+1 (US) ">US +1</option>
                                            <option value="+20 (EG) ">EG +20</option>
                                            <option value="+212 (MA) ">MA +212</option>
                                            <option value="+213 (DZ) ">DZ +213</option>
                                            <option value="+216 (TN) ">TN +216</option>
                                            <option value="+218 (LY) ">LY +218</option>
                                            <option value="+220 (GM) ">GM +220</option>
                                            <option value="+221 (SN) ">SN +221</option>
                                            <option value="+222 (MR) ">MR +222</option>
                                            <option value="+223 (ML) ">ML +223</option>
                                            <option value="+224 (GN) ">GN +224</option>
                                            <option value="+225 (CI) ">CI +225</option>
                                            <option value="+226 (BF) ">BF +226</option>
                                            <option value="+227 (NE) ">NE +227</option>
                                            <option value="+228 (TG) ">TG +228</option>
                                            <option value="+229 (BJ) ">BJ +229</option>
                                            <option value="+230 (MU) ">MU +230</option>
                                            <option value="+231 (LR) ">LR +231</option>
                                            <option value="+232 (SL) ">SL +232</option>
                                            <option value="+233 (GH) ">GH +233</option>
                                            <option value="+234 (NG) ">NG +234</option>
                                            <option value="+235 (TD) ">TD +235</option>
                                            <option value="+236 (CF) ">CF +236</option>
                                            <option value="+237 (CM) ">CM +237</option>
                                            <option value="+238 (CV) ">CV +238</option>
                                            <option value="+239 (ST) ">ST +239</option>
                                            <option value="+240 (GQ) ">GQ +240</option>
                                            <option value="+241 (GA) ">GA +241</option>
                                            <option value="+242 (CG) ">CG +242</option>
                                            <option value="+243 (ZR) ">ZR +243</option>
                                            <option value="+244 (AO) ">AO +244</option>
                                            <option value="+245 (GW) ">GW +245</option>
                                            <option value="+246 (BB) ">BB +246</option>
                                            <option value="+248 (SC) ">SC +248</option>
                                            <option value="+249 (SD) ">SD +249</option>
                                            <option value="+250 (RW) ">RW +250</option>
                                            <option value="+251 (ET) ">ET +251</option>
                                            <option value="+252 (SO) ">SO +252</option>
                                            <option value="+253 (DJ) ">DJ +253</option>
                                            <option value="+254 (KE) ">KE +254</option>
                                            <option value="+255 (TZ) ">TZ +255</option>
                                            <option value="+256 (UG) ">UG +256</option>
                                            <option value="+257 (BI) ">BI +257</option>
                                            <option value="+258 (MZ) ">MZ +258</option>
                                            <option value="+260 (ZM) ">ZM +260</option>
                                            <option value="+261 (MG) ">MG +261</option>
                                            <option value="+263 (ZW) ">ZW +263</option>
                                            <option value="+264 (NA) ">NA +264</option>
                                            <option value="+265 (MW) ">MW +265</option>
                                            <option value="+266 (LS) ">LS +266</option>
                                            <option value="+267 (BW) ">BW +267</option>
                                            <option value="+268 (SZ) ">SZ +268</option>
                                            <option value="+269 (KM) ">KM +269</option>
                                            <option value="+27 (ZA) ">ZA +27</option>
                                            <option value="+290 (SH) ">SH +290</option>
                                            <option value="+299 (GL) ">GL +299</option>
                                            <option value="+30 (GR) ">GR +30</option>
                                            <option value="+31 (NL) ">NL +31</option>
                                            <option value="+32 (BE) ">BE +32</option>
                                            <option value="+33 (FR) ">FR +33</option>
                                            <option value="+34 (ES) ">ES +34</option>
                                            <option value="+345 (KY) ">KY +345</option>
                                            <option value="+351 (PT) ">PT +351</option>
                                            <option value="+352 (LU) ">LU +352</option>
                                            <option value="+353 (IE) ">IE +353</option>
                                            <option value="+354 (IS) ">IS +354</option>
                                            <option value="+355 (AL) ">AL +355</option>
                                            <option value="+356 (MT) ">MT +356</option>
                                            <option value="+357 (CY) ">CY +357</option>
                                            <option value="+358 (FI) ">FI +358</option>
                                            <option value="+359 (BG) ">BG +359</option>
                                            <option value="+36 (HU) ">HU +36</option>
                                            <option value="+370 (LT) ">LT +370</option>
                                            <option value="+371 (LV) ">LV +371</option>
                                            <option value="+372 (EE) ">EE +372</option>
                                            <option value="+373 (MD) ">MD +373</option>
                                            <option value="+374 (AM) ">AM +374</option>
                                            <option value="+375 (BY) ">BY +375</option>
                                            <option value="+376 (AD) ">AD +376</option>
                                            <option value="+377 (MC) ">MC +377</option>
                                            <option value="+378 (SM) ">SM +378</option>
                                            <option value="+380 (UA) ">UA +380</option>
                                            <option value="+381 (RS) ">RS +381</option>
                                            <option value="+382 (ME) ">ME +382</option>
                                            <option value="+385 (HR) ">HR +385</option>
                                            <option value="+386 (SI) ">SI +386</option>
                                            <option value="+387 (BA) ">BA +387</option>
                                            <option value="+389 (MK) ">MK +389</option>
                                            <option value="+39 (IT) ">IT +39</option>
                                            <option value="+40 (RO) ">RO +40</option>
                                            <option value="+41 (CH) ">CH +41</option>
                                            <option value="+420 (CZ) ">CZ +420</option>
                                            <option value="+421 (SK) ">SK +421</option>
                                            <option value="+423 (LI) ">LI +423</option>
                                            <option value="+43 (AT) ">AT +43</option>
                                            <option value="+44 (GB) ">GB +44</option>
                                            <option value="+441 (BM) ">BM +441</option>
                                            <option value="+45 (DK) ">DK +45</option>
                                            <option value="+46 (SE) ">SE +46</option>
                                            <option value="+47 (NO) ">NO +47</option>
                                            <option value="+473 (GD) ">GD +473</option>
                                            <option value="+48 (PL) ">PL +48</option>
                                            <option value="+49 (DE) ">DE +49</option>
                                            <option value="+501 (BZ) ">BZ +501</option>
                                            <option value="+502 (GT) ">GT +502</option>
                                            <option value="+503 (SV) ">SV +503</option>
                                            <option value="+504 (HN) ">HN +504</option>
                                            <option value="+505 (NI) ">NI +505</option>
                                            <option value="+506 (CR) ">CR +506</option>
                                            <option value="+507 (PA) ">PA +507</option>
                                            <option value="+509 (HT) ">HT +509</option>
                                            <option value="+51 (PE) ">PE +51</option>
                                            <option value="+52 (MX) ">MX +52</option>
                                            <option value="+53 (CU) ">CU +53</option>
                                            <option value="+54 (AR) ">AR +54</option>
                                            <option value="+55 (BR) ">BR +55</option>
                                            <option value="+56 (CL) ">CL +56</option>
                                            <option value="+57 (CO) ">CO +57</option>
                                            <option value="+58 (VE) ">VE +58</option>
                                            <option value="+591 (BO) ">BO +591</option>
                                            <option value="+592 (GY) ">GY +592</option>
                                            <option value="+593 (EC) ">EC +593</option>
                                            <option value="+595 (PY) ">PY +595</option>
                                            <option value="+597 (SR) ">SR +597</option>
                                            <option value="+598 (UY) ">UY +598</option>
                                            <option value="+60 (MY) ">MY +60</option>
                                            <option value="+61 (AU) ">AU +61</option>
                                            <option value="+62 (ID) ">ID +62</option>
                                            <option value="+63 (PH) ">PH +63</option>
                                            <option value="+64 (NZ) ">NZ +64</option>
                                            <option value="+65 (SG) ">SG +65</option>
                                            <option value="+66 (TH) ">TH +66</option>
                                            <option value="+664 (MS) ">MS +664</option>
                                            <option value="+673 (BN) ">BN +673</option>
                                            <option value="+674 (NR) ">NR +674</option>
                                            <option value="+675 (PG) ">PG +675</option>
                                            <option value="+676 (TO) ">TO +676</option>
                                            <option value="+677 (SB) ">SB +677</option>
                                            <option value="+678 (VU) ">VU +678</option>
                                            <option value="+679 (FJ) ">FJ +679</option>
                                            <option value="+685 (WS) ">WS +685</option>
                                            <option value="+686 (KI) ">KI +686</option>
                                            <option value="+691 (FM) ">FM +691</option>
                                            <option value="+7 (RU) ">RU +7</option>
                                            <option value="+758 (LC) ">LC +758</option>
                                            <option value="+767 (DM) ">DM +767</option>
                                            <option value="+784 (VC) ">VC +784</option>
                                            <option value="+809 (DO) ">DO +809</option>
                                            <option value="+81 (JP) ">JP +81</option>
                                            <option value="+82 (KR) ">KR +82</option>
                                            <option value="+84 (VN) ">VN +84</option>
                                            <option value="+850 (KP) ">KP +850</option>
                                            <option value="+852 (HK) ">HK +852</option>
                                            <option value="+853 (MO) ">MO +853</option>
                                            <option value="+855 (KH) ">KH +855</option>
                                            <option value="+856 (LA) ">LA +856</option>
                                            <option value="+86 (CN) ">CN +86</option>
                                            <option value="+868 (TT) ">TT +868</option>
                                            <option value="+869 (KN) ">KN +869</option>
                                            <option value="+876 (JM) ">JM +876</option>
                                            <option value="+880 (BD) ">BD +880</option>
                                            <option value="+886 (TW) ">TW +886</option>
                                            <option value="+90 (TR) ">TR +90</option>
                                            <option value="+91 (IN) " selected="selected"> IN +91</option>
                                            <option value="+92 (PK) ">PK +92</option>
                                            <option value="+93 (AF) ">AF +93</option>
                                            <option value="+94 (LK) ">LK +94</option>
                                            <option value="+95 (MM) ">MM +95</option>
                                            <option value="+960 (MV) ">MV +960</option>
                                            <option value="+961 (LB) ">LB +961</option>
                                            <option value="+962 (JO) ">JO +962</option>
                                            <option value="+963 (SY) ">SY +963</option>
                                            <option value="+964 (IQ) ">IQ +964</option>
                                            <option value="+965 (KW) ">KW +965</option>
                                            <option value="+966 (SA) ">SA +966</option>
                                            <option value="+967 (YE) ">YE +967</option>
                                            <option value="+968 (OM) ">OM +968</option>
                                            <option value="+971 (AE) ">AE +971</option>
                                            <option value="+972 (IL) ">IL +972</option>
                                            <option value="+973 (BH) ">BH +973</option>
                                            <option value="+974 (QA) ">QA +974</option>
                                            <option value="+975 (BT) ">BT +975</option>
                                            <option value="+976 (MN) ">MN +976</option>
                                            <option value="+977 (NP) ">NP +977</option>
                                            <option value="+98 (IR) ">IR +98</option>
                                            <option value="+993 (TM) ">TM +993</option>
                                            <option value="+994 (AZ) ">AZ +994</option>
                                            <option value="+995 (GE) ">GE +995</option>
                                            <option value="+996 (KG) ">KG +996</option>
                                            <option value="+998 (UZ) ">UZ +998</option>
                                        </select>
                                        <input name="number" placeholder="Phone Number" style="border:none;" maxlength="10" minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                                    </div>
                                </li>



                                <p class="hidden-lg hidden-md hidden-sm" style="margin-top: 40px!important;"></p>

                                <li class="col-sm-4 col-md-3">
                                    <div class="did-floating-label-content">
                                        <input class="did-floating-input preferd-time" type="text" placeholder=" " minlength="3" maxlength="8" name="Prefer_time" required>
                                        <label class="did-floating-label preferd-time">Preferred time to call (HH:MM)*</label>
                                    </div>
                                </li>

                                <li class="col-sm-12 col-md-3">
                                    <input id="buttonhiderequestfooter" type="submit" class="btn-application w-100" name="footer_requestcallback" value="Submit">
                                    <div id="buttonshowrequestfooter" class="btn-application w-100" style="display:none; text-align:center; cursor:none; opacity:0.8;" disabled><span class="spinner-border spinner-border-sm" style="font-weight: normal;"></span> Please wait</div>
                                </li>
                            </ul>
                        </form>
                        <p style="text-align:start;">We have a huge variety of programs to offer. For other program related queries, you can connect with us.</p>
                    </div>
                </div>
            </section>

        </div>
    </section>


    <section id="home-learner-benefit">
        <div class="container">
            <h2 style="text-align: center; padding-bottom:0;  font-weight: 700;color: #000;">Learning Advantages</h2>
            <hr class="bottom_line">
            <div class="rap">
                <div class="row align-items-center justify-content-center home-learner-benefit-Wrapper">
                    <div class="col-sm-2">
                        <div class="home-learner-benefit-user">
                            <img src="assets-new/img/icons/world_class_pedagogy.webp" alt="kvch Suport" style="width:100%; height:auto;">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="home-learner-benefit-content">
                            <h4>Excellent Instructional <span style="color:#cc0f0f;">Process</span> </h4>
                            <ul>
                                <li>Gain Knowledge from Top Faculty and Industry Leaders </li>
                                <li>Participate in engaging tasks for enhanced learning</li>
                                <li>Engage in group tasks & technology fest</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="home-learner-benefit-rating-details">
                            <div class="home-learner-benefit-rating-wrap">
                                <img src="assets-new/img/icons/rating.webp" alt="Rating">
                                <p>4.8/5 Rating</p>
                            </div>
                            <div class="home-learner-benefit-rating-wrap">
                                <img src="assets-new/img/icons/gamelearning.webp" alt="Time Learning">
                                <p>Real Time Learning</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center home-learner-benefit-Wrapper">
                    <div class="col-sm-2">
                        <div class="home-learner-benefit-user">
                            <img src="assets-new/img/support1.webp" alt="kvch suport" style="width:100%; height:auto;">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="home-learner-benefit-content">
                            <h4>Constant Support with <span style="color:#cc0f0f;">Expert Advice</span></h4>
                            <ul>
                                <li>Personal Learning Manager</li>
                                <li>Round the Clock Assistance </li>
                                <li>Grow your Network & Interact with Industry Experts</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="home-learner-benefit-rating-details">
                            <div class="home-learner-benefit-rating-wrap">
                                <img src="assets-new/img/icons/247.webp" alt="Support Available 24/7">
                                <p> Support Available 24/7</p>
                            </div>
                            <div class="home-learner-benefit-rating-wrap">
                                <img src="assets-new/img/icons/mentorship.webp" alt="Guidance">
                                <p>1 to 1 Guidance</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center home-learner-benefit-Wrapper">
                    <div class="col-sm-2">
                        <div class="home-learner-benefit-user">
                            <img src="assets-new/img/icons/career_assistance.webp" alt="kvch suport" style="width:100%; height:auto;">

                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="home-learner-benefit-content">
                            <h4>Professional <span style="color:#cc0f0f;">Mentoring</span> </h4>
                            <ul>
                                <li>Assistance for Interview & Resume Preparation</li>
                                <li>Helps in Building Career Advancing Skills</li>
                                <li>Placement Assistance Post Training </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="home-learner-benefit-rating-details">
                            <div class="home-learner-benefit-rating-wrap">
                                <img src="assets-new/img/icons/career.webp" alt="career">
                                <p>1M+ Career Moves</p>
                            </div>
                            <div class="home-learner-benefit-rating-wrap">
                                <img src="assets-new/img/icons/hiring_partners.webp" alt="Hiring Partners">
                                <p>Network of more than 1000+ Hiring Partners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-download-transition">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="home-download-transition-wrapper">
                        <h4>Successful career transition is a common outcome for our learners. </h4>
                        <h4> <i> It’s time to change your <b style="color:#fff;"> CAREER STORY.</b></i></h4>
                        <div class="text-left">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#apply_now" class="home-download-transition-btn">

                                Apply Now <i class="fa fa-send-o"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cards">
        <div class="container">
            <div class="card-title-content text-center">
                <h2 style="padding-bottom: 0px;">Our Services</h2>
                <hr class="bottom_line">

                <p>KVCH offers a gamut of services and trainings to enhance your career, professional growth and helps you carve a niche for yourself in this competitive world.</p>
            </div>
        </div>
        <div class="container">

            <div class="card-flex">
                <div class="row">
                    <div class="col-sm-4 card-item mb-5">

                        <div class="card">
                            <div class="card__top">
                                <div class="card__img-wrap">
                                    <div>
                                        <img src="assets-new/img/icon-1.webp" class="active" alt="Industrial Training">
                                        <img src="assets-new/img/icon-1-h.webp" class="hover" alt="Industrial Training">
                                    </div>
                                </div>
                                <div class="card__details">
                                    <h4 class="card__title">Industrial Training</h4>
                                    <div class="card__description">
                                        A practical learning exposure to give you a real-time hands-on industry experience.
                                    </div>
                                </div>
                            </div>
                            <div class="card-bottom"><a href="industrial-internship">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>

                    </div>

                    <div class="col-sm-4 card-item mb-5">
                        <div class="card">
                            <div class="card__top">
                                <div class="card__img-wrap">
                                    <div>
                                        <img src="assets-new/img/icon-2.webp" class="active" alt="For Working Professionals">
                                        <img src="assets-new/img/icon-2-h.webp" class="hover" alt="For Working Professionals">
                                    </div>
                                </div>
                                <div class="card__details">
                                    <h4 class="card__title">For Working Professionals</h4>
                                    <div class="card__description">
                                        Learn while you earn! Special weekend courses to keep you updated with the ever-changing technology.
                                    </div>
                                </div>
                            </div>
                            <div class="card-bottom"><a href="working-professionals">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>

                    <div class="col-sm-4 card-item mb-5">
                        <div class="card">
                            <div class="card__top">
                                <div class="card__img-wrap">
                                    <div>
                                        <img src="assets-new/img/icon-3.webp" class="active" alt="Corporate Training">
                                        <img src="assets-new/img/icon-3-h.webp" class="hover" alt="Corporate Training">
                                    </div>
                                </div>
                                <div class="card__details">
                                    <h4 class="card__title">Corporate Training</h4>
                                    <div class="card__description">
                                        Benefit from our online & offline corporate training programs, specially designed for your needs.
                                    </div>
                                </div>
                            </div>
                            <div class="card-bottom"><a href="training-for-corporates">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>




                    <div class="col-sm-4 card-item  mt-3">
                        <div class="card">
                            <div class="card__top">
                                <div class="card__img-wrap">
                                    <div>
                                        <img src="assets-new/img/icon-4.webp" class="active" alt="On-site Training">
                                        <img src="assets-new/img/icon-4-h.webp" class="hover" alt="On-site Training">
                                    </div>
                                </div>
                                <div class="card__details">
                                    <h4 class="card__title">On-site Training</h4>
                                    <div class="card__description">
                                        Request the training at your premises, for your staff’s comfort & ease of learning.
                                    </div>
                                </div>
                            </div>
                            <div class="card-bottom"><a href="in-house-training">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="col-sm-4  card-item mt-3">
                        <div class="card">
                            <div class="card__top">
                                <div class="card__img-wrap">
                                    <div>
                                        <img src="assets-new/img/icon-5.webp" class="active" alt="Fly me a Trainer">
                                        <img src="assets-new/img/icon-5-h.webp" class="hover" alt="Fly me a Trainer">
                                    </div>
                                </div>
                                <div class="card__details">
                                    <h4 class="card__title">Fly me a Trainer</h4>
                                    <div class="card__description">
                                        Make your in-house training success with our well-trained trainers. You can ask us a trainer for your in-house training needs.
                                    </div>
                                </div>
                            </div>
                            <div class="card-bottom"><a href="fly-me-a-trainer">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="col-sm-4 card-item mt-3">
                        <div class="card">
                            <div class="card__top">
                                <div class="card__img-wrap">
                                    <div>
                                        <img src="assets-new/img/icon-6.webp" class="active" alt="Study Abroad">
                                        <img src="assets-new/img/icon-6-h.webp" class="hover" alt="Study Abroad">
                                    </div>
                                </div>
                                <div class="card__details">
                                    <h4 class="card__title">Study Abroad</h4>
                                    <div class="card__description">
                                        Achieve your dream to study abroad in the best university with us. We offer visa counselling & IELTS preparation.
                                    </div>
                                </div>
                            </div>
                            <div class="card-bottom"><a href="study-abroad">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!----row end---->
        </div>
    </section>


    <section class="icon-card">
        <div class="container">
            <div class="icon-card-title text-center">
                <h2 style="padding-bottom: 0;">Are You Industry Ready ?</h2>
                <hr class="bottom_line">

                <p>Get ready to take the world with a storm, open the door to a thousand opportunities with our thought-inspiring trainers.</p>
            </div>
            <div class="row flex-row">
                <div class="col-sm-3">
                    <div class="icon-text-wrapper">
                        <div class="icon-image"><img src="assets-new/img/vector-1.webp" class="" alt="Best Rated"></div>
                        <div class="icon-text-content">
                            <h4>Best Rated</h4>
                            <p>We are the industry leader in information & management training.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="icon-text-wrapper">
                        <div class="icon-image"><img src="assets-new/img/vector-2.webp" class="" alt="Skilled Faculty"></div>
                        <div class="icon-text-content">
                            <h4>Skilled Faculty</h4>
                            <p>For every domain, we have industry experts with 200+ live projects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="icon-text-wrapper">
                        <div class="icon-image"><img src="assets-new/img/vector-3.webp" class="" alt="Global Presence"></div>
                        <div class="icon-text-content">
                            <h4>Global Presence</h4>
                            <p>Trained in 50+ countries and specialize in on-site & off-site training.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-3">
                    <div class="icon-text-wrapper">
                        <div class="icon-image"><img src="assets-new/img/vector-4.webp" class="" alt="Opportunities"></div>
                        <div class="icon-text-content">
                            <h4>Opportunities</h4>
                            <p>Post-training with us, you are ready for a promotion!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="big-half-and-half flex-row image-block-left">
        <div class="row" style="width:100%;">
            <div class="big-half-and-half-image col-sm-6">
                <img src="assets-new/img/banner-boy.webp" class="img-fluid" alt="Training Centre">
            </div>
            <div class="big-half-and-half-text clearfix right col-sm-6">
                <div class="big-half-and-half-text__wrapper" style="width: 100%;">
                    <h2 style="padding-bottom: 0;" style="font-size: 38px;">Move your Career Fast Forward with <b style="color:#ffd600;"> #1 Training Centre </b></h2>
                    <ul class="clearfix">
                        <li>
                            <div class="number">1</div>
                            <div class="number-text">
                                <span>For Beginners</span> Propel your career with a degree/certificate to expand <br> your knowledge.
                                <a href="industrial-internship">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="number">2</div>
                            <div class="number-text">
                                <span>For Professionals</span> Upskill and keep yourself abreast with the technology change.
                                <a href="working-professionals">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="number">3</div>
                            <div class="number-text">
                                <span>For Corporates</span> Better your workforce through our blended learning programs.
                                <a href="corporate-training">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>


    <section style="padding: 40px 10px 20px;">
        <div class="container-fluid">
            <h2 style="text-align:center; padding-bottom:0;     font-weight: 700; color: #232323; ">Placement Process</h2>
            <hr class="bottom_line">

            </h2>
            <figure>
                <img src="assets-new/img/placement_process.webp" alt="placement process" style="width:100%;height:auto;">
            </figure>
        </div>
    </section>


    <section class="clients-section">
        <div class="container">
            <h2 style="text-align:center; padding-bottom: 0;">Where our Alumini work</h2>
            <hr class="bottom_line">

            <div class="row mt-6 placemnet-img">
                <div class="col-sm-5">
                    <img src="assets-new/img/client-logo.webp" alt="client logo" style="width:100%; height:auto;">
                </div>

                <div class="col-sm-6">

                    <section id="testim" class="testim clients-section">
                        <div class="testim-cover">
                            <div class="wrap">

                                <span id="right-arrow" class="arrow right fa fa-chevron-right reviews-arrow-right"></span>
                                <span id="left-arrow" class="arrow left fa fa-chevron-left reviews-arrow-left"></span>
                                <ul id="testim-dots" class="dots">
                                    <li class="dot active"></li>

                                    <li class="dot"></li>

                                    <li class="dot"></li>

                                    <li class="dot"></li>

                                    <li class="dot"></li>
                                </ul>
                                <div id="testim-content" class="cont">


                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <div class="active">
                                                <div class="img">
                                                    <img src="assets-new/img/aman_mehra1.webp" alt="reviews" class="reviews-img-home-page">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div>
                                                <div class="img">
                                                    <img src="assets-new/img/asha_pal.webp" alt="ASha" class="reviews-img-home-page">

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="img">
                                                    <img src="assets-new/img/deepak_thakur.webp" alt="reviews" class="reviews-img-home-page">

                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div>

                                                <div class="img">
                                                    <img src="assets-new/img/mahima.webp" alt="reviews" class="reviews-img-home-page">

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="img">
                                                    <img src="assets-new/img/mahima1.webp" alt="reviews" class="reviews-img-home-page">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div>

                                                <div class="img">
                                                    <img src="assets-new/img/mohd_azeem.webp" alt="reviews" class="reviews-img-home-page">
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="img">
                                                    <img src="assets-new/img/mohd_shahzed.webp" alt="reviews" class="reviews-img-home-page">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div>

                                                <div class="img">
                                                    <img src="assets-new/img/ms_kumar.webp" alt="reviews" class="reviews-img-home-page">
                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <div class="img">
                                                    <img src="assets-new/img/shubham.webp" alt="reviews" class="reviews-img-home-page">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div>

                                                <div class="img">
                                                    <img src="assets-new/img/avanish_kumar.webp" alt="reviews" class="reviews-img-home-page">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>




                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-6">
                    <center>

                        <a class="button2" href="placement">View All Placements <i class="fa fa-arrow-right"></i></a>

                    </center>


                </div>

            </div>
        </div>
    </section>

    <section class="full-img-section">
        <div class="full-img"><img src="assets-new/img/unnamed.webp" class="img-fluid" alt="training solutions"></div>
        <div class="full-text">
            <div class="container1">
                <div class="row">
                    <div class="col-lg-7 offset-sm-5">
                        <div class="full-text-wrapper">
                            <h2>

                                KVCH for business offers a range of training solutions for the corporate world.
                            </h2>

                            <h3 style="color: #fff;">We help you transform your workforce into competitive professionals.</h3>

                            <p>Allow us to conduct a training for your staff notice the change. We offer a range of effective training programs. Our training range from soft skills to technical training workshops. Learning becomes easy and enjoyable with our well-trained trainers, who undergo regular training upgrades every year.</p>

                            <a href="corporate-training" class="btn">GET STARTED NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="modal" id="apply_now">
        <div class="modal-dialog1">
            <div class="modal-content-new" style="background-color:#fff; padding:0px;">

                <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                    <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                        <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/download_icon.webp" alt="apply now"> Apply Now! </h5>
                        <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                    </div>
                </div>


                <div class="modal-body" style="padding:30px;">
                    <form action="mail" method="post" id="submitformdownc">
                        <input type="hidden" name="comingfrom" value="Request Callback Home Page">
                        <div class="form-con">
                            <div class="did-floating-label-content">
                                <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" " pattern="[A-Z\sa-z]{3,20}" required>
                                <label class="did-floating-label" style="color: #a6a6a6;">Name*</label>
                            </div>
                        </div>

                        <div class="form-con">
                            <div class="did-floating-label-content">
                                <input class="did-floating-input modal_form_styling" type="email" name="email" placeholder=" " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                <label class="did-floating-label" style="color: #a6a6a6;">Email*</label>
                            </div>
                        </div>

                        <!-- <div class="form-con">
                            <div class="did-floating-label-content">
                                <input type="tel" name="number" onkeypress="return number_e(event)" class="did-floating-input course_number_field modal_form_styling country_flag" placeholder="Mobile Number*" pattern="^[1-9]\d*$" minlength="10" required>
                            </div>
                        </div> -->

                        <div class="country-form-design">
                            <select style="border:none;" name="countrycode">
                                
                                <option value="+1 (US) ">US +1</option>
                                <option value="+20 (EG) ">EG +20</option>
                                <option value="+212 (MA) ">MA +212</option>
                                <option value="+213 (DZ) ">DZ +213</option>
                                <option value="+216 (TN) ">TN +216</option>
                                <option value="+218 (LY) ">LY +218</option>
                                <option value="+220 (GM) ">GM +220</option>
                                <option value="+221 (SN) ">SN +221</option>
                                <option value="+222 (MR) ">MR +222</option>
                                <option value="+223 (ML) ">ML +223</option>
                                <option value="+224 (GN) ">GN +224</option>
                                <option value="+225 (CI) ">CI +225</option>
                                <option value="+226 (BF) ">BF +226</option>
                                <option value="+227 (NE) ">NE +227</option>
                                <option value="+228 (TG) ">TG +228</option>
                                <option value="+229 (BJ) ">BJ +229</option>
                                <option value="+230 (MU) ">MU +230</option>
                                <option value="+231 (LR) ">LR +231</option>
                                <option value="+232 (SL) ">SL +232</option>
                                <option value="+233 (GH) ">GH +233</option>
                                <option value="+234 (NG) ">NG +234</option>
                                <option value="+235 (TD) ">TD +235</option>
                                <option value="+236 (CF) ">CF +236</option>
                                <option value="+237 (CM) ">CM +237</option>
                                <option value="+238 (CV) ">CV +238</option>
                                <option value="+239 (ST) ">ST +239</option>
                                <option value="+240 (GQ) ">GQ +240</option>
                                <option value="+241 (GA) ">GA +241</option>
                                <option value="+242 (CG) ">CG +242</option>
                                <option value="+243 (ZR) ">ZR +243</option>
                                <option value="+244 (AO) ">AO +244</option>
                                <option value="+245 (GW) ">GW +245</option>
                                <option value="+246 (BB) ">BB +246</option>
                                <option value="+248 (SC) ">SC +248</option>
                                <option value="+249 (SD) ">SD +249</option>
                                <option value="+250 (RW) ">RW +250</option>
                                <option value="+251 (ET) ">ET +251</option>
                                <option value="+252 (SO) ">SO +252</option>
                                <option value="+253 (DJ) ">DJ +253</option>
                                <option value="+254 (KE) ">KE +254</option>
                                <option value="+255 (TZ) ">TZ +255</option>
                                <option value="+256 (UG) ">UG +256</option>
                                <option value="+257 (BI) ">BI +257</option>
                                <option value="+258 (MZ) ">MZ +258</option>
                                <option value="+260 (ZM) ">ZM +260</option>
                                <option value="+261 (MG) ">MG +261</option>
                                <option value="+263 (ZW) ">ZW +263</option>
                                <option value="+264 (NA) ">NA +264</option>
                                <option value="+265 (MW) ">MW +265</option>
                                <option value="+266 (LS) ">LS +266</option>
                                <option value="+267 (BW) ">BW +267</option>
                                <option value="+268 (SZ) ">SZ +268</option>
                                <option value="+269 (KM) ">KM +269</option>
                                <option value="+27 (ZA) ">ZA +27</option>
                                <option value="+290 (SH) ">SH +290</option>
                                <option value="+299 (GL) ">GL +299</option>
                                <option value="+30 (GR) ">GR +30</option>
                                <option value="+31 (NL) ">NL +31</option>
                                <option value="+32 (BE) ">BE +32</option>
                                <option value="+33 (FR) ">FR +33</option>
                                <option value="+34 (ES) ">ES +34</option>
                                <option value="+345 (KY) ">KY +345</option>
                                <option value="+351 (PT) ">PT +351</option>
                                <option value="+352 (LU) ">LU +352</option>
                                <option value="+353 (IE) ">IE +353</option>
                                <option value="+354 (IS) ">IS +354</option>
                                <option value="+355 (AL) ">AL +355</option>
                                <option value="+356 (MT) ">MT +356</option>
                                <option value="+357 (CY) ">CY +357</option>
                                <option value="+358 (FI) ">FI +358</option>
                                <option value="+359 (BG) ">BG +359</option>
                                <option value="+36 (HU) ">HU +36</option>
                                <option value="+370 (LT) ">LT +370</option>
                                <option value="+371 (LV) ">LV +371</option>
                                <option value="+372 (EE) ">EE +372</option>
                                <option value="+373 (MD) ">MD +373</option>
                                <option value="+374 (AM) ">AM +374</option>
                                <option value="+375 (BY) ">BY +375</option>
                                <option value="+376 (AD) ">AD +376</option>
                                <option value="+377 (MC) ">MC +377</option>
                                <option value="+378 (SM) ">SM +378</option>
                                <option value="+380 (UA) ">UA +380</option>
                                <option value="+381 (RS) ">RS +381</option>
                                <option value="+382 (ME) ">ME +382</option>
                                <option value="+385 (HR) ">HR +385</option>
                                <option value="+386 (SI) ">SI +386</option>
                                <option value="+387 (BA) ">BA +387</option>
                                <option value="+389 (MK) ">MK +389</option>
                                <option value="+39 (IT) ">IT +39</option>
                                <option value="+40 (RO) ">RO +40</option>
                                <option value="+41 (CH) ">CH +41</option>
                                <option value="+420 (CZ) ">CZ +420</option>
                                <option value="+421 (SK) ">SK +421</option>
                                <option value="+423 (LI) ">LI +423</option>
                                <option value="+43 (AT) ">AT +43</option>
                                <option value="+44 (GB) ">GB +44</option>
                                <option value="+441 (BM) ">BM +441</option>
                                <option value="+45 (DK) ">DK +45</option>
                                <option value="+46 (SE) ">SE +46</option>
                                <option value="+47 (NO) ">NO +47</option>
                                <option value="+473 (GD) ">GD +473</option>
                                <option value="+48 (PL) ">PL +48</option>
                                <option value="+49 (DE) ">DE +49</option>
                                <option value="+501 (BZ) ">BZ +501</option>
                                <option value="+502 (GT) ">GT +502</option>
                                <option value="+503 (SV) ">SV +503</option>
                                <option value="+504 (HN) ">HN +504</option>
                                <option value="+505 (NI) ">NI +505</option>
                                <option value="+506 (CR) ">CR +506</option>
                                <option value="+507 (PA) ">PA +507</option>
                                <option value="+509 (HT) ">HT +509</option>
                                <option value="+51 (PE) ">PE +51</option>
                                <option value="+52 (MX) ">MX +52</option>
                                <option value="+53 (CU) ">CU +53</option>
                                <option value="+54 (AR) ">AR +54</option>
                                <option value="+55 (BR) ">BR +55</option>
                                <option value="+56 (CL) ">CL +56</option>
                                <option value="+57 (CO) ">CO +57</option>
                                <option value="+58 (VE) ">VE +58</option>
                                <option value="+591 (BO) ">BO +591</option>
                                <option value="+592 (GY) ">GY +592</option>
                                <option value="+593 (EC) ">EC +593</option>
                                <option value="+595 (PY) ">PY +595</option>
                                <option value="+597 (SR) ">SR +597</option>
                                <option value="+598 (UY) ">UY +598</option>
                                <option value="+60 (MY) ">MY +60</option>
                                <option value="+61 (AU) ">AU +61</option>
                                <option value="+62 (ID) ">ID +62</option>
                                <option value="+63 (PH) ">PH +63</option>
                                <option value="+64 (NZ) ">NZ +64</option>
                                <option value="+65 (SG) ">SG +65</option>
                                <option value="+66 (TH) ">TH +66</option>
                                <option value="+664 (MS) ">MS +664</option>
                                <option value="+673 (BN) ">BN +673</option>
                                <option value="+674 (NR) ">NR +674</option>
                                <option value="+675 (PG) ">PG +675</option>
                                <option value="+676 (TO) ">TO +676</option>
                                <option value="+677 (SB) ">SB +677</option>
                                <option value="+678 (VU) ">VU +678</option>
                                <option value="+679 (FJ) ">FJ +679</option>
                                <option value="+685 (WS) ">WS +685</option>
                                <option value="+686 (KI) ">KI +686</option>
                                <option value="+691 (FM) ">FM +691</option>
                                <option value="+7 (RU) ">RU +7</option>
                                <option value="+758 (LC) ">LC +758</option>
                                <option value="+767 (DM) ">DM +767</option>
                                <option value="+784 (VC) ">VC +784</option>
                                <option value="+809 (DO) ">DO +809</option>
                                <option value="+81 (JP) ">JP +81</option>
                                <option value="+82 (KR) ">KR +82</option>
                                <option value="+84 (VN) ">VN +84</option>
                                <option value="+850 (KP) ">KP +850</option>
                                <option value="+852 (HK) ">HK +852</option>
                                <option value="+853 (MO) ">MO +853</option>
                                <option value="+855 (KH) ">KH +855</option>
                                <option value="+856 (LA) ">LA +856</option>
                                <option value="+86 (CN) ">CN +86</option>
                                <option value="+868 (TT) ">TT +868</option>
                                <option value="+869 (KN) ">KN +869</option>
                                <option value="+876 (JM) ">JM +876</option>
                                <option value="+880 (BD) ">BD +880</option>
                                <option value="+880 (BD) ">BD +880</option>
                                <option value="+886 (TW) ">TW +886</option>
                                <option value="+91 (IN) " selected="selected"> IN +91</option>
                                <option value="+92 (PK) ">PK +92</option>
                                <option value="+93 (AF) ">AF +93</option>
                                <option value="+94 (LK) ">LK +94</option>
                                <option value="+95 (MM) ">MM +95</option>
                                <option value="+960 (MV) ">MV +960</option>
                                <option value="+961 (LB) ">LB +961</option>
                                <option value="+962 (JO) ">JO +962</option>
                                <option value="+963 (SY) ">SY +963</option>
                                <option value="+964 (IQ) ">IQ +964</option>
                                <option value="+965 (KW) ">KW +965</option>
                                <option value="+966 (SA) ">SA +966</option>
                                <option value="+967 (YE) ">YE +967</option>
                                <option value="+968 (OM) ">OM +968</option>
                                <option value="+971 (AE) ">AE +971</option>
                                <option value="+972 (IL) ">IL +972</option>
                                <option value="+973 (BH) ">BH +973</option>
                                <option value="+974 (QA) ">QA +974</option>
                                <option value="+975 (BT) ">BT +975</option>
                                <option value="+976 (MN) ">MN +976</option>
                                <option value="+977 (NP) ">NP +977</option>
                                <option value="+98 (IR) ">IR +98</option>
                                <option value="+993 (TM) ">TM +993</option>
                                <option value="+994 (AZ) ">AZ +994</option>
                                <option value="+995 (GE) ">GE +995</option>
                                <option value="+996 (KG) ">KG +996</option>
                                <option value="+998 (UZ) ">UZ +998</option>
                            </select>
                            <input name="number" placeholder="Phone Number" style="border:none; height: auto; color: #000;" maxlength="10" minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">

                        </div>

                        <p></p>


                        <div class=" form-conn mt-2">
                            <input id="buttonhidedownc" type="submit" class="course_modal_btn w-100" name="home-page-submit" value="Submit">
                            <div id="buttonshowdownc" class="course_modal_btn w-100" style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // banner slider
        $('.slider').slick({
            draggable: true,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            dots: false,
            fade: false,
            speed: 4000,
            infinite: true,
            grabCursor: 'true',
            cssEase: 'ease-in-out',
            touchThreshold: 100
        })


        // review slider
        'use strict'
        var testim = document.getElementById("testim"),

            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 6000,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,

            ignoreTouch = 30;

        window.onload = function() {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }

            playSlide(currentSlide);

            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })

            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            })

            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;

                touchPosDiff = touchStartPos - touchEndPos;

                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);


                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
    </script>

    <div class="modal" id="Apply_now">
        <div class="modal-dialog2">
            <div class="modal-content" style="background-color:#fff; padding:0px;">

                <div style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);">
                    <div class="modal-header" style="padding:20px 20px 0px 20px; ">
                        <h5 class="modal-title course_modal_title"> <img src="assets-new/img/icons/book1.webp" alt="Request a Callback"> Interested in <b style="color: #f9753e;">Mega Drive</b></h5>
                        <button type="button" class="course_modal_close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="padding:20px;">
                    <div class="row">
                        <div class="col-sm-5 img-hide hidden-xs">
                            <img src="assets-new/img/icons/enrollnow.webp" style="width: 100%; height:auto;" alt="">
                        </div>
                        <div class="col-sm-7">
                            <form action="mail" method="post" id="submitformreff">
                                <input type="text" class="hidden" name="nam_mail_no_title">
                                <input type="hidden" name="comingfrom" value="Interested in Mega Drive">
                                <div class="form-con">
                                    <div class="did-floating-label-content">
                                        <input class="did-floating-input modal_form_styling" type="text" name="name" placeholder=" " required>
                                        <label class="did-floating-label" style="color: #a6a6a6;">Name*</label>
                                    </div>
                                </div>

                                <div class="form-con">
                                    <div class="did-floating-label-content">
                                        <input class="did-floating-input modal_form_styling" type="email" name="email" placeholder=" " required>
                                        <label class="did-floating-label" style="color: #a6a6a6;">Email*</label>
                                    </div>
                                </div>


                                <div class="country-form-design">
                                    <select style="border:none;" name="countrycode">
                                        
                                        <option value="+1 (US) ">US +1</option>
                                        <option value="+20 (EG) ">EG +20</option>
                                        <option value="+212 (MA) ">MA +212</option>
                                        <option value="+213 (DZ) ">DZ +213</option>
                                        <option value="+216 (TN) ">TN +216</option>
                                        <option value="+218 (LY) ">LY +218</option>
                                        <option value="+220 (GM) ">GM +220</option>
                                        <option value="+221 (SN) ">SN +221</option>
                                        <option value="+222 (MR) ">MR +222</option>
                                        <option value="+223 (ML) ">ML +223</option>
                                        <option value="+224 (GN) ">GN +224</option>
                                        <option value="+225 (CI) ">CI +225</option>
                                        <option value="+226 (BF) ">BF +226</option>
                                        <option value="+227 (NE) ">NE +227</option>
                                        <option value="+228 (TG) ">TG +228</option>
                                        <option value="+229 (BJ) ">BJ +229</option>
                                        <option value="+230 (MU) ">MU +230</option>
                                        <option value="+231 (LR) ">LR +231</option>
                                        <option value="+232 (SL) ">SL +232</option>
                                        <option value="+233 (GH) ">GH +233</option>
                                        <option value="+234 (NG) ">NG +234</option>
                                        <option value="+235 (TD) ">TD +235</option>
                                        <option value="+236 (CF) ">CF +236</option>
                                        <option value="+237 (CM) ">CM +237</option>
                                        <option value="+238 (CV) ">CV +238</option>
                                        <option value="+239 (ST) ">ST +239</option>
                                        <option value="+240 (GQ) ">GQ +240</option>
                                        <option value="+241 (GA) ">GA +241</option>
                                        <option value="+242 (CG) ">CG +242</option>
                                        <option value="+243 (ZR) ">ZR +243</option>
                                        <option value="+244 (AO) ">AO +244</option>
                                        <option value="+245 (GW) ">GW +245</option>
                                        <option value="+246 (BB) ">BB +246</option>
                                        <option value="+248 (SC) ">SC +248</option>
                                        <option value="+249 (SD) ">SD +249</option>
                                        <option value="+250 (RW) ">RW +250</option>
                                        <option value="+251 (ET) ">ET +251</option>
                                        <option value="+252 (SO) ">SO +252</option>
                                        <option value="+253 (DJ) ">DJ +253</option>
                                        <option value="+254 (KE) ">KE +254</option>
                                        <option value="+255 (TZ) ">TZ +255</option>
                                        <option value="+256 (UG) ">UG +256</option>
                                        <option value="+257 (BI) ">BI +257</option>
                                        <option value="+258 (MZ) ">MZ +258</option>
                                        <option value="+260 (ZM) ">ZM +260</option>
                                        <option value="+261 (MG) ">MG +261</option>
                                        <option value="+263 (ZW) ">ZW +263</option>
                                        <option value="+264 (NA) ">NA +264</option>
                                        <option value="+265 (MW) ">MW +265</option>
                                        <option value="+266 (LS) ">LS +266</option>
                                        <option value="+267 (BW) ">BW +267</option>
                                        <option value="+268 (SZ) ">SZ +268</option>
                                        <option value="+269 (KM) ">KM +269</option>
                                        <option value="+27 (ZA) ">ZA +27</option>
                                        <option value="+290 (SH) ">SH +290</option>
                                        <option value="+299 (GL) ">GL +299</option>
                                        <option value="+30 (GR) ">GR +30</option>
                                        <option value="+31 (NL) ">NL +31</option>
                                        <option value="+32 (BE) ">BE +32</option>
                                        <option value="+33 (FR) ">FR +33</option>
                                        <option value="+34 (ES) ">ES +34</option>
                                        <option value="+345 (KY) ">KY +345</option>
                                        <option value="+351 (PT) ">PT +351</option>
                                        <option value="+352 (LU) ">LU +352</option>
                                        <option value="+353 (IE) ">IE +353</option>
                                        <option value="+354 (IS) ">IS +354</option>
                                        <option value="+355 (AL) ">AL +355</option>
                                        <option value="+356 (MT) ">MT +356</option>
                                        <option value="+357 (CY) ">CY +357</option>
                                        <option value="+358 (FI) ">FI +358</option>
                                        <option value="+359 (BG) ">BG +359</option>
                                        <option value="+36 (HU) ">HU +36</option>
                                        <option value="+370 (LT) ">LT +370</option>
                                        <option value="+371 (LV) ">LV +371</option>
                                        <option value="+372 (EE) ">EE +372</option>
                                        <option value="+373 (MD) ">MD +373</option>
                                        <option value="+374 (AM) ">AM +374</option>
                                        <option value="+375 (BY) ">BY +375</option>
                                        <option value="+376 (AD) ">AD +376</option>
                                        <option value="+377 (MC) ">MC +377</option>
                                        <option value="+378 (SM) ">SM +378</option>
                                        <option value="+380 (UA) ">UA +380</option>
                                        <option value="+381 (RS) ">RS +381</option>
                                        <option value="+382 (ME) ">ME +382</option>
                                        <option value="+385 (HR) ">HR +385</option>
                                        <option value="+386 (SI) ">SI +386</option>
                                        <option value="+387 (BA) ">BA +387</option>
                                        <option value="+389 (MK) ">MK +389</option>
                                        <option value="+39 (IT) ">IT +39</option>
                                        <option value="+40 (RO) ">RO +40</option>
                                        <option value="+41 (CH) ">CH +41</option>
                                        <option value="+420 (CZ) ">CZ +420</option>
                                        <option value="+421 (SK) ">SK +421</option>
                                        <option value="+423 (LI) ">LI +423</option>
                                        <option value="+43 (AT) ">AT +43</option>
                                        <option value="+44 (GB) ">GB +44</option>
                                        <option value="+441 (BM) ">BM +441</option>
                                        <option value="+45 (DK) ">DK +45</option>
                                        <option value="+46 (SE) ">SE +46</option>
                                        <option value="+47 (NO) ">NO +47</option>
                                        <option value="+473 (GD) ">GD +473</option>
                                        <option value="+48 (PL) ">PL +48</option>
                                        <option value="+49 (DE) ">DE +49</option>
                                        <option value="+501 (BZ) ">BZ +501</option>
                                        <option value="+502 (GT) ">GT +502</option>
                                        <option value="+503 (SV) ">SV +503</option>
                                        <option value="+504 (HN) ">HN +504</option>
                                        <option value="+505 (NI) ">NI +505</option>
                                        <option value="+506 (CR) ">CR +506</option>
                                        <option value="+507 (PA) ">PA +507</option>
                                        <option value="+509 (HT) ">HT +509</option>
                                        <option value="+51 (PE) ">PE +51</option>
                                        <option value="+52 (MX) ">MX +52</option>
                                        <option value="+53 (CU) ">CU +53</option>
                                        <option value="+54 (AR) ">AR +54</option>
                                        <option value="+55 (BR) ">BR +55</option>
                                        <option value="+56 (CL) ">CL +56</option>
                                        <option value="+57 (CO) ">CO +57</option>
                                        <option value="+58 (VE) ">VE +58</option>
                                        <option value="+591 (BO) ">BO +591</option>
                                        <option value="+592 (GY) ">GY +592</option>
                                        <option value="+593 (EC) ">EC +593</option>
                                        <option value="+595 (PY) ">PY +595</option>
                                        <option value="+597 (SR) ">SR +597</option>
                                        <option value="+598 (UY) ">UY +598</option>
                                        <option value="+60 (MY) ">MY +60</option>
                                        <option value="+61 (AU) ">AU +61</option>
                                        <option value="+62 (ID) ">ID +62</option>
                                        <option value="+63 (PH) ">PH +63</option>
                                        <option value="+64 (NZ) ">NZ +64</option>
                                        <option value="+65 (SG) ">SG +65</option>
                                        <option value="+66 (TH) ">TH +66</option>
                                        <option value="+664 (MS) ">MS +664</option>
                                        <option value="+673 (BN) ">BN +673</option>
                                        <option value="+674 (NR) ">NR +674</option>
                                        <option value="+675 (PG) ">PG +675</option>
                                        <option value="+676 (TO) ">TO +676</option>
                                        <option value="+677 (SB) ">SB +677</option>
                                        <option value="+678 (VU) ">VU +678</option>
                                        <option value="+679 (FJ) ">FJ +679</option>
                                        <option value="+685 (WS) ">WS +685</option>
                                        <option value="+686 (KI) ">KI +686</option>
                                        <option value="+691 (FM) ">FM +691</option>
                                        <option value="+7 (RU) ">RU +7</option>
                                        <option value="+758 (LC) ">LC +758</option>
                                        <option value="+767 (DM) ">DM +767</option>
                                        <option value="+784 (VC) ">VC +784</option>
                                        <option value="+809 (DO) ">DO +809</option>
                                        <option value="+81 (JP) ">JP +81</option>
                                        <option value="+82 (KR) ">KR +82</option>
                                        <option value="+84 (VN) ">VN +84</option>
                                        <option value="+850 (KP) ">KP +850</option>
                                        <option value="+852 (HK) ">HK +852</option>
                                        <option value="+853 (MO) ">MO +853</option>
                                        <option value="+855 (KH) ">KH +855</option>
                                        <option value="+856 (LA) ">LA +856</option>
                                        <option value="+86 (CN) ">CN +86</option>
                                        <option value="+868 (TT) ">TT +868</option>
                                        <option value="+869 (KN) ">KN +869</option>
                                        <option value="+876 (JM) ">JM +876</option>
                                        <option value="+880 (BD) ">BD +880</option>
                                        <option value="+880 (BD) ">BD +880</option>
                                        <option value="+886 (TW) ">TW +886</option>
                                        <option value="+91 (IN) " selected="selected"> IN +91</option>
                                        <option value="+92 (PK) ">PK +92</option>
                                        <option value="+93 (AF) ">AF +93</option>
                                        <option value="+94 (LK) ">LK +94</option>
                                        <option value="+95 (MM) ">MM +95</option>
                                        <option value="+960 (MV) ">MV +960</option>
                                        <option value="+961 (LB) ">LB +961</option>
                                        <option value="+962 (JO) ">JO +962</option>
                                        <option value="+963 (SY) ">SY +963</option>
                                        <option value="+964 (IQ) ">IQ +964</option>
                                        <option value="+965 (KW) ">KW +965</option>
                                        <option value="+966 (SA) ">SA +966</option>
                                        <option value="+967 (YE) ">YE +967</option>
                                        <option value="+968 (OM) ">OM +968</option>
                                        <option value="+971 (AE) ">AE +971</option>
                                        <option value="+972 (IL) ">IL +972</option>
                                        <option value="+973 (BH) ">BH +973</option>
                                        <option value="+974 (QA) ">QA +974</option>
                                        <option value="+975 (BT) ">BT +975</option>
                                        <option value="+976 (MN) ">MN +976</option>
                                        <option value="+977 (NP) ">NP +977</option>
                                        <option value="+98 (IR) ">IR +98</option>
                                        <option value="+993 (TM) ">TM +993</option>
                                        <option value="+994 (AZ) ">AZ +994</option>
                                        <option value="+995 (GE) ">GE +995</option>
                                        <option value="+996 (KG) ">KG +996</option>
                                        <option value="+998 (UZ) ">UZ +998</option>
                                    </select>
                                    <input name="number" placeholder="Phone Number" style="border:none; height: auto; color: #000;" maxlength="10" minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">

                                </div>

                                <p></p>



                                <div class="form-conn mt-2">
                                    <input id="buttonhidereff" name="home-page-submit" type="submit" class="course_modal_btn w-100" value="Submit">
                                    <div id="buttonshowreff" class="course_modal_btn w-100" style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                                </div>
                            </form>
                            <p style="font-size: 10px; color:#000" class="mt-3">By clicking "Submit" you agree to our <a href="https://kvch.in/terms-use" target="_blank" style="color: #cc0f0f;">terms & conditions </a> and our <a href="https://kvch.in/privacy-policy" target="_blank" style="color: #cc0f0f;">privacy policy.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('assets-new/includes/index-scripts.php');
    include('assets-new/includes/footer.php');
    ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script> -->


</body>

</html>