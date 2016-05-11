<?php

/* MoocMoocBundle:Organisme:ProfilOrganisme.html.twig */
class __TwigTemplate_c6875698e42a26023a75739117d4a0a5dac064c0dc1fdf4ba53300afc5057b6e extends Twig_Template
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

        <title>Profil Organisme</title>

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
                                    <span class=\"badge bg-important\">6</span>
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
                                <span class=\"badge bg-important\">5</span>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/esprit.PNG"), "html", null, true);
        echo "\">
                                </span>
                                <span class=\"username\"> ";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "html", null, true);
        echo "</span>
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu extended logout\">
                                <div class=\"log-arrow-up\"></div>
                                <li class=\"eborder-top\">
                                    <a href=\"#\"><i class=\"icon_profile\"></i> Mon Profile</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon_mail_alt\"></i> Mes message</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"icon_chat_alt\"></i> Chat</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 286
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
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilOrganisme", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profileOrganisme", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_profile\"></i>
                                <span>Mon Profile</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>       
                     
                        <li>
                            <a class=\"\" href=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeFormateurs1", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_group\"></i>
                                <span>Mes Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeOrganismes1", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_building\"></i>
                                <span>Liste Organismes</span>
                            </a>
                        </li>

                          <li class=\"sub-menu\">
                            <a  href=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeInvit", array("name" => $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_mail_alt\"></i>
                                <span>Liste Invitations</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>
                         <li class=\"sub-menu\">
                            <a  href=\"";
        // line 340
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
\t\t\t\t\t<h3 class=\"page-header\"><i class=\"fa fa-user-md\"></i> Profile</h3>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-user-md\"></i><a href=\"index.html\">Profile</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
              <div class=\"row\">
                <!-- profile-widget -->
                <div class=\"col-lg-12\">
                    <div class=\"profile-widget profile-widget-info\">
                          <div class=\"panel-body\">
                            <div class=\"col-lg-2 col-sm-2\">
                              <h4>";
        // line 370
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "html", null, true);
        echo "</h4>               
                              <div class=\"follow-ava\">
                                  <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/ult1.png"), "html", null, true);
        echo "\" alt=\"\">
                              </div>
                              <h6>Administrator</h6>
                            </div>
                            <div class=\"col-lg-4 col-sm-4 follow-info\">
                                <p>Hello I’m ";
        // line 377
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "html", null, true);
        echo ", a leading expert in interactive and creative design.</p>
                                <p>";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t<p><i class=\"fa fa-twitter\">";
        // line 379
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "html", null, true);
        echo "</i></p>
                                <h6>
                                    <span><i class=\"icon_clock_alt\"></i>11:05 AM</span>
                                    <span><i class=\"icon_calendar\"></i>05.04.16</span>
                                    <span><i class=\"icon_pin_alt\"></i>TN</span>
                                </h6>
                            </div>
                            
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-sm-6 follow-info weather-category\">
                                      <ul>
                                          <li class=\"active\">
                                              
                                              <i class=\"fa fa-bell fa-2x\"> </i><br>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  Contrary to popular belief, Lorem Ipsum is not simply 
                                          </li>
\t\t\t\t\t\t\t\t\t\t   
                                      </ul>
                            </div>
