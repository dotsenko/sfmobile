<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_aad3cdb05a4ce0897172c33aeb7b669c extends Twig_Template
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
        echo "    <h1>Login</h1>
 ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <div data-role=\"content\">
        ";
        // line 9
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
    </div><!-- /content -->

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  98 => 25,  93 => 24,  70 => 13,  59 => 36,  49 => 20,  41 => 9,  53 => 15,  155 => 37,  141 => 39,  129 => 33,  125 => 32,  120 => 30,  114 => 27,  110 => 26,  69 => 9,  126 => 47,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 40,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 37,  122 => 31,  107 => 27,  101 => 26,  95 => 16,  82 => 25,  73 => 10,  67 => 12,  52 => 21,  102 => 19,  89 => 22,  63 => 14,  56 => 5,  27 => 3,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 30,  147 => 47,  132 => 39,  127 => 43,  113 => 34,  83 => 13,  78 => 16,  64 => 16,  61 => 15,  32 => 5,  55 => 9,  48 => 10,  45 => 13,  36 => 5,  43 => 7,  50 => 14,  47 => 12,  39 => 8,  25 => 3,  22 => 4,  34 => 6,  30 => 4,  117 => 42,  112 => 41,  109 => 20,  104 => 22,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 3,  23 => 1,  20 => 2,  17 => 1,  92 => 28,  86 => 21,  79 => 40,  57 => 35,  46 => 7,  37 => 8,  33 => 6,  29 => 4,  24 => 4,  19 => 1,  144 => 46,  138 => 38,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 15,  88 => 16,  85 => 26,  77 => 11,  74 => 15,  71 => 19,  65 => 7,  62 => 6,  58 => 8,  54 => 34,  51 => 18,  42 => 9,  38 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
