<style>
    .js div#preloader {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2147483647 !important;
        width: 100%;
        height: 100%;
        overflow: visible;
        background-size: cover;

        /* You can change the background color and image URL here. */
        background: #fff url('assets-new/img/icons/loader.gif') no-repeat center center;
    }
</style>
<div id="preloader"></div>
<style>
    .g-recaptcha {
        width: 100%;
    }

    .labelplace {
        margin-left: 15px;
        font-size: 16px;
    }

    /* inner search css */
    #animate_text {
        display: none
    }

    #caption {
        font-size: 16px;
        color: #fff;
        font-weight: 400;
        position: absolute;
        left: 10px;
        top: 10px;
    }

    #cursor {
        line-height: 20px;
        font-size: 20px;
        margin-left: 3px;
    }

    /*  outeer search css */
    #outerSearch::placeholder {
        color: #000;
        font-weight: 600;
    }

    .kvch-fixed-header {
        margin: 0px;
        top: 55px;
        position: sticky;
        z-index: 1000;
        background-color: #fff;
        border-bottom: 2px solid #cf2128;
    }

    @media only screen and (max-width: 500px) {
        .kvch-fixed-header {
            margin-top: 90px;
        }
    }
</style>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<p id="captchamandatory" style="color: #fff; text-align:center; padding: 0px;"></p>
<header class="kvch_header hdv2_main ">
    <nav class="navbar navbar-fixed-top">
        <div class="new_head_ham slide-menu-control hidden-lg hidden-md" style="color: #fff;" aria-label="humburger" role="button" data-target="test-menu-left" data-action="open">
            <i class="fa fa-bars"></i>
        </div>
        <div class="navbar-headerw d-md-none d-lg-none d-xl-none"><a aria-label="logo" class="trackButton" data-button-name="KVCH" data-button-location="First fold navigation" data-button-type="Static" href="/" target="_self">
                <img style="min-height: 10px;" class="" src="assets-new/img/white-logo.webp" alt="logo">
            </a></div>

        <div class="search_header">

            <input id="outerSearch" class="open_search_overlay" type="text" placeholder="">
        </div>
        <style>
            .top-navbar-menu {
                border: 1px solid linear-gradient(126deg, #f5a623, #f76b1c);
                padding: 8px 20px;
                background: linear-gradient(126deg, #f5a623, #f76b1c) !important;
                color: #fff;
                border-radius: 0px;
            }

            .top-navbar-menu:hover {
                border: 1px solid #fff;
                background: #42A3E3 !important;
                color: #fff;
                padding: 8px 20px;
            }
        </style>
        <ul class="nav navbar-nav-new pull-right before_login_head">
            <li style="border: 1px solid #fff; justify-content: space-between; padding: 3px; border-radius: 50px;" class="mobile_home_head hidden-sm hidden-md hidden-lg"><a href="tel:'+919510.860.860'" class="callbtnresp_discovery giTrackElementDiscoveryHeader hidden-sm hidden-md hidden-lg" data-gi-action="Header Click - '.$countryGroup.'" data-gi-label="default" data-gi-category="Discovery Calls"><i class="fa fa-phone"></i> Call Now</a></li>
            <li class="hidden-xs hidden-sm"> <center> <a href="linguaskill" target="_blank" style="padding:0px 10px 0px 0px;"><img src="assets-new/img/linguaskill-from-camb.webp" style="width:150px; height:100%;" alt=""></a></center></li>
            <!-- <li class="hidden-xs"><a href="best-training-courses-noida" target="_blank" class="ga_courses_click">Courses</a></li> -->
            <li class="hidden-xs hidden-sm"><a href="https://kvch.in/blogs/" target="_blank" class="blog_click">Blogs</a></li>
            <li class="hidden-xs" style="padding: 0px 12px;"> <a href="https://kvch.in/digi_portal" target="_blank" class="top-navbar-menu"> <i class="fa fa-users"></i> Digi portal </a></li>
            <li class="hidden-xs hidden-sm" style="padding: 0px 12px;"><a href="quick-pay" target="_blank" class="top-navbar-menu"> <i class="fa fa-credit-card"></i> Quick pay </a></li>

        </ul>
    </nav>


</header>


<div class="discoversearch hide">
    <section class="container-fluid searchcontainer">

        <div class="container-fluif searchwrapper">
            <center>
                <span class="hidden-sm hidden-xs">

                    <a href="https://kvch.in"> <img src="https://kvch.in/assets-new/img/footer-logo.webp" alt="" style=" width:150px; height:100%;"></a>

                </span>
            </center>


            <span class="searchboxcontainer">
                <div class="searchbox" style="border-bottom:none;">

                    <span class="backbtn-new" id="search_back_btn">
                        <i class="fa fa-angle-left"></i>
                    </span>

                    <div class="search_input_result" style="border-bottom:1px solid #fff; margin-left:10px;">
                        <span id="search-box">
                            <span id="animate_text">Enter Course, Category or Keyword</span>

                            <span id="caption"></span>

                            <input class="new-search-inp" type="text" maxlength="255" value="" autocomplete="off" id="inputKeyword" data-gi-label-expanded="true" autofocus>
                        </span>
                        <div class="search_result_web1">
                            <ul id="suggesstion-box">

                            </ul>
                        </div>

                    </div>
                </div>
            </span>



            <span class="closeimmersivesearch hidden-xs">
                <span>x</span>
            </span>

            <span class=" hidden-sm hidden-xs">

                <a href="tel:+91 9510860860"> <img src="assets-new/img/icons/helpline-no.webp" alt="" style=" position:relative; margin-left: 65px;     width:200px; height:100%; "></a>

            </span>
        </div>
    </section>




    <!-- this is for tab section start -->
    <section class="container-fluid no-padding tabcontainer hidden-xs">
        <div class="tabcategory">
            <div class="container no-padding tabcategorylist">
                <ul class="nav nav-tabs categoryvisible" id="discoverysearchtab">

                    <li><a data-toggle="tab" href="#searchTab_1">Trending Courses</a></li>

                    <li><a data-toggle="tab" href="#searchTab_4">DevOps</a></li>

                    <li><a data-toggle="tab" href="#searchTab_11">Cloud Computing</a></li>

                    <li><a data-toggle="tab" href="#searchTab_6">Big Data</a></li>

                    <li><a data-toggle="tab" href="#searchTab_7">BI & Visualization</a></li>

                    <li class="hidden-sm"><a data-toggle="tab" href="#searchTab_8">Programming & Frameworks</a></li>

                </ul>

            </div>
        </div>
        <div class="container-fluid no-padding categorycourses">
            <div class="container tab-content">
                <div id='searchTab_1' class="tab-pane fade in active">
                    <ul>

                        <li><a href='best-data-science-training-noida' target="_blank">Data Science Training</a></li>

                        <li><a href='best-python-training-noida' target="_blank">Python Training</a></li>

                        <li><a href='best-machine-learning-training-noida' target="_blank">Machine Learning Training</a></li>

                        <li><a href='best-artificial-intelligence-training-noida' target="_blank">Artificial Intelligence Training</a></li>
                    </ul>
                    <a class="catallcourses" href="best-training-courses-noida" target="_blank"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>


                <div id='searchTab_4' class="tab-pane fade">
                    <ul>

                        <li><a href='aws-devops-engineer-professional-training' target="_blank">AWS Certified DevOps Engineer Training</a></li>

                        <li><a href='aws-sysops-administrator-certification-training' target="_blank">AWS Sysops Administrator Training</a></li>
                    </ul>
                    <a class="catallcourses" href="best-training-courses-noida" target="_blank"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_11' class="tab-pane fade">
                    <ul>

                        <li><a href='salesforce-administrator-and-developer-training' target="_blank">Salesforce Administrator Training</a></li>

                        <li><a href='aws-solution-architect-certification-training' target="_blank">AWS Solution Architect Training</a></li>

                        <li><a href='best-microsoft-azure-development-noida' target="_blank">Microsoft Azure Training Certification Course</a></li>

                        <li><a href='best-cloud-computing-training-noida' target="_blank">Cloud Computing Certification Training</a></li>

                        <li><a href='google-cloud-certification-training-courses' target="_blank">Google Cloud Platform Training</a></li>

                        <li><a href='microservices-software-architecture-training' target="_blank">Microservices Training</a></li>

                        <li><a href='microsoft-azure-administrator-certification-training' target="_blank">Microsoft Azure Administrator Training</a></li>
                    </ul>
                    <a class="catallcourses" href="best-training-courses-noida" target="_blank"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>

                <div id='searchTab_6' class="tab-pane fade">
                    <ul>
                        <li><a href='best-apache-spark-training-noida' target="_blank">Apache Spark Certification Training</a></li>

                        <li><a href='best-scala-training-noida' target="_blank">Scala Certification Training</a></li>

                        <li><a href='/hadoop-administration-training-certification' target="_blank">Big Data Hadoop Administration Certification Training</a></li>
                    </ul>
                    <a class="catallcourses" href="best-training-courses-noida" target="_blank"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>


                <div id='searchTab_7' class="tab-pane fade">
                    <ul>
                        <li><a href='best-sas-programming-training-noida' target="_blank">SAS Training</a></li>

                        <li><a href='best-mis-data-analysis-in-excel-training' target="_blank">MIS Certification Training </a></li>

                        <li><a href='power-bi-certification-training' target="_blank">Power BI Training</a></li>

                        <li><a href='best-tableau-training-noida' target="_blank">Tableau Training</a></li>

                        <li><a href='business-accounting-and-taxation-training-certification' target="_blank">Business Accounting and Taxation Training</a></li>
                    </ul>
                    <a class="catallcourses" href="best-training-courses-noida" target="_blank"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>


                <div id='searchTab_8' class="tab-pane fade">
                    <ul>

                        <li><a href='full-stack-developer-programme' target="_blank">Full Stack Development Training</a></li>

                        <li><a href='best-java-training-noida' target="_blank">Java Certification Training </a></li>

                        <li><a href='python-django-certification-training' target="_blank">python django training</a></li>

                        <li><a href='best-node-js-training-noida' target="_blank">Node JS Training</a></li>

                        <li><a href='c-programming-certification-training' target="_blank">C Programming Training</a></li>

                        <li><a href='best-dot-net-training-noida' target="_blank">.NET Training </a></li>

                        <li><a href='c-plus-plus-certification-training' target="_blank">C++ Training</a></li>

                        <li><a href='comprehensive-java-certification-training' target="_blank">Comprehensive Java Training </a></li>
                    </ul>
                    <a class="catallcourses" href="best-training-courses-noida" target="_blank"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
            </div>
        </div>

    </section>
</div>


<!-- lapp tab nd desktop menu or large menu and mobile menu -->
<div class="slide_menu_back">
    <nav class="slide-menu" id="test-menu-left">
        <div class="controls slide-menu-control" data-action="close" type="button">
            Browse Categories
        </div>
        <!-- lapp tab nd desktop menu or large menu -->

        <ul>

            <li class="hidden-lg hidden-md hidden-sm"><a href="corporate-training">Corporate Training</a></li>
            <li class="hidden-lg hidden-md hidden-sm"><a href="best-training-courses-noida">All Courses</a></li>
            <li class="login_menu hidden-lg hidden-lg hidden-md hidden-sm"><a href="https://kvch.in/digi_portal/"> <span class="login_click login-vd login_new " style="background-color: #e9963e; color:#fff;"> Digi Portal </span></a></li>
            <li>
                <a href="#" title="AI/ML/Data Science">AI/ML/Data Science</a>
                <ul>
                    <li><a href="best-data-science-training-noida" title="Data Science Training">Data Science Training</a></li>
                    <li><a href="best-python-training-noida" title="Python Training">Python Training</a> </li>
                    <li><a href="best-machine-learning-training-noida" title="Machine Learning Training">Machine Learning Training</a></li>
                    <li><a href="best-artificial-intelligence-training-noida" title="Artificial Intelligence Training">Artificial Intelligence Training</a></li>
                </ul>
            </li>

            <li>
                <a href="#" title="Programming & Frameworks">Programming & Frameworks</a>
                <ul>
                    <li><a href="full-stack-developer-programme" title="Full Stack  Developer Training">Full Stack Developer Training</a></li>
                    <li><a href="best-java-training-noida" title="Java Training Certification">Java Certification Training </a></li>
                    <li><a href="python-django-certification-training" title="Python Django Training">Python Django Training</a></li>
                    <li><a href="nodejs-certification-training" title="Node JS Training">Node JS Training</a></li>
                    <li><a href="c-programming-certification-training" title="C Programming Training">C Programming Training</a></li>
                    <li><a href="best-dot-net-training-noida" title=".NET Training Certification">.NET Certification Training </a></li>
                    <li><a href="c-plus-plus-certification-training" title="C++ Training ">C++ Certification Training </a></li>
                    <li><a href="comprehensive-java-certification-training" title="Comprehensive Java Certification Training">Comprehensive Java Certification Training</a></li>
                    <li><a href="best-spring-training-noida" title="Spring Framework Training">Spring Framework Training</a></li>
                    <li><a href="learn-python-scripting" title="Python Scripting Training">Python Scripting Training</a></li>
                    <li><a href="advanced-java-certification-training" title="Advanced Java Training">Advanced Java Training</a></li>
                    <li><a href="php-mysql-certification-training" title="PHP MySql Training ">PHP MySql Training </a></li>
                </ul>
            </li>
            <li>
                <a href="#" title="Networking">Networking</a>
                <ul>
                    <li><a href="best-ccna-training-noida" title="Cisco Certified Network Associate (CCNA) Training">Cisco Certified Network Associate (CCNA) Training</a></li>
                    <li><a href="best-ccnp-training-noida" title="CCNP Training">CCNP Certification Training </a></li>
                    <li><a href="best-mcse-training-noida" title="MCSE Training">MCSE Certification Training </a> </li>
                    <li><a href="mcsa-certification-training" title="MCSA Training Certification">MCSA Certification Training </a></li>
                    <li><a href="https://kvch.in/best-ethical-hacking-training-noida" title="Ethical hacking Training Certification">Ethical hacking Certification Training </a></li>
                    <li><a href="https://kvch.in/best-rhce-rh135-training-noida" title="RHCSA Certification">RHCSA Certification Training </a></li>
                    <li><a href="https://kvch.in/best-linux-training-noida" title="Linux Certification">Linux Certification Training </a></li>
                    <li><a href="https://kvch.in/best-openstack-training-noida" title="Open stack cloud Certification">Open stack cloud Certification Training </a></li>
                    <li><a href="https://kvch.in/best-cloud-computing-training-noida" title="Cloud computing Certification">Cloud computing Certification Training </a></li>


                </ul>
            </li>
            <li>
                <a href="#" title="Digital Marketing">Digital Marketing</a>
                <ul>
                    <li><a href="best-digital-marketing-training-noida" title="Digital Marketing Training  ">Digital Marketing Training </a></li>
                    <li><a href="seo-certification-training" title="Search engine optimization Training">Search engine optimization Training</a></li>
                    <li><a href="google-analytics-certification-training" title="Google Analytics Training">Google Analytics Training</a></li>
                    <li><a href="google-ads-ppc-certification-training" title="Mastering Google Analytics">Google Ads PPC Training</a></li>
                    <li><a href="best-smo-training-noida" title="Social Media Optomization Training">Social Media Optomization Training</a></li>
                </ul>
            </li>
            <li>
                <a href="#" title="Cloud Computing">Cloud Computing</a>
                <ul>
                    <li><a href="salesforce-administrator-and-developer-training" title="Salesforce Administrator Training">Salesforce Administrator Training</a></li>
                    <li><a href="aws-solution-architect-certification-training" title="AWS Solution Architect Training">AWS Solution Architect Training</a></li>
                    <li><a href="best-microsoft-azure-development-noida" title="Microsoft Azure Training">Microsoft Azure Training</a></li>
                    <li><a href="best-cloud-computing-training-noida" title="Cloud Computing Certification Training">Cloud Computing Training</a></li>
                    <li><a href="google-cloud-certification-training-courses" title="Google Cloud Platform Training">Google Cloud Platform Training</a></li>
                    <li><a href="microservices-software-architecture-training" title="Microservices Training ">Microservices Training </a></li>
                    <li><a href="microsoft-azure-administrator-certification-training" title="Microsoft Azure Administrator Training">Microsoft Azure Administrator Training</a></li>
                    <li><a href="salesforce-platform-developer-certification-training" title="Salesforce Platform Developer Training">Salesforce Platform Developer Training</a></li>
                    <li><a href="best-amazon-web-services-training-noida" title="Amazon Web Services Training">Amazon Web Services Training</a></li>
                    <li><a href="aws-sysops-administrator-certification-training" title="AWS Sysops Administrator Training">AWS Sysops Administrator Training</a></li>
                    <li><a href="best-iot-training-noida" title="Internet of Things (IoT) Training ">Internet of Things (IoT) Training </a></li>

                </ul>
            </li>
            <li>
                <a href="#" title="DevOps">DevOps</a>
                <ul>
                    <li><a href="devops-certification-training" title="DevOps Certification Training">DevOps Certification Training</a></li>
                    <li><a href="kubernetes-certification-training" title="Kubernetes Training">Kubernetes Certification Training</a></li>
                    <li><a href="aws-devops-engineer-professional-training" title="AWS Certified DevOps Engineer Training">AWS Certified DevOps Engineer Training</a></li>
                    <li><a href="docker-certification-training" title="Docker Certification Training ">Docker Certification Training </a></li>

                </ul>
            </li>
            <li>
                <a href="#" title="Databases">Databases</a>
                <ul>
                    <li><a href="best-ms-access-sql-training" title="Ms Access Sql Training">Ms Access Sql Training</a></li>
                    <li><a href="oracle-training-certification" title="Oracle Training Certification">Oracle Training Certification</a></li>
                    <li><a href="best-oracle-10g-11g-dba-training-noida" title="Oracle 10g/11g DBA Training">Oracle 10g/11g DBA Training</a></li>
                    <li><a href="best-data-mining-training-noida" title="Data Mining Training">Data Mining Training</a></li>
                    <li><a href="best-mongodb-training-noida" title="Mongodb Training">Mongodb Training</a></li>

                </ul>
            </li>

            <li>
                <a href="#" title="Cyber Security">Cyber Security</a>
                <ul>
                    <li><a href="best-ethical-hacking-training-noida" title="Ethical Hacking Training">Ethical Hacking Training</a></li>
                    <li><a href="ethical-hacking-winter-training-in-noida" title="Ethical Hacking Certification Training">Ethical Hacking Winter Training</a></li>
                    <li><a href="ethical-hacking-project-6-months-industrial-training-noida" title="6 Months Ethical Hacking Certification Training">6 Months Ethical Hacking Certification Training</a></li>
                </ul>
            </li>

            <li>
                <a href="#" title="BI and Visualization">BI and Visualization</a>
                <ul>
                    <li><a href="best-sas-programming-training-noida" title="SAS Training">SAS Training</a></li>
                    <li><a href="best-mis-data-analysis-in-excel-training" title="MIS Training Certification">MIS Training Certification</a></li>
                    <li><a href="power-bi-certification-training" title="Power BI Training">Power BI Training</a></li>
                    <li><a href="best-tableau-training-noida" title="Tableau Training">Tableau Training</a></li>
                    <li><a href="business-accounting-and-taxation-training-certification" title="Business Accounting and Taxation Training">Business Accounting and Taxation Training</a></li>

                </ul>
            </li>
            <li>
                <a href="#" title="Software Testing">Software Testing</a>
                <ul>
                    <li><a href="best-software-testing-training-noida" title="Software Testing Training">Software Testing Training</a></li>
                    <li><a href="manual-testing-certification-training" title="Manual Testing Certification Training">Manual Testing Training</a></li>
                    <li><a href="best-meter-training-in-noida" title="Testing using JMeter Training">Testing using JMeter Training</a></li>
                    <li><a href="advanced-predictived-modelling-r-training" title="Advanced Predictive Modelling in R Training">Advanced Predictive Modelling in R Training</a></li>
                    <li><a href="selenium-certification-training" title="Selenium Certification Training ">Selenium Certification Training </a></li>

                </ul>
            </li>


            <li>
                <a href="#" title="Frontend Development">Frontend Development</a>
                <ul>
                    <li><a href="best-angular-js-training-noida" title="Angular JS Training">Angular 7 Training</a></li>
                    <li><a href="best-css-training-noida" title="Css Training ">Css 3 Training </a></li>
                    <li><a href="best-bootstrap-training-noida" title="Bootstrap Training">Bootstrap 4/5 Training</a></li>
                    <li><a href="6-weeks-industrial-training-web-designing" title="6 Weeks Industrial Web Designing Training">6 Weeks Industrial Web Designing Training</a></li>
                </ul>
            </li>

            <li>
                <a href="#" title="Big Data">Big Data</a>
                <ul>
                    <li><a href="best-apache-spark-training-noida" title="Apache Spark Training">Apache Spark Training</a></li>
                    <li><a href="best-scala-training-noida" title="Scala Training">Scala Training</a></li>
                    <li><a href="best-big-data-hadoop-training-noida" title="Big Data Hadoop Training">Big Data Hadoop Training</a></li>
                </ul>
            </li>



            <li>
                <a href="#" title="Blockchain">Blockchain</a>
                <ul>
                    <li><a href="best-blockchain-training-in-noida" title="Blockchain Certification Training ">Blockchain Certification Training </a></li>
                    <li><a href="best-ethereum-training-in-noida" title="Ethereum Developer Certification Training">Ethereum Developer Training Course</a></li>
                </ul>
            </li>

            <li>
                <a href="#" title="Mobile Development">Mobile Development</a>
                <ul>
                    <li><a href="best-android-training-noida" title="Android Certification Training ">Android Certification Training </a></li>
                    <li><a href="android-project-6-months-industrial-training-noida" title="6 Months Android Training">6 Months Android Training</a></li>
                    <li><a href="best-ios-training-noida" title="iOS App Development Certification Training">iOS App Development Training</a></li>
                    <li><a href="ios-project-6-months-industrial-training-noida" title="6 Months iOS Training">6 Months iOS Training</a></li>

                </ul>
            </li>
            <li>
                <a href="#" title="Operating Systems">Operating Systems</a>
                <ul>
                    <li><a href="best-linux-training-noida" title="Linux Administration Certification Training ">Linux Administration Training </a></li>
                    <li><a href="linux-project-6-months-industrial-training-noida" title="6 Months Linux  Certification Training">6 Months Linux Training</a></li>
                </ul>
            </li>

            <li>
                <a href="#" title="Architecture & Design Patterns">Architecture & Design Patterns</a>
                <ul>
                    <li><a href="revit-architecture-winter-training-in-noida" title="Design Patterns Certification Training">Design Patterns Training</a></li>
                </ul>
            </li>
        </ul>

    </nav>
</div>
<!-- down navabr -->


<header class="page-header kvch-fixed-header d-none d-sm-block">

    <div class="middle-header">

        <div class="header-container clearfix">

            <div class="header-info desk">

                <ul class="clearfix">
                    <li>

                        <span>For International Nationals</span>

                        <a href="tel:18444455767 "><img src="assets-new/img/international.webp" alt=""> +1.844.44.55.767 </a>

                    </li>
                    <li>
                        <span>For Indian Nationals</span>

                        <a href="tel:919510860860"><img src="assets-new/img/india.webp" alt=""> +91.9510.860.860</a>

                    </li>

                    <li>

                        <span>For Whatsapp</span>

                        <a href=" https://wa.me/919654861762?text=Hii kvch" target="_blank"><img src="assets-new/img/wa.webp" alt="whatsapp"> +91.9654.861.762</a>

                    </li>

                </ul>

            </div>

            <div class="logo">

                <a href="https://kvch.in"><img src="assets-new/img/website-logo.webp" alt="logo"></a>

            </div>

            <a href="quick-pay" class="pay-down"> <b class="quick-pay1"> Quick Pay</b></a></li>


            <div class="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>

            <nav class="nav-primary clearfix">

                <ul class="menu-main-navigation menu clearfix">

                    <li class="menu-item-has-children">
                        <div class="new_head_ham slide-menu-control" style="color: #fff;" aria-label="humburger" role="button" data-target="test-menu-left" data-action="open">
                            <a href="javascript:void(0)">Trending Courses </a>
                        </div>
                    </li>

                    <li><a href="corporate-training">Corporate Training</a></li>

                    <li><a href="services">Services</a></li>

                    <li><a href="about"> About us </a></li>

                    <li><a href="contact"> Contact us</a></li>


                    <!-- <li><a href="quick-pay"> <b class="quick-pay"> Quick Pay</b></a></li> -->

                </ul>

            </nav>

        </div>

    </div>

</header>

<?php include('all-course-page-php-code.php'); ?>

<!--learn more modal -->
<div class="modal" id="learnmore">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h4 class="modal-title w-100">Talk to our <span>Training Advisor</span> </h4>
                <button type="button" style="border-radius:10%;" class="close" data-dismiss="modal"><span>x</span></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="mail" method="post" id="submitform" onsubmit="return submitUserForm();">
                    <input type="text" class="hidden" name="title">
                    <input type="text" class="hidden" name="title2">
                    <input type="text" class="hidden" name="title3">
                    <input type="hidden" value="<?php echo $data; ?> Page" name="comingfrom">
                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input" type="text" name="name" placeholder=" " required pattern="[A-Z\sa-z]{3,20}">
                            <label class="did-floating-label">Full Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input" type="text" name="email" placeholder=" " required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            <label class="did-floating-label">E-Mail Address*</label>
                        </div>
                    </div>

                 
                    <div style=" border-radius: 10px;display: flex;border: 1px solid #a6a6a6; height: 45px!important;">
                        <select style="border:none; border-radius: 4px 0px 0px 4px;" name="countrycode" >
                            <option value="">Code*</option>
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
                        <input name="number" placeholder="Phone Number" style="border:none; height: auto; color: #000; border-radius: 0px 4px 4px 0px; width:100%" maxlength="10" minlength="10" autocomplete="off" type="tel" pattern="^[1-9]\d*$" onkeypress="return number_e(event)">
                            
                    </div>
<p></p>
                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input" type="text" name="course_name" required placeholder=" ">
                            <label class="did-floating-label">Course Name*</label>
                        </div>
                    </div>



                    <div class="form-con">
                        <div class="floating-label">
                            <textarea class="floating-input floating-textarea" name="query" placeholder=" "></textarea>
                            <span class="highlight"></span>
                            <label class="labelplace"> Query (Optional)</label>
                        </div>
                    </div>
                    <center>
                        <div class="form-con" title="recqaptca">
                            
                            <div id="captha" class="g-recaptcha" data-sitekey="6Ldii1siAAAAACObLfaWSS0DVCYZdeXI4YdkdBKw" data-callback="verifyCaptcha">
                            </div>
                        </div>
                    </center>
                    <p id="captchamandatory" style="color: #fff; text-align:center; padding: 0px;"></p>
                    <div class=" form-conn">
                        <input id="buttonhide" name="organization_submit" type="submit" value="Submit" class="btn-submit">
                        <div id="buttonshow" class="btn-submit" style="display:none; text-align:center; cursor:none; border:none;" disabled>Please wait</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var recaptcha_response = '';

    function submitUserForm() {
        if (recaptcha_response.length == 0) {
            document.getElementById("captchamandatory").innerHTML = "Captha is mandatory";
            alert("Captha is mandatory");
            location.reload();
            return false;

        }
        return true;
    }

    function verifyCaptcha(token) {
        recaptcha_response = token;
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }
</script>


<script>
    document.documentElement.classList.add("js");

    jQuery(document).ready(function($) {

        // fade out preloader
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });

    });
