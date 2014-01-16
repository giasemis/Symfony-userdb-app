<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_0c10107cc70a2086ceaa65f006cac6f96f12ad891e08293c7a5df0d914744624 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 7,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  46 => 7,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  30 => 3,  153 => 53,  148 => 48,  145 => 47,  140 => 43,  135 => 40,  127 => 28,  122 => 26,  118 => 25,  114 => 23,  111 => 22,  105 => 40,  101 => 24,  98 => 40,  92 => 21,  87 => 20,  85 => 19,  80 => 19,  78 => 40,  73 => 44,  71 => 43,  67 => 41,  65 => 40,  55 => 13,  53 => 22,  42 => 14,  33 => 6,  26 => 5,  43 => 8,  40 => 8,  32 => 12,  29 => 4,  31 => 5,  28 => 4,);
    }
}
