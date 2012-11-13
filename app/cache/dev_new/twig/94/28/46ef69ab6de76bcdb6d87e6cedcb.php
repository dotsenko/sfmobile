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
        return array (  45 => 13,  36 => 18,  21 => 1,  85 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 15,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 16,  52 => 15,  72 => 16,  64 => 6,  53 => 13,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 24,  74 => 27,  47 => 19,  32 => 11,  42 => 10,  26 => 3,  23 => 4,  97 => 16,  95 => 21,  88 => 14,  78 => 25,  71 => 9,  40 => 6,  25 => 4,  22 => 3,  17 => 1,  92 => 36,  86 => 28,  79 => 11,  29 => 5,  24 => 6,  19 => 2,  69 => 20,  63 => 18,  58 => 5,  49 => 14,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 42,  99 => 34,  96 => 37,  91 => 33,  82 => 27,  77 => 25,  75 => 10,  57 => 15,  50 => 13,  46 => 24,  44 => 11,  39 => 9,  33 => 13,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 31,  73 => 21,  70 => 26,  67 => 7,  62 => 24,  59 => 21,  55 => 14,  51 => 18,  48 => 25,  41 => 9,  38 => 8,  35 => 7,  31 => 6,  28 => 3,);
    }
}
