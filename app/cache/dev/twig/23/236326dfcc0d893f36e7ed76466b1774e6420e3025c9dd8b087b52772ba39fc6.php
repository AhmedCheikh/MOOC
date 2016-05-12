<?php

/* AvanzuAdminThemeBundle:Default:detailsOrganisme.html.twig */
class __TwigTemplate_1f073c96e9465d4d23019c4a99242329b53145432b91a4d30959bd24af56e545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:detailsOrganisme.html.twig", 1);
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/dataTables.bootstrap.css")), "html", null, true);
        echo "\">
        ";
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        echo " Détails de l'organisme ";
    }

    // line 7
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "                    ";
        // line 13
        echo "               
                

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li>
              <a href='";
        // line 20
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_demo");
        echo "'>
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href='";
        // line 25
        echo $this->env->getExtension('routing')->getPath("charts");
        echo "'>
                <i class=\"fa fa-pie-chart\"></i>
                <span>Statistiques</span>
              </a>
            </li>
            <li>
                <a href='";
        // line 31
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "'>
                    <i class=\"fa fa-table\"></i> <span>Organismes</span> <small class=\"label pull-right bg-red\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["nbonv"]) ? $context["nbonv"] : $this->getContext($context, "nbonv")), "html", null, true);
        echo " non valide</small>
                </a>
                
            </li>
            
            <li>
              <a href='";
        // line 38
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "'>
                <i class=\"fa fa-users\"></i> <span>Formateurs</span>
                <small class=\"label pull-right bg-red\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["nbfnv"]) ? $context["nbfnv"] : $this->getContext($context, "nbfnv")), "html", null, true);
        echo " non valide</small>
              </a>
            </li>
            <li>
                 ";
    }

    // line 45
    public function block_page_content($context, array $blocks = array())
    {
        // line 46
        echo "    
                
                <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <i class=\"fa fa-list-alt\"></i>
                  <h3 class=\"box-title\">Description </h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <dl class=\"dl-horizontal\">
                      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")));
        foreach ($context['_seq'] as $context["_key"] => $context["oo"]) {
            // line 58
            echo "                          <dt> <div class=\"pull-left image\"><img width=\"90\" height=\"50\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/img/logo/" . $this->getAttribute($context["oo"], "logo", array()))), "html", null, true);
            echo "\" alt=\"User Avatar\"></div></dt>
                    <dd></dd> <br>
                    <dt>Site Web</dt>
                    <dd>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "siteweb", array()), "html", null, true);
            echo "</dd><br><br>
                    <dt>E-mail</dt>
                    <dd>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "email", array()), "html", null, true);
            echo "</dd><br><br>
                   
                    <dt>Adresse</dt>
                    <dd>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "adresse", array()), "html", null, true);
            echo "</dd><br><br>
                    <dt>Téléphone</dt>
                    <dd>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "telephone", array()), "html", null, true);
            echo "</dd><br><br>
                    <dt>Description</dt>
                    <dd>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "description", array()), "html", null, true);
            echo "</dd><br><br>
                  </dl>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

            </div><!-- /.col -->
            <div class=\"col-md-6\">
              <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste des formateurs</h3>
                  
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <table id=\"example1\" class=\"table\">
                    <tr>
                      
                      <th>Nom & Prénom</th>
                      <th>E-mail</th>
                      <th style=\"width: 40px\">Valide</th>
                    </tr>
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")));
        foreach ($context['_seq'] as $context["_key"] => $context["ff"]) {
            // line 93
            echo "                    <tr>
                      
                      <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "prenom", array()), "html", null, true);
            echo "</td>
                      <td> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["ff"], "email", array()), "html", null, true);
            echo " </td>
                      ";
            // line 97
            if (($this->getAttribute($context["ff"], "etat", array()) == 0)) {
                // line 98
                echo "                      <td><span class=\"badge bg-red\">Non</span></td>
                      ";
            } else {
                // line 100
                echo "                      <td><span class=\"badge bg-green\">Oui</span></td>
                      ";
            }
            // line 102
            echo "                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box --> 
            </div><!-- /.col -->
          </div><!-- /.row -->
          
            ";
        // line 111
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 126
        echo "    
    ";
    }

    // line 111
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 112
        echo "    <script>
      \$(function () {
        \$(\"#example1\").DataTable();
        \$('#example2').DataTable({
          \"paging\": true,
          \"lengthChange\": false,
          \"searching\": true,
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
        return "AvanzuAdminThemeBundle:Default:detailsOrganisme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 112,  239 => 111,  234 => 126,  232 => 111,  223 => 104,  216 => 102,  212 => 100,  208 => 98,  206 => 97,  202 => 96,  196 => 95,  192 => 93,  188 => 92,  167 => 73,  158 => 70,  153 => 68,  148 => 66,  142 => 63,  137 => 61,  130 => 58,  126 => 57,  113 => 46,  110 => 45,  101 => 40,  96 => 38,  87 => 32,  83 => 31,  74 => 25,  66 => 20,  57 => 13,  55 => 8,  52 => 7,  46 => 6,  40 => 4,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/dataTables.bootstrap.css') }}">*/
/*         {% endblock %}*/
/* {% block page_title %} Détails de l'organisme {% endblock %}*/
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
/* {% block page_content %}*/
/*     */
/*                 */
/*                 <div class="row">*/
/*             <div class="col-md-6">*/
/*               <div class="box box-solid">*/
/*                 <div class="box-header with-border">*/
/*                   <i class="fa fa-list-alt"></i>*/
/*                   <h3 class="box-title">Description </h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                   <dl class="dl-horizontal">*/
/*                       {% for oo in o %}*/
/*                           <dt> <div class="pull-left image"><img width="90" height="50"  src="{{asset('uploads/img/logo/' ~ oo.logo)}}" alt="User Avatar"></div></dt>*/
/*                     <dd></dd> <br>*/
/*                     <dt>Site Web</dt>*/
/*                     <dd>{{oo.siteweb}}</dd><br><br>*/
/*                     <dt>E-mail</dt>*/
/*                     <dd>{{oo.email}}</dd><br><br>*/
/*                    */
/*                     <dt>Adresse</dt>*/
/*                     <dd>{{oo.adresse}}</dd><br><br>*/
/*                     <dt>Téléphone</dt>*/
/*                     <dd>{{oo.telephone}}</dd><br><br>*/
/*                     <dt>Description</dt>*/
/*                     <dd>{{oo.description}}</dd><br><br>*/
/*                   </dl>*/
/*                   {% endfor %}*/
/*                 </div><!-- /.box-body -->*/
/*                 */
/*               </div><!-- /.box -->*/
/* */
/*             </div><!-- /.col -->*/
/*             <div class="col-md-6">*/
/*               <div class="box">*/
/*                 <div class="box-header">*/
/*                   <h3 class="box-title">Liste des formateurs</h3>*/
/*                   */
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body no-padding">*/
/*                   <table id="example1" class="table">*/
/*                     <tr>*/
/*                       */
/*                       <th>Nom & Prénom</th>*/
/*                       <th>E-mail</th>*/
/*                       <th style="width: 40px">Valide</th>*/
/*                     </tr>*/
/*                     {% for ff in f %}*/
/*                     <tr>*/
/*                       */
/*                       <td>{{ff.nom}} {{ff.prenom}}</td>*/
/*                       <td> {{ff.email}} </td>*/
/*                       {% if ff.etat ==0 %}*/
/*                       <td><span class="badge bg-red">Non</span></td>*/
/*                       {%else%}*/
/*                       <td><span class="badge bg-green">Oui</span></td>*/
/*                       {%endif%}*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     */
/*                   </table>*/
/*                 </div><!-- /.box-body -->*/
/*               </div><!-- /.box --> */
/*             </div><!-- /.col -->*/
/*           </div><!-- /.row -->*/
/*           */
/*             {% block javascripts_inline %}*/
/*     <script>*/
/*       $(function () {*/
/*         $("#example1").DataTable();*/
/*         $('#example2').DataTable({*/
/*           "paging": true,*/
/*           "lengthChange": false,*/
/*           "searching": true,*/
/*           "ordering": true,*/
/*           "info": true,*/
/*           "autoWidth": false*/
/*         });*/
/*       });*/
/*     </script>*/
/* {% endblock %}*/
/*     */
/*     {%endblock%}*/
