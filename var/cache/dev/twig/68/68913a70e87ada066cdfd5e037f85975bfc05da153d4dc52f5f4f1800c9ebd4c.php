<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1ce16a6011d90660623ea833659dff81c3be7998ff0e02d4828cdf3b1d85117c extends Twig_Template
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
        $__internal_4fd4170404c7c3a805248fcd1b58a22ecac102c91707fec59d2d828b725f9b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd4170404c7c3a805248fcd1b58a22ecac102c91707fec59d2d828b725f9b00->enter($__internal_4fd4170404c7c3a805248fcd1b58a22ecac102c91707fec59d2d828b725f9b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ff33b3d2dea2c85e78077fc4ad1f96a974af400b819eeb8603ccac0e38fe204d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff33b3d2dea2c85e78077fc4ad1f96a974af400b819eeb8603ccac0e38fe204d->enter($__internal_ff33b3d2dea2c85e78077fc4ad1f96a974af400b819eeb8603ccac0e38fe204d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4fd4170404c7c3a805248fcd1b58a22ecac102c91707fec59d2d828b725f9b00->leave($__internal_4fd4170404c7c3a805248fcd1b58a22ecac102c91707fec59d2d828b725f9b00_prof);

        
        $__internal_ff33b3d2dea2c85e78077fc4ad1f96a974af400b819eeb8603ccac0e38fe204d->leave($__internal_ff33b3d2dea2c85e78077fc4ad1f96a974af400b819eeb8603ccac0e38fe204d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
