<?php
/**
 * Date         January 25, 2013
 * Copyright    Copyright (C) 2013 Developed By Dean,the Designer
 * License  GPL
 */
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$leftbar = 1;
$rightbar = 1;



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>">
<head>
<jdoc:include type="head" />
<title>ISF |The World's Innovative Style Famous Magazine| Developed By Dean</title>
<link rel="Shortcut Icon"  href="templates/magazine/images/ISFlogoclose.jpg"/>
<!-- CSS -->

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/menus.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/aboutusstyles.css" type="text/css" />
<!-- End of CSS -->
<!--Drop Down CSS -->
<link rel="stylesheet"  href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/dropdown/css/dropdown12.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/dropdown/css/dropdown_2.css" type="text/css"/>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/dropdown/js/stuHover.js" type="text/javascript"></script>
<!--JS Script -->

 <!-- BEGIN Navigation bar CSS - This is where the magic happens -->
    <link rel="stylesheet" href="templates/magazine/css/demo.css">
    <link rel="stylesheet" href="templates/magazine/css/navbar.css">
    <!-- END Navigation bar CSS -->

    <script type="text/javascript" src="templates/magazine/ISF Slider/compressed.js"></script>
   <script type="text/javascript" src="templates/magazine/ISF Slider/script.js"></script>
   <! --[If lte IE 8]>
  <link rel="stylesheet" type="text/css" href=:ie_hacks />
    <script type="text/javascript" src="templates/magazine/js/equalcloumn.js"></script>
<![endif] -->
<script type="text/javascript">
   var so = new SWFObject("BeyonceHD.swf", "mymovie", "400", "100%", "8", "#336699");
   so.addParam("quality", "high");
   so.addParam("wmode", "transparent");
   so.addParam("salign", "t");
   so.write("flashcontent");



</script>
 <!-- BEGIN JavaScript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            // Requried: Navigation bar drop-down
            $("nav ul li").hover(function() {
                $(this).addClass("active");
                $(this).find("ul").show().animate({opacity: 1}, 400);
            },function() {
                $(this).find("ul").hide().animate({opacity: 0}, 200);
                $(this).removeClass("active");
            });

            // Requried: Addtional styling elements
            $('nav ul li ul li:first-child').prepend('<li class="arrow"></li>');
            $('nav ul li:first-child').addClass('first');
            $('nav ul li:last-child').addClass('last');
            $('nav ul li ul').parent().append('<span class="dropdown"></span>').addClass('drop');

        });
    </script>
    <!-- END JavaScript -->
</head>
<body>

<div id="wrapper1"><!-- sets background to white and creates full length leftcol-->
<div id="container">
<div id="massheader"> 
<table border=0 cellpadding=2 cellpadding=2> 
<tr> 
<map name="showbox">

<a href="http://localhost.com/magazine1/index.php"><img src="templates/magazine/jpgs/ISFlogobanner.jpg" width="353px" height="110px"/></a>
<a href="http://www.chanel.com"><img src="templates/magazine/imagebanners/ISFbannerblk.jpg" width="728px" height="90px"/></a>
</tr> 
</table> 
 </div>
</div>
<?php if ($this-> countModules ("navmenu")); ?>
<jdoc: />
<ul id="menusan">
        <li><a href="http://localhost/magazine/index.php">HOME</a>
        </li>
        <li><a href="http://localhost/magazine/news"
               onmouseover="mopen('m1')"
               onmouseout="mclosetime()">NEWS</a>
            <div id="m1"
                 onmouseover="mcancelclosetime()"
                 onmouseout="mclosetime()">
                <a href="http://localhost/magazine/0scars2013">OSCARS 2013</a>
                <a href="#">New in 2013</a>
                <a href="#">Red Carpet</a>
                <a href="#">Celebrity Bio</a>
                <a href="#">ISF Magazine</a>
            </div>
        </li>
        <li><a href="http://localhost/magazine/newtrends"
               onmouseover="mopen('m2')"
               onmouseout="mclosetime()">NEW TRENDS</a>
            <div id="m2"
                 onmouseover="mcancelclosetime()"
                 onmouseout="mclosetime()">
                <a href="http://localhost/entertainment&amp;movies">ENTERTAINMENT &amp; MOVIES</a>
                <a href="#">Clothing</a>
                <a href="#">Accessories</a>
                <a href="#">New Products</a>
            </div>
        </li>
        <li><a href="http://localhost/magazine/fashion">FASHION</a></li>
        <li><a href="http://localhost/magazine/Designercentral">DESIGNER CENTRAL</a></li>
        <li><a href="http://localhost/magazine/aboutus">About Us</a></li>
        <li><a href="http://localhost/magazine/privateprivacy">Private Privacy</a></li>
    </ul>
    <div style="clear:both"></div>




