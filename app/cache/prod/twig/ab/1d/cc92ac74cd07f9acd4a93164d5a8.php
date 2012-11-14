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
        return array (  155 => 37,  150 => 30,  143 => 40,  138 => 38,  136 => 37,  125 => 32,  114 => 27,  110 => 26,  101 => 21,  91 => 15,  83 => 13,  65 => 7,  56 => 5,  45 => 21,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 39,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 9,  63 => 18,  60 => 16,  52 => 12,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  44 => 11,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 30,  117 => 44,  103 => 36,  99 => 34,  74 => 27,  47 => 44,  32 => 11,  42 => 10,  39 => 9,  30 => 9,  26 => 3,  27 => 3,  23 => 1,  97 => 34,  95 => 16,  88 => 29,  82 => 27,  78 => 25,  75 => 24,  71 => 14,  49 => 11,  40 => 13,  25 => 4,  22 => 3,  20 => 2,  17 => 1,  92 => 20,  86 => 14,  79 => 40,  77 => 11,  57 => 15,  46 => 10,  37 => 8,  33 => 6,  29 => 5,  24 => 6,  19 => 2,  135 => 50,  129 => 33,  122 => 31,  116 => 42,  113 => 40,  108 => 40,  104 => 22,  102 => 37,  94 => 33,  89 => 20,  87 => 28,  84 => 28,  81 => 26,  73 => 10,  70 => 26,  67 => 19,  62 => 6,  59 => 23,  55 => 14,  51 => 13,  48 => 10,  41 => 9,  38 => 18,  35 => 13,  31 => 4,  28 => 3,);
    }
}
