<?php

/* AvanzuAdminThemeBundle:Navbar:user.html.twig */
class __TwigTemplate_8894132912d66adc7e4dd848a981097782f43ef1b384523f091976730bc6e787 extends Twig_Template
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
        echo "<!-- User Account: style can be found in dropdown.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Navbar:user.html.twig", 2);
        // line 3
        echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 5
        echo $context["macro"]->getavatar($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "user-image");
        echo "
        <span class=\"hidden-xs\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
        // line 11
        echo $context["macro"]->getavatar($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()));
        echo "
            <p>
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "title", array()), "html", null, true);
        echo "
                <small>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Member since %date%", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "memberSince", array()), "m.Y")), "AvanzuAdminTheme"), "html", null, true);
        echo "</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class=\"user-body\">
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Followers</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Sales</a>
            </div>
            <div class=\"col-xs-4 text-center\">
                <a href=\"#\">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avanzu_admin_profile", array("userid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "identifier", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_logout");
        echo "\" class=\"btn btn-default btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sign out", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
            </div>
        </li>
    </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Navbar:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 35,  72 => 32,  51 => 14,  45 => 13,  40 => 11,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- User Account: style can be found in dropdown.less -->*/
/* {% import "AvanzuAdminThemeBundle:layout:macros.html.twig" as macro %}*/
/* <li class="dropdown user user-menu">*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*         {{ macro.avatar(user.avatar, user.username, 'user-image') }}*/
/*         <span class="hidden-xs">{{ user.name }}</span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         <!-- User image -->*/
/*         <li class="user-header">*/
/*             {{ macro.avatar(user.avatar, user.username) }}*/
/*             <p>*/
/*                 {{user.name}} - {{user.title}}*/
/*                 <small>{{ 'Member since %date%'|trans({'%date%': user.memberSince|date('m.Y') }, 'AvanzuAdminTheme') }}</small>*/
/*             </p>*/
/*         </li>*/
/*         <!-- Menu Body -->*/
/*         <li class="user-body">*/
/*             <div class="col-xs-4 text-center">*/
/*                 <a href="#">Followers</a>*/
/*             </div>*/
/*             <div class="col-xs-4 text-center">*/
/*                 <a href="#">Sales</a>*/
/*             </div>*/
/*             <div class="col-xs-4 text-center">*/
/*                 <a href="#">Friends</a>*/
/*             </div>*/
/*         </li>*/
/*         <!-- Menu Footer-->*/
/*         <li class="user-footer">*/
/*             <div class="pull-left">*/
/*                 <a href="{{ path('avanzu_admin_profile', {'userid' : user.identifier}) }}" class="btn btn-default btn-flat">{{'Profile'|trans({}, 'AvanzuAdminTheme')}}</a>*/
/*             </div>*/
/*             <div class="pull-right">*/
/*                 <a href="{{ path('avanzu_admin_logout') }}" class="btn btn-default btn-flat">{{ 'Sign out'|trans({}, 'AvanzuAdminTheme') }}</a>*/
/*             </div>*/
/*         </li>*/
/*     </ul>*/
/* </li>*/
/* */
