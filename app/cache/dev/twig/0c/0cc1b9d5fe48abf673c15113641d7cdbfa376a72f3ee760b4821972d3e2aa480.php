<?php

/* MoocMoocBundle:Cours:affichecours.html.twig */
class __TwigTemplate_646cbe6029ca75012311371c651fceb3775ac67c92f4c3d90fa9efe4ad2871cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle::layout.html.twig", "MoocMoocBundle:Cours:affichecours.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoocMoocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2 class=\"mb0\">Liste des cours</h2>
            <br/>
        </div>
    </div>

<div class=\"gray_block gb1\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"responsive\">
                <ul class=\"a_content\">
                    <!-- 1 -->
                     ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCours"]) ? $context["listeCours"] : $this->getContext($context, "listeCours")));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 20
            echo "                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\" >";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "nomCours", array()), "html", null, true);
            echo "</div>
                            <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "Objectif", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">More Details </a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "nomCours", array()), "html", null, true);
            echo "</div>
                            <p> <span style=\"color:blue;font-weight:bold\" >Description : </span>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "description", array()), "html", null, true);
            echo "</p> <br>
                            <p> <span style=\"color:blue;font-weight:bold\"> Difficulte : </span> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "difficulte", array()), "html", null, true);
            echo " </p> <br>
                            <p> <span style=\"color:blue;font-weight:bold\"> Objectif : </span> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "Objectif", array()), "html", null, true);
            echo " </p> <br>
                            <p> <span style=\"color:blue;font-weight:bold\"> Formateur : </span> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cours"], "cinformateur", array()), "getPrenom", array(), "method"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cours"], "cinformateur", array()), "getNom", array(), "method"), "html", null, true);
            echo " </p> <br>
                            <p> <span style=\"color:blue;font-weight:bold\"> Video : </span> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cours"], "video", array()), "html", null, true);
            echo " </p> <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <video width=\"400\" controls >
                                <source src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/video/iphone.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                            </video>
                        </div>
                    </li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                   
                </ul>
            </div>
        </div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Cours:affichecours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  97 => 37,  92 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  60 => 23,  56 => 22,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle::layout.html.twig" %}*/
/* */
/* {% block container %}*/
/* */
/* */
/*     <div class="container_12">*/
/*         <div class="grid_12">*/
/*             <h2 class="mb0">Liste des cours</h2>*/
/*             <br/>*/
/*         </div>*/
/*     </div>*/
/* */
/* <div class="gray_block gb1">*/
/*     <div class="container_12">*/
/*         <div class="grid_12">*/
/*             <div class="responsive">*/
/*                 <ul class="a_content">*/
/*                     <!-- 1 -->*/
/*                      {% for cours in listeCours %}*/
/*                     <li>*/
/*                         <div class="card-front">*/
/*                             <div class="text2" >{{cours.nomCours}}</div>*/
/*                             <p>{{cours.Objectif}}</p>*/
/*                         </div>*/
/*                         <div class="card-back">*/
/*                             <h2><a href="#">More Details </a></h2>*/
/*                         </div>*/
/*                         <!-- Content -->*/
/*                         <div class="all-content">*/
/*                             <div class="text2">{{cours.nomCours}}</div>*/
/*                             <p> <span style="color:blue;font-weight:bold" >Description : </span>{{cours.description}}</p> <br>*/
/*                             <p> <span style="color:blue;font-weight:bold"> Difficulte : </span> {{cours.difficulte}} </p> <br>*/
/*                             <p> <span style="color:blue;font-weight:bold"> Objectif : </span> {{cours.Objectif}} </p> <br>*/
/*                             <p> <span style="color:blue;font-weight:bold"> Formateur : </span> {{cours.cinformateur.getPrenom()}}  {{cours.cinformateur.getNom()}} </p> <br>*/
/*                             <p> <span style="color:blue;font-weight:bold"> Video : </span> {{cours.video}} </p> <br>*/
/*                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <video width="400" controls >*/
/*                                 <source src="{{asset('bundles/moocmooc/video/iphone.mp4')}}" type="video/mp4">*/
/*                             </video>*/
/*                         </div>*/
/*                     </li>*/
/*                       {% endfor %}*/
/*                    */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
