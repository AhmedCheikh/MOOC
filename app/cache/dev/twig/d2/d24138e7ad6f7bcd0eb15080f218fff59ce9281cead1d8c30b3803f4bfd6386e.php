<?php

/* MoocMoocBundle:About:info.html.twig */
class __TwigTemplate_6c232e5d1f64e4f098154b087c98941e671341c9a020c92a17a534080180069b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle::layout.html.twig", "MoocMoocBundle:About:info.html.twig", 1);
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
        <div class=\"grid_4\">
            <h2>Qui somme nous</h2>
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_inner\">
            <div class=\"text1 col2\"><a href=\"#\">Hom dui erosi laoru adipiscingq id risus sagittis, non consequat feiter milyno</a></div>
            <p>In mollis erat mattisy neque facilisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus.</p>
            Maecenas vehiculaegestas venenatis. Duiser massa elit, auctor pellentesque vel, aliquet amet erat. <br>
            <a href=\"#\" class=\"btn\">more</a>
        </div>
        <div class=\"grid_4\">
            <h2>Our History</h2>
            <ul class=\"list1\">
                <li>
                    <time datetime=\"2014-01-01\">1998 -</time>
                    <div class=\"extra_wrapper\"><a href=\"#\">Ger mollis erat mattisy equelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut</a></div>
                </li>
                <li>
                    <time datetime=\"2014-01-01\">2001 -</time>
                    <div class=\"extra_wrapper\">Iolmollis erat mtisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut velit. <a href=\"#\"></a></div>
                </li>
                <li>
                    <time datetime=\"2014-01-01\">2005 -</time>
                    <div class=\"extra_wrapper\">Erat mattisy nequelisis, sit amet ultricieser erarutrum. Crasacilisis, nulla vel viverra auctor, leo magna sodales felis quis lesuada nibh odio ut velitoin pharetra <a href=\"#\"></a></div>
                </li>
                <li>
                    <time datetime=\"2014-01-01\">2008 -</time>
                    <div class=\"extra_wrapper\"><a href=\"#\">mattisy nequelisis, simet eryu ultricieser erarutrumracilisis, nulla vel viverra auctor, leo magna sodales felis quiser malesuada nibh odio ut oin</a></div>
                </li>
                <li>
                    <time datetime=\"2014-01-01\">2013 -</time>
                    <div class=\"extra_wrapper\"><a href=\"#\">Mattisy nequelisis, sit amet ty ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut</a></div>
                </li>
            </ul>
        </div>
        <div class=\"grid_4\">
            <h2>Opportunities</h2>
            <div class=\"text1 col2\"><a href=\"#\">Hom dui erosi laoru adipiscingq id risus sagittis, non consequat feiter milyno</a></div>
            <p>In mollis erat mattisy neque facilisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus</p>
            Ggestas venenatis. Duis massa elit, auctor pellentesque vel, aliquet sit amet eratertolo. Phasellus accumsan justo vitae feugiat
            <ul class=\"list\">
                <li><a href=\"#\">Proin pharetra luctus</a></li>
                <li><a href=\"#\">Diam, a scelerisque eros</a></li>
                <li><a href=\"#\">Maecenas vehicula egestas</a></li>
                <li><a href=\"#\"> Duis massa elit, auctor non</a></li>
                <li><a href=\"#\">Aliquet sit amet eraty</a></li>
            </ul>
            Demollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut velit. Proin pharetra luctusy.
            <br/><br/>
        </div>
    </div>

<div class=\"gray_block center\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <h3>Nos Meilleurs Formateurs</h3>
        </div>
        <div class=\"grid_3\">
            <div class=\"block3\">
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"text2\"><a href=\"#\">Mark Johnson</a></div>
                In mollis erat matt nequemer facilameteserylerarutrum.
            </div>
        </div>
        <div class=\"grid_3\">
            <div class=\"block3 bd1\">
                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"text2\"><a href=\"#\">Ingrid Wood</a></div>
                In mollis erat matt nequemer facilameteserylerarutrum.
            </div>
        </div>
        <div class=\"grid_3\">
            <div class=\"block3 bd2\">
                <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"text2\"><a href=\"#\">Linda Smith</a></div>
                In mollis erat matt nequemer facilameteserylerarutrum.
            </div>
        </div>
        <div class=\"grid_3\">
            <div class=\"block3 bd3\">
                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"text2\"><a href=\"#\">Devid Grosh</a></div>
                In mollis erat matt nequemer facilameteserylerarutrum.
            </div>
        </div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:About:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 84,  115 => 77,  105 => 70,  95 => 63,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle::layout.html.twig" %}*/
