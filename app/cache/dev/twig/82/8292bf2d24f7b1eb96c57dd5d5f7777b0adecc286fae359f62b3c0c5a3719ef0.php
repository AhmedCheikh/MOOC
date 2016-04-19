<?php

/* AvanzuAdminThemeBundle:Default:test.html.twig */
class __TwigTemplate_8d8841f64e06cf50ee10151f7208e741428ab30d474a87840f31ea9c358546e4 extends Twig_Template
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
   
    
    
       
    
    <ul>
        <li>
            ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")), "html", null, true);
        echo "
        </li>
       
    </ul>
    
    
   
    
    
    
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
        return array (  40 => 11,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* */
/* {% block page_content %} */
/*    */
/*     */
/*     */
/*        */
/*     */
/*     <ul>*/
/*         <li>*/
/*             {{nb}}*/
/*         </li>*/
/*        */
/*     </ul>*/
/*     */
/*     */
/*    */
/*     */
/*     */
/*     */
/*     {% endblock %}*/
