<?php

/* AvanzuAdminThemeBundle:Default:Organismes.html.twig */
class __TwigTemplate_323c26f5c7830677add8d073799649822feb368e7dfa052df492698e76f078d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:Organismes.html.twig", 1);
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

    // line 10
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeOrganisme"]) ? $context["listeOrganisme"] : $this->getContext($context, "listeOrganisme")));
        foreach ($context['_seq'] as $context["_key"] => $context["organisme"]) {
            // line 31
            echo "                      <tr>
                        
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "adresse", array()), "html", null, true);
            echo "</td>
                        ";
            // line 37
            if (($this->getAttribute($context["organisme"], "etat", array()) == 0)) {
                // line 38
                echo "                            <td><span class=\"label label-danger\">Non valide</span></td>
                        ";
            } else {
                // line 40
                echo "                            <td><span class=\"label label-success\">Valide</span></td>
                            ";
            }
            // line 42
            echo "                        <td><div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-info\">Action</button>
                      <button type=\"button\" class=\"btn btn-info dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                      </button>
                      <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("details_organisme", array("id" => $this->getAttribute($context["organisme"], "idorganisme", array()))), "html", null, true);
            echo "\" >Détails</a></li>
                        <li><a href=\"#\">Documents</a></li>
                        <li><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("valider_organisme", array("id" => $this->getAttribute($context["organisme"], "idorganisme", array()))), "html", null, true);
            echo "\">Valider</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Supprimer</a></li>
                      </ul>
                    </div></td>
                      </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.2</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.4</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td>125.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td>312.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td>419.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td>522.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td>420</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td>420.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td>413</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td>8.5</td>
                        <td>C/A<sup>1</sup></td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td>3.1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td>3.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td>3.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td>1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td>1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </tbody> 
                  </table>
                      <a href=\"#\" target=\"_blank\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div>
    
