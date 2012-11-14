<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_274a7d02d47d8a716ed6b813f2c3a318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->setTheme($_form_, array("SensioDistributionBundle::Configurator/form.html.twig", ));
        // line 7
        echo "    ";
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $_index_, "count" => $_count_)));
        // line 8
        echo "
    <h1>Global Secret</h1>
    <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

    ";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($_form_);
        echo "
    <form action=\"";
        // line 13
        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $_index_)), "html", null, true);
        echo " \" method=\"POST\">
        <div class=\"symfony-form-row\">
            ";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_form_, "secret"));
        echo "
            <div class=\"symfony-form-field\">
                ";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "secret"));
        echo "
                <a class=\"symfony-button-grey\" href=\"#\" onclick=\"generateSecret(); return false;\">Generate</a>
                <div class=\"symfony-form-errors\">
                    ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "secret"));
        echo "
                </div>
            </div>
        </div>

        ";
        // line 25
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_form_);
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>

    </form>

    <script type=\"text/javascript\">
        function generateSecret()
        {
            var result = '';
            for (i=0; i < 32; i++) {
                result += Math.round(Math.random()*16).toString(16);
            }
            document.getElementById('distributionbundle_secret_step_secret').value = result;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 56,  352 => 133,  347 => 132,  343 => 130,  340 => 129,  334 => 127,  314 => 121,  308 => 117,  287 => 110,  265 => 99,  262 => 98,  254 => 94,  215 => 76,  204 => 69,  152 => 52,  275 => 107,  272 => 117,  258 => 107,  234 => 95,  218 => 77,  174 => 55,  163 => 72,  455 => 159,  434 => 148,  430 => 147,  418 => 142,  407 => 139,  401 => 138,  371 => 125,  327 => 109,  320 => 106,  312 => 102,  302 => 98,  278 => 108,  257 => 95,  252 => 78,  238 => 73,  226 => 81,  216 => 68,  213 => 67,  195 => 61,  187 => 59,  184 => 69,  718 => 382,  708 => 376,  701 => 370,  684 => 365,  678 => 363,  674 => 361,  666 => 354,  661 => 353,  611 => 327,  603 => 323,  595 => 319,  591 => 317,  589 => 314,  586 => 313,  579 => 310,  560 => 299,  551 => 294,  539 => 285,  533 => 283,  518 => 279,  512 => 277,  506 => 275,  492 => 268,  479 => 263,  472 => 258,  452 => 248,  443 => 242,  432 => 237,  426 => 236,  424 => 144,  415 => 229,  404 => 222,  397 => 136,  384 => 210,  350 => 118,  335 => 177,  322 => 168,  311 => 165,  305 => 100,  295 => 157,  285 => 154,  269 => 149,  247 => 138,  241 => 87,  230 => 83,  225 => 128,  207 => 118,  181 => 104,  712 => 210,  709 => 209,  704 => 374,  697 => 199,  690 => 367,  687 => 195,  683 => 194,  680 => 193,  673 => 191,  670 => 190,  667 => 189,  660 => 187,  657 => 186,  647 => 183,  644 => 182,  641 => 181,  634 => 179,  631 => 339,  628 => 177,  625 => 176,  620 => 149,  600 => 142,  594 => 141,  587 => 140,  583 => 139,  578 => 138,  575 => 137,  569 => 110,  562 => 108,  554 => 105,  548 => 104,  538 => 102,  520 => 97,  514 => 96,  510 => 95,  507 => 94,  493 => 87,  485 => 265,  480 => 85,  477 => 84,  471 => 48,  467 => 47,  458 => 160,  453 => 158,  449 => 41,  444 => 40,  441 => 152,  435 => 36,  431 => 35,  425 => 32,  421 => 231,  416 => 29,  413 => 141,  410 => 140,  402 => 214,  400 => 209,  393 => 204,  386 => 175,  383 => 129,  366 => 124,  358 => 163,  344 => 182,  337 => 128,  333 => 111,  306 => 156,  303 => 114,  299 => 153,  292 => 111,  286 => 147,  284 => 109,  281 => 119,  270 => 132,  267 => 131,  264 => 130,  250 => 103,  233 => 125,  203 => 121,  200 => 76,  190 => 60,  179 => 55,  177 => 69,  170 => 54,  148 => 51,  137 => 83,  105 => 6,  377 => 94,  373 => 137,  370 => 136,  346 => 87,  342 => 86,  324 => 85,  321 => 124,  317 => 167,  313 => 158,  309 => 101,  307 => 79,  304 => 78,  294 => 93,  289 => 121,  245 => 76,  231 => 51,  212 => 119,  185 => 111,  162 => 43,  160 => 71,  140 => 48,  133 => 35,  103 => 38,  10 => 39,  276 => 66,  273 => 86,  268 => 64,  263 => 83,  260 => 82,  251 => 60,  246 => 90,  242 => 99,  237 => 85,  227 => 54,  221 => 52,  197 => 67,  188 => 42,  183 => 59,  169 => 64,  167 => 53,  139 => 40,  116 => 28,  76 => 20,  151 => 47,  131 => 36,  128 => 34,  654 => 350,  649 => 349,  642 => 346,  639 => 189,  633 => 185,  622 => 334,  616 => 146,  610 => 145,  601 => 179,  596 => 178,  590 => 176,  582 => 174,  572 => 172,  568 => 303,  565 => 109,  559 => 157,  553 => 154,  547 => 292,  534 => 101,  529 => 100,  526 => 146,  523 => 280,  511 => 133,  508 => 132,  503 => 159,  501 => 93,  496 => 142,  494 => 132,  491 => 131,  488 => 130,  484 => 126,  475 => 119,  466 => 117,  463 => 253,  460 => 115,  451 => 113,  448 => 243,  445 => 154,  439 => 240,  428 => 108,  417 => 106,  412 => 105,  406 => 104,  403 => 102,  394 => 135,  391 => 133,  388 => 98,  379 => 96,  376 => 126,  367 => 90,  364 => 135,  361 => 134,  356 => 85,  353 => 89,  348 => 81,  345 => 80,  331 => 126,  318 => 123,  300 => 124,  296 => 152,  293 => 75,  290 => 92,  282 => 67,  277 => 153,  274 => 65,  271 => 64,  266 => 84,  259 => 146,  248 => 63,  243 => 127,  240 => 61,  232 => 72,  229 => 124,  223 => 80,  210 => 73,  205 => 79,  198 => 76,  189 => 63,  173 => 56,  171 => 45,  168 => 53,  159 => 48,  135 => 51,  119 => 33,  97 => 37,  100 => 32,  72 => 21,  75 => 20,  18 => 11,  21 => 3,  70 => 21,  59 => 26,  53 => 18,  126 => 30,  155 => 47,  141 => 39,  129 => 47,  125 => 23,  120 => 19,  114 => 29,  209 => 82,  206 => 63,  201 => 68,  194 => 66,  191 => 110,  186 => 67,  180 => 58,  176 => 57,  166 => 45,  158 => 48,  153 => 37,  143 => 25,  134 => 37,  123 => 43,  118 => 33,  87 => 27,  66 => 28,  60 => 27,  146 => 50,  136 => 36,  122 => 47,  107 => 43,  101 => 22,  95 => 32,  82 => 20,  67 => 20,  102 => 30,  89 => 28,  56 => 13,  249 => 91,  239 => 90,  235 => 60,  228 => 84,  224 => 82,  219 => 69,  217 => 51,  214 => 84,  211 => 77,  208 => 49,  202 => 75,  199 => 71,  193 => 72,  182 => 110,  178 => 63,  175 => 66,  172 => 65,  165 => 54,  161 => 61,  156 => 59,  154 => 48,  150 => 57,  147 => 41,  127 => 34,  113 => 27,  78 => 18,  64 => 20,  32 => 8,  50 => 102,  47 => 15,  39 => 11,  25 => 5,  22 => 2,  34 => 8,  117 => 30,  112 => 40,  109 => 71,  104 => 23,  96 => 47,  84 => 25,  80 => 37,  68 => 17,  44 => 19,  26 => 5,  23 => 3,  17 => 1,  92 => 43,  86 => 39,  79 => 21,  57 => 14,  46 => 14,  29 => 6,  24 => 3,  19 => 1,  69 => 21,  63 => 22,  55 => 20,  49 => 16,  43 => 8,  41 => 12,  37 => 59,  20 => 2,  157 => 49,  149 => 44,  145 => 44,  142 => 43,  132 => 51,  110 => 26,  106 => 39,  98 => 47,  93 => 59,  90 => 28,  83 => 38,  81 => 39,  73 => 35,  61 => 16,  52 => 17,  48 => 17,  45 => 8,  40 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  144 => 49,  138 => 38,  130 => 48,  124 => 33,  121 => 37,  115 => 35,  111 => 28,  108 => 32,  99 => 40,  94 => 36,  91 => 27,  88 => 26,  85 => 29,  77 => 24,  74 => 22,  71 => 24,  65 => 28,  62 => 15,  58 => 19,  54 => 18,  51 => 12,  42 => 9,  38 => 7,  35 => 6,  31 => 7,  28 => 7,);
    }
}
