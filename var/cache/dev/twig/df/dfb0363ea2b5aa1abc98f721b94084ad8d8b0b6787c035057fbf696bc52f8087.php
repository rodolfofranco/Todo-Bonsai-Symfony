<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_713984917fdd4d9a349163b903ec4ce0a2f56963f87d974c830135b6be70d571 extends Twig_Template
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
        $__internal_bc31869b1dba93f781c2852a2d80330fa5615d3c817c565717893d45db354325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc31869b1dba93f781c2852a2d80330fa5615d3c817c565717893d45db354325->enter($__internal_bc31869b1dba93f781c2852a2d80330fa5615d3c817c565717893d45db354325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_03ee9bd7def1d6d960ec2a2edf59c3342e27fde5d9b0ef818ead05e723c3dff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ee9bd7def1d6d960ec2a2edf59c3342e27fde5d9b0ef818ead05e723c3dff7->enter($__internal_03ee9bd7def1d6d960ec2a2edf59c3342e27fde5d9b0ef818ead05e723c3dff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bc31869b1dba93f781c2852a2d80330fa5615d3c817c565717893d45db354325->leave($__internal_bc31869b1dba93f781c2852a2d80330fa5615d3c817c565717893d45db354325_prof);

        
        $__internal_03ee9bd7def1d6d960ec2a2edf59c3342e27fde5d9b0ef818ead05e723c3dff7->leave($__internal_03ee9bd7def1d6d960ec2a2edf59c3342e27fde5d9b0ef818ead05e723c3dff7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
