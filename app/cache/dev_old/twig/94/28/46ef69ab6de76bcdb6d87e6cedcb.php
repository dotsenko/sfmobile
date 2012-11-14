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
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 14
            echo "                        <li>
                            <a href=\"";
            // line 15
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($_m_, "url")), "html", null, true);
            echo "\">";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_m_, "title"), "html", null, true);
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
        return array (  53 => 15,  126 => 47,  155 => 37,  141 => 39,  129 => 33,  125 => 32,  120 => 30,  114 => 27,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 40,  134 => 44,  123 => 40,  118 => 39,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 37,  122 => 31,  107 => 34,  101 => 21,  95 => 16,  82 => 25,  67 => 17,  102 => 19,  89 => 16,  56 => 5,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 30,  147 => 47,  127 => 43,  113 => 34,  78 => 27,  64 => 16,  32 => 5,  50 => 14,  47 => 44,  39 => 8,  25 => 3,  22 => 4,  34 => 6,  117 => 42,  112 => 41,  109 => 20,  104 => 37,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 3,  23 => 1,  17 => 1,  92 => 28,  86 => 31,  79 => 40,  57 => 14,  46 => 7,  29 => 5,  24 => 4,  19 => 1,  69 => 9,  63 => 14,  55 => 9,  49 => 6,  43 => 7,  41 => 14,  37 => 7,  20 => 2,  157 => 26,  149 => 44,  145 => 43,  142 => 42,  132 => 39,  110 => 26,  106 => 34,  98 => 33,  93 => 32,  90 => 28,  83 => 13,  81 => 26,  73 => 26,  61 => 15,  52 => 11,  48 => 10,  45 => 13,  40 => 13,  36 => 5,  33 => 6,  30 => 4,  27 => 3,  144 => 46,  138 => 38,  130 => 46,  124 => 24,  121 => 36,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 32,  88 => 16,  85 => 26,  77 => 11,  74 => 20,  71 => 19,  65 => 22,  62 => 6,  58 => 8,  54 => 13,  51 => 18,  42 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