<!-- END Dark navigation bar -->
  
<div id="maincol">
    

<!-- begin main content area -->
        
<div id="left_wrapper"><!-- begin leftcol -->
    
</div><!-- end left wrapper -->
        
<div id="right_wrapper"><!-- begin rightcol -->

</div><!-- end right wrapper -->


      
<div id="middle_wrapper"><!-- begin centercol -->
<div id="center">      
<div id="middle">
      
<div id="info">
<tr><td bgcolor="white"  width="1024" height="768">
<table title="Content" id="content">
<tr><td>


<div id="flashcontent">

<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"
WIDTH="400" HEIGHT="300" id="BeyonceHD">
<PARAM NAME=movie VALUE="Videos/BeyonceHD.swf">
<PARAM NAME=quality VALUE=high>
<EMBED src="BeyonceHD.swf" quality=high WIDTH="320" HEIGHT="240"
NAME="BeyonceHD" ALIGN="" TYPE="application/x-shockwave-flash"
PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer">
</EMBED>
</OBJECT>

    <ul id="slideshow">
     <li>
      <h3>Bet Awards 2013 </h3>
      <span>templates/magazine/ISF Slider/photos/betawards.jpg</span>
      <p>June 26,2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/betawards1.jpg" alt="Bet Awards" /></a>
   </li>
       <li>
      <h3>Billboard Awards 2013 </h3>
      <span>templates/magazine/ISF Slider/photos/billboardawards2011.jpg</span>
      <p>2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/billboardawards2011.jpg" alt="Billboard Awards 2011 Logo" /></a>
   </li>
    <li>
      <h3>Selena Gomez</h3>
      <span>templates/magazine/ISF Slider/photos/selenagomezba.jpg</span>
      <p>Billboard Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/selenagomezba.jpg" alt="Selana Gomez at the BA 2011" /></a>
   </li>
    <li>
      <h3>Fergie </h3>
      <span>templates/magazine/ISF Slider/photos/fergieba.jpg</span>
      <p>Billboard Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/fergieba.jpg" alt="Fergie" /></a>
   </li>
   <li>
      <h3>Beyonce</h3>
      <span>templates/magazine/ISF Slider/photos/beyonceba.jpg</span>
      <p>Billboard Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/beyonceba.jpg" alt="Beyonce" /></a>
   </li>
    <li>
      <h3>Rihanna</h3>
      <span>templates/magazine/ISF Slider/photos/rihannaba12.jpg</span>
      <p>Billboard Awards 2013</p>
      <a href="#"><img src="templates/magazine1/ISF Slider/thumbnails/rihannaba12.jpg" alt="Rihanna" /></a>
   </li>
    <li>
      <h3>Rihanna Close Up</h3>
      <span>templates/magazine/ISF Slider/photos/rihannaba123.jpg</span>
      <p>Billboard Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/rihannaba123.jpg" alt="Rihanna" /></a>
   </li>

      <li>
      <h3>Image Awards 2013 </h3>
      <span>templates/magazine/ISF Slider/photos/image_awards2011-42nd-logo-med1.jpg</span>
      <p>2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/image_awards2011-42nd-logo-med1.jpg" alt="Image Awards 2011 Logo" /></a>
    </li>
    <li>
      <h3>Halle Berry</h3>
      <span>templates/magazine/ISF Slider/photos/halle-berry-image.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/halle-berry-image.jpg" alt="Halle Berry" /></a>
    </li>
    <li>
      <h3>Halle Berry</h3>
      <span>templates/magazine/ISF Slider/photos/halle-berry-image-full.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/halle-berry-image-full.jpg" alt="Halle Berry Full" /></a>
    </li>
    <li>
      <h3>Halle Berry Collect Multiple Image Awards</h3>
      <span>templates/magazine/ISF Slider/photos/halle-berry-image-awards.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/halle-berry-image-awards.jpg" alt="Halle Berry" /></a>
    </li>
    <li>
      <h3>Kerry Washington at the Image Awards</h3>
      <span>templates/magazine/ISF Slider/photos/kerry-washington.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/kerry-washington.jpg" alt="Kerry Washington"  /></a>
    </li>      
    <li>
      <h3>Katty Perry </h3>
      <span>templates/magazine/ISF Slider/photos/Kattyperry.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/Kattyperry.jpg" alt="Katty Perry" /></a>
    </li>
    <li>
      <h3>Katty Perry </h3>
      <span>templates/magazine/ISF Slider/photos/Kattyperry2.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/Kattyperry2.jpg" alt="Katty Perry" /></a>
    </li>    
    <li>
      <h3>Cheryl Crow at the Grammy Awards</h3>
      <span>templates/magazine/ISF Slider/photos/Cheryl-Crow.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/Cheryl-Crow.jpg" alt="Cheryl Crow"  /></a>
    </li>
    <li>
      <h3>Regina King at the Image Awards</h3>
      <span>templates/magazine/ISF Slider/photos/regina-king.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/regina-king.jpg"  alt="Regina King" /></a>
    </li>
      <li>
      <h3>Keisha Pullman at the Image Awards</h3>
      <span>templates/magazine/ISF Slider/photos/keishaknightpullman.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/keishaknightpullman2.jpg" alt="Keisha Pullman" /></a>
    </li>
    <li>
      <h3>Angela Basset at the Image Awards</h3>
      <span>templates/magazine/ISF Slider/photos/angelabasset.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/angelabasset2.jpg" alt="M.I.A. plus a friend" /></a>
    </li>  
    <li>
      <h3>Grammy Awards 2013</h3>
      <span>templates/magazine/ISF Slider/photos/Grammylogo.jpg</span>
      <p>2011</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/GrammyLogo2.jpg"  alt="Grammy 2011 Logo" /></a>
    </li>  
    <li>    
      <h3>Bridget Marquardt</h3>
      <span>templates/magazine/ISF Slider/photos/Bridget-Marquardt.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/BridgetMarquardt.jpg" alt="Bridget Marquardt" /></a>
    </li>  
    <li>
      <h3>Jay-Z at the Grammy Awards</h3>
      <span>templates/ISF Slider/photos/Jay-Z.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/Jay-Z.jpg" alt="Jay-Z" /></a>
    </li>
    <li>
      <h3>Janelle Snowden</h3>
      <span>templates/ISF Slider/photos/janellesnowden.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/janellesnowden.jpg" alt="Janelle Snowden"  /></a>
     </li>
    <li>
      <h3>M.I.A. plus a friend at the Grammy Awards</h3>
      <span>templates/magazine/ISF Slider/photos/MIAplusother.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/MIAplusother.jpg" alt="M.I.A. plus a friend" /></a>
    </li>
    <li>
      <h3>Rihanna at the Grammy Awards</h3>
      <span>templates/magazine/ISF Slider/photos/rihannagrammys.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/rihannagrammys.jpg" alt="Rihanna" /></a>
    </li>
    <li>
      <h3>Tatiyana Ali at the Image Awards</h3>
      <span>templates/magazine/ISF Slider/photos/tatiyana.jpg</span>
      <p>Image Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/tatiyana.jpg" alt="Tayiana Ali" /></a>
    </li>
    <li>
      <h3>Nia Long &amp; a friend at the Image Awards</h3>
      <span>templates/magazine/ISF Slider/photos/Nialongother.jpg</span>
      <p>Grammy Awards 2013</p>
      <a href="#"><img src="templates/magazine/ISF Slider/thumbnails/Nialongother.jpg"  alt="Nia Long & a friend at the Image Awards" /></a>
    </li>
    
  </ul>
  
  <div id="wrapper">
    <div id="fullsize">
      <div id="imgprev" class="imgnav" title="Previous Image"></div>
      <div id="imglink"></div>
      <div id="imgnext" class="imgnav" title="Next Image"></div>
      <div id="image"></div>
      <div id="information">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div id="thumbnails">
      <div id="slideleft" title="Slide Left"></div>
      <div id="slidearea">
        <div id="slider"></div>
      </div>
      <div id="slideright" title="Slide Right"></div>
    </div>
  </div>
