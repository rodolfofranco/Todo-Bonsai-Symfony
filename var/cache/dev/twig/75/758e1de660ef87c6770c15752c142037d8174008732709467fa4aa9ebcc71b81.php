<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e981d61c7be43ce78c91e916c3ba6aea0fa384ebc6a602fc718cb2c37ebe93ef extends Twig_Template
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
        $__internal_77fc5e6f54bcec918e903a0461a036c8a313603f90ec402e1ed8b563269da6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fc5e6f54bcec918e903a0461a036c8a313603f90ec402e1ed8b563269da6a5->enter($__internal_77fc5e6f54bcec918e903a0461a036c8a313603f90ec402e1ed8b563269da6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cc01eb2a1609d797505d19bf523a6efa4d879674951ce17bdf5f26f18862c99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc01eb2a1609d797505d19bf523a6efa4d879674951ce17bdf5f26f18862c99c->enter($__internal_cc01eb2a1609d797505d19bf523a6efa4d879674951ce17bdf5f26f18862c99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_77fc5e6f54bcec918e903a0461a036c8a313603f90ec402e1ed8b563269da6a5->leave($__internal_77fc5e6f54bcec918e903a0461a036c8a313603f90ec402e1ed8b563269da6a5_prof);

        
        $__internal_cc01eb2a1609d797505d19bf523a6efa4d879674951ce17bdf5f26f18862c99c->leave($__internal_cc01eb2a1609d797505d19bf523a6efa4d879674951ce17bdf5f26f18862c99c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
