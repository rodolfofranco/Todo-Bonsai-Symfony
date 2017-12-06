<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_35062b352eb103734c01ebe25a1c295e6c61d654f8854e8c017eec3583602ec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_727b12fa25edb624d7423c4a90db72fcb0e41c78f272a1e92e9023ff678eb610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727b12fa25edb624d7423c4a90db72fcb0e41c78f272a1e92e9023ff678eb610->enter($__internal_727b12fa25edb624d7423c4a90db72fcb0e41c78f272a1e92e9023ff678eb610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e1391ad3d5c310fe1d3ef05192852b45265d356904238aee7d914241841bb342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1391ad3d5c310fe1d3ef05192852b45265d356904238aee7d914241841bb342->enter($__internal_e1391ad3d5c310fe1d3ef05192852b45265d356904238aee7d914241841bb342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_727b12fa25edb624d7423c4a90db72fcb0e41c78f272a1e92e9023ff678eb610->leave($__internal_727b12fa25edb624d7423c4a90db72fcb0e41c78f272a1e92e9023ff678eb610_prof);

        
        $__internal_e1391ad3d5c310fe1d3ef05192852b45265d356904238aee7d914241841bb342->leave($__internal_e1391ad3d5c310fe1d3ef05192852b45265d356904238aee7d914241841bb342_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_11734db958c540c3364454d95ad4159ef8d08a3446d0713a87ec8beb3e1907a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11734db958c540c3364454d95ad4159ef8d08a3446d0713a87ec8beb3e1907a7->enter($__internal_11734db958c540c3364454d95ad4159ef8d08a3446d0713a87ec8beb3e1907a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eee748faf29951b87e36b012f458aba4374cad42e3a87055aabb4fa1a26296b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee748faf29951b87e36b012f458aba4374cad42e3a87055aabb4fa1a26296b5->enter($__internal_eee748faf29951b87e36b012f458aba4374cad42e3a87055aabb4fa1a26296b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eee748faf29951b87e36b012f458aba4374cad42e3a87055aabb4fa1a26296b5->leave($__internal_eee748faf29951b87e36b012f458aba4374cad42e3a87055aabb4fa1a26296b5_prof);

        
        $__internal_11734db958c540c3364454d95ad4159ef8d08a3446d0713a87ec8beb3e1907a7->leave($__internal_11734db958c540c3364454d95ad4159ef8d08a3446d0713a87ec8beb3e1907a7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81cb66829cac95aaca7e9467b8cca3392fd4d4b7bc47031bc78aa6711e767041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cb66829cac95aaca7e9467b8cca3392fd4d4b7bc47031bc78aa6711e767041->enter($__internal_81cb66829cac95aaca7e9467b8cca3392fd4d4b7bc47031bc78aa6711e767041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8353d1a58f3d00c9e993c609b6ab6a2c2f7e43765430c3bbdbaea152fefeb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8353d1a58f3d00c9e993c609b6ab6a2c2f7e43765430c3bbdbaea152fefeb9a->enter($__internal_b8353d1a58f3d00c9e993c609b6ab6a2c2f7e43765430c3bbdbaea152fefeb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b8353d1a58f3d00c9e993c609b6ab6a2c2f7e43765430c3bbdbaea152fefeb9a->leave($__internal_b8353d1a58f3d00c9e993c609b6ab6a2c2f7e43765430c3bbdbaea152fefeb9a_prof);

        
        $__internal_81cb66829cac95aaca7e9467b8cca3392fd4d4b7bc47031bc78aa6711e767041->leave($__internal_81cb66829cac95aaca7e9467b8cca3392fd4d4b7bc47031bc78aa6711e767041_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
