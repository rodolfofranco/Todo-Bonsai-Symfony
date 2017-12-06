<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0acd4d31854cc5772f2e91cc62633c0851c73cd33a4efe121e8e1a491a9929cf extends Twig_Template
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
        $__internal_2cbbc5a1bcd6c97a4fb58da71e334362b13c76c3ca004e270862c140cb00afd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbbc5a1bcd6c97a4fb58da71e334362b13c76c3ca004e270862c140cb00afd9->enter($__internal_2cbbc5a1bcd6c97a4fb58da71e334362b13c76c3ca004e270862c140cb00afd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_99d04e022c4bd60e933cfdd881ef7dcdd7e3bb45bcd2d30aba63d865a223b4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d04e022c4bd60e933cfdd881ef7dcdd7e3bb45bcd2d30aba63d865a223b4f9->enter($__internal_99d04e022c4bd60e933cfdd881ef7dcdd7e3bb45bcd2d30aba63d865a223b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2cbbc5a1bcd6c97a4fb58da71e334362b13c76c3ca004e270862c140cb00afd9->leave($__internal_2cbbc5a1bcd6c97a4fb58da71e334362b13c76c3ca004e270862c140cb00afd9_prof);

        
        $__internal_99d04e022c4bd60e933cfdd881ef7dcdd7e3bb45bcd2d30aba63d865a223b4f9->leave($__internal_99d04e022c4bd60e933cfdd881ef7dcdd7e3bb45bcd2d30aba63d865a223b4f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
