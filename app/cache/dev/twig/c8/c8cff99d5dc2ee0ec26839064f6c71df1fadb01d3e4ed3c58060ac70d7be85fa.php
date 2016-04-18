<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_bb9da459c139953b829bd46a39dca80dbb3153844e7543343ac5f3f8e2247178 extends Twig_Template
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
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
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
        // line 69
        echo "    

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                
                ";
        // line 76
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 126
        echo "        </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 135
        $this->displayBlock('page_title', $context, $blocks);
        // line 136
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 138
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 141
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 145
        $this->displayBlock('page_content', $context, $blocks);
        // line 146
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 151
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 159
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 164
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "
";
        // line 171
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 173
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
                ";
        // line 51
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 52
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 54
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 60
            echo "                            <li>
                               <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                            </li>
                        </ul>
                    </div>
                ";
        }
        // line 66
        echo "            </nav>
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

    // line 54
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        // line 55
        echo "                                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 56
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 58
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AvanzuAdminThemeBundle:Navbar:user"));
        echo "
                            ";
    }

    // line 76
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 77
        echo "                    ";
        // line 82
        echo "               
                

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li>
              <a href='";
        // line 89
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_dashboard");
        echo "'>
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href='";
        // line 94
        echo $this->env->getExtension('routing')->getPath("charts");
        echo "'>
                <i class=\"fa fa-pie-chart\"></i>
                <span>Statistiques</span>
              </a>
            </li>
              
           
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-table\"></i> <span>Organismes</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Préinscris</a></li>
                <li><a href='";
        // line 108
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "'><i class=\"fa fa-circle-o\"></i> All </a></li>
              </ul>
            </li>
            <li>
              <a href=\"pages/calendar.html\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
            <li>
            <li>
              <a href='";
        // line 119
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "'>
                <i class=\"fa fa-users\"></i> <span>Formateurs</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
            <li>
                 ";
    }

    // line 135
    public function block_page_title($context, array $blocks = array())
    {
        echo "Blank page";
    }

    // line 136
    public function block_page_subtitle($context, array $blocks = array())
    {
    }

    // line 138
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        // line 139
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" => $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
    }

    // line 145
    public function block_page_content($context, array $blocks = array())
    {
    }

    // line 151
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        // line 152
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                ESPRIT
            </div>
            <strong>Copyright &copy; <a href=\"http://almsaeedstudio.com\">SamrtDev</a>.</strong> All rights reserved.
        </footer>
    ";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
    
";
    }

    // line 171
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
        return array (  369 => 171,  362 => 166,  359 => 165,  356 => 164,  346 => 152,  343 => 151,  338 => 145,  331 => 139,  328 => 138,  323 => 136,  317 => 135,  306 => 119,  292 => 108,  275 => 94,  267 => 89,  258 => 82,  256 => 77,  253 => 76,  247 => 58,  243 => 57,  239 => 56,  234 => 55,  231 => 54,  224 => 41,  220 => 39,  217 => 38,  211 => 66,  203 => 60,  201 => 54,  197 => 52,  195 => 51,  186 => 44,  184 => 38,  181 => 37,  178 => 36,  167 => 25,  164 => 24,  157 => 17,  154 => 16,  148 => 13,  142 => 173,  140 => 171,  137 => 169,  135 => 164,  129 => 159,  127 => 151,  120 => 146,  118 => 145,  112 => 141,  110 => 138,  104 => 136,  102 => 135,  91 => 126,  89 => 76,  80 => 69,  78 => 36,  72 => 33,  68 => 31,  65 => 24,  60 => 21,  56 => 19,  53 => 16,  48 => 13,  35 => 2,  33 => 1,);
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
/*                 {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             {% block avanzu_navbar %}*/
/*                                 {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}*/
/*                                 {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}*/
/*                                 {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}*/
/*                                 {{ render(controller('AvanzuAdminThemeBundle:Navbar:user')) }}*/
/*                             {% endblock %}*/
/*                             <li>*/
/*                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endif %}*/
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
/*               */
/*            */
/*             <li class="treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-table"></i> <span>Organismes</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Préinscris</a></li>*/
/*                 <li><a href='{{path('liste_organisme')}}'><i class="fa fa-circle-o"></i> All </a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li>*/
/*               <a href="pages/calendar.html">*/
/*                 <i class="fa fa-calendar"></i> <span>Calendar</span>*/
/*                 <small class="label pull-right bg-red">3</small>*/
/*               </a>*/
/*             </li>*/
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
