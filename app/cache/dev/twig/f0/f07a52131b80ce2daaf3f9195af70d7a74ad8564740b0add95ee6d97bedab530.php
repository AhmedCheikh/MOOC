<?php

/* MoocMoocBundle::layout.html.twig */
class __TwigTemplate_9329af20ad8d687953511edabbb1381e8edf55db62fddee224875e6fa44ec3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Home</title>
\t\t<link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/favicon.ico"), "html", null, true);
        echo "\">
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/favicon.ico"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/list.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/touchTouch.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/camera.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/component.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/style.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/form.css"), "html", null, true);
        echo "\">
 
                <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/TMForm.js"), "html", null, true);
        echo "\">
\t\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/jquery-migrate-1.1.1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/main.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/m.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/camera.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/snap.svg-min.js"), "html", null, true);
        echo "\"></script>
                
             
                
                
                
\t\t<!--[if (gt IE 9)|!(IE)]><!-->
\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/js/jquery.mobile.customized.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--<![endif]-->
\t\t<script>
\t\t\$(document).ready(function(){
\t\t\tjQuery('#camera_wrap').camera({
\t\t\tloader: false,
\t\t\tpagination: true ,
\t\t\tminHeight: '394',
\t\t\tthumbnails: false,
\t\t\theight: '40.1875%',
\t\t\tcaption: false,
\t\t\tnavigation: false,
\t\t\tfx: 'mosaic'
\t\t\t});
\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t})
\t\t</script>
\t\t<!--[if lt IE 8]>
\t\t<div style=' clear: both; text-align:center; position: relative;'>
\t\t\t<a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\">
\t\t\t\t<img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" />
\t\t\t</a>
\t\t</div>
\t\t<![endif]-->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"js/html5shiv.js\"></script>
\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"css/ie.css\">
\t\t<![endif]-->
\t\t<!--[if lt IE 10]>
\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"css/ie1.css\">
\t\t<![endif]-->
\t</head>
\t<body class=\"page1\">
<!--==============================header=================================-->
\t\t<header>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<h1><a href=\"index.html\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/logo.png"), "html", null, true);
        echo "\" alt=\"Boo House\"></a></h1>
\t\t\t\t\t<div class=\"menu_block\">
\t\t\t\t\t\t<nav id=\"bt-menu\" class=\"bt-menu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"bt-menu-trigger\"><span>Menu</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"current bt-icon\"><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_homepage");
        echo "\">Acceuil</a></li>
\t\t\t\t\t\t\t\t<li class=\"bt-icon\"><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_about");
        echo "\">à propos</a></li>
\t\t\t\t\t\t\t\t<li class=\"bt-icon\"><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_listecours");
        echo "\">Liste cours</a></li>
\t\t\t\t\t\t\t\t<li class=\"bt-icon\"><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_listeformateur");
        echo "\">formateur</a></li>
\t\t\t\t\t\t\t\t<li class=\"bt-icon\"><a href=\"index-4.html\">organisme</a></li>
\t\t\t\t\t\t\t\t<li class=\"bt-icon\"><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_contact");
        echo "\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
        <!--==============================header=================================-->                                
         ";
        // line 88
        $this->displayBlock('container', $context, $blocks);
        echo "                            
        <!--==============================footer=================================-->
