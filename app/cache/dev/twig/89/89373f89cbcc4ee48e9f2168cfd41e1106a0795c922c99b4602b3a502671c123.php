<?php

/* MoocMoocBundle:Apprenant:CoursApprenant.html.twig */
class __TwigTemplate_523102d8ad9824f3e9fd8611862ce23a28bc92b65806a39bdb72f284fff5c87a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle:Apprenant:EspaceApprenant.html.twig", "MoocMoocBundle:Apprenant:CoursApprenant.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
   <!-- Bootstrap CSS Rating -->  
    
    ";
        // line 20
        echo "

";
    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        // line 28
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li class=\"active\">                     
                      <a class=\"\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class=\"\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_chercher_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_search\"></i>
                          <span>Chercher Cours</span>
                          
                      </a>
                                         
                  </li>
                           
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
 
";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "<section id=\"main-content\">
          <section class=\"wrapper\">
\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h3 class=\"page-header\"><i class=\"icon_book_alt\"></i> Mes Cours</h3>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-th-list\"></i><a href=\"index.html\">Mes Cours</a></li>

\t\t\t\t  </ol>
\t\t\t\t</div>
\t\t\t</div>
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Tableau des cours
                          </header>
                          
                          <table class=\"table table-striped table-advance table-hover\">
                           <tbody>
                              <tr>
                                 <th><i class=\"icon_pin_alt\"></i> Nom du cour</th>              
                                 <th><i class=\"icon_calendar\"></i> Description</th>
                                 <th><i class=\"icon_mobile\"></i> Difficulté</th>
                                 <th><i class=\"icon_calendar\"></i> Date de Suivi</th>
                                 <th><i class=\"icon_cogs\"></i> Action</th>
                              </tr>
                              ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Coursuivi"]) ? $context["Coursuivi"] : $this->getContext($context, "Coursuivi")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 95
            echo "                                  <tr>
                                 <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nomCours", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "description", array()), "html", null, true);
            echo "</td>
                                 ";
            // line 99
            echo "                                 ";
            // line 100
            echo "                                 <td>
                                 ";
            // line 101
            echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute($context["cour"], "difficulte", array()));
            // line 102
            echo "                                
                                 <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "dateDebut", array()), "html", null, true);
            echo "</td>
                                 <td>
                                  <div class=\"btn-group\">
                                     <a class=\"btn btn-success\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_detail_cours_apprenant", array("idCourSuivi" => $this->getAttribute($context["cour"], "idcoursuivi", array()), "login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
            echo "\" title=\"Consulter\">Consulter</a>
                                     <a class=\"btn btn-danger\" href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_supprimer_cours_apprenant", array("idCourSuivi" => $this->getAttribute($context["cour"], "idcoursuivi", array()), "login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
            echo "\" title=\"Supprimer\">Supprimer</a>
                                  </div>
                                  </td>
                              </tr>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                              ";
        // line 173
        echo "                             
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
";
    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        // line 185
        echo "    
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
    <!-- javascripts -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Bootstrap JS Rating --> 
    ";
        // line 203
        echo "    
   ";
        // line 214
        echo "  

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Apprenant:CoursApprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 214,  248 => 203,  242 => 197,  237 => 195,  232 => 193,  228 => 192,  223 => 190,  219 => 189,  214 => 187,  210 => 185,  207 => 184,  194 => 173,  192 => 112,  181 => 107,  177 => 106,  171 => 103,  168 => 102,  166 => 101,  163 => 100,  161 => 99,  157 => 97,  153 => 96,  150 => 95,  146 => 94,  116 => 66,  113 => 65,  94 => 49,  83 => 41,  73 => 34,  65 => 28,  62 => 27,  55 => 24,  52 => 23,  46 => 20,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*    <!-- Bootstrap CSS Rating -->  */
/*     */
/*     {#<link href="{{asset('bundles/bootstrapStarRating/css/bootstrap.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/bootstrapStarRating/css/star-rating.css')}}" rel="stylesheet" type="text/css" media="all">*/
/*     */
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/star-rating.css')}}" rel="stylesheet" type="text/css" media="all">*/
/*     */
/*     */
/*     <link href="{{asset('bundles/bootstrapStarRating/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     */
/*     */
/*     <!-- optionally if you need to use a theme, then include the theme file as mentioned below -->*/
/*     <link href="{{asset('bundles/bootstrapStarRating/css/theme-krajee-svg.css')}}" rel="stylesheet" type="text/css" media="all">#}*/
/* */
/* */
/* {% endblock %}*/
/* {% block title %}*/
/*     {{parent()}}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <!--sidebar start-->*/
/*       <aside>*/
/*           <div id="sidebar"  class="nav-collapse ">*/
/*               <!-- sidebar menu start-->*/
/*               <ul class="sidebar-menu">                */
/*                   <li>*/
/*                       <a class="" href="{{path('mooc_accueil_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="fa fa-user-md"></i>*/
/*                           <span>Mon Profile</span>*/
/*                       </a>*/
/*                   </li>*/
/* */
/*                   <li class="active">                     */
/*                       <a class="" href="{{path('mooc_cours_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="icon_book_alt"></i>*/
/*                           <span>Mes Cours</span>*/
/*                           */
/*                       </a>*/
/*                                          */
/*                   </li>*/
/*                   <li>                     */
/*                       <a class="" href="{{path('mooc_chercher_cours_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="icon_search"></i>*/
/*                           <span>Chercher Cours</span>*/
/*                           */
/*                       </a>*/
/*                                          */
/*                   </li>*/
/*                            */
/*               </ul>*/
/*               <!-- sidebar menu end-->*/
/*           </div>*/
/*       </aside>*/
/*       <!--sidebar end-->*/
/*  */
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/* <section id="main-content">*/
/*           <section class="wrapper">*/
/* 		  <div class="row">*/
/* 				<div class="col-lg-12">*/
/* 					<h3 class="page-header"><i class="icon_book_alt"></i> Mes Cours</h3>*/
/* 					<ol class="breadcrumb">*/
/* 						<li><i class="fa fa-th-list"></i><a href="index.html">Mes Cours</a></li>*/
/* */
/* 				  </ol>*/
/* 				</div>*/
/* 			</div>*/
/*               <!-- page start-->*/
/*               <div class="row">*/
/*                   <div class="col-lg-12">*/
/*                       <section class="panel">*/
/*                           <header class="panel-heading">*/
/*                               Tableau des cours*/
/*                           </header>*/
/*                           */
/*                           <table class="table table-striped table-advance table-hover">*/
/*                            <tbody>*/
/*                               <tr>*/
/*                                  <th><i class="icon_pin_alt"></i> Nom du cour</th>              */
/*                                  <th><i class="icon_calendar"></i> Description</th>*/
/*                                  <th><i class="icon_mobile"></i> Difficulté</th>*/
/*                                  <th><i class="icon_calendar"></i> Date de Suivi</th>*/
/*                                  <th><i class="icon_cogs"></i> Action</th>*/
/*                               </tr>*/
/*                               {% for cour in Coursuivi %}*/
/*                                   <tr>*/
/*                                  <td>{{cour.nomCours}}</td>*/
/*                                  <td>{{cour.description}}</td>*/
/*                                  {#<td>{{cour.difficulte}}</td>#}*/
/*                                  {#<td width='30%'><input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="xs" > </td>#}*/
/*                                  <td>*/
/*                                  {{ cour.difficulte |rating }}{#<div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>#}*/
/*                                 */
/*                                  <td>{{cour.dateDebut}}</td>*/
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                      <a class="btn btn-success" href="{{path('mooc_detail_cours_apprenant', {'idCourSuivi': cour.idcoursuivi,'login': apprenant.login })}}" title="Consulter">Consulter</a>*/
/*                                      <a class="btn btn-danger" href="{{path('mooc_supprimer_cours_apprenant', {'idCourSuivi': cour.idcoursuivi,'login': apprenant.login })}}" title="Supprimer">Supprimer</a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr>*/
/*                               {% endfor %}*/
/*                               {#S<tr>*/
/*                                  <td>Android</td>*/
/*                                  <td>Angeline Mcclain</td>*/
/*                                  <td>Facile</td>*/
/*                                  <td>17</td>*/
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                      <a class="btn btn-success" href="" title="Consulter">View</a>*/
/*                                      <a class="btn btn-danger" href="" title="Supprimer">Delete</a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                  <td>Cross Platform</td>*/
/*                                  <td>Sung Carlson</td>*/
/*                                  <td>Facile</td>*/
/*                                  <td>15</td>*/
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                       <a class="btn btn-success" href="" title="Consulter">View</a>*/
/*                                      <a class="btn btn-danger" href="" title="Supprimer">Delete</a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                  <td>Windows Phone</td>*/
/*                                  <td>Selina Fitzgerald</td>*/
/*                                  <td>Facile</td>*/
/*                                  <td>-</td>*/
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                       <a class="btn btn-success" href="" title="Consulter">View</a>*/
/*                                      <a class="btn btn-danger" href="" title="Supprimer">Delete</a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                  <td>J2me</td>*/
/*                                  <td>Abraham Avery</td>*/
/*                                  <td>Facile</td>*/
/*                                  <td>20</td>*/
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                       <a class="btn btn-success" href="" title="Consulter">View</a>*/
/*                                      <a class="btn btn-danger" href="" title="Supprimer">Delete</a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                               <tr>*/
/*                                  <td>IOS</td>*/
/*                                  <td>Ahmed Dean</td>*/
/*                                  <td>Facile</td>*/
/*                                  <td>-</td>*/
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                       <a class="btn btn-success" href="" title="Consulter">View</a>*/
/*                                      <a class="btn btn-danger" href="" title="Supprimer">Delete</a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr> #}*/
/*                              */
/*                            </tbody>*/
/*                         </table>*/
/*                       </section>*/
/*                   </div>*/
/*               </div>*/
/*               <!-- page end-->*/
/*           </section>*/
/*       </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     */
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*     <script src="{{ asset('bundles/starrating/js/rating.js') }}"></script>*/
/*     <!-- javascripts -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js')}}"></script>*/
/*     <!-- nice scroll -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js')}}"></script>*/
/*     <!-- jquery knob -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.knob.js')}}"></script>*/
/*     <!--custome script for all page-->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/scripts.js')}}"></script>*/
/*     */
/*     <!-- Bootstrap JS Rating --> */
/*     {#<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"></script>*/
/*     <script src="{{asset('bundles/bootstrapStarRating/js/jquery.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/bootstrapStarRating/js/star-rating.js')}}"></script>#}*/
/*     */
/*    {# <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/star-rating.js')}}"></script>*/
/*     <!-- optionally if you need translation for your language then include locale file as mentioned below -->*/
/*     <script src="{{asset('bundles/bootstrapStarRating/js/star-rating_locale_fr.js')}}"></script>*/
/*    <script>*/
/*      */
/*       // initialize with defaults*/
/*     $("#input-id").rating();*/
/* 	*/
/*   </script>#}*/
/*   */
/* */
/* {% endblock %}*/
/* */
