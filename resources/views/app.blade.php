<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('meta')
	@yield('head')
	<link rel="icon" href="{{ asset('/img/favicon.ico') }}">
	<link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">

	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
     <!-- Magnific popup -->
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/colors/red.css') }}">

    <script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>

	<!-- Fonts -->
	 <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

	<!-- App Icons -->
	<link rel="apple-touch-icon" href="{{ asset('/img/touch-icon-iphone.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/touch-icon-ipad.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/touch-icon-iphone-retina.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/touch-icon-ipad-retina.png') }}">

	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/plugins/html5shiv.js"></script>
          <script src="js/plugins/respond.min.js"></script>
        <![endif]-->
</head>
<body>
  <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="main-menu">
            <li><a href="#page-welcome">Home</a></li>
            <li><a href="#page-profile">Profile</a></li>
            <li><a href="#page-skills">Skills</a></li>
            <li><a href="#page-education">Education</a></li>
            <li><a href="#page-experience">Experience</a></li>
            <li><a href="#page-portfolio">Portfolio</a></li>
            <li><a href="#page-contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- welcome begins -->
    <section id="page-welcome" class="page-welcome">
      <div>
          <ul class="slider-controls">
              <li><a id="vegas-next" class="next" href="#"></a></li>
              <li><a id="vegas-prev" class="prev" href="#"></a></li>
          </ul>
        </div>
        <div class="container">
            <div class="row">
                <header class="centered">
                    <h1>Brent Deacon</h1>
                    <p>WEB DESIGNER</p>
                </header>
                <div class="social-icons">
                        <a href="https://www.facebook.com/brent.d12345/" class="btn btn-round btn-clear btn-facebook" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/B_Deacs" class="btn btn-round btn-clear btn-twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <!--<a href="https://www.dribbble.com/" class="btn btn-round btn-clear btn-dribbble"><i class="fa fa-dribbble"></i></a>-->
                        <a href="http://instagram.com/_deacs" class="btn btn-round btn-clear btn-instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        <!--<a href="https://www.linkedin.com/" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                         <a href="https://www.pinterest.com/" class="btn btn-round btn-clear btn-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="https://plus.google.com/u/0/101817000039381277880/" class="btn btn-round btn-clear btn-google" target="_blank"><i class="fa fa-google-plus"></i></a>-->
                    
                </div>
                <a href="#page-contact" class="btn btn-default hire-me">Hire Me</a>
            </div>
        </div>
    </section><!-- welcome ends -->
    <!-- profile begins -->
    <section id="page-profile" class="page-profile">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Personal Profile</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle">"It's not about money... its about sending a message."</p>
                </header>
            <div class="row">
              <div class="col-md-3">
                 <div class="profile"><img src="img/profile.png" alt="profile"/></div> 
              </div>
               <div class="col-md-9">
                <p>I am a 22 year old Web Designer &amp; Developer based on the Gold Coast, Australia. I am a hard working, no nonesense designer with an eye for detail and a mind for marketing.</p>
				<p>I am passionate about life, encouraged by people &amp; inspired by nature. I am a die hard perfectionist, I take a logical approach to all problems &amp; look for the best solution, not just the simplest.</p>
				<p>I have completed my Bachelors of Multimedia with Minors in Business and Graphic Design with a focus on web design &amp; development. I have 3 years experience of freelancing &amp; 1 years experience in the marketing devision of the Travel sector.</p>
				<p>I have experience in HTML, CSS, JavaScript, PHP and many more formats and programs. Im always looking to further my education in these fields and want to be known as more than just another web designer.</p>
              </div>
            </div>
      </div> 
    </section><!-- profile ends -->
    <!-- skills begins -->
     <section id="page-skills" class="page-skills">
       <div class="container">
           
                 <header class="section-header">
                    <h2 class="section-title"><span>Skills</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle">"What we do in life echoes in eternity."</p>
                </header>
            <div class="row">
               <div class="col-md-2 col-sm-6">
               <span class="chart chart-html" data-percent="90">
                      <span class="percent"></span>
                       <h3>HTML</h3>
               </span>
            </div>
               <div class="col-md-2 col-sm-6">
               <span class="chart chart-css" data-percent="85">
                      <span class="percent"></span>
                      <h3>CSS</h3>
               </span>
            </div>
			<div class="col-md-2 col-sm-6">
               <span class="chart chart-photoshop" data-percent="80">
                      <span class="percent"></span>
                      <h3>Photoshop</h3>
               </span>
            </div>
			
               <div class="col-md-2 col-sm-6">
               <span class="chart chart-illustrator" data-percent="50">
                      <span class="percent"></span>
                      <h3>Illustrator</h3>
               </span>
            </div>
               <div class="col-md-2 col-sm-6">
               <span class="chart chart-jquery" data-percent="60">
                      <span class="percent"></span>
                      <h3>jQuery</h3>
               </span>
            </div>
               <div class="col-md-2 col-sm-6">
               <span class="chart chart-php" data-percent="75">
                      <span class="percent"></span>
                       <h3>PHP</h3>
               </span>
            </div>
			
          </div>
        </div>
    </section><!-- skills ends -->
    <!-- education begins -->
     <section id="page-education" class="page-education">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span>Education</span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle">"Elementary, my dear Watson."</p>
                </header>
                <div class="row">
                 <div class="col-md-12">
                  <article class="education">
                    <header>
                      <h3>Griffith University - Gold Coast Campus</h3>
                      <p>Bachelor of Multimedia - <strong>Graduated:</strong> 2013</p>
                    </header>
                      <p>Graduated from the Gold Coast campus with high grades focusing on Web Design, Graphic Design &amp; Business.</p>
                  </article>
                </div>
            </div>
       </div>
    </section><!-- education ends -->
    <!-- experience begins -->
     <section id="page-experience" class="page-experience">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span>Experience</span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle">"Get busy living, or get busy dying."</p>
                </header>
                <div class="row">
                 <div class="col-md-6">
                  <article class="experience">
                    <header>
                      <h3>Our Vacation Centre</h3>
                      <p>Graduate Web Developer / Gold Coast, Queensland, Australia / 2013 - Current</p>
                    </header>
                      <p>Plucked straight out of University and into the big world of travel and leisure marketing. Brought on as a Junior position, slowly making my way up and being relied upon for a wide array of jobs, I have begun to think of myself as a sort of marketing everyman in training.</p>
                  </article>
                </div>
                  <div class="col-md-6">
                  <article class="experience">
                    <header>
                      <h3>C-View Windows</h3>
                       <p>Web Master / Gold Coast, Queensland, Australia / 2012 - Current</p>
                    </header>
                      <p>Web Design, Graphic Design, Email Marketing &amp; anything else you can think of, that is the job of a solo Web Master/Developer for a small business based on the sunny Gold Coast.</p>
                  </article>
                </div>
            </div>
        </div>
    </section><!-- experience ends -->
    <!-- portfolio begins -->
     <section id="page-portfolio" class="page-portfolio">
          <div class="container">
            <div class="row">
                <header class="section-header">
                    <h2 class="section-title"><span>Portfolio</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle">"Say 'Hello' to my little friend."</p>
                </header>
           
                <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                  <li class="active filter"><a href="javascript:void(0)" data-filter="*">All</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".branding">Branding</a></li>   
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".design">Design</a></li>            
                  <li class="filter"><a href="javascript:void(0)"  data-filter=".photography">Photography</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".web">Website</a></li>
                </ul>
              </div>
            
                <div>
                  <ul id="grid" class="grid-wrapper">
                      <li class="mix web" >
                       <a href="img/portfolio/large/01.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/01.png"  alt="" >
                      </a> </li>
                      <li class="mix design">
                        <a href="img/portfolio/large/02.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/02.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/03.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/03.png" alt="" ></a></li>
                      <li class="mix web">
                        <a href="img/portfolio/large/04.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/04.png" alt="" ></a></li>
                      <li class="mix branding">
                        <a href="img/portfolio/large/05.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/05.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/06.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/06.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/07.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/07.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/08.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/08.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/09.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/09.png" alt="" ></a></li>
                      <li class="mix web">
                        <a href="img/portfolio/large/10.jpg"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/10.jpg" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/11.jpg"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/11.jpg" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/12.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/12.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/13.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/13.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/14.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/14.png" alt="" ></a></li>
                         <li class="mix branding">
                        <a href="img/portfolio/large/15.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/15.png" alt="" ></a></li>
                  </ul>
                </div>
            </div>
        </div>
    </section><!-- portfolio ends -->
    <!-- contact begins -->
     <section id="page-contact" class="page-contact">
          <div class="container">
              <header class="section-header">
                  <h2 class="section-title"><span>Contact</span></h2>
                    <div class="spacer"></div>
                       <p class="section-subtitle">"I'm going to make him an offer he can't refuse."</p>
              </header>
        <div class="row">
          <div class="col-sm-5 contact-info">
            <h3>Contact Info</h3>
            <p><i class="fa fa-map-marker"></i> Gold Coast, Queensland, Australia</p>
            <p><i class="fa fa-phone"></i> 0431 136 607</p>
            <p><i class="fa fa-envelope-o"></i> brent@brentdeacon.com</p>
          </div>
          
          <div class="col-sm-7">
          <h3>Get in Touch</h3>
              <form  class="form-horizontal" id="contact-form" method="POST">
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" name="name" id="name" placeholder="Your name" class="form-control input-lg ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
                <input type="text" name="email" id="email" placeholder="Your email address" class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message">Message</label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
        </div>
    </form><!-- End contact-form -->
          </div>
        </div><!-- End row -->

        </div>
    </section> <!-- contact ends -->

        <script src="{{ asset('/js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.scrollTo.js') }}"></script>
        <script src="{{ asset('/js/jquery.nav.js') }}"></script>
        <script src="{{ asset('/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('/js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.vegas.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.validate.js') }}"></script>
        <script src="{{ asset('/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>
