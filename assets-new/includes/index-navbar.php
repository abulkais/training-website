<style>
    .g-recaptcha {
        width: 100%;
    }

    .labelplace {
        margin-left: 15px;
        font-size: 16px;
    }
</style>

<header class="header_edureka hdv2_main">
    <nav class="navbar navbar-fixed-top" style="background-image:url(https://kvch.in/assets/img/home/strip.jpg); background-repeat:no-repeat; background-size:cover;">
        <div class="new_head_ham slide-menu-control hidden-md hidden-sm hidden-lg" aria-label="humburger" role="button" data-target="test-menu-left" data-action="open">
            <i class="icon-Home-page-humburger-menu-01"></i>
        </div>

        <div class="search_header">
            <input aria-label="Enter Course, Category or keyword" class="open_search_overlay" type="text" placeholder="Enter Course, Category or keyword">
        </div>
        <ul class="nav navbar-nav-new pull-right before_login_head">
        <li class="hidden-xs hidden-sm"><img src="https://marvel-b1-cdn.bc0a.com/f00000000271534/international.missouristate.edu/ELI/_Files/Linguaskill_logo_png.png" alt=""></li>
            <!-- <li class="hidden-xs hidden-sm"><a class="ga_corporate_click" href="corporate-training">Corporate Training</a></li>
            <li class="hidden-xs"><a href="all-courses" class="ga_courses_click">Courses</a></li> -->
            <li class="hidden-xs hidden-sm"><a href="blog/" class="blog_click">Blog</a></li>
            <li class="hidden-xs hidden-sm" style="padding: 0px 12px;"><a style="padding:8px 20px;         background: linear-gradient(126deg, #f5a623, #f76b1c); color:#fff; border-radius:0px;" target="_blank" href="https://kvch.in/digi_portal" class="ga_courses_click">Digi-portal</a></li>
            <li class="hidden-xs hidden-sm" style="padding: 0px 12px;"><a style="padding:8px 20px;         background: linear-gradient(126deg, #f5a623, #f76b1c); color:#fff; border-radius:0px;" href="https://kvch.in/quick-pay" class="ga_courses_click">Quick pay</a></li>

        </ul>
    </nav>
</header>


<section class="trending_courses">
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav-new nav-tabs" role="tablist" id="nav_tab_list_course">
    </div>
</section>

