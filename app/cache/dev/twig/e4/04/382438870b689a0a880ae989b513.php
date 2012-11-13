<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e404382438870b689a0a880ae989b513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</p>
</div>

<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\"  class=\"btn-logout\">
    <input type=\"button\" value=\"Edit\">
</a>

<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\"  class=\"btn-logout\">
    <input type=\"button\" value=\"Logout\">
</a>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  34 => 6,  20 => 2,  17 => 1,  100 => 21,  94 => 16,  90 => 15,  85 => 14,  82 => 13,  76 => 11,  72 => 10,  68 => 9,  64 => 7,  61 => 6,  55 => 5,  45 => 22,  43 => 21,  36 => 18,  33 => 13,  31 => 6,  27 => 5,  21 => 1,  56 => 19,  54 => 18,  48 => 15,  39 => 9,  35 => 8,  29 => 4,  26 => 3,);
    }
}
