<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_a2c9e997256457cd85e5ec2c8a61bbcd983734f12f1e711286d6f050159b6534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"login-page\">
";
        // line 34
        $this->displayBlock('page_content', $context, $blocks);
        // line 35
        echo "

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Avanzu Admin!";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  122 => 39,  119 => 38,  114 => 34,  103 => 25,  100 => 24,  93 => 17,  90 => 16,  84 => 13,  78 => 45,  76 => 43,  73 => 41,  71 => 38,  67 => 35,  65 => 34,  60 => 31,  57 => 24,  52 => 21,  48 => 19,  45 => 16,  40 => 13,  27 => 2,  25 => 1,);
    }
}
/* {% import "AvanzuAdminThemeBundle:layout:macros.html.twig" as macro %}*/
/* <!doctype html>*/
/* <!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->*/
/* <!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->*/
/* <!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->*/
/* <!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="author" content="">*/
/*     <meta name="keywords" content="">*/
/*     <meta name="viewport" content="width=device-width,initial-scale=1">*/
/*     <title>{% block title %}Avanzu Admin!{% endblock %}</title>*/
/* */
/*     {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}" />*/
/*     {% endblock %}*/
/* */
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}*/
/*     {%  block javascripts_head %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/modernizr.js') }}"></script>*/
/*         <!--[if lt IE 9]>*/
/* */
/*         <![endif]-->*/
/* */
/*     {% endblock %}*/
/* */
/* </head>*/
/* <body class="login-page">*/
/* {% block page_content %}{% endblock %}*/
/* */
/* */
/* {# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/admin-lte-all.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}*/
/* {% block javascripts_inline %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
