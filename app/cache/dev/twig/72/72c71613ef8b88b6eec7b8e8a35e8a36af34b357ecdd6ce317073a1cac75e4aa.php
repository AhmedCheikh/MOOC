<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_6e43dcb13c405272da1a87829e18aa5015153070b4b859269a7d741b65f0a6ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo "\">
    <div class=\"wrapper\">

    ";
        // line 36
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 86
        echo "    

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                
                ";
        // line 93
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 133
        echo "        </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 142
        $this->displayBlock('page_title', $context, $blocks);
        // line 143
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 145
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 148
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 152
        $this->displayBlock('page_content', $context, $blocks);
        // line 153
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 158
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 166
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 176
        echo "
";
        // line 178
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 180
        echo "</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Administrateur";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
    }

    // line 36
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        // line 37
        echo "        <header class=\"main-header\">
            ";
        // line 38
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 44
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                </a>
                
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                          
                            <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/avatar/admin.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <span class=\"hidden-xs\">Administrateur</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/img/avatar/admin.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      Administrateur
                      <small>MOOC</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_log_out_admin");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
                        </ul>
                    </div>
               
            </nav>
        </header>
    ";
    }

    // line 38
    public function block_avanzu_logo($context, array $blocks = array())
    {
        // line 39
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 41
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
    }

    // line 93
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 94
        echo "                    ";
        // line 99
        echo "               
                

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li>
              <a href='";
        // line 106
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_dashboard");
        echo "'>
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href='";
        // line 111
        echo $this->env->getExtension('routing')->getPath("charts");
        echo "'>
                <i class=\"fa fa-pie-chart\"></i>
                <span>Statistiques</span>
              </a>
            </li>
            <li>
                <a href='";
        // line 117
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "'>
                    <i class=\"fa fa-table\"></i> <span>Organismes</span> <small class=\"label pull-right bg-red\">2</small>
                </a>
                
            </li>
             
            
            <li>
            <li>
              <a href='";
        // line 126
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "'>
                <i class=\"fa fa-users\"></i> <span>Formateurs</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
            <li>
                 ";
    }

    // line 142
    public function block_page_title($context, array $blocks = array())
    {
        echo "Blank page";
    }

    // line 143
    public function block_page_subtitle($context, array $blocks = array())
    {
    }

    // line 145
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        // line 146
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" => $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
    }

    // line 152
    public function block_page_content($context, array $blocks = array())
    {
    }

    // line 158
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        // line 159
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                ESPRIT
            </div>
            <strong>Copyright &copy; <a href=\"http://almsaeedstudio.com\">SamrtDev</a>.</strong> All rights reserved.
        </footer>
    ";
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
    
