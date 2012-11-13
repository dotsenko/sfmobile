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
        return array (  118 => 31,  105 => 27,  100 => 26,  97 => 25,  93 => 24,  89 => 22,  86 => 21,  78 => 16,  74 => 15,  70 => 13,  67 => 12,  59 => 36,  57 => 35,  54 => 34,  52 => 21,  49 => 20,  47 => 12,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
