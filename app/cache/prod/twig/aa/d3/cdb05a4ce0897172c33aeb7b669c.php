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
        return array (  118 => 31,  105 => 27,  100 => 26,  115 => 47,  96 => 37,  85 => 32,  155 => 37,  150 => 30,  143 => 40,  138 => 38,  136 => 37,  125 => 32,  114 => 27,  110 => 26,  101 => 21,  91 => 15,  83 => 13,  65 => 7,  56 => 5,  45 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 39,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 24,  90 => 32,  54 => 34,  133 => 44,  124 => 41,  111 => 37,  107 => 42,  80 => 26,  69 => 9,  63 => 18,  60 => 16,  52 => 21,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  44 => 11,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 30,  117 => 44,  103 => 41,  99 => 34,  74 => 15,  47 => 12,  32 => 11,  42 => 9,  39 => 9,  30 => 4,  26 => 3,  27 => 3,  23 => 1,  97 => 25,  95 => 16,  88 => 29,  82 => 27,  78 => 16,  75 => 24,  71 => 14,  49 => 20,  40 => 13,  25 => 4,  22 => 3,  20 => 2,  17 => 1,  92 => 36,  86 => 21,  79 => 40,  77 => 11,  57 => 35,  46 => 10,  37 => 8,  33 => 6,  29 => 4,  24 => 3,  19 => 2,  135 => 50,  129 => 33,  122 => 31,  116 => 42,  113 => 40,  108 => 40,  104 => 22,  102 => 37,  94 => 33,  89 => 22,  87 => 28,  84 => 28,  81 => 31,  73 => 10,  70 => 13,  67 => 12,  62 => 6,  59 => 36,  55 => 14,  51 => 18,  48 => 10,  41 => 9,  38 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
