
<?php include 'admin/config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - M.P. Water and Land Management Institute, Bhopal</title>
    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'header-link.php'; ?>
    
</head>

<body style="background-image: url('assets/images/park/wp3556796.jpg');">
    <div class="main-container">
        <?php include 'header.php'; ?>

        <div class="banner-container">
            <div class="main-banner">
                <div class="slide transparent-background slide-one">
                    <div class="slide-text container">
                        <h2>Faculty <span>Empanelment</span> Form</h2>
                        <p>
                            संस्थान द्वारा अभिरुचि की जांच कर उपयुक्त व्यक्तियों को एंपैनल किया जाएगा इस संबंध में संचालक वाल्मी का निर्णय अंतिम होगा ।।
                        </p>
                        <a href="guest-faculty-form-mpwalmi.php" class="btn btn-primary btn-padding btn-animated">view Form</a>
                        <a href="contact-us-mpwalmi.php" class="btn btn-secondary btn-padding btn-dark-animated"0.>Contact Us</a>
                    </div>
                </div>
                <div class="slide transparent-background slide-two">
                    <div class="slide-text container">
                        <h2>Resource <span>Person </span> Form</h2>
                        <p>
                            स्तोत्र परामर्शी व्यक्तियों की अभिरुचि आमंत्रण मध्य प्रदेश जल एवं भूमि प्रबंध संस्थान, मध्य प्रदेश ग्रामीण विकास विभाग के अंतर्गत एक स्वशासी संस्थान है, जो प्रमुख रूप से प्राकृतिक संसाधन, सिंचित एवं असिंचित कृषि, ग्रामीण विकास सॉफ्ट स्किल, कार्यालय प्रबंधन से संबंधित हितग्राहियों एवं अधिकारियों के लिए क्षमता वर्धन प्रशिक्षण सलाहकारिता सेवाएं एवं क्रियात्मक अनुसंधान कार्यक्रम आयोजित/ क्रियान्वित करता है ।

                        </p>
                        <a href="resource-person-form-mpwalmi.php" class="btn btn-primary btn-padding">View Form</a>
                        <a href="contact-us-mpwalmi.php" class="btn btn-secondary btn-padding">Contact Us</a>
                    </div>
                </div>
                <div class="slide transparent-background slide-two">
                    <div class="slide-text container">
                        <h2>Internship <span>Application </span> Form</h2>
                        <p>
                            म.प्र. जल एवं भूमि प्रबंध संस्थान, भोपाल द्वारा प्राकृतिक संसाधन प्रबंधन हेतु वाल्मीकी पद्धति से सघन वृक्षारोपण, नेनो वाटरशेड आधारित विकास, छतीय जल संग्रहण, ग्रीन वॉल, जैविक अपशिष्ट प्रबंधन इत्यादि क्षेत्रों में विभिन्न प्रयोगों के द्वारा नवीन तकनीकों को कियान्वित किया गया है।
                        </p>
                        <a href="internship-mpwalmi.php" class="btn btn-primary btn-padding">View Form</a>
                        <a href="contact-us-mpwalmi.php" class="btn btn-secondary btn-padding">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="information-boxes grey-bg grey-bg-color module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-padding-y">
                        <div class="events-block">
                            <div class="events-head">
                                <h5>Walmi News</h5>
                                <h5><a href="news-cutting-mpwalmi.php">All News →</a></h5>
                            </div>
                            <div class="events">
                                <marquee direction="up" height="500px;">
                                      <?php

                    $cs = mysqli_query($con, "SELECT * FROM `slider_news` ORDER BY `id` DESC");
                    while ($a = mysqli_fetch_array($cs)) {
                    ?>
                                    <div class="events-date">
                                        <!--<h6><i class="far fa-calendar-check"></i>31 July 2021</h6>-->
                                       <img src="admin/news/<?= $a['image'] ?>" /> 
                                       <p><?= $a['description'] ?></p>
                                    </div>
                                      <?php
                    }
                    ?>
                                   
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8 col-padding-y row">
                        <div class="col-sm-12 col-md-12 col-lg-12  text-center ">
                            <h2>
                                हमारी सेवाएं
                            </h2>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-padding-y">
                            <div class="featured-box">
                                <div class="featured-img">
                                    <img src="assets/images/services/information-img-1.jpg" alt="Information-Img">
                                </div>
                                <div class="featured-text">
                                    <h5><a href="#">ग्रील वाल कालम पर</a></h5>
                                    <p>
                                        म.प्र. जल एवं भूमि प्रबंध संस्थान (वाल्मी), भोपाल द्वारा क्रांतिकारी तकनीक से मिट्टी-रहित हरित दीवार विकसीत की गई |
                                    </p>
                                    <a href="#">आगे पढ़ें →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-padding-y">
                            <div class="featured-box">
                                <div class="featured-img">
                                    <img src="assets/images/services/information-img-2.jpg" alt="Information-Img">
                                </div>
                                <div class="featured-text">
                                    <h5><a href="#">
                                            सीटी फारेस्‍ट पर

                                        </a></h5>
                                    <p>
                                        पर्यावरण संरक्षण एवं संवर्धन के लिय यह संस्थान एक बेहतरीन नवाचार है |

                                    </p>
                                    <a href="#">आगे पढ़ें →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-padding-y">
                        <div class="featured-box">
                            <div class="featured-img">
                                <img src="assets/images/services/information-img-3.jpg" alt="Information-Img">
                            </div>
                            <div class="featured-text">
                                <h5><a href="#">जैविक खाद पर</a></h5>
                                <p>Regenerate, Reuse, Recycle के सिध्दांत पर वाल्मी का यह नवाचार मृदा को उसकी उर्वरक क्षमता लौटाने के साथ ही उच्च गुणवत्ता वाली खाद उपलब्ध कराता है | </p>
                                <a href="#">आगे पढ़ें →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-padding-y">
                        <div class="featured-box">
                            <div class="featured-img">
                                <img src="assets/images/services/information-img-4.jpg" alt="Information-Img">
                            </div>
                            <div class="featured-text">
                                <h5><a href="#">रूफ वाटर पर</a></h5>
                                <p>
                                    बोरवेल, हैंडपंप, कुओं में जल की मात्रा, गुणवत्ता और भू-जल स्तर बढाने के लिए रूफ वॉटर हार्वेस्टिंग (वर्षा जल संग्रहण) करवाएँ एवं अपने भू-जल स्त्रोतों को सदा-सदा के लिए जीवित रखें |</p>
                                <a href="#">आगे पढ़ें →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-padding-y">
                        <div class="featured-box">
                            <div class="featured-img">
                                <img src="assets/images/services/information-img-5.jpg" alt="Information-Img">
                            </div>
                            <div class="featured-text">
                                <h5><a href="#">ईकालाजी पार्क पर</a></h5>
                                <p>वाल्मी का शहर के स्वास्थ्य और स्वच्छता में अतुलनीय योगदान है ईकोलॉजिकल ऑक्सीजन पार्क |</p>
                                <a href="#">आगे पढ़ें →</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="about-us module">
            <div class="section-title">
                <h2>MP Walmi <span>, Bhopal</span></h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-padding-y">
                        <div class="about-img">
                            <img src="assets/images/about/special-honour.jpg" alt="About">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-padding-y">
                        <div class="about-text">
                            <p>WALMI is a premiere autonomous training institute, working in the field of natural resources management as a part of Panchayat and the Rural Development Department, Govt. of M.P. It was registered under M.P. Societies Registration Act 1973 on 31st August, 1985. It is spread over 89 hectares of land on the right bank of Kaliyasot Dam. </p>
                            <ul class="menu">
                                <li><i class="fas fa-check"></i> To promote advancement of science and technology and acquisition of techno-scientific knowledge.</li>
                                <li><i class="fas fa-check"></i> To undertake research and conduct experiments on various aspects of Irrigation, Watershed Management, Land Development and Rural Development and to collaborate with other organizations with similar objectives.</li>


                            </ul>
                            <a href="about-mpwalmi.php" class="btn btn-primary btn-padding btn-animated">Read More</a>
                            <a href="objectives-mpwalmi.php" class="btn btn-secondary btn-padding btn-dark-animated"> Find our more Objective</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 <div class="our-courses grey-bg grey-bg-color module">
            <div class="section-title">
                <h2>नवीनतम <span>कार्यक्रम</span></h2>
                <!-- <p>With awesome institute we have arranged some awesome courses for you from which this is list of some -->
                <!-- featured courses!</p> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="course-warp">
                            <div class="course-img">
                                <img src="assets/images/park/2.jpg" alt="Our Courses">
                              
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="course-warp">
                            <div class="course-img">
                                <img src="assets/images/park/3.jpeg" alt="Our Courses">
                             
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="course-warp">
                            <div class="course-img">
                                <img src="assets/images/park/4.jpeg" alt="Our Courses">
                               
                            </div>
                          
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>




  <div class="why-chose-us module">
            <div class="section-title">
                <h2> <span> World Environment</span></h2>
                          </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-padding-y">
                        <div class="faq-wrap">
                           
                          <p>
                              
                                <a href="https://forms.gle/Wb8gAHfQwSt3HeEN6" target="_blank" class="btn btn-primary">Walkathon Registration </a>
                        
                            
                              
                          </p>
                            <!--<div class="accordion" id="accordionExample">-->
                            <!--    <div class="card animated" data-animation="slideInUp" data-animation-delay="400">-->
                            <!--        <div class="card-header" id="headingOne">-->
                            <!--            <h2 class="mb-0">-->
                            <!--                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">-->
                            <!--                    How to book ??</button>-->
                            <!--            </h2>-->
                            <!--        </div>-->
                            <!--        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">-->
                            <!--            <div class="card-body">-->
                            <!--                <ul>-->
                            <!--                    <li>Click On the Book Now Button</li>-->
                            <!--                    <li>Fill The Form With your information </li>-->
                            <!--                <li>Make the online payment</li>-->
                            <!--                <li>Take a screenshot of receipt after success the payment</li>-->
                            <!--                </ul>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                               

                            <!--</div>-->
                        </div><br>
                        <!--<a href="https://webfront.payu.in/webfront/#/merchantinfo/madhya-pradesh-water-and-land-management-institute-bhopal/3035" target="_blank" class="btn btn-primary">Registration Link </a>-->
                        
                        
                       
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-6 col-padding-y">
                        <div class="video-preview-one">
                            <a class="video-preview">
                               <div class="row">
                                   <div class="col-sm-12">
                                <img src="uploads/mpwalmi.jpg" alt="Mpwalmi">
                                </div>
                                
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-to-action">
            <img class="call-to-action-img" src="assets/images/help/background-effect-2.jpg" alt="">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="call-box">
                            <img src="assets/images/help/icons/book-icon.png" alt="book Icon">
                            <h3><a href="guest-faculty-form-mpwalmi.php">Faculty Empanelment Form</a></h3>
                            <p>स्तोत्र परामर्शी व्यक्तियों की अभिरुचि आमंत्रण मध्य प्रदेश जल एवं भूमि प्रबंध संस्थान, मध्य प्रदेश ग्रामीण विकास विभाग के अंतर्गत एक स्वशासी संस्थान है,...
                            </p>
                            <a href="guest-faculty-form-mpwalmi.php" class="btn btn-light btn-dark-animated">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="call-box">
                            <img src="assets/images/help/icons/light-bulb.png" alt="Light Bulb">
                            <h3><a href="resource-person-form-mpwalmi.php">Resource Person Form</a></h3>
                            <p>स्तोत्र परामर्शी व्यक्तियों की अभिरुचि आमंत्रण मध्य प्रदेश जल एवं भूमि प्रबंध संस्थान, मध्य प्रदेश ग्रामीण विकास विभाग के अंतर्गत एक स्वशासी संस्थान है, ...
                            </p>
                            <a href="resource-person-form-mpwalmi.php" class="btn btn-dark btn-animated">Apply Now</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="call-box">
                            <img src="assets/images/help/icons/hat-college.png" alt="Hat College">
                            <h3><a href="internship-mpwalmi.php">Internship Application Form</a></h3>
                            <p>म.प्र. जल एवं भूमि प्रबंध संस्थान, भोपाल द्वारा प्राकृतिक संसाधन प्रबंधन हेतु वाल्मीकी पद्धति से सघन वृक्षारोपण,.....
                            </p>
                            <a href="internship-mpwalmi.php" class="btn btn-light btn-dark-animated">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-post grey-bg grey-bg-color">
            <div class="section-title">
                <h2>Video <span>Gallery</span></h2>
                <!-- <p>We have some great teachers and trainers in our staff who have professional experience along high -->
                <!-- education. Which gives you peace of mind.</p> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="blog-box">
                            <div class="blog-img">
                                <!-- <img src="assets/images/help/blog/blog-img1.jpg" alt="Blog Img"> -->
                                <iframe style="border:0;height:280px;padding:5px;" src="https://www.youtube.com/embed/q-Y6SvFw6Dk"></iframe>

                            </div>
                            <!-- <div class="blog-text">
                                <h5><a href="blog.html">Learn Basic Computer Skills</a></h5>
                                <div class="meta-tags">
                                    <i class="far fa-user"> <span>By:</span><a href="single-post-page.html">Ateeq</a></i>
                                    <i class="far fa-comment"> <a href="single-post-page.html">3 Comments</a></i>
                                </div>
                                <p>Our best computer skills always available to make you better in your computer classes
                                    ...</p>
                                <a href="#" class="btn btn-light btn-dark-animated">Read More</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="blog-box">
                            <div class="blog-img">
                                <!-- <img src="assets/images/help/blog/blog-img1.jpg" alt="Blog Img"> -->
                                <iframe style="border:0;height:280px;padding:5px;" src="https://www.youtube.com/embed/2DjU32L_pEY"></iframe>

                            </div>
                            <!-- <div class="blog-text">
                                <h5><a href="blog.html">Learn Basic Computer Skills</a></h5>
                                <div class="meta-tags">
                                    <i class="far fa-user"> <span>By:</span><a href="single-post-page.html">Ateeq</a></i>
                                    <i class="far fa-comment"> <a href="single-post-page.html">3 Comments</a></i>
                                </div>
                                <p>Our best computer skills always available to make you better in your computer classes
                                    ...</p>
                                <a href="#" class="btn btn-light btn-dark-animated">Read More</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="blog-box">
                            <div class="blog-img">
                                <!-- <img src="assets/images/help/blog/blog-img1.jpg" alt="Blog Img"> -->
                                <iframe style="border:0;height:280px;padding:5px;" src="https://www.youtube.com/embed/jtHkcagx_NY"></iframe>

                            </div>
                            <!-- <div class="blog-text">
                                <h5><a href="blog.html">Learn Basic Computer Skills</a></h5>
                                <div class="meta-tags">
                                    <i class="far fa-user"> <span>By:</span><a href="single-post-page.html">Ateeq</a></i>
                                    <i class="far fa-comment"> <a href="single-post-page.html">3 Comments</a></i>
                                </div>
                                <p>Our best computer skills always available to make you better in your computer classes
                                    ...</p>
                                <a href="#" class="btn btn-light btn-dark-animated">Read More</a>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="assets/images/help/blog/blog-img2.jpg" alt="Blog Img">
                            </div>
                            <div class="blog-text">
                                <h5><a href="blog.html">How to attend a seminar?</a></h5>
                                <div class="meta-tags">
                                    <i class="far fa-user"> <span>By:</span><a href="single-post-page.html">Ateeq</a></i>
                                    <i class="far fa-comment"> <a href="single-post-page.html">3 Comments</a></i>
                                </div>
                                <p>Our best computer skills always available to make you better in your computer classes
                                    ...</p>
                                <a href="#" class="btn btn-dark btn-animated">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-padding-y">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="assets/images/help/blog/blog-img3.jpg" alt="Blog Img">
                            </div>
                            <div class="blog-text">
                                <h5><a href="blog.html">What are best institutes</a></h5>
                                <div class="meta-tags">
                                    <i class="far fa-user"> <span>By:</span><a href="single-post-page.html">Ateeq</a></i>
                                    <i class="far fa-comment"> <a href="single-post-page.html">3 Comments</a></i>
                                </div>
                                <p>Our best computer skills always available to make you better in your computer classes
                                    ...</p>
                                <a href="#" class="btn btn-light btn-dark-animated">Read More</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>


        <?php include 'footer.php' ?>
    </div>
</body>

</html>