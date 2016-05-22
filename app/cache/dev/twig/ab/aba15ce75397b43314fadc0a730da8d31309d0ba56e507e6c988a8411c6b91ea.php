<?php

/* MoocMoocBundle:Formateur:listecourformateur.html.twig */
class __TwigTemplate_9fb651abed561849a65997837c45082b3c60339fa63e07542204d387369df353 extends Twig_Template
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
                                    <span class=\"badge bg-important\">";
        // line 62
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
        // line 73
        echo twig_escape_filter($this->env, (isset($context["nbaprec"]) ? $context["nbaprec"] : $this->getContext($context, "nbaprec")), "html", null, true);
        echo "0%</div>
                                        </div>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"";
        // line 76
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
        // line 94
        echo twig_escape_filter($this->env, (isset($context["nbrInvit"]) ? $context["nbrInvit"] : $this->getContext($context, "nbrInvit")), "html", null, true);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu extended notification\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstinvit"]) ? $context["lstinvit"] : $this->getContext($context, "lstinvit")));
        foreach ($context['_seq'] as $context["_key"] => $context["linv"]) {
            // line 99
            echo "                                    <li>
                                        <a href=\"#\">
                                            <span class=\"label label-danger\"><i class=\"icon_book_alt\"></i></span> 
                                            <strong><span style=\"color:blue;font-size:14px;\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["linv"], "nomExp", array()), "html", null, true);
            echo "</span></strong> vous invite
                                            <span class=\"small italic pull-right\">";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["linv"], "dateInvit", array()), "m/d/Y"), "html", null, true);
            echo "</span>
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                                <li>
                                    <a href=\"";
        // line 108
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
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"50\" height=\"50\"/>
                                </span>
                                <span class=\"username\">";
        // line 119
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
        // line 125
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
        // line 134
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
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_publiercourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/publier.png"), "html", null, true);
        echo "\">  Publier Cours</span>

                            </a>
                        </li>       
                        <li class=\"sub-menu\">
                            <a href=\"#\" class=\"\">
                                <i class=\"icon_desktop\"></i>
                                <span> <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/book.png"), "html", null, true);
        echo "\">  Liste Cour</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listecourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">Liste cour</a></li>
                                <li><a class=\"\" href=\"\">Chapitre</a></li>
                                <li><a class=\"\" href=\"\">Vidéos</a></li>
                                <li><a class=\"\" href=\"\">Présentation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"\" href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeformateurbconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_genius\"></i>
                                <span><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/Formateurs.png"), "html", null, true);
        echo "\">   Liste Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeorganismeconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_piechart\"></i>
                                <span><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/organisme.png"), "html", null, true);
        echo "\">   Liste Organismes</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeinvitation", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_documents_alt\"></i>
                                <span><img src=\"";
        // line 194
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
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i>Formateur ";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()), "html", null, true);
        echo "</h3>
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
                                    Gestion Cour
                                </header>
                                ";
        // line 230
        echo "                                <div class=\"main\">
                                    <div class=\"shop_top\">
                                        <div class=\"container\">
                                            <div class=\"row ex_box\">
                                                <table class=\"table table-striped table-advance table-hover\">
                                                    <tbody>
                                                        <tr>

                                                            <th><i class=\"icon_profile\"></i><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/idc.png"), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "idcours", "a.idcours");
        echo "</th>
                                                            <th";
        // line 239
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.nomCours"), "method")) {
            echo " class=\"sorted\"";
        }
        echo "><i class=\"icon_calendar\"></i><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/nomc.png"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "nomCours", "a.nomCours");
        echo "</th>                   
                                                            <th><i class=\"icon_mail_alt\"></i><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/cinf.png"), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "cinformateur", "a.cinformateur");
        echo "</th>
                                                            <th><i class=\"icon_pin_alt\"></i><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/quizid.png"), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "idQuiz", "a.idQuiz");
        echo "</th>
                                                            <th><i class=\"icon_mobile\"></i><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/descrip.png"), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "description", "a.description");
        echo "</th>
                                                            <th><i class=\"icon_cogs\"></i><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/dific.png"), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "difficulte", "a.difficulte");
        echo "</th>
                                                            <th><i class=\"icon_cogs\"></i><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/objec.png"), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "objectif", "a.objectif");
        echo "</th>
                                                            <th><i class=\"icon_cogs\"></i><img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/eta.png"), "html", null, true);
        echo "\"> ";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "EtatVideo", "a.EtatVideo");
        echo "</th>
                                                        </tr>

                                                        ";
        // line 249
        echo "                                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 250
            echo "                                                            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                                                                <td>";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "idcours", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomCours", array()), "html", null, true);
            echo "</td>  
                                                                <td>";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "cinformateur", array()), "cin", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "idquiz", array()), "id", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "description", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "difficulte", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "objectif", array()), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "etat", array()), "html", null, true);
            echo "</td>
                                                                <td>
                                                                    <div class=\"btn-group\">
                                                                        <a class=\"btn btn-primary\" href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listechapitre", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()), "id" => $this->getAttribute($context["l"], "idcours", array()))), "html", null, true);
            echo "\"><i class=\"icon_plus_alt2\"></i></a>
                                                                         <a class=\"btn btn-success\" href=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_updateCours", array("id" => $this->getAttribute($context["l"], "idcours", array()))), "html", null, true);
            echo "\"><i class=\"icon_check_alt2\"></i></a>
                                                                         <a class=\"btn btn-danger\" href=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_delCours", array("id" => $this->getAttribute($context["l"], "idcours", array()))), "html", null, true);
            echo "\"><i class=\"icon_close_alt2\"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <div class=\"col-md-4 team1\">
                                                            <div class=\"img_section magnifier2\">
                                                                <a class=\"fancybox\" href=\"#\" data-fancybox-group=\"gallery\" title=\"formateur mooc\">
                                                                    <video width=\"320\" height=\"240\" controls>
                                                                        <source src=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/video/" . $this->getAttribute($context["l"], "video", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "video", array()), "html", null, true);
            echo "\" type=\"video/mp4\"><span> </span>
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                    <div class=\"img_section_txt\">
                                                                        ";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "video", array()), "html", null, true);
            echo "              
                                                                    </div>
                                                                </a></div><br/><br/>
                                                        </div>


                                                        ";
            // line 287
            echo "                                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                                    </tbody>
                                                </table>
                                                ";
        // line 291
        echo "                                                <div class=\"navigation\">
                                                    ";
        // line 292
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                                                </div>
                                                ";
        // line 295
        echo "
                                            </div>
                                        </div>
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
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- nicescroll -->
        <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <!--custome script for all page-->
        <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/scripts.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Formateur:listecourformateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 318,  566 => 316,  562 => 315,  557 => 313,  553 => 312,  534 => 295,  529 => 292,  526 => 291,  522 => 288,  508 => 287,  499 => 275,  490 => 271,  479 => 263,  475 => 262,  471 => 261,  465 => 258,  461 => 257,  457 => 256,  453 => 255,  449 => 254,  445 => 253,  441 => 252,  437 => 251,  430 => 250,  412 => 249,  404 => 245,  398 => 244,  392 => 243,  386 => 242,  380 => 241,  374 => 240,  364 => 239,  358 => 238,  348 => 230,  327 => 209,  309 => 194,  304 => 192,  297 => 188,  292 => 186,  285 => 182,  280 => 180,  270 => 173,  263 => 169,  253 => 162,  248 => 160,  239 => 154,  216 => 134,  204 => 125,  193 => 119,  188 => 117,  176 => 108,  173 => 107,  163 => 103,  159 => 102,  154 => 99,  150 => 98,  143 => 94,  120 => 76,  114 => 73,  100 => 62,  58 => 23,  54 => 22,  49 => 20,  45 => 19,  39 => 16,  34 => 14,  19 => 1,);
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
/*                             <a href="#" class="">*/
/*                                 <i class="icon_desktop"></i>*/
/*                                 <span> <img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/book.png')}}">  Liste Cour</span>*/
/*                                 <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                             <ul class="sub">*/
/*                                 <li><a class="" href="{{path('mooc_mooc_listecourformateur', {'cin':Formateur.cin})}}">Liste cour</a></li>*/
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
/*                             <h3 class="page-header"><i class="fa fa-laptop"></i>Formateur {{Formateur.cin}}</h3>*/
/*                             <ol class="breadcrumb">*/
/*                                 <li><i class="fa fa-home"></i><a href="#">Acceuil</a></li>*/
/*                                 <li><i class="fa fa-laptop"></i>Profil</li>						  	*/
/*                             </ol>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- Today status end -->*/
/* */
/* */
/* */
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <section class="panel">*/
/*                                 <header class="panel-heading">*/
/*                                     Gestion Cour*/
/*                                 </header>*/
/*                                 {# <div class="count">*/
/*                                     {{ pagination.getTotalItemCount }}*/
/*                                 </div>#}*/
/*                                 <div class="main">*/
/*                                     <div class="shop_top">*/
/*                                         <div class="container">*/
/*                                             <div class="row ex_box">*/
/*                                                 <table class="table table-striped table-advance table-hover">*/
/*                                                     <tbody>*/
/*                                                         <tr>*/
/* */
/*                                                             <th><i class="icon_profile"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/idc.png')}}"> {{knp_pagination_sortable(pagination, 'idcours', 'a.idcours') }}</th>*/
/*                                                             <th{% if pagination.isSorted('a.nomCours') %} class="sorted"{% endif %}><i class="icon_calendar"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/nomc.png')}}">{{knp_pagination_sortable(pagination, 'nomCours', 'a.nomCours') }}</th>                   */
/*                                                             <th><i class="icon_mail_alt"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/cinf.png')}}"> {{knp_pagination_sortable(pagination, 'cinformateur', 'a.cinformateur') }}</th>*/
/*                                                             <th><i class="icon_pin_alt"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/quizid.png')}}"> {{knp_pagination_sortable(pagination, 'idQuiz', 'a.idQuiz') }}</th>*/
/*                                                             <th><i class="icon_mobile"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/descrip.png')}}"> {{knp_pagination_sortable(pagination, 'description', 'a.description') }}</th>*/
/*                                                             <th><i class="icon_cogs"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/dific.png')}}"> {{knp_pagination_sortable(pagination, 'difficulte', 'a.difficulte') }}</th>*/
/*                                                             <th><i class="icon_cogs"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/objec.png')}}"> {{knp_pagination_sortable(pagination, 'objectif', 'a.objectif') }}</th>*/
/*                                                             <th><i class="icon_cogs"></i><img src="{{asset('bundles/moocmooc/css/profilformateur/img/icons/eta.png')}}"> {{knp_pagination_sortable(pagination, 'EtatVideo', 'a.EtatVideo') }}</th>*/
/*                                                         </tr>*/
/* */
/*                                                         {# table body #}*/
/*                                                         {% for l in pagination %}*/
/*                                                             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                                                                 <td>{{l.idcours}}</td>*/
/*                                                                 <td>{{l.nomCours}}</td>  */
/*                                                                 <td>{{l.cinformateur.cin}}</td>*/
/*                                                                 <td>{{l.idquiz.id}}</td>*/
/*                                                                 <td>{{l.description}}</td>*/
/*                                                                 <td>{{l.difficulte}}</td>*/
/*                                                                 <td>{{l.objectif}}</td>*/
/*                                                                 <td>{{l.etat}}</td>*/
/*                                                                 <td>*/
/*                                                                     <div class="btn-group">*/
/*                                                                         <a class="btn btn-primary" href="{{path('mooc_mooc_listechapitre', {'cin':Formateur.cin,'id':l.idcours})}}"><i class="icon_plus_alt2"></i></a>*/
/*                                                                          <a class="btn btn-success" href="{{path('mooc_mooc_updateCours', {'id':l.idcours})}}"><i class="icon_check_alt2"></i></a>*/
/*                                                                          <a class="btn btn-danger" href="{{path('mooc_mooc_delCours', {'id':l.idcours})}}"><i class="icon_close_alt2"></i></a>*/
/*                                                                     </div>*/
/*                                                                 </td>*/
/*                                                             </tr>*/
/*                                                         <div class="col-md-4 team1">*/
/*                                                             <div class="img_section magnifier2">*/
/*                                                                 <a class="fancybox" href="#" data-fancybox-group="gallery" title="formateur mooc">*/
/*                                                                     <video width="320" height="240" controls>*/
/*                                                                         <source src="{{asset('uploads/video/'~l.video)}}" title="{{l.video}}" type="video/mp4"><span> </span>*/
/*                                                                         Your browser does not support the video tag.*/
/*                                                                     </video>*/
/*                                                                     <div class="img_section_txt">*/
/*                                                                         {{l.video}}              */
/*                                                                     </div>*/
/*                                                                 </a></div><br/><br/>*/
/*                                                         </div>*/
/* */
/* */
/*                                                         {#<span sty="padding-left:10px;">*/
/*                                                             <video width="320" height="240" controls>*/
/*                                                                 <source src="{{asset('uploads/video/'~l.video)}}" title="{{l.video}}" type="video/mp4">*/
/*                                                                 Your browser does not support the video tag.*/
/*                                                             </video> <br/>*/
/*                                                         </span>#}*/
/*                                                     {% endfor %}*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/*                                                 {# display navigation #}*/
/*                                                 <div class="navigation">*/
/*                                                     {{ knp_pagination_render(pagination) }}*/
/*                                                 </div>*/
/*                                                 {#end navigation#}*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </section>   */
/*                         </div>*/
/*                     </div>*/
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
