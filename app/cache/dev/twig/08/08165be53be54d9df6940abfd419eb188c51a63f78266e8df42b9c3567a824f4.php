<?php

/* MoocMoocBundle:Formateur:loginformateur.html.twig */
class __TwigTemplate_2b41bb4256695504813b29437ab899c654ad7e9941bbaa1f84ad8b26b6101810 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Creative - Bootstrap 3 Responsive Admin Template\">
    <meta name=\"author\" content=\"GeeksLabs\">
    <meta name=\"keyword\" content=\"Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/img/favicon.png"), "html", null, true);
        echo "\">

    <title>Authentification Mooc</title>

    <!-- Bootstrap CSS -->    
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap theme -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <!-- font icon -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Custom styles -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/css/profilformateur/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

</head>

  <body class=\"login-img3-body\">

    <div class=\"container\">

      <form class=\"login-form\" action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logformateur");
        echo "\" method=\"post\" data-validate=\"parsley\">        
        <div class=\"login-wrap\">
            <p class=\"login-img\"><i class=\"icon_lock_alt\"></i></p>
            ";
        // line 35
        echo "                    ";
        if (array_key_exists("nom", $context)) {
            // line 36
            echo "                        ";
            // line 40
            echo "                    <div class=\"alert-box error\"><center><span>Erreur: </span>Login ou Mot de passe incorrect</center></div><br/>
                    ";
        }
        // line 42
        echo "                    ";
        // line 43
        echo "            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
              <input type=\"text\" name=\"login\" class=\"form-control\" required autofocus>
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                <input type=\"password\" name=\"password\" class=\"form-control\" required>
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remb\" value=\"remb\"> Remember me
                <span class=\"pull-right\"> <a href=\"#\"> Forgot Password?</a></span>
            </label>
            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Login</button><br/>
            ";
        // line 57
        echo "            <center><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_homepage");
        echo "\">Page d'acceuil </a> --- <a href=\"";
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_inscritformateur");
        echo "\">Pas encore Inscrit </a></center>
        </div>
      </form>

    </div>


  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Formateur:loginformateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 57,  89 => 43,  87 => 42,  83 => 40,  81 => 36,  78 => 35,  72 => 31,  61 => 23,  57 => 22,  52 => 20,  48 => 19,  42 => 16,  37 => 14,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">*/
/*     <meta name="author" content="GeeksLabs">*/
/*     <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">*/
/*     <link rel="shortcut icon" href="{{asset('bundles/moocmooc/css/profilformateur/img/favicon.png')}}">*/
/* */
/*     <title>Authentification Mooc</title>*/
/* */
/*     <!-- Bootstrap CSS -->    */
/*     <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- bootstrap theme -->*/
/*     <link href="{{asset('bundles/moocmooc/css/profilformateur/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/*     <!--external css-->*/
/*     <!-- font icon -->*/
/*     <link href="{{asset('bundles/moocmooc/css/profilformateur/css/elegant-icons-style.css')}}" rel="stylesheet" />*/
/*     <link href="{{asset('bundles/moocmooc/css/profilformateur/css/font-awesome.css')}}" rel="stylesheet" />*/
/*     <!-- Custom styles -->*/
/*     <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/css/profilformateur/css/style-responsive.css')}}" rel="stylesheet" />*/
/* */
/* </head>*/
/* */
/*   <body class="login-img3-body">*/
/* */
/*     <div class="container">*/
/* */
/*       <form class="login-form" action="{{path('mooc_mooc_logformateur')}}" method="post" data-validate="parsley">        */
/*         <div class="login-wrap">*/
/*             <p class="login-img"><i class="icon_lock_alt"></i></p>*/
/*             {#message d'errer#}*/
/*                     {% if nom is defined %}*/
/*                         {#<div class="alert-box error"><span>error: </span>Write your error message here.</div>*/
/*                         <div class="alert-box success"><span>success: </span>Write your success message here.</div>*/
/*                         <div class="alert-box warning"><span>warning: </span>Write your warning message here.</div>*/
/*                         <div class="alert-box notice"><span>notice: </span>Write your notice message here.</div>#}*/
/*                     <div class="alert-box error"><center><span>Erreur: </span>Login ou Mot de passe incorrect</center></div><br/>*/
/*                     {% endif %}*/
/*                     {#message d'errer#}*/
/*             <div class="input-group">*/
/*               <span class="input-group-addon"><i class="icon_profile"></i></span>*/
/*               <input type="text" name="login" class="form-control" required autofocus>*/
/*             </div>*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon"><i class="icon_key_alt"></i></span>*/
/*                 <input type="password" name="password" class="form-control" required>*/
/*             </div>*/
/*             <label class="checkbox">*/
/*                 <input type="checkbox" name="remb" value="remb"> Remember me*/
/*                 <span class="pull-right"> <a href="#"> Forgot Password?</a></span>*/
/*             </label>*/
/*             <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button><br/>*/
/*             {#<button class="btn btn-info btn-lg btn-block" type="submit">S'inscrire</button><br/>#}*/
/*             <center><a href="{{path('mooc_mooc_homepage')}}">Page d'acceuil </a> --- <a href="{{path('mooc_mooc_inscritformateur')}}">Pas encore Inscrit </a></center>*/
/*         </div>*/
/*       </form>*/
/* */
/*     </div>*/
/* */
/* */
/*   </body>*/
/* </html>*/
/* */
