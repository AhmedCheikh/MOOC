<?php

/* MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig */
class __TwigTemplate_bccb6bba2cbcf8b88877792726589e5b3feafeb5b6000635a12bde3bc1d682ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle:Apprenant:EspaceApprenant.html.twig", "MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'Header' => array($this, 'block_Header'),
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
    public function block_Header($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("Header", $context, $blocks);
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
                  <li class=\"active\">
                      <a class=\"\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li>                     
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

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "
    <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\">
\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h3 class=\"page-header\"><i class=\"fa fa-user-md\"></i> Profile</h3>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-user-md\"></i><a href=\"index.html\">Profile</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
              <div class=\"row\">
                <!-- profile-widget -->
                <div class=\"col-lg-12\">
                    <div class=\"profile-widget profile-widget-info\">
                          <div class=\"panel-body\">
                            <div class=\"col-lg-2 col-sm-2\">
                              <h4>Khoubaib Chamekh</h4>               
                              <div class=\"follow-ava\">
                                  <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/img/profile-avatar.jpg"), "html", null, true);
        echo "\" alt=\"\">
                              </div>
                              <h6>Administrator</h6>
                            </div>
                            <div class=\"col-lg-4 col-sm-4 follow-info\">
                                <p>Hello I’m Khoubaib Chamekh, a leading expert in interactive and creative design.</p>
                                <p>@khoubaibchamekh</p>
\t\t\t\t\t\t\t\t<p><i class=\"fa fa-twitter\">Khoubaib</i></p>
                                <h6>
                                    <span><i class=\"icon_clock_alt\"></i>11:05 AM</span>
                                    <span><i class=\"icon_calendar\"></i>05.04.16</span>
                                    <span><i class=\"icon_pin_alt\"></i>TN</span>
                                </h6>
                            </div>
                            
\t\t\t\t\t\t\t<div class=\"col-lg-2 col-sm-6 follow-info weather-category\">
                                      <ul>
                                          <li class=\"active\">
                                              
                                              <i class=\"fa fa-bell fa-2x\"> </i><br>
\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t  Contrary to popular belief, Lorem Ipsum is not simply 
                                          </li>
\t\t\t\t\t\t\t\t\t\t   
                                      </ul>
                            </div>
\t\t\t\t\t\t\t
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
                                      <a data-toggle=\"tab\" href=\"#profile\">
                                          <i class=\"icon-home\"></i>
                                          Profile
                                      </a>
                                  </li>
                                 
                                  <li class=\"\">
                                      <a data-toggle=\"tab\" href=\"#edit-profile\">
                                          <i class=\"icon-envelope\"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                                  
                                  ";
        // line 130
        echo "                                  
                                  <li class=\"\">
                                      <a data-toggle=\"tab\" href=\"#edit-password\">
                                          <i class=\"icon-envelope\"></i>
                                          Edit Password
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class=\"panel-body\">
                              <div class=\"tab-content\">

                                  <!-- profile -->
                                  <div id=\"profile\" class=\"tab-pane active\">
                                    <section class=\"panel\">
                                      <div class=\"bio-graph-heading\">
                                                Hello I’m Khoubaib Chamekh, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                      </div>
                                      <div class=\"panel-body bio-graph-info\">
                                          <h1>Bio Graph</h1>
                                          <div class=\"row\">
                                              <div class=\"bio-row\">
                                                  <p><span>Nom </span>: ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo " </p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Prenom </span>: ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
        echo "</p>
                                              </div>                                              
                                              <div class=\"bio-row\">
                                                  <p><span>Birthday</span>: 29 Mai 1992</p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Country </span>: Tunisie</p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Occupation </span>: UI Designer</p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Email </span>: ";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "email", array()), "html", null, true);
        echo "</p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Mobile </span>: (+6283) 456 789</p>
                                              </div>
                                             
                                          </div>
                                      </div>
                                    </section>
                                   
                                    
                                      <section>
                                          <div class=\"row\">                                              
                                          </div>
                                      </section>
                                  </div>
                                  
                                  <!-- edit Password -->
\t\t\t\t<div id=\"edit-password\" class=\"tab-pane\">
                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\">
                                              <h1> Edit Password</h1>
                                              <form class=\"form-horizontal\" role=\"form\">                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Mot de passe actuel</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"f-name\" placeholder=\"Entez le mot de passe actuel\">
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Nouveau mot de passe</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"l-name\" placeholder=\"Entrez le nouveau mot de passe\">
                                                      </div>
                                                  </div>
\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Retapez la mot de passe</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"l-name\" placeholder=\"Retapez le nouveau mot de passe\">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-2 col-lg-10\">
                                                          <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                                                          
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
\t\t\t\t\t<section>
                                          <div class=\"row\">                                              
                                          </div>
                                      </section>
                                  </div>
                              
                                  ";
        // line 269
        echo "\t\t\t\t\t\t\t\t  
                                  <!-- edit-profile -->
                                  <div id=\"edit-profile\" class=\"tab-pane\">
                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\">
                                              <h1> Profile Info</h1>
                                              <form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_editer_profil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\" > 
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Cin</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"cin\" id=\"cin\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "cin", array()), "html", null, true);
        echo "\" disabled=\"true\">
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Nom</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" value=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo "\"  required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Prenom</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Email</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" value=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "email", array()), "html", null, true);
        echo "\"  required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Login</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\" value=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()), "html", null, true);
        echo "\"  required>
                                                      </div>
                                                  </div>
                                                  

                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-2 col-lg-10\">
                                                          <button type=\"submit\" name=\"sauvegarder\" class=\"btn btn-primary\">Sauvegarder</button>
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

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->


    

