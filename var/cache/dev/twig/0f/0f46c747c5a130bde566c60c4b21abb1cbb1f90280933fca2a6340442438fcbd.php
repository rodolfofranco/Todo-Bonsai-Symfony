<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_09a4032973f8cc4f1c86fa4e79b429fc42c726d6c905186ea2a27c83f32cef1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e6b209c06905b7ef85105ecbf585c825221151755bd30492d7689390b583a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6b209c06905b7ef85105ecbf585c825221151755bd30492d7689390b583a8e->enter($__internal_0e6b209c06905b7ef85105ecbf585c825221151755bd30492d7689390b583a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0406b7d89125f244a674d45c8a90c74bbc73d26933b38b0a78e51fd901088267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0406b7d89125f244a674d45c8a90c74bbc73d26933b38b0a78e51fd901088267->enter($__internal_0406b7d89125f244a674d45c8a90c74bbc73d26933b38b0a78e51fd901088267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6b209c06905b7ef85105ecbf585c825221151755bd30492d7689390b583a8e->leave($__internal_0e6b209c06905b7ef85105ecbf585c825221151755bd30492d7689390b583a8e_prof);

        
        $__internal_0406b7d89125f244a674d45c8a90c74bbc73d26933b38b0a78e51fd901088267->leave($__internal_0406b7d89125f244a674d45c8a90c74bbc73d26933b38b0a78e51fd901088267_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_daf436edddf88149299a83a63ce67a3b8ac2455c3419fdeea4f59332186c538c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf436edddf88149299a83a63ce67a3b8ac2455c3419fdeea4f59332186c538c->enter($__internal_daf436edddf88149299a83a63ce67a3b8ac2455c3419fdeea4f59332186c538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9fd8351c31e90ad8d6bc728d2a02f6c0afce10e909ffc450e430195c71fb7bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd8351c31e90ad8d6bc728d2a02f6c0afce10e909ffc450e430195c71fb7bfc->enter($__internal_9fd8351c31e90ad8d6bc728d2a02f6c0afce10e909ffc450e430195c71fb7bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9fd8351c31e90ad8d6bc728d2a02f6c0afce10e909ffc450e430195c71fb7bfc->leave($__internal_9fd8351c31e90ad8d6bc728d2a02f6c0afce10e909ffc450e430195c71fb7bfc_prof);

        
        $__internal_daf436edddf88149299a83a63ce67a3b8ac2455c3419fdeea4f59332186c538c->leave($__internal_daf436edddf88149299a83a63ce67a3b8ac2455c3419fdeea4f59332186c538c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82c8bdbcd5c365d9b7df068c768d162f19a120a8e36dae914cdcf4cf9db5b7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c8bdbcd5c365d9b7df068c768d162f19a120a8e36dae914cdcf4cf9db5b7ea->enter($__internal_82c8bdbcd5c365d9b7df068c768d162f19a120a8e36dae914cdcf4cf9db5b7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec9726134e4b301c2d8a5af877daf7914b068bc67b9eb0e5bc3c3191ad9ff74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9726134e4b301c2d8a5af877daf7914b068bc67b9eb0e5bc3c3191ad9ff74c->enter($__internal_ec9726134e4b301c2d8a5af877daf7914b068bc67b9eb0e5bc3c3191ad9ff74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ec9726134e4b301c2d8a5af877daf7914b068bc67b9eb0e5bc3c3191ad9ff74c->leave($__internal_ec9726134e4b301c2d8a5af877daf7914b068bc67b9eb0e5bc3c3191ad9ff74c_prof);

        
        $__internal_82c8bdbcd5c365d9b7df068c768d162f19a120a8e36dae914cdcf4cf9db5b7ea->leave($__internal_82c8bdbcd5c365d9b7df068c768d162f19a120a8e36dae914cdcf4cf9db5b7ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a01739a0920cfd8f099bb88d615a1d573a65a53513c0cdfdedc3997ee182b544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01739a0920cfd8f099bb88d615a1d573a65a53513c0cdfdedc3997ee182b544->enter($__internal_a01739a0920cfd8f099bb88d615a1d573a65a53513c0cdfdedc3997ee182b544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfe154749c1a9247b5d920be966a93246841ca5a0974e1d37bf418a4d9a362c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe154749c1a9247b5d920be966a93246841ca5a0974e1d37bf418a4d9a362c2->enter($__internal_cfe154749c1a9247b5d920be966a93246841ca5a0974e1d37bf418a4d9a362c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cfe154749c1a9247b5d920be966a93246841ca5a0974e1d37bf418a4d9a362c2->leave($__internal_cfe154749c1a9247b5d920be966a93246841ca5a0974e1d37bf418a4d9a362c2_prof);

        
        $__internal_a01739a0920cfd8f099bb88d615a1d573a65a53513c0cdfdedc3997ee182b544->leave($__internal_a01739a0920cfd8f099bb88d615a1d573a65a53513c0cdfdedc3997ee182b544_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
