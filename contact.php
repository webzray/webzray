
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Webzray | Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.2.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <!-- tobii css -->
        <link href="css/tobii.min.css" rel="stylesheet" type="text/css" />
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="images/logo-dark.png" height="30" class="logo-light-mode" alt="">
                    <img src="images/logo-light.png" height="30" class="logo-dark-mode" alt="">
                </a>
               
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-right navbar-light">
                        <li><a href="index.html" class="sub-menu-item" " >Home</a></li>
                        <li>
                            <a href="services.html">OUR SERVICES</a>
                        </li>
                        <!--<li>
                            <a href="app.html" style="color: blue;">OUR WORK</a>  
                        </li>-->

                        <li>
                            <a href="about.html">About us</a><span class="menu-arrow"></span>
                            
                        </li>
                        <li>
                            <a href="contact.html" style="color: blue;">Contact us</a><span class="menu-arrow"></span>
                            
                        </li>
                      

                    </ul> 
               <!--end navigation menu-->
                   
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                        <div class="card shadow rounded border-0">
                            <div class="card-body py-5">
                                <h4 class="card-title">Get In Touch !</h4>
                                <div class="custom-form mt-3">
                                <form method="post" name="myForm" onsubmit="return validateForm()" action="php/contact.php" style="display: none;" >
                                        <p id="error-msg" class="mb-0"></p>
                                        <div id="simple-msg"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                                    </div>
                                                </div> 
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Subject</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="book" class="fea icon-sm icons"></i>
                                                        <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
        
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                        <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>

                                    <form id="contact-form" class="form" method="post" action="contact.html"
                                            data-toggle="validator" style="display: none;">
                                            <div class="messages"></div>
                                            <div class="input__wrap controls">
                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>Your name *</label>
                                                        <input id="form_name" type="text" name="name"
                                                            placeholder="Type your name" required="required"
                                                            data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>Your E-Mail *</label>
                                                        <input id="form_email" type="email" name="email"
                                                            placeholder="Type your Email Address" required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="entry-box">
                                                        <label>What's up?</label>
                                                        <textarea id="form_message" class="form-control" name="message"
                                                            placeholder="Tell us about you and the world"
                                                            required="required"
                                                            data-error="Please,leave us a message."></textarea>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                                </div>
                                            </div>
                                        </form>
                                        
                                    
                                    
                                        <div class="container">
        
            
                        
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                            
                        </form>
                    </div>
                </div>
            
                                    








                                </div><!--end custom-form-->
                            </div>
                        </div>
                    

                    <div class="col-lg-7 col-md-6 order-1 order-md-2">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <img src="images/contact.svg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            
            
       <!-- Start Contact -->
       <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0 text-center features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-phone d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="fw-bold">Phone</h5>
                            <p class="text-muted">Start working with Landrick that can provide everything</p>
                            <a href="tel:0766079029" class="text-primary">0766079029</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-envelope d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="fw-bold">Email</h5>
                            <p class="text-muted">Start working with Landrick that can provide everything</p>
                            <a href="mailto:official@webzray.com" class="text-primary">official@webzray.com</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <!-- <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-map-marker d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="fw-bold">Location</h5>
                            <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                        </div>
                    </div>
                </div> end col-->
            </div><!--end row-->
        </div><!--end container-->
        <br>
        <!-- Subscribe Start -->
        <section class="section css-selector" style="margin-top: 75px;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="app-subscribe text-center text-md-start">
                            <img src="images/webzrayfb.png" class="img-fluid" alt="" >
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title text-center text-md-start">
                            <h1 class="title text-black-50 title-dark mb-2">Follow Us and Contact us <br>through Social Media</h1>
                            <div class="row justify-content-left" style="margin-bottom: -50px;">
                                <div class="col-lg-10 col-md-8 pb-md-4">
                                    <ul class="text-left mb-0 p-0">
                                        <li class="list-inline-item mx-2 mt-3"><a href="https://www.facebook.com/webzray/?ref=pages_you_manage" target="blank" class="btn btn-icon btn-pills btn-lg btn-blue" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="list-inline-item mx-2 mt-3"><a href="https://www.instagram.com/web_zray/" target="_blank" class="btn btn-icon btn-pills btn-lg btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i data-feather="instagram" class="icons"></i></a></li>
                                        <!-- <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i data-feather="youtube" class="icons"></i></a></li>
                                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i class="mdi mdi-whatsapp icons"></i></a></li>
                                        <li class="list-inline-item mx-2 mt-3"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-lg btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Telegram"><i class="mdi mdi-telegram icons"></i></a></li> -->
                                        </ul>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Subscribe End -->



        <!--Foot begin-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="#" class="logo-footer">
                            <img src="images/logo-light.png" height="50" alt="">
                        </a>
                        <p class="mt-4">Webzray is where affordability meets professionalism we make creative, flexible and affordable website designs,Apps and ect..</p>
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/webzray/" target="blank" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/web_zray/" target="_blank" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <!-- <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li> -->
                        </ul><!--end icon-->
                    </div><!--end col-->
                    
                   <!-- <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Company</h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="page-aboutus.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                            <li><a href="page-services.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                            <li><a href="page-team.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                            <li><a href="portfolio-modern-three.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                           
                        </ul>
                    </div> end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head"><Menu></Menu></h5>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="services.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services </a></li>
                            <li><a href="about.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About Us</a></li>
                            <li><a href="work.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Work </a></li>
                            <li><a href="digitalsinhala.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Digital Sinhala </a></li>
                            <li><a href="contact.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Contact Us </a></li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h5 class="text-light footer-head">Newsletter</h5>
                        <p class="mt-4">Sign up to our newsletter.</p>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="foot-subscribe mb-3">
                                        <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Designed by Webzray. <a href="" target="_blank" class="text-reset"></a></p>
                        </div>
                    </div><!--end col-->

                   
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->


        <!-- javascript -->
        <script src="js/script.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        
        <!-- tobii js -->
        <script src="js/tobii.min.js "></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
        <script src="js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    </body>
</html>