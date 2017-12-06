<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0774ae5e69511382dced60f906716cabd4efad5932c1aef2c6a680b813a735bc extends Twig_Template
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
        $__internal_d7721a35c6f5d15c431ea6ca3dcdb6f0c748515343b9d0ac078359dd70773ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7721a35c6f5d15c431ea6ca3dcdb6f0c748515343b9d0ac078359dd70773ddc->enter($__internal_d7721a35c6f5d15c431ea6ca3dcdb6f0c748515343b9d0ac078359dd70773ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_af1d7ab9a68863f287d25095b0371e8826888ca0e68eed861ab554f514cbbfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1d7ab9a68863f287d25095b0371e8826888ca0e68eed861ab554f514cbbfda->enter($__internal_af1d7ab9a68863f287d25095b0371e8826888ca0e68eed861ab554f514cbbfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d7721a35c6f5d15c431ea6ca3dcdb6f0c748515343b9d0ac078359dd70773ddc->leave($__internal_d7721a35c6f5d15c431ea6ca3dcdb6f0c748515343b9d0ac078359dd70773ddc_prof);

        
        $__internal_af1d7ab9a68863f287d25095b0371e8826888ca0e68eed861ab554f514cbbfda->leave($__internal_af1d7ab9a68863f287d25095b0371e8826888ca0e68eed861ab554f514cbbfda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
