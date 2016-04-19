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
        echo "    
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

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-morris.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/morris.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 99
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 100
        echo "    <script>
  \$(document).ready(function () {
    \"use strict\";

    // AREA CHART
   
   var months = [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"];
    
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
      data: [{
    m: '2015-01', // <-- valid timestamp strings
    a: ";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["jdec"]) ? $context["jdec"] : $this->getContext($context, "jdec")), "html", null, true);
        echo "
  }, ],
      
  xkey: 'm',
  ykeys: ['a', 'b','c','d'],
  labels: ['Android', 'iOS','Windows Phone','J2ME'],
  xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
    var month = months[x.getMonth()];
    return month;
  },
  dateFormat: function(x) {
    var month = months[new Date(x).getMonth()];
    return month;
  },
      
      lineColors: ['#3c8dbc',\"#f56954\", \"#00a65a\",\"#FDEE00\"],
      
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: [\"#3c8dbc\", \"#f56954\", \"#00a65a\",\"#FDEE00\" ],
      
      data: [
        {label:\"Android\", value:";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["nband"]) ? $context["nband"] : $this->getContext($context, "nband")), "html", null, true);
        echo " },
        {label:\"iOS\", value:";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["nbiOS"]) ? $context["nbiOS"] : $this->getContext($context, "nbiOS")), "html", null, true);
        echo " },
        {label:\"Windows Phone\", value:";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["nbWP"]) ? $context["nbWP"] : $this->getContext($context, "nbWP")), "html", null, true);
        echo " },
        {label:\"J2ME\", value:";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["nbJ2ME"]) ? $context["nbJ2ME"] : $this->getContext($context, "nbJ2ME")), "html", null, true);
        echo " },
        
      ],
      hideHover: 'auto'
    });
    
    //BAR CHART
    
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [{
    m: '2015-01', // <-- valid timestamp strings
    a: ";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 285
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 297
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 303
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 304
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 315
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 317
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 318
        echo twig_escape_filter($this->env, (isset($context["jdec"]) ? $context["jdec"] : $this->getContext($context, "jdec")), "html", null, true);
        echo "
  }, ],
      barColors: ['#00a65a', '#f56954',\"#3c8dbc\",\"#FDEE00\"],
      xkey: 'm',
    ykeys: ['a', 'b','c','d'],
    stacked: true,
    labels: ['Android', 'iOS','Windows Phone','J2ME'],
    xLabelFormat: function (x) { // <-- changed
        console.log(\"this is the new object:\" + x);
        var month = months[x.x];
        return month;
    },
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
        return array (  683 => 318,  679 => 317,  675 => 316,  671 => 315,  665 => 312,  661 => 311,  657 => 310,  653 => 309,  647 => 306,  643 => 305,  639 => 304,  635 => 303,  629 => 300,  625 => 299,  621 => 298,  617 => 297,  611 => 294,  607 => 293,  603 => 292,  599 => 291,  593 => 288,  589 => 287,  585 => 286,  581 => 285,  575 => 282,  571 => 281,  567 => 280,  563 => 279,  557 => 276,  553 => 275,  549 => 274,  545 => 273,  539 => 270,  535 => 269,  531 => 268,  527 => 267,  521 => 264,  517 => 263,  513 => 262,  509 => 261,  503 => 258,  499 => 257,  495 => 256,  491 => 255,  485 => 252,  481 => 251,  477 => 250,  473 => 249,  457 => 236,  453 => 235,  449 => 234,  445 => 233,  415 => 206,  411 => 205,  407 => 204,  403 => 203,  397 => 200,  393 => 199,  389 => 198,  385 => 197,  379 => 194,  375 => 193,  371 => 192,  367 => 191,  361 => 188,  357 => 187,  353 => 186,  349 => 185,  343 => 182,  339 => 181,  335 => 180,  331 => 179,  325 => 176,  321 => 175,  317 => 174,  313 => 173,  307 => 170,  303 => 169,  299 => 168,  295 => 167,  289 => 164,  285 => 163,  281 => 162,  277 => 161,  271 => 158,  267 => 157,  263 => 156,  259 => 155,  253 => 152,  249 => 151,  245 => 150,  241 => 149,  235 => 146,  231 => 145,  227 => 144,  223 => 143,  217 => 140,  213 => 139,  209 => 138,  205 => 137,  166 => 100,  163 => 99,  157 => 96,  153 => 95,  149 => 94,  144 => 93,  141 => 92,  55 => 9,  52 => 8,  46 => 6,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
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
/*     */
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
/*    var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];*/
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
/*     */
/*     var line = new Morris.Line({*/
/*       element: 'line-chart',*/
/*       resize: true,*/
/*       data: [{*/
/*     m: '2015-01', // <-- valid timestamp strings*/
/*     a: {{anjan}},*/
/*     b: {{ijan}},*/
/*     c: {{wjan}},*/
/*     d: {{jjan}}*/
/*   }, {*/
/*     m: '2015-02',*/
/*     a: {{anfev}},*/
/*     b: {{ifev}},*/
/*     c: {{wfev}},*/
/*     d: {{jfev}}*/
/*   }, {*/
/*     m: '2015-03',*/
/*     a: {{anmars}},*/
/*     b: {{imars}},*/
/*     c: {{wmars}},*/
/*     d: {{jmars}}*/
/*   }, {*/
/*     m: '2015-04',*/
/*     a: {{anav}},*/
/*     b: {{iav}},*/
/*     c: {{wav}},*/
/*     d: {{jav}}*/
/*   }, {*/
/*     m: '2015-05',*/
/*     a: {{anmai}},*/
/*     b: {{imai}},*/
/*     c: {{wmai}},*/
/*     d: {{jmai}}*/
/*   }, {*/
/*     m: '2015-06',*/
/*     a: {{anjuin}},*/
/*     b: {{ijuin}},*/
/*     c: {{wjuin}},*/
/*     d: {{jjuin}}*/
/*   }, {*/
/*     m: '2015-07',*/
/*     a: {{anjuillet}},*/
/*     b: {{ijuillet}},*/
/*     c: {{wjuillet}},*/
/*     d: {{jjuillet}}*/
/*   }, {*/
/*     m: '2015-08',*/
/*     a: {{anaout}},*/
/*     b: {{iaout}},*/
/*     c: {{waout}},*/
/*     d: {{jaout}}*/
/*   }, {*/
/*     m: '2015-09',*/
/*     a: {{ansep}},*/
/*     b: {{isep}},*/
/*     c: {{wsep}},*/
/*     d: {{jsep}}*/
/*   }, {*/
/*     m: '2015-10',*/
/*     a: {{anoc}},*/
/*     b: {{ioc}},*/
/*     c: {{woc}},*/
/*     d: {{joc}}*/
/*   }, {*/
/*     m: '2015-11',*/
/*     a: {{annov}},*/
/*     b: {{inov}},*/
/*     c: {{wnov}},*/
/*     d: {{jnov}}*/
/*   }, {*/
/*     m: '2015-12',*/
/*     a: {{andec}},*/
/*     b: {{idec}},*/
/*     c: {{wdec}},*/
/*     d: {{jdec}}*/
/*   }, ],*/
/*       */
/*   xkey: 'm',*/
/*   ykeys: ['a', 'b','c','d'],*/
/*   labels: ['Android', 'iOS','Windows Phone','J2ME'],*/
/*   xLabelFormat: function(x) { // <--- x.getMonth() returns valid index*/
/*     var month = months[x.getMonth()];*/
/*     return month;*/
/*   },*/
/*   dateFormat: function(x) {*/
/*     var month = months[new Date(x).getMonth()];*/
/*     return month;*/
/*   },*/
/*       */
/*       lineColors: ['#3c8dbc',"#f56954", "#00a65a","#FDEE00"],*/
/*       */
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
/*     */
/*     //BAR CHART*/
/*     */
/*     var bar = new Morris.Bar({*/
/*       element: 'bar-chart',*/
/*       resize: true,*/
/*       data: [{*/
/*     m: '2015-01', // <-- valid timestamp strings*/
/*     a: {{anjan}},*/
/*     b: {{ijan}},*/
/*     c: {{wjan}},*/
/*     d: {{jjan}}*/
/*   }, {*/
/*     m: '2015-02',*/
/*     a: {{anfev}},*/
/*     b: {{ifev}},*/
/*     c: {{wfev}},*/
/*     d: {{jfev}}*/
/*   }, {*/
/*     m: '2015-03',*/
/*     a: {{anmars}},*/
/*     b: {{imars}},*/
/*     c: {{wmars}},*/
/*     d: {{jmars}}*/
/*   }, {*/
/*     m: '2015-04',*/
/*     a: {{anav}},*/
/*     b: {{iav}},*/
/*     c: {{wav}},*/
/*     d: {{jav}}*/
/*   }, {*/
/*     m: '2015-05',*/
/*     a: {{anmai}},*/
/*     b: {{imai}},*/
/*     c: {{wmai}},*/
/*     d: {{jmai}}*/
/*   }, {*/
/*     m: '2015-06',*/
/*     a: {{anjuin}},*/
/*     b: {{ijuin}},*/
/*     c: {{wjuin}},*/
/*     d: {{jjuin}}*/
/*   }, {*/
/*     m: '2015-07',*/
/*     a: {{anjuillet}},*/
/*     b: {{ijuillet}},*/
/*     c: {{wjuillet}},*/
/*     d: {{jjuillet}}*/
/*   }, {*/
/*     m: '2015-08',*/
/*     a: {{anaout}},*/
/*     b: {{iaout}},*/
/*     c: {{waout}},*/
/*     d: {{jaout}}*/
/*   }, {*/
/*     m: '2015-09',*/
/*     a: {{ansep}},*/
/*     b: {{isep}},*/
/*     c: {{wsep}},*/
/*     d: {{jsep}}*/
/*   }, {*/
/*     m: '2015-10',*/
/*     a: {{anoc}},*/
/*     b: {{ioc}},*/
/*     c: {{woc}},*/
/*     d: {{joc}}*/
/*   }, {*/
/*     m: '2015-11',*/
/*     a: {{annov}},*/
/*     b: {{inov}},*/
/*     c: {{wnov}},*/
/*     d: {{jnov}}*/
/*   }, {*/
/*     m: '2015-12',*/
/*     a: {{andec}},*/
/*     b: {{idec}},*/
/*     c: {{wdec}},*/
/*     d: {{jdec}}*/
/*   }, ],*/
/*       barColors: ['#00a65a', '#f56954',"#3c8dbc","#FDEE00"],*/
/*       xkey: 'm',*/
/*     ykeys: ['a', 'b','c','d'],*/
/*     stacked: true,*/
/*     labels: ['Android', 'iOS','Windows Phone','J2ME'],*/
/*     xLabelFormat: function (x) { // <-- changed*/
/*         console.log("this is the new object:" + x);*/
/*         var month = months[x.x];*/
/*         return month;*/
/*     },*/
/*       hideHover: 'auto'*/
/*     });*/
/*   });*/
/* </script>*/
/*     {% endblock %}*/
