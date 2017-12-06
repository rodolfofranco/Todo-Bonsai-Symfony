<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fad78add6dda3affbf0e1a16f37b6737cea13ea248cb78b0b689a9f48f7c7d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1b74d64f51a3c5f0d57fdc2f0e3a9455df886d43ca954927af33c34ece0615a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b74d64f51a3c5f0d57fdc2f0e3a9455df886d43ca954927af33c34ece0615a->enter($__internal_a1b74d64f51a3c5f0d57fdc2f0e3a9455df886d43ca954927af33c34ece0615a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_821577e9d5ebf36377ca5fb41882139e56dd40a7f67ebbd28539fbf50c15fc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821577e9d5ebf36377ca5fb41882139e56dd40a7f67ebbd28539fbf50c15fc3f->enter($__internal_821577e9d5ebf36377ca5fb41882139e56dd40a7f67ebbd28539fbf50c15fc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b74d64f51a3c5f0d57fdc2f0e3a9455df886d43ca954927af33c34ece0615a->leave($__internal_a1b74d64f51a3c5f0d57fdc2f0e3a9455df886d43ca954927af33c34ece0615a_prof);

        
        $__internal_821577e9d5ebf36377ca5fb41882139e56dd40a7f67ebbd28539fbf50c15fc3f->leave($__internal_821577e9d5ebf36377ca5fb41882139e56dd40a7f67ebbd28539fbf50c15fc3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b93e38ca29352d9ed72abf1d25d476e9959634422c1750004362bb20ccaf355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b93e38ca29352d9ed72abf1d25d476e9959634422c1750004362bb20ccaf355->enter($__internal_2b93e38ca29352d9ed72abf1d25d476e9959634422c1750004362bb20ccaf355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5e55a8742f842692cdb19cbcc61ba953c835684b2bf92b3c63585a8bf65616a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e55a8742f842692cdb19cbcc61ba953c835684b2bf92b3c63585a8bf65616a0->enter($__internal_5e55a8742f842692cdb19cbcc61ba953c835684b2bf92b3c63585a8bf65616a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5e55a8742f842692cdb19cbcc61ba953c835684b2bf92b3c63585a8bf65616a0->leave($__internal_5e55a8742f842692cdb19cbcc61ba953c835684b2bf92b3c63585a8bf65616a0_prof);

        
        $__internal_2b93e38ca29352d9ed72abf1d25d476e9959634422c1750004362bb20ccaf355->leave($__internal_2b93e38ca29352d9ed72abf1d25d476e9959634422c1750004362bb20ccaf355_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
