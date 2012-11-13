<?php

/* MobileFrontendBundle:Default:index.html.twig */
class __TwigTemplate_942846ef69ab6de76bcdb6d87e6cedcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titlepage' => array($this, 'block_titlepage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlepage($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Louvre</h1>
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
        <div data-role=\"content\">

            <ul data-role=\"listview\" data-inset=\"true\" data-theme=\"a\">

                    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menu"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 14
            echo "                        <li>
                            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "m"), "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "m"), "title"), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "
            </ul>
        </div><!-- /content -->

";
    }

    public function getTemplateName()
    {
        return "MobileFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  52 => 15,  49 => 14,  45 => 13,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
