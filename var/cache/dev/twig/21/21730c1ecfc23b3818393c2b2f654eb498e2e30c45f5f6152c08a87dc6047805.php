<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c9bc84a19fabbd8e27d99cb8208e01dbbdb7715dad259eb49b3fa1b46e5148d5 extends Twig_Template
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
        $__internal_efee4ebe5b374801267d0adfeed800bd5f970020811e6d7cf298fcac8f488c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efee4ebe5b374801267d0adfeed800bd5f970020811e6d7cf298fcac8f488c17->enter($__internal_efee4ebe5b374801267d0adfeed800bd5f970020811e6d7cf298fcac8f488c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e728b9e77b4deaefca82fd61ead5b880b94243d36df0e96df80d11790464b7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e728b9e77b4deaefca82fd61ead5b880b94243d36df0e96df80d11790464b7d5->enter($__internal_e728b9e77b4deaefca82fd61ead5b880b94243d36df0e96df80d11790464b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_efee4ebe5b374801267d0adfeed800bd5f970020811e6d7cf298fcac8f488c17->leave($__internal_efee4ebe5b374801267d0adfeed800bd5f970020811e6d7cf298fcac8f488c17_prof);

        
        $__internal_e728b9e77b4deaefca82fd61ead5b880b94243d36df0e96df80d11790464b7d5->leave($__internal_e728b9e77b4deaefca82fd61ead5b880b94243d36df0e96df80d11790464b7d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
