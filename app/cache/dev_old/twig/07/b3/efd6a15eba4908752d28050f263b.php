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
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_gallery_);
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 25
            echo "                <li>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            if (isset($context["g"])) { $_g_ = $context["g"]; } else { $_g_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_g_, "img"), "html", null, true);
            echo "\" rel=\"external\">
                         <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/"), "html", null, true);
            if (isset($context["g"])) { $_g_ = $context["g"]; } else { $_g_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_g_, "imgmin"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["g"])) { $_g_ = $context["g"]; } else { $_g_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_g_, "title"), "html", null, true);
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
        return array (  70 => 13,  59 => 36,  53 => 15,  126 => 47,  155 => 37,  141 => 39,  129 => 33,  125 => 32,  120 => 30,  114 => 27,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 40,  134 => 44,  123 => 40,  118 => 39,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 37,  122 => 31,  107 => 27,  101 => 26,  95 => 16,  82 => 25,  67 => 12,  102 => 19,  89 => 22,  56 => 5,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 30,  147 => 47,  127 => 43,  113 => 34,  78 => 16,  64 => 16,  32 => 5,  50 => 14,  47 => 12,  39 => 8,  25 => 3,  22 => 4,  34 => 6,  117 => 42,  112 => 41,  109 => 20,  104 => 37,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 3,  23 => 1,  17 => 1,  92 => 28,  86 => 21,  79 => 40,  57 => 35,  46 => 7,  29 => 5,  24 => 4,  19 => 1,  69 => 9,  63 => 14,  55 => 9,  49 => 20,  43 => 7,  41 => 9,  37 => 8,  20 => 2,  157 => 26,  149 => 44,  145 => 43,  142 => 42,  132 => 39,  110 => 26,  106 => 34,  98 => 25,  93 => 24,  90 => 28,  83 => 13,  81 => 26,  73 => 26,  61 => 15,  52 => 21,  48 => 10,  45 => 13,  40 => 13,  36 => 5,  33 => 6,  30 => 4,  27 => 3,  144 => 46,  138 => 38,  130 => 46,  124 => 24,  121 => 36,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 32,  88 => 16,  85 => 26,  77 => 11,  74 => 15,  71 => 19,  65 => 22,  62 => 6,  58 => 8,  54 => 34,  51 => 18,  42 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
