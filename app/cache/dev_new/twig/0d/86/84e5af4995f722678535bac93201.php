<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_0d8684e5af4995f722678535bac93201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  114 => 30,  76 => 27,  61 => 23,  18 => 1,  65 => 22,  66 => 23,  45 => 13,  36 => 6,  21 => 1,  85 => 43,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 15,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 15,  72 => 16,  64 => 24,  53 => 12,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 24,  74 => 27,  47 => 10,  32 => 5,  42 => 9,  26 => 3,  23 => 3,  97 => 16,  95 => 47,  88 => 14,  78 => 25,  71 => 24,  40 => 7,  25 => 4,  22 => 3,  17 => 1,  92 => 36,  86 => 28,  79 => 39,  29 => 4,  24 => 9,  19 => 2,  69 => 20,  63 => 22,  58 => 14,  49 => 11,  43 => 8,  37 => 6,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 42,  99 => 34,  96 => 37,  91 => 32,  82 => 27,  77 => 25,  75 => 37,  57 => 13,  50 => 10,  46 => 9,  44 => 9,  39 => 10,  33 => 5,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 31,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 7,  62 => 24,  59 => 22,  55 => 12,  51 => 11,  48 => 8,  41 => 7,  38 => 6,  35 => 5,  31 => 6,  28 => 3,);
    }
}
