<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_020e0e5cef61a352d913c4249b53d766f5e1d00d8745c6c59df142c6398112c7 extends Twig_Template
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
        $__internal_cc738db4dbc32d64fdccab18a00d19afd728468f06ed0103f309bad129ab2012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc738db4dbc32d64fdccab18a00d19afd728468f06ed0103f309bad129ab2012->enter($__internal_cc738db4dbc32d64fdccab18a00d19afd728468f06ed0103f309bad129ab2012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_82ca949550c452567f125ff5295a55e8d5110ec3bc562a565d13d6eb4cc21ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ca949550c452567f125ff5295a55e8d5110ec3bc562a565d13d6eb4cc21ab7->enter($__internal_82ca949550c452567f125ff5295a55e8d5110ec3bc562a565d13d6eb4cc21ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cc738db4dbc32d64fdccab18a00d19afd728468f06ed0103f309bad129ab2012->leave($__internal_cc738db4dbc32d64fdccab18a00d19afd728468f06ed0103f309bad129ab2012_prof);

        
        $__internal_82ca949550c452567f125ff5295a55e8d5110ec3bc562a565d13d6eb4cc21ab7->leave($__internal_82ca949550c452567f125ff5295a55e8d5110ec3bc562a565d13d6eb4cc21ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
