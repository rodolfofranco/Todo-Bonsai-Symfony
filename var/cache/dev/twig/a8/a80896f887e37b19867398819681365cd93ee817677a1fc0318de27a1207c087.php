<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_995732b94aeff6be085ef33168a2850f12dfd48fb201091d1e68d5fd4dd090eb extends Twig_Template
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
        $__internal_ff7dc528f338fad1b8cc5226d9d16756705d330eca233688d7420fd029176aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7dc528f338fad1b8cc5226d9d16756705d330eca233688d7420fd029176aff->enter($__internal_ff7dc528f338fad1b8cc5226d9d16756705d330eca233688d7420fd029176aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5336fcd72cae2201e2b548b0bf2cae4de45ebe9919855cae4f34746442d69990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5336fcd72cae2201e2b548b0bf2cae4de45ebe9919855cae4f34746442d69990->enter($__internal_5336fcd72cae2201e2b548b0bf2cae4de45ebe9919855cae4f34746442d69990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ff7dc528f338fad1b8cc5226d9d16756705d330eca233688d7420fd029176aff->leave($__internal_ff7dc528f338fad1b8cc5226d9d16756705d330eca233688d7420fd029176aff_prof);

        
        $__internal_5336fcd72cae2201e2b548b0bf2cae4de45ebe9919855cae4f34746442d69990->leave($__internal_5336fcd72cae2201e2b548b0bf2cae4de45ebe9919855cae4f34746442d69990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
