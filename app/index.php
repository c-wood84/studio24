<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Studio24 Contact Form'; 
        $to = 'roxane@studio24.photography'; 
        $subject = 'Message from Studio24 Contact Form ';
        
        $body ="From: $name\n Phone: $phone\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        //check if phone number has been entered
        if (!$_POST['phone']) {
            $errPhone = 'Please enter your phone number';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }

// If there are no errors, send the email
if (!$errName && !$errPhone && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicons/favicon.ico">
    <title>Studio 24 Photography</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Droid+Sans|Lato|Ubuntu" rel="stylesheet">

        <!-- Font-Awesome -->
        <link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css">
        
        <!-- Bootstrap Core css -->
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
        <!-- Hover css -->
        <link rel="stylesheet" type="text/css" href="bower_components/hover/css/hover.css">

        <!-- animate css -->
        <link rel="stylesheet" href="bower_components/animate.css/animate.css">

        <!-- site style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-header" data-offset="50">

<!-- Fade in Navigation for tablet, notebook, and desktop -->
<header id="header-sticky" class="site-header hidden-xs hidden" role="banner">
    <div class="navbar-wrapper">
        <div class="navbar-studio24">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="main-logo"><img src="images/Studio24Logo.png" height="75px" alt="Studio24"></a>
                </div><!-- navbar header -->
                <div id="nav" class="hidden-xs col-sm-5 col-sm-offset-1 main-nav">
                    <ul class="nav navbar-nav">
                        <!-- <li class="active"><a href="/">Home</a></li>
                        <li class="seperator">/</li> -->
                        <li><a href="#about">About</a></li>
                        <li class="seperator">/</li>
                        <li><a href="#gallery-showcase">Photography</a></li>
                        <li class="seperator">/</li>
                        <li><a href="#blog">Blog</a></li>
                        <li class="seperator">/</li>
                        <li><a href="#contact">Contact</a></li>
                    </ul><!-- nav -->
                </div><!-- main nav -->
                
                <div class="hidden-xs col-sm-4 col-sm-offset-1 social-header-icons">
                    <a href="https://www.facebook.com/RBoltonPhotography" target="_blank" class="badge social facebook" alt="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a><!-- facebook -->
                    <a href="https://twitter.com/Roxane_24" target="_blank" class="badge social twitter" alt="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a><!-- twitter -->
                    <a href="" target="_blank" class="badge social linked-in" alt="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a><!-- linked in -->
                    <a href="https://www.instagram.com/studio24_photography" target="_blank" class="badge social instagram" alt="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a><!-- instagram -->
                    <a href="https://plus.google.com/u/0/110343052898871318870" target="_blank" class="badge social gplus" alt="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a><!-- google plus -->
                    <a href="" target="_blank" class="badge social pintrest" alt="Pintrest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a><!-- pintrest -->
                </div>
            </div>
        </div><!-- navbar studio24 -->
    </div><!-- navbar wrapper -->
</header><!-- header -->


<!-- MOBILE ONLY (header and navigation -->
<header id="mobile-fixednav" class="navbar navbar-default visible-xs">
    <div class="container">
        <div class="mobile-logo">
            <h1>
                <a href="/" class="main-logo"><img src="images/Studio24Logo.png" height="75px" alt="Studio24"></a>
            </h1>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        </div><!-- navbar header -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#about">About</a></li>
                <li><a href="#gallery-showcase">Photography</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
              <!-- mobile social icons -->
            <div id="social-icons">
                <a href="https://www.facebook.com/RBoltonPhotography" target="_blank" class="badge mobile-social facebook" alt="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a><!-- facebook -->
                <a href="https://twitter.com/Roxane_24" target="_blank" class="badge mobile-social twitter" alt="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a><!-- twitter -->
                <a href="" target="_blank" class="badge mobile-social linked-in" alt="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a><!-- linked in -->
                <a href="https://www.instagram.com/studio24_photography" target="_blank" class="badge mobile-social instagram" alt="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a><!-- instagram -->
                <a href="https://plus.google.com/u/0/110343052898871318870" target="_blank" class="badge mobile-social gplus" alt="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a><!-- google plus -->
                <a href="" target="_blank" class="badge mobile-social pintrest" alt="Pintrest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a><!-- pintrest -->
            </div><!-- social icons -->
        </div><!-- navigation -->

    </div><!-- container -->
</header><!-- header -->


<!-- HERO -->
<section id="hero" class="hidden-xs" data-type="background" data-speed="10">
    <article>
        <div id="social-hero" class="animated slideInLeft">
            <a href="https://www.facebook.com/RBoltonPhotography" target="_blank" class="badge social facebook" alt="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a><!-- facebook -->
                    <a href="https://twitter.com/Roxane_24" target="_blank" class="badge social twitter" alt="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a><!-- twitter -->
                    <a href="" target="_blank" class="badge social linked-in" alt="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a><!-- linked in -->
                    <a href="https://www.instagram.com/studio24_photography" target="_blank" class="badge social instagram" alt="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a><!-- instagram -->
                    <a href="https://plus.google.com/u/0/110343052898871318870" target="_blank" class="badge social gplus" alt="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a><!-- google plus -->
                    <a href="" target="_blank" class="badge social pintrest" alt="Pintrest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a><!-- pintrest -->
        </div>
        <div class="container">
            <div class="hero-text">
                <div id="logo-hero" class="animated fadeInDown"><img class="hero-logo logo-intro" src="images/logo-intro.png" alt="Studio 24"></div>
                <h1 id="hero-head-text" class="animated fadeInDown">Lorems<span class="dot">.</span>Ipsum<span class="dot">.</span>Dolor</h1>
                

                <div id="scrollCue" data-100="opacity: 1;" data-600="opacity: 0;">
                    <span></span>
                </div>
            </div>
            
        </div><!-- container -->
    </article>
</section><!-- hero -->


<!-- about section -->
<section id="about">
    <div class="container">
        <div class="section-header">
            <div class="head-text"><h2>About</h2></div>    
            <!-- <div class="sub-text">dddddddd</div> -->
            <div class="center-line"></div>
        </div><!-- section header -->

        <div class="about-img">
            <img src="images/studio24-about-img.jpg" alt="">
        </div>



        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales ligula dui, vitae finibus nunc accumsan id. Integer aliquam erat sit amet velit pretium, eu volutpat tortor hendrerit. In luctus magna sit amet varius scelerisque. Fusce pretium venenatis nunc, sed euismod urna. Integer et placerat magna. Aliquam elit erat, bibendum ac enim eget, semper luctus magna. Mauris ut iaculis ligula.</p>

            <p>Donec lectus elit, congue quis quam ac, aliquet interdum metus. Donec vitae mi quis dolor vestibulum ullamcorper sit amet vitae risus. Vivamus risus augue, pretium ac velit eget, tristique rhoncus eros. Quisque convallis faucibus tristique. Morbi pretium lectus et justo maximus, id blandit augue rutrum. Nullam ultricies leo eu enim efficitur malesuada. Fusce a placerat metus, et feugiat lectus. Phasellus sit amet tristique justo.</p>

            <p>Morbi bibendum viverra consectetur. Duis hendrerit odio ac diam cursus consequat. Fusce dictum metus vel viverra hendrerit. Mauris ullamcorper diam sed nisi dignissim aliquam. Sed placerat erat in consequat ornare. Donec sit amet pulvinar magna, at maximus tellus. Cras et ultricies mi, vitae ornare libero. Praesent sit amet posuere sapien, ut dapibus metus. Sed luctus metus sed hendrerit posuere. Pellentesque vulputate arcu ac nunc condimentum, vitae condimentum magna dapibus. Nunc id lorem nec massa egestas consequat quis non libero.</p>

             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales ligula dui, vitae finibus nunc accumsan id. Integer aliquam erat sit amet velit pretium, eu volutpat tortor hendrerit. In luctus magna sit amet varius scelerisque. Fusce pretium venenatis nunc, sed euismod urna. Integer et placerat magna. Aliquam elit erat, bibendum ac enim eget, semper luctus magna. Mauris ut iaculis ligula.</p>

            <p>Donec lectus elit, congue quis quam ac, aliquet interdum metus. Donec vitae mi quis dolor vestibulum ullamcorper sit amet vitae risus. Vivamus risus augue, pretium ac velit eget, tristique rhoncus eros. Quisque convallis faucibus tristique. Morbi pretium lectus et justo maximus, id blandit augue rutrum. Nullam ultricies leo eu enim efficitur malesuada. Fusce a placerat metus, et feugiat lectus. Phasellus sit amet tristique justo.</p>

            <p>Morbi bibendum viverra consectetur. Duis hendrerit odio ac diam cursus consequat. Fusce dictum metus vel viverra hendrerit. Mauris ullamcorper diam sed nisi dignissim aliquam. Sed placerat erat in consequat ornare. Donec sit amet pulvinar magna, at maximus tellus. Cras et ultricies mi, vitae ornare libero. Praesent sit amet posuere sapien, ut dapibus metus. Sed luctus metus sed hendrerit posuere. Pellentesque vulputate arcu ac nunc condimentum, vitae condimentum magna dapibus. Nunc id lorem nec massa egestas consequat quis non libero.</p>
    </div>
</section><!-- about -->

<section id="gallery-showcase">
    <div class="section-header">
        <div class="head-text"><h2>Photography Gallery</h2></div>    
        <!-- <div class="sub-text">dddddddd</div> -->
        <div class="center-line"></div>
    </div><!-- section header -->

    <div class="row">
            <div id="gallery-pod" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 image-pod hvr-shutter-in-horizontal">
                <h3><a href="gallery.html">Gallery</a></h3>
            </div><!-- gallery pod -->

            <div id="panoramic-pod" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 image-pod hvr-shutter-in-horizontal">
                <h3><a href="panoramic.html">Panoramic</a></h3>
            </div><!-- panoramic pod -->

            <div id="print-pod" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 image-pod hvr-shutter-in-horizontal">
                <h3><a href="print.html">Print</a></h3>
            </div><!-- print pod -->
    </div><!-- row -->
</section><!-- gallery showcase -->




<section id="blog">
        <div class="container">
            <div class="section-header">
                <div class="head-text"><h2>Recent Post</h2></div>    
                <!-- <div class="sub-text">dddddddd</div> -->
                <div class="center-line"></div>
            </div><!-- section header -->
                <div class="row">
                        Morbi bibendum viverra consectetur. Duis hendrerit odio ac diam cursus consequat. Fusce dictum metus vel viverra hendrerit. Mauris ullamcorper diam sed nisi dignissim aliquam. Sed placerat erat in consequat ornare.

                </div><!-- row -->
        </div><!-- container -->
</section><!-- Blog -->


<section id="contact" data-type="background" data-speed="4">
        <div class="container">
            <div class="section-header">
                <div class="head-text"><h2>Contact</h2></div>    
                <!-- <div class="sub-text">dddddddd</div> -->
                <div class="center-line"></div>
            </div><!-- section header -->

        <div class="row">
            <div class="col-sm-5 col-sm-offset-1 contact-form dotted-line">
                <h3>Reach Out!</h3>
                <p>If you are wanting to reach me for a possible quote on a project, wanting to get in touch or just have a general question? please fill out the form and I can back to you.</p>
                <form id="contactForm" role="form" class="form" method="post" action="index.php">
                    <div class="form-group">
                        <label class="sr-only" for="contact-full-name">Name<span class="required">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Please Enter Your Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<p class='text-danger'>$errName</p>";?>
                    </div><!-- form group -->

                    <div class="form-group">
                        <label class="sr-only" for="contact-phone">Phone<span class="required">*</span></label>
                        <input type="Phone" class="form-control" id="phone" name="phone" placeholder="Please Enter Your Phone Number" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                        <?php echo "<p class='text-danger'>$errPhone</p>";?>
                    </div><!-- form group -->

                    <div class="form-group">
                        <label class="sr-only" for="contact-email">E-mail<span class="required">*</span></label>
                        <input type="E-mail" class="form-control" id="email" name="email" placeholder="Please Enter Your E-mail" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div><!-- form group -->

                    <div class="form-group">
                        <label class="sr-only" for="contact-purpose">Message </label>
                        <textarea class="form-control" id="message" name="message" cols="30" rows="5" placeholder="Leave a message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                    </div><!-- form group -->

                    <div class="form-group">
                        <label class="sr-only" for="contact-human">2 + 3 = ?</label>
                        <input type="text" class="form-control" id="human" name="human" placeholder="2 + 3 = ?">
                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
                    </div><!-- form group -->
                        
                    <div class="form-group">
                        <input id="submit" name="submit" type="submit" class="btn btn-24 btn-contact" value="Send">
                    </div><!-- form group -->

                    <div class="form-group">
                        <?php echo $result; ?>
                    </div><!-- form group -->   
                </form><!-- form -->
        </div>
            <div class="col-sm-3 col-sm-offset-1 contact-info">
                <h3>Where Are We?</h3>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Falmouth, MA</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a tel="5082960557">508.296.0557</a></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:roxane@studio24.photography">roxane@studio24.photography</a></li>
                    </ul>
                    <div class="hidden-xs col-sm-12 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95493.92774510616!2d-70.66271978998189!3d41.586875145307346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e4d0ca83e860f3%3A0xb581647734b66134!2sFalmouth%2C+MA!5e0!3m2!1sen!2sus!4v1495316858002" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div><!-- col -->
            </div>
        </div><!-- container -->
</section><!-- contact -->

<footer>
    <div class="container clearfix">
        <div class="row">
             <div class="col-xs-12 col-sm-3  copyright">
                 <p>&copy; copyright 2017. Studio24.</p>
             </div><!-- col -->
             <div class="col-xs-12 col-sm-4 col-sm-offset-5 developer">
                 <p>Studio24 is designed &amp; develop by <a href="http://www.wesleychitwood.com">wesleychitwood.com</a></p>
             </div><!-- col -->
         </div><!-- row -->
    </div><!-- container -->
</footer><!-- footer -->


    <!-- Parralax Core -->
    <script type="text/javascript" src="bower_components/skrollr/src/skrollr.js"></script>
    <script type="text/javascript">
        var s = skrollr.init();
    </script>
  


  <!-- BOOTSTRAP CORE JAVASCRIPT (place at the end of the document so the pages load faster) -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"></script>


    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>