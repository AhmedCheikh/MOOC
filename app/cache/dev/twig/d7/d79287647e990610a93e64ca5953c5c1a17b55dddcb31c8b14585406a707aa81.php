<?php

/* MoocMoocBundle:Cours:quizpdf.html.twig */
class __TwigTemplate_e598afc1a45a4dad4b8600cdd8c7f62046623de30184a151b38778a772468e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<body>
    <div style=\"margin-left: 200px\">
<br>
<br>
<br>
<img src=\"./bundles/moocmooc/images/logo.png\" >
<H2> Quiz : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")), "titre", array()), "html", null, true);
        echo " </H2>
<br>
<br>
";
        // line 11
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            echo " 
   <div> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["q"], "0", array(), "array"), "idquestion", array()), "question", array()), "html", null, true);
            echo "  :</div> <br>
          ";
            // line 14
            echo "     <div>  la reponse correcte : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["q"], "0", array(), "array"), "rep", array()), "html", null, true);
            echo " </div>
     <br>
     <br>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
</body>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Cours:quizpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  44 => 14,  40 => 12,  33 => 11,  27 => 7,  19 => 1,);
    }
}
/* <body>*/
/*     <div style="margin-left: 200px">*/
/* <br>*/
/* <br>*/
/* <br>*/
/* <img src="./bundles/moocmooc/images/logo.png" >*/
/* <H2> Quiz : {{quiz.titre}} </H2>*/
/* <br>*/
/* <br>*/
/* {#{%  set a=0 %}#}*/
/*  {% for q in rep %} */
/*    <div> {{q["0"].idquestion.question}}  :</div> <br>*/
/*           {#{%  set a=a+1 %}#}*/
/*      <div>  la reponse correcte : {{q["0"].rep }} </div>*/
/*      <br>*/
/*      <br>*/
/*    {% endfor %}*/
/*     </div>*/
/* </body>*/
/* */
