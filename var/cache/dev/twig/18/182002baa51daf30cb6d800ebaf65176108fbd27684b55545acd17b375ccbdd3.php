<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1a49977e5395a82ac8a7750f8dddbbf2e834be1e31711ae2a638825303e6ad01 extends Twig_Template
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
        $__internal_2645135564e45100d7507e1ccffe2bed0b8b75b17eeecb00156ef259baaa11d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2645135564e45100d7507e1ccffe2bed0b8b75b17eeecb00156ef259baaa11d9->enter($__internal_2645135564e45100d7507e1ccffe2bed0b8b75b17eeecb00156ef259baaa11d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2993b3cbb10a3fecfb485ef680b0d010308853ee5abe059988788ae67fe2b0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2993b3cbb10a3fecfb485ef680b0d010308853ee5abe059988788ae67fe2b0dc->enter($__internal_2993b3cbb10a3fecfb485ef680b0d010308853ee5abe059988788ae67fe2b0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2645135564e45100d7507e1ccffe2bed0b8b75b17eeecb00156ef259baaa11d9->leave($__internal_2645135564e45100d7507e1ccffe2bed0b8b75b17eeecb00156ef259baaa11d9_prof);

        
        $__internal_2993b3cbb10a3fecfb485ef680b0d010308853ee5abe059988788ae67fe2b0dc->leave($__internal_2993b3cbb10a3fecfb485ef680b0d010308853ee5abe059988788ae67fe2b0dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
