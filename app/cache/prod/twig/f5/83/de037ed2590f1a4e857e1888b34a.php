<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_f583de037ed2590f1a4e857e1888b34a extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email"), "html", null, true);
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            if (isset($context["invalid_username"])) { $_invalid_username_ = $context["invalid_username"]; } else { $_invalid_username_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => $_invalid_username_), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  21 => 2,  98 => 25,  93 => 24,  70 => 13,  59 => 36,  49 => 20,  41 => 9,  53 => 8,  155 => 37,  141 => 39,  129 => 33,  125 => 32,  120 => 30,  114 => 27,  110 => 26,  69 => 18,  126 => 47,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 40,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 27,  66 => 18,  60 => 21,  146 => 50,  136 => 37,  122 => 31,  107 => 27,  101 => 26,  95 => 16,  82 => 25,  73 => 10,  67 => 12,  52 => 11,  102 => 19,  89 => 22,  63 => 14,  56 => 12,  27 => 3,  249 => 96,  239 => 90,  235 => 88,  228 => 84,  224 => 82,  219 => 80,  217 => 79,  214 => 79,  211 => 77,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 30,  147 => 47,  132 => 39,  127 => 43,  113 => 34,  83 => 13,  78 => 16,  64 => 16,  61 => 15,  32 => 6,  55 => 9,  48 => 10,  45 => 13,  36 => 5,  43 => 10,  50 => 11,  47 => 12,  39 => 6,  25 => 4,  22 => 6,  34 => 6,  30 => 3,  117 => 42,  112 => 41,  109 => 20,  104 => 22,  96 => 32,  84 => 14,  80 => 24,  68 => 24,  44 => 9,  26 => 3,  23 => 3,  20 => 1,  17 => 1,  92 => 28,  86 => 21,  79 => 40,  57 => 35,  46 => 9,  37 => 6,  33 => 6,  29 => 4,  24 => 11,  19 => 1,  144 => 46,  138 => 38,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 29,  91 => 15,  88 => 16,  85 => 26,  77 => 11,  74 => 20,  71 => 19,  65 => 7,  62 => 14,  58 => 8,  54 => 34,  51 => 18,  42 => 8,  38 => 6,  35 => 5,  31 => 3,  28 => 1,);
    }
}
