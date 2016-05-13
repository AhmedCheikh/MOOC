<?php

/* MoocMoocBundle:Organisme:PublierCour.html.twig */
class __TwigTemplate_f092095314e09d1f8441b7870f8dcef6ec3d7152041ac974ad7d75d40329fbd3 extends Twig_Template
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

        <title>Publier cour</title>
        <!-- Bootstrap CSS -->    
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- bootstrap theme -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--external css-->
        <!-- font icon -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
        <link href=\"";
        // line 22
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
        // line 80
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo "</span>
                            </a>
                            <ul class=\"dropdown-menu extended notification\">
                                <div class=\"notify-arrow notify-arrow-blue\"></div>
                                <li>
                                    <p class=\"blue\">You have ";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo " new notifications</p>
                                </li>
                                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeInvitation"]) ? $context["listeInvitation"] : $this->getContext($context, "listeInvitation")));
        foreach ($context['_seq'] as $context["_key"] => $context["inv"]) {
            // line 88
            echo "                                <li>
                                     
                                    <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeInvit", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
            echo "\">
                                        <span class=\"label label-primary\"><i class=\"icon_profile\"></i></span> 
                                        Demande d'integration de ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["inv"], "nom_exp", array()), "html", null, true);
            echo "
                                        <span class=\"small italic pull-right\"></span>
                                    </a>
                                    
                                </li>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                               
                            </ul>
                        </li>
                        <!-- alert notification end-->
                        <!-- user login dropdown start-->
                        <li class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <span class=\"profile-ava\">
                                    <img alt=\"\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/esprit.PNG"), "html", null, true);
        echo "\">
                                </span>
                                <span class=\"username\"> ";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</span>
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu extended logout\">
                                <div class=\"log-arrow-up\"></div>
                                <li class=\"eborder-top\">
                                    <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profileOrganisme", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
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
        // line 123
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logOrganisme");
        echo "\"><i class=\"icon_key_alt\"></i> Log Out</a>
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
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_acceuilOrganisme", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Accueil</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_profileOrganisme", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_id\"></i>
                                <span>Mon Profile</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>       
                       <li>
                            <a class=\"\" href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_publierCoursOrganisme", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_book\"></i>
                                <span>Publier Cours</span>
                                 <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>
                        <li>
                            <a class=\"\" href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeFormateurs1", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_group\"></i>
                                <span>Mes Formateurs</span>
                                 <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>
                        
                        <li>                     
                            <a class=\"\" href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeOrganismes1", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\">
                                <i class=\"icon_building\"></i>
                                <span>Liste Organismes</span>
                                 <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>

                        <li class=\"sub-menu\">
                            <a  href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_ListeInvit", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "nbr" => (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")))), "html", null, true);
        echo "\" class=\"\">
                                <i class=\"icon_mail\"></i>
                                <span>Liste Invitations</span>
                                 <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                        </li>
                         <li class=\"sub-menu\">
                            <a  href=\"";
        // line 184
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
                 

                    <!-- Today status end -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <section class=\"panel\">
                                <header class=\"panel-heading\">
                                    Publier Cours
                                </header>
                                <div class=\"panel-body\">
                                    <div class=\"form\">
                                        <form class=\"form-validate form-horizontal\" id=\"feedback_form\" method=\"POST\" action=\"\" ENCTYPE = \"multipart/form-data\">
                                            <div class=\"form-group \">
                                                <label for=\"cname\" class=\"control-label col-lg-2\">Nom cour <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <input class=\"form-control\" id=\"cname\" name=\"nom_cours\" minlength=\"5\" type=\"text\" required />
                                                </div>
                                            </div>
                                            <div class=\"form-group \">
                                                <label for=\"cemail\" class=\"control-label col-lg-2\">Difficulté <span class=\"required\">*</span></label>
                                                <div class=\"col-lg-10\">
                                                    <select class=\"form-control m-bot15\" name=\"difficulte\" id=\"difficulteCour\">
                                                        <option value=\"Amateur\">Amateur</option>
                                                        <option value=\"Moyen\">Moyen</option>
                                                        <option value=\"Proffesionnel\">Proffesionnel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                                <div class=\"form-group \">
                                                    <label for=\"cname\" class=\"control-label col-lg-2\">Objectif <span class=\"required\">*</span></label>
                                                    <div class=\"col-lg-10\">
                                                        <input class=\"form-control\" id=\"subject\" name=\"objectif\" minlength=\"5\" type=\"text\" required />
                                                    </div>
                                                </div>                                      

                                                <div class=\"form-group \">
                                                    <label for=\"cname\" class=\"control-label col-lg-2\">Charger Video <span class=\"required\">*</span></label>
                                                    <div class=\"col-lg-10\">
                                                        <input type=\"file\" id=\"exampleInputFile\" name=\"video\">
                                                    </div>
                                                </div> 

                                                <div class=\"form-group \">
                                                    <label for=\"ccomment\" class=\"control-label col-lg-2\">Description</label>
                                                    <div class=\"col-lg-10\">
                                                        <textarea class=\"form-control \" id=\"ccomment\" name=\"description\" required></textarea>
                                                    </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-offset-2 col-lg-10\">
                                                        <button class=\"btn btn-primary\" type=\"submit\">Publier</button>
                                                        <button class=\"btn btn-default\" type=\"reset\">Cancel</button>
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
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/form-validation-script.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/scripts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/js/form-component.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Organisme:PublierCour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 281,  394 => 280,  389 => 278,  385 => 277,  381 => 276,  377 => 275,  373 => 274,  369 => 273,  277 => 184,  267 => 177,  256 => 169,  245 => 161,  235 => 154,  225 => 147,  216 => 141,  195 => 123,  183 => 114,  174 => 108,  169 => 106,  159 => 98,  147 => 92,  142 => 90,  138 => 88,  134 => 87,  129 => 85,  121 => 80,  60 => 22,  56 => 21,  51 => 19,  47 => 18,  41 => 15,  36 => 13,  29 => 9,  19 => 1,);
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
/*         <title>Publier cour</title>*/
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
/*                <div class="top-nav notification-row">                */
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
/*                                 {% for inv in listeInvitation %}*/
/*                                 <li>*/
/*                                      */
/*                                     <a href="{{path('mooc_mooc_ListeInvit', {'name':name,'nbr':nbr})}}">*/
/*                                         <span class="label label-primary"><i class="icon_profile"></i></span> */
/*                                         Demande d'integration de {{ inv.nom_exp }}*/
/*                                         <span class="small italic pull-right"></span>*/
/*                                     </a>*/
/*                                     */
/*                                 </li>*/
/*                                  {% endfor %}*/
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
/*                                 <span class="username"> {{name}}</span>*/
/*                                 <b class="caret"></b>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu extended logout">*/
/*                                 <div class="log-arrow-up"></div>*/
/*                                 <li class="eborder-top">*/
/*                                     <a href="{{path('mooc_mooc_profileOrganisme', {'name':name,'nbr':nbr})}}"><i class="icon_profile"></i> Mon Profile</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="icon_mail_alt"></i> Mes message</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#"><i class="icon_chat_alt"></i> Chat</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{path('mooc_mooc_logOrganisme')}}"><i class="icon_key_alt"></i> Log Out</a>*/
/*                                 </li>*/
/*                                */
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
/*                <div id="sidebar"  class="nav-collapse ">*/
/*                     <!-- sidebar menu start-->*/
/*                     <ul class="sidebar-menu">                */
/*                        <li class="active">*/
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
/*                        <li>*/
/*                             <a class="" href="{{path('mooc_mooc_publierCoursOrganisme', {'name':name,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_book"></i>*/
/*                                 <span>Publier Cours</span>*/
/*                                  <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="" href="{{path('mooc_mooc_ListeFormateurs1', {'name':name,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_group"></i>*/
/*                                 <span>Mes Formateurs</span>*/
/*                                  <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>*/
/*                         */
/*                         <li>                     */
/*                             <a class="" href="{{path('mooc_mooc_ListeOrganismes1', {'name':name,'nbr':nbr})}}">*/
/*                                 <i class="icon_building"></i>*/
/*                                 <span>Liste Organismes</span>*/
/*                                  <span class="menu-arrow arrow_carrot-right"></span>*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                         <li class="sub-menu">*/
/*                             <a  href="{{path('mooc_mooc_ListeInvit', {'name':name,'nbr':nbr})}}" class="">*/
/*                                 <i class="icon_mail"></i>*/
/*                                 <span>Liste Invitations</span>*/
/*                                  <span class="menu-arrow arrow_carrot-right"></span>*/
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
/* */
/*             <!--main content start-->*/
/*             <section id="main-content">*/
/*                 <section class="wrapper">            */
/*                  */
/* */
/*                     <!-- Today status end -->*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <section class="panel">*/
/*                                 <header class="panel-heading">*/
/*                                     Publier Cours*/
/*                                 </header>*/
/*                                 <div class="panel-body">*/
/*                                     <div class="form">*/
/*                                         <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="" ENCTYPE = "multipart/form-data">*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cname" class="control-label col-lg-2">Nom cour <span class="required">*</span></label>*/
/*                                                 <div class="col-lg-10">*/
/*                                                     <input class="form-control" id="cname" name="nom_cours" minlength="5" type="text" required />*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group ">*/
/*                                                 <label for="cemail" class="control-label col-lg-2">Difficulté <span class="required">*</span></label>*/
/*                                                 <div class="col-lg-10">*/
/*                                                     <select class="form-control m-bot15" name="difficulte" id="difficulteCour">*/
/*                                                         <option value="Amateur">Amateur</option>*/
/*                                                         <option value="Moyen">Moyen</option>*/
/*                                                         <option value="Proffesionnel">Proffesionnel</option>*/
/*                                                     </select>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                                 <div class="form-group ">*/
/*                                                     <label for="cname" class="control-label col-lg-2">Objectif <span class="required">*</span></label>*/
/*                                                     <div class="col-lg-10">*/
/*                                                         <input class="form-control" id="subject" name="objectif" minlength="5" type="text" required />*/
/*                                                     </div>*/
/*                                                 </div>                                      */
/* */
/*                                                 <div class="form-group ">*/
/*                                                     <label for="cname" class="control-label col-lg-2">Charger Video <span class="required">*</span></label>*/
/*                                                     <div class="col-lg-10">*/
/*                                                         <input type="file" id="exampleInputFile" name="video">*/
/*                                                     </div>*/
/*                                                 </div> */
/* */
/*                                                 <div class="form-group ">*/
/*                                                     <label for="ccomment" class="control-label col-lg-2">Description</label>*/
/*                                                     <div class="col-lg-10">*/
/*                                                         <textarea class="form-control " id="ccomment" name="description" required></textarea>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="form-group">*/
/*                                                     <div class="col-lg-offset-2 col-lg-10">*/
/*                                                         <button class="btn btn-primary" type="submit">Publier</button>*/
/*                                                         <button class="btn btn-default" type="reset">Cancel</button>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                         </form>*/
/*                                     </div>*/
/* */
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
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.scrollTo.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.nicescroll.js')}}"></script>*/
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/form-validation-script.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('bundles/moocmooc/css/profilformateur/js/jquery.validate.min.js')}}"></script>*/
/* */
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/scripts.js')}}"></script>*/
/*         <script src="{{asset('bundles/moocmooc/css/profilformateur/js/form-component.js')}}"></script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
