<?php

/* MoocMoocBundle:Apprenant:CoursApprenant.html.twig */
class __TwigTemplate_c79f3259d47eea6add174e8c9506f4d183eab5f68108442996f187dda1e05bdf extends Twig_Template
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
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        // line 11
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li class=\"active\">                     
                      <a class=\"\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class=\"\" href=\"";
        // line 32
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

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
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
                                 <th><i class=\"icon_profile\"></i> Description</th>
                                 <th><i class=\"icon_mobile\"></i> Difficulté</th>
                                 <th><i class=\"icon_calendar\"></i> Note</th>
                                 <th><i class=\"icon_cogs\"></i> Action</th>
                              </tr>
                              ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Coursuivi"]) ? $context["Coursuivi"] : $this->getContext($context, "Coursuivi")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 78
            echo "                                  <tr>
                                 <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nomCours", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "description", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "difficulte", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "note", array()), "html", null, true);
            echo "</td>
                                 <td>
                                  <div class=\"btn-group\">
                                     <a class=\"btn btn-success\" href=\"\" title=\"Consulter\">View</a>
                                     <a class=\"btn btn-danger\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_supprimer_cours_apprenant", array("id" => $this->getAttribute($context["cour"], "idcoursuivi", array()), "login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
            echo "\" title=\"Supprimer\">Delete</a>
                                  </div>
                                  </td>
                              </tr>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                              ";
        // line 152
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

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        // line 164
        echo "    <!-- javascripts -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>

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
        return array (  217 => 173,  212 => 171,  207 => 169,  203 => 168,  198 => 166,  194 => 165,  191 => 164,  188 => 163,  175 => 152,  173 => 91,  162 => 86,  155 => 82,  151 => 81,  147 => 80,  143 => 79,  140 => 78,  136 => 77,  106 => 49,  103 => 48,  84 => 32,  73 => 24,  63 => 17,  55 => 11,  52 => 10,  45 => 7,  42 => 6,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
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
/*                                  <th><i class="icon_profile"></i> Description</th>*/
/*                                  <th><i class="icon_mobile"></i> Difficulté</th>*/
/*                                  <th><i class="icon_calendar"></i> Note</th>*/
/*                                  <th><i class="icon_cogs"></i> Action</th>*/
/*                               </tr>*/
/*                               {% for cour in Coursuivi %}*/
/*                                   <tr>*/
/*                                  <td>{{cour.nomCours}}</td>*/
/*                                  <td>{{cour.description}}</td>*/
/*                                  <td>{{cour.difficulte}}</td>*/
/*                                  <td>{{cour.note}}</td>*/
/*                                  <td>*/
/*                                   <div class="btn-group">*/
/*                                      <a class="btn btn-success" href="" title="Consulter">View</a>*/
/*                                      <a class="btn btn-danger" href="{{path('mooc_supprimer_cours_apprenant', {'id': cour.idcoursuivi,'login': apprenant.login })}}" title="Supprimer">Delete</a>*/
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
/* */
/* {% endblock %}*/
/* */
