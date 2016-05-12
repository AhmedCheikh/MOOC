<?php

/* AvanzuAdminThemeBundle:Default:dashboard.html.twig */
class __TwigTemplate_620d936e24f5a8879f208a3e5d04fd0946f59fe190903780392606db11e24ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:dashboard.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/bootstrap.min.css")), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-morris.css")), "html", null, true);
        echo "\">
 ";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo "Dashboard ";
    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Control panel";
    }

    // line 12
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 13
        echo "                    ";
        // line 18
        echo "               
                

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li>
              <a href='";
        // line 25
        echo $this->env->getExtension('routing')->getPath("avanzu_admin_demo");
        echo "'>
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href='";
        // line 30
        echo $this->env->getExtension('routing')->getPath("charts");
        echo "'>
                <i class=\"fa fa-pie-chart\"></i>
                <span>Statistiques</span>
              </a>
            </li>
            <li>
                <a href='";
        // line 36
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "'>
                    <i class=\"fa fa-table\"></i> <span>Organismes</span> <small class=\"label pull-right bg-red\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["nbonv"]) ? $context["nbonv"] : $this->getContext($context, "nbonv")), "html", null, true);
        echo " non valide</small>
                </a>
                
            </li>
            
            <li>
              <a href='";
        // line 43
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "'>
                <i class=\"fa fa-users\"></i> <span>Formateurs</span>
                <small class=\"label pull-right bg-red\">";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["nbfnv"]) ? $context["nbfnv"] : $this->getContext($context, "nbfnv")), "html", null, true);
        echo " non valide</small>
              </a>
            </li>
            <li>
                 ";
    }

    // line 50
    public function block_page_content($context, array $blocks = array())
    {
        echo " 
    
     <div class=\"row\">
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                  <h3>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["nbc"]) ? $context["nbc"] : $this->getContext($context, "nbc")), "html", null, true);
        echo "</h3>
                  <p>Cours</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-ios-book\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-green\">
                <div class=\"inner\">
                  <h3>";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["nbo"]) ? $context["nbo"] : $this->getContext($context, "nbo")), "html", null, true);
        echo "</h3>
                  <p>Organismes</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-android-home\"></i>
                </div>
                <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("liste_organisme");
        echo "\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                  <h3>";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["nbf"]) ? $context["nbf"] : $this->getContext($context, "nbf")), "html", null, true);
        echo "</h3>
                  <p>Formateurs</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-ios-people\"></i>
                </div>
                <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("liste_formateur");
        echo "\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-red\">
                <div class=\"inner\">
                  <h3>";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["nba"]) ? $context["nba"] : $this->getContext($context, "nba")), "html", null, true);
        echo "</h3>
                  <p>Apprenants</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-university\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class=\"row\">
            <!-- Left col -->
            <section class=\"col-lg-7 connectedSortable\">
              <!-- Custom tabs (Charts with tabs)-->
              <div class=\"nav-tabs-custom\">
                <!-- Tabs within a box -->
                <ul class=\"nav nav-tabs pull-right\">
                  <li class=\"active\"><a href=\"#revenue-chart\" data-toggle=\"tab\">Bar chart</a></li>
                  <li><a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a></li>
                  <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Statistiques</li>
                </ul>
                <div class=\"tab-content no-padding\">
                  <!-- Morris chart - Sales -->
                  <div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
                  <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
                </div>
              </div><!-- /.nav-tabs-custom -->
              <!-- quick email widget -->
              <div class=\"box box-info\">
                <div class=\"box-header\">
                  <i class=\"fa fa-envelope\"></i>
                  <h3 class=\"box-title\">Quick Email</h3>
                  <!-- tools box -->
                  <div class=\"pull-right box-tools\">
                    <button class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                  </div><!-- /. tools -->
                </div>
                <div class=\"box-body\">
                  <form action=\"#\" method=\"post\">
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\">
                    </div>
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\">
                    </div>
                    <div>
                      <textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
                    </div>
                  </form>
                </div>
                <div class=\"box-footer clearfix\">
                  <button class=\"pull-right btn btn-default\" id=\"sendEmail\">Send <i class=\"fa fa-arrow-circle-right\"></i></button>
                </div>
              </div>

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class=\"col-lg-5 connectedSortable\">

              
              <!-- /.box -->

              <!-- solid sales graph -->
              <div class=\"box box-solid bg-teal-gradient\">
                <div class=\"box-header\">
                  <i class=\"fa fa-th\"></i>
                  <h3 class=\"box-title\">Cours suivis</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn bg-teal btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn bg-teal btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body border-radius-none\">
                  <div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

              <!-- Calendar -->
              <div class=\"box box-solid bg-green-gradient\">
                <div class=\"box-header\">
                  <i class=\"fa fa-calendar\"></i>
                  <h3 class=\"box-title\">Calendar</h3>
                  <!-- tools box -->
                  <div class=\"pull-right box-tools\">
                    <!-- button with a dropdown -->
                    <div class=\"btn-group\">
                      <button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></button>
                      <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li><a href=\"#\">Add new event</a></li>
                        <li><a href=\"#\">Clear events</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">View calendar</a></li>
                      </ul>
                    </div>
                    <button class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <!--The calendar -->
                  <div id=\"calendar\" style=\"width: 100%\"></div>
                </div><!-- /.box-body -->
                <div class=\"box-footer text-black\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <!-- Progress bars -->
                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #1</span>
                        <small class=\"pull-right\">90%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                      </div>

                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #2</span>
                        <small class=\"pull-right\">70%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #3</span>
                        <small class=\"pull-right\">60%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                      </div>

                      <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #4</span>
                        <small class=\"pull-right\">40%</small>
                      </div>
                      <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
