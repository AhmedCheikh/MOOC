<?php

/* AvanzuAdminThemeBundle:Default:test.html.twig */
class __TwigTemplate_ab89bb35a3791af00eacc455bbe6b1b46a4e0e8793335db6bc2daefebee8bb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:test.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        echo " 
   
    
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["nb"] => $context["l"]) {
            // line 7
            echo "       
    
    <ul>
        <li>
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["nb"], "html", null, true);
            echo "
        </li>
       
    </ul>
    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nb'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "   
    
    
    
    ";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  45 => 11,  39 => 7,  35 => 6,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* */
/* {% block page_content %} */
/*    */
/*     */
/*     {% for nb,l in liste %}*/
/*        */
/*     */
/*     <ul>*/
/*         <li>*/
/*             {{nb}}*/
/*         </li>*/
/*        */
/*     </ul>*/
/*     */
/*     {% endfor %}*/
/*    */
/*     */
/*     */
/*     */
/*     {% endblock %}*/