<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_440ee9e8bf2be7817f0a73493bb0c3cd3099ea967464e134adf37043daa9b380 extends Twig_Template
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
        $__internal_424a3bf83e0eecf53c701ba6264e5e1a5e9eb3adbea184ab132dd07c8620c4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424a3bf83e0eecf53c701ba6264e5e1a5e9eb3adbea184ab132dd07c8620c4ef->enter($__internal_424a3bf83e0eecf53c701ba6264e5e1a5e9eb3adbea184ab132dd07c8620c4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_88b1c5970a5e5bbe03e3df532f70cfd4371f1bb7c3a359f328c18c4709652818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b1c5970a5e5bbe03e3df532f70cfd4371f1bb7c3a359f328c18c4709652818->enter($__internal_88b1c5970a5e5bbe03e3df532f70cfd4371f1bb7c3a359f328c18c4709652818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_424a3bf83e0eecf53c701ba6264e5e1a5e9eb3adbea184ab132dd07c8620c4ef->leave($__internal_424a3bf83e0eecf53c701ba6264e5e1a5e9eb3adbea184ab132dd07c8620c4ef_prof);

        
        $__internal_88b1c5970a5e5bbe03e3df532f70cfd4371f1bb7c3a359f328c18c4709652818->leave($__internal_88b1c5970a5e5bbe03e3df532f70cfd4371f1bb7c3a359f328c18c4709652818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
