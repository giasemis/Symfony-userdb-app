<?php

/* UserDataBundle:Page:index.html.twig */
class __TwigTemplate_a3767df2a178dff57282e087376ac36794ab25a9aa030e7f4676102eb313215c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("UserDataBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo " In this application <br>
 You can add new users to database <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("userdata_adduser");
        echo "\">Add User</a><br>
or <br>
you can view already registered users


<h3> Show registered users </h3>


           
            
               <table>
            <tr>
               <td>ID</td><td>User Name</td>  <td>Registration Date</td>  <td>JSON represantion</td>  
           </tr>
\t\t   
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "        <article class=\"user\">\t\t   
\t\t   <tr>
\t\t   <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "html", null, true);
            echo "</td>  <td>";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "RegistrationDate")), "html", null, true);
            echo "</td>  <td><p class=\"continue\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userdata_showuser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\">give me user's json represantion</a></p></td>  
              
            
            
\t\t\t</tr>
\t\t\t

            
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <tr><td colspan=4>There are no users registers <a href=\"";
            echo $this->env->getExtension('routing')->getPath("userdata_adduser");
            echo "\">Add a User to see</a><br></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t
\t</table>

 
";
    }

    public function getTemplateName()
    {
        return "UserDataBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  81 => 33,  61 => 24,  57 => 22,  52 => 21,  34 => 6,  31 => 5,  28 => 4,);
    }
}
