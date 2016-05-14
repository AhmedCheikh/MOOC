<?php

/* MoocMoocBundle:Quiz:testmodifier.html.twig */
class __TwigTemplate_f5834d4ffb5fc89f7960f3d1cce14bf3d40273f5933a13cee017ab42413052da extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 2
            echo "    <input type=\"checkbox\" name=\"etat\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "etat", array()), "html", null, true);
            echo "\" />";
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "reponse", array()), "html", null, true);
            echo "<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Quiz:testmodifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for r in rep %}*/
/*     <input type="checkbox" name="etat" value="{{ r.etat}}" />{{ r.reponse}}<br>*/
/* {% endfor %}*/
/* */
/* */
