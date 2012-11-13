<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_e746909eb94da37100c0e0f108d171fb extends Twig_Template
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
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "class"), "html", null, true);
            echo "\">";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_trace_, "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_trace_, "type") . $this->getAttribute($_trace_, "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute($_trace_, "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if (((($this->getAttribute($_trace_, "file", array(), "any", true, true) && $this->getAttribute($_trace_, "file")) && $this->getAttribute($_trace_, "line", array(), "any", true, true)) && $this->getAttribute($_trace_, "line"))) {
            // line 11
            echo "    ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo (($this->getAttribute($_trace_, "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->env->getExtension('code')->formatFile($this->getAttribute($_trace_, "file"), $this->getAttribute($_trace_, "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            if (isset($context["prefix"])) { $_prefix_ = $context["prefix"]; } else { $_prefix_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, (($_prefix_ . "_") . $_i_), "html", null, true);
            echo "'); switchIcons('icon_";
            if (isset($context["prefix"])) { $_prefix_ = $context["prefix"]; } else { $_prefix_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, (($_prefix_ . "_") . $_i_), "html", null, true);
            echo "_open', 'icon_";
            if (isset($context["prefix"])) { $_prefix_ = $context["prefix"]; } else { $_prefix_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, (($_prefix_ . "_") . $_i_), "html", null, true);
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            if (isset($context["prefix"])) { $_prefix_ = $context["prefix"]; } else { $_prefix_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, (($_prefix_ . "_") . $_i_), "html", null, true);
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo (((0 == $_i_)) ? ("display") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            if (isset($context["prefix"])) { $_prefix_ = $context["prefix"]; } else { $_prefix_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, (($_prefix_ . "_") . $_i_), "html", null, true);
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
            echo "\" style=\"visibility: ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo (((0 == $_i_)) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            if (isset($context["prefix"])) { $_prefix_ = $context["prefix"]; } else { $_prefix_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, (($_prefix_ . "_") . $_i_), "html", null, true);
            echo "\" style=\"display: ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo (((0 == $_i_)) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute($_trace_, "file"), $this->getAttribute($_trace_, "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  89 => 16,  63 => 14,  56 => 12,  27 => 3,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 83,  219 => 80,  217 => 79,  214 => 78,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 54,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 44,  127 => 43,  113 => 34,  83 => 27,  78 => 15,  64 => 23,  61 => 13,  32 => 5,  55 => 9,  48 => 19,  45 => 6,  36 => 5,  43 => 7,  50 => 11,  47 => 10,  39 => 15,  25 => 3,  22 => 4,  34 => 6,  30 => 4,  117 => 36,  112 => 20,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 24,  44 => 9,  26 => 4,  23 => 5,  20 => 2,  17 => 1,  92 => 39,  86 => 28,  79 => 40,  57 => 22,  46 => 7,  37 => 7,  33 => 4,  29 => 6,  24 => 4,  19 => 1,  144 => 46,  138 => 45,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 38,  108 => 31,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 7,  35 => 4,  31 => 9,  28 => 4,);
    }
}
