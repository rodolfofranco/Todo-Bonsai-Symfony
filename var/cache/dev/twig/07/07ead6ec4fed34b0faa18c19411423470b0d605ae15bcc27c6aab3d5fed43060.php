<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6ffc495d9c4130ee704e042ed24a621a3d0265ad6f26953645620129cfb6b85e extends Twig_Template
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
        $__internal_4f0f934eac0ef612526919794765d359c5a0f29ad43282042d080f51fc96c667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0f934eac0ef612526919794765d359c5a0f29ad43282042d080f51fc96c667->enter($__internal_4f0f934eac0ef612526919794765d359c5a0f29ad43282042d080f51fc96c667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_23edae23e2ac9aaf55bbbd4f69b576619d2c11c57f275a830d933ae2fb383c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23edae23e2ac9aaf55bbbd4f69b576619d2c11c57f275a830d933ae2fb383c6a->enter($__internal_23edae23e2ac9aaf55bbbd4f69b576619d2c11c57f275a830d933ae2fb383c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4f0f934eac0ef612526919794765d359c5a0f29ad43282042d080f51fc96c667->leave($__internal_4f0f934eac0ef612526919794765d359c5a0f29ad43282042d080f51fc96c667_prof);

        
        $__internal_23edae23e2ac9aaf55bbbd4f69b576619d2c11c57f275a830d933ae2fb383c6a->leave($__internal_23edae23e2ac9aaf55bbbd4f69b576619d2c11c57f275a830d933ae2fb383c6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
