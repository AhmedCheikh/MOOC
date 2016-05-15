<?php

/* MoocMoocBundle:Apprenant:AcceuilApprenant.html.twig */
class __TwigTemplate_1357b34799adc31a2a8982e127ba975eeab99c35dc5f2f4aea66a86cdaed2225 extends Twig_Template
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
    <style> 
    .redError {
    background-color: #0055b3;
    box-shadow: 2px 5px grey;
}
    </style>
    
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_Header($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("Header", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_sidebar($context, array $blocks = array())
    {
        // line 22
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li class=\"active\">
                      <a class=\"\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li>                     
                      <a class=\"\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                 <li>                     
                      <a class=\"\" href=\"";
        // line 43
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

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
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
                              <h4>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo "</h4>               
                              <div class=\"follow-ava\">
                                  <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(("uploads/uploads/" . $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "avatar", array()))), "resize", array(0 => 140, 1 => 140), "method"), "html", null, true);
        echo "\" />
                              </div>
                            </div>
                            <div class=\"col-lg-4 col-sm-4 follow-info\">
                               
                                <div class=\"redError\">";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "</div>\t\t\t\t
                            </div>
                            \t\t\t
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
                                      
                                      <div class=\"panel-body bio-graph-info\">
                                          <h1>Profile Info</h1>
                                          <div class=\"row\">                                           
                                              <div class=\"bio-row\">
                                                  <p><span>Cin</span>: ";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "cin", array()), "html", null, true);
        echo "</p>
                                              </div>
                                             
                                              <div class=\"bio-row\">
                                                  <p><span>Nom </span>: ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo " </p>
                                              </div>
                                               <div class=\"bio-row\">
                                                  <p><span>Email </span>: ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "email", array()), "html", null, true);
        echo "</p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Prenom </span>: ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
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
                                  
                                  <!-- edit Password -->
\t\t\t\t<div id=\"edit-password\" class=\"tab-pane\">
                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\">
                                              <h1> Editer Password</h1>
                                              <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_editer_password_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Mot de passe actuel</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"passwordActuelle\" name=\"passwordActuelle\" placeholder=\"Entez la mot de passe actuel\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Nouvelle mot de passe</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"nouveauPassword\" name=\"nouveauPassword\" placeholder=\"Entrez la nouvelle mot de passe\"  pattern=\".{6,}\" title=\"mot de passe trop courte\" required>
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
                              \t\t  
                                  <!-- edit-profile -->
                                  <div id=\"edit-profile\" class=\"tab-pane\">
                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\">
                                              <h1> Editer Profile</h1>
                                              <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_editer_profil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\" > 
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Cin</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"cin\" id=\"cin\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "cin", array()), "html", null, true);
        echo "\" disabled=\"true\">
                                                      </div>
                                                  </div>
                                                      
                                                   <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Login</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()), "html", null, true);
        echo "\"  disabled=\"true\">
                                                      </div>
                                                  </div>
                                                      
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Nom</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo "\"  required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Prenom</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Email</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "email", array()), "html", null, true);
        echo "\"  required>
                                                      </div>
                                                  </div>
                                                      
                                                    ";
        // line 232
        echo "                                                    
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

    // line 258
    public function block_javascripts($context, array $blocks = array())
    {
        // line 259
        echo "    <!-- javascripts -->
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- nice scroll -->
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <!-- jquery knob -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!--custome script for all page-->
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <!-- map -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
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
        return array (  406 => 272,  402 => 271,  398 => 270,  393 => 268,  388 => 266,  383 => 264,  379 => 263,  374 => 261,  370 => 260,  367 => 259,  364 => 258,  336 => 232,  329 => 222,  319 => 215,  310 => 209,  300 => 202,  290 => 195,  283 => 191,  248 => 159,  227 => 141,  221 => 138,  215 => 135,  208 => 131,  159 => 85,  151 => 80,  144 => 78,  123 => 59,  120 => 58,  102 => 43,  91 => 35,  81 => 28,  73 => 22,  70 => 21,  63 => 18,  60 => 17,  53 => 14,  50 => 13,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <style> */
/*     .redError {*/
/*     background-color: #0055b3;*/
/*     box-shadow: 2px 5px grey;*/
/* }*/
/*     </style>*/
/*     */
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
/*                               <h4>{{apprenant.prenom}} {{apprenant.nom}}</h4>               */
/*                               <div class="follow-ava">*/
/*                                   <img src="{{ image('uploads/uploads/'~apprenant.avatar).resize(140,140) }}" />*/
/*                               </div>*/
/*                             </div>*/
/*                             <div class="col-lg-4 col-sm-4 follow-info">*/
/*                                */
/*                                 <div class="redError">{{msg}}</div>				*/
/*                             </div>*/
/*                             			*/
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
/*                               */
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
/*                                       */
/*                                       <div class="panel-body bio-graph-info">*/
/*                                           <h1>Profile Info</h1>*/
/*                                           <div class="row">                                           */
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Cin</span>: {{ apprenant.cin }}</p>*/
/*                                               </div>*/
/*                                              */
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Nom </span>: {{ apprenant.nom }} </p>*/
/*                                               </div>*/
/*                                                <div class="bio-row">*/
/*                                                   <p><span>Email </span>: {{apprenant.email }}</p>*/
/*                                               </div>*/
/*                                               <div class="bio-row">*/
/*                                                   <p><span>Prenom </span>: {{apprenant.prenom }}</p>*/
/*                                               </div> */
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
/*                                               <h1> Editer Password</h1>*/
/*                                               <form class="form-horizontal" method="POST" action="{{path('mooc_editer_password_apprenant', {'login': apprenant.login})}}">                                                  */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Mot de passe actuel</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="passwordActuelle" name="passwordActuelle" placeholder="Entez la mot de passe actuel" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Nouvelle mot de passe</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="password" class="form-control" id="nouveauPassword" name="nouveauPassword" placeholder="Entrez la nouvelle mot de passe"  pattern=".{6,}" title="mot de passe trop courte" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <div class="col-lg-offset-2 col-lg-10">*/
/*                                                           <button type="submit" class="btn btn-primary">Sauvegarder</button>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   </form>*/
/*                                           </div>*/
/*                                       </section>*/
/* 					<section>*/
/*                                           <div class="row">                                              */
/*                                           </div>*/
/*                                       </section>*/
/*                                   </div>*/
/*                               		  */
/*                                   <!-- edit-profile -->*/
/*                                   <div id="edit-profile" class="tab-pane">*/
/*                                     <section class="panel">                                          */
/*                                           <div class="panel-body bio-graph-info">*/
/*                                               <h1> Editer Profile</h1>*/
/*                                               <form class="form-horizontal" method="POST" action="{{path('mooc_editer_profil_apprenant', {'login': apprenant.login})}}" > */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Cin</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="cin" id="cin" value="{{apprenant.cin }}" disabled="true">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                       */
/*                                                    <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Login</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="login" id="login" value="{{apprenant.login }}"  disabled="true">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                       */
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
/*                                                       */
/*                                                     {#<div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Avatar</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="file" class="form-control" name="avatar" id="avatar" title="Ajouter votre photo de profile" >*/
/*                                                       </div>*/
/*                                                     </div>#}*/
/*                                                     */
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
