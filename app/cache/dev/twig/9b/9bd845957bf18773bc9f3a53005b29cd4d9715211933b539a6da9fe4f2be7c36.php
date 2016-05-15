<?php

/* :easy_admin/Formateur:cv.html.twig */
class __TwigTemplate_c53d59b31d7d53410b29e4bce5b59f14126570eab5c405f99af59fe84c7cd27e extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "base_path", array()) . "/") . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "\">Consulter  (PDF)</a>";
    }

    public function getTemplateName()
    {
        return ":easy_admin/Formateur:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <a href="{{ field_options.base_path ~ '/' ~ value  }}">Consulter  (PDF)</a>*/
