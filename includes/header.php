<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php if($current_page === 'home') { print 'Kevin Gimbel - Web Development';} else { print ''.$page_title.' - Kevin Gimbel'; } ?>
    </title>
    <meta charset="UTF-8">
    <meta type="keywords" content="Kevin,Gimbel,Webdesign,Web,Development">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/pentizr.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/ATRIJUNGE_NEU_JAP_black_sq.jpg">
  </head>
  <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40822200-1', 'kevingimbel.de');
  ga('send', 'pageview');

</script>
    
      <header class="site-header">
        <div class="site-header--inner">
          <a href="./"><img src="assets/img/logo_ATRIJUNGE_JAP.png" alt="ATARIJUNGE" title="Home" class="site-header--logo" /></a>
          <nav class="site-menu">
            <a href="./" class="menu-item<?php if ($current_page == "home") { ?> active <?php } ?>">Home</a>
            <a href="./about" class="menu-item<?php if ($current_page == "about") { ?> active <?php } ?>">About</a>
            <a href="./work" class="menu-item<?php if ($current_page == "work") { ?> active <?php } ?>">Work</a>
            <a href="./projects" class="menu-item<?php if ($current_page == "projects") { ?> active <?php } ?>">Projects</a>
            <a href="./imprint" class="menu-item<?php if ($current_page == "imprint") { ?> active <?php } ?>">Imprint</a>
          </nav> <!-- site-menu  -->
        </div> <!-- site-header--inner -->
      </header><!-- site-header -->

    <div class="wrapper"> 