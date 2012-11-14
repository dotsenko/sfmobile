<?php

/* ::base.html.twig */
class __TwigTemplate_ab1dcc92ac74cd07f9acd4a93164d5a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'titlepage' => array($this, 'block_titlepage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "</body>
</html>


<body>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Mobile!";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.6.4.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/klass.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/code.photoswipe.jquery-3.0.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/photoswipe.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/jquery.mobile-1.0.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "    <div data-role=\"page\" data-add-back-btn=\"true\">

        <div data-role=\"header\" id=\"header\">
            <span>
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home.jpg"), "html", null, true);
        echo "\" height=\"30px\" width=\"30px\" style=\"float:left; padding-left: 1%;padding-top: 0.2%;\" >
                </a>
            </span>
            ";
        // line 30
        $this->displayBlock('titlepage', $context, $blocks);
        // line 31
        echo "            <span>
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" height=\"30px\" width=\"30px\" style=\"float:right; padding-right: 1%;padding-top: 0.2%;\" >
                </a>
            </span>
        </div><!-- /header -->
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        <div data-role=\"footer\" data-theme=\"a\">
            ";
        // line 39
        echo $this->env->getExtension('actions')->renderAction("MobileFrontendBundle:Footer:index", array(), array());
        // line 40
        echo "        </div>
        <!-- /Footer -->
    </div><!-- /page -->
";
    }

    // line 30
    public function block_titlepage($context, array $blocks = array())
    {
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  150 => 30,  143 => 40,  141 => 39,  138 => 38,  136 => 37,  129 => 33,  125 => 32,  122 => 31,  120 => 30,  114 => 27,  110 => 26,  104 => 22,  101 => 21,  95 => 16,  91 => 15,  86 => 14,  83 => 13,  77 => 11,  73 => 10,  69 => 9,  65 => 7,  62 => 6,  56 => 5,  47 => 44,  33 => 6,  29 => 5,  23 => 1,  63 => 18,  52 => 15,  49 => 14,  45 => 21,  38 => 18,  35 => 13,  30 => 4,  27 => 3,);
    }
}