</script>
<script>
    $(document).ready(function() {
        $("#inputKeyword").keyup(function() {
            //var searchKey = $('#inputKeyword').val(); 
            //console.log(searchKey);
            $.ajax({
                type: "POST",
                url: "search",
                data: 'searchKey=' + $(this).val(),
                success: function(data) {
                    //$("#suggesstion-box").show();
                    $("#suggesstion-box").html(data);
                    // $("#search-box").css("background", "#FFF");
                }
            });

        });


    });
</script>

<script>
    var captionLength = 0;
    var caption = '';
    var animate = true;
    $(document).ready(function() {
        setInterval('cursorAnimation()', 900);
        captionEl = $('#caption');
        setTimeout('startTypingEffect()', 5000);

        $("#inputKeyword").focusin(function() {
            console.log("Focus In");
            animate = false;
            captionEl.html('');
            captionLength = 0;
        });
        $("#inputKeyword").focusout(function() {
            console.log("Focus Out");
            animate = true;
            startTypingEffect();
        });

        $("#caption").click(function() {
            console.log("caption Focus In");
            animate = false;
            captionEl.html('');
            captionLength = 0;
            $("#inputKeyword").focus();
        });
        $("#caption").focusout(function() {
            console.log("caption Focus Out");
            animate = true;
            startTypingEffect();

        });
    });

    function startTypingEffect() {
        caption = $('#animate_text').html();
        type();
    }

    function type() {
        output = caption.substr(0, captionLength++);
        output += '<span id="cursor">|</span>';
        val = $("#inputKeyword").val();
        if (val != "" || (!animate)) {
            return;
        }
        // console.log(output);
        captionEl.html(output);
        if (captionLength < caption.length + 1) {
            setTimeout('type()', 50);
        } else {
            captionLength = 0;
            caption = '';
            caption = $('#animate_text').html();
            setTimeout('type()', 5000);
        }
    }

    function cursorAnimation() {
        $('#cursor').animate({
            opacity: 0
        }, 'slow', 'swing').animate({
            opacity: 1
        }, 'slow', 'swing');
    }

    // inner search js end 


    //  outer search  js start 
    (function($) {
        "use strict";

        $.fn.placeholderTypewriter = function(options) {
            // Plugin Settings
            var settings = $.extend({
                    delay: 100,
                    pause: 1000,
                    text: [],
                },
                options
            );

            // Type given string in placeholder
            function typeString($target, index, cursorPosition, callback) {
                // Get text
                var text = settings.text[index];

                // Get placeholder, type next character
                var placeholder = $target.attr("placeholder");
                $target.attr("placeholder", placeholder + text[cursorPosition]);

                // Type next character
                if (cursorPosition < text.length - 1) {
                    setTimeout(function() {
                        typeString($target, index, cursorPosition + 1, callback);
                    }, settings.delay);
                    return true;
                }

                // Callback if animation is finished
                callback();
            }

            // Delete string in placeholder
            function deleteString($target, callback) {
                // Get placeholder
                var placeholder = $target.attr("placeholder");
                var length = placeholder.length;

                // Delete last character
                $target.attr("placeholder", placeholder.substr(0, length - 1));

                // Delete next character
                if (length > 1) {
                    setTimeout(function() {
                        deleteString($target, callback);
                    }, settings.delay);
                    return true;
                }

                // Callback if animation is finished
                callback();
            }

            // Loop typing animation
            function loopTyping($target, index) {
                // Clear Placeholder
                $target.attr("placeholder", "");

                // Type string
                typeString($target, index, 0, function() {
                    // Pause before deleting string
                    setTimeout(function() {
                        // Delete string
                        deleteString($target, function() {
                            // Start loop over
                            loopTyping($target, (index + 1) % settings.text.length);
                        });
                    }, settings.pause);
                });
            }

            // Run placeholderTypewriter on every given field
            return this.each(function() {
                loopTyping($(this), 0);
            });
        };
    })(jQuery);

    /* Placeholder Typewriter */
    var placeholderText = [
        " Enter Course, Category or Keyword "

    ];

    $('#outerSearch').placeholderTypewriter({
        text: placeholderText
    });
</script>