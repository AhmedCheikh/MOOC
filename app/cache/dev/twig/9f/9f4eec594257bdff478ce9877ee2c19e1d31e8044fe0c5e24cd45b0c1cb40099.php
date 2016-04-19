<?php

/* MoocMoocBundle:Contact:send.html.twig */
class __TwigTemplate_2845468899fdc35bd97cfba0d15dd1acf6bcead77ab9414953f1502ea504f743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocMoocBundle::layout.html.twig", "MoocMoocBundle:Contact:send.html.twig", 1);
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
                <h2 class=\"mb0\">Contactez nous</h2><br/>
            </div>
        </div>
    <div class=\"gray_block gb1\">
        <div class=\"container_12\">
            <div class=\"grid_12\">
                <div class=\"map\">
                    <figure class=\"\">
                        <iframe src=\"http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe>
                    </figure>
                </div>
            </div>
            <div class=\"grid_4\">
                <h2 class=\"head1\">Address</h2>
                <div class=\"map\">
                    <address>
                        <dl>
                            <dt>Mooc <br>
                                8160 Gardimaou jandouba,<br>
                                cité ines num 9.
                            </dt>
                            <dd><span>Tel fixe:</span>+216 11 111 111 111</dd>
                            <dd><span>Tel portable:</span>+216 95095985</dd>
                            <dd><span>FAX:</span>+216 00 000 000 000</dd>
                            <dd><span>E-mail:</span> <a href=\"#\" class=\"col3\">zied.agoubi@esprit.tn</a></dd>
                            <dd><span>Skype:</span> <a href=\"#\" class=\"col3\">zied.agoubi</a></dd>
                        </dl>
                    </address>
                    <p>rien <span class=\"col3\"><a href=\"\" rel=\"nofollow\">Gratuit</a></span> rien</p>
                    rien<span class=\"col3\"><a href=\"http://www.templatetuning.com/\" rel=\"nofollow\">rieng</a></span>.</div>
            </div>
            <div class=\"grid_8\">
                <h2 class=\"head1\">Contact Form</h2>
                <p>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
                <form id=\"form\" role=\"form\" method=\"POST\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("mooc_mooc_contact");
        echo "\">
                    <div class=\"success_wrapper\">
                        <div class=\"success-message\">Contact form submitted</div>
                    </div>
                    <label class=\"name\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                       <!-- <input type=\"text\" placeholder=\"Name:\" data-constraints=\"@Required @JustLetters\" /> -->
                        <span class=\"empty-message\">*Ce champs est obligatoire.</span>
                        <span class=\"error-message\">*Ce n'est pas un nom valide.</span>
                    </label>
                    <label class=\"email\">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                        <!--  <input type=\"text\" placeholder=\"E-mail:\" data-constraints=\"@Required @Email\" />  -->
                        <span class=\"empty-message\">*Ce champs est obligatoire.</span>
                        <span class=\"error-message\">*Ce n'est un email valide.</span>
                    </label>
                    <label class=\"phone\">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
                      <!--    <input type=\"text\" placeholder=\"Phone:\" data-constraints=\"@Required @JustNumbers\"/>  -->
                        <span class=\"empty-message\">*Ce champs est obligatoire.</span>
                        <span class=\"error-message\">*Ce n'est pas un telephone valide.</span>
                    </label>
                    <label class=\"message\">
                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
                      <!--    <textarea placeholder=\"Message:\" data-constraints='@Required @Length(min=20,max=999999)'></textarea>  -->
                        <span class=\"empty-message\">*Ce champs est obligatoire.</span>
                        <span class=\"error-message\">*Le message est trop court.</span>
                    </label>
                    <div>
                        <div class=\"clear\"></div>
                        <div class=\"btns\">
                            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                            <button type=\"reset\">vider</button>
                            <button type=\"submit\">envoyer</button>
                            <!-- <a href=\"#\" data-type=\"reset\" class=\"btn\">vider</a>
                            <a href=\"#\" data-type=\"submit\" class=\"btn\">envoyer</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Contact:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 72,  108 => 64,  99 => 58,  90 => 52,  81 => 46,  73 => 41,  69 => 40,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "MoocMoocBundle::layout.html.twig" %}*/
