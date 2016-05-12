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
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
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
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "                    ";
        // line 9
        echo "               
                

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li>
              <a href='";
        // line 16
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_demo");
        echo "'>
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href='";
        // line 21
        echo $this->env->getExtension('routing')->getPath("charts");
        echo "'>
                <i class=\"fa fa-pie-chart\"></i>
                <span>Statistiques</span>
              </a>
            </li>
            <li>
                <a href='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "'>
                    <i class=\"fa fa-table\"></i> <span>Organismes</span> <small class=\"label pull-right bg-red\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["nbonv"]) ? $context["nbonv"] : $this->getContext($context, "nbonv")), "html", null, true);
        echo " non valide</small>
                </a>
                
            </li>
            
            <li>
              <a href='";
        // line 34
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "'>
                <i class=\"fa fa-users\"></i> <span>Formateurs</span>
                <small class=\"label pull-right bg-red\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["nbfnv"]) ? $context["nbfnv"] : $this->getContext($context, "nbfnv")), "html", null, true);
        echo " non valide</small>
              </a>
            </li>
            <li>
                 ";
    }

    // line 41
    public function block_page_content($context, array $blocks = array())
    {
        echo " 
<div class=\"row\">
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 44
            echo "        <div class=\"col-md-4\">
              <!-- Widget: user widget style 1 -->
              <div class=\"box box-widget widget-user\">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                ";
            // line 48
            if (($this->getAttribute($context["l"], "etat", array()) == 0)) {
                // line 49
                echo "                <div class=\"widget-user-header bg-red-active\">
                    ";
            } else {
                // line 51
                echo "               <div class=\"widget-user-header bg-aqua-active\">
                   ";
            }
            // line 53
            echo "                  <h3 class=\"widget-user-username\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prenom", array()), "html", null, true);
            echo "</h3>
                  <h5 class=\"widget-user-desc\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "email", array()), "html", null, true);
            echo "</h5>
                </div>
                <div class=\"widget-user-image\">
                  <img class=\"img-circle\" src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/avatar/" . $this->getAttribute($context["l"], "avatar", array()))), "html", null, true);
            echo "\" alt=\"User Avatar\">
                </div>
                <div class=\"box-footer\">
                  <div class=\"row\">
                    <div class=\"col-sm-4 border-right\">
                      <div class=\"description-block\">
                        <h5 class=\"description-header\">3,200</h5>
                        <span class=\"description-text\">SALES</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class=\"col-sm-4 border-right\">
                      <div class=\"description-block\">
                        <h5 class=\"description-header\">13,000</h5>
                        <span class=\"description-text\">FOLLOWERS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class=\"col-sm-4\">
                      <div class=\"description-block\">
                        <h5 class=\"description-header\">35</h5>
                        <span class=\"description-text\">PRODUCTS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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
        return array (  166 => 84,  133 => 57,  127 => 54,  120 => 53,  116 => 51,  112 => 49,  110 => 48,  104 => 44,  100 => 43,  94 => 41,  85 => 36,  80 => 34,  71 => 28,  67 => 27,  58 => 21,  50 => 16,  41 => 9,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block page_title %} Formateurs {% endblock %}*/
/* {% block avanzu_sidebar %}*/
/*                     {#{% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}*/
/*                         {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}*/
/*                     {% endif %}*/
/*                     {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}#}*/
/*                */
/*                 */
/* */
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*             <li>*/
/*               <a href='{{path('avanzu_admin_demo')}}'>*/
/*                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> */
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href='{{path('charts')}}'>*/
/*                 <i class="fa fa-pie-chart"></i>*/
/*                 <span>Statistiques</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href='{{path('liste_organisme')}}'>*/
/*                     <i class="fa fa-table"></i> <span>Organismes</span> <small class="label pull-right bg-red">{{nbonv}} non valide</small>*/
/*                 </a>*/
/*                 */
/*             </li>*/
/*             */
/*             <li>*/
/*               <a href='{{path('liste_formateur')}}'>*/
/*                 <i class="fa fa-users"></i> <span>Formateurs</span>*/
/*                 <small class="label pull-right bg-red">{{nbfnv}} non valide</small>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*                  {% endblock %}*/
/* {% block page_content %} */
/* <div class="row">*/
/*     {% for l in liste%}*/
/*         <div class="col-md-4">*/
/*               <!-- Widget: user widget style 1 -->*/
/*               <div class="box box-widget widget-user">*/
/*                 <!-- Add the bg color to the header using any of the bg-* classes -->*/
/*                 {% if l.etat ==0 %}*/
/*                 <div class="widget-user-header bg-red-active">*/
/*                     {%else%}*/
/*                <div class="widget-user-header bg-aqua-active">*/
/*                    {%endif%}*/
/*                   <h3 class="widget-user-username">{{l.nom}} {{l.prenom}}</h3>*/
/*                   <h5 class="widget-user-desc">{{l.email}}</h5>*/
/*                 </div>*/
/*                 <div class="widget-user-image">*/
/*                   <img class="img-circle" src="{{asset('uploads/img/avatar/' ~ l.avatar)}}" alt="User Avatar">*/
/*                 </div>*/
/*                 <div class="box-footer">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-4 border-right">*/
/*                       <div class="description-block">*/
/*                         <h5 class="description-header">3,200</h5>*/
/*                         <span class="description-text">SALES</span>*/
/*                       </div><!-- /.description-block -->*/
/*                     </div><!-- /.col -->*/
/*                     <div class="col-sm-4 border-right">*/
/*                       <div class="description-block">*/
/*                         <h5 class="description-header">13,000</h5>*/
/*                         <span class="description-text">FOLLOWERS</span>*/
/*                       </div><!-- /.description-block -->*/
/*                     </div><!-- /.col -->*/
/*                     <div class="col-sm-4">*/
/*                       <div class="description-block">*/
/*                         <h5 class="description-header">35</h5>*/
/*                         <span class="description-text">PRODUCTS</span>*/
/*                       </div><!-- /.description-block -->*/
/*                     </div><!-- /.col -->*/
/*                   </div><!-- /.row -->*/
/*                 </div>*/
/*               </div><!-- /.widget-user -->*/
/*             </div><!-- /.col -->*/
/*     {% endfor %}*/
/*           <!-- /.widget-user -->*/
/*         </div>*/
/*     */
/* */
/* {% endblock %}*/
