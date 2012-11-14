<?php

/* MobileFrontendBundle:Gallery:index.html.twig */
class __TwigTemplate_07b3efd6a15eba4908752d28050f263b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "
    <div data-role=\"page\" data-add-back-btn=\"true\" id=\"gallery-page\">
        <div data-role=\"header\" id=\"header\">
            <span>
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/home.jpg"), "html", null, true);
        echo "\" height=\"30px\" width=\"30px\" style=\"float:left; padding-left: 1%;padding-top: 0.2%;\" >
                </a>
            </span>
        ";
        // line 12
        $this->displayBlock('titlepage', $context, $blocks);
        // line 20
        echo "        </div><!-- /header -->
     ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        <div data-role=\"footer\" data-theme=\"a\">
            ";
        // line 35
        echo $this->env->getExtension('actions')->renderAction("MobileFrontendBundle:Footer:index", array(), array());
        // line 36
        echo "        </div>
        <!-- /Footer -->
    </div><!-- /page -->

";
    }

    // line 12
    public function block_titlepage($context, array $blocks = array())
    {
        // line 13
        echo "            <h1>Gallery</h1>
            <span>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" height=\"30px\" width=\"30px\" style=\"float:right; padding-right: 1%;padding-top: 0.2%;\" >
                </a>
            </span>
     ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "        <div data-role=\"content\">
            <ul class=\"gallery\">
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "gallery"));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 25
            echo "                <li>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "g"), "img"), "html", null, true);
            echo "\" rel=\"external\">
                         <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "g"), "imgmin"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "g"), "title"), "html", null, true);
            echo "\"  />
                     </a>
                </li>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "            </ul>
         </div><!-- /content -->
     ";
    }

    public function getTemplateName()
    {
        return "MobileFrontendBundle:Gallery:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  105 => 27,  100 => 26,  115 => 47,  96 => 37,  85 => 32,  155 => 37,  150 => 30,  143 => 40,  138 => 38,  136 => 37,  125 => 32,  114 => 27,  110 => 26,  101 => 21,  91 => 15,  83 => 13,  65 => 7,  56 => 5,  45 => 13,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 39,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 24,  90 => 32,  54 => 34,  133 => 44,  124 => 41,  111 => 37,  107 => 42,  80 => 26,  69 => 9,  63 => 18,  60 => 16,  52 => 21,  72 => 16,  64 => 15,  53 => 13,  34 => 5,  44 => 11,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 30,  117 => 44,  103 => 41,  99 => 34,  74 => 15,  47 => 12,  32 => 11,  42 => 10,  39 => 9,  30 => 4,  26 => 3,  27 => 3,  23 => 1,  97 => 25,  95 => 16,  88 => 29,  82 => 27,  78 => 16,  75 => 24,  71 => 14,  49 => 20,  40 => 13,  25 => 4,  22 => 3,  20 => 2,  17 => 1,  92 => 36,  86 => 21,  79 => 40,  77 => 11,  57 => 35,  46 => 10,  37 => 8,  33 => 6,  29 => 5,  24 => 6,  19 => 2,  135 => 50,  129 => 33,  122 => 31,  116 => 42,  113 => 40,  108 => 40,  104 => 22,  102 => 37,  94 => 33,  89 => 22,  87 => 28,  84 => 28,  81 => 31,  73 => 10,  70 => 13,  67 => 12,  62 => 6,  59 => 36,  55 => 14,  51 => 18,  48 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
