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
        return array (  115 => 47,  96 => 37,  85 => 32,  155 => 37,  150 => 30,  143 => 40,  138 => 38,  136 => 37,  125 => 32,  114 => 27,  110 => 26,  101 => 21,  91 => 15,  83 => 13,  65 => 7,  56 => 5,  45 => 21,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 39,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  107 => 42,  80 => 26,  69 => 9,  63 => 22,  60 => 16,  52 => 12,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  44 => 11,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 30,  117 => 44,  103 => 41,  99 => 34,  74 => 27,  47 => 44,  32 => 11,  42 => 10,  39 => 9,  30 => 3,  26 => 3,  27 => 2,  23 => 1,  97 => 34,  95 => 16,  88 => 29,  82 => 27,  78 => 25,  75 => 24,  71 => 14,  49 => 11,  40 => 13,  25 => 4,  22 => 3,  20 => 2,  17 => 1,  92 => 36,  86 => 14,  79 => 40,  77 => 11,  57 => 15,  46 => 10,  37 => 8,  33 => 6,  29 => 5,  24 => 6,  19 => 2,  135 => 50,  129 => 33,  122 => 31,  116 => 42,  113 => 40,  108 => 40,  104 => 22,  102 => 37,  94 => 33,  89 => 20,  87 => 28,  84 => 28,  81 => 31,  73 => 10,  70 => 26,  67 => 19,  62 => 6,  59 => 21,  55 => 14,  51 => 18,  48 => 10,  41 => 9,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
