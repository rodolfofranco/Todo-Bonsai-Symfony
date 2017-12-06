<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8d4cd47b336a0ecd6224f0e28801bfc602431d68e2a1b9aa80a0b5f2c2fcd858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2125546869f1b2e175ded462c179e9e5968017e69727ae1310a9371c37305b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2125546869f1b2e175ded462c179e9e5968017e69727ae1310a9371c37305b5f->enter($__internal_2125546869f1b2e175ded462c179e9e5968017e69727ae1310a9371c37305b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9e09aad19eb5fc653e8a0d6335dc4aaad75f816d510288d8d18a42c131fa6cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e09aad19eb5fc653e8a0d6335dc4aaad75f816d510288d8d18a42c131fa6cf5->enter($__internal_9e09aad19eb5fc653e8a0d6335dc4aaad75f816d510288d8d18a42c131fa6cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2125546869f1b2e175ded462c179e9e5968017e69727ae1310a9371c37305b5f->leave($__internal_2125546869f1b2e175ded462c179e9e5968017e69727ae1310a9371c37305b5f_prof);

        
        $__internal_9e09aad19eb5fc653e8a0d6335dc4aaad75f816d510288d8d18a42c131fa6cf5->leave($__internal_9e09aad19eb5fc653e8a0d6335dc4aaad75f816d510288d8d18a42c131fa6cf5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0130fbdd1dfe1bb3e20d4e3f084c1f761c6ddd41f3c8b0c355fa5de216fbb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0130fbdd1dfe1bb3e20d4e3f084c1f761c6ddd41f3c8b0c355fa5de216fbb88->enter($__internal_e0130fbdd1dfe1bb3e20d4e3f084c1f761c6ddd41f3c8b0c355fa5de216fbb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6285c310dd93bd41adfb6173acce93df7956c116d710b5655fedfe4b7cec967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6285c310dd93bd41adfb6173acce93df7956c116d710b5655fedfe4b7cec967->enter($__internal_c6285c310dd93bd41adfb6173acce93df7956c116d710b5655fedfe4b7cec967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c6285c310dd93bd41adfb6173acce93df7956c116d710b5655fedfe4b7cec967->leave($__internal_c6285c310dd93bd41adfb6173acce93df7956c116d710b5655fedfe4b7cec967_prof);

        
        $__internal_e0130fbdd1dfe1bb3e20d4e3f084c1f761c6ddd41f3c8b0c355fa5de216fbb88->leave($__internal_e0130fbdd1dfe1bb3e20d4e3f084c1f761c6ddd41f3c8b0c355fa5de216fbb88_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1952d6ac174dcfd266c1e505fc5e5dd87acbf859b3bc098f3ed472fd45541784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1952d6ac174dcfd266c1e505fc5e5dd87acbf859b3bc098f3ed472fd45541784->enter($__internal_1952d6ac174dcfd266c1e505fc5e5dd87acbf859b3bc098f3ed472fd45541784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6e49157230b9a5e1a63cca59db8b46abced86d27b61957e5c2993aec063f50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e49157230b9a5e1a63cca59db8b46abced86d27b61957e5c2993aec063f50d->enter($__internal_f6e49157230b9a5e1a63cca59db8b46abced86d27b61957e5c2993aec063f50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_f6e49157230b9a5e1a63cca59db8b46abced86d27b61957e5c2993aec063f50d->leave($__internal_f6e49157230b9a5e1a63cca59db8b46abced86d27b61957e5c2993aec063f50d_prof);

        
        $__internal_1952d6ac174dcfd266c1e505fc5e5dd87acbf859b3bc098f3ed472fd45541784->leave($__internal_1952d6ac174dcfd266c1e505fc5e5dd87acbf859b3bc098f3ed472fd45541784_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
