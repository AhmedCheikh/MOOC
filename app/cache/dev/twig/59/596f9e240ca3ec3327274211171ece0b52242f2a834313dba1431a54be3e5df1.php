<?php

/* AvanzuAdminThemeBundle:Default:Organismes.html.twig */
class __TwigTemplate_7d7e29428d79a9abc4c58ca781fcacc3135a88aeb6a1e694ef4ed94c8faea884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:Organismes.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_title' => array($this, 'block_page_title'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
        ";
    }

    // line 8
    public function block_page_title($context, array $blocks = array())
    {
        echo "Organismes";
    }

    // line 9
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "                    ";
        // line 15
        echo "               
                

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li>
              <a href='";
        // line 22
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_demo");
        echo "'>
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href='";
        // line 27
        echo $this->env->getExtension('routing')->getPath("charts");
        echo "'>
                <i class=\"fa fa-pie-chart\"></i>
                <span>Statistiques</span>
              </a>
            </li>
            <li>
                <a href='";
        // line 33
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "'>
                    <i class=\"fa fa-table\"></i> <span>Organismes</span> <small class=\"label pull-right bg-red\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nbonv"]) ? $context["nbonv"] : $this->getContext($context, "nbonv")), "html", null, true);
        echo " non valide</small>
                </a>
                
            </li>
            
            <li>
              <a href='";
        // line 40
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "'>
                <i class=\"fa fa-users\"></i> <span>Formateurs</span>
                <small class=\"label pull-right bg-red\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nbfnv"]) ? $context["nbfnv"] : $this->getContext($context, "nbfnv")), "html", null, true);
        echo " non valide</small>
              </a>
            </li>
            <li>
                 ";
    }

    // line 48
    public function block_page_content($context, array $blocks = array())
    {
        echo " 
    <div class=\"row\">
            <div class=\"col-xs-12\">
    <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">La liste complète des organismes</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>
                        <th>Organisme</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Etat</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeOrganisme"]) ? $context["listeOrganisme"] : $this->getContext($context, "listeOrganisme")));
        foreach ($context['_seq'] as $context["_key"] => $context["organisme"]) {
            // line 69
            echo "                      <tr>
                        
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "adresse", array()), "html", null, true);
            echo "</td>
                        ";
            // line 75
            if (($this->getAttribute($context["organisme"], "etat", array()) == 0)) {
                // line 76
                echo "                            <td><span class=\"label label-danger\">Non valide</span></td>
                        ";
            } else {
                // line 78
                echo "                            <td><span class=\"label label-success\">Valide</span></td>
                            ";
            }
            // line 80
            echo "                        <td><div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-info\">Action</button>
                      <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                      </button>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><i class=\"fa fa-info-circle\"><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_organisme", array("id" => $this->getAttribute($context["organisme"], "idorganisme", array()))), "html", null, true);
            echo "\" >    Détails</a></i></li>
                          <li><i class=\"fa fa-list-alt\"><a href=\"#\">    Documents</a></i></li>
                        ";
            // line 89
            if (($this->getAttribute($context["organisme"], "etat", array()) == 0)) {
                // line 90
                echo "                        <li><i class=\"fa fa-check\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valider_organisme", array("id" => $this->getAttribute($context["organisme"], "idorganisme", array()))), "html", null, true);
                echo "\">    Valider</a></i></li>
                        ";
            } else {
                // line 92
                echo "                        <li><i class=\"fa fa-times-circle\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bloquer_organisme", array("id" => $this->getAttribute($context["organisme"], "idorganisme", array()))), "html", null, true);
                echo "\">    Bloquer</a></i></li>
                        ";
            }
            // line 94
            echo "                        <li class=\"divider\"></li>
                        <li><i class=\"fa fa-trash-o\"><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_organisme", array("id" => $this->getAttribute($context["organisme"], "idorganisme", array()))), "html", null, true);
            echo "\">    Supprimer</a></i></li>
                      </ul>
                    </div></td>
                      </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                      
                      </tbody> 
                  </table>
                      <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("print");
        echo "\" target=\"_blank\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div>
    
