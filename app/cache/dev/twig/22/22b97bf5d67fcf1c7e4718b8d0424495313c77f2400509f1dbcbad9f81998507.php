<?php

/* MoocMoocBundle:Apprenant:EspaceApprenant.html.twig */
class __TwigTemplate_726220c3f943b072c0e5786f51c47a4805f407713dfc3d2308ca60bfeb74adbe extends Twig_Template
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
        // line 31
        $this->displayBlock('title', $context, $blocks);
        // line 34
        echo "</head>
    <body>
  <!-- container section start -->
  <section id=\"container\" class=\"\">
";
        // line 38
        $this->displayBlock('Header', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('sidebar', $context, $blocks);
        // line 136
        echo "    
";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 142
        echo "
</section>
<!-- container section end -->

";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 168
        echo "</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    <style>
        .imge{
             margin-left: 250px;
            
        }
    </style>
    <!-- Bootstrap CSS -->    
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap theme -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- font icon -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Custom styles -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
    

        ";
    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        // line 32
        echo "    <title>MOOC</title>
";
    }

    // line 38
    public function block_Header($context, array $blocks = array())
    {
        // line 39
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
        // line 55
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
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(("uploads/uploads/" . $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "avatar", array()))), "resize", array(0 => 35, 1 => 35), "method"), "html", null, true);
        echo "\" />
                            </span>
                            <span class=\"username\">";
        // line 72
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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\"><i class=\"icon_profile\"></i> Mon Profile</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\"><i class=\"icon_book_alt\"></i> Mes Cours</a>
                            </li>
                            
                            <li>
                                <a href=\"";
        // line 85
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

    // line 99
    public function block_sidebar($context, array $blocks = array())
    {
        // line 100
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li>                     
                      <a class=\"\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                 <li>                     
                      <a class=\"\" href=\"";
        // line 121
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

    // line 137
    public function block_body($context, array $blocks = array())
    {
        // line 138
        echo "        
 
    <img class=\"imge\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image("bundles/moocmooc/ApprenantAssets/img/Capture.png"), "resize", array(0 => 1000, 1 => 700), "method"), "html", null, true);
        echo "\" />
";
    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        // line 147
        echo "    
    <!-- javascripts -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
\t


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
        return array (  305 => 157,  300 => 155,  295 => 153,  291 => 152,  286 => 150,  282 => 149,  278 => 147,  275 => 146,  269 => 140,  265 => 138,  262 => 137,  243 => 121,  232 => 113,  222 => 106,  214 => 100,  211 => 99,  194 => 85,  187 => 81,  181 => 78,  170 => 72,  165 => 70,  147 => 55,  129 => 39,  126 => 38,  121 => 32,  118 => 31,  110 => 27,  106 => 26,  100 => 23,  96 => 22,  91 => 20,  86 => 18,  77 => 11,  74 => 10,  69 => 168,  67 => 146,  61 => 142,  59 => 137,  56 => 136,  54 => 99,  51 => 98,  49 => 38,  43 => 34,  41 => 31,  39 => 10,  34 => 8,  25 => 1,);
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
/*     <style>*/
/*         .imge{*/
/*              margin-left: 250px;*/
/*             */
/*         }*/
/*     </style>*/
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
/* */
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
/*         */
/*  */
/*     <img class="imge" src="{{ image('bundles/moocmooc/ApprenantAssets/img/Capture.png').resize(1000,700) }}" />*/
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
/* 	*/
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
