<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_6625a153e4623a3cc4a7cbf899155d8a54ec6bba94c1c4c39a050ac5570477a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:index.html.twig", 1);
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

              <!-- Map box -->
              <div class=\"box box-solid bg-light-blue-gradient\">
                <div class=\"box-header\">
                  <!-- tools box -->
                  <div class=\"pull-right box-tools\">
                    <button class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\" title=\"Date range\"><i class=\"fa fa-calendar\"></i></button>
                    <button class=\"btn btn-primary btn-sm pull-right\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\"><i class=\"fa fa-minus\"></i></button>
                  </div><!-- /. tools -->

                  <i class=\"fa fa-map-marker\"></i>
                  <h3 class=\"box-title\">
                    Visitors
                  </h3>
                </div>
                <div class=\"box-body\">
                  <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                </div><!-- /.box-body-->
                <div class=\"box-footer no-border\">
                  <div class=\"row\">
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <div id=\"sparkline-1\"></div>
                      <div class=\"knob-label\">Visitors</div>
                    </div><!-- ./col -->
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <div id=\"sparkline-2\"></div>
                      <div class=\"knob-label\">Online</div>
                    </div><!-- ./col -->
                    <div class=\"col-xs-4 text-center\">
                      <div id=\"sparkline-3\"></div>
                      <div class=\"knob-label\">Exists</div>
                    </div><!-- ./col -->
                  </div><!-- /.row -->
                </div>
              </div>
              <!-- /.box -->

              <!-- solid sales graph -->
              <div class=\"box box-solid bg-teal-gradient\">
                <div class=\"box-header\">
                  <i class=\"fa fa-th\"></i>
                  <h3 class=\"box-title\">Sales Graph</h3>
                  <div class=\"box-tools pull-right\">
                    <button class=\"btn bg-teal btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn bg-teal btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div>
                </div>
                <div class=\"box-body border-radius-none\">
                  <div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>
                </div><!-- /.box-body -->
                <div class=\"box-footer no-border\">
                  <div class=\"row\">
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                      <div class=\"knob-label\">Mail-Orders</div>
                    </div><!-- ./col -->
                    <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                      <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                      <div class=\"knob-label\">Online</div>
                    </div><!-- ./col -->
                    <div class=\"col-xs-4 text-center\">
                      <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                      <div class=\"knob-label\">In-Store</div>
                    </div><!-- ./col -->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
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

    // line 297
    public function block_javascripts($context, array $blocks = array())
    {
        // line 298
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-morris.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/morris.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 304
    public function block_javascripts_inline($context, array $blocks = array())
    {
        // line 305
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
        // line 322
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 325
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 334
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 335
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 340
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 341
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 343
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 347
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 348
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 349
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 352
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 355
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 358
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 359
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 367
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 371
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 372
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 376
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 377
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 379
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 382
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 383
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 384
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 385
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 389
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 390
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 391
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
        // line 418
        echo twig_escape_filter($this->env, (isset($context["nband"]) ? $context["nband"] : $this->getContext($context, "nband")), "html", null, true);
        echo " },
        {label:\"iOS\", value:";
        // line 419
        echo twig_escape_filter($this->env, (isset($context["nbiOS"]) ? $context["nbiOS"] : $this->getContext($context, "nbiOS")), "html", null, true);
        echo " },
        {label:\"Windows Phone\", value:";
        // line 420
        echo twig_escape_filter($this->env, (isset($context["nbWP"]) ? $context["nbWP"] : $this->getContext($context, "nbWP")), "html", null, true);
        echo " },
        {label:\"J2ME\", value:";
        // line 421
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
        // line 434
        echo twig_escape_filter($this->env, (isset($context["anjan"]) ? $context["anjan"] : $this->getContext($context, "anjan")), "html", null, true);
        echo ",
    b: ";
        // line 435
        echo twig_escape_filter($this->env, (isset($context["ijan"]) ? $context["ijan"] : $this->getContext($context, "ijan")), "html", null, true);
        echo ",
    c: ";
        // line 436
        echo twig_escape_filter($this->env, (isset($context["wjan"]) ? $context["wjan"] : $this->getContext($context, "wjan")), "html", null, true);
        echo ",
    d: ";
        // line 437
        echo twig_escape_filter($this->env, (isset($context["jjan"]) ? $context["jjan"] : $this->getContext($context, "jjan")), "html", null, true);
        echo "
  }, {
    m: '2015-02',
    a: ";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["anfev"]) ? $context["anfev"] : $this->getContext($context, "anfev")), "html", null, true);
        echo ",
    b: ";
        // line 441
        echo twig_escape_filter($this->env, (isset($context["ifev"]) ? $context["ifev"] : $this->getContext($context, "ifev")), "html", null, true);
        echo ",
    c: ";
        // line 442
        echo twig_escape_filter($this->env, (isset($context["wfev"]) ? $context["wfev"] : $this->getContext($context, "wfev")), "html", null, true);
        echo ",
    d: ";
        // line 443
        echo twig_escape_filter($this->env, (isset($context["jfev"]) ? $context["jfev"] : $this->getContext($context, "jfev")), "html", null, true);
        echo "
  }, {
    m: '2015-03',
    a: ";
        // line 446
        echo twig_escape_filter($this->env, (isset($context["anmars"]) ? $context["anmars"] : $this->getContext($context, "anmars")), "html", null, true);
        echo ",
    b: ";
        // line 447
        echo twig_escape_filter($this->env, (isset($context["imars"]) ? $context["imars"] : $this->getContext($context, "imars")), "html", null, true);
        echo ",
    c: ";
        // line 448
        echo twig_escape_filter($this->env, (isset($context["wmars"]) ? $context["wmars"] : $this->getContext($context, "wmars")), "html", null, true);
        echo ",
    d: ";
        // line 449
        echo twig_escape_filter($this->env, (isset($context["jmars"]) ? $context["jmars"] : $this->getContext($context, "jmars")), "html", null, true);
        echo "
  }, {
    m: '2015-04',
    a: ";
        // line 452
        echo twig_escape_filter($this->env, (isset($context["anav"]) ? $context["anav"] : $this->getContext($context, "anav")), "html", null, true);
        echo ",
    b: ";
        // line 453
        echo twig_escape_filter($this->env, (isset($context["iav"]) ? $context["iav"] : $this->getContext($context, "iav")), "html", null, true);
        echo ",
    c: ";
        // line 454
        echo twig_escape_filter($this->env, (isset($context["wav"]) ? $context["wav"] : $this->getContext($context, "wav")), "html", null, true);
        echo ",
    d: ";
        // line 455
        echo twig_escape_filter($this->env, (isset($context["jav"]) ? $context["jav"] : $this->getContext($context, "jav")), "html", null, true);
        echo "
  }, {
    m: '2015-05',
    a: ";
        // line 458
        echo twig_escape_filter($this->env, (isset($context["anmai"]) ? $context["anmai"] : $this->getContext($context, "anmai")), "html", null, true);
        echo ",
    b: ";
        // line 459
        echo twig_escape_filter($this->env, (isset($context["imai"]) ? $context["imai"] : $this->getContext($context, "imai")), "html", null, true);
        echo ",
    c: ";
        // line 460
        echo twig_escape_filter($this->env, (isset($context["wmai"]) ? $context["wmai"] : $this->getContext($context, "wmai")), "html", null, true);
        echo ",
    d: ";
        // line 461
        echo twig_escape_filter($this->env, (isset($context["jmai"]) ? $context["jmai"] : $this->getContext($context, "jmai")), "html", null, true);
        echo "
  }, {
    m: '2015-06',
    a: ";
        // line 464
        echo twig_escape_filter($this->env, (isset($context["anjuin"]) ? $context["anjuin"] : $this->getContext($context, "anjuin")), "html", null, true);
        echo ",
    b: ";
        // line 465
        echo twig_escape_filter($this->env, (isset($context["ijuin"]) ? $context["ijuin"] : $this->getContext($context, "ijuin")), "html", null, true);
        echo ",
    c: ";
        // line 466
        echo twig_escape_filter($this->env, (isset($context["wjuin"]) ? $context["wjuin"] : $this->getContext($context, "wjuin")), "html", null, true);
        echo ",
    d: ";
        // line 467
        echo twig_escape_filter($this->env, (isset($context["jjuin"]) ? $context["jjuin"] : $this->getContext($context, "jjuin")), "html", null, true);
        echo "
  }, {
    m: '2015-07',
    a: ";
        // line 470
        echo twig_escape_filter($this->env, (isset($context["anjuillet"]) ? $context["anjuillet"] : $this->getContext($context, "anjuillet")), "html", null, true);
        echo ",
    b: ";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["ijuillet"]) ? $context["ijuillet"] : $this->getContext($context, "ijuillet")), "html", null, true);
        echo ",
    c: ";
        // line 472
        echo twig_escape_filter($this->env, (isset($context["wjuillet"]) ? $context["wjuillet"] : $this->getContext($context, "wjuillet")), "html", null, true);
        echo ",
    d: ";
        // line 473
        echo twig_escape_filter($this->env, (isset($context["jjuillet"]) ? $context["jjuillet"] : $this->getContext($context, "jjuillet")), "html", null, true);
        echo "
  }, {
    m: '2015-08',
    a: ";
        // line 476
        echo twig_escape_filter($this->env, (isset($context["anaout"]) ? $context["anaout"] : $this->getContext($context, "anaout")), "html", null, true);
        echo ",
    b: ";
        // line 477
        echo twig_escape_filter($this->env, (isset($context["iaout"]) ? $context["iaout"] : $this->getContext($context, "iaout")), "html", null, true);
        echo ",
    c: ";
        // line 478
        echo twig_escape_filter($this->env, (isset($context["waout"]) ? $context["waout"] : $this->getContext($context, "waout")), "html", null, true);
        echo ",
    d: ";
        // line 479
        echo twig_escape_filter($this->env, (isset($context["jaout"]) ? $context["jaout"] : $this->getContext($context, "jaout")), "html", null, true);
        echo "
  }, {
    m: '2015-09',
    a: ";
        // line 482
        echo twig_escape_filter($this->env, (isset($context["ansep"]) ? $context["ansep"] : $this->getContext($context, "ansep")), "html", null, true);
        echo ",
    b: ";
        // line 483
        echo twig_escape_filter($this->env, (isset($context["isep"]) ? $context["isep"] : $this->getContext($context, "isep")), "html", null, true);
        echo ",
    c: ";
        // line 484
        echo twig_escape_filter($this->env, (isset($context["wsep"]) ? $context["wsep"] : $this->getContext($context, "wsep")), "html", null, true);
        echo ",
    d: ";
        // line 485
        echo twig_escape_filter($this->env, (isset($context["jsep"]) ? $context["jsep"] : $this->getContext($context, "jsep")), "html", null, true);
        echo "
  }, {
    m: '2015-10',
    a: ";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["anoc"]) ? $context["anoc"] : $this->getContext($context, "anoc")), "html", null, true);
        echo ",
    b: ";
        // line 489
        echo twig_escape_filter($this->env, (isset($context["ioc"]) ? $context["ioc"] : $this->getContext($context, "ioc")), "html", null, true);
        echo ",
    c: ";
        // line 490
        echo twig_escape_filter($this->env, (isset($context["woc"]) ? $context["woc"] : $this->getContext($context, "woc")), "html", null, true);
        echo ",
    d: ";
        // line 491
        echo twig_escape_filter($this->env, (isset($context["joc"]) ? $context["joc"] : $this->getContext($context, "joc")), "html", null, true);
        echo "
  }, {
    m: '2015-11',
    a: ";
        // line 494
        echo twig_escape_filter($this->env, (isset($context["annov"]) ? $context["annov"] : $this->getContext($context, "annov")), "html", null, true);
        echo ",
    b: ";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["inov"]) ? $context["inov"] : $this->getContext($context, "inov")), "html", null, true);
        echo ",
    c: ";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["wnov"]) ? $context["wnov"] : $this->getContext($context, "wnov")), "html", null, true);
        echo ",
    d: ";
        // line 497
        echo twig_escape_filter($this->env, (isset($context["jnov"]) ? $context["jnov"] : $this->getContext($context, "jnov")), "html", null, true);
        echo "
  }, {
    m: '2015-12',
    a: ";
        // line 500
        echo twig_escape_filter($this->env, (isset($context["andec"]) ? $context["andec"] : $this->getContext($context, "andec")), "html", null, true);
        echo ",
    b: ";
        // line 501
        echo twig_escape_filter($this->env, (isset($context["idec"]) ? $context["idec"] : $this->getContext($context, "idec")), "html", null, true);
        echo ",
    c: ";
        // line 502
        echo twig_escape_filter($this->env, (isset($context["wdec"]) ? $context["wdec"] : $this->getContext($context, "wdec")), "html", null, true);
        echo ",
    d: ";
        // line 503
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
        return "AvanzuAdminThemeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  917 => 503,  913 => 502,  909 => 501,  905 => 500,  899 => 497,  895 => 496,  891 => 495,  887 => 494,  881 => 491,  877 => 490,  873 => 489,  869 => 488,  863 => 485,  859 => 484,  855 => 483,  851 => 482,  845 => 479,  841 => 478,  837 => 477,  833 => 476,  827 => 473,  823 => 472,  819 => 471,  815 => 470,  809 => 467,  805 => 466,  801 => 465,  797 => 464,  791 => 461,  787 => 460,  783 => 459,  779 => 458,  773 => 455,  769 => 454,  765 => 453,  761 => 452,  755 => 449,  751 => 448,  747 => 447,  743 => 446,  737 => 443,  733 => 442,  729 => 441,  725 => 440,  719 => 437,  715 => 436,  711 => 435,  707 => 434,  691 => 421,  687 => 420,  683 => 419,  679 => 418,  649 => 391,  645 => 390,  641 => 389,  637 => 388,  631 => 385,  627 => 384,  623 => 383,  619 => 382,  613 => 379,  609 => 378,  605 => 377,  601 => 376,  595 => 373,  591 => 372,  587 => 371,  583 => 370,  577 => 367,  573 => 366,  569 => 365,  565 => 364,  559 => 361,  555 => 360,  551 => 359,  547 => 358,  541 => 355,  537 => 354,  533 => 353,  529 => 352,  523 => 349,  519 => 348,  515 => 347,  511 => 346,  505 => 343,  501 => 342,  497 => 341,  493 => 340,  487 => 337,  483 => 336,  479 => 335,  475 => 334,  469 => 331,  465 => 330,  461 => 329,  457 => 328,  451 => 325,  447 => 324,  443 => 323,  439 => 322,  420 => 305,  417 => 304,  411 => 301,  407 => 300,  403 => 299,  398 => 298,  395 => 297,  191 => 96,  181 => 89,  172 => 83,  162 => 76,  153 => 70,  137 => 57,  126 => 50,  117 => 45,  112 => 43,  103 => 37,  99 => 36,  90 => 30,  82 => 25,  73 => 18,  71 => 13,  68 => 12,  62 => 11,  56 => 10,  50 => 7,  46 => 6,  42 => 5,  37 => 4,  34 => 3,  11 => 1,);
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
/*               <!-- Map box -->*/
/*               <div class="box box-solid bg-light-blue-gradient">*/
/*                 <div class="box-header">*/
/*                   <!-- tools box -->*/
/*                   <div class="pull-right box-tools">*/
/*                     <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>*/
/*                     <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>*/
/*                   </div><!-- /. tools -->*/
/* */
/*                   <i class="fa fa-map-marker"></i>*/
/*                   <h3 class="box-title">*/
/*                     Visitors*/
/*                   </h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                   <div id="world-map" style="height: 250px; width: 100%;"></div>*/
/*                 </div><!-- /.box-body-->*/
/*                 <div class="box-footer no-border">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <div id="sparkline-1"></div>*/
/*                       <div class="knob-label">Visitors</div>*/
/*                     </div><!-- ./col -->*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <div id="sparkline-2"></div>*/
/*                       <div class="knob-label">Online</div>*/
/*                     </div><!-- ./col -->*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <div id="sparkline-3"></div>*/
/*                       <div class="knob-label">Exists</div>*/
/*                     </div><!-- ./col -->*/
/*                   </div><!-- /.row -->*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.box -->*/
/* */
/*               <!-- solid sales graph -->*/
/*               <div class="box box-solid bg-teal-gradient">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-th"></i>*/
/*                   <h3 class="box-title">Sales Graph</h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body border-radius-none">*/
/*                   <div class="chart" id="line-chart" style="height: 250px;"></div>*/
/*                 </div><!-- /.box-body -->*/
/*                 <div class="box-footer no-border">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                       <div class="knob-label">Mail-Orders</div>*/
/*                     </div><!-- ./col -->*/
/*                     <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                       <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                       <div class="knob-label">Online</div>*/
/*                     </div><!-- ./col -->*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                       <div class="knob-label">In-Store</div>*/
/*                     </div><!-- ./col -->*/
/*                   </div><!-- /.row -->*/
/*                 </div><!-- /.box-footer -->*/
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
