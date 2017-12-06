<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d3704eb0ebf4b97e39b97b5aabbc14addc6dfd675bc12c2079fbf543e8e9673d extends Twig_Template
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
        $__internal_d8fa5e2557c0f558f63ee00445a0b09505c759e79d53d48ecd032e249e718f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fa5e2557c0f558f63ee00445a0b09505c759e79d53d48ecd032e249e718f65->enter($__internal_d8fa5e2557c0f558f63ee00445a0b09505c759e79d53d48ecd032e249e718f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_542d487b5e49a14a54bee9d7ddcde57dc96711eb77673814eb18e09a37e60b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542d487b5e49a14a54bee9d7ddcde57dc96711eb77673814eb18e09a37e60b4c->enter($__internal_542d487b5e49a14a54bee9d7ddcde57dc96711eb77673814eb18e09a37e60b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d8fa5e2557c0f558f63ee00445a0b09505c759e79d53d48ecd032e249e718f65->leave($__internal_d8fa5e2557c0f558f63ee00445a0b09505c759e79d53d48ecd032e249e718f65_prof);

        
        $__internal_542d487b5e49a14a54bee9d7ddcde57dc96711eb77673814eb18e09a37e60b4c->leave($__internal_542d487b5e49a14a54bee9d7ddcde57dc96711eb77673814eb18e09a37e60b4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
