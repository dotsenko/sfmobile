<?php

/* MobileFrontendBundle:About:index.html.twig */
class __TwigTemplate_5a59b18b9a9edf028c52ec792cae4feb extends Twig_Template
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

    // line 2
    public function block_titlepage($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>About</h1>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        <div data-role=\"content\">

            <p>Louvre - is not only an architectural monument, like the palace of French kings, but also one of the most famous museums in the world. It boasts an enormous collection of various exhibits. Here you can find the reliefs of the Assyrian palaces, Egyptian painting, and more.</p>
            75058 Paris CEDEX 01 <br/>
            France<br/>
            Telephone :<br/>
            + 33 (0)1 40 20 50 50<br/>
            <iframe src=\"http://www.map-generator.org/0b9a5471-76ef-488e-b325-69434fcfbf6b/iframe-map.aspx\" scrolling=\"no\" height=\"200px\" width=\"200px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>

        </div><!-- /content -->



";
    }

    public function getTemplateName()
    {
        return "MobileFrontendBundle:About:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 18,  21 => 1,  85 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 15,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 16,  52 => 12,  72 => 16,  64 => 6,  53 => 13,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 24,  74 => 27,  47 => 19,  32 => 11,  42 => 10,  26 => 3,  23 => 4,  97 => 16,  95 => 21,  88 => 14,  78 => 25,  71 => 9,  40 => 6,  25 => 4,  22 => 3,  17 => 1,  92 => 36,  86 => 28,  79 => 11,  29 => 5,  24 => 6,  19 => 2,  69 => 20,  63 => 22,  58 => 5,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 42,  99 => 34,  96 => 37,  91 => 33,  82 => 27,  77 => 25,  75 => 10,  57 => 15,  50 => 13,  46 => 24,  44 => 11,  39 => 9,  33 => 13,  30 => 3,  27 => 2,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 28,  81 => 31,  73 => 21,  70 => 26,  67 => 7,  62 => 24,  59 => 21,  55 => 14,  51 => 18,  48 => 25,  41 => 9,  38 => 6,  35 => 5,  31 => 6,  28 => 3,);
    }
}
