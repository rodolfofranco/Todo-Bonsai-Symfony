<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_af7a231c65a32d7171b9e3d870102ae46696bc2e331bd4aff7856a9f5ca24cda extends Twig_Template
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
        $__internal_63aace43e9f2206d905ae0aa242fb49ab18e3d057c2d7ea4d4ff61b4fc0e5856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63aace43e9f2206d905ae0aa242fb49ab18e3d057c2d7ea4d4ff61b4fc0e5856->enter($__internal_63aace43e9f2206d905ae0aa242fb49ab18e3d057c2d7ea4d4ff61b4fc0e5856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1538d0eb07ff08eca2f2e0f7fc230d76e882f5050b48ba5fe42d250a5052bd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1538d0eb07ff08eca2f2e0f7fc230d76e882f5050b48ba5fe42d250a5052bd76->enter($__internal_1538d0eb07ff08eca2f2e0f7fc230d76e882f5050b48ba5fe42d250a5052bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_63aace43e9f2206d905ae0aa242fb49ab18e3d057c2d7ea4d4ff61b4fc0e5856->leave($__internal_63aace43e9f2206d905ae0aa242fb49ab18e3d057c2d7ea4d4ff61b4fc0e5856_prof);

        
        $__internal_1538d0eb07ff08eca2f2e0f7fc230d76e882f5050b48ba5fe42d250a5052bd76->leave($__internal_1538d0eb07ff08eca2f2e0f7fc230d76e882f5050b48ba5fe42d250a5052bd76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
