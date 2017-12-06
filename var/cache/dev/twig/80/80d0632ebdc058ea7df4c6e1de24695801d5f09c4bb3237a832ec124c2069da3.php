<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_587128cadfe3e3a54ffb7413d194c7b1ce455e0d80e46391938dc4d8769f8ea0 extends Twig_Template
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
        $__internal_b31732c8a741d3252dbc034751f15b25ed87474779fd622b1c9d76a918c786ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31732c8a741d3252dbc034751f15b25ed87474779fd622b1c9d76a918c786ab->enter($__internal_b31732c8a741d3252dbc034751f15b25ed87474779fd622b1c9d76a918c786ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_54e2e69602a0017a3158dda5238de0a78027cb2fd71933a9dc9eeb3b948790e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e2e69602a0017a3158dda5238de0a78027cb2fd71933a9dc9eeb3b948790e4->enter($__internal_54e2e69602a0017a3158dda5238de0a78027cb2fd71933a9dc9eeb3b948790e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b31732c8a741d3252dbc034751f15b25ed87474779fd622b1c9d76a918c786ab->leave($__internal_b31732c8a741d3252dbc034751f15b25ed87474779fd622b1c9d76a918c786ab_prof);

        
        $__internal_54e2e69602a0017a3158dda5238de0a78027cb2fd71933a9dc9eeb3b948790e4->leave($__internal_54e2e69602a0017a3158dda5238de0a78027cb2fd71933a9dc9eeb3b948790e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
