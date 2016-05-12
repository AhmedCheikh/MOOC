<?php

/* AvanzuAdminThemeBundle:Default:print.html.twig */
class __TwigTemplate_b3d5c0be38c6d99bdab092e973877830bbf0d03f3b198c574f8979a6dbbf996c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 17
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 24
        echo "
</head>

<body>
    
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
                      </tr>
                    </thead>
                    <tbody>
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeOrganisme"]) ? $context["listeOrganisme"] : $this->getContext($context, "listeOrganisme")));
        foreach ($context['_seq'] as $context["_key"] => $context["organisme"]) {
            // line 48
            echo "                      <tr>
                        
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "email", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["organisme"], "adresse", array()), "html", null, true);
            echo "</td>
                        ";
            // line 54
            if (($this->getAttribute($context["organisme"], "etat", array()) == 0)) {
                // line 55
                echo "                            <td><span class=\"label label-danger\">Non valide</span></td>
                        ";
            } else {
                // line 57
                echo "                            <td><span class=\"label label-success\">Valide</span></td>
                            ";
            }
            // line 59
            echo "                       
                      </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organisme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                      
                      </tbody> 
                  </table>
                     
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
        </div>
    
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
        function PrintWindow()
        {                     
           window.print();            
           CheckWindowState(); 
        }
        
        function CheckWindowState()
        {            
            if(document.readyState==\"complete\")
            {
                window.close();  
            }
            else
            {            
                setTimeout(\"CheckWindowState()\", 2000)
            }
        }    
        
       PrintWindow();
</script>
</body>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "MOOC";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
    }

    // line 17
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 18
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 18,  170 => 17,  163 => 10,  160 => 9,  154 => 6,  127 => 71,  116 => 62,  108 => 59,  104 => 57,  100 => 55,  98 => 54,  94 => 53,  90 => 52,  86 => 51,  82 => 50,  78 => 48,  74 => 47,  49 => 24,  46 => 17,  41 => 14,  37 => 12,  34 => 9,  29 => 6,  22 => 1,);
    }
}
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="author" content="">*/
/*     <meta name="keywords" content="">*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <title>{% block title %}MOOC{% endblock %}</title>*/
/* */
/*     {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}" />*/
/*     {% endblock %}*/
/* */
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}*/
/*     {%  block javascripts_head %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}"></script>*/
/*         <!--[if lt IE 9]>*/
/* */
/*         <![endif]-->*/
/* */
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/*     */
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
/*                        */
/*                       </tr>*/
/*                       {% endfor %}*/
/*                       */
/*                       </tbody> */
/*                   </table>*/
/*                      */
/*                 </div><!-- /.box-body -->*/
/*               </div><!-- /.box -->*/
/*             </div>*/
/*         </div>*/
/*     */
/* <script src="{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}"></script>*/
/* <script type="text/javascript">*/
/*         function PrintWindow()*/
/*         {                     */
/*            window.print();            */
/*            CheckWindowState(); */
/*         }*/
/*         */
/*         function CheckWindowState()*/
/*         {            */
/*             if(document.readyState=="complete")*/
/*             {*/
/*                 window.close();  */
/*             }*/
/*             else*/
/*             {            */
/*                 setTimeout("CheckWindowState()", 2000)*/
/*             }*/
/*         }    */
/*         */
/*        PrintWindow();*/
/* </script>*/
/* </body>*/
