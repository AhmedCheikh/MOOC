<?php

/* MoocMoocBundle:Organisme:InscriptionOrganisme.html.twig */
class __TwigTemplate_d755bb8c422601ba2567650f3480d9535545d1b1289c708c74ae479f63bb3dd5 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_inscriptionOrganisme");
        echo "\" data-validate=\"parsley\">
                <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" name=\"sitweb\" placeholder=\"www.Organisme.com\" required>
                </div>
                <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" name=\"telephone\" placeholder=\"+216 72 546 897\" required>
                </div>
                <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" placeholder=\"Description\" name=\"description\"  >
                   
                    <div class=\"submit\">
                        <input type=\"file\" value=\"Import File\" class=\"submit\">
                </div>
                    
                </div>
                <h3><span class=\"term\"><a href=\"";
        // line 54
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
</html>

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Organisme:InscriptionOrganisme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 54,  62 => 39,  31 => 11,  19 => 1,);
    }
}
/* <!--*/
/* Author: W3layouts*/
/* Author URL: http://w3layouts.com*/
/* License: Creative Commons Attribution 3.0 Unported*/
/* License URL: http://creativecommons.org/licenses/by/3.0/*/
/* -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/css/cssinscritfrm/style.css')}}">*/
/*         <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/*         <!--webfonts-->*/
/*         <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>*/
/*         <!--//webfonts-->*/
/*     </head>*/
/*     <body>*/
/*         <div class="main">*/
/*             <div class="social-icons">*/
/*                 <div class="col_1_of_f span_1_of_f"><a href="#">*/
/*                         <ul class='facebook'>*/
/*                             <i class="fb"> </i>*/
/*                             <li>Connecter avec Facebook</li>*/
/*                             <div class='clear'> </div>*/
/*                         </ul>*/
/*                     </a>*/
/*                 </div>	*/
/*                 <div class="col_1_of_f span_1_of_f"><a href="#">*/
/*                         <ul class='twitter'>*/
/*                             <i class="tw"> </i>*/
/*                             <li>Connecter avec Twitter</li>*/
/*                             <div class='clear'> </div>*/
/*                         </ul>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="clear"> </div>	*/
/*             </div>*/
/*             <h2>Ou connecter avec</h2>*/
/*             <form method="POST" action="{{path('mooc_mooc_inscriptionOrganisme')}}" data-validate="parsley">*/
/*                 <div class="lable-2">*/
/*                     <input type="text" class="text" name="sitweb" placeholder="www.Organisme.com" required>*/
/*                 </div>*/
/*                 <div class="lable-2">*/
/*                     <input type="text" class="text" name="telephone" placeholder="+216 72 546 897" required>*/
/*                 </div>*/
/*                 <div class="lable-2">*/
/*                     <input type="text" class="text" placeholder="Description" name="description"  >*/
/*                    */
/*                     <div class="submit">*/
/*                         <input type="file" value="Import File" class="submit">*/
/*                 </div>*/
/*                     */
/*                 </div>*/
/*                 <h3><span class="term"><a href="{{path('mooc_mooc_logformateur')}}">   J'ai déja un compte </a></span></h3>*/
/*                 <div class="submit">*/
/*                     <input type="submit" value="Créer votre compte" >*/
/*                 </div>*/
/*                 <div class="clear"> </div>*/
/*             </form>*/
/*             <!-----//end-main---->*/
/*         </div>*/
/*         <!-----start-copyright---->*/
/*         <div class="copy-right">*/
/*             <p>Designed by <a href="#">SmartDev Esprit tunisia</a></p> */
/*         </div>*/
/*         <!-----//end-copyright---->*/
/*     </body>*/
/* </html>*/
/* */
/* */
