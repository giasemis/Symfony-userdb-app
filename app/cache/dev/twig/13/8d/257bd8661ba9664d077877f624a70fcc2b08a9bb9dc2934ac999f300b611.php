<?php

/* UserDataBundle:User:showuser.html.twig */
class __TwigTemplate_138d257bd8661ba9664d077877f624a70fcc2b08a9bb9dc2934ac999f300b611 extends Twig_Template
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
        echo "user.showuser";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article class=\"user\">
        <header>         <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "html", null, true);
        echo "</h2>  </header>
      User named ";
        // line 9
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "html", null, true);
        echo " was registered at ";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "RegistrationDate"));
        echo " and his ID is :  ";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")), "html", null, true);
        echo " 
\t\t\t

   </article>
";
    }

    public function getTemplateName()
    {
        return "UserDataBundle:User:showuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 4,);
    }
}
