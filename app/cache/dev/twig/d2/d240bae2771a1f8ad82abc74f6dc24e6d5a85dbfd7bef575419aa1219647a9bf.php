<?php

/* MoocMoocBundle:Apprenant:CoursDetail.html.twig */
class __TwigTemplate_c829538c1e9128ba4ecc72fd84bd755bdcb47c7ad6cf8a5bb45c8de8e3497a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle:Apprenant:EspaceApprenant.html.twig", "MoocMoocBundle:Apprenant:CoursDetail.html.twig", 1);
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
\t\t\t\t\t\t<li><i class=\"fa fa-th-list\"></i>Mes Cours</li>
                                                <li><i class=\"fa fa-list-alt\"></i><a href=\"index.html\">Detail du cours</a></li>
\t\t\t\t  </ol>
\t\t\t\t</div>
\t\t\t</div>
              <!-- page start-->
              <div class=\"row\">
                  <div class=\"col-lg-12\">
                      <section class=\"panel\">
                          <header class=\"panel-heading\">
                              Description du cours
                          </header>
                          
                        <div class=\"panel-body\">
                        <div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">Nom Cours</div>
                          <div class=\"panel-content\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "nomCours", array()), "html", null, true);
        echo "</div>
                        </div>          
\t\t<div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">Nom Formateur</div>
                          <div class=\"panel-content\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "cinformateur", array()), "getPrenom", array(), "method"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "cinformateur", array()), "getNom", array(), "method"), "html", null, true);
        echo "</div>
                        </div>\t\t\t\t
\t\t\t<div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">Difficulté</div>
                          <div class=\"panel-content\">";
        // line 96
        echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "difficulte", array()));
        echo "</div>
                        </div>
\t\t\t\t\t\t
\t\t\t<div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">Objectif</div>
                          <div class=\"panel-content\">";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "objectif", array()), "html", null, true);
        echo "</div>
                        </div> 
\t\t\t\t\t\t
\t\t\t<div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">Description</div>
                          <div class=\"panel-content\">";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "description", array()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">Liste des Chapitres</div>
                          <div class=\"panel-content\"><ul> 
                                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")));
        foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
            // line 112
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_afficher_chapitre", array("id" => $this->getAttribute($context["ch"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "titre", array()), "html", null, true);
            echo "</a> </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo " </ul></div>
                        </div>
                        <div class=\"panel panel-primary\">
                          <div class=\"panel-heading\">Titre Quiz :</div>
                          <div class=\"panel-content\"><a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_afficher_quiz", array("id" => $this->getAttribute($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "idQuiz", array()), "getId", array(), "method"))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")), "idQuiz", array()), "getTitre", array(), "method"), "html", null, true);
        echo "</a></div>
                        </div>
                        
                        <div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\">Action</div>
\t\t\t<div class=\"panel-content\">
                            
                            
\t\t\t<form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_editer_cours_apprenant", array("id" => $this->getAttribute((isset($context["coursuivi"]) ? $context["coursuivi"] : $this->getContext($context, "coursuivi")), "idcoursuivi", array()), "login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\" > \t\t\t
\t\t\t
                            
                            <!-- votre ancienne appréciation -->
                            <div class=\"form-group\">
                                <label class=\"control-label col-lg-2\" for=\"tags\">Ancienne appréciation</label>
                                <div class=\"col-lg-10\">
                                ";
        // line 132
        echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute((isset($context["coursuivi"]) ? $context["coursuivi"] : $this->getContext($context, "coursuivi")), "appreciation", array()));
        echo "
                                </div>
                            </div> 
                                
                                                
                            <!-- Appreciation -->
                           <div class=\"form-group\">
                               <label class=\"control-label col-lg-2\"  >Appreciation</label>
                                <div class=\"col-lg-10\">                               
                                    <select class=\"form-control\" id=\"appreciation\" name=\"appreciation\" >
                                  <option value=\"0\">- Choisir Appreciation -</option>
                                 <option value=\"1\">1-Mauvais</option>
                                  <option value=\"2\">2-Moyen</option>
                                 <option value=\"3\">3-bien</option>
                                  <option value=\"4\">4-Trés bien</option>
\t\t\t\t <option value=\"5\">5-Excellent</option>
                             </select>  
                           </div>
                           </div>  
\t\t\t\t\t\t
\t\t\t\t<!-- Commentaire -->
                            <div class=\"form-group\">
                             <label class=\"control-label col-lg-2\" for=\"Commentaire\">Commentaire</label>
                              <div class=\"col-lg-10\">
                               <textarea class=\"form-control\" id=\"commentaire\" name=\"commentaire\">";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coursuivi"]) ? $context["coursuivi"] : $this->getContext($context, "coursuivi")), "commentaire", array()), "html", null, true);
        echo "</textarea>
                               </div>
                             </div> 
                          
                                 
                                          
                                <!-- Buttons -->
\t\t\t\t<div class=\"col-lg-offset-2 col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Sauvgarder</button>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
                               
                            </form>
                                     
