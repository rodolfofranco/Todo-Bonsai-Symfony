<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b66f22fd44260057ad8a62d65396cda02d7fb901f9acd2668bf860bda94b2b82 extends Twig_Template
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
        $__internal_94b44d33c5586da53ee36b67725fff2011b039dc69a2de0a9cfdb924654ea6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b44d33c5586da53ee36b67725fff2011b039dc69a2de0a9cfdb924654ea6df->enter($__internal_94b44d33c5586da53ee36b67725fff2011b039dc69a2de0a9cfdb924654ea6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b410ce4deeffc854b4b71b00c6f20e751dc2304c30925c9a3daf0376f8884749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b410ce4deeffc854b4b71b00c6f20e751dc2304c30925c9a3daf0376f8884749->enter($__internal_b410ce4deeffc854b4b71b00c6f20e751dc2304c30925c9a3daf0376f8884749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_94b44d33c5586da53ee36b67725fff2011b039dc69a2de0a9cfdb924654ea6df->leave($__internal_94b44d33c5586da53ee36b67725fff2011b039dc69a2de0a9cfdb924654ea6df_prof);

        
        $__internal_b410ce4deeffc854b4b71b00c6f20e751dc2304c30925c9a3daf0376f8884749->leave($__internal_b410ce4deeffc854b4b71b00c6f20e751dc2304c30925c9a3daf0376f8884749_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
