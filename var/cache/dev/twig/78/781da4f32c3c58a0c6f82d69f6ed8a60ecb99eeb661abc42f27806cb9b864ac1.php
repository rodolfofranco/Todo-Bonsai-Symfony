<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_22a999904cd32a1d89f426ccaab34a42554c32649573535ce9bffd11eed96b39 extends Twig_Template
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
        $__internal_f9f62cd35f096485d73d2951e3d5e2264c6d25cef37022532b58e4f846a0384f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f62cd35f096485d73d2951e3d5e2264c6d25cef37022532b58e4f846a0384f->enter($__internal_f9f62cd35f096485d73d2951e3d5e2264c6d25cef37022532b58e4f846a0384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c5f69ae98d13587b7623632afc79113d28fc50fb303909a36a4fc058976d9506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f69ae98d13587b7623632afc79113d28fc50fb303909a36a4fc058976d9506->enter($__internal_c5f69ae98d13587b7623632afc79113d28fc50fb303909a36a4fc058976d9506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f9f62cd35f096485d73d2951e3d5e2264c6d25cef37022532b58e4f846a0384f->leave($__internal_f9f62cd35f096485d73d2951e3d5e2264c6d25cef37022532b58e4f846a0384f_prof);

        
        $__internal_c5f69ae98d13587b7623632afc79113d28fc50fb303909a36a4fc058976d9506->leave($__internal_c5f69ae98d13587b7623632afc79113d28fc50fb303909a36a4fc058976d9506_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
