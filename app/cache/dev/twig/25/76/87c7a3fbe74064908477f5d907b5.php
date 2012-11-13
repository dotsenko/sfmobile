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
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " novalidate>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"firstname\">First Name*:</label>
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "fname"));
        echo "
                           <span class=\"errors\"> ";
        // line 22
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "fname"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"surname\">Last Name:</label>
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "lname"));
        echo "
                            <span class=\"errors\">  ";
        // line 27
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "lname"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"email\">Email Address*:</label>
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
                            <span class=\"errors\">   ";
        // line 32
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "email"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\" class=\"text-field\">
                            <label class=\"ui-input-text\" for=\"mobilephone\">Mobile Number:</label>
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "phone"));
        echo "
                            <span class=\"errors\">  ";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "phone"));
        echo " </span>
                        </div>
                        <div data-role=\"fieldcontain\">
                            <label class=\"ui-input-text\" for=\"message\">Message*:</label>
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "message"));
        echo "
                            <span class=\"errors\">  ";
        // line 42
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "message"));
        echo " </span>
                        </div>

                            <input type=\"submit\" value=\"Send\" >

                        ";
        // line 47
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
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
        return array (  115 => 47,  107 => 42,  103 => 41,  96 => 37,  92 => 36,  85 => 32,  81 => 31,  74 => 27,  70 => 26,  63 => 22,  59 => 21,  51 => 18,  38 => 7,  35 => 6,  30 => 3,  27 => 2,);
    }
}
