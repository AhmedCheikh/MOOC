<?php

/* AvanzuAdminThemeBundle:Sidebar:search-form.html.twig */
class __TwigTemplate_b73f9ee831ea8df5e78c4fa6b3f0ff54028ec4faa96cf7748780ab15141af34f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- search form -->
<form action=\"#\" method=\"get\" class=\"sidebar-form\">
    <div class=\"input-group\">
        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
        <span class=\"input-group-btn\">
            <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
        </span>
    </div>
</form>
<!-- /.search form -->";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:search-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- search form -->*/
/* <form action="#" method="get" class="sidebar-form">*/
/*     <div class="input-group">*/
/*         <input type="text" name="q" class="form-control" placeholder="Search..."/>*/
/*         <span class="input-group-btn">*/
/*             <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*         </span>*/
/*     </div>*/
/* </form>*/
/* <!-- /.search form -->*/
