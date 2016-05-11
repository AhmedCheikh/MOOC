<?php

/* AvanzuAdminThemeBundle:Default:charts.html.twig */
class __TwigTemplate_6aa2c1600badc3195d8724de4aeb1446f7e2ec83f4fa65ac21e05087e5d92125 extends Twig_Template
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
      data: [{
    m: '2015-01', // <-- valid timestamp strings
    a: ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 182
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

    // LINE CHART
    
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [{
    m: '2015-01', // <-- valid timestamp strings
    a: ";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 209
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 277
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
        // line 304
        echo twig_escape_filter($this->env, (isset($context["nband"]) ? $context["nband"] : $this->getContext($context, "nband")), "html", null, true);
        echo " },
        {label:\"iOS\", value:";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["nbiOS"]) ? $context["nbiOS"] : $this->getContext($context, "nbiOS")), "html", null, true);
        echo " },
        {label:\"Windows Phone\", value:";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["nbWP"]) ? $context["nbWP"] : $this->getContext($context, "nbWP")), "html", null, true);
        echo " },
        {label:\"J2ME\", value:";
        // line 307
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
        // line 320
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 332
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 333
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 335
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 338
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 341
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 344
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 345
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 347
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 352
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 356
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 358
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 359
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 362
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 368
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 369
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 371
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 374
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 375
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 376
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 377
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 380
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 381
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 382
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 383
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 386
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 387
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 389
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
        return array (  898 => 389,  894 => 388,  890 => 387,  886 => 386,  880 => 383,  876 => 382,  872 => 381,  868 => 380,  862 => 377,  858 => 376,  854 => 375,  850 => 374,  844 => 371,  840 => 370,  836 => 369,  832 => 368,  826 => 365,  822 => 364,  818 => 363,  814 => 362,  808 => 359,  804 => 358,  800 => 357,  796 => 356,  790 => 353,  786 => 352,  782 => 351,  778 => 350,  772 => 347,  768 => 346,  764 => 345,  760 => 344,  754 => 341,  750 => 340,  746 => 339,  742 => 338,  736 => 335,  732 => 334,  728 => 333,  724 => 332,  718 => 329,  714 => 328,  710 => 327,  706 => 326,  700 => 323,  696 => 322,  692 => 321,  688 => 320,  672 => 307,  668 => 306,  664 => 305,  660 => 304,  630 => 277,  626 => 276,  622 => 275,  618 => 274,  612 => 271,  608 => 270,  604 => 269,  600 => 268,  594 => 265,  590 => 264,  586 => 263,  582 => 262,  576 => 259,  572 => 258,  568 => 257,  564 => 256,  558 => 253,  554 => 252,  550 => 251,  546 => 250,  540 => 247,  536 => 246,  532 => 245,  528 => 244,  522 => 241,  518 => 240,  514 => 239,  510 => 238,  504 => 235,  500 => 234,  496 => 233,  492 => 232,  486 => 229,  482 => 228,  478 => 227,  474 => 226,  468 => 223,  464 => 222,  460 => 221,  456 => 220,  450 => 217,  446 => 216,  442 => 215,  438 => 214,  432 => 211,  428 => 210,  424 => 209,  420 => 208,  391 => 182,  387 => 181,  383 => 180,  379 => 179,  373 => 176,  369 => 175,  365 => 174,  361 => 173,  355 => 170,  351 => 169,  347 => 168,  343 => 167,  337 => 164,  333 => 163,  329 => 162,  325 => 161,  319 => 158,  315 => 157,  311 => 156,  307 => 155,  301 => 152,  297 => 151,  293 => 150,  289 => 149,  283 => 146,  279 => 145,  275 => 144,  271 => 143,  265 => 140,  261 => 139,  257 => 138,  253 => 137,  247 => 134,  243 => 133,  239 => 132,  235 => 131,  229 => 128,  225 => 127,  221 => 126,  217 => 125,  211 => 122,  207 => 121,  203 => 120,  199 => 119,  193 => 116,  189 => 115,  185 => 114,  181 => 113,  166 => 100,  163 => 99,  157 => 96,  153 => 95,  149 => 94,  144 => 93,  141 => 92,  55 => 9,  52 => 8,  46 => 6,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
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