<script type="text/javascript" src="templates/magazine/ISF Slider/compressed.js"></script>
<script type="text/javascript">
  $('slideshow').style.display='none';
  $('wrapper').style.display='block';
  var slideshow=new TINY.slideshow("slideshow");
  window.onload=function(){
    slideshow.auto=true;
    slideshow.speed=5;
    slideshow.link="linkhover";
    slideshow.info="information";
    slideshow.thumbs="slider";
    slideshow.left="slideleft";
    slideshow.right="slideright";
    slideshow.scrollSpeed=4;
    slideshow.spacing=5;
    slideshow.active="#fff";
    slideshow.init("slideshow","image","imgprev","imgnext","imglink");
  }
</script>

<br/>



</div>

<div id="LatestNews">
<ul>
<span style="color=#733DB2;font-family:San-Serif,Arial,Helvetica;font-size:14px;"></span><em>Latest News:</em></span>
<div style="color=black;font-family:San-Serif,Arial,Helvetica;font-size:12px;">


<strong><em>Definition of ISF:</em></strong>
<p>A passion for fashion and curiosty for discovering new ways </p>
    <p>to maximize the potential of ISF led to the establishment of ISF solutions.
It is this passion combined with solid background in fashion and retail that has made us the preferedvative technology platform
allows us to efficiently ISF partner for leading brands in the fashion industry.</p>
<p>We believe the only way to succeed in ISF is to start with the basics.
This is why we designed our services around the processes that brands must excel in to build a successful business.
We combine retail best practices with a unique infrascture,robust technology and a team of retail </p>
    <p>
