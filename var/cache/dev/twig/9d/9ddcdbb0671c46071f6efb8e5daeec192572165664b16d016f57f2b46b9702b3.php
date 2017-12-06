<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8d21550850074782862265b813a9c2aea7c608253db98e24225c2ea859cc33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6792eb78f752230155a7dfc557d9ca1a279031b6addb8b8c606aaf4eaecaed98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6792eb78f752230155a7dfc557d9ca1a279031b6addb8b8c606aaf4eaecaed98->enter($__internal_6792eb78f752230155a7dfc557d9ca1a279031b6addb8b8c606aaf4eaecaed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bf4ae8273acfd3579175292bb83cf770f63dffbddd43c58a058eb2bbd0f0e8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4ae8273acfd3579175292bb83cf770f63dffbddd43c58a058eb2bbd0f0e8d8->enter($__internal_bf4ae8273acfd3579175292bb83cf770f63dffbddd43c58a058eb2bbd0f0e8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6792eb78f752230155a7dfc557d9ca1a279031b6addb8b8c606aaf4eaecaed98->leave($__internal_6792eb78f752230155a7dfc557d9ca1a279031b6addb8b8c606aaf4eaecaed98_prof);

        
        $__internal_bf4ae8273acfd3579175292bb83cf770f63dffbddd43c58a058eb2bbd0f0e8d8->leave($__internal_bf4ae8273acfd3579175292bb83cf770f63dffbddd43c58a058eb2bbd0f0e8d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb4c3ce6e8ec44126a5e6a86e9bc004d7ab248d1ceaf3c13bbf38a7eecc0adf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4c3ce6e8ec44126a5e6a86e9bc004d7ab248d1ceaf3c13bbf38a7eecc0adf2->enter($__internal_eb4c3ce6e8ec44126a5e6a86e9bc004d7ab248d1ceaf3c13bbf38a7eecc0adf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e9757d65406768c6bc0498f0d5fd4b25856c35668bdb015a89ea72babd80d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9757d65406768c6bc0498f0d5fd4b25856c35668bdb015a89ea72babd80d5b->enter($__internal_7e9757d65406768c6bc0498f0d5fd4b25856c35668bdb015a89ea72babd80d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e9757d65406768c6bc0498f0d5fd4b25856c35668bdb015a89ea72babd80d5b->leave($__internal_7e9757d65406768c6bc0498f0d5fd4b25856c35668bdb015a89ea72babd80d5b_prof);

        
        $__internal_eb4c3ce6e8ec44126a5e6a86e9bc004d7ab248d1ceaf3c13bbf38a7eecc0adf2->leave($__internal_eb4c3ce6e8ec44126a5e6a86e9bc004d7ab248d1ceaf3c13bbf38a7eecc0adf2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7839053e24ec6ef9e55c2d6f7f73beb87d8be7d393d5882ef89825f0a72769d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7839053e24ec6ef9e55c2d6f7f73beb87d8be7d393d5882ef89825f0a72769d1->enter($__internal_7839053e24ec6ef9e55c2d6f7f73beb87d8be7d393d5882ef89825f0a72769d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c701a4d0684f7c518e5701cea84198348924b6fdd6de3b0dbd7eaf239fa14bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c701a4d0684f7c518e5701cea84198348924b6fdd6de3b0dbd7eaf239fa14bf->enter($__internal_7c701a4d0684f7c518e5701cea84198348924b6fdd6de3b0dbd7eaf239fa14bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c701a4d0684f7c518e5701cea84198348924b6fdd6de3b0dbd7eaf239fa14bf->leave($__internal_7c701a4d0684f7c518e5701cea84198348924b6fdd6de3b0dbd7eaf239fa14bf_prof);

        
        $__internal_7839053e24ec6ef9e55c2d6f7f73beb87d8be7d393d5882ef89825f0a72769d1->leave($__internal_7839053e24ec6ef9e55c2d6f7f73beb87d8be7d393d5882ef89825f0a72769d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4eaaf16aeeebada73cda436ffc1b765b8cd7a803a678dcbf62f02fc18be47e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaaf16aeeebada73cda436ffc1b765b8cd7a803a678dcbf62f02fc18be47e95->enter($__internal_4eaaf16aeeebada73cda436ffc1b765b8cd7a803a678dcbf62f02fc18be47e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d188dffc2955bb14efa8854699d61525327116d81a7ddd421f0fb00abc137a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d188dffc2955bb14efa8854699d61525327116d81a7ddd421f0fb00abc137a72->enter($__internal_d188dffc2955bb14efa8854699d61525327116d81a7ddd421f0fb00abc137a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d188dffc2955bb14efa8854699d61525327116d81a7ddd421f0fb00abc137a72->leave($__internal_d188dffc2955bb14efa8854699d61525327116d81a7ddd421f0fb00abc137a72_prof);

        
        $__internal_4eaaf16aeeebada73cda436ffc1b765b8cd7a803a678dcbf62f02fc18be47e95->leave($__internal_4eaaf16aeeebada73cda436ffc1b765b8cd7a803a678dcbf62f02fc18be47e95_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
