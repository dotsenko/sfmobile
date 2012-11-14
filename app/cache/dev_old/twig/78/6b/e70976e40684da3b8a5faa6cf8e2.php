<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_786be70976e40684da3b8a5faa6cf8e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true);
        echo " (";
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  127 => 43,  113 => 34,  78 => 26,  64 => 23,  32 => 11,  50 => 6,  47 => 8,  39 => 15,  25 => 3,  22 => 4,  34 => 6,  117 => 36,  112 => 21,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 24,  44 => 7,  26 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 28,  79 => 40,  57 => 22,  46 => 7,  29 => 6,  24 => 6,  19 => 1,  69 => 14,  63 => 10,  55 => 9,  49 => 6,  43 => 7,  41 => 14,  37 => 7,  20 => 2,  157 => 26,  149 => 44,  145 => 43,  142 => 42,  132 => 44,  110 => 35,  106 => 34,  98 => 33,  93 => 32,  90 => 31,  83 => 27,  81 => 26,  73 => 20,  61 => 22,  52 => 13,  48 => 19,  45 => 6,  40 => 8,  36 => 5,  33 => 4,  30 => 4,  27 => 3,  144 => 46,  138 => 45,  130 => 46,  124 => 24,  121 => 36,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 4,  31 => 4,  28 => 4,);
    }
}
