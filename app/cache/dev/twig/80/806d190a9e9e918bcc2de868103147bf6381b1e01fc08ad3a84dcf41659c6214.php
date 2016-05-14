<?php

/* MoocMoocBundle:Apprenant:ChercherCours.html.twig */
class __TwigTemplate_36732ff8580dedcf296bb75abb51eb534bbdc93db100518a828fe06a9f232483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle:Apprenant:EspaceApprenant.html.twig", "MoocMoocBundle:Apprenant:ChercherCours.html.twig", 1);
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
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        // line 12
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li>                     
                      <a class=\"\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                  <li class=\"active\">                     
                      <a class=\"\" href=\"";
        // line 33
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

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "<section id=\"main-content\">
          <section class=\"wrapper\">
\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h3 class=\"page-header\"><i class=\"icon_search-2\"></i> Chercher Cours</h3>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"icon_search\"></i><a href=\"index.html\">Chercher Cours</a></li>

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
                      
                      <form class=\"form-inline\" method=\"POST\" action=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_chercher_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
                                                    <input type=\"text\" name=\"Chercher\" id=\"Chercher\" class=\"form-control\" placeholder=\"Tapez le nom du cour ici ...\">
\t\t\t\t\t\t</div>
                        <button type=\"submit\" class=\"btn btn-info\">Chercher</button>
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
                                 <th><i class=\"icon_pin_alt\"></i> Nom du cour</th>              
                                 <th><i class=\"icon_profile\"></i> Nom du Formateur</th>
                                 <th><i class=\"icon_mobile\"></i> Difficulté</th>
                                 
                                 <th><i class=\"icon_cogs\"></i> Action</th>
                              </tr>
                              
                              ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 112
            echo "                                  <tr>
                                 <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nomCours", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "prenom", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 115
            echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute($context["cour"], "difficulte", array()));
            echo "</td>
                                 
                                 <td>
                                 <div class=\"btn-group\">
                                    <a class=\"btn btn-primary\" href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_suivre_cour_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()), "id" => $this->getAttribute($context["cour"], "idcours", array()), "id2" => $this->getAttribute($context["cour"], "idcours", array()))), "html", null, true);
            echo "\"><span class=\"icon_plus_alt2\"></span> Suivre</a>
                                    <a class=\"btn btn-info\" href=\"\"><span class=\"icon_target\"></span> Consulter</a>
                                  </div>
                                 </td>
                              </tr>
                                  
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                              
                              ";
        // line 179
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

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        // line 191
        echo "    <!-- javascripts -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 203
        echo "
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Apprenant:ChercherCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 203,  258 => 200,  253 => 198,  248 => 196,  244 => 195,  239 => 193,  235 => 192,  232 => 191,  229 => 190,  216 => 179,  213 => 126,  200 => 119,  193 => 115,  187 => 114,  183 => 113,  180 => 112,  176 => 111,  138 => 76,  110 => 50,  107 => 49,  88 => 33,  77 => 25,  67 => 18,  59 => 12,  56 => 11,  49 => 8,  46 => 7,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
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
/*                   <li>                     */
/*                       <a class="" href="{{path('mooc_cours_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="icon_book_alt"></i>*/
/*                           <span>Mes Cours</span>*/
/*                           */
/*                       </a>*/
/*                                          */
/*                   </li>*/
/*                   <li class="active">                     */
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
/* 					<h3 class="page-header"><i class="icon_search-2"></i> Chercher Cours</h3>*/
/* 					<ol class="breadcrumb">*/
/* 						<li><i class="icon_search"></i><a href="index.html">Chercher Cours</a></li>*/
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
/*                       <form class="form-inline" method="POST" action="{{path('mooc_chercher_cours_apprenant', {'login': apprenant.login})}}">*/
/* 						<div class="form-group">*/
/*                                                     <input type="text" name="Chercher" id="Chercher" class="form-control" placeholder="Tapez le nom du cour ici ...">*/
/* 						</div>*/
/*                         <button type="submit" class="btn btn-info">Chercher</button>*/
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
/*                                  <th><i class="icon_pin_alt"></i> Nom du cour</th>              */
/*                                  <th><i class="icon_profile"></i> Nom du Formateur</th>*/
/*                                  <th><i class="icon_mobile"></i> Difficulté</th>*/
/*                                  */
/*                                  <th><i class="icon_cogs"></i> Action</th>*/
/*                               </tr>*/
/*                               */
/*                               {% for cour in Cours %}*/
/*                                   <tr>*/
/*                                  <td>{{cour.nomCours}}</td>*/
/*                                  <td>{{cour.nom}} {{cour.prenom}}</td>*/
/*                                  <td>{{ cour.difficulte | rating }}</td>*/
/*                                  */
/*                                  <td>*/
/*                                  <div class="btn-group">*/
/*                                     <a class="btn btn-primary" href="{{path('mooc_suivre_cour_apprenant', { 'login': apprenant.login ,'id': cour.idcours,'id2': cour.idcours})}}"><span class="icon_plus_alt2"></span> Suivre</a>*/
/*                                     <a class="btn btn-info" href=""><span class="icon_target"></span> Consulter</a>*/
/*                                   </div>*/
/*                                  </td>*/
/*                               </tr>*/
/*                                   */
/*                               {% endfor %}*/
/*                               */
/*                               {#<tr>*/
/*                                  <td>Android</td>*/
/*                                  <td>Angeline Mcclain</td>*/
/*                                  <td>*/
/*                                  <span class="icon_star"></span>*/
/*                                  <span class="icon_star-half_alt"></span>*/
/*                                  <span class="icon_star_alt"></span>*/
/*                                  <span class="icon_star_alt"></span>*/
/*                                  </td>*/
/*                                  */
/*                                  <td>*/
/*                                  <div class="btn-group">*/
/*                                     <a class="btn btn-primary" href=""><span class="icon_plus_alt2"></span> Suivre</a>*/
/*                                     <a class="btn btn-info" href=""><span class="icon_target"></span> Consulter</a>*/
/*                                   </div>*/
/*                                  </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                  <td>Cross Platform</td>*/
/*                                  <td>Sung Carlson</td>*/
/*                                  <td>*/
/*                                  <span class="icon_star"></span>*/
/*                                  <span class="icon_star"></span>*/
/*                                  <span class="icon_star-half_alt"></span>*/
/*                                  <span class="icon_star_alt"></span>*/
/*                                  */
/*                                  </td>*/
/*                                  */
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                      <a class="btn btn-primary" href=""><span class="icon_plus_alt2"></span> Suivre</a>*/
/*                                     <a class="btn btn-info" href=""><span class="icon_target"></span> Consulter</a>*/
/*                                   </div>*/
/*                                   </td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                  <td>Windows Phone</td>*/
/*                                  <td>Selina Fitzgerald</td>*/
/*                                  <td>*/
/*                                   <span class="icon_star"></span>*/
/*                                   <span class="icon_star"></span>*/
/*                                   <span class="icon_star"></span>*/
/*                                   <span class="icon_star-half_alt"></span>*/
/*                                  </td>*/
/*                                  */
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                     <a class="btn btn-primary" href=""><span class="icon_plus_alt2"></span> Suivre</a>*/
/*                                     <a class="btn btn-info" href=""><span class="icon_target"></span> Consulter</a>*/
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
/*     {#<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*     <script src="{{ asset('bundles/starrating/js/rating.js') }}"></script>#}*/
/* */
/* {% endblock %}*/
/* */
