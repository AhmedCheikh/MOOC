<?php

/* MoocMoocBundle:Apprenant:EspaceApprenant.html.twig */
class __TwigTemplate_800611001103edc8dc1cc67a4a5db9b7a83aab2caf44463737da3d20c16c6ba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'Header' => array($this, 'block_Header'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Creative - Bootstrap 3 Responsive Admin Template\">
    <meta name=\"author\" content=\"GeeksLabs\">
    <meta name=\"keyword\" content=\"Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/img/favicon.png"), "html", null, true);
        echo "\">
    
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        $this->displayBlock('title', $context, $blocks);
        // line 42
        echo "</head>
    <body>
  <!-- container section start -->
  <section id=\"container\" class=\"\">
";
        // line 46
        $this->displayBlock('Header', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('sidebar', $context, $blocks);
        // line 196
        echo "    
";
        // line 197
        $this->displayBlock('body', $context, $blocks);
        // line 201
        echo "
</section>
<!-- container section end -->

";
        // line 205
        $this->displayBlock('javascripts', $context, $blocks);
        // line 249
        echo "</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    
    <!-- Bootstrap CSS -->    
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap theme -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- font icon -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Custom styles -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
    
    <!-- map -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
   <!-- <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/jquery-ui-1.10.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/line-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/widgets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/xcharts.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
      <script src=\"js/respond.min.js\"></script>
      <script src=\"js/lte-ie7.js\"></script>
    <![endif]-->
        ";
    }

    // line 39
    public function block_title($context, array $blocks = array())
    {
        // line 40
        echo "    <title>MOOC</title>
";
    }

    // line 46
    public function block_Header($context, array $blocks = array())
    {
        // line 47
        echo "    

      <!--header start-->
      <header class=\"header dark-bg\">
            <div class=\"toggle-nav\">
                <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"><i class=\"icon_menu\"></i></div>
            </div>

            <!--logo start-->
            <a href=\"index.html\" class=\"logo\">Bienvenue a <span class=\"lite\">Mooc</span></a>
            <!--logo end-->

            <div class=\"nav search-row\" id=\"top_menu\">
                <!--  search form start -->
                <ul class=\"nav top-menu\">                    
                    <li>
                        <form class=\"navbar-form\">
                            <input class=\"form-control\" placeholder=\"Chercher des cours\" type=\"text\">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class=\"top-nav notification-row\">                
                <!-- notificatoin dropdown start-->
                <ul class=\"nav pull-right top-menu\">

                    <!-- alert notification start-->
                    <li id=\"alert_notificatoin_bar\" class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">

                            <i class=\"icon-bell-l\"></i>
                            <span class=\"badge bg-important\">4</span>
                        </a>
                        <ul class=\"dropdown-menu extended notification\">
                            <div class=\"notify-arrow notify-arrow-blue\"></div>
                            <li>
                                <p class=\"blue\">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-primary\"><i class=\"icon_profile\"></i></span> 
                                    Friend Request
                                    <span class=\"small italic pull-right\">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-warning\"><i class=\"icon_pin\"></i></span>  
                                    John location.
                                    <span class=\"small italic pull-right\">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-danger\"><i class=\"icon_book_alt\"></i></span> 
                                    Project 3 Completed.
                                    <span class=\"small italic pull-right\">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-success\"><i class=\"icon_like\"></i></span> 
                                    Mick appreciated your work.
                                    <span class=\"small italic pull-right\"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href=\"#\">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\"> 
                                <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(("uploads/uploads/" . $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "avatar", array()))), "resize", array(0 => 35, 1 => 35), "method"), "html", null, true);
        echo "\" />
                            </span>
                            <span class=\"username\">";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo "</span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li class=\"eborder-top\">
                                <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\"><i class=\"icon_profile\"></i> My Profile</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon_mail_alt\"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon_clock_alt\"></i> Timeline</a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"icon_chat_alt\"></i> Chats</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("mooc_log_out_apprenant");
        echo "\"><i class=\"icon_key_alt\"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->
    

