<?php

/* MoocMoocBundle:Cour:affichecour.html.twig */
class __TwigTemplate_be73a3d431787e9063b140456bf7006d3fd4fa2a7296ecfeab8da0ca4bc91d29 extends Twig_Template
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
            <h2 class=\"mb0\">Liste des cours</h2>
            <br/>
        </div>
    </div>

<div class=\"gray_block gb1\">
    <div class=\"container_12\">
        <div class=\"grid_12\">
            <div class=\"responsive\">
                <ul class=\"a_content\">
                    <!-- 1 -->
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">Android debutant</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">Android intermidiaire</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">Android Avancé</div>
                            <p>Demollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quisy</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">IOS debutant</div>
                            <p>Demollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quisy</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">IOS intermidiaire</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">IOS Avancé</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                    </li>
                    <!-- 2 -->
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">Windows phone</div>
                            <p>Komollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, alesuada nibh</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">J2me Canvas</div>
                            <p>Komollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, alesuada nibh</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">Tutoriels API GPS</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">API Google map</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">API Youtube</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">Risk Management</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                    </li>
                    <!-- 3 -->
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">J2ME Canvas</div>
                            <p>Olerat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuad</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">Business Analysis</div>
                            <p>Olerat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuad</p>
                        </div>
                    </li>
                    <li>
                        <div class=\"card-front\">
                            <div class=\"text2\">API stackoverflow</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">Insurance Services</div>
                            <p>In mollis erat matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis</p>
                        </div>
                    </li>
                    <li class=\"last\">
                        <div class=\"card-front\">
                            <div class=\"text2\">Tutoriel ardoino</div>
                            <p>Matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh</p>
                        </div>
                        <div class=\"card-back\">
                            <h2><a href=\"#\">Click here</a></h2>
                        </div>
                        <!-- Content -->
                        <div class=\"all-content\">
                            <div class=\"text2\">Expert Business Plans</div>
                            <p>Matt nequemer rutrum. Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada nibh</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Cour:affichecour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
