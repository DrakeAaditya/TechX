<!DOCTYPE html>


<html>
<head>
<title>TechnologyXpress</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +91 (999) 999 9999</li>
        <li><i class="fa fa-envelope-o"></i> info@techX.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href=""><i class="fa fa-lg fa-home"></i></a></li>
       <!-- <li><a href="#">Login</a></li> -->
        <li><a href="logout.php">Log Out </a></li> 
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="">TechX</a></h1>
      <p>Saying A Lot In A Little </p>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Mobile:</strong><br>
          +91 (123) 456 7890</li>
        <li><strong>Landline:</strong><br>
          +91 (123) 456 7890</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="">Home</a></li>
     <!-- <li class="active"><a class="drop" href="#">Pages</a>
        <ul>
          <li class="active"><a href="gallery.php">Gallery</a></li>
          <li><a href="full-width.html">Full Width</a></li>
          <li><a href="sidebar-left.html">Sidebar Left</a></li>
          <li><a href="sidebar-right.html">Sidebar Right</a></li>
          <li><a href="basic-grid.html">Basic Grid</a></li>
        </ul>
      </li> 
      <li><a class="drop" href="#">Dropdown</a>
        <ul>
          <li><a href="#">Level 2</a></li>
          <li><a class="drop" href="#">Level 2 + Drop</a>
            <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
            </ul>
          </li>
          <li><a href="#">Level 2</a></li>
        </ul>
      </li> -->
      <li><a href="pages/gallery.php">Gallery</a></li>
      <li><a href="<?php 
        session_start();
        if ($_SESSION['session'] == "TRUE") {
          echo "pages/blog.php";
        } else {
          echo "joinus.php";
        }      
      ?>">Blog</a></li>
      <li><a href="" id="hulk">Contact Us</a></li>
      <li><a href="joinus.php">Join Us</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/1st.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Innovation is technology</p>
      <h3 class="heading">Dare to dream another dream</h3>
      <p>Any sufficiently advanced technology is equivalent to magic!</p>
     <!-- <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" name="agree">Agree</a></li>
          <li><a class="btn inverse" name="disagree">Disagree</a></li>
        </ul>
      </footer> -->
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">In Touch with Tomorrow</h6>
    </div>
    <div class="group">
      <div class="one_half first">
        <p>Technological advancement and development have come to a stage where human society finds itself at a crossroads. The positive as well as negative roles of technology have put humans into to a situation of flux and confusion.But it all depends on us as of how we want to view technology.It can be used as a boon or Bain.</p>
        <p class="btmspace-50"> The technology has enriched our lives and enlightened our minds, but in pursuit of its cozy comforts, people tend to be over-reliant on it, so much that they cannot even imagine living without it. The over-whelming effects of this knowledge are all around us as cutting edge technology is rendered obsolete in the blink of an eye due to further advancements.This site is the first step towards advancement of technology.</p>
        <ul class="nospace group">
          <li class="one_half first">
            <article><i class="icon btmspace-30 fa fa-joomla"></i>
              <h6 class="heading font-x1">joining through tech</h6>
              <p>You have got questions, we have got answers.</p>
            </article>
          </li>
          <li class="one_half">
            <article><i class="icon btmspace-30 fa fa-institution"></i>
              <h6 class="heading font-x1">Tech in Law</h6>
              <p>Technology has affected our lives deeply. We simply cannot imagine living without it. It has increased our lifespan and quality of living. It has brought us closer to each other in certain ways and drifted away in others. Without it, our lives would have been simpler, harder, poorer, isolated, unimaginative, disconnected and dangerous. Let's march towards technology</p>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_half"><img class="inspace-10 borderedbox" src="images/demo/backgrounds/03.jpg" alt=""></div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/2nd.jpg');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">For the next generation of latest technology.</h6>
      <p>Let's write.Let's create a better tomorrow.Technology is now a big part of our society and our foreseeable future. There is little room for people that wish to live without technology, and luckily, it is still advancing at a rate that has helped stave off stagnation.</p>
    </div>
    <ul class="nospace group center">
      <li class="one_quarter first">
        <article><i class="icon btmspace-30 fa fa-ioxhost"></i>
          <h6 class="heading font-x1">Customizable 'Smart' Exoskeleton Learns from Your Steps</h6>
          <p>With wearabke devices being more and more in trend in todays market,Assisted walking just got smarter. The exoskeleton is worn on the shin and foot and applies forces to the ankle and toes.People with physical impairments, such as those who have suffered a stroke, a neurological injury or an amputation have found this technology extremely useful.</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><i class="icon btmspace-30 fa fa-yelp"></i>
          <h6 class="heading font-x1">transcranial pulsed ultrasound</h6>
          <p>Transcranial pulsed ultrasound (TPU) uses low intensity, low frequency ultrasound (LILFU) as a method to stimulate the brain. Opposing high-frequency ultrasound, LILFU holds the following benefits: lower absorption in tissue, greater physical penetration depth in tissue, stronger particle deflections, significantly better acoustic penetration and power in bone, greater influence in kinetic effects, immediate/short-term effect results, longer/persistent effects after procedure and a higher degree of patient safety.
