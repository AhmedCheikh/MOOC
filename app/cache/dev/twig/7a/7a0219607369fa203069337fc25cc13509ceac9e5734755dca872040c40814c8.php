<?php

/* MoocMoocBundle:Formateur:profilformateur.html.twig */
class __TwigTemplate_3d78051c1e6033fc1d183a9b284109e0168410f2ddc6862734ff6bc254e39e81 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>

        <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/favicon.png"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/cssprofilformateur.css"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/cssprofilformateur.css"), "html", null, true);
        echo "\">

        <title>Profil Formateur</title>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/styleprofilorganisme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>

    <body>
        <!-- container section start -->
        <section id=\"container\" class=\"\">


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
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/avatar-mini.jpg"), "html", null, true);
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
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/avatar-mini2.jpg"), "html", null, true);
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
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/avatar-mini3.jpg"), "html", null, true);
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
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/avatar-mini4.jpg"), "html", null, true);
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
                                <span class=\"badge bg-important\">7</span>
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
                                    <img  alt=\"\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"50\" height=\"50\"/>
                                </span>
                                <span class=\"username\">";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
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
        // line 268
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
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_publiercourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span><img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/publier.png"), "html", null, true);
        echo "\">  Publier Cours</span>
                                
                            </a>
                        </li>       
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listecourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_desktop\"></i>
                                <span> <img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/book.png"), "html", null, true);
        echo "\">  Liste Cour</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"\">Chapitre</a></li>
                                <li><a class=\"\" href=\"\">Vidéos</a></li>
                                <li><a class=\"\" href=\"\">Présentation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"\" href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeformateurbconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_genius\"></i>
                                <span><img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/Formateurs.png"), "html", null, true);
        echo "\">   Liste Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeorganismeconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_piechart\"></i>
                                <span><img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/organisme.png"), "html", null, true);
        echo "\">   Liste Organismes</span>
                            </a>
                        </li>

                        <li class=\"sub-menu\">
                            <a href=\"#\" class=\"\">
                                <i class=\"icon_documents_alt\"></i>
                                <span><img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/Demmande.png"), "html", null, true);
        echo "\">   Mes Demmandes</span>
                                
                            </a>
                        </li>
                        
                    </ul>

                </div>
            </aside>


            <!-- *********************************************************** -->


            <section id=\"main-content\">
                <section class=\"wrapper\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h3 class=\"page-header\"><i class=\"fa fa-user-md\"></i> Profile</h3>
                            <ol class=\"breadcrumb\">
                                <li><i class=\"fa fa-home\"></i><a href=\"\">Home</a></li>
                                <li><i class=\"icon_documents_alt\"></i>Pages</li>
                                <li><i class=\"fa fa-user-md\"></i>Profile</li>
                            </ol>
                        </div>
                    </div>
                    <div class=\"row\">
                        <!-- profile-widget -->
                        <div class=\"col-lg-12\">
                            <div class=\"profile-widget profile-widget-info\">
                                <div class=\"panel-body\">
                                    <div class=\"col-lg-2 col-sm-2\">
                                        <h4>";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
        echo "</h4>               
                                        <div class=\"follow-ava\">
                                            <img  alt=\"\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"50\" height=\"50\"/>
                                        </div>
                                        <h6>Formateur</h6>
                                    </div>
                                    <div class=\"col-lg-4 col-sm-4 follow-info\">
                                        <p>Salut je m'appelle ";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
        echo " et je suis un formateur chez mooc j'ai des tutos mobile j'aspère que les aprrécier</p>
                                        <p>";
        // line 368
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "email", array()), "html", null, true);
        echo "</p>
                                        <p>suivez mooc sur <i class=\"fa fa-twitter\">mooc</i></p>
                                        <h6>
                                            <span><i class=\"icon_clock_alt\"></i>11:05 AM</span>
                                            <span><i class=\"icon_calendar\"></i>25.10.13</span>
                                            <span><i class=\"icon_pin_alt\"></i>Tunisie</span>
                                        </h6>
                                    </div>

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
                                            <a data-toggle=\"tab\" href=\"#\">
                                                <i class=\"icon-home\"></i>
                                                Mes appréciations
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle=\"tab\" href=\"#profile\">
                                                <i class=\"icon-user\"></i>
                                                Profile
                                            </a>
                                        </li>
                                        <li class=\"\">
                                            <a data-toggle=\"tab\" href=\"#edit-profile\">
                                                <i class=\"icon-envelope\"></i>
                                                Editer Profile
                                            </a>
                                        </li>
                                    </ul>
                                </header>
                                <div class=\"panel-body\">
                                    <div class=\"tab-content\">
                                        <div id=\"recent-activity\" class=\"tab-pane active\">
                                            <div class=\"profile-activity\">                                          
                                                <div class=\"act-time\">                                      
                                                    <div class=\"activity-body act-in\">
                                                        <span class=\"arrow\"></span>
                                                        <div class=\"text\">
                                                            <a href=\"#\" class=\"activity-img\"><img class=\"avatar\" src=\"img/chat-avatar.jpg\" alt=\"\"></a>
                                                            <p class=\"attribution\"><a href=\"#\">Cours</a> at 4:25pm, 30th Octmber 2014</p>
                                                            <p>c'est un cours android qui facilite l'apprentissage de ce language</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- profile -->
                                        <div id=\"profile\" class=\"tab-pane\">
                                            <section class=\"panel\">

                                                <div class=\"panel-body bio-graph-info\">
                                                    <h1>Mes données personnels</h1>
                                                    <div class=\"row\">
                                                        <div class=\"bio-row\">
                                                            <img  alt=\"\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"200\" height=\"250\"/>
                                                        </div>
                                                        <div class=\"bio-row\">
                                                            <p><span>cin:</span> ";
        // line 434
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()), "html", null, true);
        echo "</p>
                                                        </div>                                   
                                                        <div class=\"bio-row\">
                                                            <p><span>prenom: </span> ";
        // line 437
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo "</p>
                                                        </div>                                              
                                                        <div class=\"bio-row\">
                                                            <p><span>email:</span> ";
        // line 440
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "email", array()), "html", null, true);
        echo "</p>
                                                        </div>
                                                        <div class=\"bio-row\">
                                                            <p><span>Email:</span> ";
        // line 443
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "Email", array()), "html", null, true);
        echo "</p>
                                                        </div>
                                                        <div class=\"bio-row\">
                                                            <p><span>login:</span> ";
        // line 446
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "login", array()), "html", null, true);
        echo "</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                            <section>
                                                <div class=\"row\">                                              
                                                </div>
                                            </section>
                                        </div>
                                        <!-- edit-profile -->
                                        <div id=\"edit-profile\" class=\"tab-pane\">
                                            <section class=\"panel\">
                                                <div class=\"bio-graph-heading\">
                                                Vous devez Bien remplir tous le formulaire en indiquant des informations correctes
                                                </div>
                                                <div class=\"panel-body bio-graph-info\">
                                                    <h1> Profile Info</h1>
                                                    <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profediterprofile", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">                                                  
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">cin</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"cin\" value=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled=\"true\" id=\"f-name\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">nom</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"nom\" value=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"l-name\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">Prenom</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"prenom\" value=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"l-name\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">Email</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"email\" name=\"email\" value=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "email", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"c-name\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">Avatar</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"file\" name=\"avatar\" >
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">login</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"login\" value=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "login", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">password</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"password\" value=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "password", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"mobile\" placeholder=\" \">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <div class=\"col-lg-offset-2 col-lg-10\">
                                                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                                                                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
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
                </section>
            </section>

            <!-- *********************************************************** -->
        </section>

        <!-- javascripts -->

        <script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- nicescroll -->
        <script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <!--custome script for all page-->
        <script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/scripts.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Formateur:profilformateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 538,  706 => 536,  702 => 535,  697 => 533,  693 => 532,  663 => 505,  654 => 499,  639 => 487,  630 => 481,  621 => 475,  612 => 469,  605 => 465,  583 => 446,  577 => 443,  571 => 440,  565 => 437,  559 => 434,  553 => 431,  487 => 368,  481 => 367,  473 => 362,  466 => 360,  431 => 328,  421 => 321,  416 => 319,  409 => 315,  404 => 313,  391 => 303,  386 => 301,  378 => 296,  373 => 294,  364 => 288,  341 => 268,  321 => 253,  316 => 251,  247 => 185,  232 => 173,  217 => 161,  202 => 149,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/* */
