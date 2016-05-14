<?php

/* MoocMoocBundle:Formateur:afficheformateur.html.twig */
class __TwigTemplate_0459699f108fcc7b4f279570365e6cd431c01075d9592a24491026637cf1e731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle::layout.html.twig", "MoocMoocBundle:Formateur:afficheformateur.html.twig", 1);
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
       
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Formateurs"]) ? $context["Formateurs"] : $this->getContext($context, "Formateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 18
            echo "            <div class=\"grid_3\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/big1.jpg"), "html", null, true);
            echo "\" class=\"gal1\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/moocmooc/images/page4.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                <div class=\"text1\"><a href=\"#\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "prenom", array()), "html", null, true);
            echo "</a></div>
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "email", array()), "html", null, true);
            echo "
                <br>
                <a href=\"#\" class=\"btn\">more</a>
                  </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      
         
            ";
        // line 78
        echo "         
         
  
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
        return array (  80 => 78,  76 => 26,  65 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle::layout.html.twig" %}*/
/* */
/* {% block container %}*/
/* */
/* */
/* */
/*     <div class="container_12">*/
/*         <div class="grid_12">*/
/*             <h2 class="mb0">Liste des formateurs</h2>*/
/*             <br/>*/
/*         </div>*/
/*     </div>*/
/* <div class="gray_block gb1">*/
/*     <div class="container_12">*/
/*          <div class="gallery">*/
/*        */
/*         {% for f in Formateurs %}*/
/*             <div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big1.jpg')}}" class="gal1"><img src="{{asset('bundles/moocmooc/images/page4.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">{{f.nom}} {{f.prenom}}</a></div>*/
/*                 {{f.email}}*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*                   </div>*/
/*          {% endfor %}*/
/*       */
/*          */
/*             {#<div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big2.jpg')}}" class="gal bd1"><img src="{{asset('bundles/moocmooc/images/page4_img2.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">Vivamus at magna non</a></div>*/
/*                 Fermollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>*/
/*             <div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big3.jpg')}}" class="gal bd2"><img src="{{asset('bundles/moocmooc/images/page4_img3.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">Curabitur vel lorem sit</a></div>*/
/*                 In mollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>*/
/*             <div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big4.jpg')}}" class="gal bd3"><img src="{{asset('bundles/moocmooc/images/page4_img4.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">Phasellus erat nisuctor</a></div>*/
/*                 Hhol mollis erat mattisy kilomi nequelisis, sit amet ultricieser erarutrum. Cras facilisisolo*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*             <div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big5.jpg')}}" class="gal"><img src="{{asset('bundles/moocmooc/images/page4_img5.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">Etiam dui eros, laoreet</a></div>*/
/*                 Mollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra aucto*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>*/
/*             <div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big6.jpg')}}" class="gal bd1"><img src="{{asset('bundles/moocmooc/images/page4_img6.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">Dui eroslaoreetdui ero</a></div>*/
/*                 In mollis erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>*/
/*             <div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big7.jpg')}}" class="gal bd2"><img src="{{asset('bundles/moocmooc/images/page4_img7.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">A at magna noru adip</a></div>*/
/*                 Hlottisy nequelisis, sit ametyter ultricieser erarutrum. Crasyto facilisis, nulla vel viverra auc*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>*/
/*             <div class="grid_3">*/
/*                 <a href="{{asset('bundles/moocmooc/images/big8.jpg')}}" class="gal bd3"><img src="{{asset('bundles/moocmooc/images/page4_img8.jpg')}}" alt=""></a>*/
/*                 <div class="text1"><a href="#">Retui erosi laoru adip</a></div>*/
/*                 Koliu erat mattisy nequelisis, sit amet ultricieser erarutrum. Cras facilisis, nulla vel viverra auctom*/
/*                 <br>*/
/*                 <a href="#" class="btn">more</a>*/
/*             </div>#}*/
/*          */
/*          */
/*   */
/*     </div>*/
/* </div>*/
/*     */
/* {% endblock %}*/