\t\t\t\t\t\t\t
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class=\"row\">
                 <div class=\"col-lg-12\">
                    <section class=\"panel\">
                          <header class=\"panel-heading tab-bg-info\">
                              <ul class=\"nav nav-tabs\">
                                  <li class=\"active\">
                                      <a data-toggle=\"tab\" href=\"#profile\" active>
                                          <i class=\"icon-home\"></i>
                                          Profile
                                      </a>
                                  </li>
                                 
                                  <li class=\"\">
                                      <a data-toggle=\"tab\" href=\"#edit-profile\">
                                          <i class=\"icon-envelope\"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                                  
                                  
                                  
                                  <li class=\"\">
                                      <a data-toggle=\"tab\" href=\"#edit-password\">
                                          <i class=\"icon-envelope\"></i>
                                          Edit Password
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class=\"panel-body\">
                              <div class=\"tab-content\">

                                  <!-- profile -->
                                  <div id=\"profile\" class=\"tab-pane active\">
                                    <section class=\"panel\">
                                      <div class=\"bio-graph-heading\">
                                                Hello I’m Organisme.nom , a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                      </div>
                                      <div class=\"panel-body bio-graph-info\">
                                          <h1>Bio Graph</h1>
                                          <div class=\"row\">
                                              <div class=\"bio-row\">
                                                  <p><span>Nom </span>:";
        // line 446
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "adresse", array()), "html", null, true);
        echo " </p>
                                              </div>
                                              
                                             
                                             
                                              
                                              <div class=\"bio-row\">
                                                  <p><span>Site Web</span>: ";
        // line 453
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "siteWeb", array()), "html", null, true);
        echo "</p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Telephone </span>:  ";
        // line 456
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "telephone", array()), "html", null, true);
        echo "</p>
                                              </div>
                                            
                                              <div class=\"bio-row\">
                                                  <p><span>Email </span>: ";
        // line 460
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "email", array()), "html", null, true);
        echo "</p>
                                              </div>
                                              
                                                <div class=\"bio-row\">
                                               
                                                  <p><span>Description </span>: ";
        // line 465
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "description", array()), "html", null, true);
        echo "</p>
                                            
                                             </div>
                                                  <video width=\"600\">
                                                      <source src=\"\" type=\"video/mp4\">
                                                  </video>
                                          </div>
                                      </div>
                                    </section>
                                   
                                    
                                      <section>
                                          <div class=\"row\">                                              
                                          </div>
                                      </section>
                                  </div>
                                  
                                  <!-- edit Password -->
\t\t\t\t<div id=\"edit-password\" class=\"tab-pane active\" >
                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\">
                                              <h1> Edit Password</h1>
                                              <form class=\"form-horizontal\" role=\"form\">                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Mot de passe actuel</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"f-pass\" placeholder=\"Entez le mot de passe actuel\">
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Nouveau mot de passe</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"l-pass\" placeholder=\"Entrez le nouveau mot de passe\">
                                                      </div>
                                                  </div>
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Retapez la mot de passe</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"l-pass\" placeholder=\"Retapez le nouveau mot de passe\">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-2 col-lg-10\">
                                                          <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                                          
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
\t\t\t\t\t<section>
                                          <div class=\"row\">                                              
                                          </div>
                                      </section>
                                  </div>
                              
                                  <!-- edit Country -->
\t\t\t\t<div id=\"edit-country\" class=\"tab-pane \" >
                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\">
                                              <h1> Edit Country</h1>
\t\t\t\t\t\t<div class=\"row\">\t  
                                                    <div class=\"col-lg-9 col-md-12\">
\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h2><i class=\"fa fa-map-marker red\"></i><strong>Countries</strong></h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body-map\">
\t\t\t\t\t\t\t\t<div id=\"map\" style=\"height:380px\"></div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
                                              <form class=\"form-horizontal\" role=\"form\">                                                  
                                                  <div class=\"form-group\">
                                                      
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"my-country\" placeholder=\" \">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-2 col-lg-10\">
                                                          <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                                          
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>

                                    <section>
                                        <div class=\"row\">                                              
                                        </div>
                                    </section>
\t\t\t\t\t\t\t\t\t  
                                </div>