";
    }

    // line 159
    public function block_sidebar($context, array $blocks = array())
    {
        // line 160
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li>                     
                      <a class=\"\" href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                 <li>                     
                      <a class=\"\" href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_chercher_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_search\"></i>
                          <span>Chercher Cours</span>
                          
                      </a>
                                         
                  </li>
                           
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
 
";
    }

    // line 197
    public function block_body($context, array $blocks = array())
    {
        // line 198
        echo "    

";
    }

    // line 205
    public function block_javascripts($context, array $blocks = array())
    {
        // line 206
        echo "    
    <!-- javascripts -->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <!-- map -->
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/gdp-data.js"), "html", null, true);
        echo "\"></script>\t


  <script>
      //knob
      \$(\".knob\").knob();
\t  
\t  
\t  /* ---------- Map ---------- */
\t\$(function(){
\t  \$('#map').vectorMap({
\t    map: 'world_mill_en',
\t    series: {
\t      regions: [{
\t        values: gdpData,
\t        scale: ['#000', '#000'],
\t        normalizeFunction: 'polynomial'
\t      }]
\t    },
\t\tbackgroundColor: '#eef3f7',
\t    onLabelShow: function(e, el, code){
\t      el.html(el.html()+' (GDP - '+gdpData[code]+')');
\t    }
\t  });
\t});

  </script>
  
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 220,  382 => 219,  378 => 218,  373 => 216,  368 => 214,  363 => 212,  359 => 211,  354 => 209,  350 => 208,  346 => 206,  343 => 205,  337 => 198,  334 => 197,  315 => 181,  304 => 173,  294 => 166,  286 => 160,  283 => 159,  266 => 145,  251 => 133,  240 => 127,  235 => 125,  155 => 47,  152 => 46,  147 => 40,  144 => 39,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  111 => 25,  105 => 22,  101 => 21,  95 => 18,  91 => 17,  86 => 15,  81 => 13,  77 => 11,  74 => 10,  69 => 249,  67 => 205,  61 => 201,  59 => 197,  56 => 196,  54 => 159,  51 => 158,  49 => 46,  43 => 42,  41 => 39,  39 => 10,  34 => 8,  25 => 1,);
    }
}
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">*/
/*     <meta name="author" content="GeeksLabs">*/
/*     <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">*/
/*     <link rel="shortcut icon" href="{{asset('bundles/moocmooc/ApprenantAssets/img/favicon.png')}}">*/
/*     */
/* {% block stylesheets %}*/
/*     */
/*     <!-- Bootstrap CSS -->    */
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- bootstrap theme -->*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/*     <!-- font icon -->*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/elegant-icons-style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     */
/*     <!-- Custom styles -->*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/style-responsive.css')}}" rel="stylesheet">	*/
/*     */
/*     <!-- map -->*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">*/
/*     */
/*    <!-- <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/font-awesome.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/line-icons.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/widgets.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/xcharts.min.css')}}" rel="stylesheet"> -->*/
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="js/html5shiv.js"></script>*/
/*       <script src="js/respond.min.js"></script>*/
/*       <script src="js/lte-ie7.js"></script>*/
/*     <![endif]-->*/
/*         {% endblock %}*/
/* {% block title %}*/
/*     <title>MOOC</title>*/
/* {% endblock %}*/
/* </head>*/
/*     <body>*/
/*   <!-- container section start -->*/
/*   <section id="container" class="">*/
/* {% block Header %}*/
/*     */
/* */
/*       <!--header start-->*/
/*       <header class="header dark-bg">*/
/*             <div class="toggle-nav">*/
/*                 <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>*/
/*             </div>*/
/* */
/*             <!--logo start-->*/
/*             <a href="index.html" class="logo">Bienvenue a <span class="lite">Mooc</span></a>*/
/*             <!--logo end-->*/
/* */
/*             <div class="nav search-row" id="top_menu">*/
/*                 <!--  search form start -->*/
/*                 <ul class="nav top-menu">                    */
/*                     <li>*/
/*                         <form class="navbar-form">*/
/*                             <input class="form-control" placeholder="Chercher des cours" type="text">*/
/*                         </form>*/
/*                     </li>                    */
/*                 </ul>*/
/*                 <!--  search form end -->                */
/*             </div>*/
/* */
/*             <div class="top-nav notification-row">                */
/*                 <!-- notificatoin dropdown start-->*/
/*                 <ul class="nav pull-right top-menu">*/
/* */
/*                     <!-- alert notification start-->*/
/*                     <li id="alert_notificatoin_bar" class="dropdown">*/
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/* */
/*                             <i class="icon-bell-l"></i>*/
/*                             <span class="badge bg-important">4</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu extended notification">*/
/*                             <div class="notify-arrow notify-arrow-blue"></div>*/
/*                             <li>*/
/*                                 <p class="blue">You have 4 new notifications</p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="label label-primary"><i class="icon_profile"></i></span> */
/*                                     Friend Request*/
/*                                     <span class="small italic pull-right">5 mins</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="label label-warning"><i class="icon_pin"></i></span>  */
/*                                     John location.*/
/*                                     <span class="small italic pull-right">50 mins</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="label label-danger"><i class="icon_book_alt"></i></span> */
/*                                     Project 3 Completed.*/
/*                                     <span class="small italic pull-right">1 hr</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <span class="label label-success"><i class="icon_like"></i></span> */
/*                                     Mick appreciated your work.*/
/*                                     <span class="small italic pull-right"> Today</span>*/
/*                                 </a>*/
/*                             </li>                            */
/*                             <li>*/
/*                                 <a href="#">See all notifications</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- alert notification end-->*/
/*                     <!-- user login dropdown start-->*/
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                             <span class="profile-ava"> */
/*                                 <img src="{{ image('uploads/uploads/'~apprenant.avatar).resize(35,35) }}" />*/
/*                             </span>*/
/*                             <span class="username">{{apprenant.prenom}} {{apprenant.nom}}</span>*/
/*                             <b class="caret"></b>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu extended logout">*/
/*                             <div class="log-arrow-up"></div>*/
/*                             <li class="eborder-top">*/
/*                                 <a href="{{path('mooc_accueil_apprenant', {'login': apprenant.login})}}"><i class="icon_profile"></i> My Profile</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#"><i class="icon_clock_alt"></i> Timeline</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#"><i class="icon_chat_alt"></i> Chats</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('mooc_log_out_apprenant')}}"><i class="icon_key_alt"></i> Log Out</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- user login dropdown end -->*/
/*                 </ul>*/
/*                 <!-- notificatoin dropdown end-->*/
/*             </div>*/
/*       </header>      */
/*       <!--header end-->*/
/*     */
/* */
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <!--sidebar start-->*/
/*       <aside>*/
/*           <div id="sidebar"  class="nav-collapse ">*/
/*               <!-- sidebar menu start-->*/
/*               <ul class="sidebar-menu">                */
/*                   <li>*/
/*                       <a class="" href="{{path('mooc_accueil_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="fa fa-user-md"></i>*/
/*                           <span>Mon Profile</span>*/
/*                       </a>*/
/*                   </li>*/
/* */
/*                   <li>                     */
/*                       <a class="" href="{{path('mooc_cours_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="icon_book_alt"></i>*/
/*                           <span>Mes Cours</span>*/
/*                           */
/*                       </a>*/
/*                                          */
/*                   </li>*/
/*                  <li>                     */
/*                       <a class="" href="{{path('mooc_chercher_cours_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="icon_search"></i>*/
/*                           <span>Chercher Cours</span>*/
/*                           */
/*                       </a>*/
/*                                          */
/*                   </li>*/
/*                            */
/*               </ul>*/
/*               <!-- sidebar menu end-->*/
/*           </div>*/
/*       </aside>*/
/*       <!--sidebar end-->*/
/*  */
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     */
/* */
/* {% endblock %}*/
/* */
/* </section>*/
/* <!-- container section end -->*/
/* */
/* {% block javascripts %}*/
/*     */
/*     <!-- javascripts -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js')}}"></script>*/
/*     <!-- nice scroll -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js')}}"></script>*/
/*     <!-- jquery knob -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.knob.js')}}"></script>*/
/*     <!--custome script for all page-->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/scripts.js')}}"></script>*/
/*     <!-- map -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/gdp-data.js')}}"></script>	*/
/* */
/* */
/*   <script>*/
/*       //knob*/
/*       $(".knob").knob();*/
/* 	  */
/* 	  */
/* 	  /* ---------- Map ---------- *//* */
/* 	$(function(){*/
/* 	  $('#map').vectorMap({*/
/* 	    map: 'world_mill_en',*/
/* 	    series: {*/
/* 	      regions: [{*/
/* 	        values: gdpData,*/
/* 	        scale: ['#000', '#000'],*/
/* 	        normalizeFunction: 'polynomial'*/
/* 	      }]*/
/* 	    },*/
/* 		backgroundColor: '#eef3f7',*/
/* 	    onLabelShow: function(e, el, code){*/
/* 	      el.html(el.html()+' (GDP - '+gdpData[code]+')');*/
/* 	    }*/
/* 	  });*/
/* 	});*/
/* */
/*   </script>*/
/*   */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
