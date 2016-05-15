<?php

/* MoocMoocBundle:Apprenant:CoursDetails.html.twig */
class __TwigTemplate_9e73907997c1ee9d92392ade8d37a05997e1a64b3cdd2c998aeb0f5de8484a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle:Apprenant:EspaceApprenant.html.twig", "MoocMoocBundle:Apprenant:CoursDetails.html.twig", 1);
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
                          

                           <tbody>
                               ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Coursuivi"]) ? $context["Coursuivi"] : $this->getContext($context, "Coursuivi")));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 88
            echo "                              <div class=\"all-content\">
                            <div class=\"text2\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "nomCours", array()), "html", null, true);
            echo "</div>
                            <p> <span style=\"color:blue;font-weight:bold\" >Description : </span>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "description", array()), "html", null, true);
            echo "</p> <br>
                            <p> <span style=\"color:blue;font-weight:bold\"> Difficulte : </span> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "difficulte", array()), "html", null, true);
            echo " </p> <br>
                            <p> <span style=\"color:blue;font-weight:bold\"> Objectif : </span> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "Objectif", array()), "html", null, true);
            echo " </p> <br>
                            <p> <span style=\"color:blue;font-weight:bold\"> Formateur : </span> ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cours"], "cinformateur", array()), "getPrenom", array(), "method"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cours"], "cinformateur", array()), "getNom", array(), "method"), "html", null, true);
            echo " </p> <br>
                            ";
            // line 98
            echo "                        </div>
";
            // line 100
            echo "                                
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                              ";
        // line 163
        echo "                             
                           </tbody>
                        
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
";
    }

    // line 174
    public function block_javascripts($context, array $blocks = array())
    {
        // line 175
        echo "    ";
        // line 176
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
        echo "\"></script>
    <!-- javascripts -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Bootstrap JS Rating --> 
    ";
        // line 193
        echo "    
   ";
        // line 204
        echo "  

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Apprenant:CoursDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 204,  235 => 193,  229 => 187,  224 => 185,  219 => 183,  215 => 182,  210 => 180,  206 => 179,  201 => 177,  198 => 176,  196 => 175,  193 => 174,  180 => 163,  178 => 102,  171 => 100,  168 => 98,  162 => 93,  158 => 92,  154 => 91,  150 => 90,  146 => 89,  143 => 88,  139 => 87,  116 => 66,  113 => 65,  94 => 49,  83 => 41,  73 => 34,  65 => 28,  62 => 27,  55 => 24,  52 => 23,  46 => 20,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
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
/* */
/*                            <tbody>*/
/*                                {% for cours in Coursuivi %}*/
/*                               <div class="all-content">*/
/*                             <div class="text2">{{cours.nomCours}}</div>*/
/*                             <p> <span style="color:blue;font-weight:bold" >Description : </span>{{cours.description}}</p> <br>*/
/*                             <p> <span style="color:blue;font-weight:bold"> Difficulte : </span> {{cours.difficulte}} </p> <br>*/
/*                             <p> <span style="color:blue;font-weight:bold"> Objectif : </span> {{cours.Objectif}} </p> <br>*/
/*                             <p> <span style="color:blue;font-weight:bold"> Formateur : </span> {{cours.cinformateur.getPrenom()}}  {{cours.cinformateur.getNom()}} </p> <br>*/
/*                             {#<p> <span style="color:blue;font-weight:bold"> Video : </span> {{cours.video}} </p> <br>*/
/*                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <video width="400" controls >*/
/*                                 <source src="{{asset('bundles/moocmooc/video/iphone.mp4')}}" type="video/mp4">*/
/*                             </video>#}*/
/*                         </div>*/
/* {#{% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': 'foo'} %}#}*/
/*                                 */
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
/*                         */
/*                       </section>*/
/*                   </div>*/
/*               </div>*/
/*               <!-- page end-->*/
/*           </section>*/
/*       </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {#<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>#}*/
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
/* */