";
    }

    // line 249
    public function block_javascripts($context, array $blocks = array())
    {
        // line 250
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-morris.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/morris.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 256
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 257
        echo "    <script>
  \$(document).ready(function () {
    \"use strict\";

    // AREA CHART
   
   var months = [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"];
    
    

    // LINE CHART
    
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [{
    m: '2015-01', // <-- valid timestamp strings
    a: ";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 304
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 316
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 317
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 318
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 325
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 335
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 341
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 343
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
        // line 370
        echo twig_escape_filter($this->env, (isset($context["nband"]) ? $context["nband"] : $this->getContext($context, "nband")), "html", null, true);
        echo " },
        {label:\"iOS\", value:";
        // line 371
        echo twig_escape_filter($this->env, (isset($context["nbiOS"]) ? $context["nbiOS"] : $this->getContext($context, "nbiOS")), "html", null, true);
        echo " },
        {label:\"Windows Phone\", value:";
        // line 372
        echo twig_escape_filter($this->env, (isset($context["nbWP"]) ? $context["nbWP"] : $this->getContext($context, "nbWP")), "html", null, true);
        echo " },
        {label:\"J2ME\", value:";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["nbJ2ME"]) ? $context["nbJ2ME"] : $this->getContext($context, "nbJ2ME")), "html", null, true);
        echo " },
        
      ],
      hideHover: 'auto'
    });
    
    //BAR CHART
    
    var bar = new Morris.Bar({
      element: 'revenue-chart',
      resize: true,
      data: [{
    m: '2015-01', // <-- valid timestamp strings
    a: ";
        // line 386
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 387
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 389
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 392
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 393
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 394
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 398
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 399
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 400
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 401
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 404
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 405
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 406
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 410
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 411
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 419
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 422
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 423
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 424
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 425
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 428
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 429
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 430
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 431
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 434
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 435
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 436
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 437
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 441
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 442
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 443
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 446
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 447
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 448
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 449
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 452
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 453
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 454
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 455
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
        return "AvanzuAdminThemeBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  869 => 455,  865 => 454,  861 => 453,  857 => 452,  851 => 449,  847 => 448,  843 => 447,  839 => 446,  833 => 443,  829 => 442,  825 => 441,  821 => 440,  815 => 437,  811 => 436,  807 => 435,  803 => 434,  797 => 431,  793 => 430,  789 => 429,  785 => 428,  779 => 425,  775 => 424,  771 => 423,  767 => 422,  761 => 419,  757 => 418,  753 => 417,  749 => 416,  743 => 413,  739 => 412,  735 => 411,  731 => 410,  725 => 407,  721 => 406,  717 => 405,  713 => 404,  707 => 401,  703 => 400,  699 => 399,  695 => 398,  689 => 395,  685 => 394,  681 => 393,  677 => 392,  671 => 389,  667 => 388,  663 => 387,  659 => 386,  643 => 373,  639 => 372,  635 => 371,  631 => 370,  601 => 343,  597 => 342,  593 => 341,  589 => 340,  583 => 337,  579 => 336,  575 => 335,  571 => 334,  565 => 331,  561 => 330,  557 => 329,  553 => 328,  547 => 325,  543 => 324,  539 => 323,  535 => 322,  529 => 319,  525 => 318,  521 => 317,  517 => 316,  511 => 313,  507 => 312,  503 => 311,  499 => 310,  493 => 307,  489 => 306,  485 => 305,  481 => 304,  475 => 301,  471 => 300,  467 => 299,  463 => 298,  457 => 295,  453 => 294,  449 => 293,  445 => 292,  439 => 289,  435 => 288,  431 => 287,  427 => 286,  421 => 283,  417 => 282,  413 => 281,  409 => 280,  403 => 277,  399 => 276,  395 => 275,  391 => 274,  372 => 257,  369 => 256,  363 => 253,  359 => 252,  355 => 251,  350 => 250,  347 => 249,  191 => 96,  181 => 89,  172 => 83,  162 => 76,  153 => 70,  137 => 57,  126 => 50,  117 => 45,  112 => 43,  103 => 37,  99 => 36,  90 => 30,  82 => 25,  73 => 18,  71 => 13,  68 => 12,  62 => 11,  56 => 10,  50 => 7,  46 => 6,  42 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* */
/*  {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}" />*/
/*          <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/bootstrap.min.css') }}">*/
/*          <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-morris.css') }}">*/
/*  {% endblock %}*/
/*     */
/* {% block page_title %}Dashboard {% endblock %}*/
/* {% block page_subtitle %}Control panel{% endblock %}*/
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
/* {% block page_content %} */
/*     */
/*      <div class="row">*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-aqua">*/
/*                 <div class="inner">*/
/*                   <h3>{{nbc}}</h3>*/
/*                   <p>Cours</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-ios-book"></i>*/
/*                 </div>*/
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-green">*/
/*                 <div class="inner">*/
/*                   <h3>{{nbo}}</h3>*/
/*                   <p>Organismes</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-android-home"></i>*/
/*                 </div>*/
/*                 <a href="{{path('liste_organisme')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-yellow">*/
/*                 <div class="inner">*/
/*                   <h3>{{nbf}}</h3>*/
/*                   <p>Formateurs</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-ios-people"></i>*/
/*                 </div>*/
/*                 <a href="{{path('liste_formateur')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               <div class="small-box bg-red">*/
/*                 <div class="inner">*/
/*                   <h3>{{nba}}</h3>*/
/*                   <p>Apprenants</p>*/
/*                 </div>*/
/*                 <div class="icon">*/
/*                   <i class="ion ion-university"></i>*/
/*                 </div>*/
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
/*               </div>*/
/*             </div><!-- ./col -->*/
/*           </div><!-- /.row -->*/
/*           <!-- Main row -->*/
/*           <div class="row">*/
/*             <!-- Left col -->*/
/*             <section class="col-lg-7 connectedSortable">*/
/*               <!-- Custom tabs (Charts with tabs)-->*/
/*               <div class="nav-tabs-custom">*/
/*                 <!-- Tabs within a box -->*/
/*                 <ul class="nav nav-tabs pull-right">*/
/*                   <li class="active"><a href="#revenue-chart" data-toggle="tab">Bar chart</a></li>*/
/*                   <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>*/
/*                   <li class="pull-left header"><i class="fa fa-inbox"></i> Statistiques</li>*/
/*                 </ul>*/
/*                 <div class="tab-content no-padding">*/
/*                   <!-- Morris chart - Sales -->*/
/*                   <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>*/
/*                   <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>*/
/*                 </div>*/
/*               </div><!-- /.nav-tabs-custom -->*/
/*               <!-- quick email widget -->*/
/*               <div class="box box-info">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-envelope"></i>*/
/*                   <h3 class="box-title">Quick Email</h3>*/
/*                   <!-- tools box -->*/
/*                   <div class="pull-right box-tools">*/
/*                     <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>*/
/*                   </div><!-- /. tools -->*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                   <form action="#" method="post">*/
/*                     <div class="form-group">*/
/*                       <input type="email" class="form-control" name="emailto" placeholder="Email to:">*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                       <input type="text" class="form-control" name="subject" placeholder="Subject">*/
/*                     </div>*/
/*                     <div>*/
/*                       <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>*/
/*                     </div>*/
/*                   </form>*/
/*                 </div>*/
/*                 <div class="box-footer clearfix">*/
/*                   <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>*/
/*                 </div>*/
/*               </div>*/
/* */
/*             </section><!-- /.Left col -->*/
/*             <!-- right col (We are only adding the ID to make the widgets sortable)-->*/
/*             <section class="col-lg-5 connectedSortable">*/
/* */
/*               */
/*               <!-- /.box -->*/
/* */
/*               <!-- solid sales graph -->*/
/*               <div class="box box-solid bg-teal-gradient">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-th"></i>*/
/*                   <h3 class="box-title">Cours suivis</h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body border-radius-none">*/
/*                   <div class="chart" id="line-chart" style="height: 250px;"></div>*/
/*                 </div><!-- /.box-body -->*/
/*                 */
/*               </div><!-- /.box -->*/
/* */
/*               <!-- Calendar -->*/
/*               <div class="box box-solid bg-green-gradient">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-calendar"></i>*/
/*                   <h3 class="box-title">Calendar</h3>*/
/*                   <!-- tools box -->*/
/*                   <div class="pull-right box-tools">*/
/*                     <!-- button with a dropdown -->*/
/*                     <div class="btn-group">*/
/*                       <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>*/
/*                       <ul class="dropdown-menu pull-right" role="menu">*/
/*                         <li><a href="#">Add new event</a></li>*/
/*                         <li><a href="#">Clear events</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">View calendar</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div><!-- /. tools -->*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body no-padding">*/
/*                   <!--The calendar -->*/
/*                   <div id="calendar" style="width: 100%"></div>*/
/*                 </div><!-- /.box-body -->*/
/*                 <div class="box-footer text-black">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                       <!-- Progress bars -->*/
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #1</span>*/
/*                         <small class="pull-right">90%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 90%;"></div>*/
/*                       </div>*/
/* */
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #2</span>*/
/*                         <small class="pull-right">70%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 70%;"></div>*/
/*                       </div>*/
/*                     </div><!-- /.col -->*/
/*                     <div class="col-sm-6">*/
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #3</span>*/
/*                         <small class="pull-right">60%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 60%;"></div>*/
/*                       </div>*/
/* */
/*                       <div class="clearfix">*/
/*                         <span class="pull-left">Task #4</span>*/
/*                         <small class="pull-right">40%</small>*/
/*                       </div>*/
/*                       <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 40%;"></div>*/
/*                       </div>*/
/*                     </div><!-- /.col -->*/
/*                   </div><!-- /.row -->*/
/*                 </div>*/
/*               </div><!-- /.box -->*/
/* */
/*             </section><!-- right col -->*/
/*           </div><!-- /.row (main row) -->*/
/* */
/*         </section><!-- /.content -->*/
/*       </div><!-- /.content-wrapper -->*/
/*     */
/* {% endblock %}*/
/* */
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
/*     */
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
