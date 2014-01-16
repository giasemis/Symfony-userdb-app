<?php

/* UserDataBundle:Page:showuser.html.twig */
class __TwigTemplate_ec4ed2ddc6c8040c0cca97c14602c40d03276e3904b68e36577933e9c9da7947 extends Twig_Template
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
        echo "showuser";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article class=\"user\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "RegistrationDate"), "c"), "html", null, true);
        echo "\"></time></div>
           
        </header>
       ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "username"), "html", null, true);
        echo " 
        <div>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : $this->getContext($context, "User")), "id"), "html", null, true);
        echo "
\t\t\t
        </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return "UserDataBundle:Page:showuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  48 => 12,  42 => 9,  38 => 7,  35 => 6,  29 => 4,);
    }
}
