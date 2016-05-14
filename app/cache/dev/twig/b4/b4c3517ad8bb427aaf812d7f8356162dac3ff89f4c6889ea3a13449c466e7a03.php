<?php

/* MoocMoocBundle:Question:modifierQuestion.html.twig */
class __TwigTemplate_f1eed4d83469f2dea3f8778e335f1985e6df5a59bbb39515bbcb9a2ad7a95319 extends Twig_Template
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
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Creative - Bootstrap 3 Responsive Admin Template\">
        <meta name=\"author\" content=\"GeeksLabs\">
        <meta name=\"keyword\" content=\"Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal\">
        <link rel=\"shortcut icon\" href=\"img/favicon.png\">

        <title>liste cour</title>

        <!-- Bootstrap CSS -->    
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style-responsive.css"), "html", null, true);
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
        // line 156
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
        // line 168
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
        // line 180
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
        // line 192
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
                                    <img alt=\"\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/avatar1_small.jpg"), "html", null, true);
        echo "\">
                                </span>
                                <span class=\"username\">Ben Amor Nour</span>
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
        // line 275
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
                            <a class=\"\" href=\"#\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span>Publier Cours</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>       
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_desktop\"></i>
                                <span>Liste Cour</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"";
        // line 314
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_listechapitre");
        echo "\">Chapitre</a></li>
                                <li><a class=\"\" href=\"";
        // line 315
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_listeQuiz");
        echo "\">Quiz</a></li>
                                <li><a class=\"\" href=\"buttons.html\">Vidéos</a></li>
                                <li><a class=\"\" href=\"grids.html\">Présentation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"\" href=\"widgets.html\">
                                <i class=\"icon_genius\"></i>
                                <span>Liste Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"#\">
                                <i class=\"icon_piechart\"></i>
                                <span>Liste Organismes</span>
                            </a>
                        </li>

                        <li class=\"sub-menu\">
                            <a href=\"#\" class=\"\">
                                <i class=\"icon_documents_alt\"></i>
                                <span>Integration</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
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
                    <!--overview start-->
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Profil Formateur</h3>
                            <ol class=\"breadcrumb\">
                                <li><i class=\"fa fa-home\"></i><a href=\"#\">Acceuil</a></li>
                                <li><i class=\"fa fa-laptop\"></i>Profil</li>\t\t\t\t\t\t  \t
                            </ol>
                        </div>
                    </div>

                    <!-- Today status end -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <section class=\"panel\">
                                <header class=\"panel-heading\">
                                    Ajouter Question
                                </header>

                                <div class=\"panel-body\">
                                    <div class=\"form\">
                                        <form class=\"form-validate form-horizontal\" id=\"feedback_form\" method=\"POST\" action=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_modifier_question", array("idquestion" => (isset($context["idquestion"]) ? $context["idquestion"] : $this->getContext($context, "idquestion")), "ques" => (isset($context["ques"]) ? $context["ques"] : $this->getContext($context, "ques")), "listreponse" => (isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")))), "html", null, true);
        echo "\">
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Question <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 376
        echo twig_escape_filter($this->env, (isset($context["ques"]) ? $context["ques"] : $this->getContext($context, "ques")), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"ques\" minlength=\"5\" type=\"text\" required />
                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse1 <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 0, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse1\" minlength=\"5\" type=\"text\" required /><br>
                                                    ";
        // line 383
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 0, array(), "array"), "etat", array()) == 0)) {
            // line 384
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 386
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 0, array(), "array"), "etat", array()) == 1)) {
            // line 387
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 390
        echo "                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse2 <span class=\"required\">*</span></label>

                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 1, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse2\" minlength=\"5\" type=\"text\" required /><br>

                                                    ";
        // line 398
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 1, array(), "array"), "etat", array()) == 0)) {
            // line 399
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 401
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 1, array(), "array"), "etat", array()) == 1)) {
            // line 402
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 405
        echo "                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse3 <span class=\"required\">*</span></label>

                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 2, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse3\" minlength=\"5\" type=\"text\" required /><br>
                                                    ";
        // line 412
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 2, array(), "array"), "etat", array()) == 0)) {
            // line 413
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 415
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 2, array(), "array"), "etat", array()) == 1)) {
            // line 416
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 419
        echo "                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse4 <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 3, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse4\" minlength=\"5\" type=\"text\" required /><br>
                                                    ";
        // line 425
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 3, array(), "array"), "etat", array()) == 0)) {
            // line 426
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 428
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 3, array(), "array"), "etat", array()) == 1)) {
            // line 429
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 432
        echo "                                                </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <div class=\"col-lg-offset-2 col-lg-10\">
                                                    <button class=\"btn btn-primary\" type=\"submit\">Modifier</button>                                                      
                                                        <a class=\"btn btn-danger\" href=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_supprimer_question", array("idquestion" => (isset($context["idquestion"]) ? $context["idquestion"] : $this->getContext($context, "idquestion")))), "html", null, true);
        echo "\"><i class=\"icon_close_alt2\"></i></a>
                                                   
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <br><br>
                </section>
            </section>
            <!--main content end-->
        </section>
        <!-- container section start -->

        <!-- javascripts -->

        <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- nicescroll -->
        <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <!--custome script for all page-->
        <script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/scripts.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Question:modifierQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 466,  588 => 464,  584 => 463,  579 => 461,  575 => 460,  550 => 438,  542 => 432,  537 => 429,  535 => 428,  531 => 426,  529 => 425,  525 => 424,  518 => 419,  513 => 416,  511 => 415,  507 => 413,  505 => 412,  501 => 411,  493 => 405,  488 => 402,  486 => 401,  482 => 399,  480 => 398,  475 => 396,  467 => 390,  462 => 387,  460 => 386,  456 => 384,  454 => 383,  450 => 382,  441 => 376,  434 => 372,  374 => 315,  370 => 314,  328 => 275,  308 => 258,  239 => 192,  224 => 180,  209 => 168,  194 => 156,  58 => 23,  54 => 22,  49 => 20,  45 => 19,  39 => 16,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">*/
