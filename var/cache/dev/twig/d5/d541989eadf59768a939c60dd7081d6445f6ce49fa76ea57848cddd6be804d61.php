<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_51546d6e615c10d79403b4ad2b027f6c4aad6c53332e991c62f936b3055b6be1 extends Twig_Template
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
        $__internal_5a2a23cd01709c491838108a97a47f110e3a25ba7b8afe86c54f8be20c14dd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2a23cd01709c491838108a97a47f110e3a25ba7b8afe86c54f8be20c14dd5f->enter($__internal_5a2a23cd01709c491838108a97a47f110e3a25ba7b8afe86c54f8be20c14dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_75cfd26710c756894cc0780060e45987050f656bc7828f918a6de6ea1d38a528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cfd26710c756894cc0780060e45987050f656bc7828f918a6de6ea1d38a528->enter($__internal_75cfd26710c756894cc0780060e45987050f656bc7828f918a6de6ea1d38a528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5a2a23cd01709c491838108a97a47f110e3a25ba7b8afe86c54f8be20c14dd5f->leave($__internal_5a2a23cd01709c491838108a97a47f110e3a25ba7b8afe86c54f8be20c14dd5f_prof);

        
        $__internal_75cfd26710c756894cc0780060e45987050f656bc7828f918a6de6ea1d38a528->leave($__internal_75cfd26710c756894cc0780060e45987050f656bc7828f918a6de6ea1d38a528_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