and ISF professional that will help grow your business.
Our infrastructure and inefficiently handle every aspect of ISF online business.</p>
</ul>
</span>
<div>


<?php if ($this-> countModules ("banner-middle")); ?>
<jdoc:include type="modules" name="banner-middle" />
<div id="bottom">
<ul>
<li><img src="templates/magazine/jpgs/ad1.gif" width="125px" height="125px" border="0" align="left" alt="ad1"/></li>
<li><img src="templates/magazine/jpgs/ad2.jpg" width="125px" height="125px" border="0" align="middle" alt="ad2"/></li>
<li><img src="templates/magazine/jpgs/ad7.gif" width="125px" height="125px" border="0" align="middle" alt="ad7"/></li>
<li><img src="templates/magazine/jpgs/ad5.jpg" width="125px" height="125px" border="0" align="middle" alt="ad5"/></li>
<li><img src="templates/magazine/jpgs/ad6.jpg" width="125px" height="125px" border="0" align="left" alt="ad6"/></li>
</ul>

</div>



<?php if ($this-> countModules ("footer-menu")); ?>
<jdoc:include type="modules" name="footer-menu" />
<footer id="footer">
  <!-- Footer-->
        <div class="wrap">
            <div class="footer-block dhd-icon">

                <div class="footcol1">
                    <h3>Search ISFMagazine.com</h3>
                </div>
                <script type="text/javascript">

                    <!--
                    jQuery(document).ready(function() {
                        jQuery("#footersearchinput").focus(function(){
                            if(jQuery(this).val() == "Search by Name or Keyword") {
                                jQuery(this).val("");
                            }
                        });
                    });
                    //-->
                </script>

                <div class="sitesearch">
                    <form action="http://www.magazines.com/on/demandware.store/Sites-mags-us-Site/default/Search-Show" method="get" id="FooterSearchForm" class="simplesearch">
                        <fieldset>
                            <label>Search</label>
                            <input type="text" name="q" value="Search by Name or Keyword" class="simplesearchinput" id="footersearchinput"/>
                            <button type="submit" value="Go" name="simplesearch">
                                <span>Go</span>
                            </button>
                        </fieldset>
                        <p>
                            <a onclick="_gaq.push(['_trackEvent', 'OutboundClick', 'DHD', 'FooterImg']);" href="http://localhost/magazine/index.php">
                                <img src="templates/magazine/images/ISFlogoclose.jpg" width="105px" height="82px" alt="ISF">

                            </a>
                        <h3>
                            <a href="http://localhost/magazine/index.php">ISF |The World's Innovative Style Famous Magazine</a>
                        </h3>
                        </p>

                </div>

                <div class="footer-block">

                    <ul>

                        <li>
                            <a href="http://localhost/magazine/index.php">Home</a>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <a href="http://localhost/magazine/newtrends">NEW TRENDS</a>
                        </li>
                        <li>
                            <a href="http://localhost/magazine/fashion">FASHION</a>
                        </li>
                        <li>
                            <a href="http://localhost/magazine/news">NEWS</a>
                        </li>
                        <li>
                            <a href="http://localhost/magazine/aboutus">ABOUT US</a>
                        </li>
                        <li>
                            <a href="http://localhost/magazine/entertainmentandmovies">ENTERTAINMENT&amp; MOVIES</a>
                        </li>
                        <li>
                            <a href="http://localhost/magazine/designercentral">DESIGNER CENTRAL </a>
                        </li>

                        <li>
                            <a href="http://localhost/magazine/privatepolicy">PRIVATE</a>
                        </li>
                        <li>
                            <a href="http://localhost/magazine/contact">CONTACT</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-block">

                    <ul>
                        <li>
                            <a href="mailto:dean@deanthedesigner.com">WEBMASTER</a>
                        </li>
                        <li>
                            <a onclick="_gaq.push(['_trackEvent', 'OutboundClick', 'TFAW', 'dhfooter']);" href="https://www.paypal.com/cgi-bin/webscr?cmd=_flow&SESSION=zJ_nGxG9DyXiJWv6bQtq_1gphk8nhgsUM26-D7o0NG6qP79RTvcqmV53rfS&dispatch=5885d80a13c0db1f8e263663d3faee8db02a037e263542f58098410815cf7df7"> DONATIONS  </a>
                        </li>
                        <li>
                            <a href="http://localhost/magazine/index.php">HOME</a>
                        </li>
                        <li>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_flow&SESSION=zJ_nGxG9DyXiJWv6bQtq_1gphk8nhgsUM26-D7o0NG6qP79RTvcqmV53rfS&dispatch=5885d80a13c0db1f8e263663d3faee8db02a037e263542f58098410815cf7df7">PAYPAL</a>
                        </li>
                        <li>
                            <a href="www.victoriasecret.com">VICTORIA SECRET | STORES</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-block">
                    <h3>
                        <a href="http://www.localhost/magazine/index.php">ISF Magazine |&amp; ALL RIGHTS RESERVED 2012-2013</a>
                    </h3>

                    <ul>


                        <li>
                            <a href="mailto:moneymint23@yahoo.com">CONTACT</a>


                        <li>
                            <a href="http://www.facebook.com/dean.anthoney"><img src="templates/magazine/imagesmore/facebook_logo.png" width="30px" height="30px">Facebook</a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com/#/DAnthoney1" width="30px" height="30px"><img src="templates/magazine/imagesmore/Twitter_icon_logo.png" width="30px" height="30px">Twitter</a>
                        </li>

                        <li>
                        <li><a href="http://www.ustream.tv/user/ISF"><img src="templates/magazine/imagesmore/ustreamtv.jpg" width="30px" height="30px">ISF Magazine on UStream TV</a>
                        </li>

                        <!--<li>
                            <a href="/Help/RSS/"><img src="templates/magazine/imagesmore/rss.jpg" width="30px" height="30px">RSS</a>
                        </li>
                    </ul>
                </div>

                <!-- footer block -->
                <div class="footer-block legal">

                    <address>
                        <a href="mailto:moneymint23@yahoo.com"> Contact ISF Magazine </a>
                    </address>

                    <p>
                        ISF Magazine (&reg; or TM) and copyrighted (&copy;) 2011-2013

                        trademarks of ISF Magazine | The World's Famous Magazine Inc.,
                        <a id="_GPLITA_0" title="Powered by Text-Enhance" style="text-decoration:underline" href="#" in_rurl="http://www.textsrv.com/click?v=VVM6MTUxOTA6NTY1OnJlZ2lzdGVyZWQ6ODNmNGQyM2NiMGYxNTlkMWE0NWJmM2Q3MThiODM0ODc6ei0yMS0xMTQ0NDp3d3cuZGFya2hvcnNlLmNvbQ">registered</a>
                        in various categories and countries.  </p>



                </div>





        </div>
           
    </footer>

          <!-- End of Footer-->



</body>
</html>
