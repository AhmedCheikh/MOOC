<?php

/* MoocMoocBundle:Default:index.html.twig */
class __TwigTemplate_b119f4daa64a06ecb9dc9ac5a9b1bd9a462377f58ff344dafcbac0bf3c92493d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle::layout.html.twig", "MoocMoocBundle:Default:index.html.twig", 1);
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
         <li><a href='";
        // line 8
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logOrganisme");
        echo "'>Vous etes Organisme</a> </li>
         <li><a href='";
        // line 9
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logformateur");
        echo "'>Vous etes Formateur</a></li>
  <li><a href='";
        // line 10
        echo $this->env->getExtension('routing')->getPath("mooc_login_apprenant");
        echo "'>Vous etes Apprenant</a></li>
         <li><a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logadmin");
        echo "'>Vous êtes un administrateur</a> </li>
         <li><a href='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_logcomite");
        echo "'>Vous êtes un membre de la comité</a> </li>
      </ul>
   </li>
  
</ul>
</div>
    
    <div class=\"slider_wrapper\"> 
        <div id=\"camera_wrap\" class=\"\">
            <div data-src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide1.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide2.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/slide3.jpg"), "html", null, true);
        echo "\"></div>
            <div data-src=\"";
        // line 25
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page1_img1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img_inner fleft\">
                <div class=\"extra_wrapper\">
                    <div class=\"title1\">Des cours 100% en ligne accessibles à tous !</div>
                    <p>Nous croyons que tout le monde devrait avoir le droit d'apprendre à tout âge. Nos cours sont ouverts sur tous supports. </p>
                </div>
                <div class=\"clear cl1\"></div>
                Valorisez vos compétences grâce à vos certificats de réussite. Affichez-les sur votre CV et votre profil Linkedin pour trouver le job de vos rêves !
            </div>
            <div class=\"grid_3\">
                <div class=\"block1\">
                    <div class=\"title\">10 <span> ans d'experience </span></div>
                    Grâce à vous on est present aujourd'hui . MOOC propose un accès universel à la meilleure formation au monde, 
                    en partenariat avec des universités et des organisations du plus haut niveau, pour proposer des cours en ligne.                   
                    <br>
                    <a href=\"#\" class=\"btn bt1\">more</a>
                </div>
            </div>
            <div class=\"grid_3 ver\">
                <div class=\"block1\">
                    <div class=\"title\">69 485 <span>camarades de classe</span></div>
                    Obtenez des conseils sur les forums et des corrections détaillées de vos devoirs. 
                    Et quand vous aurez appris, devenez à votre tour professeur.
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
                    <time datetime=\"2014-01-01\"><span class=\"col1\">Meilleure</span>  Ingenieure</time>
                    <div class=\"\">
                        <div class=\"extra_wrapper\">
                            <div class=\"title col1\"><a href=\"#\">Camille Bertaud : Ingénieur d'études en informatique - Solutec</a></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <p>« L'approche simple et pédagogue des vidéos, leur côté immersif et l'accessibilité 24/7 des cours, même hors connexion, m'ont donné un vrai coup de pouce pour entamer ma reconversion professionnelle. »</p>
                    <a href=\"#\" class=\"col1\">read more</a>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"block2\">
                    <time datetime=\"2014-01-01\"><span class=\"col1\">Meilleure </span>Formateur</time>
                    <div class=\"\">
                        <div class=\"extra_wrapper\">
                            <div class=\"title col1\"><a href=\"#\">Christine Fourcade : Responsable Formation - Havas</a></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <p> Les MOOC sont une belle opportunité pour les collaborateurs, ils apportent une réelle complémentarité aux formations existantes. Ils fonctionnent comme un booster des possibilités d'évolution au sein de l’entreprise. »</p>
                    <a href=\"#\" class=\"col1\">read more</a>
                </div>
            </div>
            <div class=\"grid_4\">
                <div class=\"block2\">
                    <time datetime=\"2014-01-01\"><span class=\"col1\">Meilleur</span> Apprenant</time>
                    <div class=\"\">
                        <div class=\"extra_wrapper\">
                            <div class=\"title col1\"><a href=\"#\">Jean Will : Futur programmeur</a></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                    <p>« Pouvoir cibler un domaine précis et avoir un programme construit à l'image de notre demande tout en ayant une flexibilité d'apprentissage ne pouvait que fonctionner à merveille ! »</p>
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
        return array (  139 => 80,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle::layout.html.twig" %}*/
/* */
/* {% block container %}*/
/* <div id='cssmenu'>*/
/* <ul>*/
/*    <li class='active'><a href='#'>Connectez vous</a>*/
/*       <ul>*/
/*          <li><a href='{{path('mooc_mooc_logOrganisme')}}'>Vous etes Organisme</a> </li>*/
/*          <li><a href='{{path('mooc_mooc_logformateur')}}'>Vous etes Formateur</a></li>*/
/*   <li><a href='{{path('mooc_login_apprenant')}}'>Vous etes Apprenant</a></li>*/
/*          <li><a href='{{path('mooc_mooc_logadmin')}}'>Vous êtes un administrateur</a> </li>*/
/*          <li><a href='{{path('mooc_mooc_logcomite')}}'>Vous êtes un membre de la comité</a> </li>*/
/*       </ul>*/
/*    </li>*/
/*   */
/* </ul>*/
/* </div>*/
/*     */
/*     <div class="slider_wrapper"> */
/*         <div id="camera_wrap" class="">*/
/*             <div data-src="{{asset('bundles/moocmooc/images/slide.jpg')}}"></div>*/
/*             <div data-src="{{asset('bundles/moocmooc/images/slide1.jpg')}}"></div>*/
/*             <div data-src="{{asset('bundles/moocmooc/images/slide2.jpg')}}"></div>*/
/*             <div data-src="{{asset('bundles/moocmooc/images/slide3.jpg')}}"></div>*/
/*             <div data-src="{{asset('bundles/moocmooc/images/slide4.jpg')}}"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container_12">*/
/*         <div class="grid_12">*/
/*             <div class="slogan">*/
/*                 Bienvenue Sur la meilleur platforme d'apprentissage en ligne <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container_12">*/
/*         <section class="grid" id="grid">*/
/*             <a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">*/
/*                 <figure>*/
/*                     <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>*/
/*                     <figcaption>*/
/*                         <div class="title">Tutoriels Gratuit</div>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <span>more</span>*/
/*             </a>*/
/*             <a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">*/
/*                 <figure>*/
/*                     <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>*/
/*                     <figcaption>*/
/*                         <div class="title">Certification</div>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <span>more</span>*/
/*             </a>*/
/*             <a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">*/
/*                 <figure>*/
/*                     <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>*/
/*                     <figcaption>*/
/*                         <div class="title">Evaluation</div>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <span>more</span>*/
/*             </a>*/
/*             <a href="#" data-path-hover="m 180,70.57627 -180,0 L 0,0 180,0 z">*/
/*                 <figure>*/
/*                     <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,262 0,0 180,0 z"/></svg>*/
/*                     <figcaption>*/
/*                         <div class="title">Cours Suivie</div>*/
/*                     </figcaption>*/
/*                 </figure>*/
/*                 <span>more</span>*/
/*             </a>*/
/*         </section>*/
/*     </div>*/
/*     <!--==============================Content=================================-->*/
/*     <div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 24, 2014!</div>*/
/*         <div class="container_12">*/
/*             <div class="grid_6">*/
/*                 <img src="{{asset('bundles/moocmooc/images/page1_img1.jpg')}}" alt="" class="img_inner fleft">*/
/*                 <div class="extra_wrapper">*/
/*                     <div class="title1">Des cours 100% en ligne accessibles à tous !</div>*/
/*                     <p>Nous croyons que tout le monde devrait avoir le droit d'apprendre à tout âge. Nos cours sont ouverts sur tous supports. </p>*/
/*                 </div>*/
/*                 <div class="clear cl1"></div>*/
/*                 Valorisez vos compétences grâce à vos certificats de réussite. Affichez-les sur votre CV et votre profil Linkedin pour trouver le job de vos rêves !*/
/*             </div>*/
/*             <div class="grid_3">*/
/*                 <div class="block1">*/
/*                     <div class="title">10 <span> ans d'experience </span></div>*/
/*                     Grâce à vous on est present aujourd'hui . MOOC propose un accès universel à la meilleure formation au monde, */
/*                     en partenariat avec des universités et des organisations du plus haut niveau, pour proposer des cours en ligne.                   */
/*                     <br>*/
/*                     <a href="#" class="btn bt1">more</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="grid_3 ver">*/
/*                 <div class="block1">*/
/*                     <div class="title">69 485 <span>camarades de classe</span></div>*/
/*                     Obtenez des conseils sur les forums et des corrections détaillées de vos devoirs. */
/*                     Et quand vous aurez appris, devenez à votre tour professeur.*/
/*                     <br>*/
/*                     <a href="#" class="btn bt1">more</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="gray_block">*/
/*         <div class="container_12">*/
/*             <div class="grid_4">*/
/*                 <div class="block2">*/
/*                     <time datetime="2014-01-01"><span class="col1">Meilleure</span>  Ingenieure</time>*/
/*                     <div class="">*/
/*                         <div class="extra_wrapper">*/
/*                             <div class="title col1"><a href="#">Camille Bertaud : Ingénieur d'études en informatique - Solutec</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                     <p>« L'approche simple et pédagogue des vidéos, leur côté immersif et l'accessibilité 24/7 des cours, même hors connexion, m'ont donné un vrai coup de pouce pour entamer ma reconversion professionnelle. »</p>*/
/*                     <a href="#" class="col1">read more</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="grid_4">*/
/*                 <div class="block2">*/
/*                     <time datetime="2014-01-01"><span class="col1">Meilleure </span>Formateur</time>*/
/*                     <div class="">*/
/*                         <div class="extra_wrapper">*/
/*                             <div class="title col1"><a href="#">Christine Fourcade : Responsable Formation - Havas</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                     <p> Les MOOC sont une belle opportunité pour les collaborateurs, ils apportent une réelle complémentarité aux formations existantes. Ils fonctionnent comme un booster des possibilités d'évolution au sein de l’entreprise. »</p>*/
/*                     <a href="#" class="col1">read more</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="grid_4">*/
/*                 <div class="block2">*/
/*                     <time datetime="2014-01-01"><span class="col1">Meilleur</span> Apprenant</time>*/
/*                     <div class="">*/
/*                         <div class="extra_wrapper">*/
/*                             <div class="title col1"><a href="#">Jean Will : Futur programmeur</a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="clear"></div>*/
/*                     <p>« Pouvoir cibler un domaine précis et avoir un programme construit à l'image de notre demande tout en ayant une flexibilité d'apprentissage ne pouvait que fonctionner à merveille ! »</p>*/
/*                     <a href="#" class="col1">read more</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
