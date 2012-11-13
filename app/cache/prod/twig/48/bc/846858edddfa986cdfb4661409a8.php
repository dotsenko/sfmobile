<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_48bc846858edddfa986cdfb4661409a8 extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 44,  127 => 43,  113 => 34,  83 => 27,  78 => 26,  64 => 23,  61 => 22,  32 => 11,  55 => 9,  48 => 19,  45 => 6,  36 => 5,  43 => 7,  50 => 6,  47 => 8,  39 => 15,  25 => 3,  22 => 4,  34 => 6,  30 => 4,  117 => 36,  112 => 21,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 24,  44 => 7,  26 => 4,  23 => 5,  20 => 2,  17 => 1,  92 => 39,  86 => 28,  79 => 40,  57 => 22,  46 => 7,  37 => 7,  33 => 4,  29 => 6,  24 => 6,  19 => 1,  144 => 46,  138 => 45,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 4,  31 => 9,  28 => 4,);
    }
}
