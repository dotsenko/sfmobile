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
        return array (  155 => 37,  141 => 39,  129 => 33,  125 => 32,  120 => 30,  114 => 27,  110 => 26,  69 => 9,  126 => 47,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 40,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 37,  122 => 31,  107 => 34,  101 => 21,  95 => 16,  82 => 25,  73 => 10,  67 => 17,  52 => 11,  102 => 19,  89 => 16,  63 => 14,  56 => 5,  27 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 30,  147 => 47,  132 => 39,  127 => 43,  113 => 34,  83 => 13,  78 => 27,  64 => 16,  61 => 15,  32 => 5,  55 => 9,  48 => 10,  45 => 21,  36 => 5,  43 => 7,  50 => 11,  47 => 44,  39 => 8,  25 => 3,  22 => 4,  34 => 6,  30 => 3,  117 => 42,  112 => 41,  109 => 20,  104 => 22,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 4,  23 => 1,  20 => 2,  17 => 1,  92 => 28,  86 => 14,  79 => 40,  57 => 14,  46 => 7,  37 => 7,  33 => 6,  29 => 5,  24 => 4,  19 => 1,  144 => 46,  138 => 38,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 15,  88 => 16,  85 => 26,  77 => 11,  74 => 20,  71 => 19,  65 => 7,  62 => 6,  58 => 8,  54 => 13,  51 => 18,  42 => 9,  38 => 18,  35 => 13,  31 => 4,  28 => 3,);
    }
}
