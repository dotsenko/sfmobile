<?php

/* MobileFrontendBundle:Footer:index.html.twig */
class __TwigTemplate_4eb5f159258ab44c3c24018885d470cd extends Twig_Template
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
        echo "<div class=\"ui-bar\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sharepage"), "html", null, true);
        echo "\"  data-role=\"button\" data-icon=\"star\" data-theme=\"a\" data-rel=\"dialog\">Share</a>
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contactspage"), "html", null, true);
        echo "\" data-role=\"button\" data-icon=\"plus\" data-theme=\"a\">Contact</a>
    <a href=\"\" data-role=\"button\" data-icon=\"arrow-u\" data-theme=\"a\" style=\"float:right;\" class=\"returnTopAction\">Return top</a>
</div>";
    }

    public function getTemplateName()
    {
        return "MobileFrontendBundle:Footer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  20 => 2,  17 => 1,  155 => 37,  150 => 30,  143 => 40,  141 => 39,  138 => 38,  136 => 37,  129 => 33,  125 => 32,  122 => 31,  120 => 30,  114 => 27,  110 => 26,  104 => 22,  101 => 21,  95 => 16,  91 => 15,  86 => 14,  83 => 13,  77 => 11,  73 => 10,  69 => 9,  65 => 7,  62 => 6,  56 => 5,  47 => 44,  33 => 6,  29 => 5,  23 => 1,  63 => 18,  52 => 15,  49 => 14,  45 => 21,  38 => 18,  35 => 13,  30 => 4,  27 => 3,);
    }
}
