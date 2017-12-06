<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_432e15b31053ffcb4fc5b65ff2547e831e70cc06101146847aea688688d8de06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3d765693e05ba3a7e91d554effa152440eee04532e46c053dff27719e747bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d765693e05ba3a7e91d554effa152440eee04532e46c053dff27719e747bee->enter($__internal_f3d765693e05ba3a7e91d554effa152440eee04532e46c053dff27719e747bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_046d01a85352d867f70a0cfa81b71bb33972c83bd9a2278375ae99415dfcb067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046d01a85352d867f70a0cfa81b71bb33972c83bd9a2278375ae99415dfcb067->enter($__internal_046d01a85352d867f70a0cfa81b71bb33972c83bd9a2278375ae99415dfcb067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d765693e05ba3a7e91d554effa152440eee04532e46c053dff27719e747bee->leave($__internal_f3d765693e05ba3a7e91d554effa152440eee04532e46c053dff27719e747bee_prof);

        
        $__internal_046d01a85352d867f70a0cfa81b71bb33972c83bd9a2278375ae99415dfcb067->leave($__internal_046d01a85352d867f70a0cfa81b71bb33972c83bd9a2278375ae99415dfcb067_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3a1574c4d5b9675bbdf4576cf05e2fd171e30bed9a52f9ac551bdff6f5d300a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1574c4d5b9675bbdf4576cf05e2fd171e30bed9a52f9ac551bdff6f5d300a8->enter($__internal_3a1574c4d5b9675bbdf4576cf05e2fd171e30bed9a52f9ac551bdff6f5d300a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_36ee9699241a14af7b6aa9f6f3945e92c262ba1c19a3c807d19e1648af223fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ee9699241a14af7b6aa9f6f3945e92c262ba1c19a3c807d19e1648af223fae->enter($__internal_36ee9699241a14af7b6aa9f6f3945e92c262ba1c19a3c807d19e1648af223fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_36ee9699241a14af7b6aa9f6f3945e92c262ba1c19a3c807d19e1648af223fae->leave($__internal_36ee9699241a14af7b6aa9f6f3945e92c262ba1c19a3c807d19e1648af223fae_prof);

        
        $__internal_3a1574c4d5b9675bbdf4576cf05e2fd171e30bed9a52f9ac551bdff6f5d300a8->leave($__internal_3a1574c4d5b9675bbdf4576cf05e2fd171e30bed9a52f9ac551bdff6f5d300a8_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4377505253007e0e7bd01f1c0546ef432568efec4f0ba039ab6c953465f2973d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4377505253007e0e7bd01f1c0546ef432568efec4f0ba039ab6c953465f2973d->enter($__internal_4377505253007e0e7bd01f1c0546ef432568efec4f0ba039ab6c953465f2973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc12f157d438e126e97b6c3cc9060f8cd6e5af2295af0dad65b9fa9a96a12935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc12f157d438e126e97b6c3cc9060f8cd6e5af2295af0dad65b9fa9a96a12935->enter($__internal_fc12f157d438e126e97b6c3cc9060f8cd6e5af2295af0dad65b9fa9a96a12935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fc12f157d438e126e97b6c3cc9060f8cd6e5af2295af0dad65b9fa9a96a12935->leave($__internal_fc12f157d438e126e97b6c3cc9060f8cd6e5af2295af0dad65b9fa9a96a12935_prof);

        
        $__internal_4377505253007e0e7bd01f1c0546ef432568efec4f0ba039ab6c953465f2973d->leave($__internal_4377505253007e0e7bd01f1c0546ef432568efec4f0ba039ab6c953465f2973d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
