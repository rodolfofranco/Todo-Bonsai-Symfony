<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_86b3c3e5f84ec3de242ddf571da0e436409615138873e0ffc3077f9dd18f0ed5 extends Twig_Template
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
        $__internal_7bdea5fddaf6ae64124d1d1d2522058784cd6ea872a01d4e7d8dead8fa1c30aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bdea5fddaf6ae64124d1d1d2522058784cd6ea872a01d4e7d8dead8fa1c30aa->enter($__internal_7bdea5fddaf6ae64124d1d1d2522058784cd6ea872a01d4e7d8dead8fa1c30aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_092ef735881f02538c248a9d0f15f33a85abb5fe287f2da8a555509e731fcade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092ef735881f02538c248a9d0f15f33a85abb5fe287f2da8a555509e731fcade->enter($__internal_092ef735881f02538c248a9d0f15f33a85abb5fe287f2da8a555509e731fcade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7bdea5fddaf6ae64124d1d1d2522058784cd6ea872a01d4e7d8dead8fa1c30aa->leave($__internal_7bdea5fddaf6ae64124d1d1d2522058784cd6ea872a01d4e7d8dead8fa1c30aa_prof);

        
        $__internal_092ef735881f02538c248a9d0f15f33a85abb5fe287f2da8a555509e731fcade->leave($__internal_092ef735881f02538c248a9d0f15f33a85abb5fe287f2da8a555509e731fcade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