\t\t\t\t\t\t           
                            </div>
                        </div>
                        
                        </div> 
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

  

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Apprenant:CoursDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 197,  312 => 195,  307 => 193,  303 => 192,  298 => 190,  294 => 189,  289 => 187,  285 => 185,  282 => 184,  251 => 156,  224 => 132,  214 => 125,  201 => 117,  195 => 113,  184 => 112,  180 => 111,  172 => 106,  164 => 101,  156 => 96,  147 => 92,  140 => 88,  116 => 66,  113 => 65,  94 => 49,  83 => 41,  73 => 34,  65 => 28,  62 => 27,  55 => 24,  52 => 23,  46 => 20,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
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
/* 						<li><i class="fa fa-th-list"></i>Mes Cours</li>*/
/*                                                 <li><i class="fa fa-list-alt"></i><a href="index.html">Detail du cours</a></li>*/
/* 				  </ol>*/
/* 				</div>*/
/* 			</div>*/
/*               <!-- page start-->*/
/*               <div class="row">*/
/*                   <div class="col-lg-12">*/
/*                       <section class="panel">*/
/*                           <header class="panel-heading">*/
/*                               Description du cours*/
/*                           </header>*/
/*                           */
/*                         <div class="panel-body">*/
/*                         <div class="panel panel-primary">*/
/*                           <div class="panel-heading">Nom Cours</div>*/
/*                           <div class="panel-content">{{cours.nomCours}}</div>*/
/*                         </div>          */
/* 		<div class="panel panel-primary">*/
/*                           <div class="panel-heading">Nom Formateur</div>*/
/*                           <div class="panel-content">{{cours.cinformateur.getPrenom()}}  {{cours.cinformateur.getNom()}}</div>*/
/*                         </div>				*/
/* 			<div class="panel panel-primary">*/
/*                           <div class="panel-heading">Difficulté</div>*/
/*                           <div class="panel-content">{{ cours.difficulte |rating }}</div>*/
/*                         </div>*/
/* 						*/
/* 			<div class="panel panel-primary">*/
/*                           <div class="panel-heading">Objectif</div>*/
/*                           <div class="panel-content">{{cours.objectif}}</div>*/
/*                         </div> */
/* 						*/
/* 			<div class="panel panel-primary">*/
/*                           <div class="panel-heading">Description</div>*/
/*                           <div class="panel-content">{{cours.description}}</div>*/
/*                         </div>*/
/*                         <div class="panel panel-primary">*/
/*                           <div class="panel-heading">Liste des Chapitres</div>*/
/*                           <div class="panel-content"><ul> */
/*                                         {% for ch in chapitre %}*/
/*                                             <li><a href="{{path('mooc_mooc_afficher_chapitre',{'id':ch.id})}}">{{ch.titre}}</a> </li>*/
/*                                         {% endfor %} </ul></div>*/
/*                         </div>*/
/*                         <div class="panel panel-primary">*/
/*                           <div class="panel-heading">Titre Quiz :</div>*/
/*                           <div class="panel-content"><a href="{{path('mooc_mooc_afficher_quiz',{'id':cours.idQuiz.getId()})}}"> {{cours.idQuiz.getTitre()}}</a></div>*/
/*                         </div>*/
/*                         */
/*                         <div class="panel panel-primary">*/
/* 			<div class="panel-heading">Action</div>*/
/* 			<div class="panel-content">*/
/*                             */
/*                             */
/* 			<form class="form-horizontal" method="POST" action="{{path('mooc_editer_cours_apprenant', {'id' : coursuivi.idcoursuivi, 'login': apprenant.login })}}" > 			*/
/* 			*/
/*                             */
/*                             <!-- votre ancienne appréciation -->*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label col-lg-2" for="tags">Ancienne appréciation</label>*/
/*                                 <div class="col-lg-10">*/
/*                                 {{ coursuivi.appreciation |rating }}*/
/*                                 </div>*/
/*                             </div> */
/*                                 */
/*                                                 */
/*                             <!-- Appreciation -->*/
/*                            <div class="form-group">*/
/*                                <label class="control-label col-lg-2"  >Appreciation</label>*/
/*                                 <div class="col-lg-10">                               */
/*                                     <select class="form-control" id="appreciation" name="appreciation" >*/
/*                                   <option value="0">- Choisir Appreciation -</option>*/
/*                                  <option value="1">1-Mauvais</option>*/
/*                                   <option value="2">2-Moyen</option>*/
/*                                  <option value="3">3-bien</option>*/
/*                                   <option value="4">4-Trés bien</option>*/
/* 				 <option value="5">5-Excellent</option>*/
/*                              </select>  */
/*                            </div>*/
/*                            </div>  */
/* 						*/
/* 				<!-- Commentaire -->*/
/*                             <div class="form-group">*/
/*                              <label class="control-label col-lg-2" for="Commentaire">Commentaire</label>*/
/*                               <div class="col-lg-10">*/
/*                                <textarea class="form-control" id="commentaire" name="commentaire">{{coursuivi.commentaire}}</textarea>*/
/*                                </div>*/
/*                              </div> */
/*                           */
/*                                  */
/*                                           */
/*                                 <!-- Buttons -->*/
/* 				<div class="col-lg-offset-2 col-lg-9">*/
/* 												*/
/* 				<button type="submit" class="btn btn-primary">Sauvgarder</button>*/
/* 												*/
/* 				</div>*/
/*                                */
/*                             </form>*/
/*                                      */
/* 						           */
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         </div> */
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
/* */
/*   */
/* */
/* {% endblock %}*/
/* */
