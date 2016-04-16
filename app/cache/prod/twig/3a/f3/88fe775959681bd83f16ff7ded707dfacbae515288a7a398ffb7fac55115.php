<?php

/* MoocMoocBundle:Default:index.html.twig */
class __TwigTemplate_3af388fe775959681bd83f16ff7ded707dfacbae515288a7a398ffb7fac55115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("MoocMoocBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoocMoocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'>Connectez vous</a>
      <ul>
         <li><a href='#'>Vous etes Organisme</a> </li>
         <li><a href='";
        // line 9
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logformateur");
        echo "'>Vous etes Formateur</a></li>
         <li><a href='#'>Vous etes Apprenant</a></li>
      </ul>
   </li>
  
</ul>
</div>
    
    <div class=\"slider_wrapper\"> 
        <div id=\"camera_wrap\" class=\"\">
            <div data-src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide1.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide2.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide3.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide4.jpg"), "html", null, true);
        echo "\"></div>
        </div>
    </div>
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"slogan\">
                Bienvenue Sur la meilleur platforme d'apprentissage en ligne <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
        </div>
    </div>
    <div class=\"container_12\">
        <section class=\"grid\" id=\"grid\">
            <a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
                <figure>
                    <svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
                    <figcaption>
                        <div class=\"title\">Tutoriels Gratuit</div>
                    </figcaption>
                </figure>
                <span>more</span>
            </a>
            <a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
                <figure>
                    <svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
                    <figcaption>
                        <div class=\"title\">Certification</div>
                    </figcaption>
                </figure>
                <span>more</span>
            </a>
            <a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
                <figure>
                    <svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
                    <figcaption>
                        <div class=\"title\">Evaluation</div>
                    </figcaption>
                </figure>
                <span>more</span>
            </a>
            <a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
                <figure>
                    <svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
                    <figcaption>
                        <div class=\"title\">Cours Suivie</div>
                    </figcaption>
                </figure>
                <span>more</span>
            </a>
        </section>
    </div>
    <!--==============================Content=================================-->
    <div class=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - February 24, 2014!</div>
        <div class=\"container_12\">
            <div class=\"grid_6\">
                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page1_img1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_inner fleft\">
                <div class=\"extra_wrapper\">
                    <div class=\"title1\">We Work for You!</div>
                    <p>If you want to download this <span class=\"col3\"><a href=\"http://blog.templatemonster.com/free-website-templates/\" rel=\"dofollow\">freebie</a></span>, visit TemplateMonster blog.</p>
                    Want to find more themes of this kind? Go to <span class=\"col3\"><a href=\"http://www.templatemonster.com/properties/topic/business-services/\" rel=\"nofollow\">Business and Services</a></span> website templates.
                </div>
                <div class=\"clear cl1\"></div>
                In mollis erat mattisy neque facilisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis
            </div>
            <div class=\"grid_3\">
                <div class=\"block1\">
                    <div class=\"title\">20 <span>Years of Experience</span></div>
                    In mollis erat matt nequemer facilameteserylerarutrum. Cras facilisis, nulla
                    <br>
                    <a href=\"#\" class=\"btn bt1\">more</a>
                </div>
            </div>
            <div class=\"grid_3 ver\">
                <div class=\"block1\">
                    <div class=\"title\">18 <span>Partner Programs</span></div>
                    Cras facilisis, nulla vel viverra auctor, leo magna sodaleel alesuada nibh odio ulit
                    <br>
                    <a href=\"#\" class=\"btn bt1\">more</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"gray_block\">
        <div class=\"container_12\">
            <div class=\"grid_4\">
                <div class=\"block2\">
                    <time datetime=\"2014-01-01\"><span class=\"col1\">18</span>january</time>
                    <div class=\"\">
                        <div class=\"extra_wrapper\">
                            <div class=\"title col1\"><a href=\"#\">Etiam dui ero laoretsiter golyn</a></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <p>Vivamus at magna non nunc tristiq oncus. Aliquam nibh ante, egestas id dicttuser</p>
                    <a href=\"#\" class=\"col1\">read more</a>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"block2\">
                    <time datetime=\"2014-01-01\"><span class=\"col1\">21</span>january</time>
                    <div class=\"\">
                        <div class=\"extra_wrapper\">
                            <div class=\"title col1\"><a href=\"#\">Hom dui erosi laorufeiter milyno</a></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <p>Non nunc tristique ous. Aliqum nibh ante, egestas id dictumctuser liberoraesnt</p>
                    <a href=\"#\" class=\"col1\">read more</a>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"block2\">
                    <time datetime=\"2014-01-01\"><span class=\"col1\">12</span>february</time>
                    <div class=\"\">
                        <div class=\"extra_wrapper\">
                            <div class=\"title col1\"><a href=\"#\">Joui eros, laorulberer golyno</a></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <p>Vivamus at magna non nunc tristique os. Aliquam nibh ante, egestas id dicuser</p>
                    <a href=\"#\" class=\"col1\">read more</a>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 78,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
