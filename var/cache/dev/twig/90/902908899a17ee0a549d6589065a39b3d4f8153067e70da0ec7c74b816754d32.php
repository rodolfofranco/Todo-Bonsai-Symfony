<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_83fef3cd56db5b599e94f625f7ddc50ef446a53c0d4794ee6a9fd768e709a66a extends Twig_Template
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
        $__internal_b63d5dedf545a95d499fd93dacd19f412967c1930cf46f9edc8e153936dc19b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63d5dedf545a95d499fd93dacd19f412967c1930cf46f9edc8e153936dc19b9->enter($__internal_b63d5dedf545a95d499fd93dacd19f412967c1930cf46f9edc8e153936dc19b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_9d8ffc030876e36989fc695e919e4bac0e0b4be872353dd9099b84f7145018a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8ffc030876e36989fc695e919e4bac0e0b4be872353dd9099b84f7145018a2->enter($__internal_9d8ffc030876e36989fc695e919e4bac0e0b4be872353dd9099b84f7145018a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b63d5dedf545a95d499fd93dacd19f412967c1930cf46f9edc8e153936dc19b9->leave($__internal_b63d5dedf545a95d499fd93dacd19f412967c1930cf46f9edc8e153936dc19b9_prof);

        
        $__internal_9d8ffc030876e36989fc695e919e4bac0e0b4be872353dd9099b84f7145018a2->leave($__internal_9d8ffc030876e36989fc695e919e4bac0e0b4be872353dd9099b84f7145018a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
