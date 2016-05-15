<?php

/* MoocMoocBundle:Apprenant:InscriptionApprenant.html.twig */
class __TwigTemplate_91ae6bd8fef5c28f7d9d52d9da1607f09a856336d6107851045815431b2a5c04 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/style_inscription.css"), "html", null, true);
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
            
            ";
        // line 35
        if ( !array_key_exists("status", $context)) {
            // line 36
            echo "            <form method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("mooc_inscription_apprenant");
            echo "\" enctype=\"multipart/form-data\" >
                <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" name=\"cin\" pattern=\"[0-9]{8}\"  title=\"8 Chiffres seulement\" placeholder=\"Num Cin\" required>
                </div>
                <div class=\"lable\">
                    <div class=\"col_1_of_2 span_1_of_2\">\t
                        <input type=\"text\" class=\"text\" placeholder=\"Votre nom\"  name=\"nom\" required></div>
                    <div class=\"col_1_of_2 span_1_of_2\">
                        <input type=\"text\" class=\"text\" placeholder=\"Votre prenom\" name=\"prenom\" required></div>
                        <div class=\"col_1_of_2 span_1_of_2\">
                        <input type=\"file\" class=\"flinput\" title=\"Ajouter votre photo de profile\" name=\"avatar\" required></div>
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" placeholder=\"your@email.com\" name=\"email\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,3}\$\" title=\"Vous devez taper une email valide\" required >
                    <input type=\"text\" class=\"text\" placeholder=\"Login\" name=\"login\" required>
                    <input type=\"password\" id =\"password\" class=\"text\" placeholder=\"Password \" name=\"password\" pattern=\".{6,}\" title=\"mot de passe trop courte\" required>
                    <input type=\"password\" id =\"passwordre\" class=\"text\" placeholder=\" Répéter Password \" name=\"passwordre\" data-equalto=\"password\"  pattern=\".{6,}\" title=\"mot de passe trop courte\" required>
                </div>
                <h3><span class=\"term\"><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("mooc_login_apprenant");
            echo "\">   J'ai déja un compte </a></span></h3>
                <div class=\"submit\">
                    <input type=\"submit\" value=\"Créer votre compte\" >
                </div>
                <div class=\"clear\"> </div>
            </form>
                
            ";
        } elseif ((        // line 62
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "success")) {
            // line 63
            echo "            
            ";
        } else {
            // line 65
            echo "            <div class=\"facebook\">
            <p>";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        // line 68
        echo " 
            
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
        return "MoocMoocBundle:Apprenant:InscriptionApprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 68,  102 => 66,  99 => 65,  95 => 63,  93 => 62,  83 => 55,  60 => 36,  58 => 35,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <link rel="stylesheet" href="{{asset('bundles/moocmooc/ApprenantAssets/css/style_inscription.css')}}">*/
/*       */
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
/*             */
/*             {%if status is not defined%}*/
/*             <form method="POST" action="{{ path('mooc_inscription_apprenant')}}" enctype="multipart/form-data" >*/
/*                 <div class="lable-2">*/
/*                     <input type="text" class="text" name="cin" pattern="[0-9]{8}"  title="8 Chiffres seulement" placeholder="Num Cin" required>*/
/*                 </div>*/
/*                 <div class="lable">*/
/*                     <div class="col_1_of_2 span_1_of_2">	*/
/*                         <input type="text" class="text" placeholder="Votre nom"  name="nom" required></div>*/
/*                     <div class="col_1_of_2 span_1_of_2">*/
/*                         <input type="text" class="text" placeholder="Votre prenom" name="prenom" required></div>*/
/*                         <div class="col_1_of_2 span_1_of_2">*/
/*                         <input type="file" class="flinput" title="Ajouter votre photo de profile" name="avatar" required></div>*/
/*                     <div class="clear"> </div>*/
/*                 </div>*/
/*                 <div class="lable-2">*/
/*                     <input type="text" class="text" placeholder="your@email.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Vous devez taper une email valide" required >*/
/*                     <input type="text" class="text" placeholder="Login" name="login" required>*/
/*                     <input type="password" id ="password" class="text" placeholder="Password " name="password" pattern=".{6,}" title="mot de passe trop courte" required>*/
/*                     <input type="password" id ="passwordre" class="text" placeholder=" Répéter Password " name="passwordre" data-equalto="password"  pattern=".{6,}" title="mot de passe trop courte" required>*/
/*                 </div>*/
/*                 <h3><span class="term"><a href="{{path('mooc_login_apprenant')}}">   J'ai déja un compte </a></span></h3>*/
/*                 <div class="submit">*/
/*                     <input type="submit" value="Créer votre compte" >*/
/*                 </div>*/
/*                 <div class="clear"> </div>*/
/*             </form>*/
/*                 */
/*             {%elseif status=='success'%}*/
/*             */
/*             {%else%}*/
/*             <div class="facebook">*/
/*             <p>{{message}}</p>*/
/*             </div>*/
/*             {%endif%} */
/*             */
/*         </div>*/
/*         <!-----start-copyright---->*/
/*         <div class="copy-right">*/
/*             <p>Designed by <a href="#">SmartDev Esprit tunisia</a></p> */
/*         </div>*/
/*         <!-----//end-copyright---->*/
/*     </body>*/
/* </html>*/
