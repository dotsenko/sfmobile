<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b831bb2009d01a78d265e011ffc22d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute($this->getContext($context, "user"), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  45 => 13,  36 => 6,  21 => 3,  85 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 15,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 16,  52 => 15,  72 => 16,  64 => 6,  53 => 13,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 24,  74 => 27,  47 => 19,  32 => 11,  42 => 9,  26 => 3,  23 => 4,  97 => 16,  95 => 21,  88 => 14,  78 => 25,  71 => 24,  40 => 8,  25 => 4,  22 => 3,  17 => 1,  92 => 36,  86 => 28,  79 => 11,  29 => 4,  24 => 11,  19 => 2,  69 => 20,  63 => 22,  58 => 5,  49 => 14,  43 => 15,  37 => 6,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 42,  99 => 34,  96 => 37,  91 => 32,  82 => 27,  77 => 25,  75 => 10,  57 => 15,  50 => 13,  46 => 11,  44 => 11,  39 => 7,  33 => 6,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 31,  87 => 32,  84 => 28,  81 => 31,  73 => 21,  70 => 26,  67 => 7,  62 => 24,  59 => 21,  55 => 14,  51 => 18,  48 => 8,  41 => 10,  38 => 7,  35 => 6,  31 => 3,  28 => 4,);
    }
}
