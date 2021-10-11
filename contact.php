<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Hostick - Web Hosting HTML Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
        <meta content="Shreethemes" name="author" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Magnific Popup -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <!-- Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
        
        <!-- Navbar End -->
        <?php include "./php/components/Nav.php"?>

        <!-- Home Start -->
        <section class="bg-half-170 d-table w-100 bg-light" style="background: url('images/bg/contact.png') top center;" id="home">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="title-heading text-center text-md-left">
                        <nav aria-label="breadcrumb" class="d-inline-block mt-4">
                                <ul class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">Hostick</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                            <h3>Get in touch !</h3>
                            <p class="text-muted para-desc mt-3 mb-0">Hello, Contact us now the services and enquiry on Mobile & Web apps, Data & Analytics, Graphics Designing, Cloud & Software Engineering, Digital marketing and E-commerce Intergration.</p> 
                            
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 1000 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Home End -->

        <section class="section pb-0" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h6 class="title text-uppercase font-weight-bold">Phone</h6>
                                <!-- <p class="text-muted">Promising development turmoil inclusive education transformative community</p> -->
                                <a href="tel:+260 977699636" class="text-primary">+260 977699636</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h6 class="title text-uppercase font-weight-bold">Email</h6>
                                <!-- <p class="text-muted">Promising development turmoil inclusive education transformative community</p> -->
                                <a href="mailto:software@kadztech.com" class="text-primary">software@kadztech.com</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h6 class="title text-uppercase font-weight-bold">Location</h6>
                                <!-- <p class="text-muted">Avondale, <br>Lusaka, Zambia</p> -->
                                <a href="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" class="video-play-icon text-primary">View on Google map</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="custom-form">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Name <span class="text-danger">*</span></label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="First Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group position-relative">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                        </div> 
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Subject</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject">
                                        </div>                                                                               
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Comments</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form--> 
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <!-- Footer End -->
        <?php include "./php/components/Footer.php"?>

        <!-- Login Modal Content Start -->
        <div class="modal fade" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Login </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="email" required="" placeholder="Your Email :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" required="" placeholder="Password :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="form-group d-inline-block">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <p class="forgot-pass mb-0"><a href="page-forgot-password.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                    </div>
                                </div><!--end col-->
                                <div class="col-12 mb-0">
                                    <button class="btn btn-primary w-100">Sign in</button>
                                </div><!--end col-->
                                <div class="col-12 mt-4 text-center">
                                    <h6 class="mb-0">Or Login With</h6>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6 mt-4">
                                            <a href="#" class="btn btn-block btn-light bg-facebook"><i class="mdi mdi-facebook"></i> Facebook</a>
                                        </div>
                                        <div class="col-sm-6 mt-4">
                                            <a href="#" class="btn btn-block btn-light"><i class="mdi mdi-google"></i> Google</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="page-signup.html" class="text-dark font-weight-bold">Sign Up</a></p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Modal Content End -->

        

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->
        
        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific.init.js"></script>
        <!-- Contact -->
        <script src="js/contact.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
                
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>
</html>