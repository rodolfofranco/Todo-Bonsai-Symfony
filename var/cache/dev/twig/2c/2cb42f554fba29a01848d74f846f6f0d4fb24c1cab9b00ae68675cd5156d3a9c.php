<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_30e9bbb82f9fee8bc94608bd66aa6aa6ef68ed20c28369f8980de978da4aace0 extends Twig_Template
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
        $__internal_cdf38b012127aceb777ee949fd712c5ccaa0d402eed5d12c731e9b4f588b872a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf38b012127aceb777ee949fd712c5ccaa0d402eed5d12c731e9b4f588b872a->enter($__internal_cdf38b012127aceb777ee949fd712c5ccaa0d402eed5d12c731e9b4f588b872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4669b832d6022413b29711cbf0c0e6acf800e3726558cd7d17b480c73f9f17f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4669b832d6022413b29711cbf0c0e6acf800e3726558cd7d17b480c73f9f17f6->enter($__internal_4669b832d6022413b29711cbf0c0e6acf800e3726558cd7d17b480c73f9f17f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cdf38b012127aceb777ee949fd712c5ccaa0d402eed5d12c731e9b4f588b872a->leave($__internal_cdf38b012127aceb777ee949fd712c5ccaa0d402eed5d12c731e9b4f588b872a_prof);

        
        $__internal_4669b832d6022413b29711cbf0c0e6acf800e3726558cd7d17b480c73f9f17f6->leave($__internal_4669b832d6022413b29711cbf0c0e6acf800e3726558cd7d17b480c73f9f17f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
