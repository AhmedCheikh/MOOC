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
    


";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li class=\"active\">                     
                      <a class=\"\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class=\"\" href=\"";
        // line 36
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

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
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
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Coursuivi"]) ? $context["Coursuivi"] : $this->getContext($context, "Coursuivi")));
        foreach ($context['_seq'] as $context["_key"] => $context["cour"]) {
            // line 82
            echo "                                  <tr>
                                 <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "nomCours", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "description", array()), "html", null, true);
            echo "</td>
                                 ";
            // line 86
            echo "                                 ";
            // line 87
            echo "                                 <td>
                                 ";
            // line 88
            echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute($context["cour"], "difficulte", array()));
            // line 89
            echo "                                
                                 <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["cour"], "dateDebut", array()), "html", null, true);
            echo "</td>
                                 <td>
                                  <div class=\"btn-group\">
                                     <a class=\"btn btn-success\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_detail_cours_apprenant", array("idCourSuivi" => $this->getAttribute($context["cour"], "idcoursuivi", array()), "login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
            echo "\" title=\"Consulter\">Consulter</a>
                                     <a class=\"btn btn-danger\" href=\"";
            // line 94
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
        // line 99
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

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/js/rating.js"), "html", null, true);
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
        return array (  211 => 113,  205 => 111,  202 => 110,  189 => 99,  178 => 94,  174 => 93,  168 => 90,  165 => 89,  163 => 88,  160 => 87,  158 => 86,  154 => 84,  150 => 83,  147 => 82,  143 => 81,  113 => 53,  110 => 52,  91 => 36,  80 => 28,  70 => 21,  62 => 15,  59 => 14,  52 => 11,  49 => 10,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*     */
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
/*     {{ parent()}}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*     <script src="{{ asset('bundles/starrating/js/rating.js') }}"></script>*/
/* */
/*  */
/*   */
/* */
/* {% endblock %}*/
/* */
