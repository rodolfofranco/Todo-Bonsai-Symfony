<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5a9e7f978559dde95305c52b949800235938b08c54d4ae2405b9a2b84038b476 extends Twig_Template
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
        $__internal_24cb198ebc9f574e76bfee3c2dad3c402f91c910d0d5d72c7318d76ab9420787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cb198ebc9f574e76bfee3c2dad3c402f91c910d0d5d72c7318d76ab9420787->enter($__internal_24cb198ebc9f574e76bfee3c2dad3c402f91c910d0d5d72c7318d76ab9420787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_45f86066d16b63697f4f9e6e6ef816d8146bd6ee9d208b3ce2a1c2464a70dc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f86066d16b63697f4f9e6e6ef816d8146bd6ee9d208b3ce2a1c2464a70dc57->enter($__internal_45f86066d16b63697f4f9e6e6ef816d8146bd6ee9d208b3ce2a1c2464a70dc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_24cb198ebc9f574e76bfee3c2dad3c402f91c910d0d5d72c7318d76ab9420787->leave($__internal_24cb198ebc9f574e76bfee3c2dad3c402f91c910d0d5d72c7318d76ab9420787_prof);

        
        $__internal_45f86066d16b63697f4f9e6e6ef816d8146bd6ee9d208b3ce2a1c2464a70dc57->leave($__internal_45f86066d16b63697f4f9e6e6ef816d8146bd6ee9d208b3ce2a1c2464a70dc57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