</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><i class="icon btmspace-30 fa fa-google-wallet"></i>
          <h6 class="heading font-x1">invisible bicycle helmet</h6>
          <p>Hövding is a rapidly-inflating airbag that deploys from a collar around your neck when you’re in an accident. The invisible bicycle helmet uses rechargeable battery-powered accelerometers and gyroscopes that detect the typical motions involved in a bike crash.</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><i class="icon btmspace-30 fa fa-ils"></i>
          <h6 class="heading font-x1">Hybrid Driving-Flying Robots Could Go Beyond the Flying Car</h6>
          <p>The ability to both fly and walk is common in nature. For instance, many birds, insects and other animals can do both. Robots with similar versatility could fly over impediments on the ground or drive under overhead obstacles.

&hellip;</p>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Inspiration technology</h6>
      <p>This world is full of the benefits of technology. We have to keep company with technology in a good way to save the environment, many creatures, and, of course, the earth itself.Everything is going to change more in the next ten years than it has in the last hundred, so it is difficult to think about 100 years in the future. To think about an indefinite future is very interesting.Get to know innovative ideas about future and technology.</p>
    </div>
    <ul class="nospace group services">
      <li class="one_quarter first">
        <article class="inverse"><a href="#"><i class="fa fa-3x fa-houzz"></i></a>
          <h6 class="heading font-x1">Advancement in the science and technology in many areas has made the lives of people more advance than the ancient time. Advancement in the science and technology is directly and positively affecting the people’s way of living on one hand however it is also affecting indirectly and negatively on the people’s health on the other hand. New inventions in the field of science and technology are very necessary in such a modern world for a country to be strong and well developed country than other countries.</h6>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-weibo"></i></a>
          <h6 class="heading font-x1">What improvement we are seeing in our life on daily basis is because of the science and technologies. For the proper growth and development of the country, it is very necessary to go science and technology hand in hand. Villages are getting developed to towns and towns to  cities thus expanding the greater horizons of economy. Our country India is a fast developing country in the sense of science and technology.</h6>
        </article>
      </li>
      <li class="one_quarter">
        <article class="inverse"><a href="#"><i class="fa fa-3x fa-wheelchair-alt"></i></a>
          <h6 class="heading font-x1">Introduction of scientific researches, ideas and techniques to the field of education has brought a huge level of positive change in the new generation and provided them variety of new and innovative opportunities to work in the field of their own interestThere are many new scientific researches and development have been possible in the field of Mathematics, Architecture, Chemistry, Astronomy, Medicine, Metallurgy, Natural Philosophy, physics, agriculture, defense research, biotechnology, information technology, electronics, oceanography and other areas.</h6>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fa fa-3x fa-viacoin"></i></a>
          <h6 class="heading font-x1">Technological advances and their rapid and wide applications are having a significant impact on a nation’s traditional skills and ways of life.Modern technology has made the requirement for information flow to be quick and effective. We have been able to achieve this through the internet; the medium i.e the internet has facilitated each of us, by making the communication cheap and fast.</h6>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <figure class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <figcaption class="sectiontitle">
      <h6 class="heading">A Virtual World To Create The Future </h6>
      <p>Development is closely related with technology. The stage of development the human being has arrived could have been possible without the advancement in technology. The radical change and advancement in the economy, as we observe today, is the result of the modern technology.</p>
    </figcaption>
    <ul class="nospace group">
      <li class="one_quarter first"><img src="images/image001.jpg" alt=""></li>
      <li class="one_quarter"><img src="images/image002.jpg" alt=""></li>
      <li class="one_quarter"><img src="images/image003.jpg" alt=""></li>
      <li class="one_quarter"><img src="images/image004.jpg" alt=""></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/03.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Address</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +91 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +91 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@techx.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Newsletter</h6>
      <p class="nospace btmspace-30">Let our engineers help u in finding your way in technology.Contact us.</p>
      <form method="post" action="newsletter.php">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" name="Name" type="text" value="" placeholder="Name">
          <input class="btmspace-15" name="Email" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_third">
      <h6 class="heading">Infinite USB Connector</h6>
      <figure><img class="borderedbox inspace-10 btmspace-15" src="images/stack.jpg" alt="">
        <figcaption>
          <h6 class="nospace font-x1">Stackable USB Wires</h6>
        </figcaption>
      </figure>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">TechX</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>