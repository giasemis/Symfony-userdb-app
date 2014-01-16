<?php

/* UserDataBundle:Page:adduser.html.twig */
class __TwigTemplate_bc9594c3fc1ec27d3677221c5bf2de96e687fbca4c497656f6fd7877434d3147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserDataBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserDataBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Add User";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Add a new user to DataBase </h1>
    </header>



    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("userdata_adduser");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"usertype\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'row');
        echo "
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "RegistrationDate"), 'row');
        echo "     
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "UserDataBundle:Page:adduser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  60 => 16,  56 => 15,  52 => 14,  46 => 13,  38 => 7,  35 => 6,  29 => 4,);
    }
}