<div class="discoversearch hide">
    <!-- this is for search section start -->
    <section class="container-fluid searchcontainer">
        <div class="container searchwrapper">
            <span class="searchboxcontainer">
                <div class="searchbox">
                    <span class="backbtn-new" id="search_back_btn">
                        <i class="icon-Arrow-leftward2"></i>
                    </span>
                    <div class="search_input_result">
                        <span id="search-box">
                            <input class="new-search-inp" type="text" maxlength="255" value="" autocomplete="off" id="inputKeyword" placeholder="Enter Course, Category or keyword" data-gi-label-expanded="true" autofocus>
                        </span>
                        <div class="search_result_web1" style="overflow-y:scroll;">
                            <ul id="suggesstion-box">
                             
                            </ul>
                        </div>
                
                    </div>
                </div>
            </span>
            <span class="closeimmersivesearch hidden-xs">
                <span>x</span>
            </span>
        </div>
    </section>

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


    <!-- this is for search section end -->
    <!-- this is for tab section start -->
    <section class="container-fluid no-padding tabcontainer">
        <div class="tabcategory">
            <div class="container no-padding tabcategorylist">
                <ul class="nav nav-tabs categoryvisible" id="discoverysearchtab">

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Trending Courses" data-toggle="tab" href="#searchTab_1">Trending Courses <i class="fa fa-angle-down fa-lg" aria-hidden="true" style="color:#000;"></i></a></li>

                    <li class="newlaunchcat"><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Masters Program" data-toggle="tab" href="#searchTab_2">Masters Program</a></li>

                    <li class="newlaunchcat"><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_New Launches" data-toggle="tab" href="#searchTab_3">New Launches</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_DevOps" data-toggle="tab" href="#searchTab_4">DevOps</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Cloud Computing" data-toggle="tab" href="#searchTab_11">Cloud Computing</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Data Science" data-toggle="tab" href="#searchTab_5">Data Science</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Big Data" data-toggle="tab" href="#searchTab_6">Big Data</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_BI & Visualization" data-toggle="tab" href="#searchTab_7">BI & Visualization</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Programming & Frameworks" data-toggle="tab" href="#searchTab_8">Programming & Frameworks</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Blockchain" data-toggle="tab" href="#searchTab_9">Blockchain</a></li>

                    <li><a class="discoverysearchcat gaTrackElementTag" data-gi-action="tab_Artificial Intelligence" data-toggle="tab" href="#searchTab_10">Artificial Intelligence</a></li>
                    <!-- use class name 'newlaunchcat' for showing dot in new launch category -->
                </ul>
                <div class="cathamburger">
                    <a class="btn-new dropdown-toggle" data-toggle="dropdown" aria-label="menu" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-Home-page-humburger-menu-01"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" id="discoverysearchtabcollapse">
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid no-padding categorycourses">
            <div class="container tab-content">
                <div id='searchTab_1' class="tab-pane fade in active">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="888" data-gi-action="tab_Trending Courses_Big Data Hadoop Certification Training Course" href='/big-data-hadoop-training-certification'>Big Data Hadoop Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="457" data-gi-action="tab_Trending Courses_Cloud Architect Masters Program" href='/cloud-architect-training'>Cloud Architect Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="520" data-gi-action="tab_Trending Courses_DevOps Engineer Masters Program" href='/devops-engineer-training'>DevOps Engineer Masters Program</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_2' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="520" data-gi-action="tab_Masters Program_DevOps Engineer Masters Program" href='/devops-engineer-training'>DevOps Engineer Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="457" data-gi-action="tab_Masters Program_Cloud Architect Masters Program" href='/cloud-architect-training'>Cloud Architect Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="584" data-gi-action="tab_Masters Program_Data Science Training Masters Program" href='/data-scientist-certification'>Data Science Training Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="585" data-gi-action="tab_Masters Program_Big Data Engineering Architect Masters Program" href='/big-data-architect-training'>Big Data Engineering Architect Masters Program</a></li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="1062" data-gi-action="tab_Masters Program_Python Masters Program" href='/python-developer-training'>Python Masters Program <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="1067" data-gi-action="tab_Masters Program_RPA Developer Masters Program" href='/rpa-developer-training'>RPA Developer Masters Program <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="1073" data-gi-action="tab_Masters Program_Microsoft Azure Cloud Engineer Masters Program" href='/azure-cloud-engineer-certification-training'>Microsoft Azure Cloud Engineer Masters Program <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="781" data-gi-action="tab_Masters Program_Machine Learning Course Masters Program" href='/machine-learning-engineer-training'>Machine Learning Course Masters Program <span>new</span></a> </li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_3' class="tab-pane fade">
                    <ul>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="1308" data-gi-action="tab_New Launches_Microsoft Azure DevOps Certification Training Course (AZ-400)" href='/microsoft-azure-devops-solutions-training'>Microsoft Azure DevOps Certification Training Course (AZ-400) <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="1062" data-gi-action="tab_New Launches_Python Masters Program" href='/python-developer-training'>Python Masters Program <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="1073" data-gi-action="tab_New Launches_Microsoft Azure Cloud Engineer Masters Program" href='/azure-cloud-engineer-certification-training'>Microsoft Azure Cloud Engineer Masters Program <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="1067" data-gi-action="tab_New Launches_RPA Developer Masters Program" href='/rpa-developer-training'>RPA Developer Masters Program <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="781" data-gi-action="tab_New Launches_Machine Learning Course Masters Program" href='/machine-learning-engineer-training'>Machine Learning Course Masters Program <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="883" data-gi-action="tab_New Launches_Certified Scrum Master&reg; (CSM) Certification Training" href='/certified-scrum-master-certification-training'>Certified Scrum Master&reg; (CSM) Certification Training <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="892" data-gi-action="tab_New Launches_Professional Scrum Master (PSM) Certification Training" href='/professional-scrum-master-psm-certification-training'>Professional Scrum Master (PSM) Certification Training <span>new</span></a> </li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="893" data-gi-action="tab_New Launches_CSPO&reg; Certification Training Course" href='/cspo-certification-training'>CSPO&reg; Certification Training Course <span>new</span></a> </li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_4' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="520" data-gi-action="tab_DevOps_DevOps Engineer Masters Program" href='/devops-engineer-training'>DevOps Engineer Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="782" data-gi-action="tab_DevOps_AWS DevOps Engineer Certification Training Course" href='/aws-certified-devops-training'>AWS DevOps Engineer Certification Training Course</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_11' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="164" data-gi-action="tab_Cloud Computing_AWS Developer Certification Training" href='/aws-developer-certification-training'>AWS Developer Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="462" data-gi-action="tab_Cloud Computing_AWS SysOps Administrator Certification Training" href='/aws-sysops-certification-training'>AWS SysOps Administrator Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="457" data-gi-action="tab_Cloud Computing_Cloud Architect Masters Program" href='/cloud-architect-training'>Cloud Architect Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="491" data-gi-action="tab_Cloud Computing_IoT Certification Training on Azure" href='/iot-certification-training'>IoT Certification Training on Azure</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="620" data-gi-action="tab_Cloud Computing_Migrating Applications to AWS Training" href='/migrating-to-aws'>Migrating Applications to AWS Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="785" data-gi-action="tab_Cloud Computing_Salesforce Admin 201 Certification Training" href='/salesforce-admin-certification-training'>Salesforce Admin 201 Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="803" data-gi-action="tab_Cloud Computing_Salesforce Platform Developer 1 Certification Training" href='/salesforce-platform-developer-1-certification-training'>Salesforce Platform Developer 1 Certification Training</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_5' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="584" data-gi-action="tab_Data Science_Data Science Training Masters Program" href='/data-scientist-certification'>Data Science Training Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="338" data-gi-action="tab_Data Science_Data Science with R Programming Certification Training Course" href='/data-science-r-programming-certification-course'>Data Science with R Programming Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="280" data-gi-action="tab_Data Science_Analytics for Retail Banks" href='/retail-banking'>Analytics for Retail Banks</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="479" data-gi-action="tab_Data Science_Data Analytics Masters Program" href='/data-analyst-certification'>Data Analytics Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="23" data-gi-action="tab_Data Science_Data Analytics with R Programming Certification Training" href='/data-analytics-with-r-certification-training'>Data Analytics with R Programming Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="69" data-gi-action="tab_Data Science_Statistics Essentials for Analytics" href='/statistics-essentials-for-analytics-self-paced'>Statistics Essentials for Analytics</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="571" data-gi-action="tab_Data Science_Advanced Predictive Modelling in R Certification Training" href='/advanced-predictive-modeling-in-r-sp'>Advanced Predictive Modelling in R Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="216" data-gi-action="tab_Data Science_Decision Tree Modeling Using R Certification Training" href='/decision-tree-modelling-using-r-sp'>Decision Tree Modeling Using R Certification Training</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_6' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="888" data-gi-action="tab_Big Data_Big Data Hadoop Certification Training Course" href='/big-data-hadoop-training-certification'>Big Data Hadoop Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="889" data-gi-action="tab_Big Data_Apache Spark and Scala Certification Training Course" href='/apache-spark-scala-certification-training'>Apache Spark and Scala Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="585" data-gi-action="tab_Big Data_Big Data Engineering Architect Masters Program" href='/big-data-architect-training'>Big Data Engineering Architect Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="651" data-gi-action="tab_Big Data_PySpark Certification Training Course" href='/pyspark-certification-training'>PySpark Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="510" data-gi-action="tab_Big Data_Apache Kafka Certification Training Course" href='/kafka-certification-training'>Apache Kafka Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="631" data-gi-action="tab_Big Data_Big Data Hadoop Administration Certification Training" href='/hadoop-administration-training-certification'>Big Data Hadoop Administration Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="124" data-gi-action="tab_Big Data_Comprehensive Pig Certification Training" href='/comprehensive-pig-self-paced'>Comprehensive Pig Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="126" data-gi-action="tab_Big Data_Comprehensive Hive Certification Training" href='/comprehensive-hive'>Comprehensive Hive Certification Training</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_7' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="482" data-gi-action="tab_BI & Visualization_Business Intelligence Masters Program" href='/business-intelligence-certification'>Business Intelligence Masters Program</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="46" data-gi-action="tab_BI & Visualization_Pentaho BI Certification Training" href='/pentaho-business-intelligence-training-self-paced'>Pentaho BI Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="594" data-gi-action="tab_BI & Visualization_MSBI Certification Training Course" href='/microsoft-bi-certification'>MSBI Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="546" data-gi-action="tab_BI & Visualization_Advanced MS Excel 2016 Certification Training" href='/advanced-ms-excel-self-paced'>Advanced MS Excel 2016 Certification Training</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_8' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="468" data-gi-action="tab_Programming & Frameworks_Full Stack Web Developer Masters Program Course" href='/full-stack-developer-training'>Full Stack Web Developer Masters Program Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="44" data-gi-action="tab_Programming & Frameworks_Java Certification Training Course" href='/java-j2ee-training-course'>Java Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="777" data-gi-action="tab_Programming & Frameworks_Python Scripting Certification Training" href='/python-scripting'>Python Scripting Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="90" data-gi-action="tab_Programming & Frameworks_PHP &amp; MySQL with MVC Frameworks Certification Training" href='/php-mysql-self-paced'>PHP &amp; MySQL with MVC Frameworks Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="62" data-gi-action="tab_Programming & Frameworks_Spring Framework Certification Course" href='/spring-certification-course'>Spring Framework Certification Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="219" data-gi-action="tab_Programming & Frameworks_Mastering Magento for E-Commerce Certification Training" href='/magento-sp'>Mastering Magento for E-Commerce Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="262" data-gi-action="tab_Programming & Frameworks_Mastering Joomla Certification Training" href='/joomla'>Mastering Joomla Certification Training</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="412" data-gi-action="tab_Programming & Frameworks_Microsoft SharePoint 2013 Certification Training" href='/microsoft-sharepoint-2013'>Microsoft SharePoint 2013 Certification Training</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_9' class="tab-pane fade">
                    <ul>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="879" data-gi-action="tab_Blockchain_Blockchain Certification Training Course" href='/blockchain-training'>Blockchain Certification Training Course</a></li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="579" data-gi-action="tab_Blockchain_Ethereum Developer Certification Course" href='/ethereum-developer-course'>Ethereum Developer Certification Course</a></li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
                <div id='searchTab_10' class="tab-pane fade">
                    <ul>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="781" data-gi-action="tab_Artificial Intelligence_Machine Learning Course Masters Program" href='/machine-learning-engineer-training'>Machine Learning Course Masters Program <span>new</span></a> </li>

                        <li><a class="gaTrackElementTag realTimeCourseTrack" data-gi-course-id="31" data-gi-action="tab_Artificial Intelligence_Machine Learning with Mahout Certification Training" href='/mahout-self-paced'>Machine Learning with Mahout Certification Training</a></li>

                        <li><a class="newlaunchtag gaTrackElementTag realTimeCourseTrack" data-gi-course-id="698" data-gi-action="tab_Artificial Intelligence_Natural Language Processing Course with Python" href='/python-natural-language-processing-course'>Natural Language Processing Course with Python <span>new</span></a> </li>
                    </ul>
                    <a class="catallcourses" href="all-courses"><span>View All Courses <i class="icon-Right_arrow"></span></i></a>
                </div>
            </div>
        </div>

    </section>
    <!-- this is for tab section end -->
