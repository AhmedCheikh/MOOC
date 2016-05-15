<?php

/* MoocMoocBundle:Formateur:inscriptionformateur.html.twig */
class __TwigTemplate_8d1b9b9606993f55b6222793e16ad38ebf06212407ab544853d178cec5e70ea4 extends Twig_Template
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
            <h2>Inscrivez Vous a MOOC</h2>
            
            ";
        // line 34
        if ( !array_key_exists("status", $context)) {
            // line 35
            echo "                <form method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("mooc_mooc_inscritformateur");
            echo "\" enctype=\"multipart/form-data\" >
                    
                    <div class=\"lable-2\">
                    <input type=\"text\" class=\"text\" name=\"cinformateur\" pattern=\"[0-9]{8}\"  title=\"8 Chiffres seulement\" placeholder=\"Num Cin\" required>
                    </div>
                    
                    <div class=\"lable\">
                        <div class=\"col_1_of_2 span_1_of_2\">\t
                        <input type=\"text\" class=\"text\" placeholder=\"Votre nom\"  name=\"nom\" required></div>
                        <div class=\"col_1_of_2 span_1_of_2\">
                        <input type=\"text\" class=\"text\" placeholder=\"Votre prenom\" name=\"prenom\" required></div>
                        <div class=\"col_1_of_2 span_1_of_2\">
                        <input type=\"file\" class=\"flinput\" title=\"choisir votre image de profile\" name=\"avatar\" required></div>                            
                        <div class=\"clear\"> </div>
                        <div class=\"col_1_of_2 span_1_of_2\">
                        <input type=\"file\" class=\"flinput\" title=\"vous devez joindre votre cv ici\" name=\"cv\" required></div>                            
                        <div class=\"clear\"> </div>
                    </div>
                    
                    <div class=\"lable-2\">
                        <input type=\"text\" class=\"text\" placeholder=\"your@email.com\" name=\"email\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,3}\$\" title=\"Vous devez taper une email valide\" required>
                        <input type=\"text\" class=\"text\" placeholder=\"Login\" name=\"login\" required>
                        <input type=\"password\" class=\"text\" placeholder=\"Password \" name=\"password\" pattern=\".{6,}\" title=\"mot de passe trop courte\" required>
                        <input type=\"password\" class=\"text\" placeholder=\" Répéter Password \" name=\"passwordre\" pattern=\".{6,}\" title=\"mot de passe trop courte\" required>
                    </div>
                    
                    <h3><span class=\"term\"><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("mooc_mooc_logformateur");
            echo "\">J'ai déja un compte </a></span></h3>                   
                    <div class=\"submit\">
                    <input type=\"submit\" value=\"Créer votre compte\" >
                    </div>
                    <div class=\"clear\"> </div>
                </form>
                    
            ";
        } elseif ((        // line 68
(isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "success")) {
            // line 69
            echo "            ";
            if (array_key_exists("uploadedURL", $context)) {
                // line 70
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["uploadedURL"]) ? $context["uploadedURL"] : $this->getContext($context, "uploadedURL")), "html", null, true);
                echo "\">
            ";
            }
            // line 72
            echo "            ";
        } else {
            // line 73
            echo "            <div class=\"facebook\">
            <p>";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        // line 76
        echo "    
        </div>
        
        <div class=\"copy-right\">
        <p>Designed by <a href=\"#\">SmartDev Esprit tunisia</a></p> 
        </div>
  
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
        return array (  122 => 76,  116 => 74,  113 => 73,  110 => 72,  104 => 70,  101 => 69,  99 => 68,  89 => 61,  59 => 35,  57 => 34,  25 => 5,  19 => 1,);
    }
}
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
/*                 <ul class='facebook'>*/
/*                 <i class="fb"> </i>*/
/*                 <li>Connecter avec Facebook</li>*/
/*                 <div class='clear'> </div>*/
/*                 </ul>*/
/*                 </a>*/
/*                 </div>	*/
/*                 <div class="col_1_of_f span_1_of_f"><a href="#">*/
/*                 <ul class='twitter'>*/
/*                 <i class="tw"> </i>*/
/*                 <li>Connecter avec Twitter</li>*/
/*                 <div class='clear'> </div>*/
/*                 </ul>*/
/*                 </a>*/
/*                 </div>*/
/*                 <div class="clear"> </div>	*/
/*             </div>*/
/*             <h2>Inscrivez Vous a MOOC</h2>*/
/*             */
/*             {%if status is not defined%}*/
/*                 <form method="POST" action="{{path('mooc_mooc_inscritformateur')}}" enctype="multipart/form-data" >*/
/*                     */
/*                     <div class="lable-2">*/
/*                     <input type="text" class="text" name="cinformateur" pattern="[0-9]{8}"  title="8 Chiffres seulement" placeholder="Num Cin" required>*/
/*                     </div>*/
/*                     */
/*                     <div class="lable">*/
/*                         <div class="col_1_of_2 span_1_of_2">	*/
/*                         <input type="text" class="text" placeholder="Votre nom"  name="nom" required></div>*/
/*                         <div class="col_1_of_2 span_1_of_2">*/
/*                         <input type="text" class="text" placeholder="Votre prenom" name="prenom" required></div>*/
/*                         <div class="col_1_of_2 span_1_of_2">*/
/*                         <input type="file" class="flinput" title="choisir votre image de profile" name="avatar" required></div>                            */
/*                         <div class="clear"> </div>*/
/*                         <div class="col_1_of_2 span_1_of_2">*/
/*                         <input type="file" class="flinput" title="vous devez joindre votre cv ici" name="cv" required></div>                            */
/*                         <div class="clear"> </div>*/
/*                     </div>*/
/*                     */
/*                     <div class="lable-2">*/
/*                         <input type="text" class="text" placeholder="your@email.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Vous devez taper une email valide" required>*/
/*                         <input type="text" class="text" placeholder="Login" name="login" required>*/
/*                         <input type="password" class="text" placeholder="Password " name="password" pattern=".{6,}" title="mot de passe trop courte" required>*/
/*                         <input type="password" class="text" placeholder=" Répéter Password " name="passwordre" pattern=".{6,}" title="mot de passe trop courte" required>*/
/*                     </div>*/
/*                     */
/*                     <h3><span class="term"><a href="{{path('mooc_mooc_logformateur')}}">J'ai déja un compte </a></span></h3>                   */
/*                     <div class="submit">*/
/*                     <input type="submit" value="Créer votre compte" >*/
/*                     </div>*/
/*                     <div class="clear"> </div>*/
/*                 </form>*/
/*                     */
/*             {%elseif status=='success'%}*/
/*             {%if uploadedURL is defined%}*/
/*             <img src="{{uploadedURL}}">*/
/*             {%endif%}*/
/*             {%else%}*/
/*             <div class="facebook">*/
/*             <p>{{message}}</p>*/
/*             </div>*/
/*             {%endif%}    */
/*         </div>*/
/*         */
/*         <div class="copy-right">*/
/*         <p>Designed by <a href="#">SmartDev Esprit tunisia</a></p> */
/*         </div>*/
/*   */
/*     </body>*/
/* </html>*/
