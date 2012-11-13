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
        return array (  155 => 37,  141 => 39,  129 => 33,  125 => 32,  120 => 30,  114 => 27,  110 => 26,  69 => 9,  126 => 47,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 40,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 37,  122 => 31,  107 => 34,  101 => 21,  95 => 16,  82 => 25,  73 => 10,  67 => 17,  52 => 11,  102 => 19,  89 => 16,  63 => 14,  56 => 5,  27 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 30,  147 => 47,  132 => 39,  127 => 43,  113 => 34,  83 => 13,  78 => 27,  64 => 16,  61 => 15,  32 => 5,  55 => 9,  48 => 10,  45 => 21,  36 => 5,  43 => 7,  50 => 11,  47 => 44,  39 => 8,  25 => 3,  22 => 4,  34 => 6,  30 => 3,  117 => 42,  112 => 41,  109 => 20,  104 => 22,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 4,  23 => 1,  20 => 2,  17 => 1,  92 => 28,  86 => 14,  79 => 40,  57 => 14,  46 => 7,  37 => 7,  33 => 6,  29 => 5,  24 => 4,  19 => 1,  144 => 46,  138 => 38,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 15,  88 => 16,  85 => 26,  77 => 11,  74 => 20,  71 => 19,  65 => 7,  62 => 6,  58 => 8,  54 => 13,  51 => 18,  42 => 9,  38 => 6,  35 => 5,  31 => 4,  28 => 3,);
    }
}
