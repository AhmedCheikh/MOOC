<?php

/* MoocMoocBundle:About:info.html.twig */
class __TwigTemplate_7258772f1bbb5989f0ee0e6dfbd64477d967c0ab1140308815392b726038cad2 extends Twig_Template
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
            <div class=\"text1 col2\"><a href=\"#\">Groupe SmartDev Esprit </a></div>
            <p>Nous vous proposons des cours ouverts pour vous former autrement, pour devenir acteur de votre vie. Nous vous aidons à prendre votre envol, mais ça ne s'arrête pas là. Notre volonté est de vous accompagner tout au long de votre vie, dans votre parcours professionnel.
                Nous, Ahmed Haddar , Khoubaib, Ahmed Cheikh , Zied  , Nour et Rim  fondateurs de MOOC et toute notre équipe de 35 personnes, sommes à vos côtés tous les jours. <br>
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
            <h2>La pédagogie</h2>
            <div class=\"text1 col2\"><a href=\"#\">PROGRAMME PÉDAGOGIQUE DE NOS COURS</a></div>
            <p>Chaque cours est créé par un professeur ou un expert dans le domaine. Il est composé d'une ou plusieurs parties et peut comporter du texte, des images (schéma, illustration) et des vidéos. Chaque partie d'un cours certifiant est ponctuée d'exercices de 2 types :
            Des quiz corrigés automatiquement
            Des devoirs libres (exemple : créer un site web avec des consignes précises). Ces devoirs sont évalués par les pairs. Chaque devoir est corrigé 3 fois par 3 autres élèves, dans un processus en double aveugle, selon un barème fixé par le professeur. La note finale est la moyenne des 3 notes reçues sur le devoir.
            50% des devoirs corrigés par les pairs obtiennent quasiment les 3 mêmes notes, avec une variance inférieure à 1. La recherche académique montre d'ailleurs que l'évaluation par les pairs peut être aussi précise que celle des professeurs.
            <ul class=\"list\">
                <li><a href=\"#\">les cours</a></li>
                <li><a href=\"#\">les formateurs</a></li>
                <li><a href=\"#\">les entreprises</a></li>
                
            </ul>
            
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
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"text2\"><a href=\"#\">Mark Johnson</a></div>
                In mollis erat matt nequemer facilameteserylerarutrum.
            </div>
        </div>
        <div class=\"grid_3\">
            <div class=\"block3 bd1\">
                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"text2\"><a href=\"#\">Ingrid Wood</a></div>
                In mollis erat matt nequemer facilameteserylerarutrum.
            </div>
        </div>
        <div class=\"grid_3\">
            <div class=\"block3 bd2\">
                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page2_img3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                <div class=\"text2\"><a href=\"#\">Linda Smith</a></div>
                In mollis erat matt nequemer facilameteserylerarutrum.
            </div>
        </div>
        <div class=\"grid_3\">
            <div class=\"block3 bd3\">
                <img src=\"";
        // line 85
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
        return array (  126 => 85,  116 => 78,  106 => 71,  96 => 64,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*             <div class="text1 col2"><a href="#">Groupe SmartDev Esprit </a></div>*/
/*             <p>Nous vous proposons des cours ouverts pour vous former autrement, pour devenir acteur de votre vie. Nous vous aidons à prendre votre envol, mais ça ne s'arrête pas là. Notre volonté est de vous accompagner tout au long de votre vie, dans votre parcours professionnel.*/
/*                 Nous, Ahmed Haddar , Khoubaib, Ahmed Cheikh , Zied  , Nour et Rim  fondateurs de MOOC et toute notre équipe de 35 personnes, sommes à vos côtés tous les jours. <br>*/
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
/*             <h2>La pédagogie</h2>*/
/*             <div class="text1 col2"><a href="#">PROGRAMME PÉDAGOGIQUE DE NOS COURS</a></div>*/
/*             <p>Chaque cours est créé par un professeur ou un expert dans le domaine. Il est composé d'une ou plusieurs parties et peut comporter du texte, des images (schéma, illustration) et des vidéos. Chaque partie d'un cours certifiant est ponctuée d'exercices de 2 types :*/
/*             Des quiz corrigés automatiquement*/
/*             Des devoirs libres (exemple : créer un site web avec des consignes précises). Ces devoirs sont évalués par les pairs. Chaque devoir est corrigé 3 fois par 3 autres élèves, dans un processus en double aveugle, selon un barème fixé par le professeur. La note finale est la moyenne des 3 notes reçues sur le devoir.*/
/*             50% des devoirs corrigés par les pairs obtiennent quasiment les 3 mêmes notes, avec une variance inférieure à 1. La recherche académique montre d'ailleurs que l'évaluation par les pairs peut être aussi précise que celle des professeurs.*/
/*             <ul class="list">*/
/*                 <li><a href="#">les cours</a></li>*/
/*                 <li><a href="#">les formateurs</a></li>*/
/*                 <li><a href="#">les entreprises</a></li>*/
/*                 */
/*             </ul>*/
/*             */
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