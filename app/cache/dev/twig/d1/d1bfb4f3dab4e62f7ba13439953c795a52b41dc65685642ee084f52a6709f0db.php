<?php

/* MoocMoocBundle:Organisme:test.html.twig */
class __TwigTemplate_d7a4c15106b5a4503040bd245bee7188b27ab25a0b8ede683259bcb1ae72c3ec extends Twig_Template
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
        echo "<table>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeInvitation"]) ? $context["listeInvitation"] : $this->getContext($context, "listeInvitation")));
        foreach ($context['_seq'] as $context["_key"] => $context["inv"]) {
            // line 3
            echo "            <tr>
                <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["inv"], "nom_exp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["inv"], "date_invit", array()), "d/m/Y"), "html", null, true);
            echo "</td>
               ________________________________________
                <td>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </tr></table>";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Organisme:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <table>*/
/* {% for inv in listeInvitation %}*/
/*             <tr>*/
/*                 <td>{{ inv.nom_exp }}</td>*/
/*                 <td>{{ inv.date_invit | date('d/m/Y') }}</td>*/
/*                ________________________________________*/
/*                 <td>*/
/*                      {% endfor %}*/
/*             </tr></table>*/