";
        // line 109
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 124
        echo "    
    ";
    }

    // line 109
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 110
        echo "    <script>
      \$(function () {
        \$(\"#example1\").DataTable();
        \$('#example2').DataTable({
          \"paging\": true,
          \"lengthChange\": false,
          \"searching\": false,
          \"ordering\": true,
          \"info\": true,
          \"autoWidth\": false
        });
      });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:Organismes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 110,  231 => 109,  226 => 124,  224 => 109,  215 => 103,  210 => 100,  199 => 95,  196 => 94,  190 => 92,  184 => 90,  182 => 89,  177 => 87,  168 => 80,  164 => 78,  160 => 76,  158 => 75,  154 => 74,  150 => 73,  146 => 72,  142 => 71,  138 => 69,  134 => 68,  110 => 48,  101 => 42,  96 => 40,  87 => 34,  83 => 33,  74 => 27,  66 => 22,  57 => 15,  55 => 10,  52 => 9,  46 => 8,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/dataTables.bootstrap.css') }}">*/
/*         {% endblock %}*/
/* */
/* {% block page_title %}Organismes{% endblock %}*/
/* {% block avanzu_sidebar %}*/
/*                     {#{% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}*/
/*                         {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}*/
/*                     {% endif %}*/
/*                     {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}#}*/
/*                */
/*                 */
/* */
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*             <li>*/
/*               <a href='{{path('avanzu_admin_demo')}}'>*/
/*                 <i class="fa fa-dashboard"></i> <span>Dashboard</span> */
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href='{{path('charts')}}'>*/
/*                 <i class="fa fa-pie-chart"></i>*/
/*                 <span>Statistiques</span>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href='{{path('liste_organisme')}}'>*/
/*                     <i class="fa fa-table"></i> <span>Organismes</span> <small class="label pull-right bg-red">{{nbonv}} non valide</small>*/
/*                 </a>*/
/*                 */
/*             </li>*/
/*             */
/*             <li>*/
/*               <a href='{{path('liste_formateur')}}'>*/
/*                 <i class="fa fa-users"></i> <span>Formateurs</span>*/
/*                 <small class="label pull-right bg-red">{{nbfnv}} non valide</small>*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*                  {% endblock %}*/
/* */
/* {% block page_content %} */
/*     <div class="row">*/
/*             <div class="col-xs-12">*/
/*     <div class="box">*/
/*                 <div class="box-header">*/
/*                   <h3 class="box-title">La liste complète des organismes</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                   <table id="example1" class="table table-bordered table-striped">*/
/*                     <thead>*/
/*                       <tr>*/
/*                         <th>Organisme</th>*/
/*                         <th>E-mail</th>*/
/*                         <th>Téléphone</th>*/
/*                         <th>Adresse</th>*/
/*                         <th>Etat</th>*/
/*                         <th>Actions</th>*/
/*                       </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for organisme in listeOrganisme %}*/
/*                       <tr>*/
/*                         */
/*                         <td>{{organisme.nom}}</td>*/
/*                         <td>{{organisme.email}}</td>*/
/*                         <td> {{organisme.telephone}}</td>*/
/*                         <td>{{organisme.adresse}}</td>*/
/*                         {% if organisme.etat == 0 %}*/
/*                             <td><span class="label label-danger">Non valide</span></td>*/
/*                         {% else %}*/
/*                             <td><span class="label label-success">Valide</span></td>*/
/*                             {% endif %}*/
/*                         <td><div class="btn-group">*/
/*                       <button type="button" class="btn btn-info">Action</button>*/
/*                       <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">*/
/*                         <span class="caret"></span>*/
/*                         <span class="sr-only">Toggle Dropdown</span>*/
/*                       </button>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                           <li><i class="fa fa-info-circle"><a href="{{ path('details_organisme', {'id': organisme.idorganisme}) }}" >    Détails</a></i></li>*/
/*                           <li><i class="fa fa-list-alt"><a href="#">    Documents</a></i></li>*/
/*                         {% if organisme.etat == 0 %}*/
/*                         <li><i class="fa fa-check"><a href="{{ path('valider_organisme', {'id': organisme.idorganisme}) }}">    Valider</a></i></li>*/
/*                         {% else %}*/
/*                         <li><i class="fa fa-times-circle"><a href="{{ path('bloquer_organisme', {'id': organisme.idorganisme}) }}">    Bloquer</a></i></li>*/
/*                         {% endif %}*/
/*                         <li class="divider"></li>*/
/*                         <li><i class="fa fa-trash-o"><a href="{{ path('supprimer_organisme', {'id': organisme.idorganisme}) }}">    Supprimer</a></i></li>*/
/*                       </ul>*/
/*                     </div></td>*/
/*                       </tr>*/
/*                       {% endfor %}*/
/*                       */
/*                       </tbody> */
/*                   </table>*/
/*                       <a href="{{ path('print')}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>*/
/*                 </div><!-- /.box-body -->*/
/*               </div><!-- /.box -->*/
/*             </div>*/
/*         </div>*/
/*     */
/* {% block javascripts_inline %}*/
/*     <script>*/
/*       $(function () {*/
/*         $("#example1").DataTable();*/
/*         $('#example2').DataTable({*/
/*           "paging": true,*/
/*           "lengthChange": false,*/
/*           "searching": false,*/
/*           "ordering": true,*/
/*           "info": true,*/
/*           "autoWidth": false*/
/*         });*/
/*       });*/
/*     </script>*/
/* {% endblock %}*/
/*     */
/*     {% endblock %}*/