";
    }

    // line 334
    public function block_javascripts($context, array $blocks = array())
    {
        // line 335
        echo "    <!-- javascripts -->
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <!-- map -->
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/gdp-data.js"), "html", null, true);
        echo "\"></script>\t


  <script>
      //knob
      \$(\".knob\").knob();
\t  
\t  
\t  /* ---------- Map ---------- */
\t\$(function(){
\t  \$('#map').vectorMap({
\t    map: 'world_mill_en',
\t    series: {
\t      regions: [{
\t        values: gdpData,
\t        scale: ['#000', '#000'],
\t        normalizeFunction: 'polynomial'
\t      }]
\t    },
\t\tbackgroundColor: '#eef3f7',
\t    onLabelShow: function(e, el, code){
\t      el.html(el.html()+' (GDP - '+gdpData[code]+')');
\t    }
\t  });
\t});

  </script>
  
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 348,  421 => 347,  417 => 346,  412 => 344,  407 => 342,  402 => 340,  398 => 339,  393 => 337,  389 => 336,  386 => 335,  383 => 334,  350 => 304,  341 => 298,  331 => 291,  322 => 285,  313 => 279,  306 => 275,  298 => 269,  238 => 167,  223 => 155,  217 => 152,  193 => 130,  139 => 73,  116 => 52,  113 => 51,  95 => 36,  84 => 28,  74 => 21,  66 => 15,  63 => 14,  56 => 11,  53 => 10,  46 => 7,  43 => 6,  36 => 4,  33 => 3,  11 => 1,);
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
/* {% block Header %}*/
/*     {{ parent()}}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <!--sidebar start-->*/
/*       <aside>*/
/*           <div id="sidebar"  class="nav-collapse ">*/
/*               <!-- sidebar menu start-->*/
/*               <ul class="sidebar-menu">                */
/*                   <li class="active">*/
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
/*                  <li>                     */
/*                       <a class="" href="{{path('mooc_chercher_cours_apprenant', {'login': apprenant.login})}}">*/
/*                           <i class="icon_search"></i>*/
/*                           <span>Chercher Cours</span>*/
/*                           */
/*                       </a>*/
/*                                          */
/*                   </li>         */
/*               </ul>*/
/*               <!-- sidebar menu end-->*/
/*           </div>*/
/*       </aside>*/
/*       <!--sidebar end-->*/
/*  */
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/* */
/*     <!--main content start-->*/
/*       <section id="main-content">*/
/*           <section class="wrapper">*/
/* 		  <div class="row">*/
/* 				<div class="col-lg-12">*/
/* 					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>*/
/* 					<ol class="breadcrumb">*/
/* 						<li><i class="fa fa-user-md"></i><a href="index.html">Profile</a></li>*/
/* 						*/
/* 					</ol>*/
/* 				</div>*/
/* 			</div>*/
/*               <div class="row">*/
/*                 <!-- profile-widget -->*/
/*                 <div class="col-lg-12">*/
/*                     <div class="profile-widget profile-widget-info">*/
/*                           <div class="panel-body">*/
/*                             <div class="col-lg-2 col-sm-2">*/
/*                               <h4>Khoubaib Chamekh</h4>               */
/*                               <div class="follow-ava">*/
/*                                   <img src="{{asset('bundles/moocmooc/ApprenantAssets/img/profile-avatar.jpg')}}" alt="">*/
/*                               </div>*/
/*                               <h6>Administrator</h6>*/
/*                             </div>*/
/*                             <div class="col-lg-4 col-sm-4 follow-info">*/
/*                                 <p>Hello I’m Khoubaib Chamekh, a leading expert in interactive and creative design.</p>*/
/*                                 <p>@khoubaibchamekh</p>*/
/* 								<p><i class="fa fa-twitter">Khoubaib</i></p>*/
/*                                 <h6>*/
/*                                     <span><i class="icon_clock_alt"></i>11:05 AM</span>*/
/*                                     <span><i class="icon_calendar"></i>05.04.16</span>*/
/*                                     <span><i class="icon_pin_alt"></i>TN</span>*/
/*                                 </h6>*/
/*                             </div>*/
/*                             */
/* 							<div class="col-lg-2 col-sm-6 follow-info weather-category">*/
/*                                       <ul>*/
/*                                           <li class="active">*/
/*                                               */
/*                                               <i class="fa fa-bell fa-2x"> </i><br>*/
/* 											  */
/* 											  Contrary to popular belief, Lorem Ipsum is not simply */
/*                                           </li>*/
/* 										   */
/*                                       </ul>*/
/*                             </div>*/
/* 							*/
/*                           </div>*/
/*                     </div>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- page start-->*/
/*               <div class="row">*/
/*                  <div class="col-lg-12">*/
/*                     <section class="panel">*/
/*                           <header class="panel-heading tab-bg-info">*/
/*                               <ul class="nav nav-tabs">*/
/*                                   <li class="active">*/
/*                                       <a data-toggle="tab" href="#profile">*/
/*                                           <i class="icon-home"></i>*/
/*                                           Profile*/
/*                                       </a>*/
/*                                   </li>*/
/*                                  */
/*                                   <li class="">*/
/*                                       <a data-toggle="tab" href="#edit-profile">*/
/*                                           <i class="icon-envelope"></i>*/
/*                                           Edit Profile*/
/*                                       </a>*/
/*                                   </li>*/
/*                                   */
/*                                   {#<li class="">*/
/*                                       <a data-toggle="tab" href="#edit-country">*/
/*                                           <i class="icon-envelope"></i>*/
/*                                           Edit Country*/
/*                                       </a>*/
/*                                   </li>#}*/
/*                                   */
/*                                   <li class="">*/
/*                                       <a data-toggle="tab" href="#edit-password">*/
/*                                           <i class="icon-envelope"></i>*/
/*                                           Edit Password*/
/*                                       </a>*/
/*                                   </li>*/
/*                               </ul>*/
/*                           </header>*/
/*                           <div class="panel-body">*/
/*                               <div class="tab-content">*/
/* */
/*                                   <!-- profile -->*/
/*                                   <div id="profile" class="tab-pane active">*/
/*                                     <section class="panel">*/
/*                                       <div class="bio-graph-heading">*/
/*                                                 Hello I’m Khoubaib Chamekh, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.*/
/*                                       </div>*/
/*                                       <div class="panel-body bio-graph-info">*/
/*                                           <h1>Bio Graph</h1>*/
/*                                           <div class="row">*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Nom </span>: {{ apprenant.nom }} </p>*/
/*                                               </div>*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Prenom </span>: {{apprenant.prenom }}</p>*/
/*                                               </div>                                              */
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Birthday</span>: 29 Mai 1992</p>*/
/*                                               </div>*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Country </span>: Tunisie</p>*/
/*                                               </div>*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Occupation </span>: UI Designer</p>*/
/*                                               </div>*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Email </span>: {{apprenant.email }}</p>*/
/*                                               </div>*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Mobile </span>: (+6283) 456 789</p>*/
/*                                               </div>*/
/*                                              */
/*                                           </div>*/
/*                                       </div>*/
/*                                     </section>*/
/*                                    */
/*                                     */
/*                                       <section>*/
/*                                           <div class="row">                                              */
/*                                           </div>*/
/*                                       </section>*/
/*                                   </div>*/
/*                                   */
/*                                   <!-- edit Password -->*/
/* 				<div id="edit-password" class="tab-pane">*/
/*                                     <section class="panel">                                          */
/*                                           <div class="panel-body bio-graph-info">*/
/*                                               <h1> Edit Password</h1>*/
/*                                               <form class="form-horizontal" role="form">                                                  */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Mot de passe actuel</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="f-name" placeholder="Entez le mot de passe actuel">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Nouveau mot de passe</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="l-name" placeholder="Entrez le nouveau mot de passe">*/
/*                                                       </div>*/
/*                                                   </div>*/
/* 												  <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Retapez la mot de passe</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="l-name" placeholder="Retapez le nouveau mot de passe">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   */
/*                                                   <div class="form-group">*/
/*                                                       <div class="col-lg-offset-2 col-lg-10">*/
/*                                                           <button type="submit" class="btn btn-primary">Sauvegarder</button>*/
/*                                                           */
/*                                                       </div>*/
/*                                                   </div>*/
/*                                               </form>*/
/*                                           </div>*/
/*                                       </section>*/
/* 					<section>*/
/*                                           <div class="row">                                              */
/*                                           </div>*/
/*                                       </section>*/
/*                                   </div>*/
/*                               */
/*                                   {#<!-- edit Country -->*/
/* 				<div id="edit-country" class="tab-pane">*/
/*                                     <section class="panel">                                          */
/*                                           <div class="panel-body bio-graph-info">*/
/*                                               <h1> Edit Country</h1>*/
/* 						<div class="row">	  */
/*                                                     <div class="col-lg-9 col-md-12">*/
/* 					*/
/* 							<div class="panel panel-default">*/
/* 							<div class="panel-heading">*/
/* 							<h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>*/
/* 													*/
/* 							</div>*/
/* 							<div class="panel-body-map">*/
/* 								<div id="map" style="height:380px"></div>	*/
/* 							</div>*/
/* 							*/
/* 							</div>*/
/* 						</div>*/
/* 						</div>*/
/* 										*/
/*                                               <form class="form-horizontal" role="form">                                                  */
/*                                                   <div class="form-group">*/
/*                                                       */
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" id="my-country" placeholder=" ">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   */
/*                                                   <div class="form-group">*/
/*                                                       <div class="col-lg-offset-2 col-lg-10">*/
/*                                                           <button type="submit" class="btn btn-primary">Sauvegarder</button>*/
/*                                                           */
/*                                                       </div>*/
/*                                                   </div>*/
/*                                               </form>*/
/*                                           </div>*/
/*                                       </section>*/
/* */
/*                                     <section>*/
/*                                         <div class="row">                                              */
/*                                         </div>*/
/*                                     </section>*/
/* 									  */
/*                                 </div>#}*/
/* 								  */
/*                                   <!-- edit-profile -->*/
/*                                   <div id="edit-profile" class="tab-pane">*/
/*                                     <section class="panel">                                          */
/*                                           <div class="panel-body bio-graph-info">*/
/*                                               <h1> Profile Info</h1>*/
/*                                               <form class="form-horizontal" role="form" method="POST" action="{{path('mooc_editer_profil_apprenant', {'login': apprenant.login})}}" > */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Cin</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="cin" id="cin" value="{{apprenant.cin }}" disabled="true">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Nom</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="nom" id="nom" value="{{apprenant.nom }}"  required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Prenom</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="prenom" id="prenom" value="{{apprenant.prenom }}" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Email</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="email" id="email" value="{{apprenant.email }}"  required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Login</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="login" id="login" value="{{apprenant.login }}"  required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   */
/* */
/*                                                   <div class="form-group">*/
/*                                                       <div class="col-lg-offset-2 col-lg-10">*/
/*                                                           <button type="submit" name="sauvegarder" class="btn btn-primary">Sauvegarder</button>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                               </form>*/
/*                                           </div>*/
/*                                       </section>*/
/*                                   </div>*/
/*                               </div>*/
/*                           </div>*/
/*                       </section>*/
/*                  </div>*/
/*               </div>*/
/* */
/*               <!-- page end-->*/
/*           </section>*/
/*       </section>*/
/*       <!--main content end-->*/
/* */
/* */
/*     */
/* */
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
/*     <!-- map -->*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <script src="{{asset('bundles/moocmooc/ApprenantAssets/js/gdp-data.js')}}"></script>	*/
/* */
/* */
/*   <script>*/
/*       //knob*/
/*       $(".knob").knob();*/
/* 	  */
/* 	  */
/* 	  /* ---------- Map ---------- *//* */
/* 	$(function(){*/
/* 	  $('#map').vectorMap({*/
/* 	    map: 'world_mill_en',*/
/* 	    series: {*/
/* 	      regions: [{*/
/* 	        values: gdpData,*/
/* 	        scale: ['#000', '#000'],*/
/* 	        normalizeFunction: 'polynomial'*/
/* 	      }]*/
/* 	    },*/
/* 		backgroundColor: '#eef3f7',*/
/* 	    onLabelShow: function(e, el, code){*/
/* 	      el.html(el.html()+' (GDP - '+gdpData[code]+')');*/
/* 	    }*/
/* 	  });*/
/* 	});*/
/* */
/*   </script>*/
/*   */
/* {% endblock %}*/
/* */
