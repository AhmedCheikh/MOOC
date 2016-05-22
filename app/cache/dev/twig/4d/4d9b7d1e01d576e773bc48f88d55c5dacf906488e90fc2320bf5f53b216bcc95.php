<?php

/* MoocMoocBundle:Organisme:ListeInvitation.html.twig */
class __TwigTemplate_e3210ccf2ee81c7c53aa59946cb1ff247e6c3a9ac421939dbbe989147d0a698a extends Twig_Template
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

        <title>Mes Invitations</title>

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
                            <ul class=\"dropdown-menu extended tasks-bar\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    <p class=\"blue\">Statistique de publication</p>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div class=\"desc\">Cours android </div>
                                            <div class=\"percent\">90%</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                                                <span class=\"sr-only\">90% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div class=\"desc\">
                                                Cour windows phone
                                            </div>
                                            <div class=\"percent\">30%</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 30%\">
                                                <span class=\"sr-only\">30% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div class=\"desc\">Cour IOS</div>
                                            <div class=\"percent\">80%</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                <span class=\"sr-only\">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div class=\"desc\">Cours J2ME</div>
                                            <div class=\"percent\">78%</div>
                                        </div>
                                        <div class=\"progress progress-striped\">
                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"78\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 78%\">
                                                <span class=\"sr-only\">78% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div class=\"desc\">Mobile App</div>
                                            <div class=\"percent\">50%</div>
                                        </div>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 50%\">
                                                <span class=\"sr-only\">50% Complete</span>
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <li class=\"external\">
                                    <a href=\"#\">See All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- task notificatoin end -->
                        <!-- inbox notificatoin start-->
                        <li id=\"mail_notificatoin_bar\" class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <i class=\"icon-envelope-l\"></i>
                                <span class=\"badge bg-important\"></span>
                            </a>
                            <ul class=\"dropdown-menu extended inbox\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    <p class=\"blue\">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/esprit.jpg"), "html", null, true);
        echo "\"></span>
                                        <span class=\"subject\">
                                            <span class=\"from\">Greg  Martin</span>
                                            <span class=\"time\">1 min</span>
                                        </span>
                                        <span class=\"message\">
                                            I really like this admin panel.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/esprit.jpg"), "html", null, true);
        echo "\"></span>
                                        <span class=\"subject\">
                                            <span class=\"from\">Bob   Mckenzie</span>
                                            <span class=\"time\">5 mins</span>
                                        </span>
                                        <span class=\"message\">
                                            Hi, What is next project plan?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/esprit.PNG"), "html", null, true);
        echo "\"></span>
                                        <span class=\"subject\">
                                            <span class=\"from\">Phillip   Park</span>
                                            <span class=\"time\">2 hrs</span>
                                        </span>
                                        <span class=\"message\">
                                            I am like to buy this Admin Template.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <span class=\"photo\"><img alt=\"avatar\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/esprit.PNG"), "html", null, true);
        echo "\"></span>
                                        <span class=\"subject\">
                                            <span class=\"from\">Ray   Munoz</span>
                                            <span class=\"time\">1 day</span>
                                        </span>
                                        <span class=\"message\">
                                            Icon fonts are great.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox notificatoin end -->
                        <!-- alert notification start-->
                        <li id=\"alert_notificatoin_bar\" class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">

                                <i class=\"icon-bell-l\"></i>
                                <span class=\"badge bg-important\">";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo "</span>
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
                                    <img alt=\"\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/mini_esprit.png"), "html", null, true);
        echo "\">
                                </span>
                                <span class=\"username\"> ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</span>
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu extended logout\">
                                <div class=\"log-arrow-up\"></div>
                                <li class=\"eborder-top\">
                                    <a href=\"#\"><i class=\"icon_id\"></i> Mon Profile</a>
                                </li>
                                
                                <li>
                                    <a href=\"#\"><i class=\"icon_mail_alt\"></i> Mes message</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon_chat_alt\"></i> Chat</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 287
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
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilOrganisme", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profileOrganisme", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_id\"></i>
                                <span>Mon Profile</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>       
                        
                        <li>
                            <a class=\"\" href=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeFormateurs1", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_group\"></i>
                                <span>Mes Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeOrganismes1", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_building\"></i>
                                <span>Liste Organismes</span>
                            </a>
                        </li>

                        <li class=\"sub-menu\">
                            <a  href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeInvit", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_mail\"></i>
                                <span>Liste Invitations</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>
                         <li class=\"sub-menu\">
                            <a  href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeTousFormateurs", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
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
                      
                      <form class=\"form-inline\" methode=\"POST\"";
        // line 381
        echo ">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Tapez le nom du cour ici ...\">
