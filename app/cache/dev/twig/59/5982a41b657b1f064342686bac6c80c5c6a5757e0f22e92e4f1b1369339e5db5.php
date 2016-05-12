<?php

/* MoocMoocBundle:Organisme:ListeFormateurs1.html.twig */
class __TwigTemplate_4996ddb2af26a9e9706467f3f4a25705aacc3a87f498fc599e394a2707ec0825 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
      <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Creative - Bootstrap 3 Responsive Admin Template\">
        <meta name=\"author\" content=\"GeeksLabs\">
        <meta name=\"keyword\" content=\"Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal\">
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/favicon.png"), "html", null, true);
        echo "\">

        <title>Mes formateurs</title>

        <!-- Bootstrap CSS -->    

        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- bootstrap theme -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--external css-->
        <!-- font icon -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    
        <!-- full calendar css-->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- easy pie chart-->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
        <!-- owl carousel -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/fullcalendar.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/widgets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/xcharts.min.css"), "html", null, true);
        echo "\" rel=\" stylesheet\">\t
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/jquery-ui-1.10.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
          <script src=\"js/html5shiv.js\"></script>
          <script src=\"js/respond.min.js\"></script>
          <script src=\"js/lte-ie7.js\"></script>
        <![endif]-->
    </head>
    
            <header class=\"header dark-bg\">
                <div class=\"toggle-nav\">
                    <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"><i class=\"icon_menu\"></i></div>
                </div>

                <!--logo start-->
                <a href=\"index.html\" class=\"logo\">Bienvenue a <span class=\"lite\">MOOC</span></a>
                <!--logo end-->

                <div class=\"nav search-row\" id=\"top_menu\">
                    <!--  search form start -->
                    <ul class=\"nav top-menu\">                    
                        <li>
                            <form class=\"navbar-form\">
                                <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                            </form>
                        </li>                    
                    </ul>
                    <!--  search form end -->                
                </div>

              <div class=\"top-nav notification-row\">                
                    <!-- notificatoin dropdown start-->
                    <ul class=\"nav pull-right top-menu\">

                        <!-- task notificatoin start -->
                        <li id=\"task_notificatoin_bar\" class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <span class=\"icon-task-l\"></i>
                                    <span class=\"badge bg-important\"></span>
                            </a>
                           
                        </li>
                        <!-- task notificatoin end -->
                        <!-- inbox notificatoin start-->
                        <li id=\"mail_notificatoin_bar\" class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <i class=\"icon-envelope-l\"></i>
                                <span class=\"badge bg-important\"></span>
                            </a>
                           
                        </li>
                        <!-- inbox notificatoin end -->
                        <!-- alert notification start-->
                        <li id=\"alert_notificatoin_bar\" class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">

                                <i class=\"icon-bell-l\"></i>
                                <span class=\"badge bg-important\">";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu extended notification\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    <p class=\"blue\">You have ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo " new notifications</p>
                                </li>
                               ";
        // line 110
        echo "                               
                            </ul>
                        </li>
                        <!-- alert notification end-->
                        <!-- user login dropdown start-->
                        <li class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <span class=\"profile-ava\">
                                    <img alt=\"\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/esprit.PNG"), "html", null, true);
        echo "\">
                                </span>
                                <span class=\"username\"> ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "html", null, true);
        echo "</span>
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu extended logout\">
                                <div class=\"log-arrow-up\"></div>
                                <li class=\"eborder-top\">
                                    <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profileOrganisme", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\"><i class=\"icon_profile\"></i> Mon Profile</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon_mail_alt\"></i> Mes message</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon_chat_alt\"></i> Chat</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_log_out_formateur");
        echo "\"><i class=\"icon_key_alt\"></i> Log Out</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon_key_alt\"></i>Utilisation</a>
                                </li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>      
            <!--header end-->

            <!--sidebar start-->
            <aside>
                <div id=\"sidebar\"  class=\"nav-collapse \">
                    <!-- sidebar menu start-->
                             <ul class=\"sidebar-menu\">                
                        <li class=\"active\">
                            <a class=\"\" href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilOrganisme", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profileOrganisme", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_profile\"></i>
                                <span>Mon Profile</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>       
                       
                        <li>
                            <a class=\"\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeFormateurs1", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_group\"></i>
                                <span>Mes Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeOrganismes1", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_building\"></i>
                                <span>Liste Organismes</span>
                            </a>
                        </li>

                    <li class=\"sub-menu\">
                            <a  href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeInvit", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_mail_alt\"></i>
                                <span>Liste Invitations</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>
                          <li class=\"sub-menu\">
                            <a  href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeTousFormateurs", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_plus_alt2\"></i>
                                <span>Inviter Formateur</span>
                                
                            </a>
                        </li>
                        
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
     <!--main content start-->
 
