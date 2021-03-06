<?php
session_start();
  if (!$_SESSION['session']) {
    header("refresh:0, ../joinus.php");
  }
?>

<!DOCTYPE html>
<!--
Template Name: Interlingua
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>TechnologyXpress | Blog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################# -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i> +91 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@TecxX.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="/"><i class="fa fa-lg fa-home"></i></a></li>
        <!-- <li><a href="#">Login</a></li> -->
        <li><a href="../joinus.php">Join Us</a></li>
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
      <h1><a href="/">TechX</a></h1>
      <p>saying a lot in a little</p>
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
      <li><a href="/">Home</a></li>
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
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="" id="hulk">Contact Us</a></li>
      <li><a href="../joinus.php">Join Us</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('/images/demo/backgrounds/1st.jpg');">
  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
   <!-- <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li>
    </ul>-->
    <!-- ################################################################################################ -->
    <h6 class="heading">Blog</h6>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <!--<h6>Lorem ipsum dolor</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </nav>-->
      <div class="sdb_holder">
        <h6>Address</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="mailto:contact@TechX.com">contact@TechX.com</a>
        </address>
      </div>
      <div class="sdb_holder">
        <article>
          <h6>About</h6>
          <p>TechnologyXpress<hr>
          TechX</p>
          <ul>
            <li>Modern</li>
            <li>Fast</li>
          </ul>
        </article>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1>TECHBLOG...Where dreams become reality</h1>
      <img class="imgr borderedbox inspace-5" src="/images/demo/giphy.gif" alt="" style="width:250px;">
      <p>Is technology a positive advancement? Over the past few years technology has taken over society. Everyone uses technology, from children and teenagers to adults and elders. Technology is vital in this era and makes everything easier, but can cause laziness and some to abuse it. Some examples are the computer, television, cell phone, and videogame systems. Technology has influenced people and their daily lives, some better than others.Showcase your views on technology.</p>
      <p>Owing to the many changes taking place in the technological world, the dependency on technology is growing with each passing day. There are advancements that take place at a very fast rate to the point that at one point they turn out to be self-defeating. The ability to transform carbon dioxide to fuel energy is a great breakthrough and the moment it is well set up, it will forever change the way we depend on limited and non-renewable sources.</p>
      <img class="imgl borderedbox inspace-5" src="/images/demo/left.gif" alt="" style="width:250px;height:250px">
      <p>Technology has now steadily occupied its place. The invention of technology made life simpler and easier. Because of the technology many scientific machines or scientific tools were developed which are helpful to the individuals and there are so many tools which are useful in our day to day life. Technological development includes from communication through letters to Email; which indeed saves lot of time. Technology has occupied in the areas like information technology, medical technology, communication technology and scientific technology. Now-a-days technology has proved that we can't imagine life with out it.</p>
      <p> Technology is one of the principal driving forces of the future; it is transforming our lives and shaping our future at rates unprecedented in history, with profound implications which we can't even begin to see or understand. Technology has also changed other aspects of everyday life, such as health care, education, job satisfaction, and leisure time activities. </p>
      <p>Owing to the application of technology, our standard of living has increased. Our needs are met with greater ease. Technology has brought advancements in agriculture, due to which food produce has increased. Owing to the developments in engineering and architecture, building robust civil structures has been possible. Technology has boosted every industry.</p>
      <h1>Areas of writing in Technical world</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>Gaming</th>
              <th>Business</th>
              <th>Information Technlogy</th>
              <th>Developmental Analysis</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">Games Design</a></td>
              <td>Business information systems</td>
              <td>Information and society</td>
              <td>Computer and information sciences</td>
            </tr>
            <tr>
              <td>Games development</td>
              <td>It for business</td>
              <td>Information technology</td>
              <td><a href="#">Mobile apps development</a></td>
            </tr>
            <tr>
              <td>Cybersecurity</td>
              <td>Multimedia development</td>
              <td>Advanced computer science</td>
              <td>Software development</td>
            </tr>
            <tr>
              <td>Creative computing</td>
              <td><a href="#">Networks and security</a></td>
              <td>Data science</td>
              <td>Web development</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--<div id="comments">
        <h2>Comments</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="/images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="/images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="/images/demo/avatar.png" alt=""></figure>
                <address>
                By <a href="#">A Name</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
              </div>
            </article>
          </li>
        </ul>--><br><hr><br><br>
        <h2>Write A Comment</h2>
        <form action="/comment.php" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="Name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="Email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="Website" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment"><br>Your Comment</label>
            <textarea name="Comment" id="comment" cols="85" rows="10"></textarea>
          </div>
          <div><br>
            <input type="submit" name="submit" value="Submit Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ --><div class="wrapper row4 bgded overlay" style="background-image:url('/images/demo/backgrounds/03.jpg');">
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
      <form method="post" action="/newsletter.php">
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
      <figure><img class="borderedbox inspace-10 btmspace-15" src="/stack.jpg" alt="">
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
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="/">TechX</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="/layout/scripts/jquery.min.js"></script>
<script src="/layout/scripts/jquery.backtotop.js"></script>
<script src="/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>