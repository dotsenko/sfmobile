<?php

/* MobileFrontendBundle:Default:index.html.twig */
class __TwigTemplate_942846ef69ab6de76bcdb6d87e6cedcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <ul data-role=\"listview\" data-inset=\"true\" data-theme=\"a\">
        <li>
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gallerypage"), "html", null, true);
        echo "\">Gallery</a>
        </li>
        <li>
            <a href=\"about.html\">About</a>
        </li>
        <li>
            <a href=\"features.html\">Features</a>
        </li>
        <li>
            <a href=\"typography.html\">Typography</a>
        </li>
        <li>
            <a href=\"contact.html\">Contact</a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "MobileFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  29 => 4,  26 => 3,);
    }
}
