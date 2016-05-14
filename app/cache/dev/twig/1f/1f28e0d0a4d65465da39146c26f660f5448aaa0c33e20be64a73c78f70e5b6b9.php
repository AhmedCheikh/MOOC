<?php

/* :easy_admin/organisme:etat.html.twig */
class __TwigTemplate_1d541df718684ff2954f629c246b8136f02de30cd709a4efec5d43c783bed32f extends Twig_Template
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
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == 0)) {
            // line 2
            echo "    Non Valide
    ";
        } else {
            // line 4
            echo "        Valide
        ";
        }
    }

    public function getTemplateName()
    {
        return ":easy_admin/organisme:etat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {%if value == 0%}*/
/*     Non Valide*/
/*     {%else%}*/
/*         Valide*/
/*         {%endif%}*/
