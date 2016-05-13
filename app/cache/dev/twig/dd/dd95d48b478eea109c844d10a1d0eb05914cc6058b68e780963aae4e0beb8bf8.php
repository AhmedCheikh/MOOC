<?php

/* AvanzuAdminThemeBundle:Default:form.html.twig */
class __TwigTemplate_33360c598d587fe3e826e422f50db9364b48a14fc001f693b137d8d790ca3625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:form.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
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

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        echo " Forms ";
    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo " demonstration ";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 52,  88 => 51,  74 => 40,  57 => 26,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* */
/* {% block page_content %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/* */
/* */
/*         </div>*/
/*         <div class="col-md-4">*/
/* */
/*         </div>*/
/*         <div class="col-md-4">*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/* */
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Form Theme</h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     {{ form(form) }}*/
/*                 </div>*/
/*                 <div class="box-footer clearfix">*/
/* */
/*                         <button type="reset" class="btn btn-warning pull-left"><i class="fa fa-times"></i> Cancel</button>*/
/*                         <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check-square"></i> Submit</button>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="box box-solid box-primary">*/
/*                 {{ macro.box_header('built from macro', true, false, 'primary') }}*/
/*                 <div class="box-body">*/
/*                     some content...*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block page_title %} Forms {% endblock %}*/
/* {% block page_subtitle %} demonstration {% endblock %}*/
