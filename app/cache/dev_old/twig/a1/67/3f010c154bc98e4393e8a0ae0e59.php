<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_a1673f010c154bc98e4393e8a0ae0e59 extends Twig_Template
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
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if ($this->getAttribute($_trace_, "function")) {
            // line 2
            echo "                at ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_trace_, "class") . $this->getAttribute($_trace_, "type")) . $this->getAttribute($_trace_, "function")), "html", null, true);
            echo "(";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($_trace_, "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "                at n/a
";
        }
        // line 6
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if (($this->getAttribute($_trace_, "file", array(), "any", true, true) && $this->getAttribute($_trace_, "line", array(), "any", true, true))) {
            // line 7
            echo "                    in ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "file"), "html", null, true);
            echo " line ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  117 => 22,  112 => 21,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 9,  44 => 6,  26 => 4,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  79 => 40,  57 => 22,  46 => 7,  29 => 6,  24 => 4,  19 => 1,  69 => 14,  63 => 10,  55 => 8,  49 => 6,  43 => 15,  41 => 14,  37 => 7,  20 => 2,  157 => 26,  149 => 44,  145 => 43,  142 => 42,  132 => 39,  110 => 35,  106 => 34,  98 => 33,  93 => 32,  90 => 31,  83 => 27,  81 => 26,  73 => 20,  61 => 15,  52 => 13,  48 => 11,  45 => 10,  40 => 8,  36 => 6,  33 => 7,  30 => 4,  27 => 6,  144 => 54,  138 => 40,  130 => 46,  124 => 24,  121 => 36,  115 => 40,  111 => 38,  108 => 37,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 5,  31 => 7,  28 => 3,);
    }
}
