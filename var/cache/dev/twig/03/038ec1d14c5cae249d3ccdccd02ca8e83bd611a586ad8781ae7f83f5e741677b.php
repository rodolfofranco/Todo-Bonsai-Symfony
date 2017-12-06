<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e8a9cfe67bd02507aee8c80f230cd924ceff8cf16d128572660888dac6b41d73 extends Twig_Template
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
        $__internal_05ea2c37bf80066ed871a7698f641df2c528cb8127b32f26830a63361dc97c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ea2c37bf80066ed871a7698f641df2c528cb8127b32f26830a63361dc97c64->enter($__internal_05ea2c37bf80066ed871a7698f641df2c528cb8127b32f26830a63361dc97c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c8764356c47169a5dd8b62939652497d187b8b828d06091bafc7025266721241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8764356c47169a5dd8b62939652497d187b8b828d06091bafc7025266721241->enter($__internal_c8764356c47169a5dd8b62939652497d187b8b828d06091bafc7025266721241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_05ea2c37bf80066ed871a7698f641df2c528cb8127b32f26830a63361dc97c64->leave($__internal_05ea2c37bf80066ed871a7698f641df2c528cb8127b32f26830a63361dc97c64_prof);

        
        $__internal_c8764356c47169a5dd8b62939652497d187b8b828d06091bafc7025266721241->leave($__internal_c8764356c47169a5dd8b62939652497d187b8b828d06091bafc7025266721241_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