</div>



<header class="page-header" style=" margin:0px; top:55px; position:sticky; z-index:1000; background-color:#fff; border-top: 2px solid #cf2128; border-bottom: 2px solid #cf2128;">

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
             
                    <li class="menu-item-has-children"><a href="#all-courses">Training Solutions </a></li>

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

<div class="modal" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h4 class="modal-title w-100">Talk to our <span>Training Advisor</span> </h4>
                <button type="button" style="border-radius:10%;" class="close" data-dismiss="modal"><span>x</span></button>
            </div>
            <!-- onsubmit="return submitUserForm();" -->
            <!-- Modal body -->
            <div class="modal-body">
                <form action="mail" method="post" id="submitform" onsubmit="return submitUserForm();">
                    <input type="hidden" name="comingfrom" value="Explore Now">

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input" type="text" name="name" placeholder=" " required="required" pattern="[A-Z\sa-z]{3,20}">
                            <label class="did-floating-label">Full Name*</label>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input" type="email" name="email" placeholder=" " required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            <label class="did-floating-label">E-Mail Address*</label>
                        </div>

                    </div>


                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input type="text" name="number" id="txtPhone1" onkeypress="return number_e(event)" minlength="10" class="did-floating-input number_responsive" placeholder="Contact no*" required>
                        </div>
                    </div>

                    <div class="form-con">
                        <div class="did-floating-label-content">
                            <input class="did-floating-input" type="text" name="course_name" placeholder=" " required>
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

                    <style>

                    </style>
                    <!-- recqaptca -->
                    <center>
                        <div class="form-con" title="recqaptca">
                            <div class="g-recaptcha" data-sitekey="6Ldii1siAAAAACObLfaWSS0DVCYZdeXI4YdkdBKw" data-callback="verifyCaptcha">

                            </div>
                        </div>
                    </center>

                    <div class=" form-conn">
                        <input id="buttonhide" name="organization_submit" value="Submit" type="submit" class="btn-submit">
                        <div id="buttonshow" class="btn-submit" style="display:none; text-align:center; cursor:none;" disabled>Please wait</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>