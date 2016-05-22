<?php

/* MoocMoocBundle:Quiz:afficherQuiz.html.twig */
class __TwigTemplate_6ba9e9c9d7e6460693f8e673080ed4b759bad3969df6f938953284a90e0fc082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle:Apprenant:EspaceApprenant.html.twig", "MoocMoocBundle:Quiz:afficherQuiz.html.twig", 1);
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
    
        <!-- Bootstrap CSS -->    
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- bootstrap theme -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--external css-->
        <!-- font icon -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">\t
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    


";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        // line 23
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
        echo "            <!--main content start-->
            <section id=\"main-content\">
                <section class=\"wrapper\">            
                    <!--overview start-->
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <h2>     
                                <div>
                                    ";
        // line 74
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
                                    <center><b> <label style=\"color:blue;font-weight:bold;font-size: 150%;\"> Quiz : ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "titre", array()), "html", null, true);
        echo "</label></b></center>
                                </header>
                                <div class=\"panel-body\">
                                    <div class=\"form\">
                                        <form class=\"form-validate form-horizontal\" id=\"feedback_form\" method=\"POST\" action=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_passer_quiz", array("login" => $this->getAttribute((isset($context["apprenant"]) ? $context["apprenant"] : $this->getContext($context, "apprenant")), "login", array()), "id" => $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "id", array()))), "html", null, true);
        echo "\">

                                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            echo " 

                                                <label style=\"color:blue;background-color:beige;font-size: 250%;\" >";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["q"], "0", array(), "array"), "idquestion", array()), "question", array()), "html", null, true);
            echo "</label><br>
                                                
                                                 ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 101
                echo "                                                    <table>

                                                        <input type=\"checkbox\" name=\"";
                // line 103
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["q"], $context["i"], array(), "array"), "etat", array()), "html", null, true);
                echo "\" /><label style=\"color:black;font-size: 150%\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["q"], $context["i"], array(), "array"), "rep", array()), "html", null, true);
                echo "</label><br>

                                                    </table>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                            <button class=\"btn btn-primary\" type=\"submit\">valider</button>

                                            </section>
                                            <br>
                                            </div>
                                            </div>

                                            <br><br>
                                            </section>
                                            </section>
                                            <!--main content end-->
                                            </section>
                                            <!-- container section start -->

";
    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        // line 125
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Quiz:afficherQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 125,  243 => 124,  225 => 108,  219 => 107,  205 => 103,  201 => 101,  197 => 100,  192 => 98,  185 => 96,  180 => 94,  173 => 90,  154 => 74,  144 => 66,  141 => 65,  122 => 49,  111 => 41,  101 => 34,  93 => 28,  90 => 27,  82 => 23,  79 => 22,  70 => 17,  66 => 16,  61 => 14,  57 => 13,  51 => 10,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle:Apprenant:EspaceApprenant.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent()}}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*     */
/*         <!-- Bootstrap CSS -->    */
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*         <!-- bootstrap theme -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/*         <!--external css-->*/
/*         <!-- font icon -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css')}}" rel="stylesheet">*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*         <!-- Custom styles -->*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style.css')}}" rel="stylesheet">	*/
/*         <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style-responsive.css')}}" rel="stylesheet">*/
/*     */
/* */
/* */
/* {% endblock %}*/
/* {% block title %}*/
/*     {{parent()}}*/
/*      */
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
/*                                     <center><b> <label style="color:blue;font-weight:bold;font-size: 150%;"> Quiz : {{ quiz.titre}}</label></b></center>*/
/*                                 </header>*/
/*                                 <div class="panel-body">*/
/*                                     <div class="form">*/
/*                                         <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="{{path ('mooc_mooc_passer_quiz',{'login': apprenant.login,'id':quiz.id})}}">*/
/* */
/*                                             {% for q in rep %} */
/* */
/*                                                 <label style="color:blue;background-color:beige;font-size: 250%;" >{{q["0"].idquestion.question}}</label><br>*/
/*                                                 */
/*                                                  {% for i in 0..3 %}*/
/*                                                     <table>*/
/* */
/*                                                         <input type="checkbox" name="{{i}}" value="{{q[i].etat}}" /><label style="color:black;font-size: 150%" >{{q[i].rep}}</label><br>*/
/* */
/*                                                     </table>*/
/*                                                 {% endfor %}*/
/*                                             {% endfor %}*/
/*                                             <button class="btn btn-primary" type="submit">valider</button>*/
/* */
/*                                             </section>*/
/*                                             <br>*/
/*                                             </div>*/
/*                                             </div>*/
/* */
/*                                             <br><br>*/
/*                                             </section>*/
/*                                             </section>*/
/*                                             <!--main content end-->*/
/*                                             </section>*/
/*                                             <!-- container section start -->*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent()}}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
