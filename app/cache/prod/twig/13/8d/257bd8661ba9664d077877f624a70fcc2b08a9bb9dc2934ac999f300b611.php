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
        echo "showuser";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article class=\"User\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "RegistrationDate"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "created"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title"), "html", null, true);
        echo "</h2>
        </header>
       ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : null), "username"), "html", null, true);
        echo " 
        <div>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["User"]) ? $context["User"] : null), "id"), "html", null, true);
        echo "
\t\t\t
        </div>
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
        return array (  58 => 14,  52 => 14,  153 => 53,  148 => 48,  145 => 47,  127 => 28,  118 => 25,  114 => 23,  65 => 40,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 43,  132 => 51,  128 => 49,  111 => 22,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 40,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 43,  67 => 41,  63 => 15,  59 => 14,  47 => 9,  38 => 7,  94 => 28,  89 => 20,  85 => 53,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 4,  87 => 54,  72 => 16,  55 => 32,  21 => 2,  26 => 1,  98 => 10,  93 => 28,  88 => 6,  78 => 47,  46 => 13,  27 => 4,  40 => 9,  44 => 12,  35 => 6,  31 => 5,  43 => 10,  41 => 7,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 13,  101 => 11,  91 => 27,  69 => 25,  66 => 15,  62 => 18,  49 => 19,  24 => 4,  32 => 5,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 26,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 6,  86 => 28,  82 => 22,  80 => 50,  73 => 44,  64 => 17,  60 => 13,  57 => 16,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 9,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
