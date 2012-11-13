<?php

/* MobileFrontendBundle:Gallery:index.html.twig */
class __TwigTemplate_07b3efd6a15eba4908752d28050f263b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <ul class=\"gallery\">
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2011/11/ghardedo.com-screen-capture-2011-11-18-13-35-50.png\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2011/11/ghardedo.com-screen-capture-2011-11-18-13-35-50-200x130.png\" alt=\"Image 010\" /></a></li>
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2011/11/unexploredindia.in-screen-capture-2011-11-15-14-30-34.png\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2011/11/unexploredindia.in-screen-capture-2011-11-15-14-30-21-200x130.png\" alt=\"Image 011\" /></a></li>
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2011/11/ramganjmandi.in-screen-capture-2011-11-15-13-56-54.png\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2011/11/ramganjmandi.in-screen-capture-2011-11-15-13-56-54-200x130.png\" alt=\"Image 012\" /></a></li>
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2010/11/eKoshEducations_1290156047352.jpeg\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2010/11/eKoshEducations_1290156047352-200x130.jpg\" alt=\"Image 013\" /></a></li>
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2010/11/FictionFreak-Think-Create-Astonish_1290080942400.jpeg\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2010/11/FictionFreak-Think-Create-Astonish_1290080942400-200x130.jpg\" alt=\"Image 014\" /></a></li>
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2010/10/dr-kunal-luthra_1275642999972.png\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2010/10/dr-kunal-luthra_1275642999972-200x130.png\" alt=\"Image 015\" /></a></li>
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2010/10/portfolioPicChickenHunt-857x390.jpg\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2010/10/portfolioPicChickenHunt-200x130.jpg\" alt=\"Image 016\" /></a></li>
        <li><a href=\"http://www.mrova.com/wp-content/uploads/2010/10/Screenshot-4.png\" rel=\"external\"><img src=\"http://www.mrova.com/wp-content/uploads/2010/10/mrovaWebPackage11-200x130.jpg\" alt=\"Image 017\" /></a></li>
    </ul>

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
        return array (  29 => 4,  26 => 3,);
    }
}
