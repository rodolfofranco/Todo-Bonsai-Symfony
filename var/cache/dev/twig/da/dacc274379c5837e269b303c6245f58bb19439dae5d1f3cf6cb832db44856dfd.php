<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_31dd844eb093b73da61e315b6c11444d5183b33ab668bfa6357f586b78904800 extends Twig_Template
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
        $__internal_b68c5119fbfb3599d5a8392f01f483a3a24aed4f71a25a1949f2f2d79d920226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68c5119fbfb3599d5a8392f01f483a3a24aed4f71a25a1949f2f2d79d920226->enter($__internal_b68c5119fbfb3599d5a8392f01f483a3a24aed4f71a25a1949f2f2d79d920226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2fdf353c7c6e5e461a8a3d3ee4fa62bd6ef38df65351924c72de069441a6eabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdf353c7c6e5e461a8a3d3ee4fa62bd6ef38df65351924c72de069441a6eabd->enter($__internal_2fdf353c7c6e5e461a8a3d3ee4fa62bd6ef38df65351924c72de069441a6eabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b68c5119fbfb3599d5a8392f01f483a3a24aed4f71a25a1949f2f2d79d920226->leave($__internal_b68c5119fbfb3599d5a8392f01f483a3a24aed4f71a25a1949f2f2d79d920226_prof);

        
        $__internal_2fdf353c7c6e5e461a8a3d3ee4fa62bd6ef38df65351924c72de069441a6eabd->leave($__internal_2fdf353c7c6e5e461a8a3d3ee4fa62bd6ef38df65351924c72de069441a6eabd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
