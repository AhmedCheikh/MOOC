<?php

/* AvanzuAdminThemeBundle:Security:login.html.twig */
class __TwigTemplate_8b98474e75919da8d7911122226a6831804e8b44897ad7d5b5f0103d04073412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"bg-black\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3ca43a5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3ca43a5_0") : $this->env->getExtension('assets')->getAssetUrl("css/3ca43a5_part_1.css");
            // line 9
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        } else {
            // asset "3ca43a5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3ca43a5") : $this->env->getExtension('assets')->getAssetUrl("css/3ca43a5.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body class=\"bg-black\">

<div class=\"form-box\" id=\"login-box\">
    <div class=\"header\">Sign In</div>
    <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"body bg-gray\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
            </div>
            ";
        // line 35
        echo "        </div>
        <div class=\"footer\">
            <button type=\"submit\" class=\"btn bg-olive btn-block\">Sign me in</button>

            <p><a href=\"#\">I forgot my password</a></p>

            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
        </div>
    </form>

    <div class=\"margin text-center\">
        <span>Sign in using social networks</span>
        <br/>
        <button class=\"btn bg-light-blue btn-circle\"><i class=\"fa fa-facebook\"></i></button>
        <button class=\"btn bg-aqua btn-circle\"><i class=\"fa fa-twitter\"></i></button>
        <button class=\"btn bg-red btn-circle\"><i class=\"fa fa-google-plus\"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../../js/bootstrap.min.js\" type=\"text/javascript\"></script>

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Log in ";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 5,  77 => 35,  69 => 25,  63 => 22,  50 => 11,  36 => 9,  32 => 8,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="bg-black">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>{% block title %} Log in {% endblock %}</title>*/
/*     <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/* */
/*     {% stylesheets '@admin_lte_css' %}*/
/*     <link href="{{ asset_url }}" rel="stylesheet" type="text/css" />*/
/*     {% endstylesheets %}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/* */
/*     <![endif]-->*/
/* </head>*/
/* <body class="bg-black">*/
/* */
/* <div class="form-box" id="login-box">*/
/*     <div class="header">Sign In</div>*/
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <div class="body bg-gray">*/
/*             <div class="form-group">*/
/*                 <input type="text" name="_username" class="form-control" placeholder="username" value="{{ last_username }}"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input type="password" name="_password" class="form-control" placeholder="Password"/>*/
/*             </div>*/
/*             {#*/
/*             <div class="form-group">*/
/*                 <input type="checkbox" name="remember_me"/> Remember me*/
/*             </div>*/
/*             #}*/
/*         </div>*/
/*         <div class="footer">*/
/*             <button type="submit" class="btn bg-olive btn-block">Sign me in</button>*/
/* */
/*             <p><a href="#">I forgot my password</a></p>*/
/* */
/*             <a href="register.html" class="text-center">Register a new membership</a>*/
/*         </div>*/
/*     </form>*/
/* */
/*     <div class="margin text-center">*/
/*         <span>Sign in using social networks</span>*/
/*         <br/>*/
/*         <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>*/
/*         <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>*/
/*         <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* */
/* <!-- jQuery 2.0.2 -->*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
/* <!-- Bootstrap -->*/
/* <script src="../../js/bootstrap.min.js" type="text/javascript"></script>*/
/* */
/* </body>*/
/* </html>*/