\t\t<footer>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_12\">
\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-google-plus\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t<div class=\"copy\">
\t\t\t\t\t\t &copy; 2016 | <a href=\"#\">Privacy Policy</a> <br> Website designed by <a href=\"\" rel=\"nofollow\">SmartDev Esprit</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t \$(\".bt-menu-trigger\").toggle(
\t\t\t\tfunction(){
\t\t\t\t\$('.bt-menu').addClass('bt-menu-open');
\t\t\t\t},
\t\t\t\tfunction(){
\t\t\t\t\$('.bt-menu').removeClass('bt-menu-open');
\t\t\t\t}
\t\t\t);
\t\t\t});
\t\t\t(function() {
\t\t\tfunction init() {
\t\t\t\tvar speed = 250,
\t\t\t\teasing = mina.easeinout;
\t\t\t\t[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
\t\t\t\tvar s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
\t\t\t\t\tpathConfig = {
\t\t\t\t\tfrom : path.attr( 'd' ),
\t\t\t\t\tto : el.getAttribute( 'data-path-hover' )
\t\t\t\t\t};
\t\t\t\tel.addEventListener( 'mouseenter', function() {
\t\t\t\t\tpath.animate( { 'path' : pathConfig.to }, speed, easing );
\t\t\t\t} );
\t\t\t\tel.addEventListener( 'mouseleave', function() {
\t\t\t\t\tpath.animate( { 'path' : pathConfig.from }, speed, easing );
\t\t\t\t} );
\t\t\t\t} );
\t\t\t}
\t\t\tinit();
\t\t\t})();
\t\t</script>
\t</body>
</html>";
    }

    public function block_container($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 88,  171 => 78,  166 => 76,  162 => 75,  158 => 74,  154 => 73,  146 => 68,  106 => 31,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/* 		<title>Home</title>*/
/* 		<link rel="icon" href="{{asset('bundles/moocmooc/images/favicon.ico')}}">*/
/* 		<link rel="shortcut icon" href="{{asset('bundles/moocmooc/images/favicon.ico')}}">*/
/*                 <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/list.css')}}">*/
/*                 <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/touchTouch.css')}}">*/
/* 		<link rel="stylesheet" href="{{asset('bundles/moocmooc/css/camera.css')}}">*/
/* 		<link rel="stylesheet" href="{{asset('bundles/moocmooc/css/component.css')}}">*/
/* 		<link rel="stylesheet" href="{{asset('bundles/moocmooc/css/style.css')}}">*/
/*                 <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/form.css')}}">*/
/*  */
/*                 <link rel="stylesheet" href="{{asset('bundles/moocmooc/js/TMForm.js')}}">*/
/* 		<script src="{{asset('bundles/moocmooc/js/jquery.js')}}"></script>*/
/* 		<script src="{{asset('bundles/moocmooc/js/jquery-migrate-1.1.1.js')}}"></script>*/
/* 		<script src="{{asset('bundles/moocmooc/js/jquery.equalheights.js')}}"></script>*/
/*                 <script src="{{asset('bundles/moocmooc/js/main.js')}}"></script>*/
/* 		<script src="{{asset('bundles/moocmooc/js/jquery.ui.totop.js')}}"></script>*/
/* 		<script src="{{asset('bundles/moocmooc/js/jquery.easing.1.3.js')}}"></script>*/
/*                 <script src="{{asset('bundles/moocmooc/js/m.js')}}"></script>*/
/* 		<script src="{{asset('bundles/moocmooc/js/camera.js')}}"></script>*/
/* 		<script src="{{asset('bundles/moocmooc/js/snap.svg-min.js')}}"></script>*/
/*                 */
/*              */
/*                 */
/*                 */
/*                 */
/* 		<!--[if (gt IE 9)|!(IE)]><!-->*/
/* 		<script src="{{asset('bundles/moocmooc/js/jquery.mobile.customized.min.js')}}"></script>*/
/* 		<!--<![endif]-->*/
/* 		<script>*/
/* 		$(document).ready(function(){*/
/* 			jQuery('#camera_wrap').camera({*/
/* 			loader: false,*/
/* 			pagination: true ,*/
/* 			minHeight: '394',*/
/* 			thumbnails: false,*/
/* 			height: '40.1875%',*/
/* 			caption: false,*/
/* 			navigation: false,*/
/* 			fx: 'mosaic'*/
/* 			});*/
/* 			$().UItoTop({ easingType: 'easeOutQuart' });*/
/* 		})*/
/* 		</script>*/
/* 		<!--[if lt IE 8]>*/
/* 		<div style=' clear: both; text-align:center; position: relative;'>*/
/* 			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">*/
/* 				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />*/
/* 			</a>*/
/* 		</div>*/
/* 		<![endif]-->*/
/* 		<!--[if lt IE 9]>*/
/* 		<script src="js/html5shiv.js"></script>*/
/* 		<link rel="stylesheet" media="screen" href="css/ie.css">*/
/* 		<![endif]-->*/
/* 		<!--[if lt IE 10]>*/
/* 		<link rel="stylesheet" media="screen" href="css/ie1.css">*/
/* 		<![endif]-->*/
/* 	</head>*/
/* 	<body class="page1">*/
/* <!--==============================header=================================-->*/
/* 		<header>*/
/* 			<div class="container_12">*/
/* 				<div class="grid_12">*/
/* 					<h1><a href="index.html"><img src="{{asset('bundles/moocmooc/images/logo.png')}}" alt="Boo House"></a></h1>*/
/* 					<div class="menu_block">*/
/* 						<nav id="bt-menu" class="bt-menu">*/
/* 							<a href="#" class="bt-menu-trigger"><span>Menu</span></a>*/
/* 							<ul>*/
/* 								<li class="current bt-icon"><a href="{{path('mooc_mooc_homepage')}}">Acceuil</a></li>*/
/* 								<li class="bt-icon"><a href="{{path('mooc_mooc_about')}}">à propos</a></li>*/
/* 								<li class="bt-icon"><a href="{{path('mooc_mooc_listecours')}}">Liste cours</a></li>*/
/* 								<li class="bt-icon"><a href="{{path('mooc_mooc_listeformateur')}}">formateur</a></li>*/
/* 								<li class="bt-icon"><a href="index-4.html">organisme</a></li>*/
/* 								<li class="bt-icon"><a href="{{path('mooc_mooc_contact')}}">contact</a></li>*/
/* 							</ul>*/
/* 						</nav>*/
/* 						<div class="clear"></div>*/
/* 					</div>*/
/* 					<div class="clear"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</header>*/
/*         <!--==============================header=================================-->                                */
/*          {% block container %} {% endblock %}                            */
/*         <!--==============================footer=================================-->*/
/* 		<footer>*/
/* 			<div class="container_12">*/
/* 				<div class="grid_12">*/
/* 					<div class="socials">*/
/* 						<a href="#" class="fa fa-facebook"></a>*/
/* 						<a href="#" class="fa fa-twitter"></a>*/
/* 						<a href="#" class="fa fa-google-plus"></a>*/
/* 					</div>*/
/* 					<div class="clear"></div>*/
/* 					<div class="copy">*/
/* 						 &copy; 2016 | <a href="#">Privacy Policy</a> <br> Website designed by <a href="" rel="nofollow">SmartDev Esprit</a>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</footer>*/
/* 		<script>*/
/* 			$(document).ready(function(){*/
/* 			 $(".bt-menu-trigger").toggle(*/
/* 				function(){*/
/* 				$('.bt-menu').addClass('bt-menu-open');*/
/* 				},*/
/* 				function(){*/
/* 				$('.bt-menu').removeClass('bt-menu-open');*/
/* 				}*/
/* 			);*/
/* 			});*/
/* 			(function() {*/
/* 			function init() {*/
/* 				var speed = 250,*/
/* 				easing = mina.easeinout;*/
/* 				[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {*/
/* 				var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),*/
/* 					pathConfig = {*/
/* 					from : path.attr( 'd' ),*/
/* 					to : el.getAttribute( 'data-path-hover' )*/
/* 					};*/
/* 				el.addEventListener( 'mouseenter', function() {*/
/* 					path.animate( { 'path' : pathConfig.to }, speed, easing );*/
/* 				} );*/
/* 				el.addEventListener( 'mouseleave', function() {*/
/* 					path.animate( { 'path' : pathConfig.from }, speed, easing );*/
/* 				} );*/
/* 				} );*/
/* 			}*/
/* 			init();*/
/* 			})();*/
/* 		</script>*/
/* 	</body>*/
/* </html>*/
