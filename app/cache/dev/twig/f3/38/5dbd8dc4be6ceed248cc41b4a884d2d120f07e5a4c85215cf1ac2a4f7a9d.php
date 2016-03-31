<?php

/* MoocMoocBundle:Formateur:afficheformateur.html.twig */
class __TwigTemplate_f3385dbd8dc4be6ceed248cc41b4a884d2d120f07e5a4c85215cf1ac2a4f7a9d extends Twig_Template
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


    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h2 class=\"mb0\">Liste des formateurs</h2>
            <br/>
        </div>
    </div>
<div class=\"gray_block gb1\">
    <div class=\"container_12\">
        <div class=\"gallery\">
            <div class=\"grid_3\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big1.jpg"), "html", null, true);
        echo "\" class=\"gal\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">Zied Akoubi</a></div>
                In mollis erat mattisy nequelisis sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
            <div class=\"grid_3\">
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big2.jpg"), "html", null, true);
        echo "\" class=\"gal bd1\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4_img2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">Vivamus at magna non</a></div>
                Fermollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
            <div class=\"grid_3\">
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big3.jpg"), "html", null, true);
        echo "\" class=\"gal bd2\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4_img3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">Curabitur vel lorem sit</a></div>
                In mollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
            <div class=\"grid_3\">
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big4.jpg"), "html", null, true);
        echo "\" class=\"gal bd3\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4_img4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">Phasellus erat nisuctor</a></div>
                Hhol mollis erat mattisy kilomi nequelisis, sit amet ultricieser erarutrum. Cras facilisisolo
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
            <div class=\"clear\"></div>
            <div class=\"grid_3\">
                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big5.jpg"), "html", null, true);
        echo "\" class=\"gal\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4_img5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">Etiam dui eros, laoreet</a></div>
                Mollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra aucto
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
            <div class=\"grid_3\">
                <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big6.jpg"), "html", null, true);
        echo "\" class=\"gal bd1\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4_img6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">Dui eroslaoreetdui ero</a></div>
                In mollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
            <div class=\"grid_3\">
                <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big7.jpg"), "html", null, true);
        echo "\" class=\"gal bd2\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4_img7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">A at magna noru adip</a></div>
                Hlottisy nequelisis, sit ametyter ultricieser erarutrum. Crasyto facilisis, nulla vel viverra auc
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
            <div class=\"grid_3\">
                <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big8.jpg"), "html", null, true);
        echo "\" class=\"gal bd3\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4_img8.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">Retui erosi laoru adip</a></div>
                Koliu erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctom
                <br>
                <a href=\"#\" class=\"btn\">more</a>
            </div>
        </div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Formateur:afficheformateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 67,  127 => 60,  115 => 53,  103 => 46,  90 => 38,  78 => 31,  66 => 24,  54 => 17,  39 => 4,  36 => 3,  11 => 1,);
    }
}
