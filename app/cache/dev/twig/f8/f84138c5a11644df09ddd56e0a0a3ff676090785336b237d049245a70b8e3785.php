<?php

/* MoocMoocBundle:Apprenant:loginApprenant.html.twig */
class __TwigTemplate_b19ff25c0eddf9f3fa6d80a52f05e1886f4333269dc1b41814ae4d2d1b176249 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/img/favicon.png"), "html", null, true);
        echo "\">

    <title>Authentification Mooc</title>

        <!-- Bootstrap CSS -->    
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap theme -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- font icon -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Custom styles -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/ApprenantAssets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>

  <body class=\"login-img3-body\">

    <div class=\"container\">

      <form class=\"login-form\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("mooc_login_apprenant");
        echo "\" method=\"post\" data-validate=\"parsley\">        
        <div class=\"login-wrap\">
            <p class=\"login-img\"><i class=\"icon_lock_alt\"></i></p>
            
                    ";
        // line 40
        if (array_key_exists("name", $context)) {
            // line 41
            echo "               
                    <div class=\"alert-box error\"><center><span>Erreur: </span>Login ou Mot de passe incorrect</center></div><br/>
                    ";
        }
        // line 44
        echo "                   
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
              <input type=\"text\" name=\"login\" class=\"form-control\" required autofocus>
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                <input type=\"password\" name=\"password\" class=\"form-control\" required>
            </div>
            <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Remember me
                <span class=\"pull-right\"> <a href=\"#\"> Forgot Password?</a></span>
            </label>
            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Login</button><br/>
      
            <center><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_homepage");
        echo "\">Page d'acceuil </a> --- <a href=\"";
        echo $this->env->getExtension('routing')->getPath("mooc_inscription_apprenant");
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
        return "MoocMoocBundle:Apprenant:loginApprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 59,  91 => 44,  86 => 41,  84 => 40,  77 => 36,  61 => 23,  57 => 22,  51 => 19,  47 => 18,  42 => 16,  37 => 14,  29 => 9,  19 => 1,);
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
/*      <link rel="shortcut icon" href="{{asset('bundles/moocmooc/ApprenantAssets/img/favicon.png')}}">*/
/* */
/*     <title>Authentification Mooc</title>*/
/* */
/*         <!-- Bootstrap CSS -->    */
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- bootstrap theme -->*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/bootstrap-theme.css')}}" rel="stylesheet">*/
/*     <!-- font icon -->*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/elegant-icons-style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/font-awesome.css')}}" rel="stylesheet">*/
/*     */
/*     <!-- Custom styles -->*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/style.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/moocmooc/ApprenantAssets/css/style-responsive.css')}}" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="js/html5shiv.js"></script>*/
/*     <script src="js/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/*   <body class="login-img3-body">*/
/* */
/*     <div class="container">*/
/* */
/*       <form class="login-form" action="{{path('mooc_login_apprenant')}}" method="post" data-validate="parsley">        */
/*         <div class="login-wrap">*/
/*             <p class="login-img"><i class="icon_lock_alt"></i></p>*/
/*             */
/*                     {% if name is defined %}*/
/*                */
/*                     <div class="alert-box error"><center><span>Erreur: </span>Login ou Mot de passe incorrect</center></div><br/>*/
/*                     {% endif %}*/
/*                    */
/*             <div class="input-group">*/
/*               <span class="input-group-addon"><i class="icon_profile"></i></span>*/
/*               <input type="text" name="login" class="form-control" required autofocus>*/
/*             </div>*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon"><i class="icon_key_alt"></i></span>*/
/*                 <input type="password" name="password" class="form-control" required>*/
/*             </div>*/
/*             <label class="checkbox">*/
/*                 <input type="checkbox" name="remember" value="remember-me"> Remember me*/
/*                 <span class="pull-right"> <a href="#"> Forgot Password?</a></span>*/
/*             </label>*/
/*             <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button><br/>*/
/*       */
/*             <center><a href="{{path('mooc_mooc_homepage')}}">Page d'acceuil </a> --- <a href="{{path('mooc_inscription_apprenant')}}">Pas encore Inscrit </a></center>*/
/*         </div>*/
/*       </form>*/
/* */
/*     </div>*/
/* */
/* */
/*   </body>*/
/* </html>*/
/* */
