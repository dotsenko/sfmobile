<?php

/* MobileFrontendBundle:About:index.html.twig */
class __TwigTemplate_5a59b18b9a9edf028c52ec792cae4feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'titlepage' => array($this, 'block_titlepage'),
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

    // line 2
    public function block_titlepage($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>About</h1>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        <div data-role=\"content\">

            <p>Louvre - is not only an architectural monument, like the palace of French kings, but also one of the most famous museums in the world. It boasts an enormous collection of various exhibits. Here you can find the reliefs of the Assyrian palaces, Egyptian painting, and more.</p>
            75058 Paris CEDEX 01 <br/>
            France<br/>
            Telephone :<br/>
            + 33 (0)1 40 20 50 50<br/>
            <iframe src=\"http://www.map-generator.org/0b9a5471-76ef-488e-b325-69434fcfbf6b/iframe-map.aspx\" scrolling=\"no\" height=\"200px\" width=\"200px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>

        </div><!-- /content -->



";
    }

    public function getTemplateName()
    {
        return "MobileFrontendBundle:About:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  30 => 3,  27 => 2,);
    }
}
