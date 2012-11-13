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
    <a href=\"share-dialog.html\"  data-role=\"button\" data-icon=\"star\" data-theme=\"a\" data-rel=\"dialog\">Share</a>
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
        return array (  41 => 10,  34 => 6,  20 => 2,  17 => 1,  100 => 21,  94 => 16,  90 => 15,  85 => 14,  82 => 13,  76 => 11,  72 => 10,  68 => 9,  64 => 7,  61 => 6,  55 => 5,  45 => 22,  43 => 21,  36 => 18,  33 => 13,  31 => 6,  27 => 5,  21 => 3,  56 => 19,  54 => 18,  48 => 15,  39 => 9,  35 => 8,  29 => 4,  26 => 3,);
    }
}
