<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5381916ee7abedc64c82ee11e0815981c0b1830acc9d2d3bd6d3fb539489798a extends Twig_Template
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
        $__internal_0bedf42e41922674a1589251768071068d633f38a01fb089cf361585d3b66798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bedf42e41922674a1589251768071068d633f38a01fb089cf361585d3b66798->enter($__internal_0bedf42e41922674a1589251768071068d633f38a01fb089cf361585d3b66798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9691a71228cf222dda807b7bf4e3992bffc0abc67eac0e59eaf107377ecc6c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9691a71228cf222dda807b7bf4e3992bffc0abc67eac0e59eaf107377ecc6c26->enter($__internal_9691a71228cf222dda807b7bf4e3992bffc0abc67eac0e59eaf107377ecc6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0bedf42e41922674a1589251768071068d633f38a01fb089cf361585d3b66798->leave($__internal_0bedf42e41922674a1589251768071068d633f38a01fb089cf361585d3b66798_prof);

        
        $__internal_9691a71228cf222dda807b7bf4e3992bffc0abc67eac0e59eaf107377ecc6c26->leave($__internal_9691a71228cf222dda807b7bf4e3992bffc0abc67eac0e59eaf107377ecc6c26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
