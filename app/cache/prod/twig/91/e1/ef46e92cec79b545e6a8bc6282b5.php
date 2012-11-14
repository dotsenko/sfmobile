<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_91e1ef46e92cec79b545e6a8bc6282b5 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  97 => 22,  95 => 21,  88 => 19,  82 => 18,  78 => 17,  75 => 16,  71 => 14,  49 => 8,  40 => 7,  25 => 4,  22 => 4,  20 => 2,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  77 => 39,  57 => 9,  46 => 14,  37 => 8,  33 => 7,  29 => 5,  24 => 3,  19 => 2,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 24,  102 => 37,  94 => 32,  89 => 29,  87 => 28,  84 => 27,  81 => 26,  73 => 21,  70 => 20,  67 => 12,  62 => 16,  59 => 15,  55 => 13,  51 => 11,  48 => 10,  41 => 9,  38 => 6,  35 => 7,  31 => 6,  28 => 3,);
    }
}
