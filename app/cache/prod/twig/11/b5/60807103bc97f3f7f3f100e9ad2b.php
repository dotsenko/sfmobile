<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_11b560807103bc97f3f7f3f100e9ad2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["confirmationUrl"])) { $_confirmationUrl_ = $context["confirmationUrl"]; } else { $_confirmationUrl_ = null; }
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute($_user_, "username"), "%confirmationUrl%" => $_confirmationUrl_), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["confirmationUrl"])) { $_confirmationUrl_ = $context["confirmationUrl"]; } else { $_confirmationUrl_ = null; }
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute($_user_, "username"), "%confirmationUrl%" => $_confirmationUrl_), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  98 => 25,  93 => 24,  70 => 13,  59 => 36,  49 => 20,  41 => 9,  53 => 15,  155 => 37,  141 => 39,  129 => 33,  125 => 32,  120 => 30,  114 => 27,  110 => 26,  69 => 9,  126 => 47,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 40,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 37,  122 => 31,  107 => 27,  101 => 26,  95 => 16,  82 => 25,  73 => 10,  67 => 12,  52 => 21,  102 => 19,  89 => 22,  63 => 14,  56 => 5,  27 => 3,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 30,  147 => 47,  132 => 39,  127 => 43,  113 => 34,  83 => 13,  78 => 16,  64 => 16,  61 => 15,  32 => 5,  55 => 9,  48 => 10,  45 => 13,  36 => 6,  43 => 10,  50 => 11,  47 => 12,  39 => 6,  25 => 3,  22 => 6,  34 => 6,  30 => 4,  117 => 42,  112 => 41,  109 => 20,  104 => 22,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 3,  23 => 1,  20 => 1,  17 => 1,  92 => 28,  86 => 21,  79 => 40,  57 => 35,  46 => 7,  37 => 8,  33 => 6,  29 => 4,  24 => 11,  19 => 1,  144 => 46,  138 => 38,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 15,  88 => 16,  85 => 26,  77 => 11,  74 => 15,  71 => 19,  65 => 7,  62 => 6,  58 => 8,  54 => 34,  51 => 18,  42 => 8,  38 => 7,  35 => 6,  31 => 3,  28 => 1,);
    }
}
