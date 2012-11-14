<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1b5c8805f08c804bea4407a770c3d570 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute($_exception_, "trace"))) {
            // line 2
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $_trace_));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  47 => 5,  39 => 8,  25 => 3,  22 => 4,  34 => 6,  117 => 22,  112 => 21,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 9,  44 => 6,  26 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  79 => 40,  57 => 22,  46 => 7,  29 => 6,  24 => 4,  19 => 1,  69 => 14,  63 => 10,  55 => 8,  49 => 6,  43 => 7,  41 => 14,  37 => 7,  20 => 2,  157 => 26,  149 => 44,  145 => 43,  142 => 42,  132 => 39,  110 => 35,  106 => 34,  98 => 33,  93 => 32,  90 => 31,  83 => 27,  81 => 26,  73 => 20,  61 => 15,  52 => 13,  48 => 11,  45 => 10,  40 => 8,  36 => 6,  33 => 4,  30 => 3,  27 => 6,  144 => 54,  138 => 40,  130 => 46,  124 => 24,  121 => 36,  115 => 40,  111 => 38,  108 => 37,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 4,  31 => 5,  28 => 4,);
    }
}
