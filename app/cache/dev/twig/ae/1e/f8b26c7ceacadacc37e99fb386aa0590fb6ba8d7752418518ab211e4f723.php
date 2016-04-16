<?php

/* MoocMoocBundle:Default:index.html.twig */
class __TwigTemplate_ae1ef8b26c7ceacadacc37e99fb386aa0590fb6ba8d7752418518ab211e4f723 extends Twig_Template
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
        echo "
<div class=\"slider_wrapper\">
\t\t\t<div id=\"camera_wrap\" class=\"\">
\t\t\t\t<div data-src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t\t<div data-src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide1.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t\t<div data-src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide2.jpg"), "html", null, true);
        echo "\"></div>
                                <div data-src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide3.jpg"), "html", null, true);
        echo "\"></div>
                                <div data-src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide4.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container_12\">
\t\t\t<div class=\"grid_12\">
\t\t\t\t<div class=\"slogan\">
\t\t\t\t\tBienvenue Sur la meilleur platforme d'apprentissage en ligne <br>
\t\t\t\t\t<a href=\"#\" class=\"btn\">more</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container_12\">
\t\t\t<section class=\"grid\" id=\"grid\">
\t\t\t\t<a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<div class=\"title\">Tutoriels Gratuit</div>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t\t<span>more</span>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t\t<div class=\"title\">Certification</div>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t\t<span>more</span>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<div class=\"title\">Evaluation</div>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t\t<span>more</span>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\" data-path-hover=\"m 180,70.57627 -180,0 L 0,0 180,0 z\">
\t\t\t\t\t<figure>
\t\t\t\t\t\t<svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,262 0,0 180,0 z\"/></svg>
\t\t\t\t\t\t<figcaption>
\t\t\t\t\t\t<div class=\"title\">Cours Suivie</div>
\t\t\t\t\t\t</figcaption>
\t\t\t\t\t</figure>
\t\t\t\t\t<span>more</span>
\t\t\t\t</a>
\t\t\t</section>
\t\t</div>
<!--==============================Content=================================-->
\t\t<div class=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - February 24, 2014!</div>
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_6\">
\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/work.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_inner fleft\">
\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t<div class=\"title1\">Des cours 100% en ligne accessibles à tous ! </div>
\t\t\t\t\t\t<p>Nous croyons que tout le monde devrait avoir le droit d'apprendre à tout âge. Nos cours sont ouverts sur tous supports.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear cl1\"></div>
\t\t\t\t\tNon, vous n'êtes pas seul ! 
                                                                                         En fait, vous avez 1 669 485 camarades de classe pour vous aider. Obtenez des conseils sur les forums et des corrections détaillées de vos devoirs. Et quand vous aurez appris, devenez à votre tour professeur.
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_3\">
\t\t\t\t\t<div class=\"block1\">
\t\t\t\t\t\t<div class=\"title\">20 <span>Years of Experience</span></div>
\t\t\t\t\t\tIn mollis erat matt nequemer facilameteserylerarutrum. Cras facilisis, nulla
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"btn bt1\">more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_3 ver\">
\t\t\t\t\t<div class=\"block1\">
\t\t\t\t\t\t<div class=\"title\">18 <span>Partner Programs</span></div>
\t\t\t\t\t\tCras facilisis, nulla vel viverra auctor, leo magna sodaleel alesuada nibh odio ulit
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<a href=\"#\" class=\"btn bt1\">more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"gray_block\">
\t\t\t<div class=\"container_12\">
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t<time datetime=\"2014-01-01\"><span class=\"col1\">18</span>january</time>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t\t\t<div class=\"title col1\"><a href=\"#\">Etiam dui ero laoretsiter golyn</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<p>Vivamus at magna non nunc tristiq oncus. Aliquam nibh ante, egestas id dicttuser</p>
\t\t\t\t\t\t<a href=\"#\" class=\"col1\">read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t<time datetime=\"2014-01-01\"><span class=\"col1\">21</span>january</time>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t\t\t<div class=\"title col1\"><a href=\"#\">Hom dui erosi laorufeiter milyno</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<p>Non nunc tristique ous. Aliqum nibh ante, egestas id dictumctuser liberoraesnt</p>
\t\t\t\t\t\t<a href=\"#\" class=\"col1\">read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"grid_4\">
\t\t\t\t\t<div class=\"block2\">
\t\t\t\t\t\t<time datetime=\"2014-01-01\"><span class=\"col1\">12</span>february</time>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<div class=\"extra_wrapper\">
\t\t\t\t\t\t\t\t<div class=\"title col1\"><a href=\"#\">Joui eros, laorulberer golyno</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t<p>Vivamus at magna non nunc tristique os. Aliquam nibh ante, egestas id dicuser</p>
\t\t\t\t\t\t<a href=\"#\" class=\"col1\">read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
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
        return array (  118 => 66,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
