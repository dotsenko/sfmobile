<?php

/* MobileFrontendBundle:Contact:index.html.twig */
class __TwigTemplate_257687c7a3fbe74064908477f5d907b5 extends Twig_Template
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
        echo "    <h1>Contact</h1>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
        <div data-role=\"content\">
            <div class=\"ui-body ui-body-b ui-corner-all\">
                <div class=\"contact-thankyou\" style=\"display: none;\">
                    Thank you.  Your message has been sent.  We will get back to you as soon as we can.
                </div>
                <div class=\"contact-form\">

                    <p class=\"mandatory\">
                        * indicates Mandatory Field
                    </p>
                    <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contactspage"), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " novalidate>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"firstname\">First Name*:</label>
                            ";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "fname"));
        echo "
                           <span class=\"errors\"> ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "fname"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"surname\">Last Name:</label>
                            ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "lname"));
        echo "
                            <span class=\"errors\">  ";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "lname"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"email\">Email Address*:</label>
                            ";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "email"));
        echo "
                            <span class=\"errors\">   ";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "email"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"mobilephone\">Mobile Number:</label>
                            ";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "phone"));
        echo "
                            <span class=\"errors\">  ";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "phone"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\">
                            <label class=\"ui-input-text\" for=\"message\">Message*:</label>
                            ";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "message"));
        echo "
                            <span class=\"errors\">  ";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "message"));
        echo " </span>
                        </div>

                            <input type=\"submit\" value=\"Send\" >

                        ";
        // line 47
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_form_);
        echo "
                    </form>
                </div><!-- //.contact-form -->
            </div>
        </div><!-- /content -->



";
    }

    public function getTemplateName()
    {
        return "MobileFrontendBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 33,  95 => 29,  82 => 25,  73 => 26,  67 => 17,  52 => 11,  102 => 19,  89 => 16,  63 => 14,  56 => 12,  27 => 2,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 43,  113 => 34,  83 => 25,  78 => 27,  64 => 16,  61 => 15,  32 => 5,  55 => 9,  48 => 10,  45 => 6,  36 => 5,  43 => 7,  50 => 11,  47 => 10,  39 => 8,  25 => 3,  22 => 4,  34 => 6,  30 => 3,  117 => 42,  112 => 41,  109 => 20,  104 => 37,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 4,  23 => 5,  20 => 2,  17 => 1,  92 => 28,  86 => 31,  79 => 40,  57 => 14,  46 => 7,  37 => 7,  33 => 4,  29 => 6,  24 => 4,  19 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 32,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 22,  62 => 15,  58 => 8,  54 => 13,  51 => 18,  42 => 9,  38 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
