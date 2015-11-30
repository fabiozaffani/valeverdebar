<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- mobile meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{$title}</title>

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{$assets}css/style.css" media="screen" />

    <!-- color scheme -->
    <link rel="stylesheet" type="text/css" href="{$assets}css/red.css" media="screen" />

    <!--miscellaneous-->
    <link rel="stylesheet" type="text/css" href="{$assets}css/superfish.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{$assets}css/prettyPhoto.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{$assets}css/font-awesome.css" media="screen"/>

    <!-- revolution slider settings -->
    <link rel="stylesheet" type="text/css" href="{$assets}js/rs-plugin/css/settings.css" media="screen" />

    <!-- setting mobile environment -->
    <link rel="stylesheet" type="text/css" href="{$assets}css/responsive.css" media="screen" />

    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.min.css">
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript" src="{$assets}js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{$assets}js/hoverIntent.js"></script>
    <script type="text/javascript" src="{$assets}js/superfish.js"></script>
    <script type="text/javascript" src="{$assets}js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="{$assets}js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="{$assets}js/jquery.mobilemenu.js"></script>
    <script type="text/javascript" src="{$assets}js/jquery.contact.js"></script>
    <script type="text/javascript" src="{$assets}js/jquery.preloadify.min.js"></script>
    <script type="text/javascript" src="{$assets}js/jquery.isotope.min.js"></script>

    <!-- jQuery Revolution Slider -->
    <script type="text/javascript" src="{$assets}js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="{$assets}js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="{$assets}js/custom.js"></script>

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
<div id="wrapper">
    <header id="header">
        <div class="centered-wrapper">
            <div class="one-third">
                <div class="logo"><a href="{$siteName}"><img src="{$assets}images/logo.png" alt="" /></a></div>
            </div><!--end one-third-->

            <div class="two-third column-last">
                <nav id="navigation">
                    <ul id="mainnav">
                        <li>
                            <a href="{$siteName}" {if $current eq 'home'} "class='current'" {else} "" {/if}><span>INÍCIO</span></a>
                        </li>
                        <li>
                            <a href="{$siteName}servicos" {if $current eq 'services'} "class='current'" {else} "" {/if}><span>SERVIÇOS</span></a>
                            <ul>
                                <!-- <li><a href="{$siteName}servicos/buffet">Buffet</a></li> -->
								<li><a href="{$siteName}servicos/locacao-casamento">Locação Casamento</a></li>
								<li><a href="{$siteName}servicos/locacao-festa">Locação Festa</a></li>
							</ul>
						</li>
                        <li>
                            <a href="{$siteName}album" {if $current eq 'album'} "class='current'" {else} "" {/if}><span>SOBRE NÓS</span></a>
                        </li>
                        <li>
                            <a href="{$siteName}localizacao" {if $current eq 'localizacao'} "class='current'" {else} "" {/if}><span>LOCALIZAÇÃO</span></a>
                        </li>
                        <li>
                            <a href="{$siteName}contato" {if $current eq 'contato'} "class='current'" {else} "" {/if}><span>CONTATO</span></a>
                        </li>
                    </ul>
                </nav><!--end navigation-->
            </div><!--end two-third-->
            <div class="clear"></div>
        </div><!--end centered-wrapper-->
    </header>
