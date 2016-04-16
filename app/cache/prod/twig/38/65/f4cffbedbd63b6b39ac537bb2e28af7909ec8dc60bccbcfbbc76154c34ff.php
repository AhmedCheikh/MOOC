<?php

/* MoocMoocBundle:Formateur:inscriptionformateur.html.twig */
class __TwigTemplate_3865f4cffbedbd63b6b39ac537bb2e28af7909ec8dc60bccbcfbbc76154c34ff extends Twig_Template
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
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/cssinscritfrm/style.css"), "html", null, true);
        echo "\">
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfonts-->
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
        <!--//webfonts-->
    </head>
    <body>
        <div class=\"main\">
            <div class=\"social-icons\">
                <div class=\"col_1_of_f span_1_of_f\"><a href=\"#\">
                        <ul class='facebook'>
                            <i class=\"fb\"> </i>
                            <li>Connecter avec Facebook</li>
                            <div class='clear'> </div>
                        </ul>
                    </a>
                </div>\t
                <div class=\"col_1_of_f span_1_of_f\"><a href=\"#\">
                        <ul class='twitter'>
                            <i class=\"tw\"> </i>
                            <li>Connecter avec Twitter</li>
                            <div class='clear'> </div>
                        </ul>
                    </a>
                </div>
                <div class=\"clear\"> </div>\t
            </div>
            <h2>Ou connecter avec</h2>
            <form method=\"POST\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_inscritformateur");
        echo "\" data-validate=\"parsley\">
                <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" name=\"cin\" placeholder=\"Num Cin\" required>
                </div>
                <div class=\"lable\">
                    <div class=\"col_1_of_2 span_1_of_2\">\t
                        <input type=\"text\" class=\"text\" placeholder=\"Votre nom\"  name=\"nom\" data-trigger=\"change\" data-required=\"true\"></div>
                    <div class=\"col_1_of_2 span_1_of_2\">
                        <input type=\"text\" class=\"text\" placeholder=\"Votre prenom\" name=\"prenom\" ></div>
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" placeholder=\"your@email.com\" name=\"email\"  >
                    <input type=\"text\" class=\"text\" placeholder=\"Login\" name=\"login\" >
                    <input type=\"password\" id =\"password\" class=\"text\" placeholder=\"Password \" name=\"password\" >
                    <input type=\"password\" id =\"passwordre\" class=\"text\" placeholder=\" Répéter Password \" name=\"passwordre\" data-equalto=\"password\" >
                </div>
                <h3><span class=\"term\"><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logformateur");
        echo "\">   J'ai déja un compte </a></span></h3>
                <div class=\"submit\">
                    <input type=\"submit\" value=\"Créer votre compte\" >
                </div>
                <div class=\"clear\"> </div>
            </form>
            <!-----//end-main---->
        </div>
        <!-----start-copyright---->
        <div class=\"copy-right\">
            <p>Designed by <a href=\"#\">SmartDev Esprit tunisia</a></p> 
        </div>
        <!-----//end-copyright---->
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Formateur:inscriptionformateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 56,  62 => 39,  31 => 11,  19 => 1,);
    }
}
