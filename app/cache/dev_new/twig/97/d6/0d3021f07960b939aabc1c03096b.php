<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_97d60d3021f07960b939aabc1c03096b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  66 => 23,  45 => 13,  36 => 6,  21 => 3,  85 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 15,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  80 => 26,  60 => 16,  52 => 15,  72 => 16,  64 => 6,  53 => 12,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 24,  74 => 27,  47 => 19,  32 => 11,  42 => 9,  26 => 3,  23 => 4,  97 => 16,  95 => 21,  88 => 14,  78 => 25,  71 => 24,  40 => 8,  25 => 4,  22 => 3,  17 => 1,  92 => 36,  86 => 28,  79 => 11,  29 => 4,  24 => 11,  19 => 2,  69 => 20,  63 => 22,  58 => 14,  49 => 11,  43 => 15,  37 => 7,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 42,  99 => 34,  96 => 37,  91 => 32,  82 => 27,  77 => 25,  75 => 10,  57 => 15,  50 => 13,  46 => 11,  44 => 9,  39 => 7,  33 => 6,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 31,  87 => 32,  84 => 28,  81 => 31,  73 => 21,  70 => 20,  67 => 7,  62 => 24,  59 => 21,  55 => 14,  51 => 18,  48 => 8,  41 => 10,  38 => 7,  35 => 6,  31 => 5,  28 => 4,);
    }
}
