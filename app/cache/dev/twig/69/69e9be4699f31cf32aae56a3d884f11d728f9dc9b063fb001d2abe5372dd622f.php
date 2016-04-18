<?php

/* AvanzuAdminThemeBundle:Default:charts.html.twig */
class __TwigTemplate_e2e363b75e08efffccbb4f64362959115f2fd3d090726decabe26db705221e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:charts.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_page_title($context, array $blocks = array())
    {
        echo " Statistiques ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
         <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-morris.css")), "html", null, true);
        echo "\">
 ";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"callout callout-warning\">
        <h4>Warning!</h4>

        <p><b>Morris.js</b> charts are no longer maintained by its author. We would recommend using any of the other
          charts that come with the template.</p>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <!-- AREA CHART -->
          <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Area Chart</h3>

              <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
              </div>
            </div>
            <div class=\"box-body chart-responsive\">
              <div class=\"chart\" id=\"revenue-chart\" style=\"height: 300px;\"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Donut Chart</h3>

              <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
              </div>
            </div>
            <div class=\"box-body chart-responsive\">
              <div class=\"chart\" id=\"sales-chart\" style=\"height: 300px; position: relative;\"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class=\"col-md-6\">
          <!-- LINE CHART -->
          <div class=\"box box-info\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Line Chart</h3>

              <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
              </div>
            </div>
            <div class=\"box-body chart-responsive\">
              <div class=\"chart\" id=\"line-chart\" style=\"height: 300px;\"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class=\"box box-success\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Bar Chart</h3>

              <div class=\"box-tools pull-right\">
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
              </div>
            </div>
            <div class=\"box-body chart-responsive\">
              <div class=\"chart\" id=\"bar-chart\" style=\"height: 300px;\"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
";
    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-morris.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/morris.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 104
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 105
        echo "    <script>
  \$(document).ready(function () {
    \"use strict\";

    // AREA CHART
   
    
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666, item2: 2666},
        {y: '2011 Q2', item1: 2778, item2: 2294},
        {y: '2011 Q3', item1: 4912, item2: 1969},
        {y: '2011 Q4', item1: 3767, item2: 3597},
        {y: '2012 Q1', item1: 6810, item2: 1914},
        {y: '2012 Q2', item1: 5670, item2: 4293},
        {y: '2012 Q3', item1: 4820, item2: 3795},
        {y: '2012 Q4', item1: 15073, item2: 5967},
        {y: '2013 Q1', item1: 10687, item2: 4460},
        {y: '2013 Q2', item1: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2'],
      labels: ['Item 1', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: [\"#3c8dbc\", \"#f56954\", \"#00a65a\",\"#FDEE00\" ],
      
      data: [
        {label:\"Android\", value:";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["nband"]) ? $context["nband"] : $this->getContext($context, "nband")), "html", null, true);
        echo " },
        {label:\"iOS\", value:";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["nbiOS"]) ? $context["nbiOS"] : $this->getContext($context, "nbiOS")), "html", null, true);
        echo " },
        {label:\"Windows Phone\", value:";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["nbWP"]) ? $context["nbWP"] : $this->getContext($context, "nbWP")), "html", null, true);
        echo " },
        {label:\"J2ME\", value:";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["nbJ2ME"]) ? $context["nbJ2ME"] : $this->getContext($context, "nbJ2ME")), "html", null, true);
        echo " },
        
      ],
      hideHover: 'auto'
    });
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
</script>
    ";
    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:charts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 167,  240 => 166,  236 => 165,  232 => 164,  171 => 105,  168 => 104,  162 => 101,  158 => 100,  154 => 99,  149 => 98,  146 => 97,  55 => 9,  52 => 8,  46 => 6,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block page_title %} Statistiques {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*         {{ parent() }}*/
/*          <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-morris.css') }}">*/
/*  {% endblock %}*/
/* {% block page_content %}*/
/*     <div class="callout callout-warning">*/
/*         <h4>Warning!</h4>*/
/* */
/*         <p><b>Morris.js</b> charts are no longer maintained by its author. We would recommend using any of the other*/
/*           charts that come with the template.</p>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-md-6">*/
/*           <!-- AREA CHART -->*/
/*           <div class="box box-primary">*/
/*             <div class="box-header with-border">*/
/*               <h3 class="box-title">Area Chart</h3>*/
/* */
/*               <div class="box-tools pull-right">*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                 </button>*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="box-body chart-responsive">*/
/*               <div class="chart" id="revenue-chart" style="height: 300px;"></div>*/
/*             </div>*/
/*             <!-- /.box-body -->*/
/*           </div>*/
/*           <!-- /.box -->*/
/* */
/*           <!-- DONUT CHART -->*/
/*           <div class="box box-danger">*/
/*             <div class="box-header with-border">*/
/*               <h3 class="box-title">Donut Chart</h3>*/
/* */
/*               <div class="box-tools pull-right">*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                 </button>*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="box-body chart-responsive">*/
/*               <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>*/
/*             </div>*/
/*             <!-- /.box-body -->*/
/*           </div>*/
/*           <!-- /.box -->*/
/* */
/*         </div>*/
/*         <!-- /.col (LEFT) -->*/
/*         <div class="col-md-6">*/
/*           <!-- LINE CHART -->*/
/*           <div class="box box-info">*/
/*             <div class="box-header with-border">*/
/*               <h3 class="box-title">Line Chart</h3>*/
/* */
/*               <div class="box-tools pull-right">*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                 </button>*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="box-body chart-responsive">*/
/*               <div class="chart" id="line-chart" style="height: 300px;"></div>*/
/*             </div>*/
/*             <!-- /.box-body -->*/
/*           </div>*/
/*           <!-- /.box -->*/
/* */
/*           <!-- BAR CHART -->*/
/*           <div class="box box-success">*/
/*             <div class="box-header with-border">*/
/*               <h3 class="box-title">Bar Chart</h3>*/
/* */
/*               <div class="box-tools pull-right">*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                 </button>*/
/*                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <div class="box-body chart-responsive">*/
/*               <div class="chart" id="bar-chart" style="height: 300px;"></div>*/
/*             </div>*/
/*             <!-- /.box-body -->*/
/*           </div>*/
/*           <!-- /.box -->*/
/* */
/*         </div>*/
/*         <!-- /.col (RIGHT) -->*/
/*       </div>*/
/*       <!-- /.row -->*/
/* {% endblock %}*/
/*     {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-morris.js') }}"></script>*/
/*     <script src="{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/morris.min.js') }}"></script>*/
/*     <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block javascripts_inline %}*/
/*     <script>*/
/*   $(document).ready(function () {*/
/*     "use strict";*/
/* */
/*     // AREA CHART*/
/*    */
/*     */
/*     var area = new Morris.Area({*/
/*       element: 'revenue-chart',*/
/*       resize: true,*/
/*       data: [*/
/*         {y: '2011 Q1', item1: 2666, item2: 2666},*/
/*         {y: '2011 Q2', item1: 2778, item2: 2294},*/
/*         {y: '2011 Q3', item1: 4912, item2: 1969},*/
/*         {y: '2011 Q4', item1: 3767, item2: 3597},*/
/*         {y: '2012 Q1', item1: 6810, item2: 1914},*/
/*         {y: '2012 Q2', item1: 5670, item2: 4293},*/
/*         {y: '2012 Q3', item1: 4820, item2: 3795},*/
/*         {y: '2012 Q4', item1: 15073, item2: 5967},*/
/*         {y: '2013 Q1', item1: 10687, item2: 4460},*/
/*         {y: '2013 Q2', item1: 8432, item2: 5713}*/
/*       ],*/
/*       xkey: 'y',*/
/*       ykeys: ['item1', 'item2'],*/
/*       labels: ['Item 1', 'Item 2'],*/
/*       lineColors: ['#a0d0e0', '#3c8dbc'],*/
/*       hideHover: 'auto'*/
/*     });*/
/* */
/*     // LINE CHART*/
/*     var line = new Morris.Line({*/
/*       element: 'line-chart',*/
/*       resize: true,*/
/*       data: [*/
/*         {y: '2011 Q1', item1: 2666},*/
/*         {y: '2011 Q2', item1: 2778},*/
/*         {y: '2011 Q3', item1: 4912},*/
/*         {y: '2011 Q4', item1: 3767},*/
/*         {y: '2012 Q1', item1: 6810},*/
/*         {y: '2012 Q2', item1: 5670},*/
/*         {y: '2012 Q3', item1: 4820},*/
/*         {y: '2012 Q4', item1: 15073},*/
/*         {y: '2013 Q1', item1: 10687},*/
/*         {y: '2013 Q2', item1: 8432}*/
/*       ],*/
/*       xkey: 'y',*/
/*       ykeys: ['item1'],*/
/*       labels: ['Item 1'],*/
/*       lineColors: ['#3c8dbc'],*/
/*       hideHover: 'auto'*/
/*     });*/
/* */
/*     //DONUT CHART*/
/*     var donut = new Morris.Donut({*/
/*       element: 'sales-chart',*/
/*       resize: true,*/
/*       colors: ["#3c8dbc", "#f56954", "#00a65a","#FDEE00" ],*/
/*       */
/*       data: [*/
/*         {label:"Android", value:{{nband}} },*/
/*         {label:"iOS", value:{{nbiOS}} },*/
/*         {label:"Windows Phone", value:{{nbWP}} },*/
/*         {label:"J2ME", value:{{nbJ2ME}} },*/
/*         */
/*       ],*/
/*       hideHover: 'auto'*/
/*     });*/
/*     //BAR CHART*/
/*     var bar = new Morris.Bar({*/
/*       element: 'bar-chart',*/
/*       resize: true,*/
/*       data: [*/
/*         {y: '2006', a: 100, b: 90},*/
/*         {y: '2007', a: 75, b: 65},*/
/*         {y: '2008', a: 50, b: 40},*/
/*         {y: '2009', a: 75, b: 65},*/
/*         {y: '2010', a: 50, b: 40},*/
/*         {y: '2011', a: 75, b: 65},*/
/*         {y: '2012', a: 100, b: 90}*/
/*       ],*/
/*       barColors: ['#00a65a', '#f56954'],*/
/*       xkey: 'y',*/
/*       ykeys: ['a', 'b'],*/
/*       labels: ['CPU', 'DISK'],*/
/*       hideHover: 'auto'*/
/*     });*/
/*   });*/
/* </script>*/
/*     {% endblock %}*/