\t\t\t\t\t\t\t\t  
                                  <!-- edit-profile -->
                                  <div id=\"edit-profile\" class=\"tab-pane active\" >
                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\" >
                                              <h1> Modifier Profile </h1>
                                              <form class=\"form-horizontal\" role=\"form\"> 
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Nom</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"nom\" value=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "nom", array()), "html", null, true);
        echo "\"  disabled=\"true\">
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Login</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"login\" value=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "login", array()), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                 
                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Email</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "email", array()), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Site Web</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"siteweb\" value=\" ";
        // line 597
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "siteWeb", array()), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Telephone</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"telephone\" value=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Organisme"]) ? $context["Organisme"] : $this->getContext($context, "Organisme")), "telephone", array()), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>

                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-2 col-lg-10\">
                                                          <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                                          <button type=\"button\" class=\"btn btn-danger\">Annuler</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      
      <script>
          \$(\".knob\").knob();
      </script>
</html>";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Organisme:ProfilOrganisme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 603,  748 => 597,  739 => 591,  728 => 583,  719 => 577,  604 => 465,  596 => 460,  589 => 456,  583 => 453,  571 => 446,  501 => 379,  497 => 378,  493 => 377,  485 => 372,  480 => 370,  447 => 340,  437 => 333,  427 => 326,  418 => 320,  407 => 312,  398 => 306,  375 => 286,  357 => 271,  352 => 269,  304 => 224,  280 => 203,  265 => 191,  250 => 179,  235 => 167,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  66 => 25,  61 => 23,  57 => 22,  52 => 20,  48 => 19,  42 => 16,  37 => 14,  28 => 8,  19 => 1,);
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
/*         <title>Profil Organisme</title>*/
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
/*                                     <span class="badge bg-important">6</span>*/
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
/*                                 <span class="badge bg-important">5</span>*/
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
/*                                     <img alt="" src="{{asset('bundles/moocmooc/css/profilformateur/img/esprit.PNG')}}">*/
/*                                 </span>*/
/*                                 <span class="username"> {{Organisme.nom}}</span>*/
/*                                 <b class="caret"></b>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended logout">*/
/*                                 <div class="log-arrow-up"></div>*/
/*                                 <li class="eborder-top">*/
/*                                     <a href="#"><i class="icon_profile"></i> Mon Profile</a>*/
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
/*                     <ul class="sidebar-menu">                */
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
/*                      */
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
/*                           <li class="sub-menu">*/
/*                             <a  href="{{path('mooc_mooc_ListeInvit', {'name':Organisme.nom,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_mail_alt"></i>*/
/*                                 <span>Liste Invitations</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>*/
/*                          <li class="sub-menu">*/
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
/*       <section id="main-content">*/
/*           <section class="wrapper">*/
/* 		  <div class="row">*/
/* 				<div class="col-lg-12">*/
/* 					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>*/
/* 					<ol class="breadcrumb">*/
/* 						<li><i class="fa fa-user-md"></i><a href="index.html">Profile</a></li>*/
/* 						*/
/* 					</ol>*/
/* 				</div>*/
/* 			</div>*/
/*               <div class="row">*/
/*                 <!-- profile-widget -->*/
/*                 <div class="col-lg-12">*/
/*                     <div class="profile-widget profile-widget-info">*/
/*                           <div class="panel-body">*/
/*                             <div class="col-lg-2 col-sm-2">*/
/*                               <h4>{{Organisme.nom}}</h4>               */
/*                               <div class="follow-ava">*/
/*                                   <img src="{{asset('bundles/moocmooc/css/profilformateur/img/ult1.png')}}" alt="">*/
/*                               </div>*/
/*                               <h6>Administrator</h6>*/
/*                             </div>*/
/*                             <div class="col-lg-4 col-sm-4 follow-info">*/
/*                                 <p>Hello I’m {{Organisme.nom }}, a leading expert in interactive and creative design.</p>*/
/*                                 <p>{{Organisme.email}}</p>*/
/* 								<p><i class="fa fa-twitter">{{Organisme.nom}}</i></p>*/
/*                                 <h6>*/
/*                                     <span><i class="icon_clock_alt"></i>11:05 AM</span>*/
/*                                     <span><i class="icon_calendar"></i>05.04.16</span>*/
/*                                     <span><i class="icon_pin_alt"></i>TN</span>*/
/*                                 </h6>*/
/*                             </div>*/
/*                             */
/* 							<div class="col-lg-2 col-sm-6 follow-info weather-category">*/
/*                                       <ul>*/
/*                                           <li class="active">*/
/*                                               */
/*                                               <i class="fa fa-bell fa-2x"> </i><br>*/
/* 											  */
/* 											  Contrary to popular belief, Lorem Ipsum is not simply */
/*                                           </li>*/
/* 										   */
/*                                       </ul>*/
/*                             </div>*/
/* 							*/
/*                           </div>*/
/*                     </div>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- page start-->*/
/*               <div class="row">*/
/*                  <div class="col-lg-12">*/
/*                     <section class="panel">*/
/*                           <header class="panel-heading tab-bg-info">*/
/*                               <ul class="nav nav-tabs">*/
/*                                   <li class="active">*/
/*                                       <a data-toggle="tab" href="#profile" active>*/
/*                                           <i class="icon-home"></i>*/
/*                                           Profile*/
/*                                       </a>*/
/*                                   </li>*/
/*                                  */
/*                                   <li class="">*/
/*                                       <a data-toggle="tab" href="#edit-profile">*/
/*                                           <i class="icon-envelope"></i>*/
/*                                           Edit Profile*/
/*                                       </a>*/
/*                                   </li>*/
/*                                   */
/*                                   */
/*                                   */
/*                                   <li class="">*/
/*                                       <a data-toggle="tab" href="#edit-password">*/
/*                                           <i class="icon-envelope"></i>*/
/*                                           Edit Password*/
/*                                       </a>*/
/*                                   </li>*/
/*                               </ul>*/
/*                           </header>*/
/*                           <div class="panel-body">*/
/*                               <div class="tab-content">*/
/* */
/*                                   <!-- profile -->*/
/*                                   <div id="profile" class="tab-pane active">*/
/*                                     <section class="panel">*/
/*                                       <div class="bio-graph-heading">*/
/*                                                 Hello I’m Organisme.nom , a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.*/
/*                                       </div>*/
/*                                       <div class="panel-body bio-graph-info">*/
/*                                           <h1>Bio Graph</h1>*/
/*                                           <div class="row">*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Nom </span>:{{Organisme.nom}} {{ Organisme.adresse}} </p>*/
/*                                               </div>*/
/*                                               */
/*                                              */
/*                                              */
/*                                               */
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Site Web</span>: {{ Organisme.siteWeb}}</p>*/
/*                                               </div>*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Telephone </span>:  {{ Organisme.telephone}}</p>*/
/*                                               </div>*/
/*                                             */
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Email </span>: {{ Organisme.email}}</p>*/
/*                                               </div>*/
/*                                               */
/*                                                 <div class="bio-row">*/
/*                                                */
/*                                                   <p><span>Description </span>: {{ Organisme.description}}</p>*/
/*                                             */
/*                                              </div>*/
/*                                                   <video width="600">*/
/*                                                       <source src="" type="video/mp4">*/
/*                                                   </video>*/
/*                                           </div>*/
/*                                       </div>*/
/*                                     </section>*/
/*                                    */
/*                                     */
/*                                       <section>*/
/*                                           <div class="row">                                              */
/*                                           </div>*/
/*                                       </section>*/
/*                                   </div>*/
/*                                   */
/*                                   <!-- edit Password -->*/
/* 				<div id="edit-password" class="tab-pane active" >*/
/*                                     <section class="panel">                                          */
/*                                           <div class="panel-body bio-graph-info">*/
/*                                               <h1> Edit Password</h1>*/
/*                                               <form class="form-horizontal" role="form">                                                  */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Mot de passe actuel</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="f-pass" placeholder="Entez le mot de passe actuel">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Nouveau mot de passe</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="l-pass" placeholder="Entrez le nouveau mot de passe">*/
/*                                                       </div>*/
/*                                                   </div>*/
/* 												  <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Retapez la mot de passe</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="l-pass" placeholder="Retapez le nouveau mot de passe">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   */
/*                                                   <div class="form-group">*/
/*                                                       <div class="col-lg-offset-2 col-lg-10">*/
/*                                                           <button type="submit" class="btn btn-primary">Sauvegarder</button>*/
/*                                                           */
/*                                                       </div>*/
/*                                                   </div>*/
/*                                               </form>*/
/*                                           </div>*/
/*                                       </section>*/
/* 					<section>*/
/*                                           <div class="row">                                              */
/*                                           </div>*/
/*                                       </section>*/
/*                                   </div>*/
/*                               */
/*                                   <!-- edit Country -->*/
/* 				<div id="edit-country" class="tab-pane " >*/
/*                                     <section class="panel">                                          */
/*                                           <div class="panel-body bio-graph-info">*/
/*                                               <h1> Edit Country</h1>*/
/* 						<div class="row">	  */
/*                                                     <div class="col-lg-9 col-md-12">*/
/* 					*/
/* 							<div class="panel panel-default">*/
/* 							<div class="panel-heading">*/
/* 							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>*/
/* 													*/
/* 							</div>*/
/* 							<div class="panel-body-map">*/
/* 								<div id="map" style="height:380px"></div>	*/
/* 							</div>*/
/* 							*/
/* 							</div>*/
/* 						</div>*/
/* 						</div>*/
/* 										*/
/*                                               <form class="form-horizontal" role="form">                                                  */
/*                                                   <div class="form-group">*/
/*                                                       */
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" id="my-country" placeholder=" ">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   */
/*                                                   <div class="form-group">*/
/*                                                       <div class="col-lg-offset-2 col-lg-10">*/
/*                                                           <button type="submit" class="btn btn-primary">Sauvegarder</button>*/
/*                                                           */
/*                                                       </div>*/
/*                                                   </div>*/
/*                                               </form>*/
/*                                           </div>*/
/*                                       </section>*/
/* */
/*                                     <section>*/
/*                                         <div class="row">                                              */
/*                                         </div>*/
/*                                     </section>*/
/* 									  */
/*                                 </div>*/
/* 								  */
/*                                   <!-- edit-profile -->*/
/*                                   <div id="edit-profile" class="tab-pane active" >*/
/*                                     <section class="panel">                                          */
/*                                           <div class="panel-body bio-graph-info" >*/
/*                                               <h1> Modifier Profile </h1>*/
/*                                               <form class="form-horizontal" role="form"> */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Nom</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" id="nom" value="{{Organisme.nom}}"  disabled="true">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Login</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" id="login" value="{{Organisme.login}}" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                  */
/*                                                   */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Email</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="email" class="form-control" id="email" value="{{Organisme.email}}" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Site Web</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" id="siteweb" value=" {{Organisme.siteWeb}}" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Telephone</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" id="telephone" value="{{Organisme.telephone}}" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/* */
/*                                                   <div class="form-group">*/
/*                                                       <div class="col-lg-offset-2 col-lg-10">*/
/*                                                           <button type="submit" class="btn btn-primary">Sauvegarder</button>*/
/*                                                           <button type="button" class="btn btn-danger">Annuler</button>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                               </form>*/
/*                                           </div>*/
/*                                       </section>*/
/*                                   </div>*/
/*                               </div>*/
/*                           </div>*/
/*                       </section>*/
/*                  </div>*/
/*               </div>*/
/* */
/*               <!-- page end-->*/
/*           </section>*/
/*       </section>*/
/*       <!--main content end-->*/
/*       */
/*       <script>*/
/*           $(".knob").knob();*/
/*       </script>*/
/* </html>*/
