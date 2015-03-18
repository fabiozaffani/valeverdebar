<?php
if(!isset($access)) {
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- mobile meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php echo $title; ?></title>

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <!-- color scheme -->
    <link rel="stylesheet" type="text/css" href="color-schemes/red/red.css" media="screen" />

    <!--miscellaneous-->
    <link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/audioplayer.css" media="screen" />

    <!-- revolution slider settings -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- setting mobile environment -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen" />

    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css">
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="js/jquery.contact.js"></script>
    <script type="text/javascript" src="js/jquery.preloadify.min.js"></script>
    <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>

    <!-- jQuery Revolution Slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="js/custom.js"></script>

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

</head>

<!--very important: setting a class for homepage -->
<body>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-5962880-34']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<!-- setting a fullscreen image as background:
<img id="bg" src="images/apple.jpg" alt="apple-background" />
-->

<div id="wrapper">
    <header id="header">
        <div class="centered-wrapper">
            <div class="one-third">
                <div class="logo"><a href="<?php echo $siteName; ?>"><img src="images/logo.png" alt="" /></a></div>
            </div><!--end one-third-->

            <div class="two-third column-last">
                <nav id="navigation">
                    <ul id="mainnav">
                        <li>
                            <a href="<?php echo $siteName; ?>" <?php echo $current == 'home' ? "class='current'" : ""; ?>><span>INÍCIO</span></a>
                        </li>
                        <li>
                            <a href="<?php echo $siteName; ?>album" <?php echo $current == 'album' ? "class='current'" : ""; ?>><span>QUEM SOMOS</span></a>
                        </li>
                        <li>
                            <a href="<?php echo $siteName; ?>localizacao" <?php echo $current == 'localizacao' ? "class='current'" : ""; ?>><span>LOCALIZAÇÃO</span></a>
                        </li>
                        <li>
                            <a href="<?php echo $siteName; ?>contato" <?php echo $current == 'contato' ? "class='current'" : ""; ?>><span>CONTATO</span></a>
                        </li>
                    </ul>
                </nav><!--end navigation-->
            </div><!--end two-third-->
            <div class="clear"></div>
        </div><!--end centered-wrapper-->
    </header>