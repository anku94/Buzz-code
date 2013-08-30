<?php
session_start();
require_once('user_tracking_khoofiya.php');

?>
<!doctype html>
<!--HTML5 Theme created by NORDiX, edited by Ankush-->
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Official Felicity Buzz portal</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>

<!-- CSS Styles files begin-->
<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all"/>
<link rel="stylesheet" href="css/prettyPhoto.css" type='text/css'>
<link rel="stylesheet" href="css/nivo-slider.css" />
<link rel="stylesheet" href="css/style.css" type='text/css'>

<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.6.4.min.js"><\/script>')</script>

<!-- JavaScript files begin-->
<script type="text/javascript" src="js/jquery.jscrollpane.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!--script type="text/javascript" src="js/jquery.ufvalidator-1.0.5.js"></script-->
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jQueryRotate.2.1.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/custom.js"></script>




</head>

<body>

<!-- wrappage begin here -->
<div class="wrappage">
  <!-- container begin here -->
  <div class="container">
    <!-- header begin here -->
    <header>
      <div class="left">
        <h1>
          Felicity
          <span>
            Buzz
          </span>
        </h1>
        <h5>
          It's here. Again.
        </h5>
      </div>
    </header>
    <!-- header end here -->
    <!-- section menu begin here -->
    <section class="menu">
      <div class="menu-cont">
        <a href="#about" class="about">
          Events
          <span class="rot">
            <img src="images/hover-circle.png" alt="">
          </span>
        </a>
        <a href="#resume" class="resume">
          T-shirts!
          <span class="rot">
            <img src="images/hover-circle.png" alt="">
          </span>
        </a>
        <a href="#portfolio" class="portfolio">
          News
          <span class="rot">
            <img src="images/hover-circle.png" alt="">
          </span>
        </a>
        <a href="#contact" class="contact">
          Contact
          <span class="rot">
            <img src="images/hover-circle.png" alt="">
          </span>
        </a>
      </div>
    </section>
    <!-- section menu end here -->
    <!-- section about begin here -->
    <section id="about">
      <a href="javascript:void(0)" class="close">
        <img src="images/close-orange.png" alt="">
      </a>
      <div class="block">
        <h1 class="about divider">
          Events
        </h1>
        <div class="block-12 left">
          <h3 class="divider-s">
            Gaming
          </h3>
            <ul class="info">
                <li class="where left">
                  Counter Strike
                  <span>
                  </span>
                </li>
                <li class="where right progress">
                  <span>
                    Friday & Saturday <br /> 3pm - 11pm <br /> Workspace & 3**
                  </span>
                </li>
                <li class="where left">
                  Need For Speed
                  <span>

                  </span>
                </li>
                <li class="where right progress">
                  <span>
                    Friday & Saturday <br /> 3pm - 11pm <br /> Workspace & 3**

                  </span>
                </li>
                <li class="where left">
                  FIFA '12
                  <span>

                  </span>
                </li>
                <li class="where right progress">
                  <span>
                    Friday & Saturday <br /> 3pm - 11pm <br /> Workspace & 3**

                  </span>
                <li class="where left">
                  Age Of Empires 3
                  <span>

                  </span>
                </li>
                <li class="where right progress">
                  <span>
                    Friday & Saturday <br /> 3pm - 11pm <br /> Workspace & 3**

                  </span>
                </li>
                <li class="where left">
                  DotA
                  <span>

                  </span>
                </li>
                <li class="where right progress">
                  <span>
                    Friday & Saturday <br /> 3pm - 11pm <br /> Workspace & 3**
                  </span>
                </li>
            </ul>
        </div>
        <div class="block-12 left last">
          <h3 class="divider-s">
            Outdoor
          </h3>
          <?php include_once('outdoor.html'); ?>
        </div>
        <div class="block-12 left">
          <h3 class="divider-s">
            Cultural
          </h3>
          <?php include_once('cult.html'); ?>
        </div>
        <div class="block-12 left last">
          <h3 class="divider-s">
            Technical
          </h3>
          <?php include_once('tech.html'); ?>
        </div>
        <div class="block-12 left">
          <h3 class="divider-s">
            Miscellaneous
          </h3>
          <?php include_once('misc.html'); ?>
        </div>
        <!--p>
          Sed ut perspiciatis unde omnis iste natus error sit
          <a href="#">
            voluptatem accusantium
          </a>
          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
          veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
          ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
          porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
          adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
          et dolore magnam aliquam quaerat voluptatem.
        </p>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
          doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
          veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
          ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
          porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
          adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
          et dolore magnam aliquam quaerat voluptatem.
        </p>
        <div class="block-12 left">
          <h3 class="divider-s">
            Education
          </h3>
          <ul class="info">
            <li class="where left">
              University Chicago /
              <span>
                Design and Development
              </span>
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
            <li class="where left">
              University Chicago /
              <span>
                Design and Development
              </span>
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
            <li class="where left">
              University Chicago /
              <span>
                Design and Development
              </span>
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
            <li class="where left">
              University Chicago /
              <span>
                Design and Development
              </span>
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
            <li class="where left">
              University Chicago /
              <span>
                Design and Development
              </span>
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
        </ul>
        </div>
        <div class="block-12 left last">
          <h3 class="divider-s">
            Experience
          </h3>
          <ul class="info">
            <li class="where left">
              <span>
                Apple Corp.
              </span>
              / Senior Developer
            </li>
            <li class="where right progress">
              <span>
                2009-present
              </span>
            </li>
            <li class="where left">
              <span>
                Microsoft Corp.
              </span>
              / Front-End Developer
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
            <li class="where left">
              <span>
                Apple Corp.
              </span>
              / Developer
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
            <li class="where left">
              <span>
                LIM
              </span>
              / Designer &amp; Developer
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
            <li class="where left">
              <span>
                Apple Corp.
              </span>
              / Developer
            </li>
            <li class="where right progress">
              <span>
                2001-2003
              </span>
            </li>
          </ul>
        </div-->
      </div>
    </section>
    <!-- section about end here -->
    <!-- section resume begin here -->
    <section id="resume">
      <a href="javascript:void(0)" class="close">
        <img src="images/close-olive.png" alt="">
      </a>
      <div class="block">
        <h1 class="resume divider-t">
          T-shirts
        </h1>
	<p>
	Get your buzz T-shirts. Stocks are going to be limited, so hurry! <br />
        <!--strong>Price: Rs. 200/-</strong-->
        <ul class="portfolio">
          <li>
                <a href="images/tfront.jpg" rel="prettyPhoto">
                  <img src="images/tfront.jpg" alt="T-Shirt, front" width="249 px">
                  <span>
                        Front
                  </span>
                </a>
        
          </li>

          <li>
                <a href="images/tback.jpg" rel="prettyPhoto">
                  <img src="images/tback.jpg" alt="T-Shirt, back" width="249 px">
                  <span>
                        Back
                  </span>
                </a>

          </li>

        </ul>
          <!--a href="#">
            qui ratione voluptatem
          </a-->
        </p>
        <!--div class="block-12 left last">
          <h3 class="divider-s">
            Services
          </h3>
          <ul class="info">
            <li class="check">
              <span>
                WP
              </span>
              Front-End and Back-End develop , design
            </li>
            <li class="check">
              <span>
                Joomla
              </span>
              Front-End and Back-End develop , design and graphic design
            </li>
            <li class="check">
              Front-End and Back-End develop , design and graphic design
            </li>
            <li class="check">
              <span>
                WP
              </span>
              Front-End and Back-End develop , design
            </li>
            <li class="check">
              <span>
                Joomla
              </span>
              Front-End and Back-End develop , design and graphic design
            </li>
            <li class="check">
              Front-End and Back-End develop , design and graphic design
            </li>
            <li class="last check">
              Front-End and Back-End develop , design and graphic design
            </li>
          </ul>
        </div-->
      </div>
    </section>
    <!-- section resume end here -->
    <!-- section portfolio begin here -->
    <section id="portfolio">
      <a href="javascript:void(0)" class="close">
        <img src="images/close-blue.png" alt="">
      </a>
      <div class="block">
        <h1 class="portfolio divider">
          Team
        </h1>
        <!-- portfolio begin here -->
        <!--ul class="portfolio">
          <li>
            <a href="http://vimeo.com/22835484" rel="prettyPhoto">
              <img src="images/img-249-150-v.jpg" alt="">
              <span>
                The quick, brown fox jumps over a lazy dog.
              </span>
            </a>
          </li>
          <li>
            <a href="images/big-image-ex.jpg" rel="prettyPhoto">
              <img src="images/img-249-150.jpg" alt="">
              <span>
                The quick, brown fox jumps over a lazy dog.
              </span>
            </a>
          </li>
          <li class="last">
            <a href="images/big-image-ex.jpg" rel="prettyPhoto">
              <img src="images/img-249-150.jpg" alt="">
              <span>
                The quick, brown fox jumps over a lazy dog.
              </span>
            </a>
          </li>
          <li>
            <a href="http://vimeo.com/22835484" rel="prettyPhoto">
              <img src="images/img-249-150-2.jpg" alt="">
              <span>
                The quick, brown fox jumps over a lazy dog.
              </span>
            </a>
          </li>
          <li>
            <a href="images/big-image-ex.jpg" rel="prettyPhoto">
              <img src="images/img-249-150-2.jpg" alt="">
              <span>
                The quick, brown fox jumps over a lazy dog.
              </span>
            </a>
          </li>
          <li class="last">
            <a href="images/big-image-ex.jpg" rel="prettyPhoto">
              <img src="images/img-249-150-2.jpg" alt="">
              <span>
                The quick, brown fox jumps over a lazy dog.
              </span>
            </a>
          </li>
        </ul-->
        <!-- portfolio end here -->
        <!--h3 class="divider-s">
          Organizers
        </h3-->
		<ul class="info last modded">
		  <li class="check">
		    <span>Organizers</span> Mehar Chandra Palamakula, Shiv Raj, GV Chaitanya
		  </li>
		  <li class="check">
		    <span>Coordinators</span> Tejas Shah, Sriharsha Karamchati, Sudhanshu Shekhar, Vibhav Srivastava
		  </li>
		  <li class="check">
		    <span>Technical Team</span> Felicity Buzz Portal: Ankush Jain, Hack-In: Ankush Jain, Nehal J Wani, Abhinandan Panigrahi, Rishabh Raj, Cache-In: Karan Dhamele, Jayesh Lahori, Square-root: Deepak Kathayat
		  </li>
		  <li class="check">
		    <span>T-Shirt Design</span> Raveesh Motlani, Ravneet Singh, Parth Kapadia, Guru Prakash
		  </li>
		</ul> <br />
		<!--ul class="info last modded">
		  <li class="check">
		    Felicity Buzz Portal developed by <span>Ankush Jain</span>
		  </li>
		  <li class="check">
		    Hack-In Portal developed by <span>Ankush Jain, Nehal J Wani, Abhinandan Panigrahi, Rishabh Raj</span>
		  </li>
		  <li class="check">
		    Cache-In Portal developed by <span>Jayesh Lahori</span>
		  </li>
		</ul-->
        <!--div class="slider-wrapper theme-default" style="margin:20px 0 20px 0;">
          <div id="nivo" class="nivoSlider">
            <img src="images/slider-img-1.jpg" alt="" />
            <img src="images/slider-img-2.jpg" alt="" title="This is an example of a caption"/>
            <img src="images/slider-img-3.jpg" alt="" />
          </div>
        </div>
      </div-->
    </section>
    <!-- section portfolio end here -->
    <!-- section contact begin here -->
    <section id="contact">
      <a href="javascript:void(0)" class="close">
        <img src="images/close-crimson.png" alt="">
      </a>
      <div class="block">
        <h1 class="contact divider">
          contact
        </h1>
	<p>
		In case of any queries or suggestions, feel free to contact us!
        </p>
        <div class="block-12 left">
          <div id="style-form">
            <form id="form" name="form" method="post" action="newpost.php">
              <div class="wrapper-block left">
                <label for="name">
                  Name
                  <span class="small-label">
                  </span>
                </label>
                <input type="text" name="name" id="name" title="Your Name" class="req-string"/>
              </div>
              <div class="wrapper-block left">
                <label for="email">
                  E-mail
                  <span class="small-label">
                  </span>
                </label>
                <input type="text" name="email" id="email" title="Your E-mail" class="req-email"/>
              </div>
              <div class="wrapper-block left">
                <label for="message">
                  Message
                  <span class="small-label">
                  </span>
                </label>
                <textarea name="message" id="message" rows="12" cols="20" title="Your Message" class="req-string"></textarea>
              </div>
              <input type="submit" value="Submit" class="submit btn-form" id="submit"
              />
            </form>
            <!--span class="sending">
              send...
            </span-->
            <div class="mess center">
            </div>
          </div>
        </div>
        <!--div class="block-12 left last">
          <ul class="contact">
            <li>
              <a href="#" class="vcard">
                Download My vCard PDF
              </a>
            </li>
            <li>
              John Smith
            </li>
            <li>
              Developer &amp; Designer
            </li>
            <li>
              Chicago, IL, 111 Webdev St
            </li>
            <li>
              Phone : &nbsp;
              <span>
                +00 (111) 111-1111-1111
              </span>
            </li>
            <li>
              Email : &nbsp;
              <span>
                <a href="mailto:web@dev.com">
                  johndoe@johnsmith.com
                </a>
              </span>
            </li>
          </ul>
        </div-->
      </div>
    </section>
    <!-- section contact end here -->
    <!-- section footer begin here -->
    <!--footer>
      <div class="tweets left">
      <p>Loading Tweets...</p>
      <ul id="tweet-list"></ul>
      </div>
      <ul class="socicon right">
        <li>
          <a href="#" class="google" name="tipsy" title="google plus">
          </a>
        </li>
        <li>
          <a href="#" class="facebook" name="tipsy" title="facebook">
          </a>
        </li>
        <li>
          <a href="#" class="twitter" name="tipsy" title="twitter">
          </a>
        </li>
        <li>
          <a href="#" class="flickr" name="tipsy" title="flickr">
          </a>
        </li>
        <li>
          <a href="#" class="dribbble" name="tipsy" title="dribbble">
          </a>
        </li>
        <li class="last">
          <a href="#" class="vimeo" name="tipsy" title="vimeo">
          </a>
        </li>
      </ul>
    </footer-->
    <!-- section footer end here -->
  </div>
  <!-- container end here -->
</div>
<!-- wrappage end here -->


<!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

</body>
</html>
