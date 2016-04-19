<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_dd963bc7a8aa79ceee880f8f69c13f7900ccfd562c6669b16947f8dcc8469276 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Admin 
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/bootstrap.min.css")), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-morris.css")), "html", null, true);
        echo "\">
 ";
    }

    // line 12
    public function block_page_title($context, array $blocks = array())
    {
        echo "Dashboard ";
    }

    // line 13
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Control panel";
    }

    // line 14
    public function block_page_content($context, array $blocks = array())
    {
        echo " 
    
     <div class=\"row\">
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-aqua\">
                <div class=\"inner\">
                  <h3>";
        // line 21
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
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nbo"]) ? $context["nbo"] : $this->getContext($context, "nbo")), "html", null, true);
        echo "</h3>
                  <p>Organismes</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-android-home\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-yellow\">
                <div class=\"inner\">
                  <h3>";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["nbf"]) ? $context["nbf"] : $this->getContext($context, "nbf")), "html", null, true);
        echo "</h3>
                  <p>Formateurs</p>
                </div>
                <div class=\"icon\">
                  <i class=\"ion ion-ios-people\"></i>
                </div>
                <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fa fa-arrow-circle-right\"></i></a>
              </div>
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              <div class=\"small-box bg-red\">
                <div class=\"inner\">
                  <h3>";
        // line 60
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
                  <li class=\"active\"><a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a></li>
                  <li><a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a></li>
                  <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Sales</li>
                </ul>
                <div class=\"tab-content no-padding\">
                  <!-- Morris chart - Sales -->
                  <div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
                  <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
                </div>
              </div><!-- /.nav-tabs-custom -->

              <!-- Chat box -->
              <div class=\"box box-success\">
                <div class=\"box-header\">
                  <i class=\"fa fa-comments-o\"></i>
                  <h3 class=\"box-title\">Chat</h3>
                  <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                    <div class=\"btn-group\" data-toggle=\"btn-toggle\" >
                      <button type=\"button\" class=\"btn btn-default btn-sm active\"><i class=\"fa fa-square text-green\"></i></button>
                      <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-square text-red\"></i></button>
                    </div>
                  </div>
                </div>
                <div class=\"box-body chat\" id=\"chat-box\">
                  <!-- chat item -->
                  <div class=\"item\">
                    <img src=\"dist/img/user4-128x128.jpg\" alt=\"user image\" class=\"online\">
                    <p class=\"message\">
                      <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 2:15</small>
                        Mike Doe
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                    <div class=\"attachment\">
                      <h4>Attachments:</h4>
                      <p class=\"filename\">
                        Theme-thumbnail-image.jpg
                      </p>
                      <div class=\"pull-right\">
                        <button class=\"btn btn-primary btn-sm btn-flat\">Open</button>
                      </div>
                    </div><!-- /.attachment -->
                  </div><!-- /.item -->
                  <!-- chat item -->
                  <div class=\"item\">
                    <img src=\"dist/img/user3-128x128.jpg\" alt=\"user image\" class=\"offline\">
                    <p class=\"message\">
                      <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                        Alexander Pierce
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                  </div><!-- /.item -->
                  <!-- chat item -->
                  <div class=\"item\">
                    <img src=\"dist/img/user2-160x160.jpg\" alt=\"user image\" class=\"offline\">
                    <p class=\"message\">
                      <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:30</small>
                        Susan Doe
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                  </div><!-- /.item -->
                </div><!-- /.chat -->
                <div class=\"box-footer\">
                  <div class=\"input-group\">
                    <input class=\"form-control\" placeholder=\"Type message...\">
                    <div class=\"input-group-btn\">
                      <button class=\"btn btn-success\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                  </div>
                </div>
              </div><!-- /.box (chat box) -->

              <!-- TO DO List -->
              <div class=\"box box-primary\">
                <div class=\"box-header\">
                  <i class=\"ion ion-clipboard\"></i>
                  <h3 class=\"box-title\">To Do List</h3>
                  <div class=\"box-tools pull-right\">
                    <ul class=\"pagination pagination-sm inline\">
                      <li><a href=\"#\">&laquo;</a></li>
                      <li><a href=\"#\">1</a></li>
                      <li><a href=\"#\">2</a></li>
                      <li><a href=\"#\">3</a></li>
                      <li><a href=\"#\">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <ul class=\"todo-list\">
                    <li>
                      <!-- drag handle -->
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <!-- checkbox -->
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <!-- todo text -->
                      <span class=\"text\">Design a nice theme</span>
                      <!-- Emphasis label -->
                      <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                      <!-- General tools such as edit or delete-->
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Make the theme responsive</span>
                      <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Let theme shine like a star</span>
                      <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Let theme shine like a star</span>
                      <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Check your messages and notifications</span>
                      <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                    <li>
                      <span class=\"handle\">
                        <i class=\"fa fa-ellipsis-v\"></i>
                        <i class=\"fa fa-ellipsis-v\"></i>
                      </span>
                      <input type=\"checkbox\" value=\"\" name=\"\">
                      <span class=\"text\">Let theme shine like a star</span>
                      <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                      <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.box-body -->
                <div class=\"box-footer clearfix no-border\">
                  <button class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
                </div>
              </div><!-- /.box -->

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
        return array (  133 => 60,  117 => 47,  101 => 34,  85 => 21,  74 => 14,  68 => 13,  62 => 12,  56 => 9,  52 => 8,  48 => 7,  43 => 6,  40 => 5,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}*/
/* {% block title %}*/
/* Admin */
/* {% endblock %}*/
/*  {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}" />*/
/*          <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/bootstrap.min.css') }}">*/
/*          <link rel="stylesheet" href="{{asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-morris.css') }}">*/
/*  {% endblock %}*/
/*     */
/* {% block page_title %}Dashboard {% endblock %}*/
/* {% block page_subtitle %}Control panel{% endblock %}*/
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
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
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
/*                 <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>*/
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
/*                   <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>*/
/*                   <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>*/
/*                   <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>*/
/*                 </ul>*/
/*                 <div class="tab-content no-padding">*/
/*                   <!-- Morris chart - Sales -->*/
/*                   <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>*/
/*                   <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>*/
/*                 </div>*/
/*               </div><!-- /.nav-tabs-custom -->*/
/* */
/*               <!-- Chat box -->*/
/*               <div class="box box-success">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-comments-o"></i>*/
/*                   <h3 class="box-title">Chat</h3>*/
/*                   <div class="box-tools pull-right" data-toggle="tooltip" title="Status">*/
/*                     <div class="btn-group" data-toggle="btn-toggle" >*/
/*                       <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>*/
/*                       <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="box-body chat" id="chat-box">*/
/*                   <!-- chat item -->*/
/*                   <div class="item">*/
/*                     <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">*/
/*                     <p class="message">*/
/*                       <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>*/
/*                         Mike Doe*/
/*                       </a>*/
/*                       I would like to meet you to discuss the latest news about*/
/*                       the arrival of the new theme. They say it is going to be one the*/
/*                       best themes on the market*/
/*                     </p>*/
/*                     <div class="attachment">*/
/*                       <h4>Attachments:</h4>*/
/*                       <p class="filename">*/
/*                         Theme-thumbnail-image.jpg*/
/*                       </p>*/
/*                       <div class="pull-right">*/
/*                         <button class="btn btn-primary btn-sm btn-flat">Open</button>*/
/*                       </div>*/
/*                     </div><!-- /.attachment -->*/
/*                   </div><!-- /.item -->*/
/*                   <!-- chat item -->*/
/*                   <div class="item">*/
/*                     <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">*/
/*                     <p class="message">*/
/*                       <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>*/
/*                         Alexander Pierce*/
/*                       </a>*/
/*                       I would like to meet you to discuss the latest news about*/
/*                       the arrival of the new theme. They say it is going to be one the*/
/*                       best themes on the market*/
/*                     </p>*/
/*                   </div><!-- /.item -->*/
/*                   <!-- chat item -->*/
/*                   <div class="item">*/
/*                     <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">*/
/*                     <p class="message">*/
/*                       <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>*/
/*                         Susan Doe*/
/*                       </a>*/
/*                       I would like to meet you to discuss the latest news about*/
/*                       the arrival of the new theme. They say it is going to be one the*/
/*                       best themes on the market*/
/*                     </p>*/
/*                   </div><!-- /.item -->*/
/*                 </div><!-- /.chat -->*/
/*                 <div class="box-footer">*/
/*                   <div class="input-group">*/
/*                     <input class="form-control" placeholder="Type message...">*/
/*                     <div class="input-group-btn">*/
/*                       <button class="btn btn-success"><i class="fa fa-plus"></i></button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div><!-- /.box (chat box) -->*/
/* */
/*               <!-- TO DO List -->*/
/*               <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                   <i class="ion ion-clipboard"></i>*/
/*                   <h3 class="box-title">To Do List</h3>*/
/*                   <div class="box-tools pull-right">*/
/*                     <ul class="pagination pagination-sm inline">*/
/*                       <li><a href="#">&laquo;</a></li>*/
/*                       <li><a href="#">1</a></li>*/
/*                       <li><a href="#">2</a></li>*/
/*                       <li><a href="#">3</a></li>*/
/*                       <li><a href="#">&raquo;</a></li>*/
/*                     </ul>*/
/*                   </div>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                   <ul class="todo-list">*/
/*                     <li>*/
/*                       <!-- drag handle -->*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <!-- checkbox -->*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <!-- todo text -->*/
/*                       <span class="text">Design a nice theme</span>*/
/*                       <!-- Emphasis label -->*/
/*                       <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>*/
/*                       <!-- General tools such as edit or delete-->*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Make the theme responsive</span>*/
/*                       <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Let theme shine like a star</span>*/
/*                       <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Let theme shine like a star</span>*/
/*                       <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Check your messages and notifications</span>*/
/*                       <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                     <li>*/
/*                       <span class="handle">*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                         <i class="fa fa-ellipsis-v"></i>*/
/*                       </span>*/
/*                       <input type="checkbox" value="" name="">*/
/*                       <span class="text">Let theme shine like a star</span>*/
/*                       <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>*/
/*                       <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                       </div>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div><!-- /.box-body -->*/
/*                 <div class="box-footer clearfix no-border">*/
/*                   <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>*/
/*                 </div>*/
/*               </div><!-- /.box -->*/
/* */
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