/*         <link rel="shortcut icon" href="{{asset('bundles/moocmooc/css/profilformateur/img/favicon.png')}}">*/
/*         <link rel="shortcut icon" href="{{asset('bundles/moocmooc/css/profilformateur/css/cssprofilformateur.css')}}">*/
/*         <link rel="shortcut icon" href="{{asset('bundles/moocmooc/css/profilformateur/js/jquery-1.10.2.min.js')}}">*/
/*         <link rel="shortcut icon" href="{{asset('bundles/moocmooc/css/profilformateur/css/cssprofilformateur.css')}}">*/
/* */
/*         <title>Profil Formateur</title>*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/styleprofilorganisme.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style.css')}}" rel="stylesheet">	*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style-responsive.css')}}" rel="stylesheet"> */
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/*         <!-- container section start -->*/
/*         <section id="container" class="">*/
/* */
/* */
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
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/avatar-mini.jpg')}}"></span>*/
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
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/avatar-mini2.jpg')}}"></span>*/
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
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/avatar-mini3.jpg')}}"></span>*/
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
/*                                         <span class="photo"><img alt="avatar" src="{{asset('bundles/moocmooc/css/profilformateur/img/avatar-mini4.jpg')}}"></span>*/
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
/*                                 <span class="badge bg-important">7</span>*/
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
/*                                     <img  alt="" src="{{asset('uploads/uploads/'~Formateur.avatar)}}" width="50" height="50"/>*/
/*                                 </span>*/
/*                                 <span class="username">{{Formateur.prenom}} {{Formateur.nom}}</span>*/
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
/*                      <ul class="sidebar-menu">                */
/*                         <li class="active">*/
/*                             <a class="" href="{{path('mooc_mooc_acceuilformateur', {'cin':Formateur.cin})}}">*/
/*                                 <i class="icon_house_alt"></i>*/
/*                                 <span>Menu</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="sub-menu">*/
/*                             <a href="{{path('mooc_mooc_publiercourformateur', {'cin':Formateur.cin})}}" class="">*/
/*                                 <i class="icon_document_alt"></i>*/
/*                                 <span><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/publier.png')}}">  Publier Cours</span>*/
/*                                 */
/*                             </a>*/
/*                         </li>       */
/*                         <li class="sub-menu">*/
/*                             <a href="{{path('mooc_mooc_listecourformateur', {'cin':Formateur.cin})}}" class="">*/
/*                                 <i class="icon_desktop"></i>*/
/*                                 <span> <img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/book.png')}}">  Liste Cour</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                             <ul class="sub">*/
/*                                 <li><a class="" href="">Chapitre</a></li>*/
/*                                 <li><a class="" href="">Vidéos</a></li>*/
/*                                 <li><a class="" href="">Présentation</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="" href="{{path('mooc_mooc_listeformateurbconnect', {'cin':Formateur.cin})}}">*/
/*                                 <i class="icon_genius"></i>*/
/*                                 <span><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/Formateurs.png')}}">   Liste Formateurs</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>                     */
/*                             <a class="" href="{{path('mooc_mooc_listeorganismeconnect', {'cin':Formateur.cin})}}">*/
/*                                 <i class="icon_piechart"></i>*/
/*                                 <span><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/organisme.png')}}">   Liste Organismes</span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         <li class="sub-menu">*/
/*                             <a href="#" class="">*/
/*                                 <i class="icon_documents_alt"></i>*/
/*                                 <span><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/Demmande.png')}}">   Mes Demmandes</span>*/
/*                                 */
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/* */
/*                 </div>*/
/*             </aside>*/
/* */
/* */
/*             <!-- *********************************************************** -->*/
/* */
/* */
/*             <section id="main-content">*/
/*                 <section class="wrapper">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>*/
/*                             <ol class="breadcrumb">*/
/*                                 <li><i class="fa fa-home"></i><a href="">Home</a></li>*/
/*                                 <li><i class="icon_documents_alt"></i>Pages</li>*/
/*                                 <li><i class="fa fa-user-md"></i>Profile</li>*/
/*                             </ol>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <!-- profile-widget -->*/
/*                         <div class="col-lg-12">*/
/*                             <div class="profile-widget profile-widget-info">*/
/*                                 <div class="panel-body">*/
/*                                     <div class="col-lg-2 col-sm-2">*/
/*                                         <h4>{{Formateur.prenom}} {{Formateur.nom}}</h4>               */
/*                                         <div class="follow-ava">*/
/*                                             <img  alt="" src="{{asset('uploads/uploads/'~Formateur.avatar)}}" width="50" height="50"/>*/
/*                                         </div>*/
/*                                         <h6>Formateur</h6>*/
/*                                     </div>*/
/*                                     <div class="col-lg-4 col-sm-4 follow-info">*/
/*                                         <p>Salut je m'appelle {{Formateur.prenom}} {{Formateur.nom}} et je suis un formateur chez mooc j'ai des tutos mobile j'aspère que les aprrécier</p>*/
/*                                         <p>{{Formateur.email}}</p>*/
/*                                         <p>suivez mooc sur <i class="fa fa-twitter">mooc</i></p>*/
/*                                         <h6>*/
/*                                             <span><i class="icon_clock_alt"></i>11:05 AM</span>*/
/*                                             <span><i class="icon_calendar"></i>25.10.13</span>*/
/*                                             <span><i class="icon_pin_alt"></i>Tunisie</span>*/
/*                                         </h6>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- page start-->*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <section class="panel">*/
/*                                 <header class="panel-heading tab-bg-info">*/
/*                                     <ul class="nav nav-tabs">*/
/*                                         <li class="active">*/
/*                                             <a data-toggle="tab" href="#">*/
/*                                                 <i class="icon-home"></i>*/
/*                                                 Mes appréciations*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a data-toggle="tab" href="#profile">*/
/*                                                 <i class="icon-user"></i>*/
/*                                                 Profile*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <a data-toggle="tab" href="#edit-profile">*/
/*                                                 <i class="icon-envelope"></i>*/
/*                                                 Editer Profile*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </header>*/
/*                                 <div class="panel-body">*/
/*                                     <div class="tab-content">*/
/*                                         <div id="recent-activity" class="tab-pane active">*/
/*                                             <div class="profile-activity">                                          */
/*                                                 <div class="act-time">                                      */
/*                                                     <div class="activity-body act-in">*/
/*                                                         <span class="arrow"></span>*/
/*                                                         <div class="text">*/
/*                                                             <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>*/
/*                                                             <p class="attribution"><a href="#">Cours</a> at 4:25pm, 30th Octmber 2014</p>*/
/*                                                             <p>c'est un cours android qui facilite l'apprentissage de ce language</p>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!-- profile -->*/
/*                                         <div id="profile" class="tab-pane">*/
/*                                             <section class="panel">*/
/* */
/*                                                 <div class="panel-body bio-graph-info">*/
/*                                                     <h1>Mes données personnels</h1>*/
/*                                                     <div class="row">*/
/*                                                         <div class="bio-row">*/
/*                                                             <img  alt="" src="{{asset('uploads/uploads/'~Formateur.avatar)}}" width="200" height="250"/>*/
/*                                                         </div>*/
/*                                                         <div class="bio-row">*/
/*                                                             <p><span>cin:</span> {{Formateur.cin}}</p>*/
/*                                                         </div>                                   */
/*                                                         <div class="bio-row">*/
/*                                                             <p><span>prenom: </span> {{Formateur.prenom}}</p>*/
/*                                                         </div>                                              */
/*                                                         <div class="bio-row">*/
/*                                                             <p><span>email:</span> {{Formateur.email}}</p>*/
/*                                                         </div>*/
/*                                                         <div class="bio-row">*/
/*                                                             <p><span>Email:</span> {{Formateur.Email}}</p>*/
/*                                                         </div>*/
/*                                                         <div class="bio-row">*/
/*                                                             <p><span>login:</span> {{Formateur.login}}</p>*/
/*                                                         </div>*/
/* */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </section>*/
/*                                             <section>*/
/*                                                 <div class="row">                                              */
/*                                                 </div>*/
/*                                             </section>*/
/*                                         </div>*/
/*                                         <!-- edit-profile -->*/
/*                                         <div id="edit-profile" class="tab-pane">*/
/*                                             <section class="panel">*/
/*                                                 <div class="bio-graph-heading">*/
/*                                                 Vous devez Bien remplir tous le formulaire en indiquant des informations correctes*/
/*                                                 </div>*/
/*                                                 <div class="panel-body bio-graph-info">*/
/*                                                     <h1> Profile Info</h1>*/
/*                                                     <form class="form-horizontal" role="form" action="{{path('mooc_mooc_profediterprofile', {'cin':Formateur.cin})}}" method="post" enctype="multipart/form-data">                                                  */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-lg-2 control-label">cin</label>*/
/*                                                             <div class="col-lg-6">*/
/*                                                                 <input type="text" name="cin" value="{{Formateur.cin}}" class="form-control" disabled="true" id="f-name" placeholder=" ">*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-lg-2 control-label">nom</label>*/
/*                                                             <div class="col-lg-6">*/
/*                                                                 <input type="text" name="nom" value="{{Formateur.nom}}" class="form-control" id="l-name" placeholder=" ">*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-lg-2 control-label">Prenom</label>*/
/*                                                             <div class="col-lg-6">*/
/*                                                                 <input type="text" name="prenom" value="{{Formateur.prenom}}" class="form-control" id="l-name" placeholder=" ">*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-lg-2 control-label">Email</label>*/
/*                                                             <div class="col-lg-6">*/
/*                                                                 <input type="email" name="email" value="{{Formateur.email}}" class="form-control" id="c-name" placeholder=" ">*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-lg-2 control-label">Avatar</label>*/
/*                                                             <div class="col-lg-6">*/
/*                                                                 <input type="file" name="avatar" >*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-lg-2 control-label">login</label>*/
/*                                                             <div class="col-lg-6">*/
/*                                                                 <input type="text" name="login" value="{{Formateur.login}}" class="form-control" id="email" placeholder=" ">*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-lg-2 control-label">password</label>*/
/*                                                             <div class="col-lg-6">*/
/*                                                                 <input type="text" name="password" value="{{Formateur.password}}" class="form-control" id="mobile" placeholder=" ">*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <div class="col-lg-offset-2 col-lg-10">*/
/*                                                                 <button type="submit" class="btn btn-primary">Modifier</button>*/
/*                                                                 <button type="reset" class="btn btn-danger">Cancel</button>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </form>*/
/*                                                 </div>*/
/*                                             </section>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </section>*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/*             </section>*/
/* */
/*             <!-- *********************************************************** -->*/
/*         </section>*/
/* */
/*         <!-- javascripts -->*/
/* */
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.js')}}"></script>*/
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/bootstrap.min.js')}}"></script>*/
/*         <!-- nicescroll -->*/
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.nicescroll.js')}}"></script>*/
/*         <!--custome script for all page-->*/
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/scripts.js')}}"></script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