/*         <meta name="author" content="GeeksLabs">*/
/*         <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">*/
/*         <link rel="shortcut icon" href="img/favicon.png">*/
/* */
/*         <title>liste cour</title>*/
/* */
/*         <!-- Bootstrap CSS -->    */
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <!-- bootstrap theme -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/*         <!--external css-->*/
/*         <!-- font icon -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*         <!-- Custom styles -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style.css')}}" rel="stylesheet">	*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
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
/*                                     <img alt="" src="{{asset('bundles/moocmooc/css/profilformateur/img/avatar1_small.jpg')}}">*/
/*                                 </span>*/
/*                                 <span class="username">Ben Amor Nour</span>*/
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
/*                             <a class="" href="#">*/
/*                                 <i class="icon_house_alt"></i>*/
/*                                 <span>Menu</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="sub-menu">*/
/*                             <a href="javascript:;" class="">*/
/*                                 <i class="icon_document_alt"></i>*/
/*                                 <span>Publier Cours</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>       */
/*                         <li class="sub-menu">*/
/*                             <a href="javascript:;" class="">*/
/*                                 <i class="icon_desktop"></i>*/
/*                                 <span>Liste Cour</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                             <ul class="sub">*/
/*                                 <li><a class="" href="{{path ('mooc_mooc_listechapitre')}}">Chapitre</a></li>*/
/*                                 <li><a class="" href="{{path ('mooc_mooc_listeQuiz')}}">Quiz</a></li>*/
/*                                 <li><a class="" href="buttons.html">Vidéos</a></li>*/
/*                                 <li><a class="" href="grids.html">Présentation</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="" href="widgets.html">*/
/*                                 <i class="icon_genius"></i>*/
/*                                 <span>Liste Formateurs</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>                     */
/*                             <a class="" href="#">*/
/*                                 <i class="icon_piechart"></i>*/
/*                                 <span>Liste Organismes</span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         <li class="sub-menu">*/
/*                             <a href="#" class="">*/
/*                                 <i class="icon_documents_alt"></i>*/
/*                                 <span>Integration</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/*                     <!-- sidebar menu end-->*/
/*                 </div>*/
/*             </aside>*/
/*             <!--sidebar end-->*/
/* */
/*             <!--main content start-->*/
/*             <section id="main-content">*/
/*                 <section class="wrapper">            */
/*                     <!--overview start-->*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <h3 class="page-header"><i class="fa fa-laptop"></i> Profil Formateur</h3>*/
/*                             <ol class="breadcrumb">*/
/*                                 <li><i class="fa fa-home"></i><a href="#">Acceuil</a></li>*/
/*                                 <li><i class="fa fa-laptop"></i>Profil</li>						  	*/
/*                             </ol>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- Today status end -->*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <section class="panel">*/
/*                                 <header class="panel-heading">*/
/*                                     Ajouter Question*/
/*                                 </header>*/
/* */
/*                                 <div class="panel-body">*/
/*                                     <div class="form">*/
/*                                         <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="{{path ('mooc_mooc_modifier_question',{'idquestion':idquestion,'ques':ques,'listreponse':listreponse})}}">*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cname" class="control-label col-lg-2">Question <span class="required">*</span></label>*/
/*                                                 <div class="col-lg-10">*/
/*                                                     <input value="{{ques}}" class="form-control" id="cname" name="ques" minlength="5" type="text" required />*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cname" class="control-label col-lg-2">Reponse1 <span class="required">*</span></label>*/
/*                                                 <div class="col-lg-10">*/
/*                                                     <input value="{{listreponse[0].rep}}" class="form-control" id="cname" name="reponse1" minlength="5" type="text" required /><br>*/
/*                                                     {% if (listreponse[0].etat) == 0 %}*/
/*                                                         <input  id="cname" type="radio" name="rep1" value="0" checked="checked" required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep1" value="1" required> Correcte <br>*/
/*                                                     {% elseif (listreponse[0].etat) == 1  %}*/
/*                                                         <input  id="cname" type="radio" name="rep1" value="0"  required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep1" checked="checked" value="1" required> Correcte <br>*/
/*                                                     {%endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cname" class="control-label col-lg-2">Reponse2 <span class="required">*</span></label>*/
/* */
/*                                                 <div class="col-lg-10">*/
/*                                                     <input value="{{listreponse[1].rep}}" class="form-control" id="cname" name="reponse2" minlength="5" type="text" required /><br>*/
/* */
/*                                                     {% if (listreponse[1].etat) == 0 %}*/
/*                                                         <input  id="cname" type="radio" name="rep2" value="0" checked="checked" required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep2" value="1" required> Correcte <br>*/
/*                                                     {% elseif (listreponse[1].etat) == 1  %}*/
/*                                                         <input  id="cname" type="radio" name="rep2" value="0"  required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep2" checked="checked" value="1" required> Correcte <br>*/
/*                                                     {%endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cname" class="control-label col-lg-2">Reponse3 <span class="required">*</span></label>*/
/* */
/*                                                 <div class="col-lg-10">*/
/*                                                     <input value="{{listreponse[2].rep}}" class="form-control" id="cname" name="reponse3" minlength="5" type="text" required /><br>*/
/*                                                     {% if (listreponse[2].etat) == 0 %}*/
/*                                                         <input  id="cname" type="radio" name="rep3" value="0" checked="checked" required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep3" value="1" required> Correcte <br>*/
/*                                                     {% elseif (listreponse[2].etat) == 1  %}*/
/*                                                         <input  id="cname" type="radio" name="rep3" value="0"  required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep3" checked="checked" value="1" required> Correcte <br>*/
/*                                                     {%endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cname" class="control-label col-lg-2">Reponse4 <span class="required">*</span></label>*/
/*                                                 <div class="col-lg-10">*/
/*                                                     <input value="{{listreponse[3].rep}}" class="form-control" id="cname" name="reponse4" minlength="5" type="text" required /><br>*/
/*                                                     {% if (listreponse[3].etat) == 0 %}*/
/*                                                         <input  id="cname" type="radio" name="rep4" value="0" checked="checked" required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep4" value="1" required> Correcte <br>*/
/*                                                     {% elseif (listreponse[3].etat) == 1  %}*/
/*                                                         <input  id="cname" type="radio" name="rep4" value="0"  required> Fausse<br>*/
/*                                                         <input  id="cname" type="radio" name="rep4" checked="checked" value="1" required> Correcte <br>*/
/*                                                     {%endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <div class="form-group">*/
/*                                                 <div class="col-lg-offset-2 col-lg-10">*/
/*                                                     <button class="btn btn-primary" type="submit">Modifier</button>                                                      */
/*                                                         <a class="btn btn-danger" href="{{path ('mooc_mooc_supprimer_question',{'idquestion':idquestion})}}"><i class="icon_close_alt2"></i></a>*/
/*                                                    */
/*                                                 </div>*/
/* */
/*                                             </div>*/
/*                                         </form>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </section>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <br><br>*/
/*                 </section>*/
/*             </section>*/
/*             <!--main content end-->*/
/*         </section>*/
/*         <!-- container section start -->*/
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