";
        // line 478
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 493
        echo "    
    ";
    }

    // line 478
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 479
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
        return array (  568 => 479,  565 => 478,  560 => 493,  558 => 478,  136 => 58,  123 => 51,  118 => 49,  109 => 42,  105 => 40,  101 => 38,  99 => 37,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  79 => 31,  75 => 30,  51 => 10,  45 => 8,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
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
/*                           <li><a href="{{ path('details_organisme', {'id': organisme.idorganisme}) }}" >Détails</a></li>*/
/*                         <li><a href="#">Documents</a></li>*/
/*                         <li><a href="{{ path('valider_organisme', {'id': organisme.idorganisme}) }}">Valider</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Supprimer</a></li>*/
/*                       </ul>*/
/*                     </div></td>*/
/*                       </tr>*/
/*                       {% endfor %}*/
/*                       <tr>*/
/*                         <td>Trident</td>*/
/*                         <td>Internet*/
/*                           Explorer 4.0</td>*/
/*                         <td>Win 95+</td>*/
/*                         <td> 4</td>*/
/*                         <td>X</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Trident</td>*/
/*                         <td>Internet*/
/*                           Explorer 5.0</td>*/
/*                         <td>Win 95+</td>*/
/*                         <td>5</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Trident</td>*/
/*                         <td>Internet*/
/*                           Explorer 5.5</td>*/
/*                         <td>Win 95+</td>*/
/*                         <td>5.5</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Trident</td>*/
/*                         <td>Internet*/
/*                           Explorer 6</td>*/
/*                         <td>Win 98+</td>*/
/*                         <td>6</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Trident</td>*/
/*                         <td>Internet Explorer 7</td>*/
/*                         <td>Win XP SP2+</td>*/
/*                         <td>7</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Trident</td>*/
/*                         <td>AOL browser (AOL desktop)</td>*/
/*                         <td>Win XP</td>*/
/*                         <td>6</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Firefox 1.0</td>*/
/*                         <td>Win 98+ / OSX.2+</td>*/
/*                         <td>1.7</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Firefox 1.5</td>*/
/*                         <td>Win 98+ / OSX.2+</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Firefox 2.0</td>*/
/*                         <td>Win 98+ / OSX.2+</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Firefox 3.0</td>*/
/*                         <td>Win 2k+ / OSX.3+</td>*/
/*                         <td>1.9</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Camino 1.0</td>*/
/*                         <td>OSX.2+</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Camino 1.5</td>*/
/*                         <td>OSX.3+</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Netscape 7.2</td>*/
/*                         <td>Win 95+ / Mac OS 8.6-9.2</td>*/
/*                         <td>1.7</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Netscape Browser 8</td>*/
/*                         <td>Win 98SE+</td>*/
/*                         <td>1.7</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Netscape Navigator 9</td>*/
/*                         <td>Win 98+ / OSX.2+</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.0</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>1</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.1</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>1.1</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.2</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>1.2</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.3</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>1.3</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.4</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>1.4</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.5</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>1.5</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.6</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>1.6</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.7</td>*/
/*                         <td>Win 98+ / OSX.1+</td>*/
/*                         <td>1.7</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Mozilla 1.8</td>*/
/*                         <td>Win 98+ / OSX.1+</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Seamonkey 1.1</td>*/
/*                         <td>Win 98+ / OSX.2+</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Gecko</td>*/
/*                         <td>Epiphany 2.20</td>*/
/*                         <td>Gnome</td>*/
/*                         <td>1.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Webkit</td>*/
/*                         <td>Safari 1.2</td>*/
/*                         <td>OSX.3</td>*/
/*                         <td>125.5</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Webkit</td>*/
/*                         <td>Safari 1.3</td>*/
/*                         <td>OSX.3</td>*/
/*                         <td>312.8</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Webkit</td>*/
/*                         <td>Safari 2.0</td>*/
/*                         <td>OSX.4+</td>*/
/*                         <td>419.3</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Webkit</td>*/
/*                         <td>Safari 3.0</td>*/
/*                         <td>OSX.4+</td>*/
/*                         <td>522.1</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Webkit</td>*/
/*                         <td>OmniWeb 5.5</td>*/
/*                         <td>OSX.4+</td>*/
/*                         <td>420</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Webkit</td>*/
/*                         <td>iPod Touch / iPhone</td>*/
/*                         <td>iPod</td>*/
/*                         <td>420.1</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Webkit</td>*/
/*                         <td>S60</td>*/
/*                         <td>S60</td>*/
/*                         <td>413</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera 7.0</td>*/
/*                         <td>Win 95+ / OSX.1+</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera 7.5</td>*/
/*                         <td>Win 95+ / OSX.2+</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera 8.0</td>*/
/*                         <td>Win 95+ / OSX.2+</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera 8.5</td>*/
/*                         <td>Win 95+ / OSX.2+</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera 9.0</td>*/
/*                         <td>Win 95+ / OSX.3+</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera 9.2</td>*/
/*                         <td>Win 88+ / OSX.3+</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera 9.5</td>*/
/*                         <td>Win 88+ / OSX.3+</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Opera for Wii</td>*/
/*                         <td>Wii</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Nokia N800</td>*/
/*                         <td>N800</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Presto</td>*/
/*                         <td>Nintendo DS browser</td>*/
/*                         <td>Nintendo DS</td>*/
/*                         <td>8.5</td>*/
/*                         <td>C/A<sup>1</sup></td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>KHTML</td>*/
/*                         <td>Konqureror 3.1</td>*/
/*                         <td>KDE 3.1</td>*/
/*                         <td>3.1</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>KHTML</td>*/
/*                         <td>Konqureror 3.3</td>*/
/*                         <td>KDE 3.3</td>*/
/*                         <td>3.3</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>KHTML</td>*/
/*                         <td>Konqureror 3.5</td>*/
/*                         <td>KDE 3.5</td>*/
/*                         <td>3.5</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Tasman</td>*/
/*                         <td>Internet Explorer 4.5</td>*/
/*                         <td>Mac OS 8-9</td>*/
/*                         <td>-</td>*/
/*                         <td>X</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Tasman</td>*/
/*                         <td>Internet Explorer 5.1</td>*/
/*                         <td>Mac OS 7.6-9</td>*/
/*                         <td>1</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Tasman</td>*/
/*                         <td>Internet Explorer 5.2</td>*/
/*                         <td>Mac OS 8-X</td>*/
/*                         <td>1</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>NetFront 3.1</td>*/
/*                         <td>Embedded devices</td>*/
/*                         <td>-</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>NetFront 3.4</td>*/
/*                         <td>Embedded devices</td>*/
/*                         <td>-</td>*/
/*                         <td>A</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>Dillo 0.8</td>*/
/*                         <td>Embedded devices</td>*/
/*                         <td>-</td>*/
/*                         <td>X</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>Links</td>*/
/*                         <td>Text only</td>*/
/*                         <td>-</td>*/
/*                         <td>X</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>Lynx</td>*/
/*                         <td>Text only</td>*/
/*                         <td>-</td>*/
/*                         <td>X</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>IE Mobile</td>*/
/*                         <td>Windows Mobile 6</td>*/
/*                         <td>-</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Misc</td>*/
/*                         <td>PSP browser</td>*/
/*                         <td>PSP</td>*/
/*                         <td>-</td>*/
/*                         <td>C</td>*/
/*                       </tr>*/
/*                       <tr>*/
/*                         <td>Other browsers</td>*/
/*                         <td>All others</td>*/
/*                         <td>-</td>*/
/*                         <td>-</td>*/
/*                         <td>U</td>*/
/*                       </tr>*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                       <tr>*/
/*                         <th>Rendering engine</th>*/
/*                         <th>Browser</th>*/
/*                         <th>Platform(s)</th>*/
/*                         <th>Engine version</th>*/
/*                         <th>CSS grade</th>*/
/*                       </tr>*/
/*                       </tbody> */
/*                   </table>*/
/*                       <a href="#" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>*/
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
