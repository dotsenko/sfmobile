<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_774957b7b609147c2a29950ee189a082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony\">
                </a>
                <form id=\"symfony-search\" method=\"GET\" action=\"http://symfony.com/search\">
                    <label for=\"symfony-search-field\"><span>Search on Symfony Website</span></label>
                    <input name=\"q\" id=\"symfony-search-field\" type=\"search\" placeholder=\"Search on Symfony website\" class=\"medium_txt\">
                    <input type=\"submit\" class=\"symfony-button-grey\" value=\"OK\" />
                </form>
            </div>

            ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 23
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('content_header', $context, $blocks);
        // line 37
        echo "
            <div class=\"symfony-content\">
                ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "            </div>

            ";
        // line 43
        if (array_key_exists("code", $context)) {
            // line 44
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 45
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 47
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 28
    public function block_content_header($context, array $blocks = array())
    {
        // line 29
        echo "                <ul id=\"menu\">
                    ";
        // line 30
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 33
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 30
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 31
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  114 => 30,  76 => 27,  61 => 23,  18 => 1,  65 => 22,  66 => 23,  45 => 13,  36 => 6,  21 => 1,  85 => 43,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 15,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 29,  60 => 16,  52 => 15,  72 => 16,  64 => 24,  53 => 12,  34 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 31,  120 => 39,  117 => 44,  103 => 24,  74 => 27,  47 => 13,  32 => 5,  42 => 9,  26 => 3,  23 => 3,  97 => 16,  95 => 47,  88 => 14,  78 => 25,  71 => 24,  40 => 7,  25 => 4,  22 => 3,  17 => 1,  92 => 36,  86 => 28,  79 => 39,  29 => 4,  24 => 11,  19 => 2,  69 => 20,  63 => 22,  58 => 14,  49 => 11,  43 => 12,  37 => 6,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 47,  107 => 42,  99 => 34,  96 => 37,  91 => 32,  82 => 27,  77 => 25,  75 => 37,  57 => 15,  50 => 13,  46 => 11,  44 => 9,  39 => 10,  33 => 6,  30 => 4,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 40,  108 => 28,  104 => 24,  102 => 6,  94 => 33,  89 => 31,  87 => 44,  84 => 28,  81 => 41,  73 => 28,  70 => 27,  67 => 7,  62 => 24,  59 => 22,  55 => 14,  51 => 18,  48 => 8,  41 => 10,  38 => 7,  35 => 7,  31 => 6,  28 => 3,);
    }
}
