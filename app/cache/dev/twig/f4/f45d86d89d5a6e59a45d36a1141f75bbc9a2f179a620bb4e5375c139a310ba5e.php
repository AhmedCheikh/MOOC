<?php

/* MoocMoocBundle:Quiz:note.html.twig */
class __TwigTemplate_40ccfc760f201bf87f4b3494bf60e43963c52024274076aa5aecfec28de2308e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle:Apprenant:EspaceApprenant.html.twig", "MoocMoocBundle:Quiz:note.html.twig", 1);
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

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_sidebar($context, array $blocks = array())
    {
        // line 13
        echo "    <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li>
                      <a class=\"\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_accueil_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"fa fa-user-md\"></i>
                          <span>Mon Profile</span>
                      </a>
                  </li>

                  <li class=\"active\">                     
                      <a class=\"\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_cours_apprenant", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()))), "html", null, true);
        echo "\">
                          <i class=\"icon_book_alt\"></i>
                          <span>Mes Cours</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class=\"\" href=\"";
        // line 34
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

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "            <!--main content start-->
            <section id=\"main-content\">
                <section class=\"wrapper\">            
                    <!--overview start-->
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Profil Formateur</h3>
                            <h2>     
                                <div>
                                    ";
        // line 60
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "
                                </div><br>
                            </h2>
                            <ol class=\"breadcrumb\">
                                <li><i class=\"fa fa-home\"></i><a href=\"#\">Acceuil</a></li>
                                <li><i class=\"fa fa-laptop\"></i>Profil</li>\t\t\t\t\t\t  \t
                            </ol>
                        </div>
                    </div>

                    <!-- Today status end -->

                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <section class=\"panel\">
                                <header class=\"panel-heading\">                                   
                                </header>
                                <div class=\"panel-body\">
                                    <center> <h3 style=\"color:blue;font-weight:bold\">Votre Note est :</h3></center><br>
                                    <h2 style=\"font-weight:bold\"><center> ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "html", null, true);
        echo " /20</center></h2>
                                    
                                    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_pdf", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Generate pdf</a>
                                </div>
                                 
                                            </section>
                                            <br>
                                            </div>
                                            </div>

                                            <br><br>
                                            </section>
                                            </section>
                                            <!--main content end-->


";
    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        // line 98
        echo "    
    ";
        // line 99
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Quiz:note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 99,  171 => 98,  168 => 97,  149 => 81,  144 => 79,  122 => 60,  111 => 51,  108 => 50,  89 => 34,  78 => 26,  68 => 19,  60 => 13,  57 => 12,  50 => 9,  47 => 8,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*  */
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
/*             <!--main content start-->*/
/*             <section id="main-content">*/
/*                 <section class="wrapper">            */
/*                     <!--overview start-->*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <h3 class="page-header"><i class="fa fa-laptop"></i> Profil Formateur</h3>*/
/*                             <h2>     */
/*                                 <div>*/
/*                                     {{ socialButtons() }}*/
/*                                 </div><br>*/
/*                             </h2>*/
/*                             <ol class="breadcrumb">*/
/*                                 <li><i class="fa fa-home"></i><a href="#">Acceuil</a></li>*/
/*                                 <li><i class="fa fa-laptop"></i>Profil</li>						  	*/
/*                             </ol>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- Today status end -->*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <section class="panel">*/
/*                                 <header class="panel-heading">                                   */
/*                                 </header>*/
/*                                 <div class="panel-body">*/
/*                                     <center> <h3 style="color:blue;font-weight:bold">Votre Note est :</h3></center><br>*/
/*                                     <h2 style="font-weight:bold"><center> {{note}} /20</center></h2>*/
/*                                     */
/*                                     <a href="{{path('mooc_pdf',{'id':id})}}">Generate pdf</a>*/
/*                                 </div>*/
/*                                  */
/*                                             </section>*/
/*                                             <br>*/
/*                                             </div>*/
/*                                             </div>*/
/* */
/*                                             <br><br>*/
/*                                             </section>*/
/*                                             </section>*/
/*                                             <!--main content end-->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     */
/*     {{ parent()}}*/
/* */
/* {% endblock %}*/
/* */
