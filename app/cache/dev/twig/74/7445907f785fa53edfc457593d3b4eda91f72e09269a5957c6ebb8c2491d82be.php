<?php

/* :easy_admin/Cours:video.html.twig */
class __TwigTemplate_24f910580b5c0ed1b478785b9598c0c728cab1f2644b8d9be7613942ac59d300 extends Twig_Template
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
        echo "<a href=\"#openModal\">Voir Vidéo</a>

<div id=\"openModal\" class=\"modalDialog\">
\t<div>
\t\t<a href=\"#close\" title=\"Close\" class=\"close\">X</a>
<video src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/file/" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
        echo "\" width=\"350\"  height=\"300\" type=\"video/mp4\" controls></video>\t\t
\t</div>
</div>

<style type=\"text/css\" >

    .modalDialog {
\tposition: fixed;
\tfont-family: Arial, Helvetica, sans-serif;
\ttop: 0;
\tright: 0;
\tbottom: 0;
\tleft: 0;
\tbackground: rgba(0,0,0,0.8);
\tz-index: 99999;
\topacity:0;
\t-webkit-transition: opacity 400ms ease-in;
\t-moz-transition: opacity 400ms ease-in;
\ttransition: opacity 400ms ease-in;
\tpointer-events: none;
}

.modalDialog:target {
\topacity:1;
\tpointer-events: auto;
}

.modalDialog > div {
\twidth: 400px;
\tposition: relative;
\tmargin: 10% auto;
\tpadding: 5px 20px 13px 20px;
\tborder-radius: 10px;
\tbackground: #fff;
\tbackground: -moz-linear-gradient(#fff, #999);
\tbackground: -webkit-linear-gradient(#fff, #999);
\tbackground: -o-linear-gradient(#fff, #999);
}
    
</style>";
    }

    public function getTemplateName()
    {
        return ":easy_admin/Cours:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <a href="#openModal">Voir Vidéo</a>*/
/* */
/* <div id="openModal" class="modalDialog">*/
/* 	<div>*/
/* 		<a href="#close" title="Close" class="close">X</a>*/
/* <video src="{{asset('uploads/file/' ~ value)}}" width="350"  height="300" type="video/mp4" controls></video>		*/
/* 	</div>*/
/* </div>*/
/* */
/* <style type="text/css" >*/
/* */
/*     .modalDialog {*/
/* 	position: fixed;*/
/* 	font-family: Arial, Helvetica, sans-serif;*/
/* 	top: 0;*/
/* 	right: 0;*/
/* 	bottom: 0;*/
/* 	left: 0;*/
/* 	background: rgba(0,0,0,0.8);*/
/* 	z-index: 99999;*/
/* 	opacity:0;*/
/* 	-webkit-transition: opacity 400ms ease-in;*/
/* 	-moz-transition: opacity 400ms ease-in;*/
/* 	transition: opacity 400ms ease-in;*/
/* 	pointer-events: none;*/
/* }*/
/* */
/* .modalDialog:target {*/
/* 	opacity:1;*/
/* 	pointer-events: auto;*/
/* }*/
/* */
/* .modalDialog > div {*/
/* 	width: 400px;*/
/* 	position: relative;*/
/* 	margin: 10% auto;*/
/* 	padding: 5px 20px 13px 20px;*/
/* 	border-radius: 10px;*/
/* 	background: #fff;*/
/* 	background: -moz-linear-gradient(#fff, #999);*/
/* 	background: -webkit-linear-gradient(#fff, #999);*/
/* 	background: -o-linear-gradient(#fff, #999);*/
/* }*/
/*     */
/* </style>*/
