<?php

/* UserDataBundle::base.html.twig */
class __TwigTemplate_1429dd8f2040ccbd00830656dac0d15b14365353755815d92218785099e47bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- src/User/DataBundle/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 14
        $this->displayBlock('navigation', $context, $blocks);
        // line 24
        echo "                </div>

   
            </header>

            <section class=\"main-col\">
                ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "            </section>
           

            
        </section>

       
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Add users to Database ";
    }

    // line 14
    public function block_navigation($context, array $blocks = array())
    {
        // line 15
        echo "    <nav>
        <ul class=\"navigation\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("userdata_homepage");
        echo "\">Home</a> 
           
\t\t\t
           <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("userdata_adduser");
        echo "\">Add New User</a>
        </ul>
    </nav>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UserDataBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  83 => 20,  77 => 17,  73 => 15,  70 => 14,  64 => 6,  52 => 31,  50 => 30,  42 => 24,  40 => 14,  29 => 6,  22 => 1,);
    }
}
