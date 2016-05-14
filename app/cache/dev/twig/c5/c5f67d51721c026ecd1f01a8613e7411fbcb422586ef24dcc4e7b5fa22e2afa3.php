<?php

/* AvanzuAdminThemeBundle:Default:charts.html.twig */
class __TwigTemplate_94c5a69bb828e5c7c88f9264b51454bea4790376088c1852cf042fd2f08f5015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:charts.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
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
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "                    ";
        // line 14
        echo "               
                

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li>
              <a href='";
        // line 21
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_demo");
        echo "'>
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href='";
        // line 26
        echo $this->env->getExtension('routing')->getPath("charts");
        echo "'>
                <i class=\"fa fa-pie-chart\"></i>
                <span>Statistiques</span>
              </a>
            </li>
            <li>
                <a href='";
        // line 32
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "'>
                    <i class=\"fa fa-table\"></i> <span>Organismes</span> <small class=\"label pull-right bg-red\">";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["nbonv"]) ? $context["nbonv"] : $this->getContext($context, "nbonv")), "html", null, true);
        echo " non valide</small>
                </a>
                
            </li>
            
            <li>
              <a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "'>
                <i class=\"fa fa-users\"></i> <span>Formateurs</span>
                <small class=\"label pull-right bg-red\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["nbfnv"]) ? $context["nbfnv"] : $this->getContext($context, "nbfnv")), "html", null, true);
        echo " non valide</small>
              </a>
            </li>
            <li>
                 ";
    }

    // line 46
    public function block_page_content($context, array $blocks = array())
    {
        // line 47
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

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        // line 131
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-morris.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/morris.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 137
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 138
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
        // line 151
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 220
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
        // line 246
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 266
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 284
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 285
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 297
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 302
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 303
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 308
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 315
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
        // line 342
        echo twig_escape_filter($this->env, (isset($context["nband"]) ? $context["nband"] : $this->getContext($context, "nband")), "html", null, true);
        echo " },
        {label:\"iOS\", value:";
        // line 343
        echo twig_escape_filter($this->env, (isset($context["nbiOS"]) ? $context["nbiOS"] : $this->getContext($context, "nbiOS")), "html", null, true);
        echo " },
        {label:\"Windows Phone\", value:";
        // line 344
        echo twig_escape_filter($this->env, (isset($context["nbWP"]) ? $context["nbWP"] : $this->getContext($context, "nbWP")), "html", null, true);
        echo " },
        {label:\"J2ME\", value:";
        // line 345
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
        // line 358
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 359
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 367
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 371
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 372
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 376
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 377
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 379
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 382
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 383
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 384
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 385
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 389
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 390
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 391
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 394
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 396
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 397
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 400
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 403
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 408
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 409
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 415
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 419
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 420
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 424
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 425
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 426
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 427
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
        return array (  957 => 427,  953 => 426,  949 => 425,  945 => 424,  939 => 421,  935 => 420,  931 => 419,  927 => 418,  921 => 415,  917 => 414,  913 => 413,  909 => 412,  903 => 409,  899 => 408,  895 => 407,  891 => 406,  885 => 403,  881 => 402,  877 => 401,  873 => 400,  867 => 397,  863 => 396,  859 => 395,  855 => 394,  849 => 391,  845 => 390,  841 => 389,  837 => 388,  831 => 385,  827 => 384,  823 => 383,  819 => 382,  813 => 379,  809 => 378,  805 => 377,  801 => 376,  795 => 373,  791 => 372,  787 => 371,  783 => 370,  777 => 367,  773 => 366,  769 => 365,  765 => 364,  759 => 361,  755 => 360,  751 => 359,  747 => 358,  731 => 345,  727 => 344,  723 => 343,  719 => 342,  689 => 315,  685 => 314,  681 => 313,  677 => 312,  671 => 309,  667 => 308,  663 => 307,  659 => 306,  653 => 303,  649 => 302,  645 => 301,  641 => 300,  635 => 297,  631 => 296,  627 => 295,  623 => 294,  617 => 291,  613 => 290,  609 => 289,  605 => 288,  599 => 285,  595 => 284,  591 => 283,  587 => 282,  581 => 279,  577 => 278,  573 => 277,  569 => 276,  563 => 273,  559 => 272,  555 => 271,  551 => 270,  545 => 267,  541 => 266,  537 => 265,  533 => 264,  527 => 261,  523 => 260,  519 => 259,  515 => 258,  509 => 255,  505 => 254,  501 => 253,  497 => 252,  491 => 249,  487 => 248,  483 => 247,  479 => 246,  450 => 220,  446 => 219,  442 => 218,  438 => 217,  432 => 214,  428 => 213,  424 => 212,  420 => 211,  414 => 208,  410 => 207,  406 => 206,  402 => 205,  396 => 202,  392 => 201,  388 => 200,  384 => 199,  378 => 196,  374 => 195,  370 => 194,  366 => 193,  360 => 190,  356 => 189,  352 => 188,  348 => 187,  342 => 184,  338 => 183,  334 => 182,  330 => 181,  324 => 178,  320 => 177,  316 => 176,  312 => 175,  306 => 172,  302 => 171,  298 => 170,  294 => 169,  288 => 166,  284 => 165,  280 => 164,  276 => 163,  270 => 160,  266 => 159,  262 => 158,  258 => 157,  252 => 154,  248 => 153,  244 => 152,  240 => 151,  225 => 138,  222 => 137,  216 => 134,  212 => 133,  208 => 132,  203 => 131,  200 => 130,  114 => 47,  111 => 46,  102 => 41,  97 => 39,  88 => 33,  84 => 32,  75 => 26,  67 => 21,  58 => 14,  56 => 9,  53 => 8,  47 => 6,  42 => 5,  39 => 4,  33 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block page_title %} Statistiques {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*         {{ parent() }}*/
/*          <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-morris.css') }}">*/
/*  {% endblock %}*/
/*  {% block avanzu_sidebar %}*/
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
