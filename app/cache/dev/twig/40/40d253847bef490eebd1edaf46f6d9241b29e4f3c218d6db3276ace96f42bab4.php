<?php

/* MoocMoocBundle:Mail:modifPassword.html.twig */
class __TwigTemplate_496ac87a57398fb19653d75d8fb70c6ca14f5c51662644a7b925850d0ec0b0e2 extends Twig_Template
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

    <title>Modifier Mot de passe</title>

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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>

  <body class=\"login-img3-body\">

    <div class=\"container\">

      <form class=\"login-form\"  method=\"post\" action=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mooc_mooc_modifPass", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo " data-validate=\"parsley\">        
        <div class=\"login-wrap\">
            <p class=\"login-img\"><i class=\"icon_lock_alt\"></i></p>
            ";
        // line 40
        echo "                  
                    ";
        // line 42
        echo "            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
              <input type=\"password\" name=\"pass1\" class=\"form-control\" required autofocus>
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                <input type=\"password\" name=\"pass2\" class=\"form-control\" required>
            </div>
            
            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Enregistré</button><br/>
            ";
        // line 53
        echo "            <center><a href=\"";
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_homepage");
        echo "\">Page d'acceuil </a> </center>
        </div>
      </form>

    </div>


  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Mail:modifPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 53,  86 => 42,  83 => 40,  77 => 36,  61 => 23,  57 => 22,  52 => 20,  48 => 19,  42 => 16,  37 => 14,  29 => 9,  19 => 1,);
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
/*     <title>Modifier Mot de passe</title>*/
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
/*       <form class="login-form"  method="post" action={{path('mooc_mooc_modifPass',{'name':name})}} data-validate="parsley">        */
/*         <div class="login-wrap">*/
/*             <p class="login-img"><i class="icon_lock_alt"></i></p>*/
/*             {#message d'errer#}*/
/*                   */
/*                     {#message d'errer#}*/
/*             <div class="input-group">*/
/*               <span class="input-group-addon"><i class="icon_key_alt"></i></span>*/
/*               <input type="password" name="pass1" class="form-control" required autofocus>*/
/*             </div>*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon"><i class="icon_key_alt"></i></span>*/
/*                 <input type="password" name="pass2" class="form-control" required>*/
/*             </div>*/
/*             */
/*             <button class="btn btn-primary btn-lg btn-block" type="submit">Enregistré</button><br/>*/
/*             {#<button class="btn btn-info btn-lg btn-block" type="submit">S'inscrire</button><br/>#}*/
/*             <center><a href="{{path('mooc_mooc_homepage')}}">Page d'acceuil </a> </center>*/
/*         </div>*/
/*       </form>*/
/* */
/*     </div>*/
/* */
/* */
/*   </body>*/
/* </html>*/
/* */
/* */