";
    }

    // line 178
    public function block_javascripts_inline($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 178,  352 => 173,  349 => 172,  346 => 171,  336 => 159,  333 => 158,  328 => 152,  321 => 146,  318 => 145,  313 => 143,  307 => 142,  296 => 126,  284 => 117,  275 => 111,  267 => 106,  258 => 99,  256 => 94,  253 => 93,  246 => 41,  242 => 39,  239 => 38,  224 => 75,  209 => 63,  200 => 57,  185 => 44,  183 => 38,  180 => 37,  177 => 36,  166 => 25,  163 => 24,  156 => 17,  153 => 16,  147 => 13,  141 => 180,  139 => 178,  136 => 176,  134 => 171,  128 => 166,  126 => 158,  119 => 153,  117 => 152,  111 => 148,  109 => 145,  103 => 143,  101 => 142,  90 => 133,  88 => 93,  79 => 86,  77 => 36,  71 => 33,  67 => 31,  64 => 24,  59 => 21,  55 => 19,  52 => 16,  47 => 13,  34 => 2,  32 => 1,);
    }
}
/* {% import "AvanzuAdminThemeBundle:layout:macros.html.twig" as macro %}*/
/* <!doctype html>*/
/* <!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->*/
/* <!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->*/
/* <!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->*/
/* <!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="author" content="">*/
/*     <meta name="keywords" content="">*/
/*     <meta name="viewport" content="width=device-width,initial-scale=1">*/
/*     <title>{% block title %}Administrateur{% endblock %}</title>*/
/* */
/*     {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}" />*/
/*     {% endblock %}*/
/* */
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}*/
/*     {%  block javascripts_head %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}"></script>*/
/*         <!--[if lt IE 9]>*/
/* */
/*         <![endif]-->*/
/* */
/*     {% endblock %}*/
/* */
/* </head>*/
/* <body class="{{ admin_skin|default('skin-blue')}}">*/
/*     <div class="wrapper">*/
/* */
/*     {% block avanzu_admin_header %}*/
/*         <header class="main-header">*/
/*             {% block avanzu_logo %}*/
/*                 <a href="#" class="logo">*/
/*                     <!-- Add the class icon to your logo image or logo icon to add the margining -->*/
/*                     {{ block('title') }}*/
/*                 </a>*/
/*             {% endblock %}*/
/*             <!-- Header Navbar: style can be found in header.less -->*/
/*             <nav class="navbar navbar-static-top" role="navigation">*/
/*                 <!-- Sidebar toggle button-->*/
/*                 <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </a>*/
/*                 */
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                           */
/*                             <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <img src="{{asset('uploads/img/avatar/admin.png')}}" class="user-image" alt="User Image">*/
/*                   <span class="hidden-xs">Administrateur</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <!-- User image -->*/
/*                   <li class="user-header">*/
/*                     <img src="{{asset('uploads/img/avatar/admin.png')}}" class="img-circle" alt="User Image">*/
/*                     <p>*/
/*                       Administrateur*/
/*                       <small>MOOC</small>*/
/*                     </p>*/
/*                   </li>*/
/*                   <!-- Menu Body -->*/
/*                   */
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     */
/*                     <div class="pull-right">*/
/*                       <a href="{{path('mooc_mooc_log_out_admin')}}" class="btn btn-default btn-flat">Sign out</a>*/
/*                     </div>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                */
/*             </nav>*/
/*         </header>*/
/*     {% endblock %}*/
/*     */
/* */
/*         <!-- Left side column. contains the logo and sidebar -->*/
/*         <aside class="main-sidebar sidebar-offcanvas">*/
/*             <!-- sidebar: style can be found in sidebar.less -->*/
/*             <section class="sidebar">*/
/*                 */
/*                 {% block avanzu_sidebar %}*/
/*                     {#{% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}*/
/*                         {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}*/
/*                     {% endif %}*/
/*                     {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}#}*/
/*                */
/*                 */
/* */
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*             <li>*/
/*               <a href='{{path('avanzu_admin_dashboard')}}'>*/
/*                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> */
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href='{{path('charts')}}'>*/
/*                 <i class="fa fa-pie-chart"></i>*/
/*                 <span>Statistiques</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href='{{path('liste_organisme')}}'>*/
/*                     <i class="fa fa-table"></i> <span>Organismes</span> <small class="label pull-right bg-red">2</small>*/
/*                 </a>*/
/*                 */
/*             </li>*/
/*              */
/*             */
/*             <li>*/
/*             <li>*/
/*               <a href='{{path('liste_formateur')}}'>*/
/*                 <i class="fa fa-users"></i> <span>Formateurs</span>*/
/*                 <small class="label pull-right bg-red">3</small>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*                  {% endblock %}*/
/*         </section>*/
/*             <!-- /.sidebar -->*/
/*         </aside>*/
/* */
/*         <!-- Right side column. Contains the navbar and content of the page -->*/
/*         <div class="content-wrapper">*/
/*             <!-- Content Header (Page header) -->*/
/*             <section class="content-header">*/
/*                 <h1>*/
/*                     {% block page_title %}Blank page{% endblock %}*/
/*                     <small>{% block page_subtitle %}{% endblock %}</small>*/
/*                 </h1>*/
/*                 {% block avanzu_breadcrumb %}*/
/*                     {{ render(controller('AvanzuAdminThemeBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}*/
/*                 {% endblock %}*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% block page_content %}{% endblock %}*/
/*             </section>*/
/*             <!-- /.content -->*/
/*         </div>*/
/*         <!-- /.content-wrapper -->*/
/* */
/*     {% block avanzu_admin_footer %}*/
/*         <footer class="main-footer">*/
/*             <div class="pull-right hidden-xs">*/
/*                 ESPRIT*/
/*             </div>*/
/*             <strong>Copyright &copy; <a href="http://almsaeedstudio.com">SamrtDev</a>.</strong> All rights reserved.*/
/*         </footer>*/
/*     {% endblock %}*/
/* */
/*     </div>*/
/* <!-- ./wrapper -->*/
/* */
/* {# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}*/
/* {% block javascripts %}*/
/* */
/*     <script src="{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}"></script>*/
/*     */
/* {% endblock %}*/
/* */
/* {# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}*/
/* {% block javascripts_inline %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
