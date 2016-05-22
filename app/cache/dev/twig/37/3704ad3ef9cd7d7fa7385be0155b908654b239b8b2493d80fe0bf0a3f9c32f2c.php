<?php

/* MoocMoocBundle:Question:modifierQuestion.html.twig */
class __TwigTemplate_62c2052d68755b4fbff4b8b340988cb9e60da91ea62654c04b73fdf3cdc7fc72 extends Twig_Template
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
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/favicon.png"), "html", null, true);
        echo "\">

        <title>Liste Chapitre</title>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/fullcalendar.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/widgets.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/jquery-ui-1.10.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        <link rel=\"shortcut icon\" href=\"../favicon\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/cssacceuilformateur/css/normalize.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/cssacceuilformateur/fonts/font-awesome-4.2.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/cssacceuilformateur/css/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/cssacceuilformateur/css/animate.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/cssacceuilformateur/css/mockup4.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/cssacceuilformateur/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>

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
                                    <span class=\"badge bg-important\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["nbaprec"]) ? $context["nbaprec"] : $this->getContext($context, "nbaprec")), "html", null, true);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu extended tasks-bar\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    <p class=\"blue\">Statistique de publication</p>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <div class=\"task-info\">
                                            <div class=\"desc\">pourcentage d'appreciation</div>
                                            <div class=\"percent\">";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["nbaprec"]) ? $context["nbaprec"] : $this->getContext($context, "nbaprec")), "html", null, true);
        echo "0%</div>
                                        </div>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["nbaprec"]) ? $context["nbaprec"] : $this->getContext($context, "nbaprec")), "html", null, true);
        echo "0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, (isset($context["nbaprec"]) ? $context["nbaprec"] : $this->getContext($context, "nbaprec")), "html", null, true);
        echo "0%\">
                                                <span class=\"sr-only\">50% Complete</span>
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <li class=\"external\">
                                    <a href=\"#\">Rmq: 100% appreciation vous deviendrez <br/> un membre du comité pédagogique</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox notificatoin end -->
                        <!-- alert notification start-->
                        <li id=\"alert_notificatoin_bar\" class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">

                                <i class=\"icon-bell-l\"></i>
                                <span class=\"badge bg-important\">";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["nbrInvit"]) ? $context["nbrInvit"] : $this->getContext($context, "nbrInvit")), "html", null, true);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu extended notification\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstinvit"]) ? $context["lstinvit"] : $this->getContext($context, "lstinvit")));
        foreach ($context['_seq'] as $context["_key"] => $context["linv"]) {
            // line 104
            echo "                                    <li>
                                        <a href=\"#\">
                                            <span class=\"label label-danger\"><i class=\"icon_book_alt\"></i></span> 
                                            <strong><span style=\"color:blue;font-size:14px;\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["linv"], "nomExp", array()), "html", null, true);
            echo "</span></strong> vous invite
                                            <span class=\"small italic pull-right\">";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["linv"], "dateInvit", array()), "m/d/Y"), "html", null, true);
            echo "</span>
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                <li>
                                    <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeinvitation", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">Voir toutes les invitations</a>
                                </li>
                            </ul>
                        </li>
                        <!-- alert notification end-->
                        <!-- user login dropdown start-->
                        <li class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <span class=\"profile-ava\">
                                    <img  alt=\"\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"50\" height=\"50\"/>
                                </span>
                                <span class=\"username\">";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
        echo "</span>
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu extended logout\">
                                <div class=\"log-arrow-up\"></div>
                                <li class=\"eborder-top\">
                                    <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profilformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
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
        // line 139
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
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_publiercourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/publier.png"), "html", null, true);
        echo "\">  Publier Cours</span>

                            </a>
                        </li>       
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listecourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_desktop\"></i>
                                <span> <img src=\"";
        // line 174
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
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeformateurbconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_genius\"></i>
                                <span><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/Formateurs.png"), "html", null, true);
        echo "\">   Liste Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeorganismeconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_piechart\"></i>
                                <span><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/organisme.png"), "html", null, true);
        echo "\">   Liste Organismes</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeinvitation", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_documents_alt\"></i>
                                <span><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/Demmande.png"), "html", null, true);
        echo "\">   Mes Demmandes</span>                               
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
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_modifier_question", array("idquestion" => (isset($context["idquestion"]) ? $context["idquestion"] : $this->getContext($context, "idquestion")), "listreponse" => (isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), "idquiz" => (isset($context["idquiz"]) ? $context["idquiz"] : $this->getContext($context, "idquiz")), "cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Question <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"question\" minlength=\"5\" type=\"text\" required />
                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse1 <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 0, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse1\" minlength=\"5\" type=\"text\" required /><br>
                                                    ";
        // line 243
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 0, array(), "array"), "etat", array()) == 0)) {
            // line 244
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 246
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 0, array(), "array"), "etat", array()) == 1)) {
            // line 247
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep1\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 250
        echo "                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse2 <span class=\"required\">*</span></label>

                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 1, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse2\" minlength=\"5\" type=\"text\" required /><br>

                                                    ";
        // line 258
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 1, array(), "array"), "etat", array()) == 0)) {
            // line 259
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 261
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 1, array(), "array"), "etat", array()) == 1)) {
            // line 262
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep2\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 265
        echo "                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse3 <span class=\"required\">*</span></label>

                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 2, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse3\" minlength=\"5\" type=\"text\" required /><br>
                                                    ";
        // line 272
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 2, array(), "array"), "etat", array()) == 0)) {
            // line 273
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 275
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 2, array(), "array"), "etat", array()) == 1)) {
            // line 276
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep3\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 279
        echo "                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Reponse4 <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <input value=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 3, array(), "array"), "rep", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"cname\" name=\"reponse4\" minlength=\"5\" type=\"text\" required /><br>
                                                    ";
        // line 285
        if (($this->getAttribute($this->getAttribute((isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 3, array(), "array"), "etat", array()) == 0)) {
            // line 286
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" value=\"0\" checked=\"checked\" required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" value=\"1\" required> Correcte <br>
                                                    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 288
(isset($context["listreponse"]) ? $context["listreponse"] : $this->getContext($context, "listreponse")), 3, array(), "array"), "etat", array()) == 1)) {
            // line 289
            echo "                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" value=\"0\"  required> Fausse<br>
                                                        <input  id=\"cname\" type=\"radio\" name=\"rep4\" checked=\"checked\" value=\"1\" required> Correcte <br>
                                                    ";
        }
        // line 292
        echo "                                                </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <div class=\"col-lg-offset-2 col-lg-10\">
                                                    <button class=\"btn btn-primary\" type=\"submit\">Modifier</button>                                                      
                                                        <a class=\"btn btn-danger\" href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_supprimer_question", array("idquestion" => (isset($context["idquestion"]) ? $context["idquestion"] : $this->getContext($context, "idquestion")), "idquiz" => (isset($context["idquiz"]) ? $context["idquiz"] : $this->getContext($context, "idquiz")), "cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
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
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/jquery-knob/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.sparkline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>

    <!--script for this page only-->
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/calendar-custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/assets/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/xcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/gdp-data.js"), "html", null, true);
        echo "\"></script>\t
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/sparklines.js"), "html", null, true);
        echo "\"></script>\t
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/charts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script>

                    //knob
                    \$(function () {
                        \$(\".knob\").knob({
                            'draw': function () {
                                \$(this.i).val(this.cv + '%')
                            }
                        })
                    });

                    //carousel
                    \$(document).ready(function () {
                        \$(\"#owl-slider\").owlCarousel({
                            navigation: true,
                            slideSpeed: 300,
                            paginationSpeed: 400,
                            singleItem: true

                        });
                    });

                    //custom select box

                    \$(function () {
                        \$('select.styled').customSelect();
                    });

                    /* ---------- Map ---------- */
                    \$(function () {
                        \$('#map').vectorMap({
                            map: 'world_mill_en',
                            series: {
                                regions: [{
                                        values: gdpData,
                                        scale: ['#000', '#000'],
                                        normalizeFunction: 'polynomial'
                                    }]
                            },
                            backgroundColor: '#eef3f7',
                            onLabelShow: function (e, el, code) {
                                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                            }
                        });
                    });

    </script>

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
        return array (  637 => 346,  633 => 345,  629 => 344,  625 => 343,  621 => 342,  617 => 341,  613 => 340,  609 => 339,  605 => 338,  601 => 337,  597 => 336,  593 => 335,  589 => 334,  585 => 333,  581 => 332,  577 => 331,  573 => 330,  567 => 327,  563 => 326,  559 => 325,  555 => 324,  551 => 323,  547 => 322,  543 => 321,  539 => 320,  535 => 319,  531 => 318,  508 => 298,  500 => 292,  495 => 289,  493 => 288,  489 => 286,  487 => 285,  483 => 284,  476 => 279,  471 => 276,  469 => 275,  465 => 273,  463 => 272,  459 => 271,  451 => 265,  446 => 262,  444 => 261,  440 => 259,  438 => 258,  433 => 256,  425 => 250,  420 => 247,  418 => 246,  414 => 244,  412 => 243,  408 => 242,  399 => 236,  392 => 232,  355 => 198,  350 => 196,  343 => 192,  338 => 190,  331 => 186,  326 => 184,  313 => 174,  308 => 172,  300 => 167,  295 => 165,  286 => 159,  263 => 139,  251 => 130,  240 => 124,  235 => 122,  223 => 113,  220 => 112,  210 => 108,  206 => 107,  201 => 104,  197 => 103,  190 => 99,  167 => 81,  161 => 78,  147 => 67,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  29 => 9,  19 => 1,);
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
/*         <link rel="shortcut icon" href="{{asset('bundles/moocmooc/css/profilformateur/img/favicon.png')}}">*/
/* */
/*         <title>Liste Chapitre</title>*/
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap.min.css')}}">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css')}}" rel="stylesheet" />*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/font-awesome.min.css')}}" rel="stylesheet" />    */
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />*/
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/profilformateur/css/owl.carousel.css')}}" type="text/css">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/profilformateur/css/fullcalendar.css')}}">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/widgets.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style-responsive.css')}}" rel="stylesheet" />*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">*/
/* */
/* */
/*         <link rel="shortcut icon" href="../favicon">*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/moocmooc/css/cssacceuilformateur/css/normalize.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/moocmooc/css/cssacceuilformateur/fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/moocmooc/css/cssacceuilformateur/css/demo.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/moocmooc/css/cssacceuilformateur/css/animate.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/moocmooc/css/cssacceuilformateur/css/mockup4.css')}}" />*/
/*         <script src="{{asset('bundles/moocmooc/css/cssacceuilformateur/js/modernizr.custom.js')}}"></script>*/
/* */
/*     </head>*/
/*     <body>*/
/*         <!-- container section start -->*/
/*         <section id="container" class="">*/
/*             <header class="header dark-bg">*/
/*                 <div class="toggle-nav">*/
/*                     <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>*/
/*                 </div>*/
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
/*                                     <span class="badge bg-important">{{nbaprec}}</span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended tasks-bar">*/
/*                                 <div class="notify-arrow notify-arrow-blue"></div>*/
/*                                 <li>*/
/*                                     <p class="blue">Statistique de publication</p>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <div class="task-info">*/
/*                                             <div class="desc">pourcentage d'appreciation</div>*/
/*                                             <div class="percent">{{nbaprec}}0%</div>*/
/*                                         </div>*/
/*                                         <div class="progress progress-striped active">*/
/*                                             <div class="progress-bar"  role="progressbar" aria-valuenow="{{nbaprec}}0" aria-valuemin="0" aria-valuemax="100" style="width: {{nbaprec}}0%">*/
/*                                                 <span class="sr-only">50% Complete</span>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="external">*/
/*                                     <a href="#">Rmq: 100% appreciation vous deviendrez <br/> un membre du comité pédagogique</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <!-- inbox notificatoin end -->*/
/*                         <!-- alert notification start-->*/
/*                         <li id="alert_notificatoin_bar" class="dropdown">*/
/*                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/* */
/*                                 <i class="icon-bell-l"></i>*/
/*                                 <span class="badge bg-important">{{nbrInvit}}</span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended notification">*/
/*                                 <div class="notify-arrow notify-arrow-blue"></div>*/
/*                                 {%for linv in lstinvit%}*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <span class="label label-danger"><i class="icon_book_alt"></i></span> */
/*                                             <strong><span style="color:blue;font-size:14px;">{{linv.nomExp}}</span></strong> vous invite*/
/*                                             <span class="small italic pull-right">{{linv.dateInvit|date("m/d/Y")}}</span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {%endfor%}*/
/*                                 <li>*/
/*                                     <a href="{{path('mooc_mooc_listeinvitation', {'cin':Formateur.cin})}}">Voir toutes les invitations</a>*/
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
/*                                     <a href="{{path('mooc_mooc_profilformateur', {'cin':Formateur.cin})}}"><i class="icon_profile"></i> Mon Profile</a>*/
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
/*                             <a class="" href="{{path('mooc_mooc_acceuilformateur', {'cin':Formateur.cin})}}">*/
/*                                 <i class="icon_house_alt"></i>*/
/*                                 <span>Menu</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="sub-menu">*/
/*                             <a href="{{path('mooc_mooc_publiercourformateur', {'cin':Formateur.cin})}}" class="">*/
/*                                 <i class="icon_document_alt"></i>*/
/*                                 <span><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/publier.png')}}">  Publier Cours</span>*/
/* */
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
/*                         <li class="sub-menu">*/
/*                             <a href="{{path('mooc_mooc_listeinvitation', {'cin':Formateur.cin})}}" class="">*/
/*                                 <i class="icon_documents_alt"></i>*/
/*                                 <span><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/Demmande.png')}}">   Mes Demmandes</span>                               */
/*                             </a>*/
/*                         </li>                       */
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
/*                                         <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="{{path ('mooc_mooc_modifier_question',{'idquestion':idquestion,'listreponse':listreponse,'idquiz':idquiz,'cin':Formateur.cin})}}">*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cname" class="control-label col-lg-2">Question <span class="required">*</span></label>*/
/*                                                 <div class="col-lg-10">*/
/*                                                     <input value="{{question}}" class="form-control" id="cname" name="question" minlength="5" type="text" required />*/
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
/*                                                         <a class="btn btn-danger" href="{{path ('mooc_mooc_supprimer_question',{'idquestion':idquestion,'idquiz':idquiz,'cin':Formateur.cin})}}"><i class="icon_close_alt2"></i></a>*/
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
/*   <!-- javascripts -->*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery-ui-1.10.4.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery-1.8.3.min.js')}}"></script>*/
/*     <script type="text/javascript" src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery-ui-1.9.2.custom.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/assets/jquery-knob/js/jquery.knob.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.sparkline.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/owl.carousel.js')}}" ></script>*/
/* */
/*     <!--script for this page only-->*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/calendar-custom.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.rateit.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.customSelect.min.js')}}" ></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/assets/chart-master/Chart.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/scripts.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/sparkline-chart.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/easy-pie-chart.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/xcharts.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.autosize.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.placeholder.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/gdp-data.js')}}"></script>	*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/morris.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/sparklines.js')}}"></script>	*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/charts.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.slimscroll.min.js')}}"></script>*/
/*     <script>*/
/* */
/*                     //knob*/
/*                     $(function () {*/
/*                         $(".knob").knob({*/
/*                             'draw': function () {*/
/*                                 $(this.i).val(this.cv + '%')*/
/*                             }*/
/*                         })*/
/*                     });*/
/* */
/*                     //carousel*/
/*                     $(document).ready(function () {*/
/*                         $("#owl-slider").owlCarousel({*/
/*                             navigation: true,*/
/*                             slideSpeed: 300,*/
/*                             paginationSpeed: 400,*/
/*                             singleItem: true*/
/* */
/*                         });*/
/*                     });*/
/* */
/*                     //custom select box*/
/* */
/*                     $(function () {*/
/*                         $('select.styled').customSelect();*/
/*                     });*/
/* */
/*                     /* ---------- Map ---------- *//* */
/*                     $(function () {*/
/*                         $('#map').vectorMap({*/
/*                             map: 'world_mill_en',*/
/*                             series: {*/
/*                                 regions: [{*/
/*                                         values: gdpData,*/
/*                                         scale: ['#000', '#000'],*/
/*                                         normalizeFunction: 'polynomial'*/
/*                                     }]*/
/*                             },*/
/*                             backgroundColor: '#eef3f7',*/
/*                             onLabelShow: function (e, el, code) {*/
/*                                 el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');*/
/*                             }*/
/*                         });*/
/*                     });*/
/* */
/*     </script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
