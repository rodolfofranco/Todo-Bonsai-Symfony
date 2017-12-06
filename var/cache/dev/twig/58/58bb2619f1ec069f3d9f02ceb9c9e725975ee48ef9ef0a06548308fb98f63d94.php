<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_dc07abe9fd8a700564163bf6b544aa621a1cadfb29de2f7b85bbe5da47b87401 extends Twig_Template
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
        $__internal_cc30173b6820147e03fd0731bfeaa2856f0078e206c956b61c25748cda4aac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc30173b6820147e03fd0731bfeaa2856f0078e206c956b61c25748cda4aac6e->enter($__internal_cc30173b6820147e03fd0731bfeaa2856f0078e206c956b61c25748cda4aac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_31ec34347aa3314a4e29f25d3e2a64d832b221de97e6b0553fbbafef4de361d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ec34347aa3314a4e29f25d3e2a64d832b221de97e6b0553fbbafef4de361d8->enter($__internal_31ec34347aa3314a4e29f25d3e2a64d832b221de97e6b0553fbbafef4de361d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cc30173b6820147e03fd0731bfeaa2856f0078e206c956b61c25748cda4aac6e->leave($__internal_cc30173b6820147e03fd0731bfeaa2856f0078e206c956b61c25748cda4aac6e_prof);

        
        $__internal_31ec34347aa3314a4e29f25d3e2a64d832b221de97e6b0553fbbafef4de361d8->leave($__internal_31ec34347aa3314a4e29f25d3e2a64d832b221de97e6b0553fbbafef4de361d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
