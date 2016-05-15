<?php

/* MoocMoocBundle:Formateur:profilformateur.html.twig */
class __TwigTemplate_e37a8d15eb0edd55b13611f4cf3a659f20364fbaabb2c089d6e2d5a4400bd43b extends Twig_Template
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
        <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD76-fmoj5PUCYgLQdmlaggCBAZ2QRpGMk\"></script>

        <script>
            function initialize() {
                var lat = document.getElementById('lat').value;
                var lng = document.getElementById('lng').value;
                var myCenter = new google.maps.LatLng(lat, lng);
                var mapProp = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                    animation: google.maps.Animation.BOUNCE
                });
                var infowindow = new google.maps.InfoWindow({
                    content: \"Bienvenu a MOOC ^_^\"
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });

                google.maps.event.addListener(map, 'click', function (event) {
                    placeMarker(event.latLng);
                });

                function placeMarker(location) {
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map,
                    });
                    var infowindow = new google.maps.InfoWindow({
                        content: 'Latitude: ' + location.lat() +
                                '<br>Longitude: ' + location.lng()
                    });
                    infowindow.open(map, marker);
                }

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
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
        // line 100
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
        // line 111
        echo twig_escape_filter($this->env, (isset($context["nbaprec"]) ? $context["nbaprec"] : $this->getContext($context, "nbaprec")), "html", null, true);
        echo "0%</div>
                                        </div>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"";
        // line 114
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
        // line 132
        echo twig_escape_filter($this->env, (isset($context["nbrInvit"]) ? $context["nbrInvit"] : $this->getContext($context, "nbrInvit")), "html", null, true);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu extended notification\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lstinvit"]) ? $context["lstinvit"] : $this->getContext($context, "lstinvit")));
        foreach ($context['_seq'] as $context["_key"] => $context["linv"]) {
            // line 137
            echo "                                    <li>
                                        <a href=\"#\">
                                            <span class=\"label label-danger\"><i class=\"icon_book_alt\"></i></span> 
                                            <strong><span style=\"color:blue;font-size:14px;\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["linv"], "nomExp", array()), "html", null, true);
            echo "</span></strong> vous invite
                                            <span class=\"small italic pull-right\">";
            // line 141
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["linv"], "dateInvit", array()), "m/d/Y"), "html", null, true);
            echo "</span>
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                <li>
                                    <a href=\"";
        // line 146
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
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"50\" height=\"50\"/>
                                </span>
                                <span class=\"username\">";
        // line 157
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
        // line 163
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
        // line 172
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
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Menu</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_publiercourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/publier.png"), "html", null, true);
        echo "\">  Publier Cours</span>

                            </a>
                        </li>       
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listecourformateur", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_desktop\"></i>
                                <span> <img src=\"";
        // line 207
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
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeformateurbconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_genius\"></i>
                                <span><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/Formateurs.png"), "html", null, true);
        echo "\">   Liste Formateurs</span>
                            </a>
                        </li>
                        <li>                     
                            <a class=\"\" href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeorganismeconnect", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\">
                                <i class=\"icon_piechart\"></i>
                                <span><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/organisme.png"), "html", null, true);
        echo "\">   Liste Organismes</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_listeinvitation", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_documents_alt\"></i>
                                <span><img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/icons/Demmande.png"), "html", null, true);
        echo "\">   Mes Demmandes</span>                               
                            </a>
                        </li>                       
                    </ul>
                    <!-- sidebar menu end-->
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
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
        echo "</h4>               
                                        <div class=\"follow-ava\">
                                            <img  alt=\"\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"50\" height=\"50\"/>
                                        </div>
                                        <h6>Formateur</h6>
                                    </div>
                                    <div class=\"col-lg-4 col-sm-4 follow-info\">
                                        <p>Binvenu chez nous ";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
        echo " Vous ètes un formateur chez mooc qui est une platforme d'apprentissage en ligne</p>
                                        <p><strong> <span style=\"color:lightgreen;font-size:15px;\">";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "email", array()), "html", null, true);
        echo " </span></strong></p>
                                        <p>Vos organismes sont 
                                            ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesorgs"]) ? $context["mesorgs"] : $this->getContext($context, "mesorgs")));
        foreach ($context['_seq'] as $context["_key"] => $context["mo"]) {
            // line 272
            echo "                                                <i class=\"fa fa-twitter\">
                                                    <strong> <span style=\"color:yellow;font-size:15px;\">";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($context["mo"], "nomExp", array()), "html", null, true);
            echo " </span></strong>
                                                </i>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "                                        </p>
                                        <h6>
                                            <span><i class=\"icon_clock_alt\"></i>11:05 AM</span>
                                            <span><i class=\"icon_calendar\"></i>";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["Datesys"]) ? $context["Datesys"] : $this->getContext($context, "Datesys")), "html", null, true);
        echo "</span>
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
                                            <a data-toggle=\"tab\" href=\"#recent-activity\">
                                                <i class=\"icon-home\"></i>
                                                Ma position
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
                                                        ";
        // line 326
        echo "                                                        <input id=\"lat\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["Latitudes"]) ? $context["Latitudes"] : $this->getContext($context, "Latitudes")), "html", null, true);
        echo "\" />
                                                        <input id=\"lng\" type=\"hidden\" value=\"";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["Longitudes"]) ? $context["Longitudes"] : $this->getContext($context, "Longitudes")), "html", null, true);
        echo "\" />
                                                        <div id=\"googleMap\" style=\"width:100%;height:380px;\"></div>
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
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/uploads/" . $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "avatar", array()))), "html", null, true);
        echo "\" width=\"200\" height=\"250\"/>
                                                        </div>
                                                        <div class=\"bio-row\">
                                                            <p><span>cin:</span> ";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()), "html", null, true);
        echo "</p>
                                                        </div>                                   
                                                        <div class=\"bio-row\">
                                                            <p><span>prenom: </span> ";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo "</p>
                                                        </div>                                              
                                                        <div class=\"bio-row\">
                                                            <p><span>email:</span> ";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "email", array()), "html", null, true);
        echo "</p>
                                                        </div>
                                                        <div class=\"bio-row\">
                                                            <p><span>Email:</span> ";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "Email", array()), "html", null, true);
        echo "</p>
                                                        </div>
                                                        <div class=\"bio-row\">
                                                            <p><span>login:</span> ";
        // line 356
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
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profediterprofile", array("cin" => $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">                                                  
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">cin</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"cin\" value=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "cin", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled=\"true\" id=\"f-name\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">nom</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"nom\" value=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "nom", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"l-name\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">Prenom</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"prenom\" value=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "prenom", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"l-name\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">Email</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"email\" name=\"email\" value=\"";
        // line 397
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
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Formateur"]) ? $context["Formateur"] : $this->getContext($context, "Formateur")), "login", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" placeholder=\" \">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-lg-2 control-label\">password</label>
                                                            <div class=\"col-lg-6\">
                                                                <input type=\"text\" name=\"password\" value=\"";
        // line 415
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
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- nicescroll -->
        <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <!--custome script for all page-->
        <script src=\"";
        // line 448
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
        return array (  666 => 448,  661 => 446,  657 => 445,  652 => 443,  648 => 442,  618 => 415,  609 => 409,  594 => 397,  585 => 391,  576 => 385,  567 => 379,  560 => 375,  538 => 356,  532 => 353,  526 => 350,  520 => 347,  514 => 344,  508 => 341,  491 => 327,  486 => 326,  441 => 279,  436 => 276,  427 => 273,  424 => 272,  420 => 271,  415 => 269,  409 => 268,  401 => 263,  394 => 261,  361 => 231,  356 => 229,  349 => 225,  344 => 223,  337 => 219,  332 => 217,  319 => 207,  314 => 205,  306 => 200,  301 => 198,  292 => 192,  269 => 172,  257 => 163,  246 => 157,  241 => 155,  229 => 146,  226 => 145,  216 => 141,  212 => 140,  207 => 137,  203 => 136,  196 => 132,  173 => 114,  167 => 111,  153 => 100,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
/*         <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD76-fmoj5PUCYgLQdmlaggCBAZ2QRpGMk"></script>*/
/* */
/*         <script>*/
/*             function initialize() {*/
/*                 var lat = document.getElementById('lat').value;*/
/*                 var lng = document.getElementById('lng').value;*/
/*                 var myCenter = new google.maps.LatLng(lat, lng);*/
/*                 var mapProp = {*/
/*                     center: new google.maps.LatLng(lat, lng),*/
/*                     zoom: 5,*/
/*                     mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                 };*/
/*                 var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/* */
/*                 var marker = new google.maps.Marker({*/
/*                     position: myCenter,*/
/*                     animation: google.maps.Animation.BOUNCE*/
/*                 });*/
/*                 var infowindow = new google.maps.InfoWindow({*/
/*                     content: "Bienvenu a MOOC ^_^"*/
/*                 });*/
/* */
/*                 google.maps.event.addListener(marker, 'click', function () {*/
/*                     infowindow.open(map, marker);*/
/*                 });*/
/* */
/*                 google.maps.event.addListener(map, 'click', function (event) {*/
/*                     placeMarker(event.latLng);*/
/*                 });*/
/* */
/*                 function placeMarker(location) {*/
/*                     var marker = new google.maps.Marker({*/
/*                         position: location,*/
/*                         map: map,*/
/*                     });*/
/*                     var infowindow = new google.maps.InfoWindow({*/
/*                         content: 'Latitude: ' + location.lat() +*/
/*                                 '<br>Longitude: ' + location.lng()*/
/*                     });*/
/*                     infowindow.open(map, marker);*/
/*                 }*/
/* */
/*                 marker.setMap(map);*/
/*             }*/
/*             google.maps.event.addDomListener(window, 'load', initialize);*/
/*         </script>*/
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
/*                                         <p>Binvenu chez nous {{Formateur.prenom}} {{Formateur.nom}} Vous ètes un formateur chez mooc qui est une platforme d'apprentissage en ligne</p>*/
/*                                         <p><strong> <span style="color:lightgreen;font-size:15px;">{{Formateur.email}} </span></strong></p>*/
/*                                         <p>Vos organismes sont */
/*                                             {%for mo in mesorgs%}*/
/*                                                 <i class="fa fa-twitter">*/
/*                                                     <strong> <span style="color:yellow;font-size:15px;">{{mo.nomExp}} </span></strong>*/
/*                                                 </i>*/
/*                                             {%endfor%}*/
/*                                         </p>*/
/*                                         <h6>*/
/*                                             <span><i class="icon_clock_alt"></i>11:05 AM</span>*/
/*                                             <span><i class="icon_calendar"></i>{{Datesys}}</span>*/
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
/*                                             <a data-toggle="tab" href="#recent-activity">*/
/*                                                 <i class="icon-home"></i>*/
/*                                                 Ma position*/
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
/*                                                         {#<div class="text">*/
/*                                                             <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>*/
/*                                                             <p class="attribution"><a href="#">Cours</a> at 4:25pm, 30th Octmber 2014</p>*/
/*                                                             <p>c'est un cours android qui facilite l'apprentissage de ce language</p>*/
/*                                                         </div>#}*/
/*                                                         <input id="lat" type="hidden" value="{{Latitudes}}" />*/
/*                                                         <input id="lng" type="hidden" value="{{Longitudes}}" />*/
/*                                                         <div id="googleMap" style="width:100%;height:380px;"></div>*/
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
/*                                                     Vous devez Bien remplir tous le formulaire en indiquant des informations correctes*/
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
