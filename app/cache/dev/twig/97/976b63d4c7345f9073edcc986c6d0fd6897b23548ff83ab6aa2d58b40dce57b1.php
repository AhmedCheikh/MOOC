<?php

/* :easy_admin/Cours:video2.html.twig */
class __TwigTemplate_529d46a73d343129d9b0755f3ef03db415bba279b5ef627b6b1dfad360cfc8b8 extends Twig_Template
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
        echo "<video src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/file/" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
        echo "\" width=\"350\"  height=\"300\" type=\"video/mp4\" controls></video>";
    }

    public function getTemplateName()
    {
        return ":easy_admin/Cours:video2.html.twig";
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
/* <video src="{{asset('uploads/file/' ~ value)}}" width="350"  height="300" type="video/mp4" controls></video>*/
