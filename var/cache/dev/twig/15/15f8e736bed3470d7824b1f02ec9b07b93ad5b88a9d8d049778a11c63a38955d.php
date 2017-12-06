<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7fa4700dc56bac756a81bca3b5c33187a8549bd75d0bef0c6f0dae81abb6991a extends Twig_Template
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
        $__internal_bde4b9cffe04d10dbeece23b88d14188a3fee89cbf2f3c9bbb924294c12ad04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde4b9cffe04d10dbeece23b88d14188a3fee89cbf2f3c9bbb924294c12ad04b->enter($__internal_bde4b9cffe04d10dbeece23b88d14188a3fee89cbf2f3c9bbb924294c12ad04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_52d4a7c1ae727218bbc0683cbccb86f2695cd2e19bc306799b76e87250545534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d4a7c1ae727218bbc0683cbccb86f2695cd2e19bc306799b76e87250545534->enter($__internal_52d4a7c1ae727218bbc0683cbccb86f2695cd2e19bc306799b76e87250545534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bde4b9cffe04d10dbeece23b88d14188a3fee89cbf2f3c9bbb924294c12ad04b->leave($__internal_bde4b9cffe04d10dbeece23b88d14188a3fee89cbf2f3c9bbb924294c12ad04b_prof);

        
        $__internal_52d4a7c1ae727218bbc0683cbccb86f2695cd2e19bc306799b76e87250545534->leave($__internal_52d4a7c1ae727218bbc0683cbccb86f2695cd2e19bc306799b76e87250545534_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
