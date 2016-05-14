<?php

/* MoocMoocBundle:Apprenant:EspaceApprenant.html.twig */
class __TwigTemplate_c63d0b96a48e08d4a47ac0c330d442e9b37b9869bab4d407cc9e885fd5312712 extends Twig_Template
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
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('sidebar', $context, $blocks);
        // line 144
        echo "    
";
        // line 145
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "
</section>
<!-- container section end -->

";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 178
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
                        <form class=\"navbar-form\" method=\"POST\" action=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_chercher_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                            <input class=\"form-control\" name=\"Chercher\" placeholder=\"Chercher des cours\" type=\"text\">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class=\"top-nav notification-row\">                
                <!-- notificatoin dropdown start-->
                <ul class=\"nav pull-right top-menu\">
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\"> 
                                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(("uploads/uploads/" . $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "avatar", array()))), "resize", array(0 => 35, 1 => 35), "method"), "html", null, true);
        echo "\" />
                            </span>
                            <span class=\"username\">";
        // line 80
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
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\"><i class=\"icon_profile\"></i> Mon Profile</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\"><i class=\"icon_book_alt\"></i> Mes Cours</a>
                            </li>
                            
                            <li>
                                <a href=\"";
        // line 93
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

    // line 107
    public function block_sidebar($context, array $blocks = array())
    {
        // line 108
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li>                     
                      <a class=\"\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                 <li>                     
                      <a class=\"\" href=\"";
        // line 129
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

    // line 145
    public function block_body($context, array $blocks = array())
    {
        // line 146
        echo "    

";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "    
    <!-- javascripts -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <!-- map -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/gdp-data.js"), "html", null, true);
        echo "\"></script>\t


  <script>
      //knob
      \$(\".knob\").knob();
\t  
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
        return array (  340 => 168,  336 => 167,  332 => 166,  327 => 164,  322 => 162,  317 => 160,  313 => 159,  308 => 157,  304 => 156,  300 => 154,  297 => 153,  291 => 146,  288 => 145,  269 => 129,  258 => 121,  248 => 114,  240 => 108,  237 => 107,  220 => 93,  213 => 89,  207 => 86,  196 => 80,  191 => 78,  173 => 63,  155 => 47,  152 => 46,  147 => 40,  144 => 39,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  111 => 25,  105 => 22,  101 => 21,  95 => 18,  91 => 17,  86 => 15,  81 => 13,  77 => 11,  74 => 10,  69 => 178,  67 => 153,  61 => 149,  59 => 145,  56 => 144,  54 => 107,  51 => 106,  49 => 46,  43 => 42,  41 => 39,  39 => 10,  34 => 8,  25 => 1,);
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
/*                         <form class="navbar-form" method="POST" action="{{path('mooc_chercher_cours_apprenant', {'login': apprenant.login})}}">*/
/*                             <input class="form-control" name="Chercher" placeholder="Chercher des cours" type="text">*/
/*                         </form>*/
/*                     </li>                    */
/*                 </ul>*/
/*                 <!--  search form end -->                */
/*             </div>*/
/* */
/*             <div class="top-nav notification-row">                */
/*                 <!-- notificatoin dropdown start-->*/
/*                 <ul class="nav pull-right top-menu">*/
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
/*                                 <a href="{{path('mooc_accueil_apprenant', {'login': apprenant.login})}}"><i class="icon_profile"></i> Mon Profile</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('mooc_cours_apprenant', {'login': apprenant.login})}}"><i class="icon_book_alt"></i> Mes Cours</a>*/
/*                             </li>*/
/*                             */
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
/*   </script>*/
/*   */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