/* */
/* {% block container %}*/
/* */
/*     <div class="container_12">*/
/*         <div class="grid_4">*/
/*             <h2>Qui somme nous</h2>*/
/*             <img src="{{asset('bundles/moocmooc/images/page2_img.jpg')}}" alt="" class="img_inner">*/
/*             <div class="text1 col2"><a href="#">Hom dui erosi laoru adipiscingq id risus sagittis, non consequat feiter milyno</a></div>*/
/*             <p>In mollis erat mattisy neque facilisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus.</p>*/
/*             Maecenas vehiculaegestas venenatis. Duiser massa elit, auctor pellentesque vel, aliquet amet erat. <br>*/
/*             <a href="#" class="btn">more</a>*/
/*         </div>*/
/*         <div class="grid_4">*/
/*             <h2>Our History</h2>*/
/*             <ul class="list1">*/
/*                 <li>*/
/*                     <time datetime="2014-01-01">1998 -</time>*/
/*                     <div class="extra_wrapper"><a href="#">Ger mollis erat mattisy equelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut</a></div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <time datetime="2014-01-01">2001 -</time>*/
/*                     <div class="extra_wrapper">Iolmollis erat mtisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut velit. <a href="#"></a></div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <time datetime="2014-01-01">2005 -</time>*/
/*                     <div class="extra_wrapper">Erat mattisy nequelisis, sit amet ultricieser erarutrum. Crasacilisis, nulla vel viverra auctor, leo magna sodales felis quis lesuada nibh odio ut velitoin pharetra <a href="#"></a></div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <time datetime="2014-01-01">2008 -</time>*/
/*                     <div class="extra_wrapper"><a href="#">mattisy nequelisis, simet eryu ultricieser erarutrumracilisis, nulla vel viverra auctor, leo magna sodales felis quiser malesuada nibh odio ut oin</a></div>*/
/*                 </li>*/
/*                 <li>*/
/*                     <time datetime="2014-01-01">2013 -</time>*/
/*                     <div class="extra_wrapper"><a href="#">Mattisy nequelisis, sit amet ty ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut</a></div>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="grid_4">*/
/*             <h2>Opportunities</h2>*/
/*             <div class="text1 col2"><a href="#">Hom dui erosi laoru adipiscingq id risus sagittis, non consequat feiter milyno</a></div>*/
/*             <p>In mollis erat mattisy neque facilisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh odio ut velit. Proin pharetra luctus</p>*/
/*             Ggestas venenatis. Duis massa elit, auctor pellentesque vel, aliquet sit amet eratertolo. Phasellus accumsan justo vitae feugiat*/
/*             <ul class="list">*/
/*                 <li><a href="#">Proin pharetra luctus</a></li>*/
/*                 <li><a href="#">Diam, a scelerisque eros</a></li>*/
/*                 <li><a href="#">Maecenas vehicula egestas</a></li>*/
/*                 <li><a href="#"> Duis massa elit, auctor non</a></li>*/
/*                 <li><a href="#">Aliquet sit amet eraty</a></li>*/
/*             </ul>*/
/*             Demollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis quis malesuada nibh odio ut velit. Proin pharetra luctusy.*/
/*             <br/><br/>*/
/*         </div>*/
/*     </div>*/
/* */
/* <div class="gray_block center">*/
/*     <div class="container_12">*/
/*         <div class="grid_12">*/
/*             <h3>Nos Meilleurs Formateurs</h3>*/
/*         </div>*/
/*         <div class="grid_3">*/
/*             <div class="block3">*/
/*                 <img src="{{asset('bundles/moocmooc/images/page2_img1.jpg')}}" alt="">*/
/*                 <div class="text2"><a href="#">Mark Johnson</a></div>*/
/*                 In mollis erat matt nequemer facilameteserylerarutrum.*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid_3">*/
/*             <div class="block3 bd1">*/
/*                 <img src="{{asset('bundles/moocmooc/images/page2_img2.jpg')}}" alt="">*/
/*                 <div class="text2"><a href="#">Ingrid Wood</a></div>*/
/*                 In mollis erat matt nequemer facilameteserylerarutrum.*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid_3">*/
/*             <div class="block3 bd2">*/
/*                 <img src="{{asset('bundles/moocmooc/images/page2_img3.jpg')}}" alt="">*/
/*                 <div class="text2"><a href="#">Linda Smith</a></div>*/
/*                 In mollis erat matt nequemer facilameteserylerarutrum.*/
/*             </div>*/
/*         </div>*/
/*         <div class="grid_3">*/
/*             <div class="block3 bd3">*/
/*                 <img src="{{asset('bundles/moocmooc/images/page2_img4.jpg')}}" alt="">*/
/*                 <div class="text2"><a href="#">Devid Grosh</a></div>*/
/*                 In mollis erat matt nequemer facilameteserylerarutrum.*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
