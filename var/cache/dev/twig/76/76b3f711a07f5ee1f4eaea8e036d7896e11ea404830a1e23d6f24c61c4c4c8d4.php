<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_34b47bd1df203ea7f4138ad291afe334d91f6f4d6dcdef4eeb6e49f78f4838ea extends Twig_Template
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
        $__internal_0295d654f0ff263092684e062010e0d2099f1e35c1d13f566987b1f63c4b8016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0295d654f0ff263092684e062010e0d2099f1e35c1d13f566987b1f63c4b8016->enter($__internal_0295d654f0ff263092684e062010e0d2099f1e35c1d13f566987b1f63c4b8016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6d86811650ff40f3626a014afe8cfd19af2e7d755de9d23599824fb6d13623d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d86811650ff40f3626a014afe8cfd19af2e7d755de9d23599824fb6d13623d7->enter($__internal_6d86811650ff40f3626a014afe8cfd19af2e7d755de9d23599824fb6d13623d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0295d654f0ff263092684e062010e0d2099f1e35c1d13f566987b1f63c4b8016->leave($__internal_0295d654f0ff263092684e062010e0d2099f1e35c1d13f566987b1f63c4b8016_prof);

        
        $__internal_6d86811650ff40f3626a014afe8cfd19af2e7d755de9d23599824fb6d13623d7->leave($__internal_6d86811650ff40f3626a014afe8cfd19af2e7d755de9d23599824fb6d13623d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
