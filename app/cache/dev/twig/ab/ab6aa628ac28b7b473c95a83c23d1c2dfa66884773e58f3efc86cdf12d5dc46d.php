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
    .blueError {
    background-color: #0055b3;
    box-shadow: 2px 5px grey;
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
    font-size:15px;
}
    </style>
    
";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_Header($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("Header", $context, $blocks);
        echo "
";
    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        // line 25
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li class=\"active\">
                      <a class=\"\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li>                     
                      <a class=\"\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                 <li>                     
                      <a class=\"\" href=\"";
        // line 46
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

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
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
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo "</h4>               
                              <div class=\"follow-ava\">
                                  <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image(("uploads/uploads/" . $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "avatar", array()))), "resize", array(0 => 140, 1 => 140), "method"), "html", null, true);
        echo "\" />
                              </div>
                            </div>
                            <div class=\"col-lg-4 col-sm-4 follow-info\">
                               
                                <div class=\"blueError\">";
        // line 88
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
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "cin", array()), "html", null, true);
        echo "</p>
                                              </div>
                                             
                                              <div class=\"bio-row\">
                                                  <p><span>Nom </span>: ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo " </p>
                                              </div>
                                               <div class=\"bio-row\">
                                                  <p><span>Email </span>: ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "email", array()), "html", null, true);
        echo "</p>
                                              </div>
                                              <div class=\"bio-row\">
                                                  <p><span>Prenom </span>: ";
        // line 144
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
        // line 162
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
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_editer_profil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\" > 
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Cin</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"cin\"  value=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "cin", array()), "html", null, true);
        echo "\" disabled=\"true\">
                                                      </div>
                                                  </div>
                                                      
                                                   <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Login</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"login\"  value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()), "html", null, true);
        echo "\"  disabled=\"true\">
                                                      </div>
                                                  </div>
                                                      
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Nom</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"nom\"  value=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "nom", array()), "html", null, true);
        echo "\"  required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Prenom</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"prenom\"  value=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "prenom", array()), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-2 control-label\">Email</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" name=\"email\"  value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "email", array()), "html", null, true);
        echo "\"  required>
                                                      </div>
                                                  </div>
                                                      
                                                    ";
        // line 235
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

    // line 261
    public function block_javascripts($context, array $blocks = array())
    {
        // line 262
        echo "
    ";
        // line 263
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  
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
        return array (  373 => 263,  370 => 262,  367 => 261,  339 => 235,  332 => 225,  322 => 218,  313 => 212,  303 => 205,  293 => 198,  286 => 194,  251 => 162,  230 => 144,  224 => 141,  218 => 138,  211 => 134,  162 => 88,  154 => 83,  147 => 81,  126 => 62,  123 => 61,  105 => 46,  94 => 38,  84 => 31,  76 => 25,  73 => 24,  66 => 21,  63 => 20,  56 => 17,  53 => 16,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <style> */
/*     .blueError {*/
/*     background-color: #0055b3;*/
/*     box-shadow: 2px 5px grey;*/
/*     font-style: normal;*/
/*     font-family: Arial, Helvetica, sans-serif;*/
/*     font-size:15px;*/
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
/*                                 <div class="blueError">{{msg}}</div>				*/
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
/*                                                           <input type="text" class="form-control" name="cin"  value="{{apprenant.cin }}" disabled="true">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                       */
/*                                                    <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Login</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="login"  value="{{apprenant.login }}"  disabled="true">*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                       */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Nom</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="nom"  value="{{apprenant.nom }}"  required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Prenom</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="prenom"  value="{{apprenant.prenom }}" required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                   */
/*                                                   <div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Email</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="text" class="form-control" name="email"  value="{{apprenant.email }}"  required>*/
/*                                                       </div>*/
/*                                                   </div>*/
/*                                                       */
/*                                                     {#<div class="form-group">*/
/*                                                       <label class="col-lg-2 control-label">Avatar</label>*/
/*                                                       <div class="col-lg-6">*/
/*                                                           <input type="file" class="form-control"  name="avatar"  title="Ajouter votre photo de profile" >*/
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
/* */
/*     {{ parent()}}*/
/* */
/*   */
/* {% endblock %}*/
/* */
