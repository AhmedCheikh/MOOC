<?php

/* AvanzuAdminThemeBundle:Default:Formateurs.html.twig */
class __TwigTemplate_eed82f163b4303ca7d2395c22f30869461bc27f1f6ab467d29e625a16c380a41 extends Twig_Template
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
        <div class=\"col-md-4\">
<div class=\"box box-widget widget-user-2\">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class=\"widget-user-header bg-yellow\">
              <div class=\"widget-user-image\">
                <img class=\"img-circle\" src=\"../dist/img/user7-128x128.jpg\" alt=\"User Avatar\">
              </div>
              <!-- /.widget-user-image -->
              <h3 class=\"widget-user-username\">Nadia Carmichael</h3>
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
    <div class=\"col-md-4\">
          <!-- Widget: user widget style 1 -->
          <div class=\"box box-widget widget-user-2\">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class=\"widget-user-header bg-yellow\">
              <div class=\"widget-user-image\">
                <img class=\"img-circle\" src=\"../dist/img/user7-128x128.jpg\" alt=\"User Avatar\">
              </div>
              <!-- /.widget-user-image -->
              <h3 class=\"widget-user-username\">Nadia Carmichael</h3>
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
          <!-- /.widget-user -->
        </div>
    <div class=\"col-md-4\">
          <!-- Widget: user widget style 1 -->
          <div class=\"box box-widget widget-user-2\">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class=\"widget-user-header bg-yellow\">
              <div class=\"widget-user-image\">
                <img class=\"img-circle\" src=\"../dist/img/user7-128x128.jpg\" alt=\"User Avatar\">
              </div>
              <!-- /.widget-user-image -->
              <h3 class=\"widget-user-username\">Nadia Carmichael</h3>
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
          <!-- /.widget-user -->
        </div>
    <div class=\"col-md-4\">
          <!-- Widget: user widget style 1 -->
          <div class=\"box box-widget widget-user-2\">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class=\"widget-user-header bg-yellow\">
              <div class=\"widget-user-image\">
                <img class=\"img-circle\" src=\"../dist/img/user7-128x128.jpg\" alt=\"User Avatar\">
              </div>
              <!-- /.widget-user-image -->
              <h3 class=\"widget-user-username\">Nadia Carmichael</h3>
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
          <!-- /.widget-user -->
        </div>
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
        return array (  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block page_title %} Formateurs {% endblock %}*/
/* {% block page_content %} */
/* <div class="row">*/
/*         <div class="col-md-4">*/
/* <div class="box box-widget widget-user-2">*/
/*             <!-- Add the bg color to the header using any of the bg-* classes -->*/
/*             <div class="widget-user-header bg-yellow">*/
/*               <div class="widget-user-image">*/
/*                 <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">*/
/*               </div>*/
/*               <!-- /.widget-user-image -->*/
/*               <h3 class="widget-user-username">Nadia Carmichael</h3>*/
/*               <h5 class="widget-user-desc">Lead Developer</h5>*/
/*             </div>*/
/*             <div class="box-footer no-padding">*/
/*               <ul class="nav nav-stacked">*/
/*                 <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>*/
/*                 <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>*/
/*                 <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>*/
/*                 <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*     <div class="col-md-4">*/
/*           <!-- Widget: user widget style 1 -->*/
/*           <div class="box box-widget widget-user-2">*/
/*             <!-- Add the bg color to the header using any of the bg-* classes -->*/
/*             <div class="widget-user-header bg-yellow">*/
/*               <div class="widget-user-image">*/
/*                 <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">*/
/*               </div>*/
/*               <!-- /.widget-user-image -->*/
/*               <h3 class="widget-user-username">Nadia Carmichael</h3>*/
/*               <h5 class="widget-user-desc">Lead Developer</h5>*/
/*             </div>*/
/*             <div class="box-footer no-padding">*/
/*               <ul class="nav nav-stacked">*/
/*                 <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>*/
/*                 <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>*/
/*                 <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>*/
/*                 <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*           <!-- /.widget-user -->*/
/*         </div>*/
/*     <div class="col-md-4">*/
/*           <!-- Widget: user widget style 1 -->*/
/*           <div class="box box-widget widget-user-2">*/
/*             <!-- Add the bg color to the header using any of the bg-* classes -->*/
/*             <div class="widget-user-header bg-yellow">*/
/*               <div class="widget-user-image">*/
/*                 <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">*/
/*               </div>*/
/*               <!-- /.widget-user-image -->*/
/*               <h3 class="widget-user-username">Nadia Carmichael</h3>*/
/*               <h5 class="widget-user-desc">Lead Developer</h5>*/
/*             </div>*/
/*             <div class="box-footer no-padding">*/
/*               <ul class="nav nav-stacked">*/
/*                 <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>*/
/*                 <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>*/
/*                 <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>*/
/*                 <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*           <!-- /.widget-user -->*/
/*         </div>*/
/*     <div class="col-md-4">*/
/*           <!-- Widget: user widget style 1 -->*/
/*           <div class="box box-widget widget-user-2">*/
/*             <!-- Add the bg color to the header using any of the bg-* classes -->*/
/*             <div class="widget-user-header bg-yellow">*/
/*               <div class="widget-user-image">*/
/*                 <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">*/
/*               </div>*/
/*               <!-- /.widget-user-image -->*/
/*               <h3 class="widget-user-username">Nadia Carmichael</h3>*/
/*               <h5 class="widget-user-desc">Lead Developer</h5>*/
/*             </div>*/
/*             <div class="box-footer no-padding">*/
/*               <ul class="nav nav-stacked">*/
/*                 <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>*/
/*                 <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>*/
/*                 <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>*/
/*                 <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/*           <!-- /.widget-user -->*/
/*         </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
