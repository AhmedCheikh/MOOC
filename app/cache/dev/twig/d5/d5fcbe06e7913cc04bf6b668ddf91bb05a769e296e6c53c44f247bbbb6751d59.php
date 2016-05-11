<?php

/* AvanzuAdminThemeBundle:Navbar:tasks.html.twig */
class __TwigTemplate_8da244b2528ec85a1750062996897d65d7d1810c80d28aa43a6ee48a3a69f59f extends Twig_Template
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
        echo "<!-- Tasks: style can be found in dropdown.less -->
<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-flag-o\"></i>
        <span class=\"label label-danger\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You have %total% tasks", array("%total%" => (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))), "AvanzuAdminTheme"), "html", null, true);
        echo "</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 13
            echo "                    <li>
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avanzu_admin_show_task", array("taskid" => $this->getAttribute($context["task"], "identifier", array()))), "html", null, true);
            echo "\">
                            <h3>
                                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "
                                <small class=\"pull-right\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
            echo "%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "color", array()), "html", null, true);
            echo "\"
                                     style=\"width: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
            echo "%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
            echo "\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%progress%% Complete", array("%progress%" => $this->getAttribute($context["task"], "progress", array())), "AvanzuAdminTheme"), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul>
        <li class=\"footer\">
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_all_tasks");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View all tasks", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Navbar:tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  87 => 32,  75 => 26,  69 => 23,  64 => 21,  60 => 20,  54 => 17,  50 => 16,  45 => 14,  42 => 13,  38 => 12,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <!-- Tasks: style can be found in dropdown.less -->*/
/* <li class="dropdown tasks-menu">*/
/*     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*         <i class="fa fa-flag-o"></i>*/
/*         <span class="label label-danger">{{ total }}</span>*/
/*     </a>*/
/*     <ul class="dropdown-menu">*/
/*         <li class="header">{{ 'You have %total% tasks' |trans({'%total%':total}, 'AvanzuAdminTheme') }}</li>*/
/*         <li>*/
/*             <!-- inner menu: contains the actual data -->*/
/*             <ul class="menu">*/
/*                 {% for task in tasks %}*/
/*                     <li>*/
/*                         <a href="{{ path('avanzu_admin_show_task', {'taskid': task.identifier}) }}">*/
/*                             <h3>*/
/*                                 {{ task.title }}*/
/*                                 <small class="pull-right">{{ task.progress }}%</small>*/
/*                             </h3>*/
/*                             <div class="progress xs">*/
/*                                 <div class="progress-bar progress-bar-{{ task.color }}"*/
/*                                      style="width: {{ task.progress }}%"*/
/*                                      role="progressbar"*/
/*                                      aria-valuenow="{{ task.progress }}"*/
/*                                      aria-valuemin="0"*/
/*                                      aria-valuemax="100">*/
/*                                     <span class="sr-only">{{ '%progress%% Complete'|trans({'%progress%':task.progress}, 'AvanzuAdminTheme') }}</span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 {%  endfor  %}*/
/*             </ul>*/
/*         <li class="footer">*/
/*             <a href="{{ path('avanzu_admin_all_tasks') }}">{{'View all tasks'|trans({}, 'AvanzuAdminTheme')}}</a>*/
/*         </li>*/
/*     </ul>*/
/* </li>*/
