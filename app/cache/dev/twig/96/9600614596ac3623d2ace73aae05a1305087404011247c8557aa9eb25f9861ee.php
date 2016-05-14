<?php

/* AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig */
class __TwigTemplate_f6fe6c775519610b97b502dd3f0a1f8a4bffbc5e762869f0074f22b780284797 extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig", 1);
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        echo $context["macro"]->getavatar($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()));
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% import "AvanzuAdminThemeBundle:layout:macros.html.twig" as macro %}*/
/* <!-- Sidebar user panel -->*/
/* <div class="user-panel">*/
/*     <div class="pull-left image">*/
/*     {{ macro.avatar(user.avatar, user.username)  }}*/
/*     </div>*/
/*     <div class="pull-left info">*/
/*         <p>{{ user.name }}</p>*/
/* */
/*         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*     </div>*/
/* </div>*/
/* */