<section id=\"main-content\">
          <section class=\"wrapper\">
\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h3 class=\"page-header\"><i class=\"icon_search-2\"></i> Chercher Formateur</h3>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"icon_search\"></i><a href=\"index.html\">Chercher Formateur</a></li>

\t\t\t\t  </ol>
\t\t\t\t</div>
\t\t\t</div>
              
           <!-- search bar start-->
              <div class=\"row\">
              <div class=\"col-md-4 portlets\" align=\"center\">
              <!-- Widget -->
              <div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
                  <div class=\"pull-left\">Search Bar</div>
                  <div class=\"clearfix\"></div>
                </div>

                <div class=\"panel-body\">
                  <!-- Widget content --><!-- Widget footer -->
                  <div class=\"widget-foot\">
                      
                    <form class=\"form-inline\" method=\"POST\"  action=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ChercherFormateur", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" >
\t\t\t\t\t\t<div class=\"form-group\"  >
\t\t\t\t\t\t\t<input type=\"text\" name=\"Chercher\" id=\"Chercher\" class=\"form-control\" placeholder=\"Tapez le nom de l'organisme ici ...\">
\t\t\t\t\t\t</div>
                        <button type=\"submit\" class=\"btn btn-info\">Chercher</button>
                      </form>


                  </div>
                </div>


              </div> 
            </div>
              </div>
              <!-- search bar end-->

              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Resultat du recherche
                          </header>
                          
                          <table class=\"table table-striped table-advance table-hover\">
                           <tbody>
                              <tr>
                                 <th><i class=\"icon_profile\"></i> Nom </th>              
                                 <th><i class=\"icon_profile\"></i> Prenom </th>
                                <th><i class=\"icon_mail_alt\"></i> Email</th>
                               
                                 
                                 <th><i class=\"icon_cogs\"></i> Action</th>
                              </tr>
                              
                              ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFormateur"]) ? $context["listeFormateur"] : $this->getContext($context, "listeFormateur")));
        foreach ($context['_seq'] as $context["_key"] => $context["Formateur"]) {
            // line 266
            echo "                                  <tr>
                                 <td>";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($context["Formateur"], "nom", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($context["Formateur"], "prenom", array()), "html", null, true);
            echo "</td>
                                   <td>";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($context["Formateur"], "email", array()), "html", null, true);
            echo "</td>
                                 
                                
                                 
                                 <td>
                                  <div class=\"btn-group\">
                                    
                                      <a class=\"btn btn-success\" href=\"#\"><i class=\"icon_zoom-in_alt\"></i></a>
                                      <a class=\"btn btn-danger\" href=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_SupprimerFormateur", array("cin" => $this->getAttribute($context["Formateur"], "cin", array()), "name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
            echo " \"onclick=\"return confirm('Vous venez de supprimer un formateur est ce que vous etes sure?')\"><i class=\"icon_close_alt2\"></i></a>
                                  </div>
                                  </td>
                              </tr>
                                  
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Formateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "                              
                             
                             
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
</html>";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Organisme:ListeFormateurs1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 283,  389 => 277,  378 => 269,  374 => 268,  370 => 267,  367 => 266,  363 => 265,  324 => 229,  281 => 189,  271 => 182,  261 => 175,  252 => 169,  241 => 161,  232 => 155,  209 => 135,  197 => 126,  188 => 120,  183 => 118,  173 => 110,  168 => 97,  160 => 92,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  66 => 25,  61 => 23,  57 => 22,  52 => 20,  48 => 19,  42 => 16,  37 => 14,  28 => 8,  19 => 1,);
    }
}
/* <html>*/
/*       <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">*/
/*         <meta name="author" content="GeeksLabs">*/
/*         <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">*/
/*         <link rel="shortcut icon" href="{{asset('bundles/moocmooc/css/profilformateur/img/favicon.png')}}">*/
/* */
/*         <title>Mes formateurs</title>*/
/* */
/*         <!-- Bootstrap CSS -->    */
/* */
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap.min.css')}}">*/
/*         <!-- bootstrap theme -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/*         <!--external css-->*/
/*         <!-- font icon -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css')}}" rel="stylesheet" />*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/font-awesome.min.css')}}" rel="stylesheet" />    */
/*         <!-- full calendar css-->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />*/
/*         <!-- easy pie chart-->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>*/
/*         <!-- owl carousel -->*/
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/profilformateur/css/owl.carousel.css')}}" type="text/css">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">*/
/*         <!-- Custom styles -->*/
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/profilformateur/css/fullcalendar.css')}}">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/widgets.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style-responsive.css')}}" rel="stylesheet" />*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/xcharts.min.css')}}" rel=" stylesheet">	*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">*/
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="js/html5shiv.js"></script>*/
/*           <script src="js/respond.min.js"></script>*/
/*           <script src="js/lte-ie7.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     */
/*             <header class="header dark-bg">*/
/*                 <div class="toggle-nav">*/
/*                     <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>*/
/*                 </div>*/
/* */
/*                 <!--logo start-->*/
/*                 <a href="index.html" class="logo">Bienvenue a <span class="lite">MOOC</span></a>*/
/*                 <!--logo end-->*/
/* */
/*                 <div class="nav search-row" id="top_menu">*/
/*                     <!--  search form start -->*/
/*                     <ul class="nav top-menu">                    */
/*                         <li>*/
/*                             <form class="navbar-form">*/
/*                                 <input class="form-control" placeholder="Search" type="text">*/
/*                             </form>*/
/*                         </li>                    */
/*                     </ul>*/
/*                     <!--  search form end -->                */
/*                 </div>*/
/* */
/*               <div class="top-nav notification-row">                */
/*                     <!-- notificatoin dropdown start-->*/
/*                     <ul class="nav pull-right top-menu">*/
/* */
/*                         <!-- task notificatoin start -->*/
/*                         <li id="task_notificatoin_bar" class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                                 <span class="icon-task-l"></i>*/
/*                                     <span class="badge bg-important"></span>*/
/*                             </a>*/
/*                            */
/*                         </li>*/
/*                         <!-- task notificatoin end -->*/
/*                         <!-- inbox notificatoin start-->*/
/*                         <li id="mail_notificatoin_bar" class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                                 <i class="icon-envelope-l"></i>*/
/*                                 <span class="badge bg-important"></span>*/
/*                             </a>*/
/*                            */
/*                         </li>*/
/*                         <!-- inbox notificatoin end -->*/
/*                         <!-- alert notification start-->*/
/*                         <li id="alert_notificatoin_bar" class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/* */
/*                                 <i class="icon-bell-l"></i>*/
/*                                 <span class="badge bg-important">{{nbr}}</span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended notification">*/
/*                                 <div class="notify-arrow notify-arrow-blue"></div>*/
/*                                 <li>*/
/*                                     <p class="blue">You have {{nbr}} new notifications</p>*/
/*                                 </li>*/
/*                                {# {% for inv in listeInvitation %}*/
/*                                 <li>*/
/*                                      */
/*                                     <a href="{{path('mooc_mooc_ListeInvit', {'name':name,'nbr':nbr})}}">*/
/*                                         <span class="label label-primary"><i class="icon_profile"></i></span> */
/*                                         Demande d'integration de {{ inv.nom_exp }}*/
/*                                         <span class="small italic pull-right"></span>*/
/*                                     </a>*/
/*                                     */
/*                                 </li>*/
/*                                  {% endfor %}#}*/
/*                                */
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- alert notification end-->*/
/*                         <!-- user login dropdown start-->*/
/*                         <li class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                                 <span class="profile-ava">*/
/*                                     <img alt="" src="{{asset('bundles/moocmooc/css/profilformateur/img/esprit.PNG')}}">*/
/*                                 </span>*/
/*                                 <span class="username"> {{Organisme.nom}}</span>*/
/*                                 <b class="caret"></b>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended logout">*/
/*                                 <div class="log-arrow-up"></div>*/
/*                                 <li class="eborder-top">*/
/*                                     <a href="{{path('mooc_mooc_profileOrganisme', {'name':Organisme.nom,'nbr':nbr})}}"><i class="icon_profile"></i> Mon Profile</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="icon_mail_alt"></i> Mes message</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="icon_chat_alt"></i> Chat</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{path('mooc_mooc_log_out_formateur')}}"><i class="icon_key_alt"></i> Log Out</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="icon_key_alt"></i>Utilisation</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- user login dropdown end -->*/
/*                     </ul>*/
/*                     <!-- notificatoin dropdown end-->*/
/*                 </div>*/
/*             </header>      */
/*             <!--header end-->*/
/* */
/*             <!--sidebar start-->*/
/*             <aside>*/
/*                 <div id="sidebar"  class="nav-collapse ">*/
/*                     <!-- sidebar menu start-->*/
/*                              <ul class="sidebar-menu">                */
/*                         <li class="active">*/
/*                             <a class="" href="{{path('mooc_mooc_acceuilOrganisme', {'name':Organisme.nom,'nbr':nbr})}}">*/
/*                                 <i class="icon_house_alt"></i>*/
/*                                 <span>Accueil</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="sub-menu">*/
/*                             <a href="{{path('mooc_mooc_profileOrganisme', {'name':Organisme.nom,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_profile"></i>*/
/*                                 <span>Mon Profile</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>       */
/*                        */
/*                         <li>*/
/*                             <a class="" href="{{path('mooc_mooc_ListeFormateurs1', {'name':Organisme.nom,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_group"></i>*/
/*                                 <span>Mes Formateurs</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>                     */
/*                             <a class="" href="{{path('mooc_mooc_ListeOrganismes1', {'name':Organisme.nom,'nbr':nbr})}}">*/
/*                                 <i class="icon_building"></i>*/
/*                                 <span>Liste Organismes</span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                     <li class="sub-menu">*/
/*                             <a  href="{{path('mooc_mooc_ListeInvit', {'name':Organisme.nom,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_mail_alt"></i>*/
/*                                 <span>Liste Invitations</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>*/
/*                           <li class="sub-menu">*/
/*                             <a  href="{{path('mooc_mooc_ListeTousFormateurs', {'name':Organisme.nom,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_plus_alt2"></i>*/
/*                                 <span>Inviter Formateur</span>*/
/*                                 */
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                     <!-- sidebar menu end-->*/
/*                 </div>*/
/*             </aside>*/
/*             <!--sidebar end-->*/
/*      <!--main content start-->*/
/*  */
/* <section id="main-content">*/
/*           <section class="wrapper">*/
/* 		  <div class="row">*/
/* 				<div class="col-lg-12">*/
/* 					<h3 class="page-header"><i class="icon_search-2"></i> Chercher Formateur</h3>*/
/* 					<ol class="breadcrumb">*/
/* 						<li><i class="icon_search"></i><a href="index.html">Chercher Formateur</a></li>*/
/* */
/* 				  </ol>*/
/* 				</div>*/
/* 			</div>*/
/*               */
/*            <!-- search bar start-->*/
/*               <div class="row">*/
/*               <div class="col-md-4 portlets" align="center">*/
/*               <!-- Widget -->*/
/*               <div class="panel panel-default">*/
/* 				<div class="panel-heading">*/
/*                   <div class="pull-left">Search Bar</div>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/* */
/*                 <div class="panel-body">*/
/*                   <!-- Widget content --><!-- Widget footer -->*/
/*                   <div class="widget-foot">*/
/*                       */
/*                     <form class="form-inline" method="POST"  action="{{path('mooc_mooc_ChercherFormateur', {'name': Organisme.nom,'nbr':nbr})}}" >*/
/* 						<div class="form-group"  >*/
/* 							<input type="text" name="Chercher" id="Chercher" class="form-control" placeholder="Tapez le nom de l'organisme ici ...">*/
/* 						</div>*/
/*                         <button type="submit" class="btn btn-info">Chercher</button>*/
/*                       </form>*/
/* */
/* */
/*                   </div>*/
/*                 </div>*/
/* */
/* */
/*               </div> */
/*             </div>*/
/*               </div>*/
/*               <!-- search bar end-->*/
/* */
/*               <!-- page start-->*/
/*               <div class="row">*/
/*                   <div class="col-lg-12">*/
/*                       <section class="panel">*/
/*                           <header class="panel-heading">*/
/*                               Resultat du recherche*/
/*                           </header>*/
/*                           */
/*                           <table class="table table-striped table-advance table-hover">*/
/*                            <tbody>*/
/*                               <tr>*/
/*                                  <th><i class="icon_profile"></i> Nom </th>              */
/*                                  <th><i class="icon_profile"></i> Prenom </th>*/
/*                                 <th><i class="icon_mail_alt"></i> Email</th>*/
/*                                */
/*                                  */
/*                                  <th><i class="icon_cogs"></i> Action</th>*/
/*                               </tr>*/
/*                               */
/*                               {% for Formateur in listeFormateur %}*/
/*                                   <tr>*/
/*                                  <td>{{Formateur.nom}}</td>*/
/*                                  <td>{{Formateur.prenom}}</td>*/
/*                                    <td>{{Formateur.email}}</td>*/
/*                                  */
/*                                 */
/*                                  */
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                     */
/*                                       <a class="btn btn-success" href="#"><i class="icon_zoom-in_alt"></i></a>*/
/*                                       <a class="btn btn-danger" href="{{path('mooc_mooc_SupprimerFormateur', {'cin':Formateur.cin,'name':Organisme.nom,'nbr':nbr})}} "onclick="return confirm('Vous venez de supprimer un formateur est ce que vous etes sure?')"><i class="icon_close_alt2"></i></a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr>*/
/*                                   */
/*                               {% endfor %}*/
/*                               */
/*                              */
/*                              */
/*                            </tbody>*/
/*                         </table>*/
/*                       </section>*/
/*                   </div>*/
/*               </div>*/
/*               <!-- page end-->*/
/*           </section>*/
/*       </section>*/
/*       <!--main content end-->*/
/* </html>*/