/* */
/* {% block container %}*/
/* */
/*         <div class="container_12">*/
/*             <div class="grid_12">*/
/*                 <h2 class="mb0">Contactez nous</h2><br/>*/
/*             </div>*/
/*         </div>*/
/*     <div class="gray_block gb1">*/
/*         <div class="container_12">*/
/*             <div class="grid_12">*/
/*                 <div class="map">*/
/*                     <figure class="">*/
/*                         <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>*/
/*                     </figure>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="grid_4">*/
/*                 <h2 class="head1">Address</h2>*/
/*                 <div class="map">*/
/*                     <address>*/
/*                         <dl>*/
/*                             <dt>Mooc <br>*/
/*                                 8160 Gardimaou jandouba,<br>*/
/*                                 cité ines num 9.*/
/*                             </dt>*/
/*                             <dd><span>Tel fixe:</span>+216 11 111 111 111</dd>*/
/*                             <dd><span>Tel portable:</span>+216 95095985</dd>*/
/*                             <dd><span>FAX:</span>+216 00 000 000 000</dd>*/
/*                             <dd><span>E-mail:</span> <a href="#" class="col3">zied.agoubi@esprit.tn</a></dd>*/
/*                             <dd><span>Skype:</span> <a href="#" class="col3">zied.agoubi</a></dd>*/
/*                         </dl>*/
/*                     </address>*/
/*                     <p>rien <span class="col3"><a href="" rel="nofollow">Gratuit</a></span> rien</p>*/
/*                     rien<span class="col3"><a href="http://www.templatetuning.com/" rel="nofollow">rieng</a></span>.</div>*/
/*             </div>*/
/*             <div class="grid_8">*/
/*                 <h2 class="head1">Contact Form</h2>*/
/*                 <p>{{form_errors(form)}}</p>*/
/*                 <form id="form" role="form" method="POST" action="{{path('mooc_mooc_contact')}}">*/
/*                     <div class="success_wrapper">*/
/*                         <div class="success-message">Contact form submitted</div>*/
/*                     </div>*/
/*                     <label class="name">*/
/*                         {{form_widget(form.name)}}*/
/*                        <!-- <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" /> -->*/
/*                         <span class="empty-message">*Ce champs est obligatoire.</span>*/
/*                         <span class="error-message">*Ce n'est pas un nom valide.</span>*/
/*                     </label>*/
/*                     <label class="email">*/
/*                         {{form_widget(form.email)}}*/
/*                         <!--  <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />  -->*/
/*                         <span class="empty-message">*Ce champs est obligatoire.</span>*/
/*                         <span class="error-message">*Ce n'est un email valide.</span>*/
/*                     </label>*/
/*                     <label class="phone">*/
/*                         {{form_widget(form.phone)}}*/
/*                       <!--    <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>  -->*/
/*                         <span class="empty-message">*Ce champs est obligatoire.</span>*/
/*                         <span class="error-message">*Ce n'est pas un telephone valide.</span>*/
/*                     </label>*/
/*                     <label class="message">*/
/*                         {{form_widget(form.message)}}*/
/*                       <!--    <textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>  -->*/
/*                         <span class="empty-message">*Ce champs est obligatoire.</span>*/
/*                         <span class="error-message">*Le message est trop court.</span>*/
/*                     </label>*/
/*                     <div>*/
/*                         <div class="clear"></div>*/
/*                         <div class="btns">*/
/*                             {{form_widget(form._token)}}*/
/*                             <button type="reset">vider</button>*/
/*                             <button type="submit">envoyer</button>*/
/*                             <!-- <a href="#" data-type="reset" class="btn">vider</a>*/
/*                             <a href="#" data-type="submit" class="btn">envoyer</a> -->*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
