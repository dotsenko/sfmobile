<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c574ed7ed147b0f5e0f8fbe32665fffe extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  92 => 39,  86 => 6,  79 => 40,  57 => 22,  46 => 14,  29 => 6,  24 => 4,  19 => 1,  69 => 14,  63 => 10,  55 => 8,  49 => 6,  43 => 15,  41 => 14,  37 => 8,  20 => 1,  157 => 26,  149 => 44,  145 => 43,  142 => 42,  132 => 39,  110 => 35,  106 => 34,  98 => 33,  93 => 32,  90 => 31,  83 => 27,  81 => 26,  73 => 20,  61 => 15,  52 => 13,  48 => 11,  45 => 10,  40 => 8,  36 => 6,  33 => 7,  30 => 4,  27 => 6,  144 => 54,  138 => 40,  130 => 46,  124 => 42,  121 => 36,  115 => 40,  111 => 38,  108 => 37,  99 => 32,  94 => 29,  91 => 28,  88 => 30,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 9,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 8,  31 => 7,  28 => 3,);
    }
}
