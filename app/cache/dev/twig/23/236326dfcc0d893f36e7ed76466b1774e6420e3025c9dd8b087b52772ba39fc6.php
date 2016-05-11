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
    public function block_page_content($context, array $blocks = array())
    {
        // line 8
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")));
        foreach ($context['_seq'] as $context["_key"] => $context["oo"]) {
            // line 20
            echo "                    <dt>Site Web</dt>
                    <dd>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "siteweb", array()), "html", null, true);
            echo "</dd><br><br>
                    <dt>E-mail</dt>
                    <dd>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "email", array()), "html", null, true);
            echo "</dd><br><br>
                   
                    <dt>Adresse</dt>
                    <dd>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "adresse", array()), "html", null, true);
            echo "</dd><br><br>
                    <dt>Téléphone</dt>
                    <dd>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "telephone", array()), "html", null, true);
            echo "</dd><br><br>
                    <dt>Description</dt>
                    <dd>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["oo"], "description", array()), "html", null, true);
            echo "</dd><br><br>
                  </dl>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

            </div><!-- /.col -->
            <div class=\"col-md-6\">
              <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste des formateurs</h3>
                  <div class=\"box-tools\">
                    <ul class=\"pagination pagination-sm no-margin pull-right\">
                      <li><a href=\"#\">&laquo;</a></li>
                      <li><a href=\"#\">1</a></li>
                      <li><a href=\"#\">2</a></li>
                      <li><a href=\"#\">3</a></li>
                      <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <table id=\"example1\" class=\"table\">
                    <tr>
                      
                      <th>Nom & Prénom</th>
                      <th>E-mail</th>
                      <th style=\"width: 40px\">Etat</th>
                    </tr>
                    <tr>
                      
                      <td>Ahmed Cheikh</td>
                      <td> ahmed.cheikh@esprit.yn </td>
                      <td><span class=\"badge bg-red\">0</span></td>
                    </tr>
                    <tr>
                      
                      <td>Ahmed Cheikh</td>
                      <td> ahmed.cheikh@esprit.yn </td>
                      <td><span class=\"badge bg-red\">0</span></td>
                    </tr>
                    <tr>
                      
                      <td>Ahmed Cheikh</td>
                      <td> ahmed.cheikh@esprit.yn </td>
                      <td><span class=\"badge bg-red\">0</span></td>
                    </tr>
                    <tr>
                      
                      <td>Ahmed Cheikh</td>
                      <td> ahmed.cheikh@esprit.yn </td>
                      <td><span class=\"badge bg-red\">0</span></td>
                    </tr>
                    <tr>
                      
                      <td>Ahmed Cheikh</td>
                      <td> ahmed.cheikh@esprit.yn </td>
                      <td><span class=\"badge bg-red\">0</span></td>
                    </tr>
                    <tr>
                      
                      <td>Ahmed Cheikh</td>
                      <td> ahmed.cheikh@esprit.yn </td>
                      <td><span class=\"badge bg-green\">1</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
          
            ";
        // line 103
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 118
        echo "    
    ";
    }

    // line 103
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 104
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
        return array (  186 => 104,  183 => 103,  178 => 118,  176 => 103,  104 => 33,  95 => 30,  90 => 28,  85 => 26,  79 => 23,  74 => 21,  71 => 20,  67 => 19,  54 => 8,  51 => 7,  45 => 6,  39 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/dataTables.bootstrap.css') }}">*/
/*         {% endblock %}*/
/* {% block page_title %} Détails de l'organisme {% endblock %}*/
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
/*                   <div class="box-tools">*/
/*                     <ul class="pagination pagination-sm no-margin pull-right">*/
/*                       <li><a href="#">&laquo;</a></li>*/
/*                       <li><a href="#">1</a></li>*/
/*                       <li><a href="#">2</a></li>*/
/*                       <li><a href="#">3</a></li>*/
/*                       <li><a href="#">&raquo;</a></li>*/
/*                     </ul>*/
/*                   </div>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body no-padding">*/
/*                   <table id="example1" class="table">*/
/*                     <tr>*/
/*                       */
/*                       <th>Nom & Prénom</th>*/
/*                       <th>E-mail</th>*/
/*                       <th style="width: 40px">Etat</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       */
/*                       <td>Ahmed Cheikh</td>*/
/*                       <td> ahmed.cheikh@esprit.yn </td>*/
/*                       <td><span class="badge bg-red">0</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       */
/*                       <td>Ahmed Cheikh</td>*/
/*                       <td> ahmed.cheikh@esprit.yn </td>*/
/*                       <td><span class="badge bg-red">0</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       */
/*                       <td>Ahmed Cheikh</td>*/
/*                       <td> ahmed.cheikh@esprit.yn </td>*/
/*                       <td><span class="badge bg-red">0</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       */
/*                       <td>Ahmed Cheikh</td>*/
/*                       <td> ahmed.cheikh@esprit.yn </td>*/
/*                       <td><span class="badge bg-red">0</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       */
/*                       <td>Ahmed Cheikh</td>*/
/*                       <td> ahmed.cheikh@esprit.yn </td>*/
/*                       <td><span class="badge bg-red">0</span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       */
/*                       <td>Ahmed Cheikh</td>*/
/*                       <td> ahmed.cheikh@esprit.yn </td>*/
/*                       <td><span class="badge bg-green">1</span></td>*/
/*                     </tr>*/
/*                   </table>*/
/*                 </div><!-- /.box-body -->*/
/*               </div><!-- /.box -->*/
/* */
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