\t\t\t\t\t\t</div>
                                                <button type=\"submit\" name=\"chercher\" id=\"chercher\" class=\"btn btn-info\">Chercher</button>
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
                                 <th><i class=\"icon_profile\"></i> Nom du Formateur </th>              
                                 <th><i class=\"icon_profile\"></i> Date de l'envoi </th>
                               
                               
                                 
                                 <th><i class=\"icon_cogs\"></i> Action</th>
                              </tr>
                              
                              ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeInvitation"]) ? $context["listeInvitation"] : $this->getContext($context, "listeInvitation")));
        foreach ($context['_seq'] as $context["_key"] => $context["inv"]) {
            // line 418
            echo "                                  <tr>
                                 <td>";
            // line 419
            echo twig_escape_filter($this->env, $this->getAttribute($context["inv"], "nomExp", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 420
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inv"], "dateInvit", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                  
                                 
                                
                                 
                                 <td>
                                  <div class=\"btn-group\">
                                      <a class=\"btn btn-primary\" href=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ProfilFormateur1", array("nom" => $this->getAttribute($context["inv"], "nomExp", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "id" => $this->getAttribute($context["inv"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon_zoom-in_alt\"></i></a>
                                           <a class=\"btn btn-success\" href=\"";
            // line 428
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_Organisme_AccepterInvit", array("id" => $this->getAttribute($context["inv"], "id", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
            echo " \"><i class=\"icon_check_alt2\"></i></a>
                                                                                        
                                 
                                     <a class=\"btn btn-danger\" href=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_supprimerInvit", array("id" => $this->getAttribute($context["inv"], "id", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
            echo " \"><i class=\"icon_close_alt2\"></i></a>
                                 </div>
                                  </td>
                              </tr>
                                  
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
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
</html>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Organisme:ListeInvitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 437,  560 => 431,  554 => 428,  550 => 427,  540 => 420,  536 => 419,  533 => 418,  529 => 417,  491 => 381,  448 => 341,  438 => 334,  428 => 327,  419 => 321,  408 => 313,  399 => 307,  376 => 287,  357 => 271,  352 => 269,  304 => 224,  280 => 203,  265 => 191,  250 => 179,  235 => 167,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  66 => 25,  61 => 23,  57 => 22,  52 => 20,  48 => 19,  42 => 16,  37 => 14,  28 => 8,  19 => 1,);
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
/*         <title>Mes Invitations</title>*/
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
/*                 <div class="top-nav notification-row">                */
/*                     <!-- notificatoin dropdown start-->*/
/*                     <ul class="nav pull-right top-menu">*/
/* */
/*                         <!-- task notificatoin start -->*/
/*                         <li id="task_notificatoin_bar" class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                                 <span class="icon-task-l"></i>*/
/*                                     <span class="badge bg-important"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended tasks-bar">*/
/*                                 <div class="notify-arrow notify-arrow-blue"></div>*/
/*                                 <li>*/
/*                                     <p class="blue">Statistique de publication</p>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <div class="task-info">*/
/*                                             <div class="desc">Cours android </div>*/
/*                                             <div class="percent">90%</div>*/
/*                                         </div>*/
/*                                         <div class="progress progress-striped">*/
/*                                             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">*/
/*                                                 <span class="sr-only">90% Complete (success)</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <div class="task-info">*/
/*                                             <div class="desc">*/
/*                                                 Cour windows phone*/
/*                                             </div>*/
/*                                             <div class="percent">30%</div>*/
/*                                         </div>*/
/*                                         <div class="progress progress-striped">*/
/*                                             <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">*/
/*                                                 <span class="sr-only">30% Complete (warning)</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <div class="task-info">*/
/*                                             <div class="desc">Cour IOS</div>*/
/*                                             <div class="percent">80%</div>*/
/*                                         </div>*/
/*                                         <div class="progress progress-striped">*/
/*                                             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/*                                                 <span class="sr-only">80% Complete</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <div class="task-info">*/
/*                                             <div class="desc">Cours J2ME</div>*/
/*                                             <div class="percent">78%</div>*/
/*                                         </div>*/
/*                                         <div class="progress progress-striped">*/
/*                                             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">*/
/*                                                 <span class="sr-only">78% Complete (danger)</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <div class="task-info">*/
/*                                             <div class="desc">Mobile App</div>*/
/*                                             <div class="percent">50%</div>*/
/*                                         </div>*/
/*                                         <div class="progress progress-striped active">*/
/*                                             <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">*/
/*                                                 <span class="sr-only">50% Complete</span>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="external">*/
/*                                     <a href="#">See All Tasks</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- task notificatoin end -->*/
/*                         <!-- inbox notificatoin start-->*/
/*                         <li id="mail_notificatoin_bar" class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                                 <i class="icon-envelope-l"></i>*/
/*                                 <span class="badge bg-important"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended inbox">*/
/*                                 <div class="notify-arrow notify-arrow-blue"></div>*/
/*                                 <li>*/
/*                                     <p class="blue">You have 5 new messages</p>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/esprit.jpg')}}"></span>*/
/*                                         <span class="subject">*/
/*                                             <span class="from">Greg  Martin</span>*/
/*                                             <span class="time">1 min</span>*/
/*                                         </span>*/
/*                                         <span class="message">*/
/*                                             I really like this admin panel.*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/esprit.jpg')}}"></span>*/
/*                                         <span class="subject">*/
/*                                             <span class="from">Bob   Mckenzie</span>*/
/*                                             <span class="time">5 mins</span>*/
/*                                         </span>*/
/*                                         <span class="message">*/
/*                                             Hi, What is next project plan?*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/esprit.PNG')}}"></span>*/
/*                                         <span class="subject">*/
/*                                             <span class="from">Phillip   Park</span>*/
/*                                             <span class="time">2 hrs</span>*/
/*                                         </span>*/
/*                                         <span class="message">*/
/*                                             I am like to buy this Admin Template.*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/esprit.PNG')}}"></span>*/
/*                                         <span class="subject">*/
/*                                             <span class="from">Ray   Munoz</span>*/
/*                                             <span class="time">1 day</span>*/
/*                                         </span>*/
/*                                         <span class="message">*/
/*                                             Icon fonts are great.*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">See all messages</a>*/
/*                                 </li>*/
/*                             </ul>*/
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
/*                                     <p class="blue">You have 4 new notifications</p>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="label label-primary"><i class="icon_profile"></i></span> */
/*                                         Friend Request*/
/*                                         <span class="small italic pull-right">5 mins</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="label label-warning"><i class="icon_pin"></i></span>  */
/*                                         John location.*/
/*                                         <span class="small italic pull-right">50 mins</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="label label-danger"><i class="icon_book_alt"></i></span> */
/*                                         Project 3 Completed.*/
/*                                         <span class="small italic pull-right">1 hr</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <span class="label label-success"><i class="icon_like"></i></span> */
/*                                         Mick appreciated your work.*/
/*                                         <span class="small italic pull-right"> Today</span>*/
/*                                     </a>*/
/*                                 </li>                            */
/*                                 <li>*/
/*                                     <a href="#">See all notifications</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- alert notification end-->*/
/*                         <!-- user login dropdown start-->*/
/*                         <li class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/*                                 <span class="profile-ava">*/
/*                                     <img alt="" src="{{asset('bundles/moocmooc/css/profilformateur/img/mini_esprit.png')}}">*/
/*                                 </span>*/
/*                                 <span class="username"> {{name}}</span>*/
/*                                 <b class="caret"></b>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended logout">*/
/*                                 <div class="log-arrow-up"></div>*/
/*                                 <li class="eborder-top">*/
/*                                     <a href="#"><i class="icon_id"></i> Mon Profile</a>*/
/*                                 </li>*/
/*                                 */
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
/*                             <a class="" href="{{path('mooc_mooc_acceuilOrganisme', {'name':name,'nbr':nbr})}}">*/
/*                                 <i class="icon_house_alt"></i>*/
/*                                 <span>Accueil</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="sub-menu">*/
/*                             <a href="{{path('mooc_mooc_profileOrganisme', {'name':name,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_id"></i>*/
/*                                 <span>Mon Profile</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>       */
/*                         */
/*                         <li>*/
/*                             <a class="" href="{{path('mooc_mooc_ListeFormateurs1', {'name':name,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_group"></i>*/
/*                                 <span>Mes Formateurs</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>                     */
/*                             <a class="" href="{{path('mooc_mooc_ListeOrganismes1', {'name':name,'nbr':nbr})}}">*/
/*                                 <i class="icon_building"></i>*/
/*                                 <span>Liste Organismes</span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         <li class="sub-menu">*/
/*                             <a  href="{{path('mooc_mooc_ListeInvit', {'name':name,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_mail"></i>*/
/*                                 <span>Liste Invitations</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>*/
/*                          <li class="sub-menu">*/
/*                             <a  href="{{path('mooc_mooc_ListeTousFormateurs', {'name':name,'nbr':nbr})}}" class="">*/
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
/*                       <form class="form-inline" methode="POST"{# action="{{path('mooc_mooc_ChercherFormateur', {'name': name,'nbr':nbr})}}"#}>*/
/* 						<div class="form-group">*/
/* 							<input type="text" class="form-control" placeholder="Tapez le nom du cour ici ...">*/
/* 						</div>*/
/*                                                 <button type="submit" name="chercher" id="chercher" class="btn btn-info">Chercher</button>*/
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
/*                                  <th><i class="icon_profile"></i> Nom du Formateur </th>              */
/*                                  <th><i class="icon_profile"></i> Date de l'envoi </th>*/
/*                                */
/*                                */
/*                                  */
/*                                  <th><i class="icon_cogs"></i> Action</th>*/
/*                               </tr>*/
/*                               */
/*                               {% for inv in listeInvitation %}*/
/*                                   <tr>*/
/*                                  <td>{{inv.nomExp}}</td>*/
/*                                  <td>{{inv.dateInvit | date('d/m/Y')}}</td>*/
/*                                   */
/*                                  */
/*                                 */
/*                                  */
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                       <a class="btn btn-primary" href="{{path('mooc_mooc_ProfilFormateur1', {'nom':inv.nomExp,'name':name,'id':inv.id})}}"><i class="icon_zoom-in_alt"></i></a>*/
/*                                            <a class="btn btn-success" href="{{path('mooc_mooc_Organisme_AccepterInvit', {'id':inv.id,'name':name,'nbr':nbr})}} "><i class="icon_check_alt2"></i></a>*/
/*                                                                                         */
/*                                  */
/*                                      <a class="btn btn-danger" href="{{path('mooc_mooc_supprimerInvit', {'id':inv.id,'name':name,'nbr':nbr})}} "><i class="icon_close_alt2"></i></a>*/
/*                                  </div>*/
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
/* */
