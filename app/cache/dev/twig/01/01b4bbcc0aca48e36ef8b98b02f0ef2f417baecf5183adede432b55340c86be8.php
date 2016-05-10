<?php

/* AvanzuAdminThemeBundle:Default:Formateurs.html.twig */
class __TwigTemplate_c5f3dc75f5e146173182a6b68d81166944472d17b85acf5e36f5cd5b866e0a61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:Formateurs.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        echo " Formateurs ";
    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        echo " 
<div class=\"row\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 6
            echo "        <div class=\"col-md-4\">
            
<div class=\"box box-widget widget-user-2\">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class=\"widget-user-header bg-yellow\">
              <div class=\"widget-user-image\">
                <img class=\"img-circle\" src=\"../dist/img/user7-128x128.jpg\" alt=\"User Avatar\">
              </div>
              <!-- /.widget-user-image -->
              
              <h3 class=\"widget-user-username\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nom", array()), "html", null, true);
            echo "</h3>
              <h5 class=\"widget-user-desc\">Lead Developer</h5>
            </div>
              
            <div class=\"box-footer no-padding\">
              <ul class=\"nav nav-stacked\">
                <li><a href=\"#\">Projects <span class=\"pull-right badge bg-blue\">31</span></a></li>
                <li><a href=\"#\">Tasks <span class=\"pull-right badge bg-aqua\">5</span></a></li>
                <li><a href=\"#\">Completed Projects <span class=\"pull-right badge bg-green\">12</span></a></li>
                <li><a href=\"#\">Followers <span class=\"pull-right badge bg-red\">842</span></a></li>
              </ul>
            </div>
            
          </div>
              
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "          <!-- /.widget-user -->
        </div>
    

";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:Formateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 33,  57 => 16,  45 => 6,  41 => 5,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block page_title %} Formateurs {% endblock %}*/
/* {% block page_content %} */
/* <div class="row">*/
/*     {% for l in liste%}*/
/*         <div class="col-md-4">*/
/*             */
/* <div class="box box-widget widget-user-2">*/
/*             <!-- Add the bg color to the header using any of the bg-* classes -->*/
/*             <div class="widget-user-header bg-yellow">*/
/*               <div class="widget-user-image">*/
/*                 <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">*/
/*               </div>*/
/*               <!-- /.widget-user-image -->*/
/*               */
/*               <h3 class="widget-user-username">{{l.nom}}</h3>*/
/*               <h5 class="widget-user-desc">Lead Developer</h5>*/
/*             </div>*/
/*               */
/*             <div class="box-footer no-padding">*/
/*               <ul class="nav nav-stacked">*/
/*                 <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>*/
/*                 <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>*/
/*                 <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>*/
/*                 <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>*/
/*               </ul>*/
/*             </div>*/
/*             */
/*           </div>*/
/*               */
/*         </div>*/
/*     {% endfor %}*/
/*           <!-- /.widget-user -->*/
/*         </div>*/
/*     */
/* */
/* {% endblock %}*/
