<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ac11290e59d19f4e4685744d9601a8b8c6ca0799da926f1efe665399bc939cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c1e92c1a32cf3a2e157f894e5e53e8f568cd66ea444566f79004db4f964054e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1e92c1a32cf3a2e157f894e5e53e8f568cd66ea444566f79004db4f964054e->enter($__internal_8c1e92c1a32cf3a2e157f894e5e53e8f568cd66ea444566f79004db4f964054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2a3c76fcb971392b48dc4c49f6fc9eee5ad8a315747a4c0faf7fbba2199bbdc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3c76fcb971392b48dc4c49f6fc9eee5ad8a315747a4c0faf7fbba2199bbdc1->enter($__internal_2a3c76fcb971392b48dc4c49f6fc9eee5ad8a315747a4c0faf7fbba2199bbdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8c1e92c1a32cf3a2e157f894e5e53e8f568cd66ea444566f79004db4f964054e->leave($__internal_8c1e92c1a32cf3a2e157f894e5e53e8f568cd66ea444566f79004db4f964054e_prof);

        
        $__internal_2a3c76fcb971392b48dc4c49f6fc9eee5ad8a315747a4c0faf7fbba2199bbdc1->leave($__internal_2a3c76fcb971392b48dc4c49f6fc9eee5ad8a315747a4c0faf7fbba2199bbdc1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a79554ba0e11dccc6728ba96ccdcb747d65fbbe4ad61cbb6b97e515155a64298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79554ba0e11dccc6728ba96ccdcb747d65fbbe4ad61cbb6b97e515155a64298->enter($__internal_a79554ba0e11dccc6728ba96ccdcb747d65fbbe4ad61cbb6b97e515155a64298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79bd64b03c81443c4f79c95e25bf63adf8addc140c6fb920f1883ff21af94ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bd64b03c81443c4f79c95e25bf63adf8addc140c6fb920f1883ff21af94ef9->enter($__internal_79bd64b03c81443c4f79c95e25bf63adf8addc140c6fb920f1883ff21af94ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_79bd64b03c81443c4f79c95e25bf63adf8addc140c6fb920f1883ff21af94ef9->leave($__internal_79bd64b03c81443c4f79c95e25bf63adf8addc140c6fb920f1883ff21af94ef9_prof);

        
        $__internal_a79554ba0e11dccc6728ba96ccdcb747d65fbbe4ad61cbb6b97e515155a64298->leave($__internal_a79554ba0e11dccc6728ba96ccdcb747d65fbbe4ad61cbb6b97e515155a64298_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
