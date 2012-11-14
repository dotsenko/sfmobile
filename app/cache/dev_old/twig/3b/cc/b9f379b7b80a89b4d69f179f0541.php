<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3bccb9f379b7b80a89b4d69f179f0541 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  127 => 43,  113 => 34,  78 => 26,  64 => 23,  32 => 11,  50 => 6,  47 => 5,  39 => 15,  25 => 3,  22 => 4,  34 => 6,  117 => 36,  112 => 21,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 24,  44 => 6,  26 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 28,  79 => 40,  57 => 22,  46 => 7,  29 => 6,  24 => 6,  19 => 1,  69 => 14,  63 => 10,  55 => 9,  49 => 6,  43 => 7,  41 => 14,  37 => 7,  20 => 2,  157 => 26,  149 => 44,  145 => 43,  142 => 42,  132 => 44,  110 => 35,  106 => 34,  98 => 33,  93 => 32,  90 => 31,  83 => 27,  81 => 26,  73 => 20,  61 => 22,  52 => 13,  48 => 19,  45 => 6,  40 => 8,  36 => 5,  33 => 4,  30 => 3,  27 => 6,  144 => 46,  138 => 45,  130 => 46,  124 => 24,  121 => 36,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 4,  31 => 4,  28 => 4,);
    }
}
