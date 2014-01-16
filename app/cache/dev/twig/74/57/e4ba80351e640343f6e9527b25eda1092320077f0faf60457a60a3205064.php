<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7457e4ba80351e640343f6e9527b25eda1092320077f0faf60457a60a3205064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  30 => 3,  153 => 53,  148 => 48,  145 => 47,  140 => 43,  135 => 40,  127 => 28,  122 => 26,  118 => 25,  114 => 23,  111 => 22,  105 => 13,  101 => 11,  98 => 10,  92 => 6,  87 => 54,  85 => 53,  80 => 50,  78 => 47,  73 => 44,  71 => 43,  67 => 41,  65 => 40,  55 => 32,  53 => 22,  42 => 15,  33 => 4,  26 => 1,  43 => 8,  40 => 7,  32 => 5,  29 => 4,  31 => 5,  28 => 4,);
    }
}